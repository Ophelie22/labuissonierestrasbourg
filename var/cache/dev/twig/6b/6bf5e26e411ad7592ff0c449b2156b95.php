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

/* pages/security/login.html.twig */
class __TwigTemplate_8759be65c62101e312f8fde09b90fe0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/security/login.html.twig", 1);
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

        echo "Commission La Buissonière - Connexion
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
        echo "\t<div class=\"container\">
\t\t<h1 class=\"mt-4\">Formulaire de connexion</h1>

\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t
\t\t";
        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "\t\t\t<div class=\"alert alert-danger mt-4\">
\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 21
        echo "

\t\t<form action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security.login");
        echo "\" method=\"post\" name=\"login\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"form-label mt-4\">Adresse email</label>
\t\t\t\t <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"exemple@labuissoniere.fr\" ";
        // line 26
        echo " >
\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">Ne partargez jamais votre email avec une autre personne.</small>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"password\" class=\"form-label mt-4\">Mot de passe</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"********\">
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-4\">
\t\t\t\tSe connecter
\t\t\t</button>
\t\t</form>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 26,  128 => 23,  124 => 21,  118 => 18,  115 => 17,  113 => 16,  110 => 15,  101 => 12,  98 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commission La Buissonière - Connexion
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<h1 class=\"mt-4\">Formulaire de connexion</h1>

\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}
\t\t
\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger mt-4\">
\t\t\t\t{{ error.messageKey|trans(error.messageData, 'security') }}
\t\t\t</div>
\t\t{% endif %}


\t\t<form action=\"{{ path('security.login') }}\" method=\"post\" name=\"login\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"form-label mt-4\">Adresse email</label>
\t\t\t\t <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"exemple@labuissoniere.fr\" {#value=\"{{ last_username }}\"> #} >
\t\t\t\t<small id=\"emailHelp\" class=\"form-text text-muted\">Ne partargez jamais votre email avec une autre personne.</small>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"password\" class=\"form-label mt-4\">Mot de passe</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"********\">
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-4\">
\t\t\t\tSe connecter
\t\t\t</button>
\t\t</form>
\t</div>
{% endblock %}
", "pages/security/login.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/security/login.html.twig");
    }
}
