<?php

/* default/layout/head.tpl */
class __TwigTemplate_993363f8bdc01ee5518d57ecadd297c4fb3fe217d16183a692b008d6e53a0c8a extends Twig_Template
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
        echo "<meta charset=\"";
        echo ($context["system_charset"] ?? null);
        echo "\" />
<link href=\"https://chamilo.org/chamilo-lms/\" rel=\"help\" />
<link href=\"https://chamilo.org/the-association/\" rel=\"author\" />
<link href=\"https://www.gnu.org/licenses/gpl-3.0.en.html\" rel=\"license\" />
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<![endif]-->
";
        // line 9
        echo ($context["prefetch"] ?? null);
        echo "
";
        // line 10
        echo ($context["favico"] ?? null);
        echo "
<link rel=\"apple-touch-icon\" href=\"";
        // line 11
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "apple-touch-icon.png\" />
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
<meta name=\"generator\" content=\"";
        // line 13
        echo $this->getAttribute(($context["_s"] ?? null), "software_name", array());
        echo " ";
        echo twig_slice($this->env, $this->getAttribute(($context["_s"] ?? null), "system_version", array()), 0, 1);
        echo "\" />
";
        // line 16
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 17
        echo ($context["title_string"] ?? null);
        echo "</title>
";
        // line 18
        echo ($context["social_meta"] ?? null);
        echo "
";
        // line 19
        echo ($context["css_static_file_to_string"] ?? null);
        echo "
";
        // line 20
        echo ($context["js_file_to_string"] ?? null);
        echo "
";
        // line 21
        echo ($context["extra_headers"] ?? null);
        echo "
<script>

/* Global chat variables */
var ajax_url = '";
        // line 25
        echo $this->getAttribute(($context["_p"] ?? null), "web_ajax", array());
        echo "chat.ajax.php';
var online_button = '";
        // line 26
        echo ($context["online_button"] ?? null);
        echo "';
var offline_button = '";
        // line 27
        echo ($context["offline_button"] ?? null);
        echo "';
var connect_lang = '";
        // line 28
        echo get_lang("ChatConnected");
        echo "';
var disconnect_lang = '";
        // line 29
        echo get_lang("ChatDisconnected");
        echo "';
</script>

";
        // line 32
        $this->loadTemplate((($context["template"] ?? null) . "/layout/header.js.tpl"), "default/layout/head.tpl", 32)->display($context);
        // line 33
        echo "
";
        // line 34
        echo ($context["css_custom_file_to_string"] ?? null);
        echo "
";
        // line 35
        echo ($context["css_style_print"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/head.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  103 => 34,  100 => 33,  98 => 32,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  50 => 16,  44 => 13,  39 => 11,  35 => 10,  31 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/head.tpl", "/var/www/html/cursos_online/main/template/default/layout/head.tpl");
    }
}
