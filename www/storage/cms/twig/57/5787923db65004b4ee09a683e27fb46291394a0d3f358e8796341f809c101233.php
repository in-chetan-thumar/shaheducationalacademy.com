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

/* E:\xampp7.0.23\htdocs\shaheducationalacademy.com\www/plugins/mohsin/carousel/components/carousel/default.htm */
class __TwigTemplate_59fcec3474f8362027fb9ae1287a513bbf3bf1fe7d8f43ccd36aa1264dea9d4c extends \Twig\Template
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
        echo "<div id=\"carousel-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" class=\"carousel slide\" data-ride=\"carousel\">
  ";
        // line 2
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", [], "any", false, false, false, 2), "images", [], "any", false, false, false, 2)) > 1)) {
            // line 3
            echo "  <ol class=\"carousel-indicators\">
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", [], "any", false, false, false, 4), "images", [], "any", false, false, false, 4));
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
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 5
                echo "    <li data-target=\"#carousel-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
                echo "\" data-slide-to=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 5) - 1), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5)) {
                    echo " class=\"active\"";
                }
                echo "></li>
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
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </ol>
  ";
        }
        // line 9
        echo "
  ";
        // line 10
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", [], "any", false, false, false, 10), "images", [], "any", false, false, false, 10)) > 0)) {
            // line 11
            echo "  <div class=\"carousel-inner\" role=\"listbox\">
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", [], "any", false, false, false, 12), "images", [], "any", false, false, false, 12));
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
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 13
                echo "    <div class=\"item";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                    echo " active";
                }
                echo "\">
      <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 14), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 14), "html", null, true);
                echo "\">

      ";
                // line 17
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 17) || twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 17))) {
                    // line 18
                    echo "      <div class=\"carousel-caption\">

        ";
                    // line 20
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 20)) {
                        echo "<h3>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 20), "html", null, true);
                        echo "</h3>";
                    }
                    // line 21
                    echo "
        ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 22)) {
                        echo "<p>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 22), "html", null, true);
                        echo "</p>";
                    }
                    // line 23
                    echo "
      </div>
      ";
                }
                // line 26
                echo "
    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  </div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", [], "any", false, false, false, 32), "images", [], "any", false, false, false, 32)) > 1)) {
            // line 33
            echo "    <a class=\"left carousel-control\" href=\"#carousel-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
      <span class=\"icon icon-prev\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
      <span class=\"icon icon-next\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  ";
        }
        // line 42
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\xampp7.0.23\\htdocs\\shaheducationalacademy.com\\www/plugins/mohsin/carousel/components/carousel/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 42,  190 => 37,  182 => 33,  180 => 32,  177 => 31,  173 => 29,  157 => 26,  152 => 23,  146 => 22,  143 => 21,  137 => 20,  133 => 18,  130 => 17,  123 => 14,  116 => 13,  99 => 12,  96 => 11,  94 => 10,  91 => 9,  87 => 7,  64 => 5,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"carousel-{{ __SELF__.id }}\" class=\"carousel slide\" data-ride=\"carousel\">
  {% if __SELF__.carousel.images|length > 1 %}
  <ol class=\"carousel-indicators\">
  {% for i, image in __SELF__.carousel.images %}
    <li data-target=\"#carousel-{{ __SELF__.id }}\" data-slide-to=\"{{ loop.index - 1 }}\"{% if loop.first %} class=\"active\"{% endif %}></li>
  {% endfor %}
  </ol>
  {% endif %}

  {% if __SELF__.carousel.images|length > 0 %}
  <div class=\"carousel-inner\" role=\"listbox\">
    {% for i, image in __SELF__.carousel.images %}
    <div class=\"item{% if loop.first %} active{% endif %}\">
      <img src=\"{{ image.path }}\" alt=\"{{ image.title }}\">

      {# Show caption only if there is image title or description #}
      {% if image.title or image.description %}
      <div class=\"carousel-caption\">

        {% if image.title %}<h3>{{ image.title }}</h3>{% endif %}

        {% if image.description %}<p>{{ image.description }}</p>{% endif %}

      </div>
      {% endif %}

    </div>
    {% endfor %}
  </div>
  {% endif %}

  {% if __SELF__.carousel.images|length > 1 %}
    <a class=\"left carousel-control\" href=\"#carousel-{{ __SELF__.id }}\" role=\"button\" data-slide=\"prev\">
      <span class=\"icon icon-prev\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-{{ __SELF__.id }}\" role=\"button\" data-slide=\"next\">
      <span class=\"icon icon-next\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  {% endif %}
</div>
", "E:\\xampp7.0.23\\htdocs\\shaheducationalacademy.com\\www/plugins/mohsin/carousel/components/carousel/default.htm", "");
    }
}
