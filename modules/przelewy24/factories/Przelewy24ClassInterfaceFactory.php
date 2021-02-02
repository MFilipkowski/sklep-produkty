<?php
/**
 * Class Przelewy24ClassInterfaceFactory
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/gpl.html
 *
 */

/**
 * One of factories for Przelewy24 plugin.
 *
 */
class Przelewy24ClassInterfaceFactory
{
    /**
     * Create instance of Przelewy24ClassInterface based on suffix.
     *
     * @param string $suffix Money suffix.
     * @return Przelewy24ClassInterface
     * @throws Exception
     */
    public static function getForSuffix($suffix)
    {
        return Przelewy24ClassFactory::buildForSuffix($suffix);
    }
}
