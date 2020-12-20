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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig */
class __TwigTemplate_dbed2aef4eac7ba36025467fa2091edc011b00c55dacedfe8bb928c414ea0c29 extends \Twig\Template
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
<table class=\"table mb-3\">
  <thead>
  <tr>
    <th>
      ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Document", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "
    </th>
    <th class=\"text-right d-print-none\">
      ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
    </th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 47
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "documents", []), "documents", []))) {
            // line 48
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "documents", []), "documents", []));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 49
                echo "      <tr>
        <td>
          ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatLite($this->getAttribute($context["document"], "createdAt", [])), "html", null, true);
                echo "
        </td>
        <td>
          ";
                // line 54
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 55
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
                    echo "
          ";
                } elseif (($this->getAttribute(                // line 56
$context["document"], "type", []) == "credit_slip")) {
                    // line 57
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Credit slip", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
          ";
                } else {
                    // line 59
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery slip", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
          ";
                }
                // line 61
                echo "        </td>
        <td>
          ";
                // line 63
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 64
                    echo "            <a class=\"_blank\"
               href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPdf", true, ["submitAction" => "generateInvoicePDF", "id_order_invoice" => $this->getAttribute($context["document"], "id", [])]), "html", null, true);
                    echo "\"
            >
              ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "referenceNumber", []), "html", null, true);
                    echo "
            </a>
          ";
                } elseif (($this->getAttribute(                // line 69
$context["document"], "type", []) == "delivery_slip")) {
                    // line 70
                    echo "            <a class=\"_blank\"
               href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPdf", true, ["submitAction" => "generateDeliverySlipPDF", "id_order_invoice" => $this->getAttribute($context["document"], "id", [])]), "html", null, true);
                    echo "\"
            >
              ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "referenceNumber", []), "html", null, true);
                    echo "
            </a>
          ";
                } elseif (($this->getAttribute(                // line 75
$context["document"], "type", []) == "credit_slip")) {
                    // line 76
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPdf", true, ["submitAction" => "generateOrderSlipPDF", "id_order_slip" => $this->getAttribute($context["document"], "id", [])]), "html", null, true);
                    echo "\">
              ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "referenceNumber", []), "html", null, true);
                    echo "
            </a>
          ";
                }
                // line 80
                echo "        </td>
        <td>
          ";
                // line 82
                if ($this->getAttribute($context["document"], "amount", [])) {
                    // line 83
                    echo "            <p class=\"mb-0\">
              ";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "amount", []), "html", null, true);
                    echo "

              ";
                    // line 86
                    if ($this->getAttribute($context["document"], "amountMismatch", [])) {
                        // line 87
                        echo "                (";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "amountMismatch", []), "html", null, true);
                        echo ")
              ";
                    }
                    // line 89
                    echo "            </p>
          ";
                } else {
                    // line 91
                    echo "            --
          ";
                }
                // line 93
                echo "        </td>
        <td class=\"text-right\">
          ";
                // line 95
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 96
                    echo "            ";
                    if (($this->getAttribute($context["document"], "isAddPaymentAllowed", []) && $this->getAttribute($context["document"], "amount", []))) {
                        // line 97
                        echo "              <button href=\"#\" class=\"js-enter-payment-btn btn btn-primary btn-sm\" data-payment-amount=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "numericalAmount", []), "html", null, true);
                        echo "\">
                ";
                        // line 98
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enter payment", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "
              </button>
            ";
                    }
                    // line 101
                    echo "            <button href=\"#\" class=\"js-open-invoice-note-btn btn btn-primary btn-sm\">
              ";
                    // line 102
                    if (twig_test_empty($this->getAttribute($context["document"], "note", []))) {
                        // line 103
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "
              ";
                    } else {
                        // line 105
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "
              ";
                    }
                    // line 107
                    echo "            </button>
          ";
                }
                // line 109
                echo "        </td>
      </tr>
      ";
                // line 111
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 112
                    echo "        <tr class=\"d-none\">
          <td colspan=\"5\">
            <form action=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_update_invoice_note", ["orderId" => $this->getAttribute(                    // line 115
($context["orderForViewing"] ?? null), "id", []), "orderInvoiceId" => $this->getAttribute(                    // line 116
$context["document"], "id", [])]), "html", null, true);
                    // line 117
                    echo "\" method=\"post\">
              <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" name=\"invoice_note\" value=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "note", []), "html", null, true);
                    echo "\">
                <button class=\"btn btn-secondary ml-2 btn-sm js-cancel-invoice-note-btn\" type=\"button\">
                  ";
                    // line 121
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
                    echo "
                </button>
                <button class=\"btn btn-primary ml-2 btn-sm\" type=\"submit\">
                  ";
                    // line 124
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
                    echo "
                </button>
              </div>
            </form>
          </td>
        </tr>
      ";
                }
                // line 131
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "  ";
        } else {
            // line 133
            echo "    <tr>
      <td colspan=\"5\" class=\"text-center\">
        ";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no available document", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
      </td>
    </tr>
  ";
        }
        // line 139
        echo "  </tbody>
</table>

";
        // line 142
        if ((twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "documents", []), "documents", [])) && $this->getAttribute(($context["orderForViewing"] ?? null), "invoiceManagementIsEnabled", []))) {
            // line 143
            echo "  <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_generate_invoice", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]), "html", null, true);
            echo "\" method=\"POST\">
    <button class=\"btn btn-primary\">
      <i class=\"material-icons\">autorenew</i>
      ";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate invoice", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
    </button>
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 146,  291 => 143,  289 => 142,  284 => 139,  277 => 135,  273 => 133,  270 => 132,  264 => 131,  254 => 124,  248 => 121,  243 => 119,  239 => 117,  237 => 116,  236 => 115,  235 => 114,  231 => 112,  229 => 111,  225 => 109,  221 => 107,  215 => 105,  209 => 103,  207 => 102,  204 => 101,  198 => 98,  193 => 97,  190 => 96,  188 => 95,  184 => 93,  180 => 91,  176 => 89,  170 => 87,  168 => 86,  163 => 84,  160 => 83,  158 => 82,  154 => 80,  148 => 77,  143 => 76,  141 => 75,  136 => 73,  131 => 71,  128 => 70,  126 => 69,  121 => 67,  116 => 65,  113 => 64,  111 => 63,  107 => 61,  101 => 59,  95 => 57,  93 => 56,  88 => 55,  86 => 54,  80 => 51,  76 => 49,  71 => 48,  69 => 47,  61 => 42,  55 => 39,  49 => 36,  43 => 33,  37 => 30,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/documents.html.twig");
    }
}
