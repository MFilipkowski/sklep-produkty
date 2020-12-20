<?php
/**
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

/**
 * Class Przelewy24ServicePaymentOptions
 */
class Przelewy24ServicePaymentOptions extends Przelewy24Service
{
    const BASE_URL_LOGO_P24 = 'https://secure.przelewy24.pl/template/201312/bank/';

    /**
     * Rendered html with information about payment amounts.
     *
     * @var string|null
     */
    private $additionalInformation;

    /**
     * hookPaymentOptions implementation.
     *
     * @param array $params
     * @param string $text
     *
     * @return array
     * @throws Exception
     */
    public function execute($params, $text)
    {
        $cart = Context::getContext()->cart;
        $currency = new Currency($cart->id_currency);
        $suffix = Przelewy24Helper::getSuffix($currency->iso_code);
        if (!$this->getPrzelewy24()->active || (int)Configuration::get('P24_CONFIGURATION_VALID' . $suffix) < 1) {
            return array();
        }

        $templateVars = $this->getPrzelewy24()->getTemplateVars();
        $amountTotal = $templateVars['total'];

        $templateVars['extracharge'] = $this->getExtracharge($amountTotal, $suffix);
        $templateVars['logo_url'] = $this->getPrzelewy24()->getPathUri() . 'views/img/logo.png';
        if ($templateVars['extracharge'] > 0) {
            $templateVars['checkTotal'] = Tools::displayPrice(($templateVars['extracharge'] + $templateVars['total']));
            $templateVars['extracharge_formatted'] = Tools::displayPrice($templateVars['extracharge']);
        }

        $this->getPrzelewy24()->getSmarty()->assign(
            $templateVars
        );
        $this->additionalInformation = $this->getPrzelewy24()->fetch(
            'module:przelewy24/views/templates/front/payment_option.tpl'
        );
        $newOptions = array();
        $newOption = new PaymentOption();
        $newOption->setCallToActionText($text)
            ->setLogo($this->getPrzelewy24()->getPathUri() . 'views/img/logo_mini.png')
            ->setAction(
                $this->getPrzelewy24()->getContext()->link->getModuleLink(
                    $this->getPrzelewy24()->name,
                    'paymentConfirmation',
                    array(),
                    true
                )
            )
            ->setAdditionalInformation($this->additionalInformation);
        $newOptions[] = $newOption;
        $newOptions = array_merge($newOptions, $this->getPromotedPayments($params));

        return $newOptions;
    }

    /**
     * Get extracharge.
     *
     * @param float $amount
     * @param string $suffix
     *
     * @return float|int
     */
    public function getExtracharge($amount, $suffix = '')
    {
        $extracharge = 0;
        $p24ExtraChangeEnabled = (int)Configuration::get('P24_EXTRA_CHARGE_ENABLED' . $suffix);
        $p24ExtraChangePercent = (float)(str_replace(
            ',',
            '.',
            Configuration::get('P24_EXTRA_CHARGE_PERCENT' . $suffix)
        ));
        $p24ExtraChangAmount = (float)(str_replace(',', '.', Configuration::get('P24_EXTRA_CHARGE_AMOUNT' . $suffix)));

        if (1 === $p24ExtraChangeEnabled) {
            $extracharge = $p24ExtraChangAmount;
            $amountPercent = round(($amount * ((100 + $p24ExtraChangePercent) / 100)) - $amount, 2);

            if ($amountPercent > $p24ExtraChangAmount) {
                $extracharge = round($amountPercent, 2);
            }
        }

        return $extracharge;
    }

    /**
     * Set extracharge.
     *
     * @param Order $order
     */
    public function setExtracharge($order)
    {
        if (!$order instanceof Order) {
            return;
        }

        if ($this->hasExtrachargeOrder($order->id)) {
            return;
        }

        $cart = new Cart($order->id_cart);
        $currency = new Currency($cart->id_currency);
        $suffix = Przelewy24Helper::getSuffix($currency->iso_code);
        $extracharge = number_format($this->getExtracharge($order->total_paid, $suffix), 2);

        $order->extra_charge_amount = round($extracharge * 100);
        $order->total_paid += $extracharge;
        $order->total_paid_tax_excl += $extracharge;
        $order->total_paid_tax_incl += $extracharge;
        $order->save();

        $extracharge = Przelewy24Extracharge::prepareByOrderId($order->id);
        $extracharge->extra_charge_amount = $order->extra_charge_amount;
        $extracharge->save();
    }

    /**
     * @param int $orderId
     */
    public function setExtrachargeByOrderId($orderId)
    {
        $order = new Order($orderId);

        $this->setExtracharge($order);
    }

    /**
     * Get extracharge order id.
     *
     * @param int $orderId
     *
     * @return int
     */
    public function getExtrachargeOrder($orderId)
    {
        $extracharge = Przelewy24Extracharge::findOneByOrderId($orderId);
        if (!Validate::isLoadedObject($extracharge)) {
            return 0;
        }

        return $extracharge->extra_charge_amount / 100;
    }

    /**
     * Return if the order has an extracharege.
     *
     * @param int $orderId
     *
     * @return bool
     */
    public function hasExtrachargeOrder($orderId)
    {
        $extracharge = $this->getExtrachargeOrder($orderId);

        return $extracharge > 0;
    }

    /**
     * Get promoted payments.
     *
     * @param array $params
     *
     * @return array
     * @throws Exception
     */
    public function getPromotedPayments($params)
    {
        $results = array();

        if (!Configuration::get('P24_PAYMENT_METHOD_LIST')) {
            return $results;
        }
        $currency = new Currency($params['cart']->id_currency);
        $suffix = Przelewy24Helper::getSuffix($currency->iso_code);
        $p24Soap = Przelewy24SoapInterfaceFactory::getForSuffix($suffix);

        $promotePaymethodList = $p24Soap->getPromotedPaymentList(
            Configuration::get('P24_API_KEY' . $suffix),
            $currency->iso_code
        );

        if (!empty($promotePaymethodList['p24_paymethod_list_promote'])) {
            foreach ($promotePaymethodList['p24_paymethod_list_promote'] as $key => $item) {
                $results[] = $this->getPaymentOption($item, $key);
            }
        }

        $blikPaymentOption = $this->getBlikPaymentOption($params);
        if ($blikPaymentOption) {
            $results[] = $blikPaymentOption;
        }

        return $results;
    }

    /**
     * Get blik payment option.
     *
     * @param array $params
     *
     * @return PaymentOption|null
     * @throws Exception
     */
    private function getBlikPaymentOption($params)
    {
        if (!$params || !isset($params['cart']) || !$params['cart']->id_customer) {
            return null;
        }

        $customer = new Customer((int)$params['cart']->id_customer);
        if (!$customer->id || $customer->is_guest) {
            return null;
        }

        // BLIK: Alias UID
        $p24BlikSoap = Przelewy24BlikSoapInterfaceFactory::getDefault();
        if (((int)Configuration::get('P24_BLIK_UID_ENABLE') > 0) && $p24BlikSoap->testAccess()) {
            $newOption = new PaymentOption();
            $link = $this->getPrzelewy24()->getContext()->link->getModuleLink(
                $this->getPrzelewy24()->name,
                'validationBlik',
                array('type' => 'UID'),
                true
            );

            $newOption->setCallToActionText($this->getPrzelewy24()->getLangString('Pay with Blik'))
                ->setLogo($this->getPrzelewy24()->getPathUri() . 'views/img/blik_logo.png')
                ->setAction($link)
                ->setAdditionalInformation($this->additionalInformation);

            return $newOption;
        }

        return null;
    }

    /**
     * Get payment option
     *
     * @param string $title
     * @param int $methodId
     *
     * @return PaymentOption
     */
    private function getPaymentOption($title, $methodId)
    {
        $logoUri = self::BASE_URL_LOGO_P24 . 'logo_' . $methodId . '.gif';
        $newOption = new PaymentOption();
        $newOption->setCallToActionText($title)
            ->setLogo($logoUri)
            ->setAction(
                $this->getPrzelewy24()->getContext()->link->getModuleLink(
                    $this->getPrzelewy24()->name,
                    'paymentConfirmation',
                    ['payment_method' => $methodId],
                    true
                )
            )
            ->setAdditionalInformation($this->additionalInformation);

        return $newOption;
    }
}
