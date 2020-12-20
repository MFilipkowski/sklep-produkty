# Change Log

## [1.3.36] - 2020-06-04
- making "retry payment" button in order view available also on "mobile" resolutions

## [1.3.35] - 2020-05-05
- accept Przelewy24 terms in shop

## [1.3.34] - 2020-03-26
- remove race condition on return from payment
- fix CSS

## [1.3.33] - 2020-03-11
- fix rounding

## [1.3.32] - 2020-02-27
- card charging failure will no longer cause PHP notice

## [1.3.31] - 2020-02-26
- fix extracharge display for fractional amounts
- update translations
- fix coding standard

## [1.3.30] - 2020-02-10
- fix http error 500 on order view (admin and customer view, paid by Przelewy24), when module settings have been cleared

## [1.3.29] - 2019-12-19
- fix refund for recurring
- restore hidden translations

## [1.3.28] - 2019-12-17
- implementing support for new default PrestaShop email template (extracharge information will be added)
- fix translation in invoice

## [1.3.27] - 2019-12-15
- fix translations

## [1.3.26] - 2019-11-04
- fix extracharge

## [1.3.25] - 2019-08-27
- add custom payment method descriptions

## [1.3.24] - 2019-07-22
- switch to PrestaShop AJAX
- drop old hacks from CSS
- fix translations

## [1.3.23] - 2019-07-10
- Fix for notices reported in debug mode of application.
- Class factories implementation (dependency inversion principle).
- Cling HTML elements correctly.
- Converting application to HTML 5 (usage of HTML style for void tags and replacing obsolete elements and attributes)

## [1.3.22] - 2019-05-22
- url fix
- Yoda’s and strict comparisons
- limit size of logged data

## [1.3.21] - 2019-05-22
- fix for missing additional payment
- adding phpdocs
- few code style refactors
- displaying installment option

## [1.3.20] - 2019-02-05
- add order status config

## [1.3.19] - 2019-02-05
- fix icons for payment methods

## [1.3.18] - 2018-12-26
- Create single function in Przelewy24Helper.php to all code 
    - renderJson
    - getSuffix
    - isSoapExtensionInstalled
- change variable name "sufix" to "suffix"
 
## [1.3.17] - 2018-10-24
- code refactoring. 

## [1.3.16] - 2018-10-22
- Font loading fix.
- The translator fix.
- The return status has been translated.
- Code optimization:
    - using PrestaShop function to add new payment status.
    - using Prestashop Collection and ObjectModel in a process of optimalisation of sql query.


## [1.3.15] - 2018-10-04
- Implemented functionality, which provides customer with a refund.

## [1.3.14] - 2018-09-26
- Additional payment can be now added to order 
- Add protection against recurring payments

## [1.3.13] - 2018-04-06
- Add order creation state select.
- Default currency fix.

## [1.3.12] - 2018-04-06
- Add oneclick.

## [1.3.11] - 2018-04-03
- Add multi currency function.

## [1.3.10] - 2018-12-27
- Add client address to POST.
- Editing translations. 

## [1.3.9] - 2017-11-24

- p24_ecommerce fix

## [1.3.8] - 2017-11-24

- Checking if Blik alias is REGISTERED using email.

## [1.3.7] - 2017-11-17

- Fixed Blik payment.

## [1.3.6] - 2017-11-16

- Merged security changes.

## [1.3.5] - 2017-11-09
- Security fixes.

## [1.3.4] - 2017-11-06
- Wait for result parameter added.

## [1.3.3] - 2017-11-05
- Security fixes.

## [1.3.2] - 2017-10-06
- Removed overwriting Bootstrap styles

## [1.3.1] - 2017-08-22
- Removed calling functions in empty function.

## [1.3.0] - 2017-06-27
- Merge all changes
- Bugsfixed
- WebSocket

## [1.2.8] - 2017-05-12 
- Fixed order statuses for products which aren't in stock product
- Fixed install process

## [1.2.4] - 2017-04-06 
- Fixed add payment card on panel
- Fixed oneClick payment

## [1.2.3] - 2017-04-05 
- Edit styles in card payment 

## [1.2.2] - 2017-03-06
-resumption payment link in order details

## [1.2.1] - 2017-02-14 
- Added ajax card payment

## [1.2.0] - 2017-02-08
- Added payment with Blik OneClick UID
- Fixed remember card checkbox

## [1.1.4] - 2017-01-31
- Remember card - fixed ws url. Fixed error handler

## [1.1.3] - 2017-01-09
- Remember card - default: true
- Added ZenCard.

## [1.1.2] - 2017-01-02 
- Added p24_language param
- Ajax customer remember card - fixed

## [1.1.1] - 2016-12-28 ##
- OneClick payment - bugsfixed
- Fixed pay by card

## [1.1.0] - 2016-12-22 ##
- OneClick payment

## [1.0.5] - 2016-12-19 ##
- Fixed payments methods

## [1.0.4] - 2016-12-16 ##
- Promote payment methods

## [1.0.3] - 2016-12-14 ##
- Show available payment methods in shop
- Sortable payment methods list

## [1.0.2] - 2016-12-09 ##
- Translations: pl, en

## [1.0.1] - 2016-12-09 ##
- Included shared-libs
- Cart products

## [1.0.0] - 2016-12-02 ##
- Created Przelewy24 module
- Added base module functions
- One language: polish
