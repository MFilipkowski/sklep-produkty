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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig */
class __TwigTemplate_f9828eea8f0d5df452f6ac5fe9f4d83a16860084b935648fd04c8633da3df4d6 extends \Twig\Template
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
        $context["rowIsDisplayed"] = (((isset($context["productIndex"]) || array_key_exists("productIndex", $context)) && (isset($context["paginationNum"]) || array_key_exists("paginationNum", $context))) && (($context["productIndex"] ?? null) > ($context["paginationNum"] ?? null)));
        // line 26
        echo "<tr id=\"orderProduct_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "orderDetailId", []), "html", null, true);
        echo "\" class=\"cellProduct";
        if (($context["rowIsDisplayed"] ?? null)) {
            echo " d-none d-print-table-row";
        }
        echo "\">
  <td class=\"cellProductImg\">
    ";
        // line 28
        if ($this->getAttribute(($context["product"] ?? null), "imagePath", [])) {
            // line 29
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "imagePath", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "name", []), "html", null, true);
            echo "\" />
    ";
        }
        // line 31
        echo "  </td>
  <td class=\"cellProductName\">
    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_form", ["id" => $this->getAttribute(($context["product"] ?? null), "id", [])]), "html", null, true);
        echo "\">
      <p class=\"mb-0 productName\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "name", []), "html", null, true);
        echo "</p>
      ";
        // line 35
        if ($this->getAttribute(($context["product"] ?? null), "reference", [])) {
            // line 36
            echo "        <p class=\"mb-0 productReference\">
          ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference number:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "reference", []), "html", null, true);
            echo "
        </p>
      ";
        }
        // line 41
        echo "      ";
        if ( !twig_test_empty($this->getAttribute(($context["product"] ?? null), "supplierReference", []))) {
            // line 42
            echo "        <p class=\"mb-0 productSupplierReference\">
          ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "supplierReference", []), "html", null, true);
            echo "
        </p>
      ";
        }
        // line 47
        echo "    </a>
    ";
        // line 48
        if ((($this->getAttribute(($context["product"] ?? null), "type", []) == twig_constant("PrestaShop\\PrestaShop\\Core\\Domain\\Order\\QueryResult\\OrderProductForViewing::TYPE_PACK")) && (null === $this->getAttribute(($context["product"] ?? null), "customizations", [])))) {
            // line 49
            echo "      <span class=\"btn-product-pack-modal d-print-none\" data-toggle=\"modal\" data-target=\"#product-pack-modal\" data-pack-items=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["product"] ?? null), "packItems", [])), "html", null, true);
            echo "\">
        <strong>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View pack content", [], "Admin.Actions"), "html", null, true);
            echo "</strong>
      </span>
    ";
        }
        // line 53
        echo "  </td>
  <td class=\"cellProductUnitPrice\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "unitPrice", []), "html", null, true);
        echo "</td>
  <td class=\"cellProductQuantity text-center\">
    ";
        // line 56
        if (($this->getAttribute(($context["product"] ?? null), "quantity", []) > 1)) {
            // line 57
            echo "      <span class=\"badge badge-secondary rounded-circle\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", []), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 59
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", []), "html", null, true);
            echo "
    ";
        }
        // line 61
        echo "
    <div class=\"d-none js-product-quantity\">
      <input type=\"text\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", []), "html", null, true);
        echo "\" class=\"form-control\">
    </div>
  </td>
  <td class=\"cellProductLocation";
        // line 66
        if ( !($context["isColumnLocationDisplayed"] ?? null)) {
            echo " d-none";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "location", []), "html", null, true);
        echo "</td>
  <td class=\"cellProductRefunded";
        // line 67
        if ( !($context["isColumnRefundedDisplayed"] ?? null)) {
            echo " d-none";
        }
        echo "\">
    ";
        // line 68
        if (($this->getAttribute(($context["product"] ?? null), "quantityRefunded", []) > 0)) {
            // line 69
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantityRefunded", []), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "amountRefunded", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refunded", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo ")
    ";
        }
        // line 71
        echo "  </td>
  <td class=\"cellProductAvailableQuantity text-center\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "availableQuantity", []), "html", null, true);
        echo "</td>
  <td class=\"cellProductTotalPrice\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "totalPrice", []), "html", null, true);
        echo "</td>
  ";
        // line 74
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "hasInvoice", [], "method")) {
            // line 75
            echo "    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "orderInvoiceNumber", []), "html", null, true);
            echo "</td>
  ";
        }
        // line 77
        echo "  ";
        if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "delivered", [])) {
            // line 78
            echo "    <td class=\"text-right cellProductActions\">
      <button
        type=\"button\"
        class=\"btn tooltip-link js-order-product-edit-btn\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        data-original-title=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
            echo "\"
        data-order-detail-id=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "orderDetailId", []), "html", null, true);
            echo "\"
        data-product-id=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id", []), "html", null, true);
            echo "\"
        data-combination-id=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "combinationId", []), "html", null, true);
            echo "\"
        data-product-quantity=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantity", []), "html", null, true);
            echo "\"
        data-product-price-tax-incl=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "unitPriceTaxInclRaw", []), "html", null, true);
            echo "\"
        data-product-price-tax-excl=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "unitPriceTaxExclRaw", []), "html", null, true);
            echo "\"
        data-tax-rate=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "taxRate", []), "html", null, true);
            echo "\"
        data-location=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "location", []), "html", null, true);
            echo "\"
        data-available-quantity=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "availableQuantity", []), "html", null, true);
            echo "\"
        data-available-out-of-stock=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "availableOutOfStock", []), "html", null, true);
            echo "\"
        data-order-invoice-id=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "orderInvoiceId", []), "html", null, true);
            echo "\">
        <i class=\"material-icons\">edit</i>
      </button>
      <button
        type=\"button\"
        class=\"btn tooltip-link js-order-product-delete-btn\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        data-order-id=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "html", null, true);
            echo "\"
        data-order-detail-id=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "orderDetailId", []), "html", null, true);
            echo "\"
        data-delete-message=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure?", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "\"
        data-original-title=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "\">
        <i class=\"material-icons\">delete</i>
      </button>
    </td>
  ";
        }
        // line 111
        echo "  <td class=\"text-right cancel-product-element\">
    <div class=\"cancel-product-cell cancel-product-element";
        // line 112
        if (($this->getAttribute(($context["product"] ?? null), "refundable", []) == false)) {
            echo " hidden";
        }
        echo "\">
      <div class=\"cancel-product-cell-elements\">
        <div class=\"cancel-product-selector form-group\">
          ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), ("selected_" . $this->getAttribute(($context["product"] ?? null), "orderDetailId", [])), [], "array"), 'widget');
        echo "
        </div>
        <div class=\"cancel-product-quantity form-group\">
          ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), ("quantity_" . $this->getAttribute(($context["product"] ?? null), "orderDetailId", [])), [], "array"), 'label');
        echo "
          <div class=\"input-group\">
            ";
        // line 120
        $context["quantityInputOptions"] = ["attr" => ["data-product-price-tax-incl" => $this->getAttribute(        // line 122
($context["product"] ?? null), "unitPriceTaxInclRaw", []), "data-product-price-tax-excl" => $this->getAttribute(        // line 123
($context["product"] ?? null), "unitPriceTaxExclRaw", []), "data-amount-refundable" => $this->getAttribute(        // line 124
($context["product"] ?? null), "amountRefundableRaw", []), "data-quantity-refundable" => $this->getAttribute(        // line 125
($context["product"] ?? null), "quantityRefundable", [])]];
        // line 128
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), ("quantity_" . $this->getAttribute(($context["product"] ?? null), "orderDetailId", [])), [], "array"), 'widget', ($context["quantityInputOptions"] ?? null));
        echo "
            <div class=\"input-group-append\"><div class=\"input-group-text\">/ ";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "quantityRefundable", []), "html", null, true);
        echo "</div></div>
          </div>
        </div>
        <div class=\"cancel-product-amount form-group\">
          ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), ("amount_" . $this->getAttribute(($context["product"] ?? null), "orderDetailId", [])), [], "array"), 'label');
        echo "
          <div class=\"input-group\">
            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), ("amount_" . $this->getAttribute(($context["product"] ?? null), "orderDetailId", [])), [], "array"), 'widget');
        echo "
            <div class=\"input-group-append\"><div class=\"input-group-text\">";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? null), "symbol", []), "html", null, true);
        echo "</div></div>
            <small class=\"max-refund text-left\">
              ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(Max %amount_refundable% %tax_method%)", ["%amount_refundable%" => $this->getAttribute(        // line 139
($context["product"] ?? null), "amountRefundable", []), "%tax_method%" => $this->getAttribute(        // line 140
($context["orderForViewing"] ?? null), "taxMethod", [])], "Admin.Orderscustomers.Help");
        // line 141
        echo "
            </small>
          </div>
        </div>
      </div>
    </div>
  </td>
</tr>
";
        // line 149
        if ( !(null === $this->getAttribute(($context["product"] ?? null), "customizations", []))) {
            // line 150
            echo "  <tr class=\"order-product-customization";
            if (($context["rowIsDisplayed"] ?? null)) {
                echo " d-none";
            }
            echo "\">
    <td class=\"border-top-0\"></td>
    ";
            // line 152
            $context["colspan"] = 8;
            // line 153
            echo "    ";
            $context["colspan"] = (($this->getAttribute(($context["orderForViewing"] ?? null), "hasInvoice", [], "method")) ? ((($context["colspan"] ?? null) + 1)) : (($context["colspan"] ?? null)));
            // line 154
            echo "    ";
            $context["colspan"] = (( !$this->getAttribute(($context["orderForViewing"] ?? null), "delivered", [])) ? ((($context["colspan"] ?? null) + 1)) : (($context["colspan"] ?? null)));
            // line 155
            echo "    <td colspan=\"";
            echo twig_escape_filter($this->env, ($context["colspan"] ?? null), "html", null, true);
            echo "\" class=\"border-top-0 text-muted\">
      ";
            // line 156
            if ($this->getAttribute($this->getAttribute(($context["product"] ?? null), "customizations", []), "fileCustomizations", [])) {
                // line 157
                echo "        <div class=\"d-flex flex-row flex-wrap\">
          ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["product"] ?? null), "customizations", []), "fileCustomizations", []));
                foreach ($context['_seq'] as $context["_key"] => $context["customization"]) {
                    // line 159
                    echo "              <div class=\"mr-4\">
                <p><strong>";
                    // line 160
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "name", []), "html", null, true);
                    echo "</strong></p>
                <p>
                  <a href=\"";
                    // line 162
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_display_customization_image", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "name" => twig_replace_filter(twig_urlencode_filter($this->getAttribute($context["customization"], "name", [])), ["%" => "_"]), "value" => $this->getAttribute($context["customization"], "value", [])]), "html", null, true);
                    echo "\" download>
                    <img src=\"";
                    // line 163
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "image", []), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "name", []), "html", null, true);
                    echo "\">
                  </a>
                </p>
              </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "        </div>
      ";
            }
            // line 170
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["product"] ?? null), "customizations", []), "textCustomizations", []));
            foreach ($context['_seq'] as $context["_key"] => $context["customization"]) {
                // line 171
                echo "        <p><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "name", []), "html", null, true);
                echo " :</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["customization"], "value", []), "html", null, true);
                echo "</p>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "      ";
            if (($this->getAttribute(($context["product"] ?? null), "type", []) == twig_constant("PrestaShop\\PrestaShop\\Core\\Domain\\Order\\QueryResult\\OrderProductForViewing::TYPE_PACK"))) {
                // line 174
                echo "        <div class=\"btn-product-pack-modal mb-3 d-print-none\" data-toggle=\"modal\" data-target=\"#product-pack-modal\" data-pack-items=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["product"] ?? null), "packItems", [])), "html", null, true);
                echo "\">
          <strong>";
                // line 175
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View pack content", [], "Admin.Actions"), "html", null, true);
                echo "</strong>
        </div>
      ";
            }
            // line 178
            echo "    </td>
  </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 178,  427 => 175,  422 => 174,  419 => 173,  408 => 171,  403 => 170,  399 => 168,  386 => 163,  382 => 162,  377 => 160,  374 => 159,  370 => 158,  367 => 157,  365 => 156,  360 => 155,  357 => 154,  354 => 153,  352 => 152,  344 => 150,  342 => 149,  332 => 141,  330 => 140,  329 => 139,  328 => 138,  323 => 136,  319 => 135,  314 => 133,  307 => 129,  302 => 128,  300 => 125,  299 => 124,  298 => 123,  297 => 122,  296 => 120,  291 => 118,  285 => 115,  277 => 112,  274 => 111,  266 => 106,  262 => 105,  258 => 104,  254 => 103,  243 => 95,  239 => 94,  235 => 93,  231 => 92,  227 => 91,  223 => 90,  219 => 89,  215 => 88,  211 => 87,  207 => 86,  203 => 85,  199 => 84,  191 => 78,  188 => 77,  182 => 75,  180 => 74,  176 => 73,  172 => 72,  169 => 71,  159 => 69,  157 => 68,  151 => 67,  143 => 66,  137 => 63,  133 => 61,  127 => 59,  121 => 57,  119 => 56,  114 => 54,  111 => 53,  105 => 50,  100 => 49,  98 => 48,  95 => 47,  89 => 44,  85 => 43,  82 => 42,  79 => 41,  73 => 38,  69 => 37,  66 => 36,  64 => 35,  60 => 34,  56 => 33,  52 => 31,  44 => 29,  42 => 28,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/product.html.twig");
    }
}
