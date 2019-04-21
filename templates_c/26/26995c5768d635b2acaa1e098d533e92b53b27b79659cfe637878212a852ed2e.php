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

/* index.twig.html */
class __TwigTemplate_df80209af757d411a55237abb15705e2aa5e9b149ab9e1cd9668bc04d34761b4 extends \Twig\Template
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
    <title>NormForm-Skeleton (Simple UI)</title>
</head>
<body>
<header>
    <h1>NormForm Skeleton (Simple UI)</h1>
</header>
<main>
    <section>
        <h2>Enter Your Name and Message</h2>
        ";
        // line 14
        if (((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context)) && (twig_length_filter($this->env, ($context["errorMessages"] ?? null)) > 0))) {
            // line 15
            echo "        <ul>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorMessages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 17
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
        ";
        }
        // line 21
        echo "        ";
        if (((isset($context["statusMessage"]) || array_key_exists("statusMessage", $context)) && (twig_length_filter($this->env, ($context["statusMessage"] ?? null)) != 0))) {
            // line 22
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["statusMessage"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        // line 24
        echo "        <form action=\"/\" method=\"post\">
            <div>
                <label for=\"username\">Username*:</label>
                <input type=\"text\" id=\"username\" name=\"username\"
                       value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "username", []), "html", null, true);
        echo "\">
            </div>
            <div>
                <label for=\"email\">Email*:</label>
                <input type=\"text\" id=\"email\" name=\"email\"
                       value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "email", []), "html", null, true);
        echo "\">
            </div>
            <div>
                <label for=\"message\">Message:</label>
                <textarea name=\"message\"
                          id=\"message\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "message", []), "html", null, true);
        echo "</textarea>
            </div>
            <div>
                <button type=\"submit\">Send</button>
            </div>
        </form>
    </section>
    <section>
        <h2>Result in \$_POST</h2>
        ";
        // line 47
        if ((isset($context["result"]) || array_key_exists("result", $context))) {
            // line 48
            echo "        <table border=\"1\">
            <colgroup span=\"2\"></colgroup>
            <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 58
                echo "            <tr>
                <td>";
                // line 59
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td>
                <td>";
                // line 60
                echo nl2br(twig_escape_filter($this->env, $context["value"]));
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </tbody>
        </table>
        ";
        }
        // line 66
        echo "    </section>
</main>
<footer>
    <p>Created and maintained by <a href=\"mailto:martin.harrer@fh-hagenberg.at\">Martin Harrer</a> and <a
                href=\"mailto:wolfgang.hochleitner@fh-hagenberg.at\">Wolfgang Hochleitner</a>.</p>
    <p><a href=\"https://github.com/Digital-Media/normform-skeleton\">NormForm-Skeleton Version 1.0.0</a></p>
</footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 66,  148 => 63,  139 => 60,  135 => 59,  132 => 58,  128 => 57,  117 => 48,  115 => 47,  103 => 38,  95 => 33,  87 => 28,  81 => 24,  75 => 22,  72 => 21,  68 => 19,  59 => 17,  55 => 16,  52 => 15,  50 => 14,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig.html", "/var/www/html/code/slimshop/templates/index.twig.html");
    }
}
