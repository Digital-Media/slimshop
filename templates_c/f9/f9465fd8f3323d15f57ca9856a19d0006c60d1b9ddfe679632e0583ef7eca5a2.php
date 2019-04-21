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

/* pentestMain.html.twig */
class __TwigTemplate_70a6e797e5b01127dce2d20586aaea504c66230439588af2c6f7a30717775191 extends \Twig\Template
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
        $this->loadTemplate("header.html.twig", "pentestMain.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("navigation.html.twig", "pentestMain.html.twig", 2)->display($context);
        // line 3
        echo "<main class=\"Site-content\">
    <section class=\"Section\">
        <div class=\"Container\">
            <h2 class=\"Section-heading\">Pentesting the table onlineshop.pentest</h2>
            ";
        // line 7
        $this->loadTemplate("errorMessages.html.twig", "pentestMain.html.twig", 7)->display($context);
        // line 8
        echo "            ";
        $this->loadTemplate("statusMessage.html.twig", "pentestMain.html.twig", 8)->display($context);
        // line 9
        echo "            <form action=\"/pentestlogin\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"email\" class=\"InputCombo-label\">Email:</label>
                    <input type=\"text\" id=\"email\" name=\"email\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"password\" class=\"InputCombo-label\">Password:</label>
                    <input type=\"password\" id=\"password\" name=\"password\" class=\"InputCombo-field\">
                </div>
                <div class=\"Grid-full\">
                    <input type=\"submit\" class=\"Button\" name=\"login\" value=\"Login\" />
                </div>
            </form>
            <form action=\"pentestform\" method=\"post\">
                <div class=\"InputCombo Grid-full\">
                    <label for=\"id_pen_test\" class=\"InputCombo-label\">Id:</label>
                    <input type=\"number\" id=\"id_pen_test\" name=\"id_pen_test\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["id_pen_test"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"email\" class=\"InputCombo-label\">Email:</label>
                    <input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"password\" class=\"InputCombo-label\">Password:</label>
                    <input type=\"text\" id=\"password\" name=\"password\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"active\" class=\"InputCombo-label\">Active:</label>
                    <input type=\"text\" id=\"active\" name=\"active\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"role\" class=\"InputCombo-label\">Role:</label>
                    <input type=\"text\" id=\"role\" name=\"role\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"pt_varchar1\" class=\"InputCombo-label\">Varchar1:</label>
                    <input type=\"text\" id=\"pt_varchar1\" name=\"pt_varchar1\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["pt_varchar1"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"pt_varchar2\" class=\"InputCombo-label\">Varchar2:</label>
                    <input type=\"text\" id=\"pt_varchar2\" name=\"pt_varchar2\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["pt_varchar2"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"pt_int\" class=\"InputCombo-label\">Int:</label>
                    <input type=\"number\" id=\"pt_int\" name=\"pt_int\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["pt_int"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"InputCombo Grid-full\">
                    <label for=\"pt_decimal\" class=\"InputCombo-label\">Decimal:</label>
                    <input type=\"text\" id=\"pt_decimal\" name=\"pt_decimal\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["pt_decimal"] ?? null), "html", null, true);
        echo "\" class=\"InputCombo-field\">
                </div>
                <div class=\"Grid-full\">
                    <input type=\"submit\" class=\"Button\" name=\"select\" value=\"Select\" />
                    <input type=\"submit\" class=\"Button\" name=\"add\" value=\"Add\" />
                </div>
            </form>
            <br>
            <h2 class=\"Section-heading\">List of Table PenTest</h2>
            <div class=\"InputCombo Grid-full\">
                ";
        // line 67
        $this->loadTemplate("tablestyles.html.twig", "pentestMain.html.twig", 67)->display($context);
        // line 68
        echo "                <table>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Active</th>
                        <th>Role</th>
                        <th>Varchar1</th>
                        <th>Varchar2</th>
                        <th>Int</th>
                        <th>Decimal</th>
                    </tr>
                    ";
        // line 80
        if ((isset($context["pageArray"]) || array_key_exists("pageArray", $context))) {
            // line 81
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageArray"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 82
                echo "                            <tr>
                                <td>";
                // line 83
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["pageArray"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["idpentest"] ?? null) : null), "html", null, true);
                echo "</td>
                                <td>";
                // line 84
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["pageArray"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["key"]] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["email"] ?? null) : null), "html", null, true);
                echo "</td>
                                <td>";
                // line 85
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["pageArray"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["key"]] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["password"] ?? null) : null), "html", null, true);
                echo "</td>
                                <td>";
                // line 86
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["pageArray"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["key"]] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["active"] ?? null) : null), "html", null, true);
                echo "</td>
                                <td>";
                // line 87
                echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["pageArray"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[$context["key"]] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["role"] ?? null) : null), "html", null, true);
                echo "</td>
                                <td>";
                // line 88
                echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["pageArray"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[$context["key"]] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["pt_varchar1"] ?? null) : null), "html", null, true);
                echo "</td>
                                <td>";
                // line 89
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["pageArray"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[$context["key"]] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["pt_varchar2"] ?? null) : null);
                echo "</td>
                                <td>";
                // line 90
                echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["pageArray"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[$context["key"]] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["pt_int"] ?? null) : null), "html", null, true);
                echo "</td>
                                <td>";
                // line 91
                echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["pageArray"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[$context["key"]] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["pt_decimal"] ?? null) : null), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                    ";
        } else {
            // line 95
            echo "                        <tr>
                            <td> No products found in search </td>
                            <td>&nbsp;</td>
                        </tr>
                    ";
        }
        // line 100
        echo "                </table>
            </div>

        </div>
    </section>
</main>
";
        // line 106
        $this->loadTemplate("footer.html.twig", "pentestMain.html.twig", 106)->display($context);
    }

    public function getTemplateName()
    {
        return "pentestMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 106,  217 => 100,  210 => 95,  207 => 94,  198 => 91,  194 => 90,  190 => 89,  186 => 88,  182 => 87,  178 => 86,  174 => 85,  170 => 84,  166 => 83,  163 => 82,  158 => 81,  156 => 80,  142 => 68,  140 => 67,  127 => 57,  120 => 53,  113 => 49,  106 => 45,  99 => 41,  92 => 37,  85 => 33,  78 => 29,  71 => 25,  55 => 12,  50 => 9,  47 => 8,  45 => 7,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pentestMain.html.twig", "/var/www/html/code/slimshop/templates/pentestMain.html.twig");
    }
}
