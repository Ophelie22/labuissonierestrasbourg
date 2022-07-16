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

/* pages/category/index.html.twig */
class __TwigTemplate_9cc52d8a7fdcdd8772ae08c7c5dd6abb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/category/index.html.twig", 1);
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

        echo "La Buissoniere - Mes différentes commissions
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t\t<div class=\"container mt-4\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "\t\t\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t
\t\t";
        // line 15
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 15, $this->source); })()), "items", [], "any", false, false, false, 15) === [])) {
            // line 16
            echo "
\t\t\t<h1>Les commissions dont je fais partie</h1>

\t\t\t\t<a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer une rebriques pour cette categorie de commission
\t\t\t\t</a>
\t\t\t

\t\t\t<div class=\"count mt-4\">Il y a
\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 25), "html", null, true);
            echo "
\t\t\t\t commision(s) dont vous faite partie.
\t\t\t</div>

      <table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t";
            // line 35
            echo "\t\t\t\t\t\t<th scope=\"col\">Edition</th>
\t\t\t\t\t\t<th scope=\"col\">Suppresion</th> 
\t\t\t\t\t</tr>
\t\t\t\t</thead>
        <tbody>
\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 41
                echo "\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t<td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t";
                // line 45
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                // line 47
                echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Supprimer</a>
\t\t\t\t\t\t\t</td>  
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t</tbody>
\t\t\t</table>
      <div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t";
            // line 58
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 58, $this->source); })()));
            echo "
\t\t\t</div> 
\t\t";
        } else {
            // line 61
            echo "\t\t\t<p>Il n'y a pas de sous categories pour cette commission</p>

\t\t\t\t<a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category.new");
            echo "\" class=\"btn btn-primary\">
\t\t\t\tCréer une rebriques pour cette categorie de commission
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
        return "pages/category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 67,  199 => 63,  195 => 61,  189 => 58,  184 => 55,  174 => 51,  168 => 48,  165 => 47,  162 => 45,  158 => 43,  154 => 42,  151 => 41,  147 => 40,  140 => 35,  128 => 25,  119 => 19,  114 => 16,  112 => 15,  109 => 14,  100 => 11,  97 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La Buissoniere - Mes différentes commissions
{% endblock %}

{% block body %}

\t\t<div class=\"container mt-4\">
\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</div>
\t\t{% endfor %}
\t\t
\t\t{% if not categories.items is same as([]) %}

\t\t\t<h1>Les commissions dont je fais partie</h1>

\t\t\t\t<a href=\"{{ path('category.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer une rebriques pour cette categorie de commission
\t\t\t\t</a>
\t\t\t

\t\t\t<div class=\"count mt-4\">Il y a
\t\t\t\t{{ categories.getTotalItemCount }}
\t\t\t\t commision(s) dont vous faite partie.
\t\t\t</div>

      <table class=\"table table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t{# <th scope=\"col\">Date de création</th> #}
\t\t\t\t\t\t<th scope=\"col\">Edition</th>
\t\t\t\t\t\t<th scope=\"col\">Suppresion</th> 
\t\t\t\t\t</tr>
\t\t\t\t</thead>
        <tbody>
\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">{{ category.id }}</th>
\t\t\t\t\t\t\t<td>{{ category.name }}</td>
\t\t\t\t\t\t\t{# <td>{{ category.price|number_format(2, '.', ',') }#}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{# {{ category.createdAt|date('d/m/Y') }}</td> #}
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('category.edit', { id: category.id }) }}\" class=\"btn btn-info\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('category.delete', { id: category.id }) }}\" class=\"btn btn-warning\">Supprimer</a>
\t\t\t\t\t\t\t</td>  
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
      <div class=\"navigation d-flex justify-content-center mt-4\">
\t\t\t\t{{ knp_pagination_render(categories) }}
\t\t\t</div> 
\t\t{% else %}
\t\t\t<p>Il n'y a pas de sous categories pour cette commission</p>

\t\t\t\t<a href=\"{{ path('category.new') }}\" class=\"btn btn-primary\">
\t\t\t\tCréer une rebriques pour cette categorie de commission
\t\t\t\t</a>
\t\t{% endif %}
\t</div>
{% endblock %}


", "pages/category/index.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/category/index.html.twig");
    }
}
