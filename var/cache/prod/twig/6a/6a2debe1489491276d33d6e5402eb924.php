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
class __TwigTemplate_2f8ed2a8a240d62bcbd603506429e3a2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "La Buisssonière - Mes Documents
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 9));
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
        if ( !(twig_get_attribute($this->env, $this->source, ($context["articles"] ?? null), "items", [], "any", false, false, false, 14) === [])) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["articles"] ?? null), "getTotalItemCount", [], "any", false, false, false, 22), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["articles"] ?? null));
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
        return array (  182 => 67,  175 => 63,  172 => 62,  166 => 59,  160 => 55,  150 => 51,  144 => 48,  139 => 46,  135 => 45,  131 => 44,  127 => 43,  123 => 42,  120 => 41,  116 => 40,  108 => 34,  94 => 22,  87 => 18,  82 => 15,  79 => 14,  70 => 11,  67 => 10,  63 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/article/index.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/article/index.html.twig");
    }
}
