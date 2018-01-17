<?php

/* default/layout/show_header.tpl */
class __TwigTemplate_b8d8ae3b3fea9c34beb486e026edce6913cc37c9604fc3f56a43e9742066fc88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"";
        // line 2
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"";
        // line 3
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"";
        // line 4
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"";
        // line 6
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "</head>
<body dir=\"";
        // line 12
        echo ($context["text_direction"] ?? null);
        echo "\" class=\"";
        echo ($context["section_name"] ?? null);
        echo " ";
        echo ($context["login_class"] ?? null);
        echo "\">
<noscript>";
        // line 13
        echo get_lang("NoJavascript");
        echo "</noscript>
";
        // line 14
        if ((($context["show_header"] ?? null) == true)) {
            // line 15
            echo "<div class=\"wrap\">
    ";
            // line 16
            if ((($context["displayCookieUsageWarning"] ?? null) == true)) {
                // line 17
                echo "    <!-- Display Cookies validation -->
    <div class=\"toolbar-cookie alert-warning\">
        <form onSubmit=\"\$(this).toggle('slow')\" action=\"\" method=\"post\">
            <input value=1 type=\"hidden\" name=\"acceptCookies\"/>
            <div class=\"cookieUsageValidation\">
                ";
                // line 22
                echo get_lang("YouAcceptCookies");
                echo "
                <span style=\"margin-left:20px;\" onclick=\"\$(this).next().toggle('slow'); \$(this).toggle('slow')\">
                    (";
                // line 24
                echo get_lang("More");
                echo ")
                </span>
                <div style=\"display:none; margin:20px 0;\">
                    ";
                // line 27
                echo get_lang("HelpCookieUsageValidation");
                echo "
                </div>
                <span style=\"margin-left:20px;\" onclick=\"\$(this).parent().parent().submit()\">
                    (";
                // line 30
                echo get_lang("Accept");
                echo ")
                </span>
            </div>
        </form>
    </div>
";
            }
            // line 36
            $this->loadTemplate((($context["template"] ?? null) . "/layout/page_header.tpl"), "default/layout/show_header.tpl", 36)->display($context);
            // line 37
            if ( !(null === ($context["show_course_shortcut"] ?? null))) {
                // line 38
                echo "    <div class=\"nav-tools\">
        ";
                // line 39
                echo ($context["show_course_shortcut"] ?? null);
                echo "
    </div>
";
            }
            // line 42
            echo "<section id=\"content-section\">
    <div class=\"container\">
        ";
            // line 44
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 49
            echo "        ";
            echo ($context["flash_messages"] ?? null);
            echo "
";
        }
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->loadTemplate((($context["template"] ?? null) . "/layout/head.tpl"), "default/layout/show_header.tpl", 9)->display($context);
    }

    // line 44
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 45
        echo "            <div id=\"page-breadcrumb\">
                ";
        // line 46
        echo ($context["breadcrumb"] ?? null);
        echo "
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "default/layout/show_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 46,  137 => 45,  134 => 44,  129 => 9,  126 => 8,  118 => 49,  116 => 44,  112 => 42,  106 => 39,  103 => 38,  101 => 37,  99 => 36,  90 => 30,  84 => 27,  78 => 24,  73 => 22,  66 => 17,  64 => 16,  61 => 15,  59 => 14,  55 => 13,  47 => 12,  44 => 11,  42 => 8,  37 => 6,  32 => 4,  28 => 3,  24 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/show_header.tpl", "/var/www/html/cursos_online/main/template/default/layout/show_header.tpl");
    }
}
