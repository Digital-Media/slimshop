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

/* indexMain.html.twig */
class __TwigTemplate_1de4170f6cc1705beae5f245ce31e2301b7e6cb530ab977cc6bdea33dba55311 extends \Twig\Template
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
        $this->loadTemplate("header.html.twig", "indexMain.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("navigation.html.twig", "indexMain.html.twig", 2)->display($context);
        // line 3
        echo "<main class=\"Site-content\">
    <section class=\"Section\">
        <div class=\"Container\">
            <div id=\"messages\">
                ";
        // line 7
        $this->loadTemplate("errorMessages.html.twig", "indexMain.html.twig", 7)->display($context);
        // line 8
        echo "                ";
        $this->loadTemplate("statusMessage.html.twig", "indexMain.html.twig", 8)->display($context);
        // line 9
        echo "            </div>
            <form action=\"/oldsearch\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"search\" class=\"InputCombo-label\">Search:</label>
                    <input type=\"search\" id=\"search\" name=\"search\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["search"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                    <button type=\"submit\" class=\"Button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                </div>
            </form>
            <br>
            <h2 class=\"Section-heading\">List of Products</h2>
            <div class=\"InputCombo Grid-full\">
                <form action=\"/buy\" method=\"post\"  enctype=\"multipart/form-data\" id=\"indexform\">
                    ";
        // line 21
        $this->loadTemplate("tablestyles.html.twig", "indexMain.html.twig", 21)->display($context);
        // line 22
        echo "                    <table>
                        <tr>
                            <th><a href=\"/sort/pid\">PID</a></th>
                            <th><a href=\"/sort/pname\">Product_name</a></th>
                            <th><a href=\"/sort/price\">Price</a></th>
                            <th>&nbsp;</th>
                        </tr>
                        ";
        // line 29
        if ((isset($context["pageArray"]) || array_key_exists("pageArray", $context))) {
            // line 30
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageArray"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 31
                echo "                                <tr>
                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["pageArray"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["idproduct"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td>";
                // line 33
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["pageArray"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["key"]] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["product_name"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td>";
                // line 34
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["pageArray"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["key"]] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["price"] ?? null) : null), "html", null, true);
                echo "</td>
                                    <td><button id=\"";
                // line 35
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["pageArray"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["key"]] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["idproduct"] ?? null) : null), "html", null, true);
                echo "\" name=\"pid[";
                echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["pageArray"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[$context["key"]] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["idproduct"] ?? null) : null), "html", null, true);
                echo "]\" type=\"submit\" class=\"addtocart\"><i class=\"fa fa-cart-plus\" aria-hidden=\"true\">&nbsp;Add To Cart</i></button></td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                        ";
        } else {
            // line 39
            echo "                            <tr>
                                <td> No products found in search </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        ";
        }
        // line 46
        echo "                    </table>
                    ";
        // line 47
        $this->loadTemplate("pagination.html.twig", "indexMain.html.twig", 47)->display($context);
        // line 48
        echo "                </form>
            </div>
        </div>
    </section>
</main>
<!--<script src=\"../src/Exercises/js/index.js\"></script>-->
";
        // line 54
        $this->loadTemplate("footer.html.twig", "indexMain.html.twig", 54)->display($context);
    }

    public function getTemplateName()
    {
        return "indexMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 54,  128 => 48,  126 => 47,  123 => 46,  114 => 39,  111 => 38,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  85 => 31,  80 => 30,  78 => 29,  69 => 22,  67 => 21,  56 => 13,  50 => 9,  47 => 8,  45 => 7,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "indexMain.html.twig", "/var/www/html/code/slimshop/templates/indexMain.html.twig");
    }
}
