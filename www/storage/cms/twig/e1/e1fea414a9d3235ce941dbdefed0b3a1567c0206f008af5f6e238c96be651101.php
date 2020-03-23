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

/* E:\xampp7.0.23\htdocs\shaheducation/themes/shaheduction/partials/header.htm */
class __TwigTemplate_d6cbfb140981b08716b31d3612078f99c6f019eba25d9a587936afdd6dfb03be extends \Twig\Template
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
        echo "<!-- BEGIN #header-border -->
<div id=\"header-border\">
<!-- BEGIN #header-top -->
<div id=\"header-top\" class=\"clearfix\">
    <!-- END #header-top -->
</div>
<!-- BEGIN #header-content-wrapper -->
<div id=\"header-content-wrapper\" class=\"clearfix\">
    <div id=\"logo\" class=\"site-title-image\">
        <div>
            <a class=\"logo\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"Shah Educational Academy\"></a>
        </div>
    </div>
    <div class=\"right_phone_socialDiv\">
        <div style=\"float: right;width:100%\">
            <ul class=\"social-icons clearfix\">
                <li><a target=\"_blank\" href=\"https://www.facebook.com/seaclass\"><span class=\"facebook-icon\"></span></a></li>
            </ul>
        </div>
        <div style=\"float: right;\">
            <ul class=\"top-right-nav clearfix\">
                <li class=\"phone-icon\"><span class=\"blue_text_b\">+91 - 9820418533 | 022 - 26051635</span></li>
            </ul>
        </div>
    </div>
\t    <!--right_phone_socialDiv END-->
\t    <!-- END #header-content-wrapper -->
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7.0.23\\htdocs\\shaheducation/themes/shaheduction/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- BEGIN #header-border -->
<div id=\"header-border\">
<!-- BEGIN #header-top -->
<div id=\"header-top\" class=\"clearfix\">
    <!-- END #header-top -->
</div>
<!-- BEGIN #header-content-wrapper -->
<div id=\"header-content-wrapper\" class=\"clearfix\">
    <div id=\"logo\" class=\"site-title-image\">
        <div>
            <a class=\"logo\" href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"Shah Educational Academy\"></a>
        </div>
    </div>
    <div class=\"right_phone_socialDiv\">
        <div style=\"float: right;width:100%\">
            <ul class=\"social-icons clearfix\">
                <li><a target=\"_blank\" href=\"https://www.facebook.com/seaclass\"><span class=\"facebook-icon\"></span></a></li>
            </ul>
        </div>
        <div style=\"float: right;\">
            <ul class=\"top-right-nav clearfix\">
                <li class=\"phone-icon\"><span class=\"blue_text_b\">+91 - 9820418533 | 022 - 26051635</span></li>
            </ul>
        </div>
    </div>
\t    <!--right_phone_socialDiv END-->
\t    <!-- END #header-content-wrapper -->
</div>
</div>", "E:\\xampp7.0.23\\htdocs\\shaheducation/themes/shaheduction/partials/header.htm", "");
    }
}
