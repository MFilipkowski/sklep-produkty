<?php
/**
 * Class Przelewy24ServiceRefund
 *
 * This service has the features required for cash returns.
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24ServiceRefund
 */
class Przelewy24ServiceRefund extends Przelewy24Service
{
    /**
     * Currency suffix.
     *
     * @var string
     */
    private $suffix = '';

    /**
     * P24 soap api client.
     *
     * @var SoapClient
     */
    private $soap;

    /**
     * Array of allowed refund statuses.
     *
     * @var array
     */
    private $status = array(
        0 => 'Refund error',
        1 => 'Refund done',
        3 => 'Awaiting for refund',
        4 => 'Refund rejected',
    );

    /**
     * Default refund status.
     *
     * @var string
     */
    private $statusDefault = 'Unknown status of refund';

    /**
     * Przelewy24ServiceRefund constructor.
     *
     * @param Przelewy24     $przelewy24
     * @param string         $suffix
     * @param Przelewy24Soap $przelewy24Soap
     */
    public function __construct(Przelewy24 $przelewy24, $suffix, $przelewy24Soap)
    {
        $this->setSuffix($suffix);
        $this->soap = $przelewy24Soap->getSoapClient();
        parent::__construct($przelewy24);
    }

    /**
     * Set suffix.
     *
     * @param string $suffix
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
    }

    /**
     * Get refunds.
     *
     * @param int $orderId
     *
     * @return array
     */
    public function getRefunds($orderId)
    {
        $return = array();
        try {
            $soap = $this->soap;
            $result = $soap->GetRefundInfo(
                Configuration::get('P24_MERCHANT_ID' . $this->suffix),
                Configuration::get('P24_API_KEY' . $this->suffix),
                $orderId
            );

            if ($result && is_array($result->result)) {
                $maxToRefund = 0;
                $refunds = array();
                foreach ($result->result as $key => $value) {
                    $refunds[$key]['amount_refunded'] = $value->amount;
                    $date = new DateTime($value->date);
                    $refunds[$key]['created'] = $date->format('Y-m-d H:i:s');
                    $refunds[$key]['status'] = $this->getStatusMessage($value->status);

                    if ((1 === $value->status) || (3 === $value->status)) {
                        $maxToRefund += $value->amount;
                    }
                }
                $return = array(
                    'maxToRefund' => $maxToRefund,
                    'refunds' => $refunds,
                );
            }

            return $return;
        } catch (Exception $e) {
            PrestaShopLogger::addLog(__METHOD__ . ' ' . $e->getMessage(), 1);

            return array();
        }
    }

    /**
     * Get status message.
     *
     * @param integer $status
     *
     * @return string
     */
    public function getStatusMessage($status)
    {
        $status = (int)$status;
        $return = $this->statusDefault;
        if (isset($this->status[$status])) {
            $return = $this->status[$status];
        }

        return $return;
    }

    /**
     * Check if refund is possible and returns data to refund.
     *
     * @param int $orderId
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public function checkIfRefundIsPossibleAndReturnDataToRefund($orderId)
    {
        $return = array();
        $dataFromDB = $this->getRefundDataFromDB($orderId);
        if ($dataFromDB) {
            $dataFromP24 = $this->checkIfPaymentCompletedUsingWSAndReturnData($dataFromDB['sessionId']);
            if ($dataFromP24) {
                $return = array(
                    'sessionId' => $dataFromDB['sessionId'],
                    'amount' => isset($dataFromP24->result->amount) ? (int)$dataFromP24->result->amount : 0,
                    'p24OrderId' => isset($dataFromP24->result->orderId) ? (int)$dataFromP24->result->orderId : 0,
                );
            }
        }

        return $return;
    }

    /**
     * Check if payment is completed using ws and return data.
     *
     * @param $sessionId
     *
     * @return bool
     */
    public function checkIfPaymentCompletedUsingWSAndReturnData($sessionId)
    {
        try {
            $soap = $this->soap;
            $result = $soap->GetTransactionBySessionId(
                Configuration::get('P24_MERCHANT_ID' . $this->suffix),
                Configuration::get('P24_API_KEY' . $this->suffix),
                $sessionId
            );

            if (isset($result->error->errorCode, $result->result->status) &&
                (($result->error->errorCode > 0) || (2 !== (int)$result->result->status))
            ) {
                return false;
            }

            return $result;
        } catch (Exception $e) {
            PrestaShopLogger::addLog(__METHOD__ . ' ' . $e->getMessage(), 1);

            return false;
        }
    }

    /**
     * Gets refund data from database.
     *
     * @param $orderId
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public function getRefundDataFromDB($orderId)
    {
        $return = array();

        $orderId = (int)$orderId;
        $przelewy24Order = new Przelewy24Order();
        $result = $przelewy24Order->getByPshopOrderId($orderId);
        if ($result) {
            $return = array(
                'sessionId' => $result->p24_session_id,
                'p24OrderId' => $result->p24_order_id,
            );
        }

        return $return;
    }

    /**
     * Requests refund by Przelewy24.
     *
     * @param string $sessionId
     * @param int $p24OrderId
     * @param float $amountToRefund
     *
     * @return false|stdClass
     */
    public function refundProcess($sessionId, $p24OrderId, $amountToRefund)
    {
        $refunds = array(
            array(
                'sessionId' => $sessionId,
                'orderId' => $p24OrderId,
                'amount' => $amountToRefund,
            ),
        );

        try {
            return $this->soap->refundTransaction(
                Configuration::get('P24_MERCHANT_ID' . $this->suffix),
                Configuration::get('P24_API_KEY' . $this->suffix),
                time(),
                $refunds
            );
        } catch (Exception $e) {
            PrestaShopLogger::addLog(__METHOD__ . ' ' . $e->getMessage(), 1);

            return false;
        }
    }

    /**
     * The function checks the availability of the following functions :
     * GetTransactionBySessionId
     * RefundTransaction
     *
     * @return bool
     */
    public function checkRefundFunction()
    {
        try {
            return (
                $this->soapMethodExists('GetTransactionBySessionId') &&
                $this->soapMethodExists('RefundTransaction')
            );
        } catch (Exception $e) {
            PrestaShopLogger::addLog(__METHOD__ . ' ' . $e->getMessage(), 1);

            return false;
        }
    }

    /**
     * The function checks the availability of the following functions :
     * GetRefundInfo
     *
     * @return bool
     */
    public function checkGetRefundInfo()
    {
        try {
            return ($this->soapMethodExists('GetRefundInfo'));
        } catch (Exception $e) {
            PrestaShopLogger::addLog(__METHOD__ . ' ' . $e->getMessage(), 1);

            return false;
        }
    }

    /**
     * Checks if soap method exists.
     *
     * @param string $method
     *
     * @return bool
     */
    private function soapMethodExists($method)
    {
        $return = false;
        $list = $this->soap->__getFunctions();
        if (is_array($list)) {
            foreach ($list as $line) {
                $explodeLine = explode(' ', $line, 2);
                if (array_key_exists(1, $explodeLine) && (0 === strpos($explodeLine[1], $method))) {
                    $return = true;
                    break;
                }
            }
        }

        return $return;
    }
}
