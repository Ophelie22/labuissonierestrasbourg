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
class __TwigTemplate_6919a9cde4e1faf9450ba32ab3aa4952 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " La Buissoniere ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  <div class=\"container\">
\t
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 10));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
\t\t";
        // line 17
        echo " 

\t\t<div class=\"article__image\">
\t\t\t<img style=\"max-width: 500px;\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["article"] ?? null), "imageFile"), "html", null, true);
        echo "\">
\t\t</div>

\t\t<p>La moyenne de la note de ce document est de
\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "average", [], "any", false, false, false, 24), 2, ".", ","), "html", null, true);
        echo "
\t\t\t/5</p>

    <div class=\"mt-4\">
\t\t\t<span class=\"badge bg-primary\">Créée le
\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "createdAt", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
        echo "</span>
\t\t</div>

    <div class=\"mt-4\">
\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t<p>Titre :
\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 35), "html", null, true);
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
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "description", [], "any", false, false, false, 42);
        echo "
    </div>

    <div class=\"mt-4\">
\t\t\t<p class=\"mt-4\">Commissions concernée par ce document</p>
\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "categories", [], "any", false, false, false, 47));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
\t\t\t</div>

\t\t</div>



  </div>
";
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
        return array (  160 => 53,  155 => 50,  146 => 48,  142 => 47,  134 => 42,  129 => 39,  125 => 37,  120 => 35,  117 => 34,  115 => 33,  108 => 29,  100 => 24,  93 => 20,  88 => 17,  84 => 16,  81 => 15,  72 => 12,  69 => 11,  65 => 10,  61 => 8,  57 => 7,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/article/show.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/article/show.html.twig");
    }
}
