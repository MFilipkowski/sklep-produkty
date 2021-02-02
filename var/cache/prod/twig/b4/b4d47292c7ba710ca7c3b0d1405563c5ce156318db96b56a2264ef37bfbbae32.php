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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig */
class __TwigTemplate_5ae881db1f97b0693ffb86bec7a077c09a90a82eddcb56655594f07e8c8d20ae extends \Twig\Template
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
        echo "<table class=\"table discountList";
        if (twig_test_empty(($context["discounts"] ?? null))) {
            echo " d-none";
        }
        echo "\">
  <thead>
  <tr>
    <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</th>
    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value", [], "Admin.Global"), "html", null, true);
        echo "</th>
    <th class=\"text-right d-print-none\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            // line 35
            echo "    <tr>
      <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", []), "html", null, true);
            echo "</td>
      <td>
        ";
            // line 38
            if ($this->getAttribute($this->getAttribute($context["discount"], "amountRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
                echo "-";
            }
            // line 39
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "amountFormatted", []), "html", null, true);
            echo "
      </td>
      <td class=\"text-right d-print-none\">
        <a class=\"delete-cart-rule btn btn-text\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_remove_cart_rule", ["orderId" => ($context["orderId"] ?? null), "orderCartRuleId" => $this->getAttribute($context["discount"], "orderCartRuleId", [])]), "html", null, true);
            echo "\">
          <i class=\"material-icons\">delete</i>
        </a>
      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 48,  77 => 42,  70 => 39,  66 => 38,  61 => 36,  58 => 35,  54 => 34,  47 => 30,  43 => 29,  39 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig");
    }
}
