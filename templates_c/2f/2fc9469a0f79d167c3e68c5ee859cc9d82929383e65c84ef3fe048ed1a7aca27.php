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

/* navigation.html.twig */
class __TwigTemplate_34006a77a328041c9789781a41d8a429878c26818f85297ac2e24d785a02ab67 extends \Twig\Template
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
        .Navigation {
            text-align: left;
        }
</style>
<div class=\"Header Navigation\">
    <nav class=\"Container\">
        <span class=\"u-spaceRS\" >  <a href=\"/\">Home</a> </span>
        <span class=\"u-spaceRS\" >  <a href=\"/register\">Register</a> </span>
        <span class=\"u-spaceRS\" >  <a href=\"/product\">Add Products</a> </span>
        <span class=\"u-spaceRS\" >  <a href=\"/mycart\">My Cart</a> </span>
        <span class=\"u-spaceRS\" >  <a href=\"/search\">Search</a> </span>
        <span class=\"u-spaceRS\" >  <a href=\"/dbdemo\">DBDEMO</a> </span>
        <span class=\"u-spaceRS\" >  <a href=\"/dbajaxdemo\">AJAXDEMO</a> </span>
        <span class=\"u-spaceRS\" >  <a href=\"/esearchdemo\">ESearchDEMO</a> </span>
        <span class=\"u-spaceRS\" >  <a href=\"/redisdemo\">RedisDEMO</a> </span>
        <span class=\"u-spaceRS\" >  <a href=\"/pentest\">PenTest</a>  </span>
    </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation.html.twig", "/var/www/html/code/slimshop/templates/navigation.html.twig");
    }
}
