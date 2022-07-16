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
class __TwigTemplate_076bfed5c9adec84ecff3f41e7719154 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "La Buissoniere - Mes différentes commissions
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
\t\t<div class=\"container mt-4\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 9));
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
        if ( !(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "items", [], "any", false, false, false, 15) === [])) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "getTotalItemCount", [], "any", false, false, false, 25), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["categories"] ?? null));
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
        return array (  176 => 67,  169 => 63,  165 => 61,  159 => 58,  154 => 55,  144 => 51,  138 => 48,  135 => 47,  132 => 45,  128 => 43,  124 => 42,  121 => 41,  117 => 40,  110 => 35,  98 => 25,  89 => 19,  84 => 16,  82 => 15,  79 => 14,  70 => 11,  67 => 10,  63 => 9,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/category/index.html.twig", "/Users/ophelie/html/labuissoniere/templates/pages/category/index.html.twig");
    }
}
