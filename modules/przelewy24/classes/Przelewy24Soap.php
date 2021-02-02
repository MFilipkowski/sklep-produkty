<?php
/**
 * Class Przelewy24Soap
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24Soap
 */
class Przelewy24Soap extends Przelewy24SoapAbstract implements
    Przelewy24SoapInterface,
    Przelewy24ValidatorSoapInterface
{
    /**
     * Url of wsdl service.
     *
     * @var string
     */
    protected $wsdlService;

    /**
     * Przelewy24Soap constructor.
     *
     * @param Przelewy24ClassInterface $p24Class
     * @param int $merchantId
     * @param int $posId
     * @param string $salt
     * @param bool $testMode
     * @throws SoapFault
     */
    public function __construct(Przelewy24ClassInterface $p24Class, $merchantId, $posId, $salt, $testMode)
    {
        $this->wsdlService = 'external/' . $merchantId . '.wsdl';

        return parent::__construct($p24Class, $merchantId, $posId, $salt, $testMode);
    }

    /**
     * @return SoapClient
     */
    public function getSoapClient()
    {
        return $this->soap;
    }

    /**
     * Returns non pln payment channels.
     *
     * @param array $paymethodList
     *
     * @return array
     */
    public static function getChannelsNonPln($paymethodList)
    {
        $channelsNonPln = array(124, 140, 145, 152, 66, 92, 218);

        foreach (array_keys($paymethodList) as $key) {
            if (!in_array($key, $channelsNonPln)) {
                unset($paymethodList[$key]);
            }
        }

        return $paymethodList;
    }

    /**
     * Sets wsdl charge card service (in place of default wsdl for customer).
     */
    public function setWsdlChargeCardService()
    {
        if ($this->p24Class) {
            $this->wsdlService = 'external/wsdl/charge_card_service.php?wsdl';
            $this->soap = new SoapClient(
                $this->p24Class->getHost() . $this->wsdlService,
                array('trace' => true, 'exceptions' => true, 'cache_wsdl' => WSDL_CACHE_NONE)
            );
        }
    }

    /**
     * Tests api access.
     *
     * @param string $apiKey
     *
     * @return bool
     */
    public function apiTestAccess($apiKey)
    {
        $access = false;
        if (!$this->soap) {
            return false;
        }
        try {
            $res = $this->soap->TestAccess($this->posId, $apiKey);
            if (!empty($res) && is_bool($res)) {
                $access = $res;
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);
        }

        return $access;
    }

    /**
     * Checks card recurrence.
     *
     * @return bool
     */
    public function checkCardRecurrency()
    {
        $have = false;
        $this->setWsdlChargeCardService();
        if (!$this->soap) {
            return false;
        }
        try {
            $res = $this->soap->checkRecurrency($this->posId, $this->salt);
            if (!empty($res) && is_bool($res)) {
                $have = $res;
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);
        }

        return $have;
    }

    /**
     * Validates credentials.
     *
     * @return bool
     */
    public function validateCredentials()
    {
        $ret = array();
        if (!$this->soap) {
            return false;
        }
        try {
            $ret = $this->p24Class->testConnection();
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);
        }

        if (isset($ret['error']) && 0 === (int)$ret['error']) {
            return true;
        }

        return false;
    }

    /**
     * Returns available payment methods.
     *
     * @param string $apiKey
     *
     * @return array
     */
    public function availablePaymentMethods($apiKey)
    {
        $result = array();
        if (!$this->soap) {
            return $result;
        }
        try {
            $res = $this->soap->PaymentMethods($this->posId, $apiKey, Context::getContext()->language->iso_code);
            if ($res && isset($res->error->errorCode) && 0 === $res->error->errorCode && is_array($res->result)) {
                $is218MethodSet = false;
                foreach ($res->result as $item) {
                    if ($item->status) {
                        $result[$item->id] = $item->name;
                        if (218 === (int)$item->id) {
                            $is218MethodSet = true;
                        }
                    }
                }
                if ($is218MethodSet) {
                    unset($result[142], $result[145]);
                }
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);
        }

        return $result;
    }

    /**
     * Get payment list.
     *
     * @param string $apiKey
     * @param string $currency
     * @param string $firstConfName
     * @param bool $secondConfName
     *
     * @return array
     */
    private function getPaymentList($apiKey, $currency, $firstConfName, $secondConfName = false)
    {
        $suffix = Przelewy24Helper::getSuffix($currency);

        $paymethodListFirst = array();
        $paymethodListSecond = array();

        $paymethodList = $this->availablePaymentMethods($apiKey);

        if ($suffix) {
            $paymethodList = $this->getChannelsNonPln($paymethodList);
        }

        $paymethodList = $this->replacePaymentDescriptionsListToOwn($paymethodList, $suffix);

        $firstList = Configuration::get($firstConfName . $suffix);
        $firstList = explode(',', $firstList);
        $secondList = array();

        if ($secondConfName) {
            $secondList = Configuration::get($secondConfName . $suffix);
            $secondList = explode(',', $secondList);
        }

        if (count($firstList)) {
            foreach ($firstList as $item) {
                if ((int)$item > 0 && isset($paymethodList[(int)$item])) {
                    $paymethodListFirst[(int)$item] = $paymethodList[(int)$item];
                    unset($paymethodList[(int)$item]);
                }
            }
        }

        if (count($secondList)) {
            foreach ($secondList as $item) {
                if ((int)$item > 0 && isset($paymethodList[(int)$item])) {
                    $paymethodListSecond[(int)$item] = $paymethodList[(int)$item];
                    unset($paymethodList[(int)$item]);
                }
            }
        }

        $paymethodListSecond = $paymethodListSecond + $paymethodList;

        return array($paymethodListFirst, $paymethodListSecond);
    }

    /**
     * Replace payment names in array with user defined.
     *
     * @param array $paymethodList
     * @param $suffix
     * @return array
     */
    public function replacePaymentDescriptionsListToOwn(array $paymethodList, $suffix)
    {
        foreach ($paymethodList as $bankId => $bankName) {
            if (($value = $this->replacePaymentDescriptionToOwn($bankId, $bankName, $suffix)) !== false) {
                $paymethodList[$bankId] = $value;
            }
        }

        return $paymethodList;
    }

    /**
     * Replace payment method name to user defined.
     *
     * @param $bankId
     * @param $bankName
     * @param $suffix
     * @return bool
     */
    private function replacePaymentDescriptionToOwn($bankId, $bankName, $suffix)
    {
        if (($value = Configuration::get("P24_PAYMENT_DESCRIPTION_{$bankId}{$suffix}")) && ($value !== $bankName)) {
            return $value;
        }

        return false;
    }

    /**
     * Get first and second payment list.
     *
     * @param string $apiKey
     * @param string $currency
     *
     * @return array
     */
    public function getFirstAndSecondPaymentList($apiKey, $currency)
    {
        list($paymethodListFirst, $paymethodListSecond) = $this->getPaymentList(
            $apiKey,
            $currency,
            'P24_PAYMENTS_ORDER_LIST_FIRST',
            'P24_PAYMENTS_ORDER_LIST_SECOND'
        );

        return array(
            'p24_paymethod_list_first' => $paymethodListFirst,
            'p24_paymethod_list_second' => $paymethodListSecond,
        );
    }

    /**
     * Get promoted payment list.
     *
     * @param string $apiKey
     * @param string $currency
     *
     * @return array
     */
    public function getPromotedPaymentList($apiKey, $currency)
    {
        list($paymethodListFirst, $paymethodListSecond) = $this->getPaymentList(
            $apiKey,
            $currency,
            'P24_PAYMENTS_PROMOTE_LIST',
            false
        );

        return array(
            'p24_paymethod_list_promote' => $paymethodListFirst,
            'p24_paymethod_list_promote_2' => $paymethodListSecond,
        );
    }

    /**
     * Get card reference one click with check card.
     *
     * @param string $apiKey
     * @param int $orderId
     *
     * @return array
     */
    public function getCardReferenceOneClickWithCheckCard($apiKey, $orderId)
    {
        $orderId = (int)$orderId;
        $result = array();
        try {
            $this->setWsdlChargeCardService();
            if (empty($this->soap)) {
                throw  new Exception('Null pointer: SOAP');
            }

            $res = $this->soap->GetTransactionReference($this->posId, $apiKey, $orderId);

            if ($res && isset($res->error->errorCode) && (0 === $res->error->errorCode) && !empty($res->result)) {
                $ref = $res->result->refId;
                $hasRecurency = $this->soap->CheckCard($this->posId, $apiKey, $ref);
                if ((0 === $hasRecurency->error->errorCode) && $hasRecurency->result) {
                    return $res->result;
                } else {
                    PrestaShopLogger::addLog('Błędny oneclick_order_id dla orderId: ' . $orderId, 1);
                }
            } else {
                PrestaShopLogger::addLog(
                    'Błąd dla metody GetTransactionReference: [order_id: ' . $orderId . ']: ' .
                    print_r($res, true),
                    1
                );
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);
        }

        return $result;
    }

    /**
     * Charges card.
     *
     * @param string $apiKey
     * @param string $cardRefId
     * @param int $amount
     * @param string $currency
     * @param string $email
     * @param string $sessionId
     * @param string $client
     * @param string $description
     *
     * @return null|string
     */
    public function chargeCard($apiKey, $cardRefId, $amount, $currency, $email, $sessionId, $client, $description)
    {
        $p24OrderId = null;
        if (!$this->soap) {
            return $p24OrderId;
        }
        $this->setWsdlChargeCardService();
        try {
            $res = $this->soap->ChargeCard(
                $this->posId,
                $apiKey,
                $cardRefId,
                $amount,
                $currency,
                $email,
                $sessionId,
                $client,
                $description
            );
            if (!empty($res)) {
                if ('0' === (string)$res->error->errorCode) {
                    $p24OrderId = (string)$res->result->orderId;
                } else {
                    PrestaShopLogger::addLog(print_r($res->error, true), 1);
                }
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);
        }

        return $p24OrderId;
    }
}
