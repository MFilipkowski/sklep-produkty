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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig */
class __TwigTemplate_b763d12a4c6bd065a226dc2f0e73710dd8956b116510a5dcf95fc1c872c170a1 extends \Twig\Template
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
<div class=\"card mt-2\" id=\"view_order_payments_block\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "payments", []), "payments", [])), "html", null, true);
        echo ")
    </h3>
  </div>

  <div class=\"card-body\">
    ";
        // line 34
        if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "payments", []), "amountToPay", []) && $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "payments", []), "paidAmount", []))) {
            // line 35
            echo "      <div class=\"alert alert-danger mb-0\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", [], "Admin.Global"), "html", null, true);
            echo "
          <strong>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "payments", []), "paidAmount", []), "html", null, true);
            echo "</strong>
          ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paid instead of", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
          <strong>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "payments", []), "amountToPay", []), "html", null, true);
            echo "</strong>

          ";
            // line 42
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "linkedOrders", []), "linkedOrders", []))) {
                // line 43
                echo "            ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "linkedOrders", []), "linkedOrders", [])) == 1)) {
                    // line 44
                    echo "              <br/>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This warning also concerns order:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                    echo "
            ";
                } else {
                    // line 46
                    echo "              <br/>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This warning also concerns the following orders:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                    echo "
            ";
                }
                // line 48
                echo "
            ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "linkedOrders", []), "linkedOrders", []));
                foreach ($context['_seq'] as $context["_key"] => $context["linkedOrder"]) {
                    // line 50
                    echo "              <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute($context["linkedOrder"], "orderId", [])]), "html", null, true);
                    echo "\">
                #";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["linkedOrder"], "orderId", []), "html", null, true);
                    echo "
              </a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkedOrder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "          ";
            }
            // line 55
            echo "        </p>
      </div>
    ";
        }
        // line 58
        echo "
    <table class=\"table\">
      <thead>
        <tr>
          <th class=\"table-head-date\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-payment\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment method", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
          <th class=\"table-head-transaction\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transaction ID", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
          <th class=\"table-head-amount\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-invoice\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "payments", []), "payments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 72
            echo "        <tr>
          <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($context["payment"], "date", [])), "html", null, true);
            echo "</td>
          <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "paymentMethod", []), "html", null, true);
            echo "</td>
          <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "transactionId", []), "html", null, true);
            echo "</td>
          <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "amount", []), "html", null, true);
            echo "</td>
          <td>";
            // line 77
            if ($this->getAttribute($context["payment"], "invoiceNumber", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "invoiceNumber", []), "html", null, true);
            }
            echo "</td>
          <td class=\"text-right\">
            <button class=\"btn btn-sm btn-outline-secondary js-payment-details-btn\">
              ";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details", [], "Admin.Global"), "html", null, true);
            echo "
            </button>
          </td>
        </tr>
        <tr class=\"d-none\">
          <td colspan=\"6\">
            <p class=\"mb-0\">
              <strong>";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Card number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 88
            if ($this->getAttribute($context["payment"], "cardNumber", [])) {
                // line 89
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardNumber", []), "html", null, true);
                echo "
              ";
            } else {
                // line 91
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 93
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Card type", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 96
            if ($this->getAttribute($context["payment"], "cardBrand", [])) {
                // line 97
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardBrand", []), "html", null, true);
                echo "
              ";
            } else {
                // line 99
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 101
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expiration date", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 104
            if ($this->getAttribute($context["payment"], "cardExpiration", [])) {
                // line 105
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardExpiration", []), "html", null, true);
                echo "
              ";
            } else {
                // line 107
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 109
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cardholder name", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 112
            if ($this->getAttribute($context["payment"], "cardHolder", [])) {
                // line 113
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardHolder", []), "html", null, true);
                echo "
              ";
            } else {
                // line 115
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 117
            echo "            </p>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "      <tr class=\"d-print-none\">
        ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderPaymentForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_add_payment", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])])]);
        echo "
          <td>
            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "date", []), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "payment_method", []), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "transaction_id", []), 'widget');
        echo "
          </td>
          <td>
            <div class=\"input-group\">
              ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "amount", []), 'widget');
        echo "
              ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "id_currency", []), 'widget');
        echo "
            </div>
          </td>
          <td>
            <div ";
        // line 139
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "id_invoice", []), "vars", []), "choices", []))) {
            echo "class=\"d-none\"";
        }
        echo ">
              ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? null), "id_invoice", []), 'widget');
        echo "
            </div>
          </td>
          <td>
            <button type=\"submit\" class=\"btn btn-primary btn-sm\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "</button>
          </td>
        ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderPaymentForm"] ?? null), 'form_end');
        echo "
      </tr>
      </tbody>
    </table>

    ";
        // line 151
        if (( !$this->getAttribute(($context["orderForViewing"] ?? null), "valid", []) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["changeOrderCurrencyForm"] ?? null), "new_currency_id", []), "vars", []), "choices", [])))) {
            // line 152
            echo "      ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderCurrencyForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_change_currency", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])])]);
            echo "
        <div class=\"form-group row d-print-none\">
          <label class=\"form-control-label\">";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change currency", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderCurrencyForm"] ?? null), "new_currency_id", []), 'widget');
            echo "
              <button class=\"btn btn-outline-secondary btn-sm ml-2\">
                ";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>

            <div class=\"d-none\">
              ";
            // line 164
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["changeOrderCurrencyForm"] ?? null), 'rest');
            echo "
            </div>

            <small class=\"text-muted\">
              ";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do not forget to update your exchange rate before making this change.", [], "Admin.Orderscustomers.Help"), "html", null, true);
            echo "
            </small>
          </div>
        </div>
      ";
            // line 172
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderCurrencyForm"] ?? null), 'form_end');
            echo "
    ";
        }
        // line 174
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 174,  384 => 172,  377 => 168,  370 => 164,  362 => 159,  357 => 157,  351 => 154,  345 => 152,  343 => 151,  335 => 146,  330 => 144,  323 => 140,  317 => 139,  310 => 135,  306 => 134,  299 => 130,  293 => 127,  287 => 124,  282 => 122,  279 => 121,  270 => 117,  264 => 115,  258 => 113,  256 => 112,  252 => 111,  248 => 109,  242 => 107,  236 => 105,  234 => 104,  230 => 103,  226 => 101,  220 => 99,  214 => 97,  212 => 96,  208 => 95,  204 => 93,  198 => 91,  192 => 89,  190 => 88,  186 => 87,  176 => 80,  168 => 77,  164 => 76,  160 => 75,  156 => 74,  152 => 73,  149 => 72,  145 => 71,  137 => 66,  133 => 65,  129 => 64,  125 => 63,  121 => 62,  115 => 58,  110 => 55,  107 => 54,  98 => 51,  93 => 50,  89 => 49,  86 => 48,  80 => 46,  74 => 44,  71 => 43,  69 => 42,  64 => 40,  60 => 39,  56 => 38,  52 => 37,  48 => 35,  46 => 34,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/payments.html.twig");
    }
}
