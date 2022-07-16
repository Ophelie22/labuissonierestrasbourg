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
class __TwigTemplate_aec1b509844f8f7a6b9d67e78cd8de56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/partials/_header.html.twig"));

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "        <li class=\"nav-item\">
        \t<a class=\"nav-link\" href=\"";
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
\t\t\t\t  <li class=\"nav-item\">
        \t<a class=\"nav-link\" href=\"";
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "\t\t\t\t\t<li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\"
\t\t\t\t\t aria-expanded=\"false\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "fullName", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
          <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Modifier mes informations</a>
            <a class=\"dropdown-item\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.edit.password", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Modifier mon mot de passe</a>
            <div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t";
            // line 41
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "roles", [], "any", false, false, false, 41))) {
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
            echo "\t\t\t\t\t<li class=\"nav-item\">
        \t<a class=\"nav-link\" href=\"";
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  152 => 58,  145 => 54,  139 => 51,  136 => 50,  129 => 46,  126 => 45,  119 => 42,  117 => 41,  111 => 38,  107 => 37,  102 => 35,  98 => 33,  96 => 32,  91 => 29,  85 => 26,  79 => 23,  73 => 20,  70 => 19,  68 => 18,  62 => 15,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t<div class=\"container-fluid\">
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"{{ path('home.index')}}\">Accueil
\t\t\t\t\t\t<span class=\"visually-hidden\">(current)</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('contact.index') }}\">Contact
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% if app.user %}
        <li class=\"nav-item\">
        \t<a class=\"nav-link\" href=\"{{ path('category.index') }}\">Mes Commissions</a>
\t\t\t\t</li>
        <li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('article.index') }}\">Mes documents</a>
\t\t\t\t</li>
\t\t\t\t  <li class=\"nav-item\">
        \t<a class=\"nav-link\" href=\"{{ path('article.community') }}\">Documents visible par l'ensemble des Commissions</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t\t<div class =\"d-flex\" style=\"margin-right: 5rem;\">
\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t<li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\"
\t\t\t\t\t aria-expanded=\"false\">{{ app.user.fullName }}</a>
          <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"{{ path('user.edit', {id : app.user.id}) }}\">Modifier mes informations</a>
            <a class=\"dropdown-item\" href=\"{{ path('user.edit.password', {id : app.user.id}) }}\">Modifier mon mot de passe</a>
            <div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t{% if 'ROLE_ADMIN' in app.user.roles %}
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin') }}\">Administration</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('security.logout') }}\">Déconnexion</a>
          </div>
        </li>
\t\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item\">
        \t<a class=\"nav-link\" href=\"{{ path('security.login') }}\">Connexion</a>
\t\t\t\t</li>
        <li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('security.registration') }}\">Inscription</a>
\t\t\t\t</li>

\t\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>
", "pages/partials/_header.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/partials/_header.html.twig");
    }
}
