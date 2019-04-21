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

/* pagination.html.twig */
class __TwigTemplate_7d19540fe59d6073ce4ee36586c77b54b2fc9d908b924fc30bad43fdfb6eede9 extends \Twig\Template
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
        echo "<div id=\"Pagination\">
    <hr>
    ";
        // line 3
        if ((($context["page_count"] ?? null) > 1)) {
            // line 4
            echo "        ";
            if ((($context["current_page"] ?? null) != 1)) {
                // line 5
                echo "            <a href=\"/index?offset=";
                echo twig_escape_filter($this->env, ($context["offset_previous"] ?? null), "html", null, true);
                echo "\">Previous</a>
        ";
            }
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["page_number"] ?? null));
            foreach ($context['_seq'] as $context["page_no"] => $context["i"]) {
                // line 8
                echo "            ";
                if (($context["page_no"] != ($context["current_page"] ?? null))) {
                    // line 9
                    echo "                <a href=\"/index?offset=";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page_no"], "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 11
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["page_no"], "html", null, true);
                    echo "
            ";
                }
                // line 13
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['page_no'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        ";
            if ((($context["current_page"] ?? null) != ($context["page_count"] ?? null))) {
                // line 15
                echo "            <a href=\"/index?offset=";
                echo twig_escape_filter($this->env, ($context["offset_next"] ?? null), "html", null, true);
                echo "\">Next</a>
        ";
            }
            // line 17
            echo "    ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  87 => 17,  81 => 15,  78 => 14,  72 => 13,  66 => 11,  58 => 9,  55 => 8,  50 => 7,  44 => 5,  41 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pagination.html.twig", "/var/www/html/code/slimshop/templates/pagination.html.twig");
    }
}
