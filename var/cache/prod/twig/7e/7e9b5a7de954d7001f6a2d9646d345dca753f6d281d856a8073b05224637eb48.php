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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig */
class __TwigTemplate_02d8ce937b6172d5e2c35faec9ae378e90e18358dddc99b9c332df86c820c2b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'import_file_history_block' => [$this, 'block_import_file_history_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", 26)->unwrap();
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importForm"] ?? null), 'form_start', ["attr" => ["data-file-upload-url" => ($context["importFileUploadUrl"] ?? null), "data-delete-confirm-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to delete this entity:", [], "Admin.Advparameters.Notification"), "class" => "js-import-form"]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">import_export</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can read information on import at:", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://doc.prestashop.com/display/PS17/Import", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" class=\"_blank\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://doc.prestashop.com/display/PS17/Import", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </a>
      </p>
      <p class=\"alert-text\">
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more about the CSV format at:", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://en.wikipedia.org/wiki/Comma-separated_values", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" class=\"_blank\">
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://en.wikipedia.org/wiki/Comma-separated_values", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
        </a>
      </p>
    </div>

    <hr>

    <div class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("What do you want to import?", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "entity", []), 'errors');
        echo "
      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "entity", []), 'widget', ["attr" => ["class" => "js-entity-select"]]);
        echo "
    </div>

    <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
      <ul>
        <li>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that the Category import does not support having two categories with the same name.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
        <li>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that you can have several products with the same reference.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      </ul>
    </div>

    <hr>

    <div class=\"form-group hidden-xs-up\">
      ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "csv", []), 'errors');
        echo "
      ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "csv", []), 'widget', ["attr" => ["class" => "js-import-file-input"]]);
        echo "
    </div>

    <div class=\"form-group js-file-upload-form-group\">
      <label class=\"form-control-label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select a file to import", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "file", []), 'errors');
        echo "
          ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "file", []), 'widget', ["attr" => ["class" => "js-import-file", "data-max-file-upload-size" => ($context["maxFileUploadSize"] ?? null)]]);
        echo "
        </div>
        <div class=\"col\">
          <span>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>
          <button type=\"button\"
                  class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
                  ";
        // line 83
        if (twig_test_empty(($context["importFileNames"] ?? null))) {
            echo "disabled";
        }
        // line 84
        echo "          >
            <span class=\"badge badge-primary js-files-history-number\">";
        // line 85
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["importFileNames"] ?? null)), "html", null, true);
        echo "</span>
            ";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose from history / FTP", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
      <small class=\"form-text\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
      <small class=\"form-text\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only UTF-8 and ISO 8859-1 encodings are allowed", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
      <small class=\"form-text\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can also upload your file via FTP to the following directory: %s .", ["%s" => ($context["importDirectory"] ?? null)], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
    </div>

    <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
      <p class=\"alert-text\">
        <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
      </p>
    </div>

    <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
      <button type=\"button\"
              class=\"close btn btn-outline-secondary js-change-import-file-btn\"
              aria-label=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change", [], "Admin.Actions"), "html", null, true);
        echo "\"
      >
        <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
      </button>
      <p class=\"alert-text js-import-file\"></p>
    </div>

    ";
        // line 111
        $this->displayBlock('import_file_history_block', $context, $blocks);
        // line 114
        echo "
    <hr>

    <div class=\"form-group\">
      ";
        // line 118
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language of the file", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The locale must be installed", [], "Admin.Advparameters.Notification"));
        echo "
      ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "iso_lang", []), 'errors');
        echo "
      ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "iso_lang", []), 'widget');
        echo "
    </div>

    <div class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Field separator", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "separator", []), 'errors');
        echo "
      ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "separator", []), 'widget');
        echo "
      <small class=\"form-text\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("e.g. ", [], "Admin.Advparameters.Help"), "html", null, true);
        echo " 1; Blouse; 129.90; 5</small>
    </div>

    <div class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Multiple value separator", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "multiple_value_separator", []), 'errors');
        echo "
      ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "multiple_value_separator", []), 'widget');
        echo "
      <small class=\"form-text\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("e.g. ", [], "Admin.Advparameters.Help"), "html", null, true);
        echo " Blouse; red.jpg, blue.jpg, green.jpg; 129.90</small>
    </div>

    <hr>

    <div class=\"form-group js-truncate-form-group\">
      <label class=\"form-control-label\">
        ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete all [1]categories[/1] before import", ["[1]" => "<span class=\"js-entity-name\">", "[/1]" => "</span>"], "Admin.Advparameters.Feature");
        echo "
      </label>
      ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "truncate", []), 'errors');
        echo "
      ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "truncate", []), 'widget');
        echo "
    </div>

    <div class=\"form-group js-match-ref-form-group\">
      ";
        // line 148
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use product reference as key", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If enabled, the product's reference number MUST be unique!", [], "Admin.Advparameters.Help"));
        echo "
      ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "match_ref", []), 'errors');
        echo "
      ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "match_ref", []), 'widget');
        echo "
    </div>

    <div class=\"form-group js-regenerate-form-group\">
      <label class=\"form-control-label\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Skip thumbnails regeneration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "regenerate", []), 'errors');
        echo "
      ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "regenerate", []), 'widget');
        echo "
    </div>

    <div class=\"form-group js-force-ids-form-group\">
      ";
        // line 160
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Force all ID numbers", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you enable this option, your imported items' ID number will be used as is. If you do not enable this option, the imported ID numbers will be ignored, and PrestaShop will instead create auto-incremented ID numbers for all the imported items.", [], "Admin.Advparameters.Help"));
        echo "
      ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "forceIDs", []), 'errors');
        echo "
      ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "forceIDs", []), 'widget');
        echo "
    </div>

    <div class=\"form-group\">
      ";
        // line 166
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send notification email", [], "Admin.Advparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sends an email to let you know your import is complete. It can be useful when handling large files, as the import may take some time.", [], "Admin.Advparameters.Help"));
        echo "
      ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "sendemail", []), 'errors');
        echo "
      ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["importForm"] ?? null), "sendemail", []), 'widget');
        echo "
    </div>

    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importForm"] ?? null), 'rest');
        echo "
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" name=\"submitImportFile\">
        ";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next step", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        <i class=\"material-icons\">navigate_next</i>
      </button>
    </div>
  </div>
</div>
";
        // line 182
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 111
    public function block_import_file_history_block($context, array $blocks = [])
    {
        // line 112
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", 112)->display($context);
        // line 113
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 113,  366 => 112,  363 => 111,  357 => 182,  348 => 176,  340 => 171,  334 => 168,  330 => 167,  326 => 166,  319 => 162,  315 => 161,  311 => 160,  304 => 156,  300 => 155,  296 => 154,  289 => 150,  285 => 149,  281 => 148,  274 => 144,  270 => 143,  265 => 141,  255 => 134,  251 => 133,  247 => 132,  243 => 131,  236 => 127,  232 => 126,  228 => 125,  224 => 124,  217 => 120,  213 => 119,  209 => 118,  203 => 114,  201 => 111,  191 => 104,  176 => 92,  172 => 91,  168 => 90,  161 => 86,  157 => 85,  154 => 84,  150 => 83,  144 => 80,  138 => 77,  134 => 76,  128 => 73,  121 => 69,  117 => 68,  107 => 61,  103 => 60,  95 => 55,  91 => 54,  87 => 53,  76 => 45,  72 => 44,  68 => 43,  61 => 39,  57 => 38,  53 => 37,  45 => 32,  39 => 29,  36 => 28,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig");
    }
}
