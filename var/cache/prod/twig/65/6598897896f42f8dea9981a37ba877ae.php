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

/* pages/home.html.twig */
class __TwigTemplate_85bd236c9329ddbcebbc687b256c3b5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "La Buissonniere - Accueil
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"container mt-4\">
\t\t<div class=\"jumbotron\">
\t\t\t<h1 class=\"display-5 mb-3\">Bienvenue sur la page interne de la Buissonnière</h1>
\t\t\t<p class=\"lead\"> Le site des commissions est une application qui va te permettre de stoker tes documents, et de partager des informations ou des articles que tu auras toi-même créer. Tu pourras partager tes informations ou tes documents à la communauté du site, ou bien les garder en privés.</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p>Pour commencer, rendez-vous sur la page de connexion pour utiliser l'application.</p>
\t\t<a class=\"btn btn-primary btn-lgz\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
        echo "\" role=\"button\"> Connexion</a>
\t\t</div>

\t\t<div class=\"articles\">
\t\t\t<h2 class=\"mt-4\">Documents visibles pour les différentes commissions</h2>
\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            echo "\t\t\t\t\t<div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t<div class=\"card-header\">Article n°";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 26
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 26), 0, 100) . "..."), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t\t";
    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  96 => 26,  89 => 24,  83 => 21,  80 => 20,  76 => 19,  67 => 13,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/home.html.twig");
    }
}
