{*
*
* @author Przelewy24
* @copyright Przelewy24
* @license https://www.gnu.org/licenses/lgpl-3.0.en.html
*
*}
<div class="p24-sortable-contener" name="paymethod_list{$suffix}">
    <div class="p24-container">
        <p>
            {l s='Visable payment methods' mod='przelewy24'}:
        </p>
        <div class="draggable-list draggable-list-first available" data-name="list{$suffix}" style="float:left; width: 100%">

            {if $p24_paymethod_list_first{$suffix}|sizeof > 0}
                {foreach $p24_paymethod_list_first{$suffix} as $bank_id => $bank_name}
                    {if !empty($bank_name)}
                        <div class="draggable-item bank-box" data-id="{$bank_id}">
                            <div class="bank-logo bank-logo-{$bank_id}"></div>
                            <div class="bank-name">{$bank_name}</div>
                        </div>
                    {/if}
                {/foreach}
            {/if}

            <p class="p24-hint">
                {l s='Drag and drop icons between sections' mod='przelewy24'}
            </p>
        </div>
        <p>
            {l s='Payment methods visible on (more...) button' mod='przelewy24'}:
        </p>
        <div class="draggable-list draggable-list-second available" data-name="list{$suffix}" style="float:left; width: 100%">

            {if $p24_paymethod_list_second{$suffix}|sizeof > 0}
                {foreach $p24_paymethod_list_second{$suffix} as $bank_id => $bank_name}
                    {if !empty($bank_name)}
                        <div class="draggable-item bank-box" data-id="{$bank_id}">
                            <div class="bank-logo bank-logo-{$bank_id}"></div>
                            <div class="bank-name">{$bank_name}</div>
                        </div>
                    {/if}
                {/foreach}
            {/if}

        </div>
    </div>
</div>
