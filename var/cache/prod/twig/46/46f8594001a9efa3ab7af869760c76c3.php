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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_32dd13c0341f94b2cf77bb73d4453754 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_3338880797de97498d5233e931d789c5af647f7f417f35b7c941f305295dd367"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\" data-turbo=\"false\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        ob_start(function () { return ''; });
        $this->displayBlock('page_title', $context, $blocks);
        $context["page_title_block_output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    <title>";
        echo twig_striptags(($context["page_title_block_output"] ?? null));
        echo "</title>

    ";
        // line 18
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 39
        echo "
    ";
        // line 40
        if (("rtl" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "textDirection", [], "any", false, false, false, 40))) {
            // line 41
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.rtl.css", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 41), "defaultAssetPackageName", [], "any", false, false, false, 41)), "html", null, true);
            echo "\">
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 49
        echo "</head>

";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 359
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("content_title", $context, $blocks);
    }

    // line 18
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 19), "defaultAssetPackageName", [], "any", false, false, false, 19)), "html", null, true);
        echo "\">
    ";
    }

    // line 22
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)) : ([]))], false);
        echo "
        ";
        // line 24
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)) : ([]))], false);
        echo "
    ";
    }

    // line 27
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        echo "\">
    ";
    }

    // line 31
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 32), "defaultAssetPackageName", [], "any", false, false, false, 32)), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 35
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", false, false, false, 36)) : ([]))], false);
        echo "
        ";
        // line 37
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", false, false, false, 37)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", false, false, false, 37)) : ([]))], false);
        echo "
    ";
    }

    // line 44
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 46
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <body
        id=\"";
        // line 53
        $this->displayBlock('body_id', $context, $blocks);
        echo "\"
        class=\"ea ";
        // line 54
        $this->displayBlock('body_class', $context, $blocks);
        echo "\"
        data-ea-content-width=\"";
        // line 55
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", false, false, false, 55)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)) : ("normal")))), "html", null, true);
        echo "\"
        data-ea-sidebar-width=\"";
        // line 56
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", false, false, false, 56)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)) : ("normal")))), "html", null, true);
        echo "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 57
        echo ((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 57)) ? ("true") : ("false"));
        echo "\"
    >
    ";
        // line 59
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 62
        echo "    ";
        $this->displayBlock('javascript_page_color_scheme', $context, $blocks);
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 349
        echo "
    ";
        // line 350
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 351
        echo "
    ";
        // line 352
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 357
        echo "    </body>
";
    }

    // line 53
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 54
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 59
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 60), "defaultAssetPackageName", [], "any", false, false, false, 60)), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 62
    public function block_javascript_page_color_scheme($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 63), "defaultAssetPackageName", [], "any", false, false, false, 63)), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 66
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        ob_start(function () { return ''; });
        // line 72
        echo "            ";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 72), "avatarUrl", [], "any", false, false, false, 72))) {
            // line 73
            echo "                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground ";
            // line 76
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 76))) ? ("fa fa-user") : ("fas fa-user-slash"));
            echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            ";
        } else {
            // line 80
            echo "                <img class=\"user-avatar\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 80), "avatarUrl", [], "any", false, false, false, 80), "html", null, true);
            echo "\" />
            ";
        }
        // line 82
        echo "        ";
        $context["user_menu_avatar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "
        ";
        // line 84
        $context["impersonator_permission"] = ((twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 85
        echo "
        ";
        // line 86
        ob_start(function () { return ''; });
        // line 87
        echo "            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>";
        // line 89
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        <span class=\"user-name\">";
        // line 92
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 92))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92))), "html", null, true);
        echo "</span>
                    </div>
                </li>

                ";
        // line 96
        $this->displayBlock('user_menu', $context, $blocks);
        // line 115
        echo "            </ul>
        ";
        $context["user_menu_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        echo "
        ";
        // line 118
        ob_start(function () { return ''; });
        // line 119
        echo "            <ul class=\"dropdown-menu dropdown-menu-end dropdown-appearance-menu\">
                <li class=\"dropdown-appearance-label\">
                    <span>";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </li>
                <li>
                    <a href=\"#\" class=\"dropdown-item\" data-ea-color-scheme=\"light\">
                        <i class=\"far fa-sun\"></i> <span>";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>
                </li>
                <li>
                    <a href=\"#\" class=\"dropdown-item\" data-ea-color-scheme=\"dark\">
                        <i class=\"far fa-moon\"></i> <span>";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>
                </li>
                <li>
                    <a href=\"#\" class=\"dropdown-item active\" data-ea-color-scheme=\"auto\">
                        <i class=\"fas fa-desktop\"></i> <span>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>
                </li>
            </ul>
        ";
        $context["appearance_menu_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        echo "
        <div class=\"wrapper\">
            ";
        // line 142
        $this->displayBlock('wrapper', $context, $blocks);
        // line 347
        echo "        </div>
    ";
    }

    // line 67
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 68));
        echo "
        ";
    }

    // line 96
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 97), "items", [], "any", false, false, false, 97)) > 0)) {
            // line 98
            echo "                        <li><hr class=\"dropdown-divider\"></li>
                        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 99), "items", [], "any", false, false, false, 99));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 100
                echo "                            <li>
                                ";
                // line 101
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 101) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 101))) {
                    // line 102
                    echo "                                    <hr class=\"dropdown-divider\">
                                ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 103
$context["item"], "isMenuSection", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 104), "html", null, true);
                    echo "\" class=\"dropdown-item user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 104), "html", null, true);
                    echo "\"
                                       target=\"";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 105), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 105), "html", null, true);
                    echo "\"
                                       referrerpolicy=\"origin-when-cross-origin\">
                                        ";
                    // line 107
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 107))) {
                        echo "<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 107), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 108
                    echo "                                        <span>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 108), [],                     // line 2
($context["__internal_3338880797de97498d5233e931d789c5af647f7f417f35b7c941f305295dd367"] ?? null)), "html", null, true);
                    // line 108
                    echo "</span>
                                    </a>
                                ";
                }
                // line 111
                echo "                            </li>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                    ";
        }
        // line 114
        echo "                ";
    }

    // line 142
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "                <div class=\"responsive-header\">
                    ";
        // line 144
        $this->displayBlock('responsive_header', $context, $blocks);
        // line 181
        echo "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 185
        $this->displayBlock('sidebar', $context, $blocks);
        // line 207
        echo "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>

                <section class=\"main-content\">
                    ";
        // line 213
        $context["has_search"] = ( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 213)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 213), "isSearchEnabled", [], "any", false, false, false, 213));
        // line 214
        echo "                    <aside class=\"content-top ";
        echo ((($context["has_search"] ?? null)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        echo "\">
                        ";
        // line 215
        $this->displayBlock('content_top_header', $context, $blocks);
        // line 298
        echo "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 301
        $this->displayBlock('content', $context, $blocks);
        // line 342
        echo "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
            ";
    }

    // line 144
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            ";
        // line 150
        $this->displayBlock('responsive_header_logo', $context, $blocks);
        // line 155
        echo "                        </div>

                        <div class=\"dropdown user-menu-wrapper ";
        // line 157
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo " ms-auto\">
                            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                ";
        // line 161
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 161), "avatarDisplayed", [], "any", false, false, false, 161)) {
            // line 162
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
            echo "
                                ";
        } else {
            // line 164
            echo "                                    <i class=\"user-avatar fa fa-fw ";
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 164))) ? ("fa-user") : ("fa-user-times"));
            echo "\"></i>
                                ";
        }
        // line 166
        echo "                            </a>

                            ";
        // line 168
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                        </div>

                        ";
        // line 171
        if (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 171)) {
            // line 172
            echo "                            <div class=\"dropdown dropdown-appearance\">
                                <a class=\"dropdown-appearance-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                    <i class=\"fas fa-adjust\"></i>
                                </a>

                                ";
            // line 177
            echo twig_escape_filter($this->env, ($context["appearance_menu_dropdown"] ?? null), "html", null, true);
            echo "
                            </div>
                        ";
        }
        // line 180
        echo "                    ";
    }

    // line 150
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "                                <a class=\"responsive-logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 151)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 151));
        echo "\">
                                    ";
        // line 152
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 152);
        echo "
                                </a>
                            ";
    }

    // line 185
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "                            <header class=\"main-header\">
                                ";
        // line 187
        $this->displayBlock('header', $context, $blocks);
        // line 201
        echo "                            </header>

                            ";
        // line 203
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 206
        echo "                        ";
    }

    // line 187
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        echo "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 189
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 199
        echo "                                </nav>
                                ";
    }

    // line 189
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "                                        <div id=\"header-logo\">
                                            ";
        // line 191
        $this->displayBlock('header_logo', $context, $blocks);
        // line 197
        echo "                                        </div>
                                    ";
    }

    // line 191
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "                                                <a class=\"logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 192)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 192));
        echo "\">
                                                    <span class=\"logo-custom\">";
        // line 193
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 193);
        echo "</span>
                                                    <span class=\"logo-compact\"><i class=\"fas fa-home\"></i></span>
                                                </a>
                                            ";
    }

    // line 203
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 204
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 204));
        echo "
                            ";
    }

    // line 215
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 216
        echo "                            <div class=\"content-search\">
                                ";
        // line 217
        if (($context["has_search"] ?? null)) {
            // line 218
            echo "                                    ";
            $this->displayBlock('search', $context, $blocks);
            // line 268
            echo "                                ";
        }
        // line 269
        echo "                            </div>

                            <div class=\"navbar-custom-menu\">
                                ";
        // line 272
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 284
        echo "                            </div>

                            ";
        // line 286
        if (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 286)) {
            // line 287
            echo "                                <div class=\"navbar-custom-menu\">
                                    <div class=\"dropdown dropdown-appearance\">
                                        <a class=\"dropdown-appearance-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            <i class=\"fas fa-adjust\"></i>
                                        </a>

                                        ";
            // line 293
            echo twig_escape_filter($this->env, ($context["appearance_menu_dropdown"] ?? null), "html", null, true);
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 297
        echo "                        ";
    }

    // line 218
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        echo "
                                        <form class=\"form-action-search\" method=\"get\">
                                            ";
        // line 221
        $this->displayBlock('search_form', $context, $blocks);
        // line 266
        echo "                                        </form>
                                    ";
    }

    // line 221
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "                                                ";
        $this->displayBlock('search_form_filters', $context, $blocks);
        // line 243
        echo "
                                                <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 245), "query", [], "any", false, false, false, 245), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 245), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 246), "query", [], "any", false, false, false, 246), "get", [0 => "menuIndex"], "method", false, false, false, 246), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 247), "query", [], "any", false, false, false, 247), "get", [0 => "submenuIndex"], "method", false, false, false, 247), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"page\" value=\"1\">

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        <i class=\"fas fa-search content-search-icon\"></i>

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 254), "get", [0 => "query"], "method", false, false, false, 254), "html", null, true);
        echo "\">
                                                            <input class=\"form-control ";
        // line 255
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 255), "get", [0 => "query"], "method", false, false, false, 255))) ? ("is-blank") : (""));
        echo "\" type=\"search\" name=\"query\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 255), "get", [0 => "query"], "method", true, true, false, 255) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 255), "get", [0 => "query"], "method", false, false, false, 255)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 255), "get", [0 => "query"], "method", false, false, false, 255), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 255), "translationParameters", [], "any", false, false, false, 255), "EasyAdminBundle"), [],         // line 2
($context["__internal_3338880797de97498d5233e931d789c5af647f7f417f35b7c941f305295dd367"] ?? null)), "html", null, true);
        // line 255
        echo "\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 255), "currentAction", [], "any", false, false, false, 255) == "index") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 255), "autofocusSearch", [], "any", false, false, false, 255) == true))) {
            echo " autofocus=\"autofocus\"";
        }
        echo ">
                                                        </label>

                                                        ";
        // line 258
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 258), "get", [0 => "query"], "method", false, false, false, 258)) {
            // line 259
            echo "                                                            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 259), "html", null, true);
            echo "\" class=\"content-search-reset\">
                                                                <i class=\"fas fa-fw fa-times\"></i>
                                                            </a>
                                                        ";
        }
        // line 263
        echo "                                                    </div>
                                                </div>
                                            ";
    }

    // line 222
    public function block_search_form_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 223
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 223), "appliedFilters", [], "any", false, false, false, 223));
        foreach ($context['_seq'] as $context["field"] => $context["array"]) {
            // line 224
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["array"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 225
                echo "                                                            ";
                // line 226
                echo "                                                            ";
                if (twig_test_iterable($context["value"])) {
                    // line 227
                    echo "                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                        // line 228
                        echo "                                                                    ";
                        // line 229
                        echo "                                                                    ";
                        if (twig_test_iterable($context["iterValue"])) {
                            // line 230
                            echo "                                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["iterValue"]);
                            foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                // line 231
                                echo "                                                                            <input type=\"hidden\" name=\"filters[";
                                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["subIndex"], "html", null, true);
                                echo "]\" value=\"";
                                echo twig_escape_filter($this->env, $context["subIterValue"], "html", null, true);
                                echo "\">
                                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['subIndex'], $context['subIterValue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 233
                            echo "                                                                    ";
                        } else {
                            // line 234
                            echo "                                                                        <input type=\"hidden\" name=\"filters[";
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "][";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "][";
                            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                            echo "]\" value=\"";
                            echo twig_escape_filter($this->env, $context["iterValue"], "html", null, true);
                            echo "\">
                                                                    ";
                        }
                        // line 236
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['index'], $context['iterValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 237
                    echo "                                                            ";
                } else {
                    // line 238
                    echo "                                                                <input type=\"hidden\" name=\"filters[";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">
                                                            ";
                }
                // line 240
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['array'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "                                                ";
    }

    // line 272
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 273
        echo "                                    <div class=\"dropdown user-menu-wrapper ";
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                                        <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            ";
        // line 275
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "
                                            ";
        // line 276
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 276), "isNameDisplayed", [], "any", false, false, false, 276)) {
            // line 277
            echo "                                                <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 277), "name", [], "any", false, false, false, 277), "html", null, true);
            echo "</span>
                                            ";
        }
        // line 279
        echo "                                        </a>

                                        ";
        // line 281
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                                    </div>
                                ";
    }

    // line 301
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 302
        echo "                            <article class=\"content\">
                                ";
        // line 303
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 327
        echo "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 329
        $this->displayBlock('main', $context, $blocks);
        // line 330
        echo "                                </section>

                                ";
        // line 332
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 340
        echo "                            </article>
                        ";
    }

    // line 303
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 304
        echo "                                    ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 304), "helpMessage", [], "any", true, true, false, 304) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 304), "helpMessage", [], "any", false, false, false, 304)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 304), "helpMessage", [], "any", false, false, false, 304)) : ("")));
        // line 305
        echo "                                    <section class=\"content-header\">
                                        ";
        // line 306
        $this->displayBlock('content_header', $context, $blocks);
        // line 325
        echo "                                    </section>
                                ";
    }

    // line 306
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 307
        echo "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 309
        $this->displayBlock('content_title', $context, $blocks);
        // line 310
        echo "
                                                    ";
        // line 311
        $this->displayBlock('content_help', $context, $blocks);
        // line 318
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 321
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 324
        echo "                                        ";
    }

    // line 309
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 311
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 312
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 313
            echo "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 313), "helpMessage", [], "any", false, false, false, 313), [],             // line 2
($context["__internal_3338880797de97498d5233e931d789c5af647f7f417f35b7c941f305295dd367"] ?? null)), "html_attr");
            // line 313
            echo "\">
                                                                <i class=\"far fa-question-circle\"></i>
                                                            </a>
                                                        ";
        }
        // line 317
        echo "                                                    ";
    }

    // line 321
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 322
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 329
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 332
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 333
        echo "                                    ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 334
        echo "                                    ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 335
            echo "                                        <section class=\"content-footer\">
                                            ";
            // line 336
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                        </section>
                                    ";
        }
        // line 339
        echo "                                ";
    }

    // line 350
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 352
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 353), "bodyContents", [], "any", true, true, false, 353) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 353), "bodyContents", [], "any", false, false, false, 353)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 353), "bodyContents", [], "any", false, false, false, 353)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 354
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1204 => 356,  1195 => 354,  1190 => 353,  1186 => 352,  1180 => 350,  1176 => 339,  1170 => 336,  1167 => 335,  1164 => 334,  1161 => 333,  1157 => 332,  1151 => 329,  1139 => 322,  1135 => 321,  1131 => 317,  1125 => 313,  1123 => 2,  1121 => 313,  1118 => 312,  1114 => 311,  1108 => 309,  1104 => 324,  1102 => 321,  1097 => 318,  1095 => 311,  1092 => 310,  1090 => 309,  1086 => 307,  1082 => 306,  1077 => 325,  1075 => 306,  1072 => 305,  1069 => 304,  1065 => 303,  1060 => 340,  1058 => 332,  1054 => 330,  1052 => 329,  1048 => 327,  1046 => 303,  1043 => 302,  1039 => 301,  1032 => 281,  1028 => 279,  1022 => 277,  1020 => 276,  1016 => 275,  1010 => 273,  1006 => 272,  1002 => 242,  996 => 241,  990 => 240,  980 => 238,  977 => 237,  971 => 236,  959 => 234,  956 => 233,  939 => 231,  934 => 230,  931 => 229,  929 => 228,  924 => 227,  921 => 226,  919 => 225,  914 => 224,  909 => 223,  905 => 222,  899 => 263,  891 => 259,  889 => 258,  880 => 255,  878 => 2,  873 => 255,  869 => 254,  859 => 247,  855 => 246,  851 => 245,  847 => 243,  844 => 222,  840 => 221,  835 => 266,  833 => 221,  829 => 219,  825 => 218,  821 => 297,  814 => 293,  806 => 287,  804 => 286,  800 => 284,  798 => 272,  793 => 269,  790 => 268,  787 => 218,  785 => 217,  782 => 216,  778 => 215,  771 => 204,  767 => 203,  759 => 193,  752 => 192,  748 => 191,  743 => 197,  741 => 191,  738 => 190,  734 => 189,  729 => 199,  727 => 189,  724 => 188,  720 => 187,  716 => 206,  714 => 203,  710 => 201,  708 => 187,  705 => 186,  701 => 185,  694 => 152,  687 => 151,  683 => 150,  679 => 180,  673 => 177,  666 => 172,  664 => 171,  658 => 168,  654 => 166,  648 => 164,  642 => 162,  639 => 161,  634 => 157,  630 => 155,  628 => 150,  621 => 145,  617 => 144,  609 => 342,  607 => 301,  602 => 298,  600 => 215,  595 => 214,  593 => 213,  585 => 207,  583 => 185,  577 => 181,  575 => 144,  572 => 143,  568 => 142,  564 => 114,  561 => 113,  546 => 111,  541 => 108,  539 => 2,  537 => 108,  531 => 107,  524 => 105,  517 => 104,  515 => 103,  512 => 102,  510 => 101,  507 => 100,  490 => 99,  487 => 98,  484 => 97,  480 => 96,  473 => 68,  469 => 67,  464 => 347,  462 => 142,  458 => 140,  450 => 135,  442 => 130,  434 => 125,  427 => 121,  423 => 119,  421 => 118,  418 => 117,  414 => 115,  412 => 96,  405 => 92,  401 => 91,  396 => 89,  392 => 87,  390 => 86,  387 => 85,  385 => 84,  382 => 83,  379 => 82,  373 => 80,  366 => 76,  361 => 73,  358 => 72,  356 => 71,  353 => 70,  350 => 67,  346 => 66,  339 => 63,  335 => 62,  328 => 60,  324 => 59,  318 => 54,  312 => 53,  307 => 357,  305 => 352,  302 => 351,  300 => 350,  297 => 349,  295 => 66,  292 => 65,  289 => 62,  287 => 59,  282 => 57,  278 => 56,  274 => 55,  270 => 54,  266 => 53,  263 => 52,  259 => 51,  255 => 48,  246 => 46,  241 => 45,  237 => 44,  231 => 37,  226 => 36,  222 => 35,  215 => 32,  211 => 31,  204 => 28,  200 => 27,  194 => 24,  189 => 23,  185 => 22,  178 => 19,  174 => 18,  167 => 15,  158 => 8,  154 => 7,  149 => 359,  147 => 51,  143 => 49,  141 => 44,  138 => 43,  132 => 41,  130 => 40,  127 => 39,  125 => 35,  122 => 34,  120 => 31,  117 => 30,  115 => 27,  112 => 26,  110 => 22,  107 => 21,  105 => 18,  99 => 16,  95 => 15,  92 => 14,  90 => 7,  83 => 5,  79 => 3,  77 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/Users/ophelie/html/labuissoniere/vendor/easycorp/easyadmin-bundle/src/Resources/views/layout.html.twig");
    }
}
