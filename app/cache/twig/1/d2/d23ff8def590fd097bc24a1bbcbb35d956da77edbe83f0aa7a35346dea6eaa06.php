<?php

/* default/layout/show_footer.tpl */
class __TwigTemplate_ea30e696d7ab5800c68d2056411096fa3f6f1ea06a1029ee4391b68db56c6b92 extends Twig_Template
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
        if ((($context["show_footer"] ?? null) == true)) {
            // line 2
            echo "    </div>
    </section>
    ";
            // line 4
            $this->loadTemplate((($context["template"] ?? null) . "/layout/page_footer.tpl"), "default/layout/show_footer.tpl", 4)->display($context);
        } else {
            // line 6
            echo "    ";
            $this->loadTemplate((($context["template"] ?? null) . "/layout/footer.js.tpl"), "default/layout/show_footer.tpl", 6)->display($context);
        }
        // line 8
        echo "    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/layout/show_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  28 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/show_footer.tpl", "/var/www/html/cursos_online/main/template/default/layout/show_footer.tpl");
    }
}
