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

/* core/themes/olivero/templates/views/views-view-grid.html.twig */
class __TwigTemplate_f0c97201fc7fd263d9f979229a5e747c extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/layout-views-grid"), "html", null, true);
        echo "

";
        // line 30
        $context["classes"] = [0 => "views-view-grid", 1 => ("views-view-grid--" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 32
($context["options"] ?? null), "alignment", [], "any", false, false, true, 32), 32, $this->source))];
        // line 35
        echo "
";
        // line 36
        if (($context["title"] ?? null)) {
            // line 37
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 37, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 39
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 39), "setAttribute", [0 => "style", 1 => ("--views-grid--column-count: " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, true, 39), 39, $this->source))], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">
  ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 41
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 42
                echo "      <div class=\"views-view-grid__item\">
        <div class=\"views-view-grid__item-inner\">";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                // line 45
                echo "</div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/views/views-view-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 49,  85 => 48,  77 => 45,  75 => 44,  72 => 42,  67 => 41,  63 => 40,  58 => 39,  52 => 37,  50 => 36,  47 => 35,  45 => 32,  44 => 30,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for views to display rows in a grid.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapping element.
 * - title: The title of this group of rows.
 * - view: The view object.
 * - rows: The rendered view results.
 * - options: The view plugin style options.
 *   - row_class_default: A flag indicating whether default classes should be
 *     used on rows.
 *   - col_class_default: A flag indicating whether default classes should be
 *     used on columns.
 * - items: A list of grid items. Each item contains a list of rows or columns.
 *   The order in what comes first (row or column) depends on which alignment
 *   type is chosen (horizontal or vertical).
 *   - attributes: HTML attributes for each row or column.
 *   - content: A list of columns or rows. Each row or column contains:
 *     - attributes: HTML attributes for each row or column.
 *     - content: The row or column contents.
 *
 * @see template_preprocess_views_view_grid()
 */
#}
{{ attach_library('olivero/layout-views-grid') }}

{%
  set classes = [
    'views-view-grid',
    'views-view-grid--' ~ options.alignment,
  ]
%}

{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
<div{{ attributes.addClass(classes).setAttribute('style', '--views-grid--column-count: ' ~ options.columns) }}>
  {% for row in items %}
    {% for item in row.content %}
      <div class=\"views-view-grid__item\">
        <div class=\"views-view-grid__item-inner\">
          {{- item.content -}}
        </div>
      </div>
    {% endfor %}
  {% endfor %}
</div>
", "core/themes/olivero/templates/views/views-view-grid.html.twig", "C:\\xampp\\htdocs\\brg-genpio\\web\\core\\themes\\olivero\\templates\\views\\views-view-grid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 36, "for" => 40);
        static $filters = array("escape" => 27);
        static $functions = array("attach_library" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
