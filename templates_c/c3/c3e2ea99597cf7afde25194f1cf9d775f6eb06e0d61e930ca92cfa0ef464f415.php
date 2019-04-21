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

/* esearchdemoMain.html.twig */
class __TwigTemplate_1a58d42669b49e49a9d21819b8f5c9217543ea5d267f01c542cbb96edbf05733 extends \Twig\Template
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
        $this->loadTemplate("header.html.twig", "esearchdemoMain.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("navigation.html.twig", "esearchdemoMain.html.twig", 2)->display($context);
        // line 3
        echo "<main class=\"Site-content\">
    <section class=\"Section\">
        <div class=\"Container\">
            <div id=\"messages\">
                ";
        // line 7
        $this->loadTemplate("errorMessages.html.twig", "esearchdemoMain.html.twig", 7)->display($context);
        // line 8
        echo "                ";
        $this->loadTemplate("statusMessage.html.twig", "esearchdemoMain.html.twig", 8)->display($context);
        // line 9
        echo "            </div>
            <form action=\"/view_all\" method=\"post\" enctype=\"multipart/form-data\">
                    <button type=\"submit\" name=\"all\" class=\"Button\">View All</button>
            </form>
            <form action=\"/like\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"like\" class=\"InputCombo-label\">LIKE:</label>
                    <input type=\"search\" id=\"like\" name=\"like\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["like"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                    <button type=\"submit\" class=\"Button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                </div>
            </form>
            <form action=\"/match\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"match\" class=\"InputCombo-label\">MATCH:</label>
                    <input type=\"search\" id=\"match\" name=\"match\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["match"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                    <button type=\"submit\" class=\"Button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                </div>
            </form>
            <form action=\"/copy_to\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"copy_to\" class=\"InputCombo-label\">COPY_TO:</label>
                    <input type=\"search\" id=\"copy_to\" name=\"copy_to\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["copy_to"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                    <button type=\"submit\" class=\"Button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                </div>
            </form>
            <form action=\"/no_cursor\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"no_cursor\" class=\"InputCombo-label\">NO_CURSOR:</label>
                    <input type=\"search\" id=\"no_cursor\" name=\"no_cursor\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["no_cursor"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                    <button type=\"submit\" class=\"Button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                </div>
            </form>
            <form action=\"/paging\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"paging\" class=\"InputCombo-label\">PAGING:</label>
                    <input type=\"search\" id=\"paging\" name=\"paging\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["paging"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                    <button type=\"submit\" class=\"Button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                </div>
            </form>
            <br>
            <h2 class=\"Section-heading\">List of Products</h2>
            <div class=\"InputCombo Grid-full\">
                    ";
        // line 51
        $this->loadTemplate("tablestyles.html.twig", "esearchdemoMain.html.twig", 51)->display($context);
        // line 52
        echo "                    <table>
                        <tr>
                            <th>PID</th>
                            <th>Product_name</th>
                            <th>Price</th>
                        </tr>
                        ";
        // line 58
        if ((isset($context["pageArray"]) || array_key_exists("pageArray", $context))) {
            // line 59
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageArray"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 60
                echo "                                <tr>
                                    <td>";
                // line 61
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["pageArray"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["idproduct"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td>";
                // line 62
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["pageArray"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["key"]] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["product_name"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td>";
                // line 63
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["pageArray"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["key"]] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["price"] ?? null) : null), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                        ";
        } else {
            // line 67
            echo "                            <tr>
                                <td> No products found in search </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        ";
        }
        // line 74
        echo "                    </table>
             </div>
        </div>
    </section>
</main>
<!--script src=\"../src/Exercises/js/search.js\"></script>-->
";
        // line 80
        $this->loadTemplate("footer.html.twig", "esearchdemoMain.html.twig", 80)->display($context);
    }

    public function getTemplateName()
    {
        return "esearchdemoMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 80,  158 => 74,  149 => 67,  146 => 66,  137 => 63,  133 => 62,  129 => 61,  126 => 60,  121 => 59,  119 => 58,  111 => 52,  109 => 51,  99 => 44,  89 => 37,  79 => 30,  69 => 23,  59 => 16,  50 => 9,  47 => 8,  45 => 7,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esearchdemoMain.html.twig", "/var/www/html/code/slimshop/templates/esearchdemoMain.html.twig");
    }
}
