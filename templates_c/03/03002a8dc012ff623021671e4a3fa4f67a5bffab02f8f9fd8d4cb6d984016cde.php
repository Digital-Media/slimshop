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

/* tablestyles.html.twig */
class __TwigTemplate_3af5966272ee285a1770d097d5c3e10a50ebe1014a10be4d602d556420972605 extends \Twig\Template
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
        echo "<!-- Styles not needed for NormFormDemo, therefore not in css. So its easier to reuse NormFormDemo -->
<style type=\"text/css\">
    th { text-align:left; }
    td { text-align:left; }
</style>
";
    }

    public function getTemplateName()
    {
        return "tablestyles.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tablestyles.html.twig", "/var/www/html/code/slimshop/templates/tablestyles.html.twig");
    }
}
