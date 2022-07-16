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

/* base.html.twig */
class __TwigTemplate_0d88eea1da6e9944e98d70a49fd8ad38 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
        <div class=\"container\">
            <div class=\"text-center\">
                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logo.buisso.png"), "html", null, true);
        echo "\" class=\"rounded\" alt=\"Logo\"></a>
            </div>
        </div>
        ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 38
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            ";
        // line 10
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("intro");
        echo "
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/united/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/united/_variables.scss\">
\t\t\t<link rel=\"stylesheet\" href=\"/style.css\">

        ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        // line 19
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("intro");
        echo "
            <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js\" integrity=\"sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT\" crossorigin=\"anonymous\"></script>

        ";
    }

    // line 31
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            ";
        $this->loadTemplate("pages/partials/_header.html.twig", "base.html.twig", 32)->display($context);
        // line 33
        echo "        ";
    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 35
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "            ";
        $this->loadTemplate("pages/partials/_footer.html.twig", "base.html.twig", 36)->display($context);
        // line 37
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 37,  150 => 36,  146 => 35,  140 => 34,  136 => 33,  133 => 32,  129 => 31,  119 => 19,  117 => 18,  113 => 17,  102 => 10,  100 => 9,  96 => 8,  89 => 5,  84 => 38,  81 => 35,  78 => 34,  76 => 31,  68 => 28,  62 => 24,  60 => 17,  57 => 16,  54 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/ophelie/html/labuissoniere/templates/base.html.twig");
    }
}
