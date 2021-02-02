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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig */
class __TwigTemplate_51cdf7462cb2dbd4fdfffad43971d1b72b10b9c7db5b96b8332ad252aedef7af extends \Twig\Template
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
        ob_start(function () { return ''; });
        // line 27
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "history", []), "statuses", [])), "html", null, true);
        echo ")
";
        $context["statusTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
";
        // line 30
        ob_start(function () { return ''; });
        // line 31
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Documents", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo " (<span class=\"count\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "documents", []), "documents", [])), "html", null, true);
        echo "</span>)
";
        $context["documentsTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
";
        // line 34
        ob_start(function () { return ''; });
        // line 35
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carriers", [], "Admin.Shipping.Feature"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "shipping", []), "carriers", [])), "html", null, true);
        echo ")
";
        $context["carriersTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
";
        // line 38
        ob_start(function () { return ''; });
        // line 39
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise returns", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? null), "returns", []), "orderReturns", [])), "html", null, true);
        echo ")
";
        $context["merchantReturnsTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
<div class=\"mt-2\">
  <ul class=\"nav nav nav-tabs d-print-none\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active show\" id=\"historyTab\" data-toggle=\"tab\" href=\"#historyTabContent\" role=\"tab\" aria-controls=\"historyTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">history</i>
        ";
        // line 47
        echo twig_escape_filter($this->env, ($context["statusTitle"] ?? null), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderDocumentsTab\" data-toggle=\"tab\" href=\"#orderDocumentsTabContent\" role=\"tab\" aria-controls=\"orderDocumentsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">note</i>
        ";
        // line 53
        echo twig_escape_filter($this->env, ($context["documentsTitle"] ?? null), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderShippingTab\" data-toggle=\"tab\" href=\"#orderShippingTabContent\" role=\"tab\" aria-controls=\"orderShippingTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">local_shipping</i>
        ";
        // line 59
        echo twig_escape_filter($this->env, ($context["carriersTitle"] ?? null), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"orderReturnsTab\" data-toggle=\"tab\" href=\"#orderReturnsTabContent\" role=\"tab\" aria-controls=\"orderReturnsTabContent\" aria-expanded=\"true\" aria-selected=\"false\">
        <i class=\"material-icons\">replay</i>
        ";
        // line 65
        echo twig_escape_filter($this->env, ($context["merchantReturnsTitle"] ?? null), "html", null, true);
        echo "
      </a>
    </li>
  </ul>

  <div class=\"tab-content\">
    <div class=\"tab-pane d-print-block fade show active\" id=\"historyTabContent\" role=\"tabpanel\" aria-labelledby=\"historyTab\">
      ";
        // line 72
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 72, "1761821391")->display($context);
        // line 80
        echo "    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderDocumentsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderDocumentsTab\">
      ";
        // line 82
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 82, "545865163")->display($context);
        // line 90
        echo "    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderShippingTabContent\" role=\"tabpanel\" aria-labelledby=\"orderShippingTab\">
      ";
        // line 92
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 92, "233248918")->display($context);
        // line 100
        echo "    </div>
    <div class=\"tab-pane d-print-block fade\" id=\"orderReturnsTabContent\" role=\"tabpanel\" aria-labelledby=\"orderReturnsTab\">
      ";
        // line 102
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 102, "229707575")->display($context);
        // line 110
        echo "    </div>
  </div>
</div>

";
        // line 114
        $context["displayAdminOrderTabLink"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderTabLink", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        // line 115
        $context["displayAdminOrderTabContent"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderTabContent", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? null), "id", [])]);
        // line 116
        if (( !twig_test_empty(($context["displayAdminOrderTabLink"] ?? null)) ||  !twig_test_empty(($context["displayAdminOrderTabContent"] ?? null)))) {
            // line 117
            echo "  <div class=\"mt-2\" id=\"order_hook_tabs\">
    <ul class=\"nav nav nav-tabs\" role=\"tablist\">
      ";
            // line 120
            echo "      ";
            echo ($context["displayAdminOrderTabLink"] ?? null);
            echo "
    </ul>

    <div class=\"tab-content\">
      ";
            // line 125
            echo "      ";
            echo ($context["displayAdminOrderTabContent"] ?? null);
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 125,  163 => 120,  159 => 117,  157 => 116,  155 => 115,  153 => 114,  147 => 110,  145 => 102,  141 => 100,  139 => 92,  135 => 90,  133 => 82,  129 => 80,  127 => 72,  117 => 65,  108 => 59,  99 => 53,  90 => 47,  82 => 41,  74 => 39,  72 => 38,  69 => 37,  61 => 35,  59 => 34,  56 => 33,  48 => 31,  46 => 30,  43 => 29,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/details.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig */
class __TwigTemplate_51cdf7462cb2dbd4fdfffad43971d1b72b10b9c7db5b96b8332ad252aedef7af___1761821391 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 72
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 72);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 73
    public function block_header($context, array $blocks = [])
    {
        // line 74
        echo "          ";
        echo twig_escape_filter($this->env, ($context["statusTitle"] ?? null), "html", null, true);
        echo "
        ";
    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        // line 77
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 77)->display($context);
        // line 78
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 78,  249 => 77,  246 => 76,  239 => 74,  236 => 73,  226 => 72,  171 => 125,  163 => 120,  159 => 117,  157 => 116,  155 => 115,  153 => 114,  147 => 110,  145 => 102,  141 => 100,  139 => 92,  135 => 90,  133 => 82,  129 => 80,  127 => 72,  117 => 65,  108 => 59,  99 => 53,  90 => 47,  82 => 41,  74 => 39,  72 => 38,  69 => 37,  61 => 35,  59 => 34,  56 => 33,  48 => 31,  46 => 30,  43 => 29,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/details.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig */
class __TwigTemplate_51cdf7462cb2dbd4fdfffad43971d1b72b10b9c7db5b96b8332ad252aedef7af___545865163 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 82
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 82);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 83
    public function block_header($context, array $blocks = [])
    {
        // line 84
        echo "          ";
        echo twig_escape_filter($this->env, ($context["documentsTitle"] ?? null), "html", null, true);
        echo "
        ";
    }

    // line 86
    public function block_body($context, array $blocks = [])
    {
        // line 87
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 87)->display($context);
        // line 88
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 88,  324 => 87,  321 => 86,  314 => 84,  311 => 83,  301 => 82,  252 => 78,  249 => 77,  246 => 76,  239 => 74,  236 => 73,  226 => 72,  171 => 125,  163 => 120,  159 => 117,  157 => 116,  155 => 115,  153 => 114,  147 => 110,  145 => 102,  141 => 100,  139 => 92,  135 => 90,  133 => 82,  129 => 80,  127 => 72,  117 => 65,  108 => 59,  99 => 53,  90 => 47,  82 => 41,  74 => 39,  72 => 38,  69 => 37,  61 => 35,  59 => 34,  56 => 33,  48 => 31,  46 => 30,  43 => 29,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/details.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig */
class __TwigTemplate_51cdf7462cb2dbd4fdfffad43971d1b72b10b9c7db5b96b8332ad252aedef7af___233248918 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 92
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 92);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 93
    public function block_header($context, array $blocks = [])
    {
        // line 94
        echo "          ";
        echo twig_escape_filter($this->env, ($context["carriersTitle"] ?? null), "html", null, true);
        echo "
        ";
    }

    // line 96
    public function block_body($context, array $blocks = [])
    {
        // line 97
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 97)->display($context);
        // line 98
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 98,  399 => 97,  396 => 96,  389 => 94,  386 => 93,  376 => 92,  327 => 88,  324 => 87,  321 => 86,  314 => 84,  311 => 83,  301 => 82,  252 => 78,  249 => 77,  246 => 76,  239 => 74,  236 => 73,  226 => 72,  171 => 125,  163 => 120,  159 => 117,  157 => 116,  155 => 115,  153 => 114,  147 => 110,  145 => 102,  141 => 100,  139 => 92,  135 => 90,  133 => 82,  129 => 80,  127 => 72,  117 => 65,  108 => 59,  99 => 53,  90 => 47,  82 => 41,  74 => 39,  72 => 38,  69 => 37,  61 => 35,  59 => 34,  56 => 33,  48 => 31,  46 => 30,  43 => 29,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/details.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig */
class __TwigTemplate_51cdf7462cb2dbd4fdfffad43971d1b72b10b9c7db5b96b8332ad252aedef7af___229707575 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 102
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details_card.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 102);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 103
    public function block_header($context, array $blocks = [])
    {
        // line 104
        echo "          ";
        echo twig_escape_filter($this->env, ($context["merchantReturnsTitle"] ?? null), "html", null, true);
        echo "
        ";
    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        // line 107
        echo "          ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", 107)->display($context);
        // line 108
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 108,  474 => 107,  471 => 106,  464 => 104,  461 => 103,  451 => 102,  402 => 98,  399 => 97,  396 => 96,  389 => 94,  386 => 93,  376 => 92,  327 => 88,  324 => 87,  321 => 86,  314 => 84,  311 => 83,  301 => 82,  252 => 78,  249 => 77,  246 => 76,  239 => 74,  236 => 73,  226 => 72,  171 => 125,  163 => 120,  159 => 117,  157 => 116,  155 => 115,  153 => 114,  147 => 110,  145 => 102,  141 => 100,  139 => 92,  135 => 90,  133 => 82,  129 => 80,  127 => 72,  117 => 65,  108 => 59,  99 => 53,  90 => 47,  82 => 41,  74 => 39,  72 => 38,  69 => 37,  61 => 35,  59 => 34,  56 => 33,  48 => 31,  46 => 30,  43 => 29,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/details.html.twig");
    }
}
