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

/* registerMain.html.twig */
class __TwigTemplate_477b965c9bbf047b7e60125e869014f3bc77ed98bfd1840837b6c38d43f0c7d1 extends \Twig\Template
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
        $this->loadTemplate("header.html.twig", "registerMain.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("navigation.html.twig", "registerMain.html.twig", 2)->display($context);
        // line 3
        echo "<main class=\"Site-content\">
    <section class=\"Section\">
        <div class=\"Container\">
            <h2 class=\"Section-heading\">Register for an OnlineShop account</h2>
            <div id=\"messages\">
                ";
        // line 8
        $this->loadTemplate("errorMessages.html.twig", "registerMain.html.twig", 8)->display($context);
        // line 9
        echo "                ";
        $this->loadTemplate("statusMessage.html.twig", "registerMain.html.twig", 9)->display($context);
        // line 10
        echo "            </div>
            <form action=\"/add_user\" method=\"post\" enctype=\"multipart/form-data\" id=\"registerform\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"firstname\" class=\"InputCombo-label\">Firstname:</label>
                    <input type=\"text\" id=\"firstname\" name=\"firstname\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["firstname"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"lastname\" class=\"InputCombo-label\">Lastname:</label>
                    <input type=\"text\" id=\"lastname\" name=\"lastname\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["lastname"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"nickname\" class=\"InputCombo-label\">Nickname:</label>
                    <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["nickname"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"email\" class=\"InputCombo-label\">Email:</label>
                    <input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <p> Format: +43 732 1234-1234 </p>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"phone\" class=\"InputCombo-label\">Phone:</label>
                    <input type=\"text\" id=\"phone\" name=\"phone\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"mobile\" class=\"InputCombo-label\">Mobile:</label>
                    <input type=\"text\" id=\"mobile\" name=\"mobile\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["mobile"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"fax\" class=\"InputCombo-label\">Fax:</label>
                    <input type=\"text\" id=\"fax\" name=\"fax\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["fax"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <p> Use only letters, numbers, and the underscore. Must be between 5 and 8 characters long. </p>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"password\" class=\"InputCombo-label\">Password:</label>
                    <input type=\"password\" id=\"password\" name=\"password\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"password_repeat\" class=\"InputCombo-label\">Repeat Password:</label>
                    <input type=\"password\" id=\"password_repeat\" name=\"password_repeat\" class=\"InputCombo-field\">
                </div>
                <div class=\"Grid-full\">
                    <button type=\"submit\" class=\"Button\">Create my account</button>
                </div>
            </form>
        </div>
    </section>
    <section class=\"Section\">
        <div class=\"Container\">
            <h2 class=\"Section-heading\">Already registered<i class=\"fa fa-question\"></i></h2>
            <p>Use your existing OnlineShop account to login <a href=\"/login\">here</a></p>
        </div>
    </section>
</main>
<!--<script src=\"../src/Exercises/js/register.js\"></script>-->
";
        // line 64
        $this->loadTemplate("footer.html.twig", "registerMain.html.twig", 64)->display($context);
    }

    public function getTemplateName()
    {
        return "registerMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 64,  100 => 39,  93 => 35,  86 => 31,  78 => 26,  71 => 22,  64 => 18,  57 => 14,  51 => 10,  48 => 9,  46 => 8,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registerMain.html.twig", "/var/www/html/code/slimshop/templates/registerMain.html.twig");
    }
}
