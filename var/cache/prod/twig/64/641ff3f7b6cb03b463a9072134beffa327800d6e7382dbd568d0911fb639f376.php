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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig */
class __TwigTemplate_4864f9b302afa45b35ec1d6617da0238a4279f9984449717b7f55c151c4e2903 extends \Twig\Template
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
<div class=\"customer card\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
  </div>

  <div class=\"card-body\">
    <div class=\"info-block\">
      <div class=\"row\">
        ";
        // line 36
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
            // line 37
            echo "        <div class=\"col-md-6\">
          <h2 class=\"mb-0\">
            <i class=\"material-icons\">account_box</i>

            ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "gender", []), "html", null, true);
            echo "
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "firstName", []), "html", null, true);
            echo "
            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "lastName", []), "html", null, true);
            echo "

            <strong class=\"text-muted ml-2\">#";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", []), "html", null, true);
            echo "</strong>
          </h2>
          ";
            // line 47
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", [])) {
                // line 48
                echo "            <strong class=\"text-muted\">Guest</strong>
          ";
            }
            // line 50
            echo "        </div>
        <div class=\"col-md-6 text-right\">
          <a class=\"d-print-none\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "id", [])]), "html", null, true);
            echo "\">
            ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View full details", [], "Admin.Actions"), "html", null, true);
            echo "
          </a>
        </div>
        ";
        } else {
            // line 57
            echo "        <div class=\"col\">
          <h2 class=\"mb-0\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleted customer", [], "Admin.Global"), "html", null, true);
            echo "</h2>
        </div>
        ";
        }
        // line 61
        echo "      </div>
    </div>
    ";
        // line 63
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
            // line 64
            echo "    <div class=\"row mt-3\">
      <div class=\"col-md-6\">
        <p class=\"mb-1\">
          <strong>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email:", [], "Admin.Global"), "html", null, true);
            echo "</strong>
        </p>
        <p>
          <a href=\"mailto:";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "email", []), "html", null, true);
            echo "\">
            ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "email", []), "html", null, true);
            echo "
          </a>
        </p>

        ";
            // line 75
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", []) === false)) {
                // line 76
                echo "          <p class=\"mb-1\">
            <strong>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account registered:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
          </p>
          <p>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "accountRegistrationDate", [])), "html", null, true);
                echo "</p>
        ";
            }
            // line 81
            echo "      </div>
      <div class=\"col-md-6\">
        <p class=\"mb-1\">
          <strong>";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Validated orders placed:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
        </p>
        <p>
          <span class=\"badge rounded badge-dark\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "validOrdersPlaced", []), "html", null, true);
            echo "</span>
        </p>

        ";
            // line 90
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "isGuest", []) === false)) {
                // line 91
                echo "          <p class=\"mb-1\">
            <strong>";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent since registration:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
          </p>
          <p>
            <span class=\"badge rounded badge-dark\">";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "totalSpentSinceRegistration", []), "html", null, true);
                echo "</span>
          </p>
        ";
            }
            // line 98
            echo "      </div>
    </div>
    ";
        }
        // line 101
        echo "    <div class=\"info-block mt-2\">
      <div class=\"row\">
        ";
        // line 103
        if (($this->getAttribute(($context["orderForViewing"] ?? null), "virtual", []) === false)) {
            // line 104
            echo "        <div id=\"addressShipping\" class=\"info-block-col col-xl-6\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
            ";
            // line 107
            if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
                // line 108
                echo "            <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">more_vert</i>
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" id=\"js-delivery-address-edit-btn\"
                 href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "addressType" => "delivery", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
                echo "\"
              >
                ";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
                echo "
              </a>

              <a href=\"#\"
                class=\"dropdown-item js-update-customer-address-modal-btn\"
                data-toggle=\"modal\"
                data-target=\"#updateCustomerAddressModal\"
                data-address-type=\"shipping\"
              >
                ";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
                echo "
              </a>
            </div>
            ";
            }
            // line 129
            echo "          </div>

          <p class=\"mb-0\">";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "fullName", []), "html", null, true);
            echo "</p>
          ";
            // line 132
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "companyName", []))) {
                // line 133
                echo "            <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "companyName", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 135
            echo "          <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "address1", []), "html", null, true);
            echo "</p>
          ";
            // line 136
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "address2", []))) {
                // line 137
                echo "            <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "address2", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 139
            echo "          <p class=\"mb-0\">
            ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "cityName", []), "html", null, true);
            echo ",
            ";
            // line 141
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "stateName", []))) {
                // line 142
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "stateName", []), "html", null, true);
                echo "
            ";
            }
            // line 144
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "postCode", []), "html", null, true);
            echo "
          </p>
          <p class=\"mb-0\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "countryName", []), "html", null, true);
            echo "</p>
          <p>
            ";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "phoneNumber", []), "html", null, true);
            echo "
            ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shippingAddress", []), "mobilePhoneNumber", []), "html", null, true);
            echo "
          </p>
        </div>
        ";
        }
        // line 153
        echo "        <div id=\"addressInvoice\" class=\"info-block-col ";
        if ($this->getAttribute(($context["orderForViewing"] ?? null), "virtual", [])) {
            echo "col-md-12";
        } else {
            echo "col-md-6";
        }
        echo "\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>

            ";
        // line 157
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
            // line 158
            echo "            <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"material-icons\">more_vert</i>
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              <a class=\"dropdown-item\" id=\"js-invoice-address-edit-btn\"
                 href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "addressType" => "invoice", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
            echo "\"
              >
                ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
            echo "
              </a>

              <a href=\"#\"
                class=\"dropdown-item js-update-customer-address-modal-btn\"
                data-toggle=\"modal\"
                data-target=\"#updateCustomerAddressModal\"
                data-address-type=\"invoice\"
              >
                ";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
            echo "
              </a>
            </div>
            ";
        }
        // line 179
        echo "          </div>

          <p class=\"mb-0\">";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "fullName", []), "html", null, true);
        echo "</p>
          ";
        // line 182
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "companyName", []))) {
            // line 183
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "companyName", []), "html", null, true);
            echo "</p>
          ";
        }
        // line 185
        echo "          <p class=\"mb-0\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "address1", []), "html", null, true);
        echo "</p>
          ";
        // line 186
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "address2", []))) {
            // line 187
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "address2", []), "html", null, true);
            echo "</p>
          ";
        }
        // line 189
        echo "          <p class=\"mb-0\">
            ";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "cityName", []), "html", null, true);
        echo ",
            ";
        // line 191
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "stateName", []))) {
            // line 192
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "stateName", []), "html", null, true);
            echo "
            ";
        }
        // line 194
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "postCode", []), "html", null, true);
        echo "
          </p>
          <p class=\"mb-0\">";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "countryName", []), "html", null, true);
        echo "</p>
          <p>
            ";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "phoneNumber", []), "html", null, true);
        echo "
            ";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "invoiceAddress", []), "mobilePhoneNumber", []), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>
    ";
        // line 204
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
            // line 205
            echo "    <div class=\"mt-2 info-block\">
      <div class=\"row\">
        ";
            // line 207
            $context["isPrivateNoteOpen"] =  !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "privateNote", []));
            // line 208
            echo "
        <div class=\"col-md-6\">
          <h3 class=\"mb-0";
            // line 210
            echo (( !($context["isPrivateNoteOpen"] ?? null)) ? (" d-print-none") : (""));
            echo "\">
            ";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Private note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          </h3>
        </div>
        <div class=\"col-md-6 text-right d-print-none\">
          <a href=\"#\"
             class=\"float-right tooltip-link js-private-note-toggle-btn ";
            // line 216
            if (($context["isPrivateNoteOpen"] ?? null)) {
                echo "is-opened";
            }
            echo "\"
          >
            ";
            // line 218
            if (($context["isPrivateNoteOpen"] ?? null)) {
                // line 219
                echo "              <i class=\"material-icons\">remove</i>
            ";
            } else {
                // line 221
                echo "              <i class=\"material-icons\">add</i>
            ";
            }
            // line 223
            echo "          </a>
        </div>

        <div class=\"col-md-12 mt-3 js-private-note-block ";
            // line 226
            if ( !($context["isPrivateNoteOpen"] ?? null)) {
                echo "d-none";
            }
            echo "\">
          ";
            // line 227
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_set_private_note", ["customerId" => $this->getAttribute($this->getAttribute(            // line 229
($context["orderForViewing"] ?? null), "customer", []), "id", []), "back" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute(            // line 230
($context["orderForViewing"] ?? null), "id", [])])])]);
            // line 232
            echo "

          ";
            // line 234
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["privateNoteForm"] ?? null), "note", []), 'widget');
            echo "
            <div class=\"d-none\">
              ";
            // line 236
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["privateNoteForm"] ?? null), 'rest');
            echo "
            </div>

            <div class=\"mt-2 text-right\">
              <button type=\"submit\"
                      class=\"btn btn-primary btn-sm js-private-note-btn\"
                      ";
            // line 242
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "privateNote", []))) {
                echo "disabled";
            }
            // line 243
            echo "              >
                ";
            // line 244
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>
          ";
            // line 247
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? null), 'form_end');
            echo "
        </div>
      </div>
    </div>
    ";
        }
        // line 252
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 252,  501 => 247,  495 => 244,  492 => 243,  488 => 242,  479 => 236,  474 => 234,  470 => 232,  468 => 230,  467 => 229,  466 => 227,  460 => 226,  455 => 223,  451 => 221,  447 => 219,  445 => 218,  438 => 216,  430 => 211,  426 => 210,  422 => 208,  420 => 207,  416 => 205,  414 => 204,  406 => 199,  402 => 198,  397 => 196,  391 => 194,  385 => 192,  383 => 191,  379 => 190,  376 => 189,  370 => 187,  368 => 186,  363 => 185,  357 => 183,  355 => 182,  351 => 181,  347 => 179,  340 => 175,  328 => 166,  323 => 164,  315 => 158,  313 => 157,  308 => 155,  298 => 153,  291 => 149,  287 => 148,  282 => 146,  276 => 144,  270 => 142,  268 => 141,  264 => 140,  261 => 139,  255 => 137,  253 => 136,  248 => 135,  242 => 133,  240 => 132,  236 => 131,  232 => 129,  225 => 125,  213 => 116,  208 => 114,  200 => 108,  198 => 107,  194 => 106,  190 => 104,  188 => 103,  184 => 101,  179 => 98,  173 => 95,  167 => 92,  164 => 91,  162 => 90,  156 => 87,  150 => 84,  145 => 81,  140 => 79,  135 => 77,  132 => 76,  130 => 75,  123 => 71,  119 => 70,  113 => 67,  108 => 64,  106 => 63,  102 => 61,  96 => 58,  93 => 57,  86 => 53,  82 => 52,  78 => 50,  74 => 48,  72 => 47,  67 => 45,  62 => 43,  58 => 42,  54 => 41,  48 => 37,  46 => 36,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/customer.html.twig");
    }
}
