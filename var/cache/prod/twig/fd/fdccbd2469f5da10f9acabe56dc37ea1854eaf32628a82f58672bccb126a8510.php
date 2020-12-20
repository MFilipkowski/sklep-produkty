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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/test_email_sending.html.twig */
class __TwigTemplate_b5f225fdb71abcc5a21c162342e8319798fa8bbf7375a66a49aa7acf3bdfccde extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'test_email_sending' => [$this, 'block_test_email_sending'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('test_email_sending', $context, $blocks);
    }

    public function block_test_email_sending($context, array $blocks = [])
    {
        // line 28
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["testEmailSendingForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_emails_send_test")]);
        echo "
  <div class=\"row justify-content-center\">
    <div class=\"col\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Test your email configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </h3>
        <div class=\"card-block row\">
          <div class=\"card-text\">
            <div class=\"form-group row\">
              <label for=\"send_test_email\" class=\"form-control-label\">
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send a test email to", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
              </label>
              <div class=\"col-sm\">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["testEmailSendingForm"] ?? null), "send_email_to", []), 'widget');
        echo "
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col\">
                <div class=\"alert alert-danger d-none js-test-email-errors\" role=\"alert\"></div>
                <div class=\"alert alert-success d-none js-test-email-success\" role=\"alert\">
                  <p class=\"alert-text\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A test email has been sent to the email address you provided.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            <div class=\"spinner d-none js-test-email-loader\"></div>
            <button type=\"button\" class=\"btn btn-primary js-send-test-email-btn\">
              <i class=\"material-icons\">email</i>
              ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send a test email", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["testEmailSendingForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/test_email_sending.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 68,  89 => 61,  75 => 50,  64 => 42,  58 => 39,  49 => 33,  40 => 28,  34 => 27,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/test_email_sending.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Email/Blocks/test_email_sending.html.twig");
    }
}
