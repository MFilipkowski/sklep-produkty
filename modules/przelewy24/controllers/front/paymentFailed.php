<?php
/**
 * Class przelewy24paymentFailedModuleFrontController
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24paymentFailedModuleFrontController
 */
class Przelewy24paymentFailedModuleFrontController extends ModuleFrontController
{
    /**
     * Init content.
     */
    public function initContent()
    {
        parent::initContent();

        if (Tools::getValue('errorCode')) {
            $przelewy24BlikErrorEnum = new Przelewy24BlikErrorEnum($this);
            /** @var Przelewy24ErrorResult $error */
            $error = $przelewy24BlikErrorEnum->getErrorMessage((int)Tools::getValue('errorCode'));
            $this->context->smarty->assign(array('errorReason' => $error->getErrorMessage()));
        }

        $this->context->smarty->assign(
            array(
                'logo_url' => $this->module->getPathUri() . 'views/img/logo.png',
                'home_url' => _PS_BASE_URL_,
                'urls' => $this->getTemplateVarUrls(),
            )
        );

        $this->setTemplate('module:przelewy24/views/templates/front/payment_failed.tpl');
    }
}
