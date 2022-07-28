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

/* pages/partials/_header.html.twig */
class __TwigTemplate_55fac8cf494f2a99588e476b9cf2d88f extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<div class=\"container-fluid\">
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.page");
        echo "\">Accueil
\t\t\t\t\t\t<span class=\"visually-hidden\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact.index");
        echo "\">Contact
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.index");
            echo "\">Mes Commissions</a>
\t\t\t\t</li>
        <li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.index");
            echo "\">Mes documents</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.community");
            echo "\">Documents visible par l'ensemble des Commissions</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t</ul>
\t\t\t<div class =\"d-flex\" style=\"margin-right: 5rem;\">
\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "\t\t\t\t\t<li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\"
\t\t\t\t\taria-expanded=\"false\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), "fullName", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
          <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Modifier mes informations</a>
            <a class=\"dropdown-item\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit.password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Modifier mon mot de passe</a>
            <div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t";
            // line 41
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41), "roles", [], "any", false, false, false, 41))) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Administration</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t";
            }
            // line 45
            echo "
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.logout");
            echo "\">Déconnexion</a>
          </div>
        </li>
\t\t\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t\t<li class=\"nav-item .intro-step1\">
        <a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
            echo "\">Connexion</a>
\t\t\t\t</li>
        <li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.registration");
            echo "\">Inscription</a>
\t\t\t\t</li>

\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t
\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "pages/partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 58,  139 => 54,  133 => 51,  130 => 50,  123 => 46,  120 => 45,  113 => 42,  111 => 41,  105 => 38,  101 => 37,  96 => 35,  92 => 33,  90 => 32,  85 => 29,  79 => 26,  73 => 23,  67 => 20,  64 => 19,  62 => 18,  56 => 15,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/partials/_header.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/partials/_header.html.twig");
    }
}
