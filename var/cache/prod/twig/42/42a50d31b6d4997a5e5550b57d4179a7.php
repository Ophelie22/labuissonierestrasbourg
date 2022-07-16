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
class __TwigTemplate_f3a249e3a53c86ad6b79745083504101 extends Template
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
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "La Buissoniere";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  159 => 55,  152 => 13,  148 => 12,  141 => 9,  137 => 8,  130 => 5,  119 => 61,  114 => 58,  111 => 56,  109 => 55,  97 => 46,  79 => 30,  72 => 25,  60 => 15,  58 => 12,  55 => 11,  52 => 8,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "docs test/test.html.twig", "/Users/ophelie/html/labuissoniere/templates/docs test/test.html.twig");
    }
}
