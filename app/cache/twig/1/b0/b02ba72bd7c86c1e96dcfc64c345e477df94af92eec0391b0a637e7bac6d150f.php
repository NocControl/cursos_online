<?php

/* default/layout/page_body.tpl */
class __TwigTemplate_1400f6e3d0177fc59b8e574ca45c658c5f1154e2a5c7a7e04fa996d6475154dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($context["actions"] ?? null) != "")) {
            // line 2
            echo "    ";
            echo ($context["actions"] ?? null);
            echo "
";
        }
        // line 4
        echo ($context["flash_messages"] ?? null);
        echo "
<span id=\"js_alerts\"></span>
";
        // line 6
        if ((($context["header"] ?? null) != "")) {
            // line 7
            echo "    <div class=\"section-page\">
        <div class=\"page-header\">
            <h3>";
            // line 9
            echo ($context["header"] ?? null);
            echo "</h3>
        </div>
    </div>
";
        }
        // line 13
        if ((($context["message"] ?? null) != "")) {
            // line 14
            echo "    <section id=\"messages\">
        ";
            // line 15
            echo ($context["message"] ?? null);
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/page_body.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  47 => 14,  45 => 13,  38 => 9,  34 => 7,  32 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page_body.tpl", "/var/www/html/cursos_online/main/template/default/layout/page_body.tpl");
    }
}
