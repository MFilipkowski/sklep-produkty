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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig */
class __TwigTemplate_5b981a70e1cbef425f1fa97cd20da0de67c098f5ef30ab95aa93a0b72f99f078 extends \Twig\Template
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
";
        // line 26
        $context["isColumnLocationDisplayed"] = false;
        // line 27
        $context["isColumnRefundedDisplayed"] = false;
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "products", []), "products", []), 0, ($context["paginationNum"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "  ";
            if ( !twig_test_empty($this->getAttribute($context["product"], "location", []))) {
                // line 30
                echo "    ";
                $context["isColumnLocationDisplayed"] = true;
                // line 31
                echo "  ";
            }
            // line 32
            echo "  ";
            if (($this->getAttribute($context["product"], "quantityRefunded", []) > 0)) {
                // line 33
                echo "    ";
                $context["isColumnRefundedDisplayed"] = true;
                // line 34
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "<div class=\"card\" id=\"orderProductsPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo " (<span id=\"orderProductsPanelCount\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "products", []), "products", [])), "html", null, true);
        echo "</span>)
    </h3>
  </div>

  <div class=\"card-body\">
    ";
        // line 44
        $context["formOptions"] = ["attr" => ["data-order-id" => $this->getAttribute(        // line 46
($context["orderForViewing"] ?? null), "id", []), "data-is-delivered" => $this->getAttribute(        // line 47
($context["orderForViewing"] ?? null), "isDelivered", []), "data-is-tax-included" => $this->getAttribute(        // line 48
($context["orderForViewing"] ?? null), "isTaxIncluded", []), "data-discounts-amount" => $this->getAttribute($this->getAttribute(        // line 49
($context["orderForViewing"] ?? null), "prices", []), "discountsAmountRaw", []), "data-price-specification" => twig_replace_filter(twig_jsonencode_filter(        // line 50
($context["priceSpecification"] ?? null)), "'", "&#39;")]];
        // line 53
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancelProductForm"] ?? null), 'form_start', ($context["formOptions"] ?? null));
        echo "
    <table class=\"table\" id=\"orderProductsTable\" data-currency-precision=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? null), "precision", []), "html", null, true);
        echo "\">
      <thead>
      <tr>
        <th>
          <p>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th></th>
        <th>
          <p class=\"mb-0\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price per unit", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
          <small class=\"text-muted\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "taxMethod", []), "html", null, true);
        echo "</small>
        </th>
        <th>
          <p>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th class=\"cellProductLocation";
        // line 68
        if ( !($context["isColumnLocationDisplayed"] ?? null)) {
            echo " d-none";
        }
        echo "\">
          <p>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock location", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
        <th class=\"cellProductRefunded";
        // line 71
        if ( !($context["isColumnRefundedDisplayed"] ?? null)) {
            echo " d-none";
        }
        echo "\">
          <p>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refunded", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
        <th>
          <p>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th>
          <p class=\"mb-0\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</p>
          <small class=\"text-muted\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "taxMethod", []), "html", null, true);
        echo "</small>
        </th>
        ";
        // line 81
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "hasInvoice", [], "method")) {
            // line 82
            echo "          <th>
            <p>";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
            echo "</p>
          </th>
        ";
        }
        // line 86
        echo "        ";
        if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "delivered", [])) {
            // line 87
            echo "          <th class=\"text-right product_actions d-print-none\">
            <p>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</p>
          </th>
        ";
        }
        // line 91
        echo "        <th class=\"text-center cancel-product-element\">
          <p>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partial refund", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "products", []), "products", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 98
            echo "        ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 98)->display(twig_array_merge($context, ["product" =>             // line 99
$context["product"], "productIndex" => $this->getAttribute(            // line 100
$context["loop"], "index", []), "paginationNum" =>             // line 101
($context["paginationNum"] ?? null), "isColumnLocationDisplayed" =>             // line 102
($context["isColumnLocationDisplayed"] ?? null), "isColumnRefundedDisplayed" =>             // line 103
($context["isColumnRefundedDisplayed"] ?? null)]));
            // line 105
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 106)->display($context);
        // line 107
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 107)->display($context);
        // line 108
        echo "      </tbody>
    </table>

    <div class=\"row mb-3\">
      <div class=\"col-md-6 text-left d-print-none order-product-pagination\">
        <div class=\"form-group row\">
          <label for=\"paginator_select_page_limit\" class=\"col-form-label ml-3\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col\">
            <select id=\"orderProductsTablePaginationNumberSelector\" class=\"pagination-link custom-select\">
              ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paginationNumOptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["numPageOption"]) {
            // line 118
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["numPageOption"], "html", null, true);
            echo "\"";
            if (($context["numPageOption"] == ($context["paginationNum"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["numPageOption"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numPageOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "            </select>
          </div>
        </div>
        ";
        // line 123
        $context["numPages"] = twig_round(max((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "products", []), "products", [])) / ($context["paginationNum"] ?? null)), 1), 0, "ceil");
        // line 124
        echo "        <nav aria-label=\"Products Navigation\"";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "products", []), "products", [])) <= ($context["paginationNum"] ?? null))) {
            echo " class=\"d-none\"";
        }
        echo " id=\"orderProductsNavPagination\">
          <ul class=\"pagination\" id=\"orderProductsTablePagination\" data-num-per-page=\"";
        // line 125
        echo twig_escape_filter($this->env, ($context["paginationNum"] ?? null), "html", null, true);
        echo "\" data-num-pages=\"";
        echo twig_escape_filter($this->env, ($context["numPages"] ?? null), "html", null, true);
        echo "\">
            <li class=\"page-item disabled\" id=\"orderProductsTablePaginationPrev\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
              </a>
            </li>
            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["numPages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["numPage"]) {
            // line 133
            echo "              <li class=\"page-item";
            if (($context["numPage"] == 1)) {
                echo " active";
            }
            echo "\"><span class=\"page-link\" data-order-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "html", null, true);
            echo "\" data-page=\"";
            echo twig_escape_filter($this->env, $context["numPage"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["numPage"], "html", null, true);
            echo "</span></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "            <li class=\"page-item d-none\"><span class=\"page-link\" data-order-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "html", null, true);
        echo "\" data-page=\"\"></span></li>
            <li class=\"page-item\" id=\"orderProductsTablePaginationNext\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class=\"col-md-6 text-right discount-action\">
        ";
        // line 146
        if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "delivered", [])) {
            // line 147
            echo "          <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn mr-3\" id=\"addProductBtn\">
            <i class=\"material-icons\">add_circle_outline</i>
            ";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          </button>
        ";
        }
        // line 152
        echo "        <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn\" data-toggle=\"modal\" data-target=\"#addOrderDiscountModal\">
          <i class=\"material-icons\">confirmation_number</i>
          ";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a discount", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </button>
      </div>
    </div>

    ";
        // line 159
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 159)->display(twig_array_merge($context, ["discounts" => $this->getAttribute($this->getAttribute(        // line 160
($context["orderForViewing"] ?? null), "discounts", []), "discounts", []), "orderId" => $this->getAttribute(        // line 161
($context["orderForViewing"] ?? null), "id", [])]));
        // line 163
        echo "
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"info-block\">
          <div class=\"row\">
            <div class=\"col-sm text-center\">
              <p class=\"text-muted mb-0\"><strong>";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
              <strong id=\"orderProductsTotal\">";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "productsPriceFormatted", []), "html", null, true);
        echo "</strong>
            </div>

            <div id=\"order-discounts-total-container\" class=\"col-sm text-center";
        // line 173
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "discountsAmountRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " d-none";
        }
        echo "\">
              <p class=\"text-muted mb-0\"><strong>";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discounts", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
              <strong id=\"orderDiscountsTotal\">-";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "discountsAmountFormatted", []), "html", null, true);
        echo "</strong>
            </div>

            ";
        // line 178
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "wrappingPriceRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            // line 179
            echo "              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wrapping", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong></p>
                <strong id=\"orderWrappingTotal\">";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "wrappingPriceFormatted", []), "html", null, true);
            echo "</strong>
              </div>
            ";
        }
        // line 184
        echo "
            ";
        // line 185
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingPriceRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            // line 186
            echo "              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</strong></p>
                <div class=\"shipping-price\">
                  <strong id=\"orderShippingTotal\">";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingPriceFormatted", []), "html", null, true);
            echo "</strong>
                  <div class=\"cancel-product-element shipping-refund-amount";
            // line 190
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingRefundableAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
                echo " hidden";
            }
            echo "\">
                    <div class=\"input-group\">
                      ";
            // line 192
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "shipping_amount", []), 'widget');
            echo "
                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? null), "symbol", []), "html", null, true);
            echo "</div>
                      </div>
                    </div>
                    <p class=\"text-center\">(max ";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingRefundableAmountFormatted", []), "html", null, true);
            echo " tax included)</p>
                  </div>
                </div>
              </div>
            ";
        } else {
            // line 202
            echo "              ";
            // line 203
            echo "              <div class=\"d-none\">
                ";
            // line 204
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "shipping_amount", []), 'widget');
            echo "
              </div>
            ";
        }
        // line 207
        echo "
            ";
        // line 208
        if ( !$this->getAttribute(($context["orderForViewing"] ?? null), "taxIncluded", [])) {
            // line 209
            echo "              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taxes", [], "Admin.Global"), "html", null, true);
            echo "</strong></p>
                <strong id=\"orderTaxesTotal\">";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "taxesAmountFormatted", []), "html", null, true);
            echo "</strong>
              </div>
            ";
        }
        // line 214
        echo "
            <div class=\"col-sm text-center\">
              <p class=\"text-muted mb-0\"><strong>";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
              <span class=\"badge rounded badge-dark font-size-100\" id=\"orderTotal\">";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "totalAmountFormatted", []), "html", null, true);
        echo "</span>
            </div>

          </div>
        </div>
      </div>
      <div class=\"col-md-12\">
        <p class=\"mb-0 mt-1 text-center text-muted\">
          <small>
            ";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For this customer group, prices are displayed as: [1]%tax_method%[/1]", ["%tax_method%" => $this->getAttribute(        // line 227
($context["orderForViewing"] ?? null), "taxMethod", []), "[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Orderscustomers.Notification");
        // line 230
        echo ".

            ";
        // line 232
        if ( !$this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ORDER_RETURN")) {
            // line 233
            echo "              <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise returns are disabled", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "</strong>
            ";
        }
        // line 235
        echo "          </small>
        </p>
        <div class=\"cancel-product-element refund-checkboxes-container\">
          <div class=\"cancel-product-element form-group restock-products\">
            ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "restock", []), 'widget');
        echo "
          </div>
          <div class=\"cancel-product-element form-group refund-credit-slip\">
            ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "credit_slip", []), 'widget');
        echo "
          </div>
          <div class=\"cancel-product-element form-group refund-voucher\">
            ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "voucher", []), 'widget');
        echo "
          </div>
          <div class=\"cancel-product-element shipping-refund";
        // line 247
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingRefundableAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " hidden";
        }
        echo "\">
            <div class=\"form-group\">
              ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "shipping", []), 'widget');
        echo "
              <small class=\"shipping-refund-amount\">(";
        // line 250
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "shippingRefundableAmountFormatted", []), "html", null, true);
        echo ")</small>
            </div>
          </div>
          <div class=\"cancel-product-element form-group voucher-refund-type";
        // line 253
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "discountsAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " hidden";
        }
        echo "\">
            ";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This order has been partially paid by voucher. Choose the amount you want to refund:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "voucher_refund_type", []), 'widget');
        echo "
            <div class=\"voucher-refund-type-negative-error\">
              ";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error. You cannot refund a negative amount.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"cancel-product-element form-submit text-right\">
        ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "cancel", []), 'widget');
        echo "
        ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? null), "save", []), 'widget');
        echo "
      </div>
    </div>
    ";
        // line 267
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancelProductForm"] ?? null), 'form_end');
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 267,  583 => 264,  579 => 263,  570 => 257,  565 => 255,  561 => 254,  555 => 253,  549 => 250,  545 => 249,  538 => 247,  533 => 245,  527 => 242,  521 => 239,  515 => 235,  509 => 233,  507 => 232,  503 => 230,  501 => 227,  500 => 226,  488 => 217,  484 => 216,  480 => 214,  474 => 211,  470 => 210,  467 => 209,  465 => 208,  462 => 207,  456 => 204,  453 => 203,  451 => 202,  443 => 197,  437 => 194,  432 => 192,  425 => 190,  421 => 189,  416 => 187,  413 => 186,  411 => 185,  408 => 184,  402 => 181,  398 => 180,  395 => 179,  393 => 178,  387 => 175,  383 => 174,  377 => 173,  371 => 170,  367 => 169,  359 => 163,  357 => 161,  356 => 160,  355 => 159,  347 => 154,  343 => 152,  337 => 149,  333 => 147,  331 => 146,  316 => 135,  299 => 133,  295 => 132,  283 => 125,  276 => 124,  274 => 123,  269 => 120,  254 => 118,  250 => 117,  244 => 114,  236 => 108,  233 => 107,  230 => 106,  216 => 105,  214 => 103,  213 => 102,  212 => 101,  211 => 100,  210 => 99,  208 => 98,  191 => 97,  183 => 92,  180 => 91,  174 => 88,  171 => 87,  168 => 86,  162 => 83,  159 => 82,  157 => 81,  152 => 79,  148 => 78,  142 => 75,  136 => 72,  130 => 71,  125 => 69,  119 => 68,  114 => 66,  108 => 63,  104 => 62,  97 => 58,  90 => 54,  85 => 53,  83 => 50,  82 => 49,  81 => 48,  80 => 47,  79 => 46,  78 => 44,  68 => 39,  63 => 36,  56 => 34,  53 => 33,  50 => 32,  47 => 31,  44 => 30,  41 => 29,  37 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/products.html.twig");
    }
}
