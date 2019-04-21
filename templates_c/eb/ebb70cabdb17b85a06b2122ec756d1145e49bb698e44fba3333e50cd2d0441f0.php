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

/* dbdemoMain.html.twig */
class __TwigTemplate_414fb44ef125e70f1069b2072db9ded0a6a150840dcb3454efbc946a5059ed6b extends \Twig\Template
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
        $this->loadTemplate("header.html.twig", "dbdemoMain.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("navigation.html.twig", "dbdemoMain.html.twig", 2)->display($context);
        // line 3
        echo "<main class=\"Site-content\">
    <section class=\"Section\">
        <div class=\"Container\">
                 <div id=\"messages\">
                    ";
        // line 7
        $this->loadTemplate("errorMessages.html.twig", "dbdemoMain.html.twig", 7)->display($context);
        // line 8
        echo "                    ";
        $this->loadTemplate("statusMessage.html.twig", "dbdemoMain.html.twig", 8)->display($context);
        // line 9
        echo "                </div>
                <form action=\"/dbdemo\" method=\"post\" enctype=\"multipart/form-data\" id=\"dbdemoform\">
                    <div class=\"InputCombo Grid-full\">
                        <label for=\"ptype\" class=\"InputCombo-label\">Product Category:</label>
                        <input type=\"text\" id=\"ptype\" name=\"ptype\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["ptype"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                    </div>
                    <div class=\"Grid-full\">
                        <button type=\"submit\" class=\"Button\">Add Product Category</button>
                    </div>
                </form>
            <br>
            <h2 class=\"Section-heading\">List of Product Categories</h2>
            <div class=\"InputCombo Grid-full\">
                    ";
        // line 22
        $this->loadTemplate("tablestyles.html.twig", "dbdemoMain.html.twig", 22)->display($context);
        // line 23
        echo "                    <table>
                        <tr>
                            <th>PTypeID</th>
                            <th>Product_Type</th>
                        </tr>
                        ";
        // line 28
        if ((isset($context["pageArray"]) || array_key_exists("pageArray", $context))) {
            // line 29
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageArray"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 30
                echo "                            <tr>
                                <td> ";
                // line 31
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["pageArray"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["idproduct_category"] ?? null) : null), "html", null, true);
                echo " </td>
                                <td> ";
                // line 32
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["pageArray"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["key"]] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["product_category_name"] ?? null) : null), "html", null, true);
                echo " </td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 35
                echo "                                <tr>
                                    <td> No products found in search </td>
                                    <td>&nbsp;</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                        ";
        }
        // line 41
        echo "                    </table>
             </div>
        </div>
    </section>
</main>
";
        // line 46
        $this->loadTemplate("footer.html.twig", "dbdemoMain.html.twig", 46)->display($context);
    }

    public function getTemplateName()
    {
        return "dbdemoMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 46,  113 => 41,  110 => 40,  100 => 35,  92 => 32,  88 => 31,  85 => 30,  79 => 29,  77 => 28,  70 => 23,  68 => 22,  56 => 13,  50 => 9,  47 => 8,  45 => 7,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dbdemoMain.html.twig", "/var/www/html/code/slimshop/templates/dbdemoMain.html.twig");
    }
}
