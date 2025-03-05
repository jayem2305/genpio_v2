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

/* themes/custom/page.html.twig */
class __TwigTemplate_010a2e13e8f583a251aee48c0a010320 extends Template
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
        // line 1
        echo "<div class=\"main print_hide\">
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 2)) {
            // line 3
            echo "  <header id=\"header\" class=\"header\">
    ";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "
  </header>
";
        }
        // line 7
        echo "
";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 8)) {
            // line 9
            echo "<div class=\"nav-ct\">
  <div id=\"navigation\" class=\"navbar\">
      ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
  </div>
</div>
";
        }
        // line 15
        echo "
";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 16)) {
            // line 17
            echo "  <div id=\"slider\" class=\"region-slider\">
    ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 21
        echo "
";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 22)) {
            // line 23
            echo "  <main id=\"content\">
    ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
  </main>
";
        }
        // line 27
        echo "
";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 28)) {
            // line 29
            echo "  <footer id=\"footer\">
    ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "
  </footer>
";
        }
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  105 => 30,  102 => 29,  100 => 28,  97 => 27,  91 => 24,  88 => 23,  86 => 22,  83 => 21,  77 => 18,  74 => 17,  72 => 16,  69 => 15,  62 => 11,  58 => 9,  56 => 8,  53 => 7,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main print_hide\">
{% if page.header %}
  <header id=\"header\" class=\"header\">
    {{ page.header }}
  </header>
{% endif %}

{% if page.navigation %}
<div class=\"nav-ct\">
  <div id=\"navigation\" class=\"navbar\">
      {{ page.navigation }}
  </div>
</div>
{% endif %}

{% if page.slider %}
  <div id=\"slider\" class=\"region-slider\">
    {{ page.slider }}
  </div>
{% endif %}

{% if page.content %}
  <main id=\"content\">
    {{ page.content }}
  </main>
{% endif %}

{% if page.footer %}
  <footer id=\"footer\">
    {{ page.footer }}
  </footer>
{% endif %}
</div>
", "themes/custom/page.html.twig", "C:\\xampp\\htdocs\\brg-genpio\\web\\themes\\custom\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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
