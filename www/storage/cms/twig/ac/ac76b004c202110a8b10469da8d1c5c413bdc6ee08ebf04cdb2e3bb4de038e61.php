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

/* E:\xampp7.0.23\htdocs\shaheducation/themes/shaheduction/layouts/default.htm */
class __TwigTemplate_7beb67cd6f79d27e6584559071449b711b2a62a3fbcf3aada70e32abe5bf8ca3 extends \Twig\Template
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
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 48
        echo "                        </div>
                    </div>
                </div>
                <!-- END .center-content -->
            </div>
            <!-- BEGIN .sidebar-right -->
            ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("rightsidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "            <!-- END .content-wrapper-inner -->
        </div>
        <!-- END .content-wrapper -->
    </div>
    ";
        // line 59
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
        return "E:\\xampp7.0.23\\htdocs\\shaheducation/themes/shaheduction/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 59,  127 => 55,  123 => 54,  115 => 48,  113 => 47,  100 => 36,  96 => 35,  91 => 32,  87 => 31,  80 => 26,  76 => 25,  70 => 21,  66 => 20,  57 => 13,  55 => 11,  52 => 10,  50 => 8,  47 => 7,  44 => 6,  37 => 1,);
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
</html>", "E:\\xampp7.0.23\\htdocs\\shaheducation/themes/shaheduction/layouts/default.htm", "");
    }
}
