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

/* productMain.html.twig */
class __TwigTemplate_7f95bc47d18ba8c06816d2abcd36f4809533eaa079e79ec619108c55e5d74fda extends \Twig\Template
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
        $this->loadTemplate("header.html.twig", "productMain.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("navigation.html.twig", "productMain.html.twig", 2)->display($context);
        // line 3
        echo "<main class=\"Site-content\">
    <section class=\"Section\">
        <div class=\"Container\">
            <h2 class=\"Section-heading\">Add Product</h2>
            <div id=\"messages\">
                ";
        // line 8
        $this->loadTemplate("errorMessages.html.twig", "productMain.html.twig", 8)->display($context);
        // line 9
        echo "                ";
        $this->loadTemplate("statusMessage.html.twig", "productMain.html.twig", 9)->display($context);
        // line 10
        echo "            </div>
            <form action=\"/add_product\" method=\"post\" enctype=\"multipart/form-data\" id=\"productform\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"pname\" class=\"InputCombo-label\">Product Name*:</label>
                    <input type=\"text\" id=\"pname\" name=\"pname\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["pname"] ?? null), "html", null, true);
        echo "\" placeholder=\"Choose a unique Product Name\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"price\" class=\"InputCombo-label\">Price*:</label>
                    <input type=\"text\" id=\"price\" name=\"price\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["price"] ?? null), "html", null, true);
        echo "\" size=\"10\" maxlength=\"10\"  placeholder=\"0,00\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"ptype\" class=\"InputCombo-label\">Product Type*:</label>
                    <select name=\"ptype\" id=\"ptype\" size=\"1\" class=\"InputCombo-field\">
                         ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ptypeArray"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 24
            echo "                            <option ";
            if ((isset($context["selected"]) || array_key_exists("selected", $context))) {
                echo " ";
                if ((($context["selected"] ?? null) === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["ptypeArray"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["product_category_name"] ?? null) : null))) {
                    echo " selected=\"selected\" ";
                }
                echo " ";
            }
            echo "> ";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["ptypeArray"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["key"]] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["product_category_name"] ?? null) : null), "html", null, true);
            echo " </option>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "                            <option>Nothing to select so far</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </select>
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"active\" class=\"InputCombo-label\">Active*</label><span>&nbsp;</span>
                    <input type=\"radio\" name=\"active\"  value=\"1\" ";
        // line 32
        if ((($context["active"] ?? null) == "1")) {
            echo " checked=\"checked\" ";
        }
        echo "><span>&nbsp;</span>
                    <label for=\"active\" class=\"InputCombo-label\">Inactive*</label><span>&nbsp;</span>
                    <input type=\"radio\" name=\"active\"  value=\"0\" ";
        // line 34
        if ((($context["active"] ?? null) == "0")) {
            echo " checked=\"checked\" ";
        }
        echo "><span>&nbsp;</span>
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"shortdesc\" class=\"InputCombo-label\">Short Description*:</label>
                    <textarea name=\"shortdesc\" id=\"shortdesc\" cols=\"40\" rows=\"5\"  class=\"InputCombo-field\">";
        // line 38
        echo twig_escape_filter($this->env, ($context["shortdesc"] ?? null), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"longdesc\" class=\"InputCombo-label\">Long Description*:</label>
                    <textarea name=\"longdesc\" id=\"longdesc\" cols=\"40\" rows=\"15\"  class=\"InputCombo-field\">";
        // line 42
        echo twig_escape_filter($this->env, ($context["longdesc"] ?? null), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"Grid-full\">
                    <button type=\"submit\" class=\"Button\">Add Product</button>
                </div>
            </form>
        </div>
    </section>
</main>
<!--<script src=\"../src/Exercises/js/product.js\"></script>-->
";
        // line 52
        $this->loadTemplate("footer.html.twig", "productMain.html.twig", 52)->display($context);
    }

    public function getTemplateName()
    {
        return "productMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 52,  129 => 42,  122 => 38,  113 => 34,  106 => 32,  100 => 28,  93 => 26,  77 => 24,  72 => 23,  64 => 18,  57 => 14,  51 => 10,  48 => 9,  46 => 8,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "productMain.html.twig", "/var/www/html/code/slimshop/templates/productMain.html.twig");
    }
}
