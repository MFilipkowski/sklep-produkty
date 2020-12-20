{*
*
* @author Przelewy24
* @copyright Przelewy24
* @license https://www.gnu.org/licenses/lgpl-3.0.en.html
*
*}
{extends file='page.tpl'}
{capture name=path}{l s='Pay with Przelewy24' mod='przelewy24'}{/capture}
{assign var='current_step' value='payment'}
{block name='page_content'}
<div class="p24-payment-return-page przelewy-24">
    <link href="https://secure.przelewy24.pl/skrypty/ecommerce_plugin.css.php" rel="stylesheet" type="text/css"
          media="all">

    <a href="http://przelewy24.pl" target="_blank">
        <img src="{$logo_url}"
             alt="{l s='Pay with Przelewy24' mod='przelewy24'}">
    </a>
    {if 'ok' === $status}
        <p>{l s='Your order is ready.' mod='przelewy24'}
            <br><br>- {l s='Total amount' mod='przelewy24'}:
            <span class="price"><strong>{$total_to_pay}</strong></span>
            <br><br>{l s='We sent for you email with this information.' mod='przelewy24'}
            <br><br>{l s='For any questions or information, contact with' mod='przelewy24'}
            <a href="{$link->getPageLink('contact', true)|escape:'html'}">{l s='customer service' mod='przelewy24'}</a>.
        </p>
        {if $P24_PAYMENT_METHOD_LIST}
            <p>
                {l s='Select payment method' mod='przelewy24'}:
            </p>
        {elseif $payment_method_selected_id > 0}
            <p>
                {l s='Your payment method' mod='przelewy24'}:
                <strong>
                    {$payment_method_selected_name}
                </strong>
            </p>
            <p>
                <img alt="{$payment_method_selected_name}"
                     src="https://secure.przelewy24.pl/template/201312/bank/logo_{$payment_method_selected_id}.gif">
            </p>
        {/if}
        {if $card_remember_input}
            {if $customer_cards|sizeof > 0}
                <div class="p24-recurring">
                    <p>
                        {l s='Your stored credit cards' mod='przelewy24'}:
                    </p>
                    {foreach from=$customer_cards key=id item=card}
                        <a class="bank-box recurring"
                           data-id="{$card.card_type_md5}"
                           data-card-id="{$card.id}"
                           data-action="{$charge_card_url}">
                            <div class="bank-logo bank-logo-{$card.card_type_md5}">
                                <span>{$card.mask_substr}</span>
                            </div>
                            <div class="bank-name">{$card.card_type}</div>
                        </a>
                    {/foreach}
                </div>
            {/if}
            {if !$customer_is_guest}
            <div class="">
                <label>
                    <input data-action="{$p24_ajax_notices_url}" {if $remember_customer_cards}checked="checked"{/if}
                           type="checkbox"
                           id="p24-remember-my-card"
                           class="p24-remember-my-card"
                           name="p24-remember-my-card" value="1">
                    <span>{l s='Remember my payment card' mod='przelewy24'}</span>
                </label>
            </div>
            {/if}
        {/if}

        {if $P24_PAYMENT_METHOD_LIST}
            {if $p24_paymethod_graphics}
                <div class="pay-method-list pay-method-graphics pay-method-list-first">
                    {if $p24_paymethod_list_first|sizeof > 0}
                        {foreach $p24_paymethod_list_first as $bank_id => $bank_name}
                            {if !empty($bank_name)}
                                <a class="bank-box" {if (145 === ($bank_id|intval) || 218 === ($bank_id|intval)) && $pay_card_inside_shop}onclick="showPayJsPopup()"{/if}
                                   data-id="{$bank_id}">
                                    <div class="bank-logo bank-logo-{$bank_id}"></div>
                                    <div class="bank-name">{$bank_name}</div>
                                </a>
                            {/if}
                        {/foreach}
                    {/if}
                </div>
                <div class="p24-text-center">
                    <div class="p24-stuff-nav">
                        <div class="p24-more-stuff p24-stuff">
                            {l s='More payment methods' mod='przelewy24'}
                        </div>
                        <div class="p24-less-stuff p24-stuff">
                            {l s='Less payment methods' mod='przelewy24'}
                        </div>
                    </div>
                </div>
                <div class="pay-method-list pay-method-graphics pay-method-list-second" style="display: none">
                    {if $p24_paymethod_list_second|sizeof > 0}
                        {foreach $p24_paymethod_list_second as $bank_id => $bank_name}
                            {if !empty($bank_name)}
                                <a class="bank-box" {if (145 === ($bank_id|intval) || 218 === ($bank_id|intval)) && $pay_card_inside_shop}onclick="showPayJsPopup()"{/if}
                                   data-id="{$bank_id}">
                                    <div class="bank-logo bank-logo-{$bank_id}"></div>
                                    <div class="bank-name">{$bank_name}</div>
                                </a>
                            {/if}
                        {/foreach}
                    {/if}
                </div>
            {else}
                <ul class="pay-method-list pay-method-text-list pay-method-list-first">
                    {if $p24_paymethod_list_first|sizeof > 0}
                        {foreach $p24_paymethod_list_first as $bank_id => $bank_name}
                            {if !empty($bank_name)}
                                <li>
                                    <input type="radio" class="bank-box"
                                           {if (145 === ($bank_id|intval) || 218 === ($bank_id|intval)) && $pay_card_inside_shop}onclick="showPayJsPopup()"{/if} data-id="{$bank_id}"
                                           id="paymethod-bank-id-{$bank_id}"
                                           name="paymethod-bank">
                                    <label for="paymethod-bank-id-{$bank_id}"
                                           style="font-weight:normal;position:relative; top:-3px;">
                                        {$bank_name}
                                    </label>
                                </li>
                            {/if}
                        {/foreach}
                    {/if}
                </ul>
                <div class="p24-text-center">
                    <div class="p24-stuff-nav">
                        <div class="p24-more-stuff p24-stuff">
                            {l s='More payment methods' mod='przelewy24'}
                        </div>
                        <div class="p24-less-stuff p24-stuff">
                            {l s='Less payment methods' mod='przelewy24'}
                        </div>
                    </div>
                </div>
                <ul class="pay-method-list pay-method-text-list pay-method-list-second" style="display: none">
                    {if $p24_paymethod_list_second|sizeof > 0}
                        {foreach $p24_paymethod_list_second as $bank_id => $bank_name}
                            {if !empty($bank_name)}
                                <li>
                                    <input type="radio" class="bank-box"
                                           {if (145 === ($bank_id|intval) || 218 === ($bank_id|intval)) && $pay_card_inside_shop}onclick="showPayJsPopup()"{/if} data-id="{$bank_id}"
                                           id="paymethod-bank-id-{$bank_id}"
                                           name="paymethod-bank">
                                    <label for="paymethod-bank-id-{$bank_id}"
                                           style="font-weight:normal;position:relative; top:-3px;">
                                        {$bank_name}
                                    </label>
                                </li>
                            {/if}
                        {/foreach}
                    {/if}
                </ul>
            {/if}
        {/if}
        <form action="{$p24_url}" method="post" id="przelewy24Form" name="przelewy24Form"
              accept-charset="utf-8">
            <input type="hidden" name="p24_merchant_id" value="{$p24_merchant_id}">
            <input type="hidden" name="p24_session_id" value="{$p24_session_id}">
            <input type="hidden" name="p24_pos_id" value="{$p24_pos_id}">
            <input type="hidden" name="p24_amount" value="{$p24_amount}">
            <input type="hidden" name="p24_currency" value="{$p24_currency}">
            <input type="hidden" name="p24_description" value="{$p24_description}">
            <input type="hidden" name="p24_email" value="{$p24_email}">
            <input type="hidden" name="p24_client" value="{$p24_client}">
            <input type="hidden" name="p24_address" value="{$p24_address}">
            <input type="hidden" name="p24_zip" value="{$p24_zip}">
            <input type="hidden" name="p24_city" value="{$p24_city}">
            <input type="hidden" name="p24_country" value="{$p24_country}">
            <input type="hidden" name="p24_encoding" value="UTF-8">
            <input type="hidden" name="p24_url_status" value="{$p24_url_status}">
            <input type="hidden" name="p24_url_return" value="{$p24_url_return}">
            <input type="hidden" name="p24_api_version" value="{$p24_api_version}">
            <input type="hidden" name="p24_ecommerce" value="{$p24_ecommerce}">
            <input type="hidden" name="p24_ecommerce2" value="{$p24_ecommerce2}">
            <input type="hidden" name="p24_language" value="{$p24_language}">
            <input type="hidden" name="p24_sign" value="{$p24_sign}">
            <input type="hidden" name="p24_wait_for_result" value="{$p24_wait_for_result}">
            <input type="hidden" name="p24_shipping" value="{$p24_shipping}">
            <input type="hidden" name="p24_method" value="{$payment_method_selected_id}">
            <input type="hidden" name="p24_card_customer_id" value="">

            {foreach $p24ProductItems as $name => $value}
                <input type="hidden" name="{$name}" value="{$value}">
            {/foreach}

            {if $accept_in_shop}
                <div>
                    <p id="p24_regulation_accept_text" style="color: red;">
                        {l s='Please accept the Przelewy24 Terms' mod='przelewy24'}
                    </p>
                    <div class="float-xs-left">
                    <span class="custom-checkbox" style="display: flex;">
                        <input type="checkbox" name="p24_regulation_accept" id="p24_regulation_accept" value="1">
                        <span><i class="material-icons rtl-no-flip checkbox-checked"></i></span>
                    </span>
                    </div>
                    <div>
                        <label for="p24_regulation_accept">
                            <span>{l s='Yes, I have read and accept Przelewy24.pl terms.' mod='przelewy24'}</span>
                        </label>
                    </div>
                </div>
            {/if}

            <br>

            {if 'blik_uid' === $p24_method}
                <div class="p24-loader"></div>
                <div class="p24-loader-bg"></div>
                <input type="hidden" name="p24_blik_method" value="{$p24_method}">
                {if $p24_blik_alias}
                    <p id="blikAlias">
                        <strong>
                            {l s='You have existing alias, please proceed with your order' mod='przelewy24'}
                        </strong>
                    </p>
                    <div id="blikAliasAlternativeKeys">
                        <strong>
                            {l s='You have alternative aplications key, please chose one' mod='przelewy24'}
                        </strong>
                    </div>
                {/if}
                <div id="blikCodeContainer" class="form-group" {if $p24_blik_alias}style="display: none;"{/if}
                     data-websocket-url="{$p24_blik_websocket}"
                     data-shop-order-id="{$p24_shop_order_id}"
                     data-payment-failed-url="{$p24_payment_failed_url}"
                     data-ajax-verify-blik-url="{$p24_blik_ajax_verify_url}"
                     data-ajax-blik-error-url="{$p24_blik_error_url}"
                >
                    <div class="alert alert-warning" id="blikAliasError"></div>
                    <div class="alert alert-warning" id="declinedAlias">
                        {l s='Your Blik alias was declined, please provide BlikCode' mod='przelewy24'}
                    </div>
                    <input type="text" class="form-control" id="blikCode" name="p24_blik_code"
                           placeholder="{l s='Your BlikCode' mod='przelewy24'}" autocomplete="off" maxlength="6">
                    <span id="blikCodeError" class="help-block"></span>
                    <span id="wrongBlikCode" class="help-block">
                        {l s='BlikCode needs to be exactly 6 digits' mod='przelewy24'}
                    </span>
                </div>
                <br>
                <p>
                    <strong>{l s='Please get your mobile device with BLIK application ready to confirm payment' mod='przelewy24'}</strong>
                </p>
            {/if}

            <br>

            {if $accept_in_shop}
                {$submitButtonDisabled = 'disabled'}
            {else}
                {$submitButtonDisabled = ''}
            {/if}
            {if $payment_method_selected_id > 0}
                <button data-validation-required="{$validationRequired}" data-text-oneclick="{l s='Pay by OneClick' mod='przelewy24'}"  {$submitButtonDisabled} id="submitButton" class="btn btn-primary" {if 2 === ($validationRequired|intval)}data-validation-link="{$validationLink}" type="button" onclick="proceedPayment({$cartId})"{else} onclick="formSend();" type="submit"{/if} >{l s='Pay' mod='przelewy24'}</button>
            {elseif isset($p24_blik_code)}
                <button {$submitButtonDisabled} id="submitButton" onclick="formSend();" class="btn btn-primary">{l s='Pay by Blik' mod='przelewy24'}</button>
            {else}
                <button {$submitButtonDisabled} id="submitButton" data-validation-required="{$validationRequired}" data-text-oneclick="{l s='Pay by OneClick' mod='przelewy24'}" class="btn btn-primary" {if 2 === ($validationRequired|intval)}data-validation-link="{$validationLink}" type="button" onclick="proceedPayment({$cartId})"{else} onclick="formSend();" type="submit"{/if}>{l s='Pay by Przelewy24' mod='przelewy24'}</button>
            {/if}
        </form>
        {if !isset($p24_blik_code)}
            <p class="p24-small-text">
                {l s='Now you will be redirected to the Przelewy24 to process payments.' mod='przelewy24'}
            </p>
        {/if}
    {elseif 'payment' === $status}
        <p class="warning">
            {l s='Thank you for your order' mod='przelewy24'}
        </p>
    {else}
        <p class="warning">
            {l s='There was an error. Contact with' mod='przelewy24'}
            <a href="{$link->getPageLink('contact', true)|escape:'html'}">{l s='customer service' mod='przelewy24'}</a>.
        </p>
    {/if}
</div>
<div id="P24FormAreaHolder" onclick="hidePayJsPopup();" style="display: none">
    <div id="P24FormArea" class="popup" style="visibility: hidden"></div>
    <div id="p24-card-loader"></div>
    <div id="p24-card-alert" style="display: none"></div>
</div>

<div class="row p24-register-card-wrapper"
     data-dictionary='{
                        "cardHolderLabel":"{l s='Name and surname' mod='przelewy24'}",
                        "cardNumberLabel":"{l s='Card number' mod='przelewy24'}",
                        "cvvLabel":"{l s='cvv' mod='przelewy24'}",
                        "expDateLabel":"{l s='Expired date' mod='przelewy24'}",
                        "payButtonCaption":"{l s='Pay' mod='przelewy24'}",
                        "description":"{l s='Register card and payment' mod='przelewy24'}",
                        "threeDSAuthMessage":"{l s='Click to redirect to 3ds payment.' mod='przelewy24'}",
                        "registerCardLabel":"{l s='Register card' mod='przelewy24'}"
                    }'
     data-card-action="cardCharge"
     data-card-cart-id="{$cartId}"
     data-successCallback="payInShopSuccess"
     data-failureCallback="payInShopFailure"
     data-action-payment-success="{$link->getModuleLink('przelewy24', 'paymentSuccessful', [], true)|escape:'html'}"
     data-action-payment-failed="{$link->getModuleLink('przelewy24', 'paymentFailed', [], true)|escape:'html'}"
     data-action-register-card-form="{$link->getModuleLink('przelewy24', 'ajaxChargeCardForm', [], true)|escape:'html'}"
     data-action-remember_order_id="{$link->getModuleLink('przelewy24', 'ajaxRememberOneclickOrderId', [], true)|escape:'html'}"
     data-action-payment-check="{$link->getModuleLink('przelewy24', 'ajaxPaymentCheck', [], true)|escape:'html'}">
</div>
{/block}