<?php
/**
 * Class przelewy24chargeBlikModuleFrontController
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24chargeBlikModuleFrontController
 */
class Przelewy24chargeBlikModuleFrontController extends ModuleFrontController
{
    /**
     * Order.
     *
     * @var Order
     */
    private $order;

    /**
     * Session id.
     *
     * @var string
     */
    private $p24_session_id;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * Amount.
     *
     * @var string
     */
    private $amount;

    /**
     * Shop customer.
     *
     * @var Customer
     */
    private $customer;

    /**
     * Currency code.
     *
     * @var string
     */
    private $currencyCode;

    /**
     * Url for site with payment status.
     *
     * @var string
     */
    private $url_status;

    /**
     * Init content.
     *
     * @throws Exception
     */
    public function initContent()
    {
        parent::initContent();

        if (Tools::getValue('id_order')) {
            $this->order = new Order((int)Tools::getValue('id_order'));
            $this->amount = Przelewy24Helper::p24AmountFormat($this->order->getOrdersTotalPaid());
            $customerId = $this->order->id_customer;

            $cookie = $this->context->cookie;

            // Removes remembered token of transaction when there is new transaction active.
            if (isset($cookie->token) && ((int)$cookie->tokenOrderId !== (int)Tools::getValue('id_order'))) {
                $cookie->__unset('token');
                $cookie->__unset('tokenOrderId');
            }

            $this->url_status = Context::getContext()->link->getModuleLink(
                'przelewy24',
                'paymentStatus',
                array('id_order' => $this->order->id),
                '1' === (string)Configuration::get('PS_SSL_ENABLED')
            );

            $currency = new CurrencyCore($cookie->id_currency);
            $this->currencyCode = $currency->iso_code;

            $this->customer = new Customer((int)($customerId));
            $this->p24_session_id = $this->order->id . '|' . md5(time());
            $this->description = 'Blik UID payment';

            // Gets alias from database, when it exists and user is logged in.
            $p24BlikSoap = Przelewy24BlikSoapInterfaceFactory::getDefault();
            $savedAlias = false;
            if ($this->context->customer->isLogged()) {
                $savedAlias = Przelewy24BlikHelper::getSavedAlias($this->customer);
            }
            $aliasAlternatives = false;
            $alternativeKeys = Tools::getValue('alternativeKey');
            if ($savedAlias && ('false' === Tools::getValue('blikCode')) && $alternativeKeys) {
                // Another transaction of already remembered user.
                $paymentResult = $p24BlikSoap->executePaymentByUIdWithAlternativeKey(
                    $savedAlias,
                    $this->amount,
                    $this->currencyCode,
                    $this->customer->email,
                    $this->p24_session_id,
                    $this->customer->firstname . ' ' . $this->customer->lastname,
                    $this->description,
                    $alternativeKeys,
                    json_encode(array('url_status' => $this->url_status))
                );
            } elseif ($savedAlias && ('false' === Tools::getValue('blikCode'))) {
                // Another transaction of already remembered user.
                $paymentResult = $p24BlikSoap->executePaymentByUid(
                    $savedAlias,
                    $this->amount,
                    $this->currencyCode,
                    $this->customer->email,
                    $this->p24_session_id,
                    $this->customer->firstname . ' ' . $this->customer->lastname,
                    $this->description,
                    json_encode(array('url_status' => $this->url_status))
                );

                if (isset($paymentResult['error']) &&
                    ((int)$paymentResult['error'] === Przelewy24BlikErrorEnum::ERR_ALIAS_IDENTIFICATION)) {
                    $aliasAlternatives = $paymentResult['aliasAlternatives'];
                }
            } elseif ($savedAlias && ('true' === Tools::getValue('declinedAlias'))) {
                // Transaction with alias AND blickCode (when alias was rejeced by websocket).
                $paymentResult = $p24BlikSoap->executePaymentByUidWithBlikCode(
                    $savedAlias,
                    $this->amount,
                    $this->currencyCode,
                    $this->customer->email,
                    $this->p24_session_id,
                    $this->customer->firstname . ' ' . $this->customer->lastname,
                    $this->description,
                    pSQL(Tools::getValue('blikCode')),
                    json_encode(array('url_status' => $this->url_status))
                );
            } else {
                // Registering transaction / getting saved token.
                if (Tools::getValue('blikCodeCheck') && !Tools::getValue('declinedAlias')) {
                    if (!isset($cookie->token)) {
                        $token = $this->registerBlikTransaction();
                        $cookie->__set('token', $token['token']);
                        $cookie->__set('tokenOrderId', Tools::getValue('id_order'));
                    } else {
                        $token['token'] = $cookie->token;
                    }
                } else {
                    $token = $this->registerBlikTransaction();
                }

                // Transaction of not remembered user or guest.
                $paymentResult = $p24BlikSoap->executePaymentAndCreateUid(
                    pSQL(Tools::getValue('blikCode')),
                    $token['token']
                );

                if ($paymentResult['success'] && $this->context->customer->isLogged()) {
                    $model = Przelewy24BlikAlias::prepareEmptyModel($customerId);
                    $model->last_order_id = $paymentResult['orderId'];
                    $model->save();
                }
            }

            Przelewy24Order::saveOrder($paymentResult['orderId'], $this->order->id, $this->p24_session_id);

            if ($paymentResult['success']) {
                $response = array(
                    'urlSuccess' => $this->context->link->getModuleLink(
                        'przelewy24',
                        'paymentSuccessful',
                        array(),
                        '1' === (string)Configuration::get('PS_SSL_ENABLED')
                    ),
                    'status' => 'success',
                    'orderId' => $paymentResult['orderId'],
                    'error' => false,
                );
            } else {
                $status = $paymentResult['error'];
                $error = new Przelewy24BlikErrorEnum($this);
                $response = array(
                    'urlFail' => $this->context->link->getModuleLink(
                        'przelewy24',
                        'paymentFailed',
                        array('errorCode' => $paymentResult['error'], 'order_id' => $this->order->id),
                        '1' === (string)Configuration::get('PS_SSL_ENABLED')
                    ),
                    'status' => $status,
                    'aliasAlternatives' => $aliasAlternatives,
                    'error' => $error->getErrorMessage($status)->toArray(),
                );
            }
            echo json_encode($response);
        }
        exit;
    }

    /**
     * Register blik transaction.
     *
     * @return array
     *
     * @throws Exception
     */
    private function registerBlikTransaction()
    {
        $p24Class = Przelewy24ClassBlikInterfaceFactory::getDefault();

        $addresses = $this->customer->getAddresses((int)Configuration::get('PS_LANG_DEFAULT'));
        $addressObj = array_pop($addresses);
        $address = new Address((int)$addressObj['id_address']);

        $s_lang = new Country((int)($address->id_country));
        $iso_code = Context::getContext()->language->iso_code;

        $customerName = $this->customer->firstname . ' ' . $this->customer->lastname;
        $successUrl = Context::getContext()->link->getModuleLink(
            'przelewy24',
            'paymentSuccess',
            array(),
            '1' === (string)Configuration::get('PS_SSL_ENABLED')
        );

        $post_data = array(
            'p24_merchant_id' => Configuration::get('P24_MERCHANT_ID'),
            'p24_pos_id' => Configuration::get('P24_SHOP_ID'),
            'p24_session_id' => $this->p24_session_id,
            'p24_amount' => $this->amount,
            'p24_currency' => $this->currencyCode,
            'p24_description' => $this->description,
            'p24_email' => $this->customer->email,
            'p24_client' => $customerName,
            'p24_address' => $address->address1 . ' ' . $address->address2,
            'p24_zip' => $address->postcode,
            'p24_city' => $address->city,
            'p24_country' => $s_lang->iso_code,
            'p24_language' => Tools::strtolower($iso_code),
            'p24_url_return' => $successUrl,
            'p24_url_status' => $this->url_status,
            'p24_api_version' => P24_VERSION,
            'p24_ecommerce' => 'prestashop_' . _PS_VERSION_,
            'p24_ecommerce2' => Configuration::get('P24_PLUGIN_VERSION'),
            'p24_shipping' => 0,
            'p24_name_1' => $this->description,
            'p24_description_1' => '',
            'p24_quantity_1' => 1,
            'p24_price_1' => $this->amount,
            'p24_number_1' => 0,
        );

        foreach ($post_data as $k => $v) {
            $p24Class->addValue($k, $v);
        }

        $token = $p24Class->trnRegister();

        return $token;
    }
}
