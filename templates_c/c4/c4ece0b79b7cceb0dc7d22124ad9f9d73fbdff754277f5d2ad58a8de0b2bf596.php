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

/* loginMain.html.twig */
class __TwigTemplate_9095cf1e568828797b60639bd5d665bb8d201ef6a56b2fb0da2365613dd994d1 extends \Twig\Template
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
        $this->loadTemplate("header.html.twig", "loginMain.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("navigation.html.twig", "loginMain.html.twig", 2)->display($context);
        // line 3
        echo "<main class=\"Site-content\">
    <section class=\"Section\">
        <div class=\"Container\">
            <h2 class=\"Section-heading\">Login</h2>
            <div id=\"messages\">
                ";
        // line 8
        $this->loadTemplate("errorMessages.html.twig", "loginMain.html.twig", 8)->display($context);
        // line 9
        echo "                ";
        $this->loadTemplate("statusMessage.html.twig", "loginMain.html.twig", 9)->display($context);
        // line 10
        echo "            </div>
            <form action=\"/login\" method=\"post\" id=\"loginform\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"email\" class=\"InputCombo-label\">Email:</label>
                    <input type=\"text\" id=\"email\" name=\"email\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"password\" class=\"InputCombo-label\">Password:</label>
                    <input type=\"password\" id=\"password\" name=\"password\" class=\"InputCombo-field\">
                </div>
                <div class=\"Grid-full\">
                    <button type=\"submit\" class=\"Button\">Log me in</button>
                </div>
            </form>
        </div>
    </section>
    <section class=\"Section\">
        <div class=\"Container\">
            <h2 class=\"Section-heading\">No account<i class=\"fa fa-question\"></i></h2>
            <p>Register your OnlineShop account <a href=\"/register\">here</a></p>
        </div>
    </section>
</main>
<!--<script src=\"../src/Exercises/js/login.js\"></script>-->
";
        // line 34
        $this->loadTemplate("footer.html.twig", "loginMain.html.twig", 34)->display($context);
    }

    public function getTemplateName()
    {
        return "loginMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  57 => 14,  51 => 10,  48 => 9,  46 => 8,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "loginMain.html.twig", "/var/www/html/code/slimshop/templates/loginMain.html.twig");
    }
}
