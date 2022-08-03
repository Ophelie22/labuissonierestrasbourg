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
class __TwigTemplate_a5b0f229ead6c86fa2c20dc2c9aa0daf extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/article/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t<div class=\"container\">

\t\t<h1 class=\"mt-4\">Modification du document</h1>

\t\t<form name=\"article\" method=\"post\" enctype=\"multi^part/form-data\">

\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 10), 'label');
        echo "
\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 11), 'widget');
        echo "
\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 13), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-image\">
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "documentFilename", [], "any", false, false, false, 17), 'row');
        echo "
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 21), 'label');
        echo "
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 22), 'widget');
        echo "
\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 24), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 29), 'label');
        echo "
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 30), 'widget');
        echo "
\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 32), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-check mt-4\">
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isFavorite", [], "any", false, false, false, 37), 'widget');
        echo "
\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isFavorite", [], "any", false, false, false, 38), 'label');
        echo "
\t\t\t</div>

\t\t\t\t<div class=\"form-check mt-4\">
\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isPublic", [], "any", false, false, false, 42), 'widget');
        echo "
\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "isPublic", [], "any", false, false, false, 43), 'label');
        echo "
\t\t\t</div>

\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categories", [], "any", false, false, false, 46), 'row');
        echo "

\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 48), 'row');
        echo "

\t\t\t<button type=\"submit\" id=\"article_submit\" name=\"article[submit]\" class=\"btn-btn-primary mt-4\">Modifier un document
\t\t\tcommission</button>

\t\t
\t</div>
";
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
        return array (  142 => 48,  137 => 46,  131 => 43,  127 => 42,  120 => 38,  116 => 37,  108 => 32,  103 => 30,  99 => 29,  91 => 24,  86 => 22,  82 => 21,  75 => 17,  68 => 13,  63 => 11,  59 => 10,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/article/edit.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/article/edit.html.twig");
    }
}
