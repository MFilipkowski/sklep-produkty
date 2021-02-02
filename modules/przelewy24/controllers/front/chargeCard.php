<?php
/**
 * Class przelewy24chargeCardModuleFrontController
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24chargeCardModuleFrontController
 */
class Przelewy24chargeCardModuleFrontController extends ModuleFrontController
{
    /**
     * Init content.
     *
     * @throws Exception
     */
    public function initContent()
    {
        parent::initContent();

        $valid = false;
        $createdPrestaShopOrder = false;

        $toolsIdCart = (int)Tools::getValue('id_cart');
        $toolsP24CardCustomerId = (int)Tools::getValue('p24_card_customer_id');
        if (!empty($toolsIdCart) && !empty($toolsP24CardCustomerId)) {
            $cartId = (int)Tools::getValue('id_cart');
            /** @var $order \PrestaShop\PrestaShop\Adapter\Entity\Order */
            $cart = new Cart($cartId);
            $currency = new Currency($cart->id_currency);
            $suffix = Przelewy24Helper::getSuffix($currency->iso_code);
            $customer = new Customer((int)($cart->id_customer));

            $cardId = (int)Tools::getValue('p24_card_customer_id');

            $creditCards = Przelewy24Recurring::findByCustomerId($customer->id);

            if (is_array($creditCards) && !empty($creditCards)) {
                foreach ($creditCards as $creditCard) {
                    if (isset($creditCard->id) && $cardId === (int)$creditCard->id) {
                        $refId = $creditCard->reference_id;
                        $p24Soap = Przelewy24SoapInterfaceFactory::getForSuffix($suffix);
                        $p24OrderId = $p24Soap->chargeCard(
                            filter_var(Configuration::get('P24_API_KEY' . $suffix), FILTER_SANITIZE_STRING),
                            filter_var($refId, FILTER_SANITIZE_STRING),
                            (int)Tools::getValue('p24_amount'),
                            filter_var(Tools::getValue('p24_currency'), FILTER_SANITIZE_STRING),
                            filter_var(Tools::getValue('p24_email'), FILTER_SANITIZE_STRING),
                            filter_var(Tools::getValue('p24_session_id'), FILTER_SANITIZE_STRING),
                            filter_var(Tools::getValue('p24_client'), FILTER_SANITIZE_STRING),
                            filter_var(Tools::getValue('p24_description'), FILTER_SANITIZE_STRING)
                        );
                        $orderId = Order::getIdByCartId($cartId);
                        if (!$orderId) {
                            $orderBeginingState = Configuration::get('P24_ORDER_STATE_1');
                            $amount = $cart->getOrderTotal(true, Cart::BOTH);
                            $this->module->validateOrder(
                                (int)$cart->id,
                                (int)$orderBeginingState,
                                (float)$amount,
                                $this->module->displayName,
                                null,
                                array(),
                                (int)$cart->id_currency,
                                false,
                                $customer->secure_key
                            );

                            $orderId = Order::getIdByCartId($cartId);

                            $servicePaymentOptions = new Przelewy24ServicePaymentOptions(new Przelewy24());
                            $servicePaymentOptions->setExtrachargeByOrderId($orderId);
                        }
                        if ($p24OrderId) {
                            $order = new Order($orderId);
                            $order->current_state = Configuration::get('P24_ORDER_STATE_2');
                            $order->update();
                            $history = new OrderHistory();
                            $history->id_order = $orderId;
                            $history->changeIdOrderState(Configuration::get('P24_ORDER_STATE_2'), $orderId);
                            $history->addWithemail(true);
                            $history->update();
                            $valid = true;
                            $createdPrestaShopOrder = true;
                        } else {
                            PrestaShopLogger::addLog('chargeCard response: ' . var_export($p24OrderId, true), 1);
                        }
                    }
                }
            }
        }

        if ($createdPrestaShopOrder) {
            $p24SessionId = filter_var(Tools::getValue('p24_session_id'), FILTER_SANITIZE_STRING);
            if (isset($p24OrderId) && isset($orderId) && $p24SessionId) {
                Przelewy24Order::saveOrder($p24OrderId, $orderId, $p24SessionId);
            } else {
                $msg = [];
                $msg[] = isset($p24OrderId) ? '' : 'no $p24OrderId';
                $msg[] = isset($orderId) ? '' : 'no $orderId';
                $msg[] = $p24SessionId ? '' : 'wrong $p24SessionId';
                $msg = join(';', $msg);
                PrestaShopLogger::addLog(__METHOD__ . ' Cannot create P24 order. Problems: ' . $msg);
            }
        }

        if ($valid) {
            Tools::redirect(
                $this->context->link->getModuleLink(
                    'przelewy24',
                    'paymentSuccessful',
                    array(),
                    '1' === (string)Configuration::get('PS_SSL_ENABLED')
                )
            );
        } else {
            Tools::redirect(
                $this->context->link->getModuleLink(
                    'przelewy24',
                    'paymentFailed',
                    array(),
                    '1' === (string)Configuration::get('PS_SSL_ENABLED')
                )
            );
        }
    }
}
