<?php

/* default/layout/login_form.tpl */
class __TwigTemplate_babd662b9fa1dd10ed6d8b90bd666871560f87f2f13aef1d8174343e2ab815e9 extends Twig_Template
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
        if (($this->getAttribute(($context["_u"] ?? null), "logged", array()) == 0)) {
            // line 2
            if (($context["login_form"] ?? null)) {
                // line 3
                echo "    <div id=\"login_block\" class=\"panel panel-default\">
        <div class=\"panel-body\">
        ";
                // line 5
                echo ($context["login_language_form"] ?? null);
                echo "

        ";
                // line 7
                if ( !(null === ($context["plugin_login_top"] ?? null))) {
                    // line 8
                    echo "            <div id=\"plugin_login_top\">
                ";
                    // line 9
                    echo ($context["plugin_login_top"] ?? null);
                    echo "
            </div>
        ";
                }
                // line 12
                echo "
        ";
                // line 13
                echo ($context["login_failed"] ?? null);
                echo "
        ";
                // line 14
                echo ($context["login_form"] ?? null);
                echo "

        ";
                // line 16
                if (((api_get_setting("allow_lostpassword") == "true") || (api_get_setting("allow_registration") == "true"))) {
                    // line 17
                    echo "            <ul class=\"nav nav-pills nav-stacked\">
                ";
                    // line 18
                    if ((api_get_setting("allow_registration") != "false")) {
                        // line 19
                        echo "                    <li><a href=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
                        echo "auth/inscription.php\"> ";
                        echo get_lang("SignUp");
                        echo " </a></li>
                ";
                    }
                    // line 21
                    echo "
                ";
                    // line 22
                    if ((api_get_setting("allow_lostpassword") == "true")) {
                        // line 23
                        echo "                    <li><a href=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
                        echo "auth/lostPassword.php\"> ";
                        echo get_lang("LostPassword");
                        echo " </a></li>
                ";
                    }
                    // line 25
                    echo "            </ul>
        ";
                }
                // line 27
                echo "
        ";
                // line 28
                if ( !(null === ($context["plugin_login_bottom"] ?? null))) {
                    // line 29
                    echo "            <div id=\"plugin_login_bottom\">
                ";
                    // line 30
                    echo ($context["plugin_login_bottom"] ?? null);
                    echo "
            </div>
        ";
                }
                // line 33
                echo "        </div>
    </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/layout/login_form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  95 => 30,  92 => 29,  90 => 28,  87 => 27,  83 => 25,  75 => 23,  73 => 22,  70 => 21,  62 => 19,  60 => 18,  57 => 17,  55 => 16,  50 => 14,  46 => 13,  43 => 12,  37 => 9,  34 => 8,  32 => 7,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/login_form.tpl", "/var/www/html/cursos_online/main/template/default/layout/login_form.tpl");
    }
}
