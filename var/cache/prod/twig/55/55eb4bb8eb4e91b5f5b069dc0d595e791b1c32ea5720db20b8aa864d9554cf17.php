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

/* @PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig */
class __TwigTemplate_956cd3f73b081af6a1843449c3386e606c060f30ccd27bb2362b0a6b6dc66bfb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'perfs_form_smarty_cache' => [$this, 'block_perfs_form_smarty_cache'],
            'perfs_form_smarty_cache_form' => [$this, 'block_perfs_form_smarty_cache_form'],
            'perfs_form_debug_mode' => [$this, 'block_perfs_form_debug_mode'],
            'perfs_form_debug_mode_form' => [$this, 'block_perfs_form_debug_mode_form'],
            'perfs_form_optional_features' => [$this, 'block_perfs_form_optional_features'],
            'perfs_form_optional_features_form' => [$this, 'block_perfs_form_optional_features_form'],
            'perfs_form_ccc' => [$this, 'block_perfs_form_ccc'],
            'perfs_form_ccc_form' => [$this, 'block_perfs_form_ccc_form'],
            'perfs_form_media_servers' => [$this, 'block_perfs_form_media_servers'],
            'perfs_form_media_servers_form' => [$this, 'block_perfs_form_media_servers_form'],
            'perfs_form_caching' => [$this, 'block_perfs_form_caching'],
            'perfs_form_caching_form' => [$this, 'block_perfs_form_caching_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 27)->unwrap();
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 31
        list($context["smartyForm"], $context["debugModeForm"], $context["optionalFeaturesForm"], $context["combineCompressCacheForm"], $context["mediaServersForm"], $context["cachingForm"], $context["memcacheForm"]) =         [$this->getAttribute(        // line 32
($context["form"] ?? null), "smarty", []), $this->getAttribute(($context["form"] ?? null), "debug_mode", []), $this->getAttribute(($context["form"] ?? null), "optional_features", []), $this->getAttribute(($context["form"] ?? null), "ccc", []), $this->getAttribute(($context["form"] ?? null), "media_servers", []), $this->getAttribute(($context["form"] ?? null), "caching", []), $this->getAttribute(($context["form"] ?? null), "add_memcache_server", [])];
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        // line 36
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form"]]);
        echo "
  <div class=\"row justify-content-center\">
    ";
        // line 38
        $this->displayBlock('perfs_form_smarty_cache', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('perfs_form_debug_mode', $context, $blocks);
        // line 81
        echo "
    ";
        // line 82
        $this->displayBlock('perfs_form_optional_features', $context, $blocks);
        // line 110
        echo "
    ";
        // line 111
        $this->displayBlock('perfs_form_ccc', $context, $blocks);
        // line 138
        echo "
    ";
        // line 139
        $this->displayBlock('perfs_form_media_servers', $context, $blocks);
        // line 166
        echo "
    ";
        // line 167
        $this->displayBlock('perfs_form_caching', $context, $blocks);
        // line 190
        echo "  </div>
  ";
        // line 191
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 38
    public function block_perfs_form_smarty_cache($context, array $blocks = [])
    {
        // line 39
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">business_center</i> ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smarty", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              ";
        // line 46
        $this->displayBlock('perfs_form_smarty_cache_form', $context, $blocks);
        // line 49
        echo "            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
    }

    // line 46
    public function block_perfs_form_smarty_cache_form($context, array $blocks = [])
    {
        // line 47
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["smartyForm"] ?? null), 'widget');
        echo "
              ";
    }

    // line 60
    public function block_perfs_form_debug_mode($context, array $blocks = [])
    {
        // line 61
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">bug_report</i> ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Debug mode", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              ";
        // line 68
        $this->displayBlock('perfs_form_debug_mode_form', $context, $blocks);
        // line 71
        echo "            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
    }

    // line 68
    public function block_perfs_form_debug_mode_form($context, array $blocks = [])
    {
        // line 69
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["debugModeForm"] ?? null), 'widget');
        echo "
              ";
    }

    // line 82
    public function block_perfs_form_optional_features($context, array $blocks = [])
    {
        // line 83
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\" id=\"optional_features\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">extension</i> ";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional features", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">

              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 93
        echo $this->getAttribute(($context["ps"] ?? null), "infotip", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some features can be disabled in order to improve performance.", [], "Admin.Advparameters.Help")], "method");
        echo "
                </div>
              </div>

              ";
        // line 97
        $this->displayBlock('perfs_form_optional_features_form', $context, $blocks);
        // line 100
        echo "            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
    }

    // line 97
    public function block_perfs_form_optional_features_form($context, array $blocks = [])
    {
        // line 98
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["optionalFeaturesForm"] ?? null), 'widget');
        echo "
              ";
    }

    // line 111
    public function block_perfs_form_ccc($context, array $blocks = [])
    {
        // line 112
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">zoom_out_map</i> ";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CCC (Combine, Compress and Cache)", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 121
        echo $this->getAttribute(($context["ps"] ?? null), "infotip", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.4+. Otherwise, CCC will cause problems.", [], "Admin.Advparameters.Help")], "method");
        echo "
                </div>
              </div>

              ";
        // line 125
        $this->displayBlock('perfs_form_ccc_form', $context, $blocks);
        // line 128
        echo "            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
    }

    // line 125
    public function block_perfs_form_ccc_form($context, array $blocks = [])
    {
        // line 126
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combineCompressCacheForm"] ?? null), 'widget');
        echo "
              ";
    }

    // line 139
    public function block_perfs_form_media_servers($context, array $blocks = [])
    {
        // line 140
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">link</i> ";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media servers (use only with CCC)", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"row\">
                <div class=\"col\">
                  ";
        // line 149
        echo $this->getAttribute(($context["ps"] ?? null), "infotip", [0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You must enter another domain, or subdomain, in order to use cookieless static content.", [], "Admin.Advparameters.Feature")], "method");
        echo "
                </div>
              </div>

              ";
        // line 153
        $this->displayBlock('perfs_form_media_servers_form', $context, $blocks);
        // line 156
        echo "            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
    }

    // line 153
    public function block_perfs_form_media_servers_form($context, array $blocks = [])
    {
        // line 154
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["mediaServersForm"] ?? null), 'widget');
        echo "
              ";
    }

    // line 167
    public function block_perfs_form_caching($context, array $blocks = [])
    {
        // line 168
        echo "      <div class=\"col-xl-10\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">link</i> ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              ";
        // line 175
        $this->displayBlock('perfs_form_caching_form', $context, $blocks);
        // line 178
        echo "
              ";
        // line 179
        echo twig_include($this->env, $context, "@AdvancedParameters/memcache_servers.html.twig", ["form" => ($context["memcacheForm"] ?? null)]);
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button class=\"btn btn-primary\">";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
    }

    // line 175
    public function block_perfs_form_caching_form($context, array $blocks = [])
    {
        // line 176
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["cachingForm"] ?? null), 'widget');
        echo "
              ";
    }

    // line 194
    public function block_javascripts($context, array $blocks = [])
    {
        // line 195
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePage.js"), "html", null, true);
        echo "\"></script>
  <script>
    var configuration = {
      'addServerUrl': '";
        // line 199
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_add"), "js"), "html", null, true);
        echo "',
      'removeServerUrl': '";
        // line 200
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_delete"), "js"), "html", null, true);
        echo "',
      'testServerUrl': '";
        // line 201
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_test"), "js"), "html", null, true);
        echo "'
    };
    var app = new PerformancePage(
      configuration.addServerUrl,
      configuration.removeServerUrl,
      configuration.testServerUrl
    );

    window.addEventListener('load', function() {
      var addServerBtn = document.getElementById('add-server-btn');
      var testServerBtn = document.getElementById('test-server-btn');

      addServerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        app.addServer();
      });

      testServerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        app.testServer();
      });
    });
  </script>

  <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePageUI.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 225,  418 => 201,  414 => 200,  410 => 199,  404 => 196,  399 => 195,  396 => 194,  389 => 176,  386 => 175,  376 => 184,  368 => 179,  365 => 178,  363 => 175,  356 => 171,  351 => 168,  348 => 167,  341 => 154,  338 => 153,  328 => 160,  322 => 156,  320 => 153,  313 => 149,  304 => 143,  299 => 140,  296 => 139,  289 => 126,  286 => 125,  276 => 132,  270 => 128,  268 => 125,  261 => 121,  252 => 115,  247 => 112,  244 => 111,  237 => 98,  234 => 97,  224 => 104,  218 => 100,  216 => 97,  209 => 93,  199 => 86,  194 => 83,  191 => 82,  184 => 69,  181 => 68,  171 => 75,  165 => 71,  163 => 68,  156 => 64,  151 => 61,  148 => 60,  141 => 47,  138 => 46,  128 => 53,  122 => 49,  120 => 46,  113 => 42,  108 => 39,  105 => 38,  99 => 191,  96 => 190,  94 => 167,  91 => 166,  89 => 139,  86 => 138,  84 => 111,  81 => 110,  79 => 82,  76 => 81,  74 => 60,  71 => 59,  69 => 38,  63 => 36,  60 => 35,  55 => 25,  53 => 32,  52 => 31,  50 => 28,  48 => 27,  42 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/performance.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/performance.html.twig");
    }
}
