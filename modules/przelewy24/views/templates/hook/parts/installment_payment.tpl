{*
*
* @author Przelewy24
* @copyright Przelewy24
* @license https://www.gnu.org/licenses/lgpl-3.0.en.html
*
*}
{if $currency.iso_code_num === '985' } {* Polish zloty iso code*}
    <div>
        <a target="_blank" href="{$installment_payment[constant('Przelewy24InstallmentPayment::LIVE_URL')]|escape:'html'}kalkulator_raty/index.html?{constant('Przelewy24InstallmentPayment::QUERY_PARAMETER_AMOUNT_NAME')|escape:'html'}={$installment_payment[constant('Przelewy24InstallmentPayment::PRODUCT_AMOUNT')]}" title="Raty Alior Bank">
            <img class="installment-payment-logo-alior-bank" src="{$urls.base_url}modules/przelewy24/views/img/logo_alior.jpg" alt="Logo Alior Bank">{$installment_payment[constant('Przelewy24InstallmentPayment::PART_COUNT')]} rat x ~{$installment_payment[constant('Przelewy24InstallmentPayment::PART_COST')]} zł
        </a>
        <br>
        <a target="_blank" href="https://www.mbank.net.pl/mraty_1/index.html?kwota={$installment_payment[constant('Przelewy24InstallmentPayment::PRODUCT_AMOUNT')]}" title="Raty Mbank">
            <img class="installment-payment-logo-mbank" src="{$urls.base_url}modules/przelewy24/views/img/logo_mbank.gif" alt="Logo Mbank">
        </a>
    </div>
{/if}
