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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig */
class __TwigTemplate_dce1e8a7dfc1229b16850060236ed546e694adab6c19c0becd02c5822a8b73f4 extends \Twig\Template
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
        // line 25
        echo "
<div class=\"modal fade\" id=\"updateCustomerAddressModal\">
  ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderAddressForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_change_customer_address", ["orderId" => $this->getAttribute(        // line 28
($context["orderForViewing"] ?? null), "id", []), "customerId" => $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", [])])]);
        echo "
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
        echo "
          </h5>

          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>

        <div class=\"modal-body\">
        <div class=\"form-group m-0\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderAddressForm"] ?? null), "new_address_id", []), 'widget');
        echo "
          </div>
        </div>

        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderAddressForm"] ?? null), "address_type", []), 'widget');
        echo "

        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>

          <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderAddressForm"] ?? null), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 60,  80 => 55,  73 => 51,  66 => 47,  59 => 43,  49 => 36,  43 => 33,  35 => 28,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig");
    }
}
