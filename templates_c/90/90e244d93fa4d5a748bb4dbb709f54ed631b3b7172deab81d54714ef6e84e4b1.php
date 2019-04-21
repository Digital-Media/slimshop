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

/* searchMain.html.twig */
class __TwigTemplate_7fe9ef4d909f06e0c5483b6ea75df6fdde999f85d4cc49d7a0c3038ed8868819 extends \Twig\Template
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
        $this->loadTemplate("header.html.twig", "searchMain.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("navigation.html.twig", "searchMain.html.twig", 2)->display($context);
        // line 3
        echo "<main class=\"Site-content\">
    <section class=\"Section\">
        <div class=\"Container\">
            <div id=\"messages\">
                ";
        // line 7
        $this->loadTemplate("errorMessages.html.twig", "searchMain.html.twig", 7)->display($context);
        // line 8
        echo "                ";
        $this->loadTemplate("statusMessage.html.twig", "searchMain.html.twig", 8)->display($context);
        // line 9
        echo "            </div>
            <form action=\"/search\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\" class=\"InputCombo-label\">Search:</label>
                    <input type=\"search\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["search"] ?? null), "getValue", [], "method"), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                    <button type=\"submit\" class=\"Button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                </div>
            </form>
            <br>
            <h2 class=\"Section-heading\">List of Products</h2>
            <div class=\"InputCombo Grid-full\">
               <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_server"] ?? null), "SCRIPT_NAME", []), "html", null, true);
        echo "\" method=\"post\"  enctype=\"multipart/form-data\" id=\"indexform\">
                    ";
        // line 21
        $this->loadTemplate("tablestyles.html.twig", "searchMain.html.twig", 21)->display($context);
        // line 22
        echo "                    <table>
                        <tr>
                            <th>PID</th>
                            <th>Product_name</th>
                            <th>Price</th>
                        </tr>
                        ";
        // line 28
        if ((isset($context["pageArray"]) || array_key_exists("pageArray", $context))) {
            // line 29
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageArray"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 30
                echo "                                <tr>
                                    <td>";
                // line 31
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["pageArray"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["idproduct"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["pageArray"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["key"]] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["product_name"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td>";
                // line 33
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["pageArray"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["key"]] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["price"] ?? null) : null), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                            <input type=\"hidden\" name=\"start\" value=\"";
            echo twig_escape_filter($this->env, ($context["startValue"] ?? null), "html", null, true);
            echo "\" class=\"InputCombo-field\">
                        ";
            // line 37
            if ((($context["startValue"] ?? null) != 0)) {
                echo "<button type=\"submit\" class=\"Button\" name=\"previous\" value=\"";
                echo twig_escape_filter($this->env, ($context["storeSearch"] ?? null), "html", null, true);
                echo "\"><i class=\"fas fa-backward\"></i></button>";
            }
            // line 38
            echo "                        ";
            if (((($context["startValue"] ?? null) + 2) < ($context["totalValue"] ?? null))) {
                echo "    <button type=\"submit\" class=\"Button\" name=\"next\" value=\"";
                echo twig_escape_filter($this->env, ($context["storeSearch"] ?? null), "html", null, true);
                echo "\"><i class=\"fas fa-forward\"></i></button>";
            }
            // line 39
            echo "                        ";
        } else {
            // line 40
            echo "                            <tr>
                                <td> No products found in search </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        ";
        }
        // line 47
        echo "                    </table>
                </form>
             </div>
        </div>
    </section>
</main>
<!--script src=\"../src/Exercises/js/search.js\"></script>-->
";
        // line 54
        $this->loadTemplate("footer.html.twig", "searchMain.html.twig", 54)->display($context);
    }

    public function getTemplateName()
    {
        return "searchMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 54,  144 => 47,  135 => 40,  132 => 39,  125 => 38,  119 => 37,  114 => 36,  105 => 33,  101 => 32,  97 => 31,  94 => 30,  89 => 29,  87 => 28,  79 => 22,  77 => 21,  73 => 20,  59 => 13,  55 => 12,  50 => 9,  47 => 8,  45 => 7,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "searchMain.html.twig", "/var/www/html/code/slimshop/templates/searchMain.html.twig");
    }
}
