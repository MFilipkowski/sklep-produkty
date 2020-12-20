/*
* @author Przelewy24
* @copyright Przelewy24
* @license https://www.gnu.org/licenses/lgpl-3.0.en.html
*/
$(document).ready(function () {

    $.getScript("//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js", function () {
        p24EnableSortable('.p24-container .draggable-list.available', '.p24-container .draggable-list.available');
        p24EnableSortable('.p24-container .draggable-list.promote', '.p24-container .draggable-list.promote');
    });

    p24UpdateSortableInputs();
    $("input[name='P24_PAYMENT_METHOD_LIST']").change(function () {
        currency = getSuffix();
        p24HideShowAdditionalSettings($(this).val(), 300, currency);
    });
    additionalSettings();

    $('input[name=currency]').change(function () {
        var currentTab = helper_tabs[0][$('input[name=currency]:checked').attr('id')];

        $.each(currentTab, function (index, value) {
            if (['P24_MERCHANT_ID', 'P24_SHOP_ID', 'P24_ADDITIONAL_SETTINGS', 'P24_SALT', 'P24_API_KEY', 'P24_PAYMENTS_ORDER_LIST_FIRST', 'P24_PAYMENTS_ORDER_LIST_SECOND', 'P24_PAYMENTS_PROMOTE_LIST', 'P24_EXTRA_CHARGE_AMOUNT', 'P24_EXTRA_CHARGE_PERCENT'].indexOf(index) >= 0) {
                if (!value) {
                    value = '';
                }
                $('#' + index).val(value);
            } else if (['P24_PAYMENT_METHOD_LIST', 'P24_GRAPHICS_PAYMENT_METHOD_LIST', 'P24_ONECLICK_ENABLE', 'P24_ACCEPTINSHOP_ENABLE', 'P24_BLIK_UID_ENABLE', 'P24_PAY_CARD_INSIDE_ENABLE', 'P24_EXTRA_CHARGE_ENABLED'].indexOf(index) >= 0) {
                if (value > 0) {
                    $('#' + index + '_on').prop('checked', true);
                } else {
                    $('#' + index + '_off').prop('checked', true);
                }
            } else if ('P24_TEST_MODE' === index) {
                if (value > 0) {
                    $('#active_test').prop('checked', true);
                } else {
                    $('#active_prod').prop('checked', true);
                }
            } else if (['P24_VERIFYORDER'].indexOf(index) >= 0) {
                if (!value) {
                    value = '';
                }
                $('#' + index).val(value);
            }
        });
        additionalSettings();
    });
});

function p24HideShowAdditionalSettings(val, speed, currency) {
    $('.p24-sortable-contener').parents('.form-group').fadeOut(speed);
    var selector = '.p24-sortable-contener[name="paymethod_list' + currency + '"], input[name="P24_GRAPHICS_PAYMENT_METHOD_LIST"]';
    if (val > 0) {
        $(selector).parents('.form-group').fadeIn(speed);
    } else {
        $(selector).parents('.form-group').fadeOut(speed);
    }
}

function p24EnableSortable(el, connectWith) {
    $(el).sortable({
        connectWith: connectWith,
        placeholder: "ui-state-highlight",
        forceHelperSize: true,
        cursor: "move",
        tolerance: "pointer",
        revert: 200,
        opacity: 0.75
    }).bind('sortupdate', function () {
        p24UpdateSortableInputs();
    });
}

function p24UpdateSortableInputs() {
    var inputFirst = '';
    var inputSecond = '';
    var inputPromote = '';

    currency = getSuffix();

    $('.draggable-list-first[data-name="list' + currency + '"] .bank-box').each(function () {
        var id = $(this).attr('data-id');
        inputFirst = inputFirst + id + ',';
    });

    $('.draggable-list-second[data-name="list' + currency + '"] .bank-box').each(function () {
        var id = $(this).attr('data-id');
        inputSecond = inputSecond + id + ',';
    });

    $('.draggable-list-promote[data-name="list' + currency + '"] .bank-box').each(function () {
        var id = $(this).attr('data-id');
        inputPromote = inputPromote + id + ',';
    });

    $('input[name="P24_PAYMENTS_ORDER_LIST_FIRST"]').val(inputFirst);
    $('input[name="P24_PAYMENTS_ORDER_LIST_SECOND"]').val(inputSecond);
    $('input[name="P24_PAYMENTS_PROMOTE_LIST"]').val(inputPromote);
}

function getSuffix() {
    if ('PLN' === $('input[name=currency]:checked').attr('id')) {
        currency = "";
    } else {
        currency = "_" + $('input[name=currency]:checked').attr('id');
    }
    return currency;
}

function additionalSettings() {
    var currentTab = helper_tabs[0][$('input[name=currency]:checked').attr('id')]["P24_ADDITIONAL_SETTINGS"];
    if (currentTab["testApi"]) {

        if ('1' === $('input[name="P24_PAYMENT_METHOD_LIST"]:checked').attr('value') + '') {
            p24HideShowAdditionalSettings(true, 0, getSuffix());
        } else {
            p24HideShowAdditionalSettings(false, 0, getSuffix());
        }
        if (currentTab["P24_ONECLICK_ENABLE"]) {
            $("input[name='P24_ONECLICK_ENABLE']").parents('.form-group').show();
        }
        if (currentTab["P24_BLIK_UID_ENABLE"]) {
            $("input[name='P24_BLIK_UID_ENABLE']").parents('.form-group').show();
        }
        $("input[name='P24_PAY_CARD_INSIDE_ENABLE']").parents('.form-group').show();
        $("input[name='P24_PAYMENTS_ORDER_LIST_FIRST']").parents('.form-group').show();
        $("input[name='P24_PAYMENTS_ORDER_LIST_SECOND']").parents('.form-group').show();
        $("input[name='P24_PAYMENTS_PROMOTE_LIST']").parents('.form-group').show();
        $("input[name='P24_PAYMENT_METHOD_LIST']").parents('.form-group').show();
    } else {
        $('.p24-sortable-contener').parents('.form-group').fadeOut(0);
        $("input[name='P24_ONECLICK_ENABLE']").parents('.form-group').hide();
        $("input[name='P24_BLIK_UID_ENABLE']").parents('.form-group').hide();
        $("input[name='P24_PAY_CARD_INSIDE_ENABLE']").parents('.form-group').hide();
        $("input[name='P24_PAYMENTS_ORDER_LIST_FIRST']").parents('.form-group').hide();
        $("input[name='P24_PAYMENTS_ORDER_LIST_SECOND']").parents('.form-group').hide();
        $("input[name='P24_PAYMENTS_PROMOTE_LIST']").parents('.form-group').hide();
        $("input[name='P24_PAYMENT_METHOD_LIST']").parents('.form-group').hide();
        $("input[name='P24_GRAPHICS_PAYMENT_METHOD_LIST']").parents('.form-group').hide();
    }
}
