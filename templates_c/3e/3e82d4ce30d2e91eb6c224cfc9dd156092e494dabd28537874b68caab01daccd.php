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

/* footer.html.twig */
class __TwigTemplate_dbf2e437cd93cd37e4df36d2eda3fa08796c6d6c74b11fe35af5eb8c55a2f267 extends \Twig\Template
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
        echo "<footer class=\"Site-footer\">
    <div class=\"Footer Footer--small\">
        <p class=\"Footer-credits\">Created and maintained by
            <a href=\"mailto:martin.harrer@fh-hagenberg.at\">Martin Harrer</a> and
            <a href=\"mailto:wolfgang.hochleitner@fh-hagenberg.at\">Wolfgang Hochleitner</a>.
        </p>
        ";
        // line 7
        if ( !(twig_get_attribute($this->env, $this->source, ($context["_server"] ?? null), "SCRIPT_NAME", []) === "/code/onlineshop/htdocs/solution.php")) {
            echo " <a href=\"solution.php\"  class=\"Button u-spaceLM\">Create Solution</a> ";
        }
        // line 8
        echo "        <p class=\"Footer-version\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>
            <a href=\"https://github.com/Digital-Media/onlineshop\" target=\"_blank\">OnlineShop Version 2017</a>
        </p>
    </div>
</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html.twig", "/var/www/html/code/slimshop/templates/footer.html.twig");
    }
}
