<?php
/**
 * Class Przelewy24ClassStaticInterfaceFactory
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/gpl.html
 *
 */

/**
 * One of factories for Przelewy24 plugin.
 */
class Przelewy24BlikSoapInterfaceFactory
{
    /**
     * Create instance of Przelewy24BlikSoapInterface for suffix.
     *
     * @param string $suffix Money suffix.
     * @return Przelewy24BlikSoapInterface
     * @throws Exception
     */
    public static function getForSuffix($suffix)
    {
        return Przelewy24BlikSoapFactory::buildForSuffix($suffix);
    }

    /**
     * Create default instance of Przelewy24BlikSoapInterface.
     *
     * @return Przelewy24BlikSoapInterface
     * @throws Exception
     */
    public static function getDefault()
    {
        return Przelewy24BlikSoapFactory::buildDefault();
    }
}
