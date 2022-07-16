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

/* docs test/test.html.twig */
class __TwigTemplate_49d5f7c9da1551e650570837a04f0f75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs test/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "docs test/test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <nav class =\"py-2 bg-dark border-bottom\">
            <div class=\"container d-flex flex-wrap\">

                <div class=\"dropdown\">
                    <a class=\"nav-link dropdown-toggle text-white\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        La Buissoniere de L'Aar Site Interne
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuAdmin\">
                        <li><a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Tableau de bord</a><li>
                        <li><a class=\"dropdown-item\" href=\"#\">Menus</a></li>
                        <div class=\"dropdown\">
                                <a class=\"nav-link link-light px-2 dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    ";
        // line 30
        echo "                                </a>
                    </ul>
                </div>
                <div class=\"dropdown\">
                    <a class=\"nav-link dropdown-toggle text-white\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                         Ajouter
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuAdminAdd\">
                        <li><a class=\"dropdown-item\" href=\"#\">Delegue</a><li>
                        <li><a class=\"dropdown-item\" href=\"#\">Category</a></li>
                    </ul>
                </div>              
            </div>
        </nav>
        <div class=\"container\">
            <header class=\"d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom\">
                <a class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\">
                    <span class=\"fs-4\"> La Buissoniere de l'Aar partage de documents</span>
                </a>
                    
                            <a class=\"nav-link\" href=\"#\">S'inscrire </a>
                            <a class=\"nav-link\" href=\"#\">Se connecter</a>
                
            </header> 
        </div>
    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
                                ";
        // line 58
        echo "     <div class=\"container\">
            <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
                <div class=\"col-md-4 d-flex align-items-center\">
                    <span class=\"copyright\">© ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " 
                        Crée par Ophélie Lahaye Tous droits réservés</span>
                </div>
            </footer>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "La Buissoniere";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "docs test/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 55,  194 => 13,  184 => 12,  171 => 9,  161 => 8,  142 => 5,  125 => 61,  120 => 58,  117 => 56,  115 => 55,  103 => 46,  85 => 30,  78 => 25,  66 => 15,  64 => 12,  61 => 11,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}La Buissoniere{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
        <nav class =\"py-2 bg-dark border-bottom\">
            <div class=\"container d-flex flex-wrap\">

                <div class=\"dropdown\">
                    <a class=\"nav-link dropdown-toggle text-white\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        La Buissoniere de L'Aar Site Interne
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuAdmin\">
                        <li><a class=\"dropdown-item\" href=\"{{path('admin') }}\">Tableau de bord</a><li>
                        <li><a class=\"dropdown-item\" href=\"#\">Menus</a></li>
                        <div class=\"dropdown\">
                                <a class=\"nav-link link-light px-2 dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    {#<span class=\"menu-label\">{{ menu|menuLink }}</span>#}
                                </a>
                    </ul>
                </div>
                <div class=\"dropdown\">
                    <a class=\"nav-link dropdown-toggle text-white\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                         Ajouter
                    </a>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuAdminAdd\">
                        <li><a class=\"dropdown-item\" href=\"#\">Delegue</a><li>
                        <li><a class=\"dropdown-item\" href=\"#\">Category</a></li>
                    </ul>
                </div>              
            </div>
        </nav>
        <div class=\"container\">
            <header class=\"d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom\">
                <a class=\"d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none\" href=\"{{ path('home.index') }}\">
                    <span class=\"fs-4\"> La Buissoniere de l'Aar partage de documents</span>
                </a>
                    
                            <a class=\"nav-link\" href=\"#\">S'inscrire </a>
                            <a class=\"nav-link\" href=\"#\">Se connecter</a>
                
            </header> 
        </div>
    {% block body %}{% endblock %}

                                {# ******footer******** #}
     <div class=\"container\">
            <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
                <div class=\"col-md-4 d-flex align-items-center\">
                    <span class=\"copyright\">© {{ 'now'|date('Y') }} 
                        Crée par Ophélie Lahaye Tous droits réservés</span>
                </div>
            </footer>
    </body>
</html>
", "docs test/test.html.twig", "/Users/ophelie/html/labuissoniere/templates/docs test/test.html.twig");
    }
}
