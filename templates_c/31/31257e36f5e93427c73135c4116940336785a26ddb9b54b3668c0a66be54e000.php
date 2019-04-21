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

/* header.html.twig */
class __TwigTemplate_5c88447c081bdbf89d9fb4bfe7c47e4479bd4e8f78adde8804d68d90e1d06bf6 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>SlimShop</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.10/css/all.css\"
          integrity=\"sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/css/main.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
</head>
<body class=\"Site\">
<header class=\"Site-header\">
    <div class=\"Header Header--small\">
        <div class=\"Header-titles\">
            <h1 class=\"Header-title\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>SlimShop</h1>
            <p class=\"Header-subtitle\">For Database Exercises</p>
        </div>
        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "isloggedin", [], "any", true, true)) {
            // line 21
            echo "        <div class=\"Header-logout\">
            You are logged in as  ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "first_name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "last_name", []), "html", null, true);
            echo ". <a href=\"/logout\" class=\"Button u-spaceLM\">Logout</a>
        </div>
        ";
        } else {
            // line 25
            echo "        <div class=\"Header-logout\">
            <a href=\"/login\"  class=\"Button u-spaceLM\">Login</a>
        </div>
        ";
        }
        // line 29
        echo "    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  72 => 25,  64 => 22,  61 => 21,  59 => 20,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "/var/www/html/code/slimshop/templates/header.html.twig");
    }
}
