<?php
/**
 * Class przelewy24paymentConfirmationModuleFrontController
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24paymentConfirmationModuleFrontController
 */
class Przelewy24paymentConfirmationModuleFrontController extends ModuleFrontController
{
    /**
     * Post process.
     */
    public function postProcess()
    {
        $smarty = Context::getContext()->smarty;
        $cart = $this->context->cart;
        $currency = $this->context->currency;
        if ((0 === (int)$cart->id_customer) || (0 === (int)$cart->id_address_delivery) ||
            (0 === (int)$cart->id_address_invoice) || !$this->module->active) {
            Tools::redirect('index.php?controller=order&step=1');
        }
        $servicePaymentOptions = new Przelewy24ServicePaymentOptions(new Przelewy24());
        $suffix = Przelewy24Helper::getSuffix($currency->iso_code);

        $customer = new Customer($cart->id_customer);

        if (!Validate::isLoadedObject($customer)) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        $total = (float)$cart->getOrderTotal(true, Cart::BOTH);
        $idOrderState = (int)Configuration::get('P24_ORDER_STATE_1');

        $paymentMethod = '';
        if (Tools::getValue('payment_method') && (int)Tools::getValue('payment_method') > 0) {
            $paymentMethod = '&payment_method=' . (int)Tools::getValue('payment_method');
        }

        if (0 === (int)Configuration::get('P24_VERIFYORDER' . $suffix)) {
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

            $currentOrderId = (int)$this->module->currentOrder;
            if (!$servicePaymentOptions->hasExtrachargeOrder($currentOrderId)) {
                $servicePaymentOptions->setExtrachargeByOrderId($currentOrderId);
            }

            Tools::redirect(
                'index.php?controller=order-confirmation&id_cart=' . (int)$cart->id .
                '&id_module=' . (int)$this->module->id .
                '&id_order=' . (int)$this->module->currentOrder .
                '&key=' . $customer->secure_key . $paymentMethod
            );
        }

        $service = new Przelewy24ServicePaymentReturn(new Przelewy24());
        $data = $service->execute($this->context);

        $przelewy24 = new Przelewy24();
        $protocol = $przelewy24->getProtocol();
        $smarty->assign(
            'base_url',
            $protocol . htmlspecialchars($_SERVER['HTTP_HOST'], ENT_COMPAT, 'UTF-8') . __PS_BASE_URI__
        );
        $smarty->assign($data);
        $this->setTemplate('module:przelewy24/views/templates/front/payment_confirmation.tpl');
    }
}
