/*
* @author Przelewy24
* @copyright Przelewy24
* @license https://www.gnu.org/licenses/lgpl-3.0.en.html
*/
$(document).ready(function () {
    if ($('[name="p24_blik_method"]').length) {
        $('#przelewy24Form').on('submit', function () {
            hideBlikErrors();
            var blikAction = $(this).attr('action');
            if (blikCodeContainer.is(':visible')) {
                var submitFlag = validateBlikCode();
                var blikCode = $('[name="p24_blik_code"]').val();
                if (!submitFlag) return false;
            }
            p24showLoader();
            submitter.attr('disabled', 'disabled');
            var submitData = null;
            if ($('#declinedAlias').is(':visible')) {
                submitData = {
                    blikCode: blikCode,
                    blikCodeCheck: true,
                    declinedAlias: true
                }
            }
            else if (blikCodeContainer.is(':visible')) {
                submitData = {
                    blikCode: blikCode,
                    blikCodeCheck: true
                }
            } else {
                submitData = {
                    blikCode: false
                }
            }
            alternativeKeyValue = $('input[name=aliasAlternativesKeys]:checked').val();
            if (undefined !== alternativeKeyValue && null !== alternativeKeyValue) {
                submitData.alternativeKey = $('input[name=aliasAlternativesKeys]:checked').val();
            }
            $.ajax(blikAction, {
                method: 'POST',
                type: 'POST',
                data: submitData,
                error: function () {
                    payInShopFailure();
                },
                success: function (response) {
                    response = JSON.parse(response);
                    if ('success' === response.status) {
                        validateBlikTransaction(
                            response.orderId,
                            response.urlSuccess
                        );
                        return false;
                    } else {
                        if (0 === $("input[id*=alias-alternative-key]").length) {
                            showAlternativeKeys(response);
                        }
                    }
                    p24hideLoader();
                    if (!handleBlikError(response.error)) {
                        location.href = response.urlFail;
                    }
                },
                complete: function (response) {
                    submitter.attr('disabled', false);
                }
            });
            return false;
        });
    }
});
var retryInterval = false;
var submitter = $('#przelewy24Form').find('[type="submit"]');
var blikCodeContainer = $('#blikCodeContainer');
var urlFail = blikCodeContainer.attr('data-payment-failed-url') + '&errorCode=';
function validateBlikTransaction(orderId, urlSuccess) {
    var retryLimit = 20;
    var retries = 0;
    var wsRequest = {
        action: 'Subscribe',
        params: {
            orderId: orderId
        }
    };

    function handleWebsocketResponse(data) {

        // Special case for Alias + BlikCode
        if (68 === parseInt(data.reasonCode) ||
            68 === parseInt(data.error.errorCode)) {
            declinedBlikAlias();
        } else {
            $.ajax(blikCodeContainer.attr('data-ajax-blik-error-url'), {
                type: 'POST',
                method: 'POST',
                data: {
                    errorCode: data.error.errorCode,
                    reasonCode: data.reasonCode
                },
                error: function () {
                    payInShopFailure();
                },
                success: function (response) {
                    response = JSON.parse(response);
                    if (!handleBlikError(response.error)) {
                        location.href = urlSuccess;
                    }
                },
                complete: function () {
                    p24hideLoader();
                }
            });
        }
    }

    function validateAliasReturn(data) {
        var msg = JSON.parse(data);
        if ('DECLINED' === msg.status) {
            submitter.attr('disabled', false);
            if (68 === parseInt(msg.reasonCode) ||
                68 === parseInt(msg.error.errorCode)) {  // Special case for Alias + BlikCode
                declinedBlikAlias();
            } else if (parseInt(msg.reasonCode) > 0 || parseInt(msg.error.errorCode) > 0) {
                handleBlikError(msg.error);
            } else {
                return false;
            }
        } else if ('AUTHORIZED' === msg.status) {
            if ('wait' === msg.error.errorType) {  // Unregistered transaction, trying again
                return false;
            } else if (parseInt(msg.reasonCode) > 0 || parseInt(msg.error.errorCode) > 0) {
                handleBlikError(msg.error);
            } else {
                location.href = urlSuccess;
            }
        } else if ('ERROR' === msg.status || 'undefined' === typeof msg.status) {
            location.href = urlFail + msg.reasonCode;
        } else if ('PROCESSING' === msg.status) {
            return false;
        }
        p24hideLoader();
        return true;
    }

    function checkRetryLimit() {
        retries++;
        if (retries === retryLimit) {
            // Retry limit, continue and leave it to paymentStatus

            location.href = urlFail;
            return true;
        }
        return false;
    }

    function fallbackAjaxRequest() {
        $.ajax(blikCodeContainer.attr('data-ajax-verify-blik-url'), {
            method: 'POST',
            type: 'POST',
            data: wsRequest,
            error: function (xhr) {
                // If AJAX request also fails, continue and leave it to paymentStatus
                if (4 === xhr.readyState) { // do not redirect if interrupted
                    location.href = urlFail;
                }
            },
            success: function (result) {
                if (!validateAliasReturn(result)) {
                    checkRetryLimit();
                    setTimeout(fallbackAjaxRequest, 1000);
                }
            }
        });
    }
    fallbackAjaxRequest();

    // if ('WebSocket' in window && (typeof WebSocket === 'function' || typeof WebSocket === 'object')) {
    //     var ws = new WebSocket(blikCodeContainer.attr('data-websocket-url'));
    //     ws.onopen = function () {
    //         ws.send(JSON.stringify(wsRequest));
    //         retryInterval = setInterval(checkRetryLimit, 800);
    //     };
    //     ws.onerror = function () {
    //         clearInterval(retryInterval);
    //         console.log('WebSocket error connect');
    //         fallbackAjaxRequest();
    //     };
    //     ws.onmessage = function (event) {
    //         handleWebsocketResponse(JSON.parse(event.data));
    //         clearInterval(retryInterval);
    //     };
    // } else {
    //     // No websocket support
    //     fallbackAjaxRequest();
    // }
}
function showAlternativeKeys(response) {
    $("#blikAliasAlternativeKeys").show();
    var html = "";
    $.each(response.aliasAlternatives, function (key, value) {
        var id = "alias-alternative-key-" + key;
        html += "<div id='" + id + "-container' class='form-fields'>";
        html += "<span class='custom-radio'>";
        html += "<input type='radio' id='" + id + "' name='aliasAlternativesKeys' value='" + value['key'] + "' ";
        if (key - 0 === 0) html += "checked='checked'";
        html += "/>";
        html += "<span></span>";
        html += "</span>";
        html += "<label for='" + id + "'>";
        html += "<span>" + value['appLabel'] + "</span>";
        html += "</label>";
        html += "</div>";
    });
    $("#blikAliasAlternativeKeys").append(html);
}
function validateBlikCode() {
    var blikCodeInput = $('[name="p24_blik_code"]');
    if (!blikCodeInput.is(':visible')) return true;
    var blikCodeValidation = blikCodeInput.val();
    if (/^[0-9]{6}$/.test(blikCodeValidation)) {
        blikCodeInput.parent('div').removeClass('has-error');
        $('#wrongBlikCode').hide();
        return true;
    } else {
        blikCodeInput.parent('div').addClass('has-error');
        $('#wrongBlikCode').show();
        return false;
    }
}
function declinedBlikAlias() {
    if ('undefined' !== typeof retryInterval && retryInterval)
        clearInterval(retryInterval);
    $('#blikAlias').hide();
    $('#blikAliasError').hide();
    $('#blikCodeContainer').show();
    $('#declinedAlias').show();
    p24hideLoader();
}
function nonuniqueBlikAlias() {
    // TODO
}
function hideBlikErrors() {
    $('[name="p24_blik_code"]').parent('div').removeClass('has-error');
    $('#blikAliasError').hide();
    $('#blikCodeError').hide();
}
function handleBlikError(errorObject) {
    if (errorObject) {
        switch (errorObject.errorType) {
            case 'fatal':
                if (errorObject.errorCode - 0 !== 51) {
                    location.href = urlFail + errorObject.errorCode;
                }
                break;
            case 'alias':
                $('#blikAlias').hide();
                $('#blikCodeContainer').show();
                $('#blikAliasError').show().text(errorObject.errorMessage);
                break;
            case 'blikcode':
                $('#blikAlias').hide();
                $('#blikCodeContainer').show();
                $('[name="p24_blik_code"]').parent('div').addClass('has-error');
                $('#blikCodeError').show().text(errorObject.errorMessage);
                break;
            default:
                return false;
                break;
        }
    }
    return true;
}