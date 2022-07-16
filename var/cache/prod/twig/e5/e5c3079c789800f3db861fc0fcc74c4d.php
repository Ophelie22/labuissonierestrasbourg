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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_9182f0b4f00473cca1b3a210ec21836c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'detail_field' => [$this, 'block_detail_field'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["ea_field_assets"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 8), "fieldAssets", [0 => twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_DETAIL")], "method", false, false, false, 8);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 5)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 5)), "html", null, true);
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-detail ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 6)), "html", null, true);
    }

    // line 10
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 13
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 17
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 20
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 24
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 26
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 26)], false);
        echo "
    ";
        // line 27
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 27)], false);
        echo "
";
    }

    // line 30
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 32
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 32)], false);
        echo "
    ";
        // line 33
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 33)], false);
        echo "
";
    }

    // line 36
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        ob_start(function () { return ''; });
        // line 38
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 38), "customPageTitle", [0 => ($context["pageName"] ?? null), 1 => ((($context["entity"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 38)) : (null)), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 38), "translationParameters", [], "any", false, false, false, 38)], "method", false, false, false, 38);
        // line 39
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "defaultPageTitle", [0 => null, 1 => null, 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "translationParameters", [], "any", false, false, false, 40)], "method", false, false, false, 40))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 41
($context["custom_page_title"] ?? null))));
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo twig_spaceless($___internal_parse_3_);
    }

    // line 45
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 47
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 47), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 51
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 53
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    ";
        $this->displayBlock('detail_fields', $context, $blocks);
        // line 78
        echo "
    ";
        // line 79
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 54
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "        ";
        $context["form_panel_is_already_open"] = false;
        // line 56
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 56));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 57
            echo "            ";
            $context["is_form_field_panel"] = twig_in_filter("field-form_panel", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 57));
            // line 58
            echo "
            ";
            // line 59
            if ((($context["is_form_field_panel"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 59) &&  !($context["is_form_field_panel"] ?? null)))) {
                // line 60
                echo "                ";
                if (($context["form_panel_is_already_open"] ?? null)) {
                    // line 61
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_close_form_field_panel", [], 61, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 62
                    $context["form_panel_is_already_open"] = false;
                    // line 63
                    echo "                ";
                }
                // line 64
                echo "
                ";
                // line 65
                echo twig_call_macro($macros["_self"], "macro_open_form_field_panel", [((($context["is_form_field_panel"] ?? null)) ? ($context["field"]) : (null))], 65, $context, $this->getSourceContext());
                echo "
                ";
                // line 66
                $context["form_panel_is_already_open"] = true;
                // line 67
                echo "            ";
            }
            // line 68
            echo "
            ";
            // line 69
            $this->displayBlock('detail_field', $context, $blocks);
            // line 74
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
        ";
        // line 76
        echo twig_call_macro($macros["_self"], "macro_close_form_field_panel", [], 76, $context, $this->getSourceContext());
        echo "
    ";
    }

    // line 69
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                ";
        if ( !($context["is_form_field_panel"] ?? null)) {
            // line 71
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_render_field", [($context["entity"] ?? null), ($context["field"] ?? null)], 71, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 73
        echo "            ";
    }

    // line 79
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 80)], false);
        echo "
    ";
    }

    // line 84
    public function macro_open_form_field_panel($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 85
            echo "    ";
            $context["panel_name"] = (((null === ($context["field"] ?? null))) ? (null) : (("content-" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 85))));
            // line 86
            echo "    ";
            $context["collapsible"] = (((null === ($context["field"] ?? null))) ? (false) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsible"], "method", false, false, false, 86)));
            // line 87
            echo "    ";
            $context["collapsed"] = (((null === ($context["field"] ?? null))) ? (false) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsed"], "method", false, false, false, 87)));
            // line 88
            echo "    ";
            $context["panel_icon"] = (((null === ($context["field"] ?? null))) ? (null) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 88), "get", [0 => "icon"], "method", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 88), "get", [0 => "icon"], "method", false, false, false, 88), false)) : (false))));
            // line 89
            echo "    ";
            $context["panel_label"] = (((null === ($context["field"] ?? null))) ? (null) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 89)));
            // line 90
            echo "    ";
            $context["panel_help"] = (((null === ($context["field"] ?? null))) ? (null) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 90), false)) : (false))));
            // line 91
            echo "    ";
            $context["panel_has_header"] = (((($context["collapsible"] ?? null) || ($context["panel_icon"] ?? null)) || ($context["panel_label"] ?? null)) || ($context["panel_help"] ?? null));
            // line 92
            echo "
    <div class=\"";
            // line 93
            (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 93) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 93)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 93), "html", null, true))) : (print ("")));
            echo "\">
        <div class=\"form-panel\">
            ";
            // line 95
            if (($context["panel_has_header"] ?? null)) {
                // line 96
                echo "                <div class=\"form-panel-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(($context["panel_help"] ?? null))) ? ("with-help") : (""));
                echo "\">
                    <div class=\"form-panel-title\">
                        <a ";
                // line 98
                if ( !($context["collapsible"] ?? null)) {
                    // line 99
                    echo "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 101
                    echo "                            href=\"#";
                    echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                            class=\"form-panel-collapse ";
                    // line 102
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                            aria-expanded=\"";
                    // line 103
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"";
                    echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                    echo "\"
                        ";
                }
                // line 105
                echo "                        >
                            ";
                // line 106
                if (($context["collapsible"] ?? null)) {
                    // line 107
                    echo "                                <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                            ";
                }
                // line 109
                echo "
                            ";
                // line 110
                if (($context["panel_icon"] ?? null)) {
                    // line 111
                    echo "                                <i class=\"form-panel-icon ";
                    echo twig_escape_filter($this->env, ($context["panel_icon"] ?? null), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 113
                echo "                            ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["panel_label"] ?? null));
                echo "
                        </a>

                        ";
                // line 116
                if (($context["panel_help"] ?? null)) {
                    // line 117
                    echo "                            <div class=\"form-panel-help\">";
                    echo ($context["panel_help"] ?? null);
                    echo "</div>
                        ";
                }
                // line 119
                echo "                    </div>
                </div>
            ";
            }
            // line 122
            echo "
            <div ";
            // line 123
            if (($context["panel_name"] ?? null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " class=\"form-panel-body ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 127
    public function macro_close_form_field_panel(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 128
            echo "            </dl>
        </div>
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 134
    public function macro_render_field($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 135
            echo "    <div class=\"data-row ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 135), "html", null, true);
            echo "\">
        <dt>
            ";
            // line 137
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 137));
            echo "

            ";
            // line 139
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 139))) {
                // line 140
                echo "                <a tabindex=\"0\" class=\"data-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-trigger=\"focus\" data-bs-content=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 140)), "html_attr");
                echo "\">
                    <i class=\"far fa-question-circle\"></i>
                </a>
            ";
            }
            // line 144
            echo "        </dt>
        <dd>
            ";
            // line 146
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 146), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            echo "
        </dd>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 146,  531 => 144,  523 => 140,  521 => 139,  516 => 137,  510 => 135,  496 => 134,  483 => 128,  471 => 127,  451 => 123,  448 => 122,  443 => 119,  437 => 117,  435 => 116,  428 => 113,  422 => 111,  420 => 110,  417 => 109,  413 => 107,  411 => 106,  408 => 105,  401 => 103,  397 => 102,  392 => 101,  388 => 99,  386 => 98,  378 => 96,  376 => 95,  371 => 93,  368 => 92,  365 => 91,  362 => 90,  359 => 89,  356 => 88,  353 => 87,  350 => 86,  347 => 85,  334 => 84,  327 => 80,  323 => 79,  319 => 73,  313 => 71,  310 => 70,  306 => 69,  300 => 76,  297 => 75,  283 => 74,  281 => 69,  278 => 68,  275 => 67,  273 => 66,  269 => 65,  266 => 64,  263 => 63,  261 => 62,  256 => 61,  253 => 60,  251 => 59,  248 => 58,  245 => 57,  227 => 56,  224 => 55,  220 => 54,  216 => 79,  213 => 78,  210 => 54,  206 => 53,  199 => 51,  188 => 47,  183 => 46,  179 => 45,  175 => 37,  172 => 41,  171 => 40,  169 => 39,  167 => 38,  165 => 37,  161 => 36,  155 => 33,  151 => 32,  146 => 31,  142 => 30,  136 => 27,  132 => 26,  127 => 25,  123 => 24,  112 => 20,  108 => 19,  103 => 18,  99 => 17,  88 => 13,  84 => 12,  79 => 11,  75 => 10,  68 => 6,  61 => 5,  57 => 3,  55 => 8,  48 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "/Users/ophelie/html/labuissoniere/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/detail.html.twig");
    }
}
