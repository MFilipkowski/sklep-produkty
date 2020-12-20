<?php
/**
 * Class Przelewy24ServiceInstall
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24ServiceInstall
 */
class Przelewy24ServiceInstall extends Przelewy24Service
{
    /**
     * Execute.
     */
    public function execute()
    {
        // we check that the Multistore feature is enabled, and if so,
        // set the current context to all shops on this installation of PrestaShop.
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        Configuration::updateValue('P24_GRAPHICS_PAYMENT_METHOD_LIST', 1);
        Configuration::updateValue('P24_PAYMENT_METHOD_LIST', 1);
        Configuration::updateValue('P24_PAYMENTS_ORDER_LIST_FIRST', '25,31,112,20,65,');

        Przelewy24Helper::addOrderState();

        $this->createDatabaseTables();
        Configuration::updateValue('P24_PLUGIN_VERSION', $this->getPrzelewy24()->version);
    }

    /**
     * Create database tables.
     */
    private function createDatabaseTables()
    {
        $tableName = addslashes(_DB_PREFIX_ . Przelewy24Recurring::TABLE);
        $sql = '
          CREATE TABLE IF NOT EXISTS `' . $tableName . '` (
            `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
            `website_id` INT UNSIGNED NOT NULL,
            `customer_id` INT UNSIGNED NOT NULL,
            `reference_id` VARCHAR(35) NOT NULL,
            `expires` VARCHAR(4) NOT NULL,
            `mask` VARCHAR (32) NOT NULL,
            `card_type` VARCHAR (20) NOT NULL,
            `timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`),
          UNIQUE KEY `UNIQUE_FIELDS` (`mask`,`card_type`,`expires`,`customer_id`,`website_id`));';
        Db::getInstance()->Execute($sql);

        $tableName = addslashes(_DB_PREFIX_ . Przelewy24CustomerSetting::TABLE);
        $sql = '
          CREATE TABLE IF NOT EXISTS`' . $tableName . '` (
			`customer_id` INT UNSIGNED NOT NULL PRIMARY KEY,
			`card_remember` TINYINT UNSIGNED DEFAULT 0
		  );';
        Db::getInstance()->Execute($sql);

        $tableName = addslashes(_DB_PREFIX_ . Przelewy24BlikAlias::TABLE);
        $sql = '
          CREATE TABLE IF NOT EXISTS`' . $tableName . '` (
			`customer_id` INT UNSIGNED NOT NULL PRIMARY KEY,
			`alias` VARCHAR(255) DEFAULT 0,
			`last_order_id` INT UNSIGNED NULL
		  );';
        Db::getInstance()->Execute($sql);

        $p24OrdersTable = addslashes(_DB_PREFIX_ . Przelewy24Order::TABLE);
        $sql = '
          CREATE TABLE IF NOT EXISTS `' . $p24OrdersTable . '` (
            `p24_order_id` INT UNSIGNED NOT NULL PRIMARY KEY,
			`pshop_order_id` INT UNSIGNED NOT NULL,
			`p24_session_id` VARCHAR(100) NOT NULL
		  );';

        Db::getInstance()->Execute($sql);

        $tableName = addslashes(_DB_PREFIX_ . Przelewy24Extracharge::TABLE);
        $sql = 'CREATE TABLE IF NOT EXISTS`' . $tableName . '` (
			`id_extracharge` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
			`id_order` INT UNSIGNED NOT NULL,
			`extra_charge_amount` INT NOT NULL
			);';

        Db::getInstance()->Execute($sql);
    }
}
