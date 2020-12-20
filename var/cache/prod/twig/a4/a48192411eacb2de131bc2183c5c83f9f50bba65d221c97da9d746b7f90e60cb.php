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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig */
class __TwigTemplate_f7468eae865d7d09172bb34b142eccfd4d3715ec5a6b261de1dde4e3c083c9ee extends \Twig\Template
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
<div class=\"card customer-personal-informations-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), "html", null, true);
        echo "
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", []), "html", null, true);
        echo "
    ";
        // line 31
        echo twig_escape_filter($this->env, sprintf("[%06d]", $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", [])), "html", null, true);
        echo "
    -
    <a href=\"mailto:";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "email", []), "html", null, true);
        echo "\">
      ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "email", []), "html", null, true);
        echo "
    </a>

    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminCustomers", true, ["id_customer" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", []), "updatecustomer" => 1, "back" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "uri", [])]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Social Title", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"customer-social-title col-8\">
        ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "socialTitle", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Age", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-birthday\">
        ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "birthday", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registration Date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-registration-date\">
        ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "registrationDate", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Visit", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-last-visit-date\">
        ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastVisitDate", []), "html", null, true);
        echo "
      </div>
    </div>

    ";
        // line 84
        if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "rankBySales", [])) {
            // line 85
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Best Customer Rank", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8 customer-sales-rank\">
          ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "rankBySales", []), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 94
        echo "
    ";
        // line 95
        if (($context["isMultistoreEnabled"] ?? null)) {
            // line 96
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", [], "Admin.Global"), "html", null, true);
            echo "
        </div>
        <div class=\"customer-shop-name col-8\">
          ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "shopName", []), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 105
        echo "
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-language-name\">
        ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "languageName", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Registrations", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 120
        $context["isNewsletterSubscribed"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "subscriptions", []), "newsletterSubscribed", []);
        // line 121
        echo "        ";
        $context["isPartnerOffersSubscribed"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "subscriptions", []), "partnerOffersSubscribed", []);
        // line 122
        echo "
        <span class=\"customer-newsletter-subscription-status badge badge-";
        // line 123
        if (($context["isNewsletterSubscribed"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded pt-0 pb-0\">
          <i class=\"material-icons\">";
        // line 124
        if (($context["isNewsletterSubscribed"] ?? null)) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Newsletter", [], "Admin.Global"), "html", null, true);
        echo "
        </span>

        <span class=\"customer-partner-offers-status badge badge-";
        // line 128
        if (($context["isPartnerOffersSubscribed"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded pt-0 pb-0\">
          <i class=\"material-icons\">";
        // line 129
        if (($context["isPartnerOffersSubscribed"] ?? null)) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partner offers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Latest Update", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"customer-latest-update col-8\">
        ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastUpdateDate", []), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 149
        $context["isCustomerActive"] = $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "active", []);
        // line 150
        echo "
        <span class=\"customer-status badge badge-";
        // line 151
        if (($context["isCustomerActive"] ?? null)) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded pt-0 pb-0\">
          ";
        // line 152
        if (($context["isCustomerActive"] ?? null)) {
            // line 153
            echo "            <i class=\"material-icons\">check</i>
            ";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        } else {
            // line 156
            echo "            <i class=\"material-icons\">cancel</i>
            ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inactive", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        }
        // line 159
        echo "        </span>
      </div>
    </div>

    ";
        // line 163
        if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "guest", [])) {
            // line 164
            echo "      <div class=\"customer-guest-status row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This customer is registered as a Guest.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">
          ";
            // line 169
            if ($this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "generalInformation", []), "customerBySameEmailExists", [])) {
                // line 170
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A registered customer account using the defined email address already exists. ", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                echo "</p>
          ";
            } else {
                // line 172
                echo "            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_transform_guest_to_customer", ["customerId" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "customerId", []), "value", [])])]);
                echo "
              <button class=\"btn btn-primary btn-sm\">
                ";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transform to a customer account", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              </button>

              <p class=\"small-text\">";
                // line 177
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This feature generates a random password before sending an email to your customer.", [], "Admin.Orderscustomers.Help"), "html", null, true);
                echo "</p>
            ";
                // line 178
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transferGuestAccountForm"] ?? null), 'form_end');
                echo "
          ";
            }
            // line 180
            echo "        </div>
      </div>
    ";
        }
        // line 183
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 183,  358 => 180,  353 => 178,  349 => 177,  343 => 174,  337 => 172,  331 => 170,  329 => 169,  323 => 166,  319 => 164,  317 => 163,  311 => 159,  306 => 157,  303 => 156,  298 => 154,  295 => 153,  293 => 152,  285 => 151,  282 => 150,  280 => 149,  274 => 146,  265 => 140,  259 => 137,  249 => 130,  241 => 129,  233 => 128,  227 => 125,  219 => 124,  211 => 123,  208 => 122,  205 => 121,  203 => 120,  197 => 117,  188 => 111,  182 => 108,  177 => 105,  170 => 101,  164 => 98,  160 => 96,  158 => 95,  155 => 94,  148 => 90,  142 => 87,  138 => 85,  136 => 84,  129 => 80,  123 => 77,  114 => 71,  108 => 68,  99 => 62,  93 => 59,  84 => 53,  78 => 50,  67 => 42,  59 => 37,  53 => 34,  49 => 33,  44 => 31,  40 => 30,  36 => 29,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/personal_information.html.twig");
    }
}
