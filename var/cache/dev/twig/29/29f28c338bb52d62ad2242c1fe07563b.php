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

/* pages/article/edit.html.twig */
class __TwigTemplate_6fb6be3638e2a98e43afa23195c34a15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/article/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/article/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/article/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container\">

\t\t<h1 class=\"mt-4\">Modification du document</h1>

\t\t<form name=\"article\" method=\"post\" enctype=\"multi^part/form-data\">

\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), 'label');
        echo "
\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'widget');
        echo "
\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-image\">
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "imageFile", [], "any", false, false, false, 17), 'row');
        echo "
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), 'label');
        echo "
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "titre", [], "any", false, false, false, 22), 'widget');
        echo "
\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'label');
        echo "
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'widget');
        echo "
\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-check mt-4\">
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "isFavorite", [], "any", false, false, false, 37), 'widget');
        echo "
\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "isFavorite", [], "any", false, false, false, 38), 'label');
        echo "
\t\t\t</div>

\t\t\t\t<div class=\"form-check mt-4\">
\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "isPublic", [], "any", false, false, false, 42), 'widget');
        echo "
\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "isPublic", [], "any", false, false, false, 43), 'label');
        echo "
\t\t\t</div>

\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "categories", [], "any", false, false, false, 46), 'row');
        echo "

\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "_token", [], "any", false, false, false, 48), 'row');
        echo "

\t\t\t<button type=\"submit\" id=\"article_submit\" name=\"article[submit]\" class=\"btn-btn-primary mt-4\">Modifier un document
\t\t\tcommission</button>

\t\t
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 48,  155 => 46,  149 => 43,  145 => 42,  138 => 38,  134 => 37,  126 => 32,  121 => 30,  117 => 29,  109 => 24,  104 => 22,  100 => 21,  93 => 17,  86 => 13,  81 => 11,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
\t<div class=\"container\">

\t\t<h1 class=\"mt-4\">Modification du document</h1>

\t\t<form name=\"article\" method=\"post\" enctype=\"multi^part/form-data\">

\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.name) }}
\t\t\t\t{{ form_widget(form.name) }}
\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t{{ form_errors(form.name) }}
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-image\">
\t\t\t\t{{ form_row(form.imageFile)}}
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.titre) }}
\t\t\t\t{{ form_widget(form.titre) }}
\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t{{ form_errors(form.titre) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.description) }}
\t\t\t\t{{ form_widget(form.description) }}
\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t{{ form_errors(form.description) }}
\t\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-check mt-4\">
\t\t\t\t{{ form_widget(form.isFavorite) }}
\t\t\t\t{{ form_label(form.isFavorite) }}
\t\t\t</div>

\t\t\t\t<div class=\"form-check mt-4\">
\t\t\t\t{{ form_widget(form.isPublic) }}
\t\t\t\t{{ form_label(form.isPublic) }}
\t\t\t</div>

\t\t{{ form_row(form.categories) }}

\t\t{{ form_row(form._token) }}

\t\t\t<button type=\"submit\" id=\"article_submit\" name=\"article[submit]\" class=\"btn-btn-primary mt-4\">Modifier un document
\t\t\tcommission</button>

\t\t
\t</div>
{% endblock %}
", "pages/article/edit.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/article/edit.html.twig");
    }
}
