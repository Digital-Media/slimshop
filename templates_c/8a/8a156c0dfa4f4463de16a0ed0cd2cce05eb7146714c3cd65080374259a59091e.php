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

/* errorMessages.html.twig */
class __TwigTemplate_34f092776c0722457932fd3bf8cf5dc6a49d05a4d43e543041b5bbe07611628b extends \Twig\Template
{
    private $source;

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
        // line 1
        if (((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context)) && (twig_length_filter($this->env, ($context["errorMessages"] ?? null)) > 0))) {
            // line 2
            echo "    <div class=\"Error\">
        <ul class=\"Error-list\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorMessages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 5
                echo "                <li class=\"Error-listItem\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "errorMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  45 => 5,  41 => 4,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "errorMessages.html.twig", "/var/www/html/code/slimshop/templates/errorMessages.html.twig");
    }
}
