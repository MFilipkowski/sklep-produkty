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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig */
class __TwigTemplate_483e6bc252aa2259a345bd466027bad37fd6fdacf79d9a346951cc7360e5e48c extends \Twig\Template
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
<tr id=\"addProductTableRow\" class=\"add-product d-none\">
  <td colspan=\"2\" class=\"pr-2\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "product_id", []), 'row');
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "tax_rate", []), 'row');
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "search", []), 'label');
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "search", []), 'widget');
        echo "
    <div class=\"dropdown\">
      <div class=\"dropdown-menu\"></div>
    </div>
    <div class=\"input-group mt-2 d-none\" id=\"addProductCombinations\">
      <div class=\"input-group-prepend\">
        <div class=\"input-group-text\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Global"), "html", null, true);
        echo "</div>
      </div>
      <select id=\"addProductCombinationId\" class=\"custom-select\"></select>
    </div>
  </td>
  <td class=\"pr-2\">
   <div class=\"row add-product-inputs\">
     <div class=\"col-sm-6\">
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "price_tax_excluded", []), 'widget');
        echo "
     </div>

     <div class=\"col-sm-6\">
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "price_tax_included", []), 'widget');
        echo "
     </div>
   </div>
  </td>
  <td class=\"pr-2 add-product-quantity\">
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "quantity", []), 'row', ["type" => "number"]);
        echo "
  </td>
  <td id=\"addProductLocation\" class=\"cellProductLocation\"></td>
  <td id=\"addProductRefunded\" class=\"cellProductRefunded\"></td>
  <td id=\"addProductAvailable\"></td>
  <td id=\"addProductTotalPrice\"></td>
  ";
        // line 60
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "hasInvoice", [], "method")) {
            // line 61
            echo "    <td class=\"addProductInvoice pr-2\">
      ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "invoice", []), 'row', ["attr" => ["data-modal-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new invoice", [], "Admin.Orderscustomers.Feature"), "data-modal-apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create", [], "Admin.Actions"), "data-modal-cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "data-modal-body" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to create a new invoice?", [], "Admin.Orderscustomers.Notification"), "data-modal-edit-price-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit the price", [], "Admin.Orderscustomers.Feature"), "data-modal-edit-price-apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "Admin.Actions"), "data-modal-edit-price-cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "data-modal-edit-price-body" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to edit this product price? It will be applied to all invoices of this order.", [], "Admin.Orderscustomers.Notification")]]);
            // line 73
            echo "
    </td>
  ";
        }
        // line 76
        echo "  <td class=\"text-right add-product-buttons\">
    <div class=\"btn-group\">
      ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "cancel", []), 'row');
        echo "
      ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "add", []), 'row');
        echo "
    </div>
  </td>
</tr>
<tr id=\"addProductNewInvoiceInfo\" class=\"d-none\">
  <td colspan=\"12\">
    <div>
      <h4>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New invoice information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</h4>
      <p><b>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Shipping.Feature"), "html", null, true);
        echo " :</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "carrierName", []), "html", null, true);
        echo "</p>
      ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? null), "free_shipping", []), 'row');
        echo "
    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 88,  125 => 87,  121 => 86,  111 => 79,  107 => 78,  103 => 76,  98 => 73,  96 => 62,  93 => 61,  91 => 60,  82 => 54,  74 => 49,  67 => 45,  56 => 37,  47 => 31,  43 => 30,  39 => 29,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig");
    }
}
