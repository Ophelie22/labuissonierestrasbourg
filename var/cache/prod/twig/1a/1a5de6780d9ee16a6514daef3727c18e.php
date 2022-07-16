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

/* pages/article/community.html.twig */
class __TwigTemplate_33d87d8b2003d4033fa61a1489113225 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/article/community.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "La Buisssonière -  Ensemble des document rendu public par les différentes commissions
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<div class=\"container mt-4\">
\t\t";
        // line 9
        if ( !(twig_get_attribute($this->env, $this->source, ($context["articles"] ?? null), "items", [], "any", false, false, false, 9) === [])) {
            // line 10
            echo "\t\t<h1> Documents visible par l'ensemble des commissions de la Buisssonière</h1>
\t\t\t<div class=\"d-flex justify-content-between flex-wrap\">
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 13
                echo "\t\t\t\t\t<div class=\"card border-primary mb-4\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t<div class=\"card-header\">Article n°";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 14), "html", null, true);
                echo "</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 19
                echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 19), 0, 100) . "..."), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t</div>
\t\t";
        } else {
            // line 25
            echo "\t\t\t<h4>Il n'y a pas de documents</h4>
\t\t";
        }
        // line 27
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "pages/article/community.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  103 => 25,  99 => 23,  89 => 19,  82 => 17,  76 => 14,  73 => 13,  69 => 12,  65 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/article/community.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/article/community.html.twig");
    }
}
