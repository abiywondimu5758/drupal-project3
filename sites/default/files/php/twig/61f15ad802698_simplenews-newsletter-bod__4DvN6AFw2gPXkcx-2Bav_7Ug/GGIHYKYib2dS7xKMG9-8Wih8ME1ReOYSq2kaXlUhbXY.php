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

/* modules/simplenews/templates/simplenews-newsletter-body.html.twig */
class __TwigTemplate_28321c1c8ac720301f20f47ef48d0a1d7879092c77a4b36196aebbe1d30050a2 extends \Twig\Template
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
        // line 41
        echo "
<h2>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 42, $this->source), "html", null, true);
        echo "</h2>
";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["build"] ?? null), 43, $this->source), "html", null, true);
        echo "

";
        // line 45
        if ( !($context["opt_out_hidden"] ?? null)) {
            // line 46
            echo "    ";
            if ((($context["format"] ?? null) == "html")) {
                // line 47
                echo "        <p class=\"newsletter-footer\"><a
                    href=\"[simplenews-subscriber:unsubscribe-url]\">";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unsubscribe_text"] ?? null), 48, $this->source), "html", null, true);
                echo "</a>
        </p>
    ";
            } else {
                // line 51
                echo "        -- ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unsubscribe_text"] ?? null), 51, $this->source), "html", null, true);
                echo " : [simplenews-subscriber:unsubscribe-url]
    ";
            }
        }
        // line 54
        echo "
";
        // line 55
        if ((($context["key"] ?? null) == "test")) {
            // line 56
            echo "    - - - ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["test_message"] ?? null), 56, $this->source), "html", null, true);
            echo " - - -
";
        }
    }

    public function getTemplateName()
    {
        return "modules/simplenews/templates/simplenews-newsletter-body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 56,  75 => 55,  72 => 54,  65 => 51,  59 => 48,  56 => 47,  53 => 46,  51 => 45,  46 => 43,  42 => 42,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/simplenews/templates/simplenews-newsletter-body.html.twig", "/home/u416003245/domains/abiyproject1.xyz/public_html/project3/modules/simplenews/templates/simplenews-newsletter-body.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 45);
        static $filters = array("escape" => 42);
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
