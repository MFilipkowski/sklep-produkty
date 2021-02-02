<?php
/**
 * Interface Przelewy24BlikSoapInterface
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Interface Przelewy24BlikSoapInterface
 */
interface Przelewy24BlikSoapInterface
{

    /**
     * Executes payment and creates uid.
     *
     * @param string $blikCode
     * @param string $token
     *
     * @return array|bool
     */
    public function executePaymentAndCreateUid($blikCode, $token);

    /**
     * Get alias.
     *
     * @param int $orderId
     *
     * @return bool
     */
    public function getAlias($orderId);

    /**
     * Get aliases by email
     *
     * @param string $email
     *
     * @return array|bool
     */
    public function getAliasesByEmail($email);

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
    );

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
    );

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
    );

    /**
     * Test access
     *
     * @return array|bool
     */
    public function testAccess();

    /**
     * Get transaction status.
     *
     * @param int $orderId
     *
     * @return array|bool
     */
    public function getTransactionStatus($orderId);
}
