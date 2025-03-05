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

/* themes/custom/templates/node/node--contact.html.twig */
class __TwigTemplate_c56439a74b9c97a64d9c0fd62dbb27bf extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("piotheme/global-styling"), "html", null, true);
        echo "

<section id=\"\" class=\"contact-us common_bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"row contact-block\">
                <div class=\"col-md-6 contact-left pe-lg-5\">
                    <h3 class=\"mb-sm-4 mb-3\">Contact Info</h3>
                    <p class=\"cont-para mb-sm-5 mb-4\">
                        ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_body", [], "any", false, false, true, 10), 10, $this->source));
        echo "
                    </p>

                    <div class=\"cont-details\">
                        <div class=\"contact-item\"><i class=\"fas fa-map-marker-alt\"></i>
                        <span class=\"field\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 15), 15, $this->source), "label"));
        echo "</span></div>
                        <br>
                        <div class=\"contact-item\"><i class=\"fas fa-phone-alt\"></i>
                        <span class=\"field\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_telephone", [], "any", false, false, true, 18), 18, $this->source), "label"));
        echo "</span></div>
                        <br>
                        <div class=\"contact-item\"><i class=\"fas fa-envelope-open-text\"></i>
                        <span class=\"field\"><a href=\"mailto:";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 21), 0, [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "\" class=\"mail\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_email", [], "any", false, false, true, 21), 21, $this->source));
        echo "</a></span></div>
                    </div>
                </div>

                <div class=\"col-md-6 contact-right mt-md-0 mt-5 ps-lg-0 ContactPageForm\">
                    <form action=\"/contact\" class='signin-form' method=\"post\" accept-charset=\"utf-8\">
                        <div class=\"form-floating mb-3\">
                            <input type=\"text\" class=\"form-control\" id=\"floatingInput\" required name=\"contact_name\">
                            <label for=\"floatingInput\">Your Name</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input type=\"email\" class=\"form-control\" id=\"floatingInput\" required name=\"contact_email\">
                            <label for=\"floatingInput\">Your Email address</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <input type=\"text\" class=\"form-control\" id=\"floatingInput\" required name=\"contact_subject\">
                            <label for=\"floatingInput\">Subject</label>
                        </div>
                        <div class=\"form-floating mb-3\">
                            <textarea class=\"form-control\" id=\"floatingTextarea2\" style=\"height: 100px\" required name=\"contact_message\"></textarea>
                            <label for=\"floatingTextarea2\">Type your message here</label>
                        </div>
                        <button class=\"btn btn-info\" name=\"contact_submit\" value=\"Send Message\" type=\"submit\">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/templates/node/node--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  65 => 18,  59 => 15,  51 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/templates/node/node--contact.html.twig", "C:\\xampp\\htdocs\\genpio_v2\\web\\themes\\custom\\templates\\node\\node--contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "raw" => 10, "without" => 15);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw', 'without'],
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
