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

/* @MailThemes/modern/components/layout.html.twig */
class __TwigTemplate_c64a74c6d35c02c5578dacb3549c256a4c21bef480123ad704da80a2ec16a281 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer_content' => [$this, 'block_footer_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">

<head>
  <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
  <!--[if !mso]><!-- -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!--<![endif]-->
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <!--[if mso]>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
  <!--[if lte mso 11]>
        <style type=\"text/css\">
          .mj-outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->
  <style type=\"text/css\">
  </style>
  <style type=\"text/css\">
    .shadow {
      box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.1);
    }

    .label {
      font-weight: 700;
    }

    .warning {
      font-weight: 700;
      font-size: 16px;
    }

    a {
      color: #25B9D7;
      text-decoration: underline;
      font-weight: 600;
    }

    a.light {
      font-weight: 400;
    }

    span.strong {
      font-weight: 600;
    }

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }
    }
  </style>
    ";
        // line 100
        $this->displayBlock('styles', $context, $blocks);
        // line 102
        echo "</head>

<body style=\"background-color:#eeeeee;\">
  <div style=\"background-color:#eeeeee;\">
    <!--[if mso | IE]>
    
        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td height=\"40\" style=\"vertical-align:top;height:40px;\">
      
    <![endif]-->
    <div style=\"height:40px;\">   </div>
    <!--[if mso | IE]>
    
        </td></tr></table>
      
    
      <table
         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"shadow-outlook wrapper-container-outlook\" style=\"width:604px;\" width=\"604\"
      >
        <tr>
          <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
      <![endif]-->
    <div class=\"shadow wrapper-container\" style=\"background:#ffffff;background-color:#ffffff;margin:0px auto;border-radius:4px;max-width:604px;\">
      <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background:#ffffff;background-color:#ffffff;width:100%;border-radius:4px;\">
        <tbody>
          <tr>
            <td style=\"direction:ltr;font-size:0px;padding:0 0 30px;text-align:center;\">
              <!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                <![endif]--> 
                  ";
        // line 131
        $this->displayBlock('header', $context, $blocks);
        // line 134
        echo "
                  ";
        // line 135
        $this->displayBlock('content', $context, $blocks);
        // line 137
        echo "
                  ";
        // line 138
        $this->displayBlock('footer_content', $context, $blocks);
        // line 140
        echo "
              <!--[if mso | IE]>
                  </table>
                <![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      <![endif]--> 
                  ";
        // line 154
        $this->displayBlock('footer', $context, $blocks);
        // line 157
        echo "
  </div>
</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Title";
    }

    // line 100
    public function block_styles($context, array $blocks = [])
    {
        // line 101
        echo "    ";
    }

    // line 131
    public function block_header($context, array $blocks = [])
    {
        // line 132
        echo "                      ";
        $this->loadTemplate("@MailThemes/modern/components/header.html.twig", "@MailThemes/modern/components/layout.html.twig", 132)->display($context);
        // line 133
        echo "                  ";
    }

    // line 135
    public function block_content($context, array $blocks = [])
    {
        // line 136
        echo "                  ";
    }

    // line 138
    public function block_footer_content($context, array $blocks = [])
    {
        // line 139
        echo "                  ";
    }

    // line 154
    public function block_footer($context, array $blocks = [])
    {
        // line 155
        echo "                      ";
        $this->loadTemplate("@MailThemes/modern/components/footer.html.twig", "@MailThemes/modern/components/layout.html.twig", 155)->display($context);
        // line 156
        echo "                  ";
    }

    public function getTemplateName()
    {
        return "@MailThemes/modern/components/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  255 => 156,  252 => 155,  249 => 154,  245 => 139,  242 => 138,  238 => 136,  235 => 135,  231 => 133,  228 => 132,  225 => 131,  221 => 101,  218 => 100,  212 => 5,  203 => 157,  201 => 154,  185 => 140,  183 => 138,  180 => 137,  178 => 135,  175 => 134,  173 => 131,  142 => 102,  140 => 100,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/modern/components/layout.html.twig", "/var/www/html/mails/themes/modern/components/layout.html.twig");
    }
}
