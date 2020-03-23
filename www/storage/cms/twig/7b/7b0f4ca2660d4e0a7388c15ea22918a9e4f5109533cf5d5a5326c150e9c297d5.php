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

/* E:\xampp7.0.23\htdocs\shaheducationalacademy.com\www/themes/shaheduction/partials/marquee.htm */
class __TwigTemplate_f214befd9ef07a7606ab6da1b6765cec3f681dd619d2faa2d3f662d8f2c7e807 extends \Twig\Template
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
        echo "<div style='padding:3px;' class='ptms_marquee'><marquee style='color:#FFF;font:Arial;' scrollamount='2' scrolldelay='8' direction='left' onmouseover='this.stop()' onmouseout='this.start()'>
    \t<a href='http://www.shaheducationalacademy.com/undergraduate-courses/'>Undergraduate Courses</a> - 
    \t<a href='http://www.shaheducationalacademy.com/environment/'>Graduation Courses</a> - 
    \t<a href='http://www.shaheducationalacademy.com/professional-courses/'>Professional Courses</a></marquee></div> 
\t
\t<div class=\"header-block-wrapper clearfix\">
    <div class=\"abs_position_div\">
\t\t<div class=\"header-block-inner\">
\t\t\t<!-- <a href=\"http://shaheducationalacademy.tiez.net/?page_id=553\" class=\"header-block-5 header-block-style-1 clearfix\" style=\"background: #df0e1b\"><span class=\"horizontal_span\"><img src=\"http://shaheducationalacademy.tiez.net/wp-content/uploads/2014/09/header_icon_01.png\" alt=\"\" /><span>Why SEA ?</span></span></a> -->
\t\t\t<!-- <a href=\"http://shaheducationalacademy.tiez.net/?page_id=373\" class=\"header-block-5 header-block-style-1 clearfix\" style=\"background: #df0e1b\"><span class=\"horizontal_span\"><img src=\"http://shaheducationalacademy.tiez.net/wp-content/uploads/2014/09/header_icon_02.png\" alt=\"\" /><span>Our Team</span></span></a> -->
\t\t\t<!-- <a href=\"http://shaheducationalacademy.tiez.net/?page_id=329\" class=\"header-block-5 header-block-style-1 clearfix\" style=\"background: #df0e1b\"><span class=\"horizontal_span\"><img src=\"http://shaheducationalacademy.tiez.net/wp-content/uploads/2014/09/header_icon_03.png\" alt=\"\" /><span>Graduation Courses</span></span></a><a href=\"http://shaheducationalacademy.tiez.net/?page_id=331\" class=\"header-block-5 header-block-style-1 clearfix\" style=\"background: #df0e1b\"><span class=\"horizontal_span\"><img src=\"http://shaheducationalacademy.tiez.net/wp-content/uploads/2014/09/header_icon_04.png\" alt=\"\" /><span> Professional Courses</span></span></a><a href=\"http://shaheducationalacademy.tiez.net/?page_id=333\" class=\"header-block-5 header-block-style-1 clearfix\" style=\"background: #df0e1b\"><span class=\"horizontal_span\"><img src=\"http://shaheducationalacademy.tiez.net/wp-content/uploads/2014/09/header_icon_05.png\" alt=\"\" /><span>Entrance Preparation</span></span></a>\t -->\t
\t\t</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7.0.23\\htdocs\\shaheducationalacademy.com\\www/themes/shaheduction/partials/marquee.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style='padding:3px;' class='ptms_marquee'><marquee style='color:#FFF;font:Arial;' scrollamount='2' scrolldelay='8' direction='left' onmouseover='this.stop()' onmouseout='this.start()'>
    \t<a href='http://www.shaheducationalacademy.com/undergraduate-courses/'>Undergraduate Courses</a> - 
    \t<a href='http://www.shaheducationalacademy.com/environment/'>Graduation Courses</a> - 
    \t<a href='http://www.shaheducationalacademy.com/professional-courses/'>Professional Courses</a></marquee></div> 
\t
\t<div class=\"header-block-wrapper clearfix\">
    <div class=\"abs_position_div\">
\t\t<div class=\"header-block-inner\">
\t\t\t<!-- <a href=\"http://shaheducationalacademy.tiez.net/?page_id=553\" class=\"header-block-5 header-block-style-1 clearfix\" style=\"background: #df0e1b\"><span class=\"horizontal_span\"><img src=\"http://shaheducationalacademy.tiez.net/wp-content/uploads/2014/09/header_icon_01.png\" alt=\"\" /><span>Why SEA ?</span></span></a> -->
\t\t\t<!-- <a href=\"http://shaheducationalacademy.tiez.net/?page_id=373\" class=\"header-block-5 header-block-style-1 clearfix\" style=\"background: #df0e1b\"><span class=\"horizontal_span\"><img src=\"http://shaheducationalacademy.tiez.net/wp-content/uploads/2014/09/header_icon_02.png\" alt=\"\" /><span>Our Team</span></span></a> -->
\t\t\t<!-- <a href=\"http://shaheducationalacademy.tiez.net/?page_id=329\" class=\"header-block-5 header-block-style-1 clearfix\" style=\"background: #df0e1b\"><span class=\"horizontal_span\"><img src=\"http://shaheducationalacademy.tiez.net/wp-content/uploads/2014/09/header_icon_03.png\" alt=\"\" /><span>Graduation Courses</span></span></a><a href=\"http://shaheducationalacademy.tiez.net/?page_id=331\" class=\"header-block-5 header-block-style-1 clearfix\" style=\"background: #df0e1b\"><span class=\"horizontal_span\"><img src=\"http://shaheducationalacademy.tiez.net/wp-content/uploads/2014/09/header_icon_04.png\" alt=\"\" /><span> Professional Courses</span></span></a><a href=\"http://shaheducationalacademy.tiez.net/?page_id=333\" class=\"header-block-5 header-block-style-1 clearfix\" style=\"background: #df0e1b\"><span class=\"horizontal_span\"><img src=\"http://shaheducationalacademy.tiez.net/wp-content/uploads/2014/09/header_icon_05.png\" alt=\"\" /><span>Entrance Preparation</span></span></a>\t -->\t
\t\t</div>
    </div>
</div>", "E:\\xampp7.0.23\\htdocs\\shaheducationalacademy.com\\www/themes/shaheduction/partials/marquee.htm", "");
    }
}
