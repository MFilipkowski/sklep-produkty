<?php
/**
 * Interface Przelewy24ClassStaticInterface
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Interface Przelewy24ClassStaticInterface
 */
interface Przelewy24ClassStaticInterface
{
    /**
     * Returns host URL For Environmen
     *
     * @param bool $isTestMode
     * @return string
     */
    public static function getHostForEnvironment($isTestMode = false);

    /**
     * Get min installment value
     *
     * @return int
     */
    public static function getMinInstallmentValue();
}
