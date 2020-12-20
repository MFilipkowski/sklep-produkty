<?php
/**
 * Interface Przelewy24ClassBlikInterface
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Interface Przelewy24ClassBlikInterface
 */
interface Przelewy24ClassBlikInterface
{
    /**
     * Adds value do post request.
     *
     * @param string $name Argument name.
     * @param int|string|bool $value Argument value.
     */
    public function addValue($name, $value);

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
}
