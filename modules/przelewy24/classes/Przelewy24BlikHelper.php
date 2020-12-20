<?php
/**
 * Class Przelewy24BlikHelper
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24BlikHelper
 */
class Przelewy24BlikHelper
{
    /**
     * Retrieve existing customer alias, or try getting it from SOAP
     *
     * @param Customer $customer
     *
     * @return bool|string
     * @throws Exception
     */
    public static function getSavedAlias(Customer $customer)
    {
        $blikAlias = new Przelewy24BlikAlias($customer->id);
        if (Validate::isLoadedObject($blikAlias)) {
            if (!$blikAlias->alias) {
                $p24BlikSoap = Przelewy24BlikSoapInterfaceFactory::getDefault();
                if ($blikAlias->alias = $p24BlikSoap->getAlias($blikAlias->last_order_id)) {
                    $blikAlias->save();
                }
            }
            if (Przelewy24BlikHelper::checkIfAliasIsRegisteredForEmail($customer->email, $blikAlias->alias)) {
                return $blikAlias->alias;
            }
        }

        return false;
    }

    /**
     * Method checks (using Przelewy24 api) if alias is assigned to email address
     *
     * @param string $email
     * @param string $aliasFromShop
     *
     * @return bool
     * @throws Exception
     */
    public static function checkIfAliasIsRegisteredForEmail($email, $aliasFromShop)
    {
        $blikSoap = Przelewy24BlikSoapInterfaceFactory::getDefault();
        $aliases = $blikSoap->getAliasesByEmail($email);
        if (!$aliases || !sizeof($aliases)) {
            return false;
        }

        foreach ($aliases as $alias) {
            if ($alias['value'] === $aliasFromShop && 'REGISTERED' === $alias['status']) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns websocket address
     *
     * @param bool $testMode
     *
     * @return string
     */
    public static function getWebsocketHost($testMode = false)
    {
        if ($testMode) {
            return 'wss://sandbox.przelewy24.pl/wss/blik/';
        }

        return 'wss://sandbox.przelewy24.pl/wss/blik/';
    }
}
