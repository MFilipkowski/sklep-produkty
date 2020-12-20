{*
*
* @author Przelewy24
* @copyright Przelewy24
* @license https://www.gnu.org/licenses/lgpl-3.0.en.html
*
*}
<div class="tab-content panel przelewy-24">
    <div class="panel-heading">
        {l s='Refunds to Przelewy24' mod='przelewy24'}
    </div>

    {if '' !== $refundError}
        <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>
            {foreach from=$refundError item=singleError}
                <p>{l s=$singleError mod='przelewy24'}</p>
            {/foreach}
        </div>
    {/if}
    {if $getRefundInfo}
        {if $amount > 0}
            {assign var="amountToRefund" value=$amount/100}

            {if !$errorRefunds}
                <p>
                    {l s='The function of generating returns from the store requires additional configuration of Przelewy24 account. To activate this functionality, please contact the Customer Service Department at the address serwis@przelewy24.pl.' mod='przelewy24'}
                </p>
            {else}
                <p>
                    {l s='Here you can send a refund to the customer. The amount of the refund may not exceed the value of the transaction and the amount of funds available in your account.' mod='przelewy24'}
                </p>
                <p>{l s='Amount to refund' mod='przelewy24'}: {$amountToRefund} {$sign}</p>
                <form class="form-horizontal hidden-print refundAmount" method="post">
                    <div class="form-group">
                        <div class="col-lg-2">
                            <label for="amountToRefund">{l s='Amount' mod='przelewy24'}</label>
                            <input class="form-control" id="amountToRefund" type="number" name="amountToRefund"
                                   value="{$amountToRefund}" step="0.01">
                            <input class="btn btn-primary pull-right" type="submit" name="submitRefund" value="{l s='Send' mod='przelewy24'}">
                            <input type="hidden" id="refundAmountText" value="{l s='This will generate outgoing transfer. Can you confirm the operation?' mod='przelewy24'}">
                            <input type="hidden" name="refundToken" value="{$refundToken}">
                        </div>
                    </div>
                </form>
            {/if}
        {else}
            <p>{l s='The payment has already been fully refunded - no funds to make further returns.' mod='przelewy24'}</p>
        {/if}

        {if $refunds}
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            <span class="title_box">
                                {l s='Amount refunded' mod='przelewy24'}
                            </span>
                        </th>
                        <th>
                            <span class="title_box">
                                {l s='Date of refund' mod='przelewy24'}
                            </span>
                        </th>
                        <th>
                            <span class="title_box">
                                Status
                            </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$refunds item=refund}
                        <tr>
                            <td>
                                {$refund['amount_refunded']/100} {$sign}
                            </td>
                            <td>
                                {$refund['created']}
                            </td>
                            <td>
                                {l s=$refund['status'] mod='przelewy24'}
                            </td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        {/if}
    {else}
        <p>{l s='To display refunds balance, please contact the Przelewy24 Customer Service' mod='przelewy24'}</p>
    {/if}
</div>

