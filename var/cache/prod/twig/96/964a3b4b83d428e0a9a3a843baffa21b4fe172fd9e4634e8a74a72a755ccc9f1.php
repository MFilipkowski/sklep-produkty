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

/* PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig */
class __TwigTemplate_be47a0554fe7970eb86e3d47cfe4fc8e71d3fffc0625407d5d472aea7385704f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_horizontal_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_horizontal_layout.html.twig".'" cannot be used as a trait.', 25, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 26, $this->getSourceContext());
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
                'text_with_unit_widget' => [$this, 'block_text_with_unit_widget'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_start', $context, $blocks);
        // line 34
        echo "
";
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('form_label', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 51
        echo "
";
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('form_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('form_row_class', $context, $blocks);
        // line 73
        echo "
";
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('text_with_unit_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('text_with_length_counter_widget', $context, $blocks);
    }

    // line 30
    public function block_form_start($context, array $blocks = [])
    {
        // line 31
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-horizontal"))]);
        // line 32
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 37
    public function block_form_label($context, array $blocks = [])
    {
        // line 38
        ob_start(function () { return ''; });
        // line 39
        echo "    ";
        if ((($context["label"] ?? null) === false)) {
            // line 40
            echo "      <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 42
            echo "      ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 43
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 45
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 48
    public function block_form_label_class($context, array $blocks = [])
    {
        // line 49
        echo "form-control-label";
    }

    // line 54
    public function block_form_row($context, array $blocks = [])
    {
        // line 55
        ob_start(function () { return ''; });
        // line 56
        echo "    <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">
      ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
      <div class=\"";
        // line 58
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 66
    public function block_form_group_class($context, array $blocks = [])
    {
        // line 67
        echo "col-sm";
    }

    // line 70
    public function block_form_row_class($context, array $blocks = [])
    {
        // line 71
        echo "form-group row";
        if ($this->getAttribute(($context["row_attr"] ?? null), "class", [], "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["row_attr"] ?? null), "class", []), "html", null, true);
        }
    }

    // line 76
    public function block_text_with_unit_widget($context, array $blocks = [])
    {
        // line 77
        echo "  <div class=\"input-group\">";
        // line 78
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 79
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "unit", [], "any", true, true)) {
            // line 80
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "unit", []), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 84
        echo "  </div>
";
    }

    // line 87
    public function block_ip_address_text_widget($context, array $blocks = [])
    {
        // line 88
        echo "  <div class=\"input-group\">";
        // line 89
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 90
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? null), "html", null, true);
        echo "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>

";
    }

    // line 97
    public function block_switch_widget($context, array $blocks = [])
    {
        // line 98
        echo "  <div class=\"input-group\">";
        // line 99
        $this->displayParentBlock("switch_widget", $context, $blocks);
        // line 100
        echo "</div>
  ";
        // line 101
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 104
    public function block_text_with_length_counter_widget($context, array $blocks = [])
    {
        // line 105
        echo "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 106
        $context["current_length"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []) - twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", [])));
        // line 107
        echo "
    ";
        // line 108
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "position", []) == "before")) {
            // line 109
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 110
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 113
        echo "
    ";
        // line 114
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-max-length" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []), "maxlength" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []), "class" => "js-countable-input"]);
        // line 116
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "input", []) == "textarea")) {
            // line 117
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 119
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 121
        echo "
    ";
        // line 122
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "position", []) == "after")) {
            // line 123
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 124
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 127
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 127,  322 => 124,  319 => 123,  317 => 122,  314 => 121,  311 => 119,  308 => 117,  306 => 116,  304 => 114,  301 => 113,  295 => 110,  292 => 109,  290 => 108,  287 => 107,  285 => 106,  282 => 105,  279 => 104,  273 => 101,  270 => 100,  268 => 99,  266 => 98,  263 => 97,  254 => 91,  249 => 90,  247 => 89,  245 => 88,  242 => 87,  237 => 84,  231 => 81,  228 => 80,  226 => 79,  224 => 78,  222 => 77,  219 => 76,  211 => 71,  208 => 70,  204 => 67,  201 => 66,  192 => 60,  188 => 59,  184 => 58,  180 => 57,  172 => 56,  170 => 55,  167 => 54,  163 => 49,  160 => 48,  155 => 45,  152 => 43,  149 => 42,  143 => 40,  140 => 39,  138 => 38,  135 => 37,  131 => 32,  129 => 31,  126 => 30,  122 => 104,  119 => 103,  117 => 97,  114 => 96,  112 => 87,  109 => 86,  107 => 76,  104 => 75,  101 => 73,  99 => 70,  96 => 69,  94 => 66,  91 => 65,  89 => 54,  86 => 53,  83 => 51,  81 => 48,  78 => 47,  76 => 37,  73 => 36,  70 => 34,  68 => 30,  65 => 29,  62 => 27,  32 => 26,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig");
    }
}
