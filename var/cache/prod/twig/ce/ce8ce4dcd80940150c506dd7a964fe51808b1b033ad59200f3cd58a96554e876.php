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

/* @PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig */
class __TwigTemplate_5e876e319332b8390b7c0c9586c8d506d94968e91f36434413c39b98238efc2f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'generateMailsFormBlock' => [$this, 'block_generateMailsFormBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('generateMailsFormBlock', $context, $blocks);
    }

    public function block_generateMailsFormBlock($context, array $blocks = [])
    {
        // line 27
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">email</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List %theme% layouts", ["%theme%" => $this->getAttribute(($context["mailTheme"] ?? null), "name", [])], "Admin.Design.Feature"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-block\">

            <table class=\"grid-table table\">
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th scope=\"col\">
                    ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "
                  </th>
                  <th scope=\"col\">
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module", [], "Admin.Global"), "html", null, true);
        echo "
                  </th>
                  <th scope=\"col\">
                    <div class=\"grid-actions-header-text\">
                      ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["mailTheme"] ?? null), "layouts", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mailLayout"]) {
            // line 54
            echo "                  <tr>
                    <td class=\"data-type\">
                      ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["mailLayout"], "name", []), "html", null, true);
            echo "
                    </td>
                    <td class=\"data-type\">
                      ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["mailLayout"], "moduleName", []), "html", null, true);
            echo "
                    </td>
                    <td class=\"action-type\">
                      ";
            // line 62
            if (twig_test_empty($this->getAttribute($context["mailLayout"], "moduleName", []))) {
                // line 63
                echo "                        ";
                $context["previewUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_preview_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? null), "name", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "html"]);
                // line 64
                echo "                        ";
                $context["rawUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_raw_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? null), "name", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "html"]);
                // line 65
                echo "                        ";
                $context["txtUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_raw_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? null), "name", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "txt"]);
                // line 66
                echo "                        ";
                $context["mailUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_send_test_mail", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? null), "name", []), "layout" => $this->getAttribute($context["mailLayout"], "name", [])]);
                // line 67
                echo "                      ";
            } else {
                // line 68
                echo "                        ";
                $context["previewUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_preview_module_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? null), "name", []), "module" => $this->getAttribute($context["mailLayout"], "moduleName", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "html"]);
                // line 69
                echo "                        ";
                $context["rawUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_raw_module_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? null), "name", []), "module" => $this->getAttribute($context["mailLayout"], "moduleName", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "html"]);
                // line 70
                echo "                        ";
                $context["txtUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_raw_module_layout", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? null), "name", []), "module" => $this->getAttribute($context["mailLayout"], "moduleName", []), "layout" => $this->getAttribute($context["mailLayout"], "name", []), "type" => "txt"]);
                // line 71
                echo "                        ";
                $context["mailUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_send_test_module_mail", ["locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "theme" => $this->getAttribute(($context["mailTheme"] ?? null), "name", []), "module" => $this->getAttribute($context["mailLayout"], "moduleName", []), "layout" => $this->getAttribute($context["mailLayout"], "name", [])]);
                // line 72
                echo "                      ";
            }
            // line 73
            echo "
                      <div class=\"btn-group-action text-right\">
                        <div class=\"btn-group\">
                          <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, ($context["previewUrl"] ?? null), "html", null, true);
            echo "\">
                            <i class=\"material-icons\">http</i>
                          </a>

                          <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\"
                             data-toggle=\"dropdown\"
                             aria-haspopup=\"true\"
                             aria-expanded=\"false\"
                          >
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\">
                            <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, ($context["rawUrl"] ?? null), "html", null, true);
            echo "\">
                              <i class=\"material-icons\">code</i>
                              ";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Raw HTML", [], "Admin.Design.Feature"), "html", null, true);
            echo "
                            </a>
                            <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, ($context["txtUrl"] ?? null), "html", null, true);
            echo "\">
                              <i class=\"material-icons\">subject</i>
                              ";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Text", [], "Admin.Design.Feature"), "html", null, true);
            echo "
                            </a>
                            <a class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, ($context["mailUrl"] ?? null), "html", null, true);
            echo "\">
                              <i class=\"material-icons\">email</i>
                              ";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send a test email", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
                            </a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailLayout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "              </tbody>
            </table>

        </div>

        <div class=\"card-footer\">
          <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mail_theme_index", (((isset($context["params"]) || array_key_exists("params", $context))) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]))), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
            <i class=\"material-icons\">arrow_back</i>
            ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to configuration", [], "Admin.Actions"), "html", null, true);
        echo "
          </a>
        </div>

      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 114,  199 => 112,  191 => 106,  177 => 98,  172 => 96,  167 => 94,  162 => 92,  157 => 90,  152 => 88,  137 => 76,  132 => 73,  129 => 72,  126 => 71,  123 => 70,  120 => 69,  117 => 68,  114 => 67,  111 => 66,  108 => 65,  105 => 64,  102 => 63,  100 => 62,  94 => 59,  88 => 56,  84 => 54,  80 => 53,  71 => 47,  64 => 43,  58 => 40,  46 => 31,  40 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig");
    }
}
