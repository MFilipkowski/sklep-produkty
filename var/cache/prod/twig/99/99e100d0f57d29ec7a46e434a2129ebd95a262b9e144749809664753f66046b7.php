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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig */
class __TwigTemplate_1f7c83c2115abe3e9293c0663d41c6806925fb55c74fde544708ee05a140d69e extends \Twig\Template
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
<tr id=\"editProductTableRowTemplate\" class=\"d-none editProductRow\">
  <td class=\"cellProductImg\"></td>
  <td class=\"cellProductName\"></td>
  <td class=\"cellProductTaxes pr-5\">
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? null), "price_tax_excluded", []), 'row');
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? null), "price_tax_included", []), 'row');
        echo "
  </td>
  <td class=\"cellProductQuantity pr-5\">
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? null), "quantity", []), 'row', ["type" => "number"]);
        echo "
  </td>
  <td class=\"editProductLocation cellProductLocation\"></td>
  <td class=\"editProductRefunded cellProductRefunded\"></td>
  <td class=\"editProductAvailable\"></td>
  <td class=\"editProductTotalPrice\"></td>
  ";
        // line 40
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "hasInvoice", [], "method")) {
            // line 41
            echo "    <td class=\"cellProductInvoice\">
      ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? null), "invoice", []), 'row', ["attr" => ["data-modal-edit-price-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit the price", [], "Admin.Orderscustomers.Feature"), "data-modal-edit-price-apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "Admin.Actions"), "data-modal-edit-price-cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "data-modal-edit-price-body" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to edit this product price? It will be applied to all invoices of this order.", [], "Admin.Orderscustomers.Notification")]]);
            // line 49
            echo "
    </td>
  ";
        }
        // line 52
        echo "  <td class=\"editProductActions text-right\">
    <div class=\"editProductActions-container btn-group\">
      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? null), "cancel", []), 'row');
        echo "
      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? null), "save", []), 'row');
        echo "
    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 55,  72 => 54,  68 => 52,  63 => 49,  61 => 42,  58 => 41,  56 => 40,  47 => 34,  41 => 31,  37 => 30,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig");
    }
}
