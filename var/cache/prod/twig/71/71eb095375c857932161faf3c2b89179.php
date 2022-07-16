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

/* emails/contact.html.twig */
class __TwigTemplate_9ef067b219df2c58a225db363498da3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t</head>
\t<body>
\t\t<h1>Demande de
\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "fullName", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

\t\t<p>Email :
\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
\t\t<p>Sujet :
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "subject", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
\t\t<p>Message :</p>
\t\t<div>
\t\t\t";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 16);
        echo "
\t\t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  57 => 13,  52 => 11,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/contact.html.twig", "/Users/ophelie/html/labuissoniere/templates/emails/contact.html.twig");
    }
}
