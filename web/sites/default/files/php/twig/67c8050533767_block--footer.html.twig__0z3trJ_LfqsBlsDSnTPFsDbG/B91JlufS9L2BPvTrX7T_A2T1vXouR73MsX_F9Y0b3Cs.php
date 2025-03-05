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

/* themes/custom/templates/block/block--footer.html.twig */
class __TwigTemplate_24c896c7dd7d6450908865823ceba0a8 extends Template
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
        echo "<section id=\"\" class=\"footer-section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"mb-5 text-center\">Get in Touch</h2>
        <div class=\"row\">
          <div class=\"col-md-6\">
            <h5>SOCIAL MEDIA SITES</h5>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item\">
                ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_media", [], "any", false, false, true, 11), 11, $this->source), "label"), "html", null, true);
        echo "
                ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_media_logo", [], "any", false, false, true, 12), 12, $this->source), "label"), "html", null, true);
        echo "
              </li>
              <li class=\"list-group-item\">
                ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_media_link_2", [], "any", false, false, true, 15), 15, $this->source), "label"), "html", null, true);
        echo "
                ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_media_logo_2", [], "any", false, false, true, 16), 16, $this->source), "label"), "html", null, true);
        echo "
              </li>
            </ul>
          </div>

          <div class=\"col-md-6\">
            <h5>MAIN OFFICE</h5>
            <ul class=\"list-group\">
              <li class=\"list-group-item\">Address: ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 24), 24, $this->source), "label"), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\">Email: ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 25), 25, $this->source), "label"), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\">Tel. No.: ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_telephone", [], "any", false, false, true, 26), 26, $this->source), "label"), "html", null, true);
        echo "</li>
            </ul>
          </div>

          <div class=\"col-12\">
            ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gmap", [], "any", false, true, true, 31), "#markup", [], "array", true, true, true, 31)) {
            // line 32
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gmap", [], "any", false, false, true, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null), 32, $this->source));
            echo "
            ";
        } else {
            // line 34
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gmap", [], "any", false, false, true, 34), 34, $this->source), "label"));
            echo "
            ";
        }
        // line 36
        echo "          </div>
        </div>

        <hr>
        <div class=\"text-center\">
          ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_footer_logos", [], "any", false, false, true, 41), 41, $this->source), "label"));
        echo "
          <p>Copyright © ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " BARANGAY PIO DEL PILAR</p>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/templates/block/block--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  113 => 41,  106 => 36,  100 => 34,  94 => 32,  92 => 31,  84 => 26,  80 => 25,  76 => 24,  65 => 16,  61 => 15,  55 => 12,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"\" class=\"footer-section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"mb-5 text-center\">Get in Touch</h2>
        <div class=\"row\">
          <div class=\"col-md-6\">
            <h5>SOCIAL MEDIA SITES</h5>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item\">
                {{ content.field_social_media|without('label') }}
                {{ content.field_social_media_logo|without('label') }}
              </li>
              <li class=\"list-group-item\">
                {{ content.field_social_media_link_2|without('label') }}
                {{ content.field_social_media_logo_2|without('label') }}
              </li>
            </ul>
          </div>

          <div class=\"col-md-6\">
            <h5>MAIN OFFICE</h5>
            <ul class=\"list-group\">
              <li class=\"list-group-item\">Address: {{ content.field_address|without('label') }}</li>
              <li class=\"list-group-item\">Email: {{ content.field_email|without('label') }}</li>
              <li class=\"list-group-item\">Tel. No.: {{ content.field_telephone|without('label') }}</li>
            </ul>
          </div>

          <div class=\"col-12\">
            {% if content.field_gmap['#markup'] is defined %}
              {{ content.field_gmap['#markup']|raw }}
            {% else %}
              {{ content.field_gmap|without('label')|raw }}
            {% endif %}
          </div>
        </div>

        <hr>
        <div class=\"text-center\">
          {{ content.field_footer_logos|without('label')|raw }}
          <p>Copyright © {{ \"now\"|date(\"Y\") }} BARANGAY PIO DEL PILAR</p>
        </div>
      </div>
    </div>
  </div>
</section>
", "themes/custom/templates/block/block--footer.html.twig", "C:\\xampp\\htdocs\\brg-genpio\\web\\themes\\custom\\templates\\block\\block--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31);
        static $filters = array("escape" => 11, "without" => 11, "raw" => 32, "date" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 'raw', 'date'],
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
