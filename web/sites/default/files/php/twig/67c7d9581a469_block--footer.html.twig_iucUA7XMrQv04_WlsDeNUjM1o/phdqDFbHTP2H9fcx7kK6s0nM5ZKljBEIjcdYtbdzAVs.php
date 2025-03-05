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
class __TwigTemplate_fe3f884298c533823a4e8b41656069e8 extends Template
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
                <span class=\"wide-image\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_media_logo", [], "any", false, false, true, 11), 11, $this->source), "label"));
        echo "</span>
                <span class=\"field\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_media", [], "any", false, false, true, 12), 12, $this->source), "label"));
        echo "</span>
              </li>
              <li class=\"list-group-item\">
                <span class=\"wide-image\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_media_logo_2", [], "any", false, false, true, 15), 15, $this->source), "label"));
        echo "</span>
                <span class=\"field\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_social_media_link_2", [], "any", false, false, true, 16), 16, $this->source), "label"));
        echo "</span>
              </li>
            </ul>
          </div>

          <div class=\"col-md-6\">
            <h5>MAIN OFFICE</h5>
            <ul class=\"list-group\">
              <li class=\"list-group-item\">
                <span class=\"label\">Address:</span>
                <span class=\"field field--name-field-address field--type-string field--label-hidden field__item\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 26), 26, $this->source), "label"));
        echo "</span>
              </li>
              <li class=\"list-group-item\">
                <span class=\"label\">Email:</span>
                <span class=\"field field--name-field-email field--type-string field--label-hidden field__item\">";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 30), 30, $this->source), "label"));
        echo "</span>
              </li>
              <li class=\"list-group-item\">
                <span class=\"label\">Tel. No.:</span>
                <span class=\"field field--name-field-telephone field--type-string field--label-hidden field__item\">";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_telephone", [], "any", false, false, true, 34), 34, $this->source), "label"));
        echo "</span>
              </li>
            </ul>
          </div>

          <div class=\"col-12\">
            ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gmap", [], "any", false, true, true, 40), "#markup", [], "array", true, true, true, 40)) {
            // line 41
            echo "              <iframe class=\"gmap_iframe\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gmap", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\"></iframe>
            ";
        } else {
            // line 43
            echo "              <iframe class=\"gmap_iframe\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_gmap", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "\"></iframe>
            ";
        }
        // line 45
        echo "          </div>
        </div>

        <hr>
        <div class=\"text-center\">
          <div class=\"footer-logos\">
            <img src=\"";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 51, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 51, $this->source)), "html", null, true);
        echo "/images/makati_logo.png\" width=\"75px\" alt=\"Makati Logo\">
            <img src=\"";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 52, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 52, $this->source)), "html", null, true);
        echo "/images/pdp_logo.png\" width=\"75px\" alt=\"PDP Logo\">
            <img src=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 53, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 53, $this->source)), "html", null, true);
        echo "/images/sk_pdp_logo.png\" width=\"75px\" alt=\"SK PDP Logo\">
          </div>
          <p>Copyright © ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " BARANGAY PIO DEL PILAR</p>
        </div>
      </div>
    </div>
  </div>
</section>";
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
        return array (  136 => 55,  131 => 53,  127 => 52,  123 => 51,  115 => 45,  109 => 43,  103 => 41,  101 => 40,  92 => 34,  85 => 30,  78 => 26,  65 => 16,  61 => 15,  55 => 12,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/templates/block/block--footer.html.twig", "C:\\xampp\\htdocs\\genpio_v2\\web\\themes\\custom\\templates\\block\\block--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40);
        static $filters = array("raw" => 11, "without" => 11, "escape" => 41, "date" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'without', 'escape', 'date'],
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
