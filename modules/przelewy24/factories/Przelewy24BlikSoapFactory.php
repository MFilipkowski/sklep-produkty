<?php
/**
 * Class Przelewy24ServiceAdminForm
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * One of factories for Przelewy24 plugin.
 *
 * The class is aware of the whole configuration.
 *
 */
class Przelewy24BlikSoapFactory
{
    /**
     * Create instance of Przelewy24BlikSoapInterface for suffix.
     *
     * @param string $suffix Money suffix.
     * @return Przelewy24BlikSoap
     * @throws Exception
     */
    public static function buildForSuffix($suffix)
    {
        $apiKey = Configuration::get('P24_API_KEY' . $suffix);
        $merchantId = (int)Configuration::get('P24_MERCHANT_ID' . $suffix);
        $posId = (int)Configuration::get('P24_SHOP_ID' . $suffix);
        $salt = Configuration::get('P24_SALT' . $suffix);
        $testMode = (bool)Configuration::get('P24_TEST_MODE' . $suffix);

        return self::buildFromParams($apiKey, $merchantId, $posId, $salt, $testMode);
    }

    /**
     * Create instance of Przelewy24BlikSoap
     *
     * @return Przelewy24BlikSoap
     * @throws Exception
     */
    public static function buildDefault()
    {
        return self::buildForSuffix('');
    }

    /**
     * Create instance of Przelewy24BlikSoap
     *
     * @param string $apiKey
     * @param int $merchantId
     * @param int $posId
     * @param string $salt
     * @param bool $testMode
     * @return Przelewy24BlikSoap
     * @throws Exception
     */
    public static function buildFromParams($apiKey, $merchantId, $posId, $salt, $testMode)
    {
        $p24Class = Przelewy24ClassFactory::buildFromParams($merchantId, $posId, $salt, $testMode);

        return new Przelewy24BlikSoap($apiKey, $p24Class, $merchantId, $posId, $salt, $testMode);
    }
}
