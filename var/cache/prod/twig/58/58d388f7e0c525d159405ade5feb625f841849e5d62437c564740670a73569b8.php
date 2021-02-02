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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig */
class __TwigTemplate_1e38058628ad6217061c85f48fc5d3f442d5400f8205685a8dcb30175c0c4309 extends \Twig\Template
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
<h1 class=\"d-inline\">
  <strong class=\"text-muted\">#";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "id", []), "html", null, true);
        echo "</strong>
  <strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "reference", []), "html", null, true);
        echo "</strong>
</h1>

<p class=\"lead d-inline\">
  ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("from", [], "Admin.Global"), "html", null, true);
        echo "

  ";
        // line 34
        if ( !(null === $this->getAttribute(($context["orderForViewing"] ?? null), "customer", []))) {
            // line 35
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "firstName", []), "html", null, true);
            echo "
    ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "customer", []), "lastName", []), "html", null, true);
            echo "
  ";
        } else {
            // line 38
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleted customer", [], "Admin.Global"), "html", null, true);
            echo "
  ";
        }
        // line 40
        echo "</p>

<span class=\"badge rounded badge-dark ml-2 mr-2 font-size-100\">
    ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "prices", []), "totalAmountFormatted", []), "html", null, true);
        echo "
  </span>

<p class=\"lead d-inline\">
  ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatLite($this->getAttribute(($context["orderForViewing"] ?? null), "createdAt", [])), "html", null, true);
        echo "
  <span class=\"text-muted\">
      ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at", [], "Admin.Global"), "html", null, true);
        echo "

    ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? null), "createdAt", []), "H:i:s"), "html", null, true);
        echo "
    </span>
</p>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 51,  85 => 49,  80 => 47,  73 => 43,  68 => 40,  62 => 38,  57 => 36,  52 => 35,  50 => 34,  45 => 32,  38 => 28,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/header.html.twig");
    }
}
