<?php
/**
 * Class Przelewy24SoapInterfaceFactory
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/gpl.html
 *
 */

/**
 * One of factories for Przelewy24 plugin.
 */
class Przelewy24SoapInterfaceFactory
{
    /**
     * Create instance of Przelewy24SoapInterface
     *
     * @param string $suffix Money suffix.
     * @return Przelewy24SoapInterface
     * @throws Exception
     */
    public static function getForSuffix($suffix)
    {
        return Przelewy24SoapFactory::buildForSuffix($suffix);
    }
}
