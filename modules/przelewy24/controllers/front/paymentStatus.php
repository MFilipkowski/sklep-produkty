<?php
/**
 * Class przelewy24paymentStatusModuleFrontController
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/gpl.html
 *
 */

/**
 * Class Przelewy24paymentStatusModuleFrontController
 */
class Przelewy24paymentStatusModuleFrontController extends ModuleFrontController
{
    /**
     * Process change of payment status.
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function postProcess()
    {
        try {
            $this->postProcessInternal();
        } catch (Przelewy24HttpException $ex) {
            header('HTTP/1.1 ' . $ex->getCode() . ' ' . $ex->getMessage());
            header('Content-Type: text/plain');
            echo $ex->getCode(), ' ', $ex->getMessage();
        }
        exit;
    }

    /**
     * Internal code to process change of payment status.
     *
     * @throws Przelewy24HttpException
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    private function postProcessInternal()
    {
        $logMessage = 'postProcess ' . var_export($_POST, true);
        if (Tools::strlen($logMessage) >= Przelewy24Logger::LOG_MESSAGE_LIMIT) {
            throw new Przelewy24HttpException('Payload Too Large', 413);
        }
        PrestaShopLogger::addLog($logMessage, 1);
        if (Tools::getValue('p24_session_id')) {
            PrestaShopLogger::addLog('przelewy24paymentStatusModuleFrontController', 1);

            list($cartId) = explode('|', Tools::getValue('p24_session_id'), 1);
            $cartId = (int)$cartId;

            $cart = new Cart($cartId);

            if (empty($cart) || !isset($cart->id) || $cartId < 1) {
                throw new Przelewy24HttpException('Not Found', 404);
            }

            Context::getContext()->currency = Currency::getCurrencyInstance((int)$cart->id_currency);

            $orderId = Order::getIdByCartId($cart->id);

            $total = (float)$cart->getOrderTotal(true, Cart::BOTH);
            $idOrderState = (int)Configuration::get('P24_ORDER_STATE_1');
            $customer = new Customer($cart->id_customer);
            $currency = new Currency($cart->id_currency);

            $addExtracharge = 0;
            if (!$orderId) {
                $this->module->validateOrder(
                    (int)$cart->id,
                    $idOrderState,
                    $total,
                    $this->module->displayName,
                    null,
                    array(),
                    (int)$currency->id,
                    false,
                    $customer->secure_key
                );
                $addExtracharge = 1;
                $orderId = Order::getIdByCartId($cart->id);
            }

            if (1 === $addExtracharge) {
                $servicePaymentOptions = new Przelewy24ServicePaymentOptions(new Przelewy24());
                $servicePaymentOptions->setExtrachargeByOrderId($orderId);
            }
            $order = new Order($orderId);

            $amount = Przelewy24Helper::p24AmountFormat($order->total_paid);
            $currency = new Currency($order->id_currency);
            $suffix = Przelewy24Helper::getSuffix($currency->iso_code);
            $validation = array('p24_amount' => $amount, 'p24_currency' => $currency->iso_code);

            $P24C = Przelewy24ClassInterfaceFactory::getForSuffix($suffix);

            $trnVerify = $P24C->trnVerifyEx($validation);
            PrestaShopLogger::addLog('postProcess trnVerify' . var_export($trnVerify, true), 1);

            if (true === $trnVerify) {
                $order->setCurrentState((int)Configuration::get('P24_ORDER_STATE_2'));
                Przelewy24Order::saveOrder(
                    Tools::getValue('p24_order_id'),
                    $order->id,
                    Tools::getValue('p24_session_id')
                );
                if (Przelewy24OneClickHelper::isOneClickEnable($suffix)
                    && in_array((int)Tools::getValue('p24_method'), Przelewy24OneClickHelper::getCardPaymentIds())
                ) {
                    if (Przelewy24CustomerSetting::initialize($order->id_customer)->card_remember) {
                        $p24Soap = Przelewy24SoapInterfaceFactory::getForSuffix($suffix);
                        $p24OrderId = (int)Tools::getValue('p24_order_id');
                        if (Configuration::get('P24_ONECLICK_ENABLE' . $suffix)) {
                            $res = $p24Soap->getCardReferenceOneClickWithCheckCard(
                                Configuration::get('P24_API_KEY' . $suffix),
                                $p24OrderId
                            );
                            if (!empty($res)) {
                                $expires = Tools::substr($res->cardExp, 2, 2) . Tools::substr($res->cardExp, 0, 2);
                                if (date('ym') <= $expires) {
                                    Przelewy24Recurring::remember(
                                        $order->id_customer,
                                        $res->refId,
                                        $expires,
                                        $res->mask,
                                        $res->cardType
                                    );
                                } else {
                                    PrestaShopLogger::addLog(
                                        'Error: expiration date  ' . var_export(
                                            $expires,
                                            true
                                        ),
                                        1
                                    );
                                }
                            }
                        }
                    } else {
                        PrestaShopLogger::addLog('Nie pamiętaj karty dla userID: ' . $order->id_customer, 1);
                    }
                }
            } else {
                $order->setCurrentState((int)Configuration::get('PS_OS_ERROR'));
            }
        }
    }
}
