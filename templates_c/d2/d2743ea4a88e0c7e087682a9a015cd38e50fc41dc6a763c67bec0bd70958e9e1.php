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

/* statusMessage.html.twig */
class __TwigTemplate_f972ef7d896cbb9fe76414cd69983bb1d5ce12cf8752c986173be4f6d401c107 extends \Twig\Template
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
        if (((isset($context["statusMessage"]) || array_key_exists("statusMessage", $context)) && (twig_length_filter($this->env, ($context["statusMessage"] ?? null)) != 0))) {
            // line 2
            echo "    <div class=\"Status\">
        <p class=\"Status-message\"><i class=\"fas fa-check\"></i>";
            // line 3
            echo twig_escape_filter($this->env, ($context["statusMessage"] ?? null), "html", null, true);
            echo "</p>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "statusMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "statusMessage.html.twig", "/var/www/html/code/slimshop/templates/statusMessage.html.twig");
    }
}
