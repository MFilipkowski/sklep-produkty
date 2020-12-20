<?php
/**
 * Class Przelewy24ValidatorSoapInterfaceFactory
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/gpl.html
 *
 */

/**
 * One of factories for Przelewy24 plugin.
 */
class Przelewy24ValidatorSoapInterfaceFactory
{
    /**
     * Create instance of Przelewy24SValidatorSoapInterface
     *
     * @param int $merchantId
     * @param int $posId
     * @param string $salt
     * @param bool $testMode
     * @return Przelewy24ValidatorSoapInterface
     * @throws Exception
     * @throws SoapFault
     */
    public static function getForParams($merchantId, $posId, $salt, $testMode)
    {
        return Przelewy24SoapFactory::buildFromParams($merchantId, $posId, $salt, $testMode);
    }
}
