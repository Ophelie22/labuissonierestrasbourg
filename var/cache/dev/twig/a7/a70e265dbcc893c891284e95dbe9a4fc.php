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

/* pages/article/index.html.twig */
class __TwigTemplate_83bbe8f5a10dc80e70573860a64b4abc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "La Buisssonière - Mes Documents
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container mt-4\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "\t\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t";
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 14, $this->source); })()), "items", [], "any", false, false, false, 14) === [])) {
            // line 15
            echo "\t\t\t
\t\t\t<h1>Mes Documents</h1>

\t\t\t<a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tdéposer un document
\t\t\t</a>

\t\t\t<div class=\"count mt-4\"> Il y a ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 22, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 22), "html", null, true);
            echo "
\t\t\t\tdocument(s) dans votre espace au total
\t\t\t</div>

\t\t\t<table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro ID de notre document</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
            <th scope=\"col\">Titre</th>
\t\t\t\t\t\t<th scope=\"col\">Description</th>
            ";
            // line 34
            echo "\t\t\t\t\t\t<th scope=\"col\">Date de création</th>
\t\t\t\t\t\t<th scope=\"col\">Edition</th>
\t\t\t\t\t\t<th scope=\"col\">Suppresion</th>
\t\t\t\t\t</tr>
          </thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 41
                echo "\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t<td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Supprimer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t";
            // line 59
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 59, $this->source); })()));
            echo "
\t\t\t</div>
\t\t";
        } else {
            // line 62
            echo "\t\t\t<h4>Il n'y a pas de documents</h4>
\t\t\t\t<a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer un document
\t\t\t\t</a>
\t\t";
        }
        // line 67
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 67,  205 => 63,  202 => 62,  196 => 59,  190 => 55,  180 => 51,  174 => 48,  169 => 46,  165 => 45,  161 => 44,  157 => 43,  153 => 42,  150 => 41,  146 => 40,  138 => 34,  124 => 22,  117 => 18,  112 => 15,  109 => 14,  100 => 11,  97 => 10,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
La Buisssonière - Mes Documents
{% endblock %}

{% block body %}
\t<div class=\"container mt-4\">
\t\t{% for message in app.flashes('success') %}
\t\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t{% endfor %}
\t\t{% if not articles.items is same as([]) %}
\t\t\t
\t\t\t<h1>Mes Documents</h1>

\t\t\t<a href=\"{{ path('article.new') }}\" class=\"btn btn-primary\">
\t\t\t\tdéposer un document
\t\t\t</a>

\t\t\t<div class=\"count mt-4\"> Il y a {{ articles.getTotalItemCount }}
\t\t\t\tdocument(s) dans votre espace au total
\t\t\t</div>

\t\t\t<table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro ID de notre document</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
            <th scope=\"col\">Titre</th>
\t\t\t\t\t\t<th scope=\"col\">Description</th>
            {#<th scope=\"col\">Mettre en favorie</th>#}
\t\t\t\t\t\t<th scope=\"col\">Date de création</th>
\t\t\t\t\t\t<th scope=\"col\">Edition</th>
\t\t\t\t\t\t<th scope=\"col\">Suppresion</th>
\t\t\t\t\t</tr>
          </thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for article in articles %}
\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">{{ article.id }}</th>
\t\t\t\t\t\t\t<td>{{ article.name }}</td>
\t\t\t\t\t\t\t<td>{{ article.titre }}</td>
\t\t\t\t\t\t\t<td>{{ article.description }}</td>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>{{ article.createdAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('article.edit', { id: article.id }) }}\" class=\"btn btn-info\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('article.delete', { id: article.id }) }}\" class=\"btn btn-warning\">Supprimer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t{{ knp_pagination_render(articles) }}
\t\t\t</div>
\t\t{% else %}
\t\t\t<h4>Il n'y a pas de documents</h4>
\t\t\t\t<a href=\"{{ path('article.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer un document
\t\t\t\t</a>
\t\t{% endif %}
\t</div>
{% endblock %}

", "pages/article/index.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/article/index.html.twig");
    }
}
