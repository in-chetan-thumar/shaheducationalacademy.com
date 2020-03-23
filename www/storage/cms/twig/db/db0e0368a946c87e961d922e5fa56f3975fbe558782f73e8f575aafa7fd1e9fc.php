<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* E:\xampp7.0.23\htdocs\shaheducation/themes/shaheduction/layouts/static.htm */
class __TwigTemplate_04174c8c4b82a48894ae7552e7997842058d4a8261c18335fcffa6e1cce2f25a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
<head>
    <link rel=\"shortcut icon\" href=\"http://www.shaheducationalacademy.com/wp-content/uploads/2015/02/favicone1.png\" type=\"image/x-icon\" />
    <!-- Title -->
    <title>Shah Educational Academy | Shah Educational Academy</title>
    ";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
    <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/main.css"]);
        // line 10
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css"]);
        // line 13
        echo "\" rel=\"stylesheet\">
    <!-- END head -->
</head>
<!-- BEGIN body -->
<body id=\"top\" class=\"home page-template page-template-page-templates page-template-template-homepage page-template-page-templatestemplate-homepage-php page page-id-26 loading\">
    <!-- BEGIN #header-wrapper -->
    <div id=\"header-wrapper\">
        ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "        <!-- END #header-content-wrapper -->
   
    <!-- BEGIN #main-menu-wrapper -->
     <div id=\"main-menu-wrapper\" class=\"header-menu\">
            ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "      <!-- END #main-menu-wrapper -->
    </div>
     </div>

    <div class=\"slider clearfix\">
        \t";
        // line 31
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("carousel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 32
        echo "    </div>

    <!--marquee start-->
    ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("marquee"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "    <!--marquee end-->
   
    <div class=\"page-header clearfix\">
        <div class=\"page-header-inner clearfix\">
            <div class=\"page-title\">
                <h2>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 41), "title", [], "any", false, false, false, 41), "html", null, true);
        echo "</h2>
                <div class=\"page-title-block\"></div>
            </div>
            <div class=\"breadcrumbs clearfix\">
            </div>
        </div>
    </div>
    
    <!-- BEGIN .content-wrapper -->
    <div class=\"content-wrapper clearfix\">
        <!-- BEGIN .content-wrapper-inner -->
        <div class=\"content-wrapper-inner clearfix\">
        
            <!-- BEGIN .center-content -->
            <div class=\"center-content page-content\">
                <div class=\"widget content-block\">
                    <div class=\"textwidget\">
                        <div style=\"font-size: 15px; line-height: 26px;\">
                            ";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 60
        echo "                        </div>
                    </div>
                </div>
                <!-- END .center-content -->
            </div>
            <!-- BEGIN .sidebar-right -->
            ";
        // line 66
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("rightsidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 67
        echo "            <!-- END .content-wrapper-inner -->
        </div>
        <!-- END .content-wrapper -->
    </div>
    ";
        // line 71
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "\t\t
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>\t
      <script type=\"text/javascript\">
          \$(document).ready(function(){
              \$('#main-menu-wrapper').find('ul').attr('id', 'main-menu');
;
          });
      </script>
    <!--End of Tawk.to Script-->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7.0.23\\htdocs\\shaheducation/themes/shaheduction/layouts/static.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 71,  142 => 67,  138 => 66,  130 => 60,  128 => 59,  107 => 41,  100 => 36,  96 => 35,  91 => 32,  87 => 31,  80 => 26,  76 => 25,  70 => 21,  66 => 20,  57 => 13,  55 => 11,  52 => 10,  50 => 8,  47 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <link rel=\"shortcut icon\" href=\"http://www.shaheducationalacademy.com/wp-content/uploads/2015/02/favicone1.png\" type=\"image/x-icon\" />
    <!-- Title -->
    <title>Shah Educational Academy | Shah Educational Academy</title>
    {% styles %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
    <link href=\"{{ [
        'assets/css/main.css'
        ]|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ [
        'assets/css/theme.css'
        ]|theme }}\" rel=\"stylesheet\">
    <!-- END head -->
</head>
<!-- BEGIN body -->
<body id=\"top\" class=\"home page-template page-template-page-templates page-template-template-homepage page-template-page-templatestemplate-homepage-php page page-id-26 loading\">
    <!-- BEGIN #header-wrapper -->
    <div id=\"header-wrapper\">
        {% partial \"header\" %}
        <!-- END #header-content-wrapper -->
   
    <!-- BEGIN #main-menu-wrapper -->
     <div id=\"main-menu-wrapper\" class=\"header-menu\">
            {% component 'staticMenu' %}
      <!-- END #main-menu-wrapper -->
    </div>
     </div>

    <div class=\"slider clearfix\">
        \t{% component 'carousel' %}
    </div>

    <!--marquee start-->
    {% partial 'marquee' %}
    <!--marquee end-->
   
    <div class=\"page-header clearfix\">
        <div class=\"page-header-inner clearfix\">
            <div class=\"page-title\">
                <h2>{{this.page.title}}</h2>
                <div class=\"page-title-block\"></div>
            </div>
            <div class=\"breadcrumbs clearfix\">
            </div>
        </div>
    </div>
    
    <!-- BEGIN .content-wrapper -->
    <div class=\"content-wrapper clearfix\">
        <!-- BEGIN .content-wrapper-inner -->
        <div class=\"content-wrapper-inner clearfix\">
        
            <!-- BEGIN .center-content -->
            <div class=\"center-content page-content\">
                <div class=\"widget content-block\">
                    <div class=\"textwidget\">
                        <div style=\"font-size: 15px; line-height: 26px;\">
                            {% page %}
                        </div>
                    </div>
                </div>
                <!-- END .center-content -->
            </div>
            <!-- BEGIN .sidebar-right -->
            {% partial 'rightsidebar' %}
            <!-- END .content-wrapper-inner -->
        </div>
        <!-- END .content-wrapper -->
    </div>
    {% partial \"footer\" %}\t\t
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>\t
      <script type=\"text/javascript\">
          \$(document).ready(function(){
              \$('#main-menu-wrapper').find('ul').attr('id', 'main-menu');
;
          });
      </script>
    <!--End of Tawk.to Script-->
</body>
</html>", "E:\\xampp7.0.23\\htdocs\\shaheducation/themes/shaheduction/layouts/static.htm", "");
    }
}
