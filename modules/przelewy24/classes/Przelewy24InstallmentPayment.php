<?php
/**
 * Class Przelewy24InstallmentPayment
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

class Przelewy24InstallmentPayment
{
    const INSTALLMENT_CALCULATOR_ENDPOINT = 'kalkulator_raty.php';
    const QUERY_PARAMETER_AMOUNT_NAME = 'ammount';
    const RESULT_TAB_SEPARATOR = '<br>';

    const LIVE_URL = 'live_url';
    const PART_COUNT = 'part_count';
    const PART_COST = 'part_cost';
    const PRODUCT_AMOUNT = 'product_amount';

    /**
     * Get installment payment data.
     *
     * @param float $amount
     * @return array|null
     * @throws Exception
     */
    public static function getInstallmentPaymentData($amount)
    {
        $p24c = Przelewy24ClassStaticInterfaceFactory::getDefault();
        if ((1 !== (int)Configuration::get('PS_SSL_ENABLED')) ||
            (0 === (int)Configuration::get('P24_INSTALLMENT_PAYMENT_METHOD')) ||
            ($amount < $p24c::getMinInstallmentValue())) {
            return null;
        }

        $amountInt = (int)round($amount * 100);
        $liveUrl = $p24c::getHostForEnvironment();
        $calculatorAlior = Przelewy24Helper::requestGet(
            $liveUrl . self::INSTALLMENT_CALCULATOR_ENDPOINT . '?'
            . self::QUERY_PARAMETER_AMOUNT_NAME . '=' . $amountInt
        );
        $resultTab = explode(self::RESULT_TAB_SEPARATOR, $calculatorAlior);

        return array(
            self::LIVE_URL => $liveUrl,
            self::PART_COUNT => $resultTab[0],
            self::PART_COST => $resultTab[1],
            self::PRODUCT_AMOUNT => $amount,
        );
    }
}
