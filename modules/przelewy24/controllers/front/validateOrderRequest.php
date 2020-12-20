<?php
/**
 * Class przelewy24validateOrderRequestModuleFrontController
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24validateOrderRequestModuleFrontController
 */
class Przelewy24validateOrderRequestModuleFrontController extends ModuleFrontController
{
    /**
     * Init content.
     */
    public function initContent()
    {
        parent::initContent();

        /** @var CartCore $cart */
        $cart = Context::getContext()->cart;
        /** @var CustomerCore $customer */
        $customer = Context::getContext()->customer;

        $requestCartId = (int)Tools::getValue('cartId');

        $currency = new Currency($cart->id_currency);

        $suffix = Przelewy24Helper::getSuffix($currency->iso_code);

        if ($requestCartId === (int)$cart->id) {
            if ($cart && (2 === (int)Configuration::get('P24_VERIFYORDER' . $suffix))) {
                $orderId = (int)Order::getIdByCartId($cart->id);

                if (!$cart->OrderExists()) {
                    $amount = $cart->getOrderTotal(true, Cart::BOTH);

                    $orderBeginingState = Configuration::get('P24_ORDER_STATE_1');

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
                    $servicePaymentOptions = new Przelewy24ServicePaymentOptions(new Przelewy24());
                    $servicePaymentOptions->setExtrachargeByOrderId($orderId);
                }


                Przelewy24Helper::renderJson(
                    array(
                        'orderId' => $orderId,
                        'description' => $this->module->l('Order') . ' ' . $orderId,
                    )
                );
            }
        }
        Przelewy24Helper::renderJson(array());
    }
}
