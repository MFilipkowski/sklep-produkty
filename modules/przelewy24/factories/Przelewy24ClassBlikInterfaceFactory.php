<?php
/**
 * Class Przelewy24ClassBlikInterfaceFactory
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
class Przelewy24ClassBlikInterfaceFactory
{
    /**
     * Create instance of Przelewy24ClassBlikInterface.
     *
     * @return Przelewy24ClassBlikInterface
     * @throws Exception
     */
    public static function getDefault()
    {
        return Przelewy24ClassFactory::buildDefault();
    }
}
