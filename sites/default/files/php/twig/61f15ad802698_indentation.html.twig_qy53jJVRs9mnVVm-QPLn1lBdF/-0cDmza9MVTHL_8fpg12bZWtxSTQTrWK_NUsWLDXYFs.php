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

/* core/modules/system/templates/indentation.html.twig */
class __TwigTemplate_6073e3f134d5831bbf73ad19dd23a59c2f33383622bcb55d9b406b58bb67f500 extends \Twig\Template
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
        // line 14
        if ((($context["size"] ?? null) > 0)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["size"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "<div class=\"js-indentation indentation\">&nbsp;</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/indentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/system/templates/indentation.html.twig", "/home/u416003245/domains/abiyproject1.xyz/public_html/project3/core/modules/system/templates/indentation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "for" => 14);
        static $filters = array();
        static $functions = array("range" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                [],
                ['range']
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
