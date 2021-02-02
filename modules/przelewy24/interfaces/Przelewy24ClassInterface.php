<?php
/**
 * Interface Przelewy24ClassInterface
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Interface Przelewy24ClassInterface
 */
interface Przelewy24ClassInterface
{
    /**
     * Returns host URL.
     *
     * @return string
     */
    public function getHost();

    /**
     * Returns URL for direct request (trnDirect).
     *
     * @return string
     */
    public function trnDirectUrl();

    /**
     * Adds value do post request.
     *
     * @param string $name Argument name.
     * @param int|string|bool $value Argument value.
     */
    public function addValue($name, $value);

    /**
     * Method is testing a connection with P24 server.
     *
     * @return array Array(INT Error, Array Data), where data.
     *
     * @throws Exception
     */
    public function testConnection();

    /**
     * Prepare a transaction request.
     *
     * @param bool $redirect Set true to redirect to Przelewy24 after transaction registration.
     *
     * @return array array(INT Error code, STRING Token).
     *
     * @throws Exception
     */
    public function trnRegister($redirect = false);

    /**
     * Verifies data received in ping from P24.
     *
     * @param array|null $data
     *
     * @return bool|null null - status could not be parsed, true - data valid, false - data invalid.
     *
     * @throws Exception
     */
    public function trnVerifyEx($data = null);

    /**
     * Return direct sign.
     *
     * @param array $data
     *
     * @return string
     */
    public function trnDirectSign($data);
}
