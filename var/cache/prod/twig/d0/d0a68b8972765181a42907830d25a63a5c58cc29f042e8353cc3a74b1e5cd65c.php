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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig */
class __TwigTemplate_75b5d61d245b9e5e5f475f7ad0354194e0c7c449f8402b567e2db24ee251f139 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'smtp_configuration' => [$this, 'block_smtp_configuration'],
            'smtp_configuration_form_rest' => [$this, 'block_smtp_configuration_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('smtp_configuration', $context, $blocks);
    }

    public function block_smtp_configuration($context, array $blocks = [])
    {
        // line 29
        echo "  <div class=\"col-12\">
    <div class=\"card js-smtp-configuration ";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "email_config", []), "mail_method", []), "vars", []), "value", []) != ($context["smtpMailMethod"] ?? null))) {
            echo "d-none";
        }
        echo "\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">settings</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "Admin.Global"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            ";
        // line 37
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail domain name", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fully qualified domain name (keep this field empty if you don't know).", [], "Admin.Advparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "domain", []), 'errors');
        echo "
              ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "domain", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            ";
        // line 45
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP server", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP address or server name (e.g. smtp.mydomain.com).", [], "Admin.Advparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "server", []), 'errors');
        echo "
              ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "server", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            ";
        // line 53
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP username", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave blank if not applicable.", [], "Admin.Advparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "username", []), 'errors');
        echo "
              ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "username", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            ";
        // line 61
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP password", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave blank if not applicable.", [], "Admin.Advparameters.Help"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "password", []), 'errors');
        echo "
              ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "password", []), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Encryption", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "encryption", []), 'errors');
        echo "
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "encryption", []), 'widget');
        echo "
              ";
        // line 73
        if ( !($context["isOpenSslExtensionLoaded"] ?? null)) {
            // line 74
            echo "                <small class=\"form-text\">
                  ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SSL does not seem to be available on your server.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "
                </small>
              ";
        }
        // line 78
        echo "            </div>
          </div>

          <div class=\"form-group row\">
            ";
        // line 82
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Port", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Port number to use.", [], "Admin.Advparameters.Feature"));
        echo "
            <div class=\"col-sm\">
              ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "port", []), 'errors');
        echo "
              ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), "port", []), 'widget');
        echo "
            </div>
          </div>

          ";
        // line 89
        $this->displayBlock('smtp_configuration_form_rest', $context, $blocks);
        // line 92
        echo "        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 89
    public function block_smtp_configuration_form_rest($context, array $blocks = [])
    {
        // line 90
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["emailConfigurationForm"] ?? null), "smtp_config", []), 'rest');
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 90,  193 => 89,  183 => 96,  177 => 92,  175 => 89,  168 => 85,  164 => 84,  159 => 82,  153 => 78,  147 => 75,  144 => 74,  142 => 73,  138 => 72,  134 => 71,  129 => 69,  121 => 64,  117 => 63,  112 => 61,  104 => 56,  100 => 55,  95 => 53,  87 => 48,  83 => 47,  78 => 45,  70 => 40,  66 => 39,  61 => 37,  53 => 32,  46 => 30,  43 => 29,  37 => 28,  34 => 27,  32 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Email/Blocks/smtp_configuration.html.twig");
    }
}
