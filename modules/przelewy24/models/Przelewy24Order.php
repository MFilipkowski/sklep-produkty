<?php
/**
 * Class Przelewy24Order
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24Order
 */
class Przelewy24Order extends ObjectModel
{
    /**
     * PrestaShop order id.
     *
     * @var int
     */
    public $pshop_order_id;

    /**
     * Session id.
     *
     * @var string
     */
    public $p24_session_id;

    /**
     * P24 order id.
     *
     * @var int
     */
    public $p24_order_id;

    const TABLE = 'przelewy24_order';
    const P24_ORDER_ID = 'p24_order_id';
    const PSHOP_ORDER_ID = 'pshop_order_id';
    const P24_SESSION_ID = 'p24_session_id';

    /**
     * Model definition.
     *
     * @var array
     */
    public static $definition = array(
        'table' => self::TABLE,
        'primary' => self::P24_ORDER_ID,
        'fields' => array(
            self::P24_ORDER_ID => array('type' => self::TYPE_INT, 'required' => true),
            self::PSHOP_ORDER_ID => array('type' => self::TYPE_INT, 'required' => true),
            self::P24_SESSION_ID => array('type' => self::TYPE_STRING, 'required' => true),
        ),
    );

    /**
     * Saves order.
     *
     * @param int $p24OrderId
     * @param int $pshopOrderId
     * @param string $p24SessionId
     */
    public static function saveOrder($p24OrderId, $pshopOrderId, $p24SessionId)
    {
        try {
            $przelewy24Order = new Przelewy24Order();
            $przelewy24Order->p24_order_id = (int)$p24OrderId;
            $przelewy24Order->pshop_order_id = (int)$pshopOrderId;
            $przelewy24Order->p24_session_id = $p24SessionId;
            $przelewy24Order->add();
        } catch (PrestaShopException $exception) {
            PrestaShopLogger::addLog('Przelewy24Order -- savePrzelewy24Order ' . $exception->getMessage(), 3);
        }
    }

    /**
     * Gets P24 order by PrestaShop order id.
     *
     * @param int $id
     * @return Przelewy24Order
     */
    public function getByPshopOrderId($id)
    {
        $id = (int)$id;

        $orders = new PrestaShopCollection("Przelewy24Order");
        $orders->where('pshop_order_id', '=', $id);

        return $orders->getFirst();
    }
}
