<?php
/**
 * Interface Przelewy24ValidatorSoapInterface
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Interface Przelewy24ValidatorSoapInterface
 */
interface Przelewy24ValidatorSoapInterface
{
    /**
     * Validates credentials.
     *
     * @return bool
     */
    public function validateCredentials();

    /**
     * Tests api access.
     *
     * @param string $apiKey
     *
     * @return bool
     */
    public function apiTestAccess($apiKey);
}
