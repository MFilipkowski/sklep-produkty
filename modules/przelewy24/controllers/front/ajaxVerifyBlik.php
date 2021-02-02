<?php
/**
 * Class przelewy24ajaxVerifyBlikModuleFrontController
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24ajaxVerifyBlikModuleFrontController
 */
class Przelewy24ajaxVerifyBlikModuleFrontController extends Przelewy24JsonLegacyController
{
    /**
     * Customer id.
     *
     * @var int
     */
    private $customerId;

    /**
     * P24 order id (Przelewy24Order->p24_order_id).
     *
     * @var int
     */
    private $p24OrderId;

    /**
     * P24 order.
     *
     * @var Przelewy24Order
     */
    private $p24Order;

    /**
     * Prestashop order id (Przelewy24Order->pshop_order_id)
     *
     * @var int
     */
    private $pshopOrder;

    /**
     * Action to perform.
     *
     * @var string
     */
    private $action;

    /**
     * Init content.
     * @throws Exception
     */
    public function initContent()
    {
        parent::initContent();
        $this->customerId = (int)$this->context->customer->id;
        $this->p24OrderId = (int)Tools::getValue('params')['orderId'];
        $this->action = filter_var(Tools::getValue('action'), FILTER_SANITIZE_STRING);

        if ('Subscribe' !== $this->action || !$this->p24OrderId) {
            $this->response(400, 'Wrong action or no p24OrderId');
        }

        if (!$this->customerId) {
            $this->response(403, 'Customer context does not exist');
        }

        $this->p24Order = new Przelewy24Order($this->p24OrderId);
        if (!$this->p24Order->p24_order_id || !$this->p24Order->pshop_order_id) {
            $this->response(404, 'P24Order not found');
        }

        $this->pshopOrder = new Order((int)$this->p24Order->pshop_order_id);
        if (!$this->pshopOrder->id) {
            $this->response(404, 'Prestashop order not found');
        }

        if ((int)$this->pshopOrder->id_customer !== (int)$this->customerId) {
            $this->response(403, 'The customer is not allowed to check this transaction status');
        }

        $p24BlikSoap = Przelewy24BlikSoapInterfaceFactory::getDefault();
        $this->output = $p24BlikSoap->getTransactionStatus($this->p24OrderId);

        $przelewy24BlikErrorEnum = new Przelewy24BlikErrorEnum($this);

        $errorCode = (int)$this->output['error'];
        if (!$errorCode && 'AUTHORIZED' !== $this->output['status']) {
            $errorCode = (int)$this->output['reasonCode'];
        }

        /** @var Przelewy24ErrorResult $error */
        $error = $przelewy24BlikErrorEnum->getErrorMessage($errorCode);
        $this->output['error'] = $error->toArray();

        $this->response(200, 'Response success');
    }

    /**
     * Log message.
     *
     * @param string $infoMessage
     */
    protected function log($infoMessage)
    {
        PrestaShopLogger::addLog(
            'ajaxVerifyBlik - ' . $infoMessage . ' - ' .
            json_encode(
                array(
                    'customerId' => (int)$this->customerId,
                    'p24OrderId' => (int)$this->p24OrderId,
                    'p24Order' => (bool)$this->p24Order,
                    'pshopOrder' => (bool)$this->pshopOrder,
                    'action' => $this->action,
                    'output' => $this->output,
                )
            ),
            1
        );
    }
}
