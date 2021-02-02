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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_9eebec8df03733d90cc7238079520cedcee0271f77942f3c64cdc0ed75842382 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 25, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 26, $this->getSourceContext());
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 27);
        // line 27
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 27, $this->getSourceContext());
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_errors' => [$this, 'block_form_errors'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'form_help' => [$this, 'block_form_help'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        echo "
";
        // line 35
        echo "
";
        // line 38
        $this->displayBlock('form_widget', $context, $blocks);
        // line 43
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 53
        echo "
";
        // line 56
        $this->displayBlock('form_label', $context, $blocks);
        // line 100
        echo "
";
        // line 102
        echo "
";
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('money_widget', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('date_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('time_widget', $context, $blocks);
        // line 185
        echo "
";
        // line 186
        $this->displayBlock('button_widget', $context, $blocks);
        // line 190
        echo "
";
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 257
        echo "
";
        // line 258
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 296
        echo "
";
        // line 297
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 322
        echo "
";
        // line 323
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 367
        echo "
";
        // line 368
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 457
        echo "
";
        // line 458
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 470
        echo "
";
        // line 471
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 500
        echo "
";
        // line 502
        echo "
";
        // line 503
        $this->displayBlock('choice_label', $context, $blocks);
        // line 508
        echo "
";
        // line 509
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 512
        echo "
";
        // line 513
        $this->displayBlock('radio_label', $context, $blocks);
        // line 516
        echo "
";
        // line 517
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 546
        echo "
";
        // line 548
        echo "
";
        // line 549
        $this->displayBlock('form_errors', $context, $blocks);
        // line 578
        echo "
";
        // line 580
        echo "
";
        // line 581
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 611
        echo "
";
        // line 612
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 664
        echo "
";
        // line 665
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 700
        echo "
";
        // line 701
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 725
        echo "
";
        // line 726
        $this->displayBlock('file_widget', $context, $blocks);
        // line 753
        echo "
";
        // line 754
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 770
        echo "
";
        // line 771
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 785
        echo "
";
        // line 786
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 811
        echo "
";
        // line 812
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 816
        echo "
";
        // line 817
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 821
        echo "
";
        // line 822
        $this->displayBlock('form_help', $context, $blocks);
        // line 830
        echo "
";
        // line 831
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 834
        echo "
";
        // line 835
        $this->displayBlock('text_widget', $context, $blocks);
    }

    // line 38
    public function block_form_widget($context, array $blocks = [])
    {
        // line 39
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 40
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 43
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 44
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 45
        $this->loadTemplate("@Twig/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
    }

    // line 56
    public function block_form_label($context, array $blocks = [])
    {
        // line 57
        if ( !(($context["label"] ?? null) === false)) {
            // line 58
            if ( !($context["compound"] ?? null)) {
                // line 59
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 61
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 62
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 64
            echo "    ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 65
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 66
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 67
($context["name"] ?? null), "%id%" =>                     // line 68
($context["id"] ?? null)]);
                } else {
                    // line 71
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 74
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)));
            echo "
    ";
            // line 75
            if ($this->getAttribute(($context["label_attr"] ?? null), "tooltip", [], "array", true, true)) {
                // line 76
                echo "      ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", [], "array")) : ("top"));
                // line 77
                echo "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? null), "html", null, true);
                echo "\"
         title=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? null), "tooltip", [], "array"), "html", null, true);
                echo "\"></i>
    ";
            }
            // line 80
            echo "
    ";
            // line 81
            if ($this->getAttribute(($context["label_attr"] ?? null), "popover", [], "array", true, true)) {
                // line 82
                echo "      ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "popover_placement", [], "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? null), "popover_placement", [], "array")) : ("top"));
                // line 83
                echo "      <span class=\"help-box\" data-toggle=\"popover\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? null), "html", null, true);
                echo "\"
            data-content=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? null), "popover", [], "array"), "html", null, true);
                echo "\"></span>
    ";
            }
            // line 86
            echo "    </label>";
        }
    }

    // line 105
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 106
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        // line 107
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        // line 109
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 112
    public function block_money_widget($context, array $blocks = [])
    {
        // line 113
        echo "<div class=\"input-group money-type\">
    ";
        // line 114
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 115
        echo "    ";
        if ( !($context["prepend"] ?? null)) {
            // line 116
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 117
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 120
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 121
        if (($context["prepend"] ?? null)) {
            // line 122
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 123
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 126
        echo "  </div>";
    }

    // line 129
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 130
        echo "<div class=\"input-group\">";
        // line 131
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 132
        echo "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
    }

    // line 138
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 139
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 140
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 142
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 143
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'errors');
            // line 145
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'errors');
            // line 146
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'widget', ["datetime" => true]);
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'widget', ["datetime" => true]);
            // line 148
            echo "</div>";
        }
    }

    // line 152
    public function block_date_widget($context, array $blocks = [])
    {
        // line 153
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 154
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 156
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 157
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 158
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 160
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 161
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 162
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 163
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')]);
            // line 165
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 166
                echo "</div>";
            }
        }
    }

    // line 171
    public function block_time_widget($context, array $blocks = [])
    {
        // line 172
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 173
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 175
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 176
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 177
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 179
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'widget');
            }
            // line 180
            echo "    ";
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 181
                echo "</div>";
            }
        }
    }

    // line 186
    public function block_button_widget($context, array $blocks = [])
    {
        // line 187
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 188
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 213
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 214
        $this->displayParentBlock("choice_widget", $context, $blocks);
        // line 215
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 218
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 219
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-select"))]);
        // line 220
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 223
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 224
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) {
            // line 225
            echo "<div class=\"control-group\">";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 227
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 228
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 229
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 230
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "</div>";
        } else {
            // line 235
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 237
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 238
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 239
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 240
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "</div>";
        }
    }

    // line 247
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        // line 248
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 252
            echo "        ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "</ul>
  </div>";
    }

    // line 258
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        // line 259
        echo "<li>
    ";
        // line 260
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "submitted_values", [], "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", []), [], "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 261
        echo "    ";
        if (($context["multiple"] ?? null)) {
            // line 262
            echo "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
          ";
            // line 265
            if (($this->getAttribute(($context["child"] ?? null), "active", [], "any", true, true) && ($this->getAttribute(($context["child"] ?? null), "active", []) == 0))) {
                // line 266
                echo "            <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "</i>";
            } else {
                // line 268
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "
          ";
            }
            // line 270
            echo "          ";
            if ((isset($context["defaultCategory"]) || array_key_exists("defaultCategory", $context))) {
                // line 271
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 273
            echo "        </label>
      </div>";
        } else {
            // line 276
            echo "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">
          ";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
            echo "
          ";
            // line 280
            if ((isset($context["defaultCategory"]) || array_key_exists("defaultCategory", $context))) {
                // line 281
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 283
            echo "        </label>
      </div>";
        }
        // line 286
        echo "    ";
        if ($this->getAttribute(($context["child"] ?? null), "children", [], "any", true, true)) {
            // line 287
            echo "      <ul>
        ";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? null), "children", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 289
                echo "          ";
                $context["child"] = $context["item"];
                // line 290
                echo "          ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "</ul>
    ";
        }
        // line 294
        echo "  </li>";
    }

    // line 297
    public function block_translatefields_widget($context, array $blocks = [])
    {
        // line 298
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"translations tabbable\" id=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
    ";
        // line 300
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 301
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 303
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 304
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
                echo "\" class=\"";
                if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
                echo "\">
              ";
                // line 305
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", [])), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 309
            echo "      </ul>
    ";
        }
        // line 311
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 314
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "valid", [])) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\">
          ";
            // line 315
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
          ";
            // line 316
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "    </div>
  </div>
";
    }

    // line 323
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        // line 324
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ("file" != ($context["type"] ?? null)))) {
            // line 325
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 327
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 330
    public function block_translate_text_widget($context, array $blocks = [])
    {
        // line 331
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 334
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 335
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 336
            echo "
      ";
            // line 337
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 338
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 339
                echo "      ";
            }
            // line 340
            echo "
      ";
            // line 341
            $context["attr"] = $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "attr", []);
            // line 342
            echo "
      ";
            // line 343
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "
    ";
        // line 346
        if ( !($context["hide_locales"] ?? null)) {
            // line 347
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 353
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 355
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 358
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 359
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 360
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 362
            echo "        </div>
      </div>
    ";
        }
        // line 365
        echo "  </div>";
    }

    // line 368
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        // line 369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 372
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 373
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "label", []));
            // line 374
            echo "
      ";
            // line 375
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "name", []))) {
                // line 376
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 377
                echo "      ";
            }
            // line 378
            echo "
      <div class=\"";
            // line 379
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 380
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "
    ";
        // line 384
        if (($context["show_locale_select"] ?? null)) {
            // line 385
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 391
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 393
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 396
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 397
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 398
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 399
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\"
            >
              ";
                // line 401
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "        </div>
      </div>
    ";
        }
        // line 407
        echo "  </div>";
    }

    // line 410
    public function block_date_picker_widget($context, array $blocks = [])
    {
        // line 411
        echo "  ";
        ob_start(function () { return ''; });
        // line 412
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " datepicker"))]);
        // line 413
        echo "    <div class=\"input-group datepicker\">
      <input type=\"text\" class=\"form-control\" data-format=\"";
        // line 414
        echo twig_escape_filter($this->env, ($context["date_format"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 424
    public function block_date_range_widget($context, array $blocks = [])
    {
        // line 425
        echo "  ";
        ob_start(function () { return ''; });
        // line 426
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", []), 'widget');
        echo "
    ";
        // line 427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", []), 'widget');
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 431
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        // line 432
        echo "  ";
        ob_start(function () { return ''; });
        // line 433
        echo "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button d-block float-right\"
            title=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            name=\"";
        // line 436
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
    ";
        // line 441
        if (($context["show_reset_button"] ?? null)) {
            // line 442
            echo "      <div class=\"js-grid-reset-button\">
        <div class=\"clearfix\"></div>
        <button type=\"reset\"
                name=\"";
            // line 445
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button float-right\"
                data-url=\"";
            // line 447
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                data-redirect=\"";
            // line 448
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
            // line 451
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      </div>
    ";
        }
        // line 455
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 458
    public function block_switch_widget($context, array $blocks = [])
    {
        // line 459
        echo "  ";
        ob_start(function () { return ''; });
        // line 460
        echo "    <span class=\"ps-switch\">
        ";
        // line 461
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 462
            echo "          ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . $this->getAttribute($context["choice"], "value", []));
            // line 463
            echo "          <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\" ";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", []), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
          <label for=\"";
            // line 464
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "</label>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 466
        echo "        <span class=\"slide-button\"></span>
    </span>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 471
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        // line 472
        echo "  <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
    <small>";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 476
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-6\">";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-2\">";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
          </thead>
          <tbody>";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 488
            echo "            <tr>
              <td class=\"col-md-3\">";
            // line 489
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 490
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "file_name", [], "array"), "html", null, true);
            echo "</span></td>
              <td class=\"col-md-2\">";
            // line 491
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "mime", [], "array"), "html", null, true);
            echo "</td>
            </tr>
          ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        echo "</tbody>
        </table>
      </div>
    </div>
  </div>
";
    }

    // line 503
    public function block_choice_label($context, array $blocks = [])
    {
        // line 505
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 506
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 509
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 510
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 513
    public function block_radio_label($context, array $blocks = [])
    {
        // line 514
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 517
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 518
        echo "  ";
        // line 519
        echo "  ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 520
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 521
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
                // line 522
                echo "    ";
            }
            // line 523
            echo "    ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 524
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 525
                echo "    ";
            }
            // line 526
            echo "    ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 527
                echo "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 528
                echo "    ";
            }
            // line 529
            echo "
    ";
            // line 530
            if (((isset($context["material_design"]) || array_key_exists("material_design", $context)) || $this->getAttribute(($context["attr"] ?? null), "material_design", [], "any", true, true))) {
                // line 531
                echo "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 532
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 533
                echo ($context["widget"] ?? null);
                // line 534
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 535
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 536
                echo "</label>
      </div>
    ";
            } else {
                // line 539
                echo "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 540
                echo ($context["widget"] ?? null);
                // line 541
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 542
                echo "</label>
    ";
            }
            // line 544
            echo "  ";
        }
    }

    // line 549
    public function block_form_errors($context, array $blocks = [])
    {
        // line 550
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 551
            echo "<div class=\"alert alert-danger\">";
            // line 552
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 553
                echo "<ul class=\"alert-text\">";
                // line 554
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 555
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 556
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 557
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 558
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 559
                    echo "
            </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 562
                echo "</ul>";
            } else {
                // line 564
                echo "<div class=\"alert-text\">";
                // line 565
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 566
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 567
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 568
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 569
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 570
                    echo "
            </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 573
                echo "</div>";
            }
            // line 575
            echo "</div>";
        }
    }

    // line 581
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        // line 582
        echo "  ";
        ob_start(function () { return ''; });
        // line 583
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input type=\"checkbox\" class=\"js-choice-table-select-all\">
                <i class=\"md-checkbox-control\"></i>
                ";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 599
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 600
            echo "          <tr>
            <td>
              ";
            // line 602
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 606
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 612
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        // line 613
        echo "  ";
        ob_start(function () { return ''; });
        // line 614
        echo "    <div class=\"choice-table table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
        // line 618
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</th>
          ";
        // line 619
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 620
            echo "            <th class=\"text-center\">
              ";
            // line 621
            if (($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", []) && !twig_in_filter($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "name", []), ($context["headers_to_disable"] ?? null)))) {
                // line 622
                echo "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                // line 624
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) + 1), "html", null, true);
                echo "\"
                   data-column-checked=\"false\"
                >
                  ";
                // line 627
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
                </a>
              ";
            } else {
                // line 630
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
              ";
            }
            // line 632
            echo "            </th>
          ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 637
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 638
            echo "          <tr>
            <td>
              ";
            // line 640
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 642
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 643
                echo "              <td class=\"text-center\">
                ";
                // line 644
                if ($this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true), $context["child_choice_name"], [], "array", true, true)) {
                    // line 645
                    echo "                  ";
                    $context["entry_index"] = $this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array"), $context["child_choice_name"], [], "array");
                    // line 646
                    echo "
                  ";
                    // line 647
                    if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", [])) {
                        // line 648
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 650
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget');
                        echo "
                  ";
                    }
                    // line 652
                    echo "                ";
                } else {
                    // line 653
                    echo "                  --
                ";
                }
                // line 655
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 657
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 659
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 665
    public function block_translatable_widget($context, array $blocks = [])
    {
        // line 666
        echo "<div class=\"input-group locale-input-group js-locale-input-group d-flex\">
    ";
        // line 667
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 668
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 669
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 670
            echo "      ";
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 671
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 672
                echo "      ";
            }
            // line 673
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
        ";
            // line 674
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 677
        echo "    ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 678
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
          ";
            // line 682
            if ((isset($context["change_form_language_url"]) || array_key_exists("change_form_language_url", $context))) {
                // line 683
                echo "            data-change-language-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "change_form_language_url", []), "html", null, true);
                echo "\"
          ";
            }
            // line 685
            echo "                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 687
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 689
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>
        <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 691
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 692
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 693
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 695
            echo "        </div>
      </div>
    ";
        }
        // line 698
        echo "  </div>";
    }

    // line 701
    public function block_birthday_widget($context, array $blocks = [])
    {
        // line 702
        echo "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 703
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 705
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 706
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 707
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 709
            echo "
    ";
            // line 710
            $context["yearWidget"] = (("<div class=\"col pl-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget')) . "</div>");
            // line 711
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget')) . "</div>");
            // line 712
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')) . "</div>");
            // line 714
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 715
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 716
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 717
($context["dayWidget"] ?? null)]);
            // line 720
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 721
                echo "</div>";
            }
        }
    }

    // line 726
    public function block_file_widget($context, array $blocks = [])
    {
        // line 727
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 733
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(        // line 734
($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->env->getExtension('PrestaShopBundle\Twig\ContextIsoCodeProviderExtension')->getIsoCode()]);
        // line 739
        if (($this->getAttribute(($context["attr"] ?? null), "disabled", [], "any", true, true) && $this->getAttribute(($context["attr"] ?? null), "disabled", []))) {
            // line 740
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($this->getAttribute(            // line 741
($context["attr"] ?? null), "class", []) . " disabled")]);
            // line 743
            echo "    ";
        }
        // line 744
        echo "
    ";
        // line 745
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

    <label class=\"custom-file-label\" for=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
      ";
        // line 748
        $context["attributes"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []);
        // line 749
        echo "      ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["attributes"] ?? null), "placeholder", [], "any", true, true)) ? ($this->getAttribute(($context["attributes"] ?? null), "placeholder", [])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>
";
    }

    // line 754
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        // line 755
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "is_allowed_to_display", [])) {
            // line 756
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 758
            $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 759
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 761
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 762
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 763
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 771
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        // line 772
        echo "  <div class=\"input-group\">";
        // line 773
        $this->displayBlock("form_widget", $context, $blocks);
        // line 774
        echo "<span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 777
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 778
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 780
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
";
    }

    // line 786
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        // line 787
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 788
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 792
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 793
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 795
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 797
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 799
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 802
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 803
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 805
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 807
        echo "
    </em>
  </small>
";
    }

    // line 812
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        // line 813
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_field", [], "array"), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 814
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_field", [], "array"), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 817
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        // line 818
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_field", [], "array"), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 819
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_field", [], "array"), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 822
    public function block_form_help($context, array $blocks = [])
    {
        // line 823
        echo "  ";
        if (($context["help"] ?? null)) {
            // line 824
            echo "    <small class=\"form-text\">";
            echo ($context["help"] ?? null);
            echo "</small>
  ";
        }
        // line 826
        echo "  ";
        if ((isset($context["warning"]) || array_key_exists("warning", $context))) {
            // line 827
            echo "    ";
            echo twig_escape_filter($this->env, ($context["warning"] ?? null), "html", null, true);
            echo "
  ";
        }
    }

    // line 831
    public function block_custom_content_widget($context, array $blocks = [])
    {
        // line 832
        echo "  ";
        $this->loadTemplate(($context["template"] ?? null), "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 832)->display(twig_array_merge($context, ($context["data"] ?? null)));
    }

    // line 835
    public function block_text_widget($context, array $blocks = [])
    {
        // line 836
        echo "  ";
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 837
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 839
        echo "
  ";
        // line 840
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

  ";
        // line 842
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 843
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 844
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 845
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 847
            echo "    </datalist>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2190 => 847,  2181 => 845,  2177 => 844,  2172 => 843,  2170 => 842,  2165 => 840,  2162 => 839,  2159 => 837,  2156 => 836,  2153 => 835,  2148 => 832,  2145 => 831,  2137 => 827,  2134 => 826,  2128 => 824,  2125 => 823,  2122 => 822,  2116 => 819,  2111 => 818,  2108 => 817,  2102 => 814,  2097 => 813,  2094 => 812,  2087 => 807,  2085 => 805,  2084 => 803,  2083 => 802,  2077 => 799,  2073 => 797,  2070 => 795,  2067 => 793,  2065 => 792,  2063 => 788,  2061 => 787,  2058 => 786,  2049 => 780,  2044 => 778,  2040 => 777,  2035 => 774,  2033 => 773,  2031 => 772,  2028 => 771,  2017 => 763,  2013 => 762,  2009 => 761,  2005 => 759,  2003 => 758,  1999 => 756,  1996 => 755,  1993 => 754,  1984 => 749,  1982 => 748,  1978 => 747,  1973 => 745,  1970 => 744,  1967 => 743,  1965 => 741,  1963 => 740,  1961 => 739,  1959 => 734,  1958 => 733,  1951 => 729,  1947 => 727,  1944 => 726,  1938 => 721,  1936 => 720,  1934 => 717,  1933 => 716,  1932 => 715,  1931 => 714,  1928 => 712,  1925 => 711,  1923 => 710,  1920 => 709,  1915 => 707,  1913 => 706,  1911 => 705,  1908 => 703,  1905 => 702,  1902 => 701,  1898 => 698,  1893 => 695,  1882 => 693,  1878 => 692,  1874 => 691,  1869 => 689,  1864 => 687,  1860 => 685,  1854 => 683,  1852 => 682,  1846 => 678,  1843 => 677,  1834 => 674,  1829 => 673,  1826 => 672,  1823 => 671,  1820 => 670,  1817 => 669,  1814 => 668,  1810 => 667,  1807 => 666,  1804 => 665,  1796 => 659,  1789 => 657,  1782 => 655,  1778 => 653,  1775 => 652,  1769 => 650,  1763 => 648,  1761 => 647,  1758 => 646,  1755 => 645,  1753 => 644,  1750 => 643,  1746 => 642,  1741 => 640,  1737 => 638,  1733 => 637,  1728 => 634,  1713 => 632,  1707 => 630,  1701 => 627,  1695 => 624,  1691 => 622,  1689 => 621,  1686 => 620,  1669 => 619,  1665 => 618,  1659 => 614,  1656 => 613,  1653 => 612,  1645 => 606,  1635 => 602,  1631 => 600,  1627 => 599,  1617 => 592,  1606 => 583,  1603 => 582,  1600 => 581,  1595 => 575,  1592 => 573,  1585 => 570,  1583 => 569,  1582 => 568,  1581 => 567,  1579 => 566,  1575 => 565,  1573 => 564,  1570 => 562,  1563 => 559,  1561 => 558,  1560 => 557,  1559 => 556,  1557 => 555,  1553 => 554,  1551 => 553,  1549 => 552,  1547 => 551,  1545 => 550,  1542 => 549,  1537 => 544,  1533 => 542,  1531 => 541,  1529 => 540,  1514 => 539,  1509 => 536,  1507 => 535,  1505 => 534,  1503 => 533,  1489 => 532,  1486 => 531,  1484 => 530,  1481 => 529,  1478 => 528,  1475 => 527,  1472 => 526,  1469 => 525,  1466 => 524,  1463 => 523,  1460 => 522,  1457 => 521,  1454 => 520,  1451 => 519,  1449 => 518,  1446 => 517,  1442 => 514,  1439 => 513,  1435 => 510,  1432 => 509,  1428 => 506,  1426 => 505,  1423 => 503,  1414 => 494,  1397 => 491,  1393 => 490,  1389 => 489,  1386 => 488,  1369 => 487,  1363 => 483,  1359 => 482,  1355 => 481,  1347 => 476,  1341 => 473,  1336 => 472,  1333 => 471,  1326 => 466,  1308 => 464,  1290 => 463,  1287 => 462,  1270 => 461,  1267 => 460,  1264 => 459,  1261 => 458,  1256 => 455,  1249 => 451,  1243 => 448,  1239 => 447,  1234 => 445,  1229 => 442,  1227 => 441,  1222 => 439,  1216 => 436,  1212 => 435,  1208 => 433,  1205 => 432,  1202 => 431,  1195 => 427,  1190 => 426,  1187 => 425,  1184 => 424,  1163 => 414,  1160 => 413,  1157 => 412,  1154 => 411,  1151 => 410,  1147 => 407,  1142 => 404,  1133 => 401,  1128 => 399,  1125 => 398,  1121 => 397,  1117 => 396,  1111 => 393,  1106 => 391,  1098 => 385,  1096 => 384,  1093 => 383,  1084 => 380,  1080 => 379,  1077 => 378,  1074 => 377,  1071 => 376,  1069 => 375,  1066 => 374,  1063 => 373,  1060 => 372,  1056 => 371,  1051 => 369,  1048 => 368,  1044 => 365,  1039 => 362,  1028 => 360,  1024 => 359,  1020 => 358,  1014 => 355,  1009 => 353,  1001 => 347,  999 => 346,  996 => 345,  988 => 343,  985 => 342,  983 => 341,  980 => 340,  977 => 339,  974 => 338,  972 => 337,  969 => 336,  966 => 335,  963 => 334,  959 => 333,  954 => 331,  951 => 330,  947 => 327,  944 => 325,  942 => 324,  939 => 323,  933 => 319,  924 => 316,  920 => 315,  899 => 314,  895 => 313,  891 => 311,  887 => 309,  877 => 305,  867 => 304,  864 => 303,  860 => 302,  857 => 301,  855 => 300,  851 => 299,  846 => 298,  843 => 297,  839 => 294,  835 => 292,  818 => 290,  815 => 289,  798 => 288,  795 => 287,  792 => 286,  788 => 283,  782 => 281,  780 => 280,  776 => 279,  768 => 278,  764 => 276,  760 => 273,  754 => 271,  751 => 270,  746 => 268,  741 => 266,  739 => 265,  731 => 264,  727 => 262,  724 => 261,  722 => 260,  719 => 259,  716 => 258,  711 => 254,  694 => 252,  677 => 251,  674 => 250,  668 => 248,  665 => 247,  660 => 243,  654 => 240,  653 => 239,  652 => 238,  651 => 237,  647 => 236,  643 => 235,  640 => 233,  634 => 230,  633 => 229,  632 => 228,  631 => 227,  627 => 226,  625 => 225,  623 => 224,  620 => 223,  616 => 220,  614 => 219,  611 => 218,  605 => 215,  603 => 214,  600 => 213,  596 => 188,  594 => 187,  591 => 186,  585 => 181,  582 => 180,  574 => 179,  569 => 177,  567 => 176,  565 => 175,  562 => 173,  560 => 172,  557 => 171,  551 => 166,  549 => 165,  547 => 163,  546 => 162,  545 => 161,  544 => 160,  539 => 158,  537 => 157,  535 => 156,  532 => 154,  530 => 153,  527 => 152,  522 => 148,  520 => 147,  518 => 146,  516 => 145,  514 => 144,  510 => 143,  508 => 142,  505 => 140,  503 => 139,  500 => 138,  493 => 132,  491 => 131,  489 => 130,  486 => 129,  482 => 126,  476 => 123,  473 => 122,  471 => 121,  469 => 120,  463 => 117,  460 => 116,  457 => 115,  455 => 114,  452 => 113,  449 => 112,  445 => 109,  443 => 107,  441 => 106,  438 => 105,  433 => 86,  428 => 84,  423 => 83,  420 => 82,  418 => 81,  415 => 80,  410 => 78,  405 => 77,  402 => 76,  400 => 75,  382 => 74,  378 => 71,  375 => 68,  374 => 67,  373 => 66,  371 => 65,  368 => 64,  365 => 62,  362 => 61,  359 => 59,  357 => 58,  355 => 57,  352 => 56,  348 => 45,  344 => 44,  341 => 43,  337 => 40,  335 => 39,  332 => 38,  328 => 835,  325 => 834,  323 => 831,  320 => 830,  318 => 822,  315 => 821,  313 => 817,  310 => 816,  308 => 812,  305 => 811,  303 => 786,  300 => 785,  298 => 771,  295 => 770,  293 => 754,  290 => 753,  288 => 726,  285 => 725,  283 => 701,  280 => 700,  278 => 665,  275 => 664,  273 => 612,  270 => 611,  268 => 581,  265 => 580,  262 => 578,  260 => 549,  257 => 548,  254 => 546,  252 => 517,  249 => 516,  247 => 513,  244 => 512,  242 => 509,  239 => 508,  237 => 503,  234 => 502,  231 => 500,  229 => 471,  226 => 470,  224 => 458,  221 => 457,  219 => 431,  216 => 430,  214 => 424,  211 => 423,  209 => 410,  206 => 409,  204 => 368,  201 => 367,  199 => 330,  196 => 329,  194 => 323,  191 => 322,  189 => 297,  186 => 296,  184 => 258,  181 => 257,  179 => 247,  176 => 246,  174 => 223,  171 => 222,  169 => 218,  166 => 217,  164 => 213,  161 => 212,  158 => 190,  156 => 186,  153 => 185,  151 => 171,  148 => 170,  146 => 152,  143 => 151,  141 => 138,  138 => 137,  136 => 129,  133 => 128,  131 => 112,  128 => 111,  126 => 105,  123 => 104,  120 => 102,  117 => 100,  115 => 56,  112 => 53,  110 => 43,  108 => 38,  105 => 35,  102 => 28,  39 => 27,  32 => 26,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig");
    }
}
