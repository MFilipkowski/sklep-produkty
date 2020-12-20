<?php
/**
 * Class Przelewy24OneClickHelper
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24OneClickHelper
 */
class Przelewy24OneClickHelper
{
    /**
     * Get card payment ids.
     *
     * @return array
     */
    public static function getCardPaymentIds()
    {
        return array(140, 142, 145, 218);
    }

    /**
     * Escape string.
     *
     * @param string $string
     *
     * @return string
     */
    public static function escape($string)
    {
        $string = trim($string);

        return htmlspecialchars($string);
    }

    /**
     * Is one click enabled.
     *
     * @param string $suffix
     *
     * @return bool
     * @throws Exception
     */
    public static function isOneClickEnable($suffix = "")
    {
        $soap = Przelewy24SoapInterfaceFactory::getForSuffix($suffix);

        return ($soap->checkCardRecurrency() && 1 === (int)Configuration::get('P24_ONECLICK_ENABLE' . $suffix));
    }
}
