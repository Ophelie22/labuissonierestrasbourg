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

/* pages/article/show.html.twig */
class __TwigTemplate_174ae98e75d97939caf3eda91bf19532 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/article/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/article/show.html.twig", 1);
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

        echo " La Buissoniere ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "
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
        echo "  <div class=\"container\">
\t
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "\t\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
\t\t<h1 class=\"mt-4\"> Nom du document : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
\t\t";
        // line 17
        echo " 

\t\t<div class=\"article__image\">
\t\t\t<img style=\"max-width: 500px;\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">
\t\t</div>

\t\t<p>La moyenne de la note de ce document est de
\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "average", [], "any", false, false, false, 24), 2, ".", ","), "html", null, true);
        echo "
\t\t\t/5</p>

    <div class=\"mt-4\">
\t\t\t<span class=\"badge bg-primary\">Créée le
\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "createdAt", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
        echo "</span>
\t\t</div>

    <div class=\"mt-4\">
\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 33, $this->source); })()), "titre", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t<p>Titre :
\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "titre", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t<p>Titre non renseigné</p>
\t\t\t";
        }
        // line 39
        echo "\t\t</div>

    <div class=\"mt-4\">
      ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42);
        echo "
    </div>

    <div class=\"mt-4\">
\t\t\t<p class=\"mt-4\">Commissions concernée par ce document</p>
\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 47, $this->source); })()), "categories", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 48
            echo "\t\t\t\t<span class=\"badge bg-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</span>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t</div>

\t\t<div class=\"mark\">
\t\t\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form');
        echo "
\t\t\t</div>

\t\t</div>



  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 53,  185 => 50,  176 => 48,  172 => 47,  164 => 42,  159 => 39,  155 => 37,  150 => 35,  147 => 34,  145 => 33,  138 => 29,  130 => 24,  123 => 20,  118 => 17,  114 => 16,  111 => 15,  102 => 12,  99 => 11,  95 => 10,  91 => 8,  81 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} La Buissoniere {{article.name}}
{% endblock %}


{% block body %}
  <div class=\"container\">
\t
\t\t{% for message in app.flashes('success') %}
\t\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t<h1 class=\"mt-4\"> Nom du document : {{article.name}}</h1>
\t\t{#{{dump(article.average)}}#} 

\t\t<div class=\"article__image\">
\t\t\t<img style=\"max-width: 500px;\" src=\"{{ vich_uploader_asset(article, 'imageFile') }}\">
\t\t</div>

\t\t<p>La moyenne de la note de ce document est de
\t\t\t{{ article.average|number_format(2, '.', ',') }}
\t\t\t/5</p>

    <div class=\"mt-4\">
\t\t\t<span class=\"badge bg-primary\">Créée le
\t\t\t\t{{ article.createdAt|date('d/m/Y') }}</span>
\t\t</div>

    <div class=\"mt-4\">
\t\t\t{% if article.titre %}
\t\t\t\t<p>Titre :
\t\t\t\t\t{{ article.titre }}</p>
\t\t\t{% else %}
\t\t\t\t<p>Titre non renseigné</p>
\t\t\t{% endif %}
\t\t</div>

    <div class=\"mt-4\">
      {{ article.description|raw }}
    </div>

    <div class=\"mt-4\">
\t\t\t<p class=\"mt-4\">Commissions concernée par ce document</p>
\t\t\t{% for category in article.categories %}
\t\t\t\t<span class=\"badge bg-primary\">{{ category.name }}</span>
\t\t\t{% endfor %}
\t\t</div>

\t\t<div class=\"mark\">
\t\t\t{{ form(form) }}
\t\t\t</div>

\t\t</div>



  </div>
{% endblock %}", "pages/article/show.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/article/show.html.twig");
    }
}
