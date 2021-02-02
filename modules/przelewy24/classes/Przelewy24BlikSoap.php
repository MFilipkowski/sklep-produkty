<?php
/**
 * Class Przelewy24BlikSoap
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24BlikSoap
 */
class Przelewy24BlikSoap extends Przelewy24SoapAbstract implements Przelewy24BlikSoapInterface
{
    /**
     * Wsdl service of blik api.
     *
     * @var string
     */
    protected $wsdlService = 'external/wsdl/charge_blik_service.php?wsdl';

    /**
     * Api key to blik.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * Przelewy24BlikSoap constructor.
     *
     * @param string $apiKey
     * @param Przelewy24ClassInterface $p24Class
     * @param int $merchantId
     * @param int $posId
     * @param string $salt
     * @param bool $testMode
     * @throws SoapFault
     */
    public function __construct($apiKey, Przelewy24ClassInterface $p24Class, $merchantId, $posId, $salt, $testMode)
    {
        $this->apiKey = $apiKey;
        parent::__construct($p24Class, $merchantId, $posId, $salt, $testMode);
    }

    /**
     * Executes payment and creates uid.
     *
     * @param string $blikCode
     * @param string $token
     *
     * @return array|bool
     */
    public function executePaymentAndCreateUid($blikCode, $token)
    {
        if (!$this->soap) {
            return false;
        }

        try {
            $response = $this->soap->ExecutePaymentAndCreateUid(
                $this->posId,
                $this->apiKey,
                $token,
                $blikCode
            );

            if (!$response->error->errorCode) {
                return array('success' => true, 'orderId' => $response->result->orderId);
            } else {
                Przelewy24Logger::addApiErrorLog($response, 'ExecutePaymentAndCreateUid');
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);

            return array('success' => false, 'error' => 500); //unknown error
        }

        return array('success' => false, 'error' => $response->error->errorCode);
    }

    /**
     * Get alias.
     *
     * @param int $orderId
     *
     * @return bool
     */
    public function getAlias($orderId)
    {
        if (!$this->soap) {
            return false;
        }
        $alias = false;
        try {
            $res = $this->soap->GetAlias($this->posId, $this->apiKey, $orderId);

            if (!$res->error->errorCode && 'UID' === $res->result->aliasType) {
                $alias = $res->result->aliasValue;
            } else {
                Przelewy24Logger::addApiErrorLog($res, 'GetAlias');

                return false;
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);
        }

        return $alias;
    }

    /**
     * Get aliases by email
     *
     * @param string $email
     *
     * @return array|bool
     */
    public function getAliasesByEmail($email)
    {
        if (!$this->soap || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        $result = array();
        try {
            $res = $this->soap->GetAliasesByEmail($this->posId, $this->apiKey, $email);

            if ($res->error->errorCode) {
                Przelewy24Logger::addApiErrorLog($res, 'GetAliasesByEmail');

                return false;
            }

            $aliases = $res->aliases;
            if (sizeof($aliases)) {
                foreach ($aliases as $alias) {
                    $result[] = array(
                        'value' => filter_var($alias->value, FILTER_SANITIZE_STRING),
                        'type' => filter_var($alias->type, FILTER_SANITIZE_STRING),
                        'status' => filter_var($alias->status, FILTER_SANITIZE_STRING),
                    );
                }
            }

            return $result;
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);
        }

        return false;
    }

    /**
     * Executes payment by uid with blik code.
     *
     * @param string $alias
     * @param string $amount
     * @param string $currency
     * @param string $email
     * @param string $sessionId
     * @param string $client
     * @param string $description
     * @param string $blikCode
     * @param string $additional
     *
     * @return array|bool
     */
    public function executePaymentByUidWithBlikCode(
        $alias,
        $amount,
        $currency,
        $email,
        $sessionId,
        $client,
        $description,
        $blikCode,
        $additional
    ) {
        if (!$this->soap) {
            return false;
        }

        try {
            $response = $this->soap->ExecutePaymentByUidWithBlikCode(
                $this->posId,
                $this->apiKey,
                $alias,
                $amount,
                $currency,
                $email,
                $sessionId,
                $client,
                $description,
                $blikCode,
                $additional
            );

            if (!$response->error->errorCode) {
                return array('success' => true, 'orderId' => $response->result->orderId);
            } else {
                Przelewy24Logger::addApiErrorLog($response, 'ExecutePaymentByUidWithBlikCode');
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);

            return array('success' => false, 'error' => 500); //unknown error
        }

        return array('success' => false, 'error' => $response->error->errorCode);
    }

    /**
     * Execute payment by uid with alternative key.
     *
     * @param string $alias
     * @param string $amount
     * @param string $currency
     * @param string $email
     * @param string $sessionId
     * @param string $client
     * @param string $description
     * @param string $alternativeKey
     * @param string $additional
     *
     * @return array|bool
     */
    public function executePaymentByUIdWithAlternativeKey(
        $alias,
        $amount,
        $currency,
        $email,
        $sessionId,
        $client,
        $description,
        $alternativeKey,
        $additional
    ) {
        if (!$this->soap) {
            return false;
        }

        try {
            $response = $this->soap->ExecutePaymentByUIdWithAlternativeKey(
                $this->posId,
                $this->apiKey,
                $alias,
                $amount,
                $currency,
                $email,
                $sessionId,
                $client,
                $description,
                $alternativeKey,
                $additional
            );
            if (!$response->error->errorCode) {
                return array('success' => true, 'orderId' => $response->result->orderId);
            } else {
                Przelewy24Logger::addApiErrorLog($response, 'ExecutePaymentByUIdWithAlternativeKey');
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);

            return array('success' => false, 'error' => 500); //unknown error
        }

        return array('success' => false, 'error' => $response->error->errorCode);
    }

    /**
     * Execute payment by uid.
     *
     * @param string $alias
     * @param string $amount
     * @param string $currency
     * @param string $email
     * @param string $sessionId
     * @param string $client
     * @param string $description
     * @param string $additional
     *
     * @return array|bool
     */
    public function executePaymentByUid(
        $alias,
        $amount,
        $currency,
        $email,
        $sessionId,
        $client,
        $description,
        $additional
    ) {
        if (!$this->soap) {
            return false;
        }

        try {
            $response = $this->soap->ExecutePaymentByUid(
                $this->posId,
                $this->apiKey,
                $alias,
                $amount,
                $currency,
                $email,
                $sessionId,
                $client,
                $description,
                $additional
            );
            if (!$response->error->errorCode) {
                return array('success' => true, 'orderId' => $response->result->orderId);
            } else {
                Przelewy24Logger::addApiErrorLog($response, 'ExecutePaymentByUid');
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);

            return array('success' => false, 'error' => 500); //unknown error
        }

        return array(
            'success' => false,
            'error' => $response->error->errorCode,
            'aliasAlternatives' => $response->result->aliasAlternatives,
        );
    }

    /**
     * Test access
     *
     * @return array|bool
     */
    public function testAccess()
    {
        $access = false;
        if (!$this->soap) {
            return false;
        }

        try {
            $res = $this->soap->TestAccess($this->posId, $this->apiKey);
            if (!$res->error->errorCode) {
                $access = true;
            } else {
                Przelewy24Logger::addApiErrorLog($res, 'TestAccess');
            }
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);

            return array('success' => false, 'error' => 500); //unknown error
        }

        return $access;
    }

    /**
     * Get transaction status.
     *
     * @param int $orderId
     *
     * @return array|bool
     */
    public function getTransactionStatus($orderId)
    {
        if (!$this->soap) {
            return false;
        }

        try {
            $res = $this->soap->GetTransactionStatus($this->posId, $this->apiKey, $orderId, null);

            if ('AUTHORIZED' !== $res->result->status) {
                PrestaShopLogger::addLog(print_r($res, true), 1);
            }

            return array(
                'success' => true,
                'status' => $res->result->status,
                'reasonCode' => $res->result->reasonCode,
                'error' => $res->error->errorCode,
            );
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 1);
        }

        return array('success' => false, 'error' => 500); //unknown error
    }
}
