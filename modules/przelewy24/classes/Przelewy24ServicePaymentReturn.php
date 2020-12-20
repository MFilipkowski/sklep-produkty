<?php
/**
 * Class Przelewy24ServicePaymentReturn
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24ServicePaymentReturn
 */
class Przelewy24ServicePaymentReturn extends Przelewy24Service
{
    /**
     * hookPaymentReturn implementation.
     *
     * @param array $params
     *
     * @return array|bool Updated array of parameters is returned otherwise.
     * @throws Exception
     */
    public function execute($params)
    {
        if (!$this->getPrzelewy24()->active) {
            return false;
        }
        $lang = $this->getPrzelewy24()->getLangArray();
        $order = null;
        /** @var $order \PrestaShop\PrestaShop\Adapter\Entity\Order */
        if (is_array($params) && isset($params['order'])) {
            $order = $params['order'];
            $cart = Cart::getCartByOrderId($order->id);
        } elseif (isset($params->cart)) {
            $cart = $params->cart;
        }

        $this->getPrzelewy24()->getSmarty()->assign(
            'logo_url',
            $this->getPrzelewy24()->getPathUri() . 'views/img/logo.png'
        );

        $s_sid = md5(time());
        $servicePaymentOptions = new Przelewy24ServicePaymentOptions(new Przelewy24());

        $reference = '';
        $status = 'ok';

        if (isset($order) && ('przelewy24' === $order->module)) {
            if (!$order->hasInvoice() &&
                ((int)$order->current_state !== (int)Configuration::get('P24_ORDER_STATE_1'))
            ) {
                $order->setCurrentState((int)Configuration::get('P24_ORDER_STATE_1'));
            }
            $status = ($order->hasInvoice()) ? 'payment' : 'ok';
            $reference = $order->reference;
            $currency = new Currency($order->id_currency);
            $shipping = $cart->getPackageShippingCost((int)$order->id_carrier) * 100;
            $amount = Przelewy24Helper::p24AmountFormat($order->total_paid);
            $products = $order->getProducts();
            $productsInfo = array();
            foreach ($products as $value) {
                $product = new Product($value['product_id']);
                $productsInfo[] = array(
                    'name' => $product->name[1],
                    'description' => $product->description_short[1],
                    'quantity' => (int)$value['product_quantity'],
                    'price' => (int)($value['product_price'] * 100),
                    'number' => $value['product_id'],
                );
            }

            $customerId = $order->id_customer;
            $description = $lang["Order"] . ': ' . $order->id;
            $IdLang = $cart->id_lang;
            $totalToPay = Tools::displayPrice(
                Przelewy24Helper::p24AmountFormat($order->total_paid) / 100,
                $currency,
                false
            );

            if (!$servicePaymentOptions->hasExtrachargeOrder($order->id)) {
                $servicePaymentOptions->setExtracharge($order);
            }

            $extracharge = $servicePaymentOptions->getExtrachargeOrder($order->id);
            $currency = new Currency($order->id_currency);
            $currencySign = $currency->sign;
        } else {
            $currency = new Currency($cart->id_currency);
            $shipping = $cart->getPackageShippingCost((int)$cart->id_carrier) * 100;
            $amount = Przelewy24Helper::p24AmountFormat($cart->getOrderTotal(true, Cart::BOTH));
            $products = $cart->getProducts();
            $productsInfo = array();
            foreach ($products as $product) {
                $productsInfo[] = array(
                    'name' => $product['name'],
                    'description' => $product['description_short'],
                    'quantity' => (int)$product['cart_quantity'],
                    'price' => (int)($product['price'] * 100),
                    'number' => $product['id_product'],
                );
            }
            $customerId = $cart->id_customer;
            $description = $lang["Cart"] . ': ' . $cart->id;
            $IdLang = $cart->id_lang;

            $suffix = Przelewy24Helper::getSuffix($currency->iso_code);
            $extracharge = $servicePaymentOptions->getExtraCharge(
                $cart->getOrderTotal(true, Cart::BOTH),
                $suffix
            );
            $totalToPay = Tools::displayPrice(
                $cart->getOrderTotal(true, Cart::BOTH) + $extracharge,
                $currency,
                false
            );
            if (0 === (int)$amount) {
                $status = 'payment';
            }

            $currencySign = $currency->sign;
        }

        $suffix = Przelewy24Helper::getSuffix($currency->iso_code);

        $p24Class = Przelewy24ClassInterfaceFactory::getForSuffix($suffix);
        /** @var Przelewy24Soap $p24Soap */
        $p24Soap = Przelewy24SoapInterfaceFactory::getForSuffix($suffix);

        $sessionId = $cart->id . '|' . $s_sid;
        $customer = new Customer((int)($customerId));

        $translations = array(
            'virtual_product_name' => $lang['Extra charge [VAT and discounts]'],
            'cart_as_product' => $lang['Your order'],
        );
        $p24Product = new Przelewy24Product($translations);
        $p24ProductItems = $p24Product->prepareCartItems($amount, $productsInfo, $shipping);

        $addresses = $customer->getAddresses((int)Configuration::get('PS_LANG_DEFAULT'));
        $addressObj = array_pop($addresses);
        $address = new Address((int)$addressObj['id_address']);
        $s_lang = new Country((int)($address->id_country));

        $data = array(
            'p24_session_id' => $sessionId,
            'p24_merchant_id' => Configuration::get('P24_MERCHANT_ID' . $suffix),
            'p24_pos_id' => Configuration::get('P24_SHOP_ID' . $suffix),
            'p24_email' => $customer->email,
            'p24_address' => $address->address1 . " " . $address->address2,
            'p24_zip' => $address->postcode,
            'p24_city' => $address->city,
            'p24_country' => $s_lang->iso_code,
            'p24_amount' => $amount,
            'p24_currency' => $currency->iso_code,
            'shop_name' => $this->getPrzelewy24()->getContext()->shop->name,
            'p24_description' => $description,
            'cartId' => $cart->id,
            'status' => $status,
            'p24_url' => $p24Class->trnDirectUrl(),
            'p24_url_status' => $this->getPrzelewy24()->getContext()->link->getModuleLink(
                'przelewy24',
                'paymentStatus',
                $order ? ['id_order' => $order->id] : ['id_cart' => $cart->id],
                '1' === Configuration::get('PS_SSL_ENABLED')
            ),
            'p24_url_return' => $this->getPrzelewy24()->getContext()->link->getModuleLink(
                'przelewy24',
                'paymentFinished',
                $order ? ['id_order' => $order->id] : ['id_cart' => $cart->id],
                '1' === Configuration::get('PS_SSL_ENABLED')
            ),
            'p24_api_version' => P24_VERSION,
            'p24_ecommerce' => 'prestashop_' . _PS_VERSION_,
            'p24_ecommerce2' => Configuration::get('P24_PLUGIN_VERSION'),
            'p24_language' => Tools::strtolower(Language::getIsoById($IdLang)),
            'p24_client' => $customer->firstname . ' ' . $customer->lastname,
            'p24ProductItems' => $p24ProductItems,
            'p24_wait_for_result' => 0,
            'p24_shipping' => $shipping,
            'total_to_pay' => $totalToPay,
            'pay_card_inside_shop' => (int)Configuration::get('P24_PAY_CARD_INSIDE_ENABLE' . $suffix),
            'customer_is_guest' => (int)$customer->is_guest,
            'logo_url' => $this->getPrzelewy24()->getPathUri() . 'views/img/logo.png',
            'validationRequired' => Configuration::get('P24_VERIFYORDER' . $suffix),
            'validationLink' => $this->getPrzelewy24()->getContext()->link->getModuleLink(
                'przelewy24',
                'validateOrderRequest',
                array(),
                '1' === Configuration::get('PS_SSL_ENABLED')
            ),
            'accept_in_shop' => (bool)Configuration::get('P24_ACCEPTINSHOP_ENABLE' . $suffix),
        );

        $data['p24_sign'] = $p24Class->trnDirectSign($data);
        $data['p24_paymethod_graphics'] = Configuration::get('P24_GRAPHICS_PAYMENT_METHOD_LIST' . $suffix);
        $data['nav_more_less_path'] = dirname($this->getPrzelewy24()->getBaseFile()) .
            '/views/templates/hook/parts/nav_more_less.tpl';
        $data['reference'] = $reference;
        $paymentMethod = (int)Tools::getValue('payment_method');
        if ($paymentMethod > 0 && Configuration::get('P24_PAYMENT_METHOD_LIST' . $suffix)) {
            $paymentMethod = (int)Tools::getValue('payment_method');
            $promotePaymethodList = $p24Soap->getPromotedPaymentList(
                Configuration::get('P24_API_KEY' . $suffix),
                $currency->iso_code
            );
            if (!empty($promotePaymethodList['p24_paymethod_list_promote']) &&
                !empty($promotePaymethodList['p24_paymethod_list_promote'][$paymentMethod])) {
                $data['payment_method_selected_name'] =
                    $promotePaymethodList['p24_paymethod_list_promote'][$paymentMethod];
            } else {
                $paymentMethod = 0;// not available method
            }
        }

        $data['payment_method_selected_id'] = $paymentMethod;
        $data['card_remember_input'] = false;
        $data['remember_customer_cards'] = Przelewy24CustomerSetting::initialize($customer->id)->card_remember;

        // oneClick
        if (Przelewy24OneClickHelper::isOneClickEnable($suffix)) {
            if (0 === $paymentMethod || in_array($paymentMethod, Przelewy24OneClickHelper::getCardPaymentIds())) {
                $data['card_remember_input'] = true;
            }


            $data['p24_ajax_notices_url'] = $this->getPrzelewy24()->getContext()->link->getModuleLink(
                'przelewy24',
                'ajaxNotices',
                array('card_remember' => 1),
                '1' === Configuration::get('PS_SSL_ENABLED')
            );
            $data['customer_cards'] = Przelewy24Recurring::findArrayByCustomerId($customer->id);
            $data['charge_card_url'] = $this->getPrzelewy24()->getContext()->link->getModuleLink(
                'przelewy24',
                'chargeCard',
                array('id_cart' => (int)$cart->id)
            );
        }

        if ($paymentMethod) {
            $data['P24_PAYMENT_METHOD_LIST'] = false;
        } else {
            $data['P24_PAYMENT_METHOD_LIST'] = Configuration::get('P24_PAYMENT_METHOD_LIST' . $suffix);
        }

        if (Configuration::get('P24_PAYMENT_METHOD_LIST' . $suffix)) {
            // payments method list and order
            $paymethodList = $p24Soap->getFirstAndSecondPaymentList(
                Configuration::get('P24_API_KEY' . $suffix),
                $currency->iso_code
            );

            $data['p24_paymethod_list_first'] = $paymethodList['p24_paymethod_list_first'];
            $data['p24_paymethod_list_second'] = $paymethodList['p24_paymethod_list_second'];
            $data['p24_paymethod_description'] = $p24Soap->replacePaymentDescriptionsListToOwn(
                $p24Soap->availablePaymentMethods(Configuration::get('P24_API_KEY' . $suffix)),
                $suffix
            );
        }

        $data['p24_method'] = false;
        // Payment with BLIK UID
        if ('UID' === Tools::getValue('blik_type')) {
            $blikAlias = false;
            if ($customer->id) {
                $blikAlias = Przelewy24BlikHelper::getSavedAlias($customer);
            }

            $data['p24_method'] = 'blik_uid';
            $data['P24_PAYMENT_METHOD_LIST'] = false;
            $data['card_remember_input'] = false;
            $data['p24_blik_code'] = true;
            $data['p24_blik_alias'] = $blikAlias;
            $data['p24_url'] = $this->getPrzelewy24()->getContext()->link->getModuleLink(
                'przelewy24',
                'chargeBlik',
                array('id_order' => (int)Tools::getValue('id_order'))
            );
            $data['p24_blik_websocket'] = Przelewy24BlikHelper::getWebsocketHost(
                (bool)Configuration::get('P24_TEST_MODE' . $suffix)
            );
            $data['p24_shop_order_id'] = (int)Tools::getValue('id_order');

            $data['p24_payment_failed_url'] = $this->getPrzelewy24()->getContext()->link->getModuleLink(
                'przelewy24',
                'paymentFailed',
                array('id_order' => (int)Tools::getValue('id_order'))
            );

            $data['p24_blik_ajax_verify_url'] = $this->getPrzelewy24()->getContext()->link->getModuleLink(
                'przelewy24',
                'ajaxVerifyBlik'
            );

            $data['p24_blik_error_url'] = $this->getPrzelewy24()->getContext()->link->getModuleLink(
                'przelewy24',
                'ajaxBlikError'
            );
        }

        if (!$order) {
            $data['p24_amount'] = $data['p24_amount'] + ($extracharge * 100);
        }
        $data['extracharge'] = $extracharge;
        $data['extrachargeFormatted'] = number_format($extracharge, 2, ',', ' ');
        $data['currencySign'] = $currencySign;
        $data['p24_sign'] = $p24Class->trnDirectSign($data);
        if ((0 === (int)Configuration::get('P24_VERIFYORDER' . $suffix)) || isset($order)) {
            return $this->getPrzelewy24()->getSmarty()->assign($data);
        }

        return $data;
    }
}
