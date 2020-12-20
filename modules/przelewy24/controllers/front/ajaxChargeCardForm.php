<?php
/**
 * Class przelewy24ajaxChargeCardFormModuleFrontController
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/gpl.html
 *
*/

/**
 * Class Przelewy24ajaxChargeCardFormModuleFrontController
 */
class Przelewy24ajaxChargeCardFormModuleFrontController extends ModuleFrontController
{
    /**
     * Init content.
     */
    public function initContent()
    {
        parent::initContent();

        try {
            $response = $this->doChargeCard();
        } catch (Exception $e) {
            PrestaShopLogger::addLog(
                'przelewy24ajaxChargeCardFormModuleFrontController - ' .
                json_encode(array( 'exception' => $e->getMessage() )),
                1
            );

            $response = array();
        }
        exit(json_encode($response));
    }

    /**
     * Charges card.
     *
     * @return array
     *
     * @throws Exception
     */
    private function doChargeCard()
    {
        $cartId = (int)Tools::getValue('cartId', 0);

        $przelewy24 = new Przelewy24();

        if ('cardCharge' !== Tools::getValue('action') || $cartId < 0) {
            throw new Exception($przelewy24->getLangString('Invalid request'));
        }

        /** @var $cart \PrestaShop\PrestaShop\Adapter\Entity\Order */
        $cart = new Cart($cartId);

        if (!$cart) {
            throw new Exception($przelewy24->getLangString('Invalid cart ID'));
        }
        $orderId = Order::getIdByCartId($cartId);
        $order = new Order($orderId);
        $extracharge = 0;
        if ($orderId && 'przelewy24' === $order->module) {
            $currency = new Currency($order->id_currency);
            $shipping = $cart->getPackageShippingCost((int)$order->id_carrier) * 100;
            $amount = Przelewy24Helper::p24AmountFormat($order->total_paid);
            $products = $order->getProducts();
            $customerId = $order->id_customer;
            $description = $przelewy24->getLangString("Order") . ': ' . $order->id;
        } else {
            $currency = new Currency($cart->id_currency);
            $suffix = Przelewy24Helper::getSuffix($currency->iso_code);

            $shipping = $cart->getPackageShippingCost((int)$cart->id_carrier) * 100;
            $amount = Przelewy24Helper::p24AmountFormat($cart->getOrderTotal(true, Cart::BOTH));

            $servicePaymentOptions = new Przelewy24ServicePaymentOptions(new Przelewy24());
            $extracharge = $servicePaymentOptions->getExtracharge(
                $cart->getOrderTotal(true, Cart::BOTH),
                $suffix
            ) * 100;

            $products = $cart->getProducts();
            $customerId = $cart->id_customer;
            $description = $przelewy24->getLangString("Cart") . ': ' . $cart->id;
        }

        $customer = new Customer($customerId);

        if (empty($this->context->customer->id) || empty($cart->id_customer) ||
            (int)$this->context->customer->id !== (int)$cart->id_customer) {
            if (empty($cart->id_customer) || !$customer) {
                throw new Exception($przelewy24->getLangString('Order not exist for this customer'));
            }
        }

        $my_currency_iso_code = $currency->iso_code;
        $suffix = Przelewy24Helper::getSuffix($my_currency_iso_code);
        $p24_session_id = $cart->id . '|' . md5(time());

        // products cart
        $productsInfo = array();

        foreach ($products as $product) {
            if (!is_array($product)) {
                $product = array();
            }
            $product = array_merge(array(
                'name' => null,
                'description_short' => null,
                'cart_quantity' => null,
                'price' => null,
                'id_product' => null,
            ), $product);
            $productsInfo[] = array(
                'name' => $product['name'],
                'description' => $product['description_short'],
                'quantity' => (int)$product['cart_quantity'],
                'price' => null !== $product['price'] ? (int)($product['price'] * 100) : null,
                'number' => (int)$product['id_product'],
            );
        }

        $translations = array(
            'virtual_product_name' => $przelewy24->getLangString('Extra charge [VAT and discounts]'),
            'cart_as_product' => $przelewy24->getLangString('Your order'),
        );
        $p24Product = new Przelewy24Product($translations);
        $p24ProductItems = $p24Product->prepareCartItems($amount, $productsInfo, $shipping);


        $addresses = $customer->getAddresses((int)Configuration::get('PS_LANG_DEFAULT'));
        $addressObj = array_pop($addresses);
        $address = new Address((int)$addressObj['id_address']);

        $s_lang = new Country((int)($address->id_country));
        $iso_code = $this->context->language->iso_code;

        $url_status = $this->context->link->getModuleLink(
            'przelewy24',
            'paymentStatus',
            $orderId ? ['id_order' => $orderId] : ['id_cart'=> $cartId ],
            '1' === (string)Configuration::get('PS_SSL_ENABLED')
        );

        $P24C = Przelewy24ClassInterfaceFactory::getForSuffix($suffix);

        if ($extracharge > 0) {
            $amount = $amount + $extracharge;
        }
        $post_data = array(
            'p24_merchant_id' => Configuration::get('P24_MERCHANT_ID' . $suffix),
            'p24_pos_id' => Configuration::get('P24_SHOP_ID' . $suffix),
            'p24_session_id' => $p24_session_id,
            'p24_amount' => $amount,
            'p24_currency' => $my_currency_iso_code,
            'p24_description' => $description,
            'p24_email' => $customer->email,
            'p24_client' => $customer->firstname . ' ' . $customer->lastname,
            'p24_address' => $address->address1 . " " . $address->address2,
            'p24_zip' => $address->postcode,
            'p24_city' => $address->city,
            'p24_country' => $s_lang->iso_code,
            'p24_language' => Tools::strtolower($iso_code),
            'p24_url_return' => $this->context->link->getModuleLink(
                'przelewy24',
                'paymentFinished',
                $orderId ? ['id_order' => $orderId] : ['id_cart'=> $cartId ],
                '1' === (string)Configuration::get('PS_SSL_ENABLED')
            ),
            'p24_url_status' => $url_status,
            'p24_api_version' => P24_VERSION,
            'p24_ecommerce' => 'prestashop_' . _PS_VERSION_,
            'p24_ecommerce2' => Configuration::get('P24_PLUGIN_VERSION'),
            'p24_shipping' => $shipping,
        );

        $post_data += $p24ProductItems;

        foreach ($post_data as $k => $v) {
            $P24C->addValue($k, $v);
        }

        $token = $P24C->trnRegister();
        $p24_sign = $P24C->trnDirectSign($post_data);
        if (is_array($token) && !empty($token['token'])) {
            $token = $token['token'];
            return array(
                'p24jsURL' => $P24C->getHost() . 'inchtml/card/register_card_and_pay/ajax.js?token=' . $token,
                'p24cssURL' => $P24C->getHost() . 'inchtml/card/register_card_and_pay/ajax.css',
                'p24_sign' => $p24_sign,
                'sessionId' => $p24_session_id,
                'client_id' => $customer->id
            );
        }

        throw new Exception($przelewy24->getLangString('Failed transaction registration in Przelewy24'));
    }
}
