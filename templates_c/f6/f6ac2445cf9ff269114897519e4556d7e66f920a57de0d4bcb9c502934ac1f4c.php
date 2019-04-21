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

/* redisdemoMain.html.twig */
class __TwigTemplate_ab11f562ef9939f4ff0faba16fe34dfeffdf27ba453b081db8cd2899e4543f86 extends \Twig\Template
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
        $this->loadTemplate("header.html.twig", "redisdemoMain.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("navigation.html.twig", "redisdemoMain.html.twig", 2)->display($context);
        // line 3
        echo "<main class=\"Site-content\">
    <section class=\"Section\">
        <div class=\"Container\">
            <div id=\"messages\">
                ";
        // line 7
        $this->loadTemplate("errorMessages.html.twig", "redisdemoMain.html.twig", 7)->display($context);
        // line 8
        echo "                ";
        $this->loadTemplate("statusMessage.html.twig", "redisdemoMain.html.twig", 8)->display($context);
        // line 9
        echo "            </div>
            <form action=\"/redisdemo\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redis_key"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\" class=\"InputCombo-label\">Redis Key</label>
                    <input type=\"search\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redis_key"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redis_key"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redis_key"] ?? null), "getValue", [], "method"), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                    <button type=\"submit\" class=\"Button\">Add</button>
                </div>
            </form>
            <br>
            <h2 class=\"Section-heading\">List of Redis Entries</h2>
            <div class=\"InputCombo Grid-full\">
                ";
        // line 20
        $this->loadTemplate("tablestyles.html.twig", "redisdemoMain.html.twig", 20)->display($context);
        // line 21
        echo "                <table>
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                    ";
        // line 26
        if ((isset($context["pageArray"]) || array_key_exists("pageArray", $context))) {
            // line 27
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageArray"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 28
                echo "                            <tr>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td>
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                    ";
        } else {
            // line 34
            echo "                        <tr>
                            <td> No Entries found in Redis </td>
                            <td>&nbsp;</td>
                        </tr>
                    ";
        }
        // line 39
        echo "                </table>
            </div>
        </div>
    </section>
</main>
<!--<script src=\"../src/Exercises/js/index.js\"></script>-->
";
        // line 45
        $this->loadTemplate("footer.html.twig", "redisdemoMain.html.twig", 45)->display($context);
    }

    public function getTemplateName()
    {
        return "redisdemoMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  115 => 39,  108 => 34,  105 => 33,  96 => 30,  92 => 29,  89 => 28,  84 => 27,  82 => 26,  75 => 21,  73 => 20,  59 => 13,  55 => 12,  50 => 9,  47 => 8,  45 => 7,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "redisdemoMain.html.twig", "/var/www/html/code/slimshop/templates/redisdemoMain.html.twig");
    }
}
