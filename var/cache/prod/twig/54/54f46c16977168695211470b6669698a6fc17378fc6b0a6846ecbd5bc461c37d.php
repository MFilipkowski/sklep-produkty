<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @MailThemes/modern/components/footer.html.twig */
class __TwigTemplate_233822dab1d4733196384be225caed77030478fc4faf24712138619e16f8b5da extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                <![endif]-->
              <!-- SHOP NAME BEGINING -->
              <!--[if mso | IE]>
            <tr>
              <td
                 class=\"\" width=\"604px\"
              >
          
      <table
         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:604px;\" width=\"604\"
      >
        <tr>
          <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
      <![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:ltr;font-size:0px;padding:20px 0;text-align:center;\">
                        <!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                
        <tr>
      
            <td
               class=\"\" style=\"vertical-align:top;width:604px;\"
            >
          <![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tr>
                              <td align=\"center\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:center;color:#363A41;\"><a href=\"{shop_url}\" style=\"color:#656565;font-size:16px;font-weight:600;\">{shop_name}</a></div>
                              </td>
                            </tr>
                            <tr>
                              <td align=\"center\" style=\"font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;\">
                                <div style=\"font-family:Open sans, arial, sans-serif;font-size:12px;line-height:25px;text-align:center;color:#656565;\">Powered by <a href=\"https://www.prestashop.com/?utm_source=marchandprestashop&utm_medium=e-mail&utm_campaign=footer_1-7\" style=\"color:#656565;font-weight:400;\">PrestaShop</a></div>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
              </td>
            </tr>
          <![endif]-->
              <!-- SHOP NAME ENDING -->
              <!--[if mso | IE]>
                  </table>
                <![endif]-->
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/modern/components/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/modern/components/footer.html.twig", "/var/www/html/mails/themes/modern/components/footer.html.twig");
    }
}
