<?php
/**
 * Interface Przelewy24SoapInterface
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Interface Przelewy24SoapInterface
 */
interface Przelewy24SoapInterface
{
    /**
     * Tests api access.
     *
     * @param string $apiKey
     *
     * @return bool
     */
    public function apiTestAccess($apiKey);

    /**
     * Checks card recurrence.
     *
     * @return bool
     */
    public function checkCardRecurrency();

    /**
     * Get first and second payment list.
     *
     * @param string $apiKey
     * @param string $currency
     *
     * @return array
     */
    public function getFirstAndSecondPaymentList($apiKey, $currency);

    /**
     * Get promoted payment list.
     *
     * @param string $apiKey
     * @param string $currency
     *
     * @return array
     */
    public function getPromotedPaymentList($apiKey, $currency);

    /**
     * Get card reference one click with check card.
     *
     * @param string $apiKey
     * @param int $orderId
     *
     * @return array
     */
    public function getCardReferenceOneClickWithCheckCard($apiKey, $orderId);

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
    public function chargeCard($apiKey, $cardRefId, $amount, $currency, $email, $sessionId, $client, $description);
}
