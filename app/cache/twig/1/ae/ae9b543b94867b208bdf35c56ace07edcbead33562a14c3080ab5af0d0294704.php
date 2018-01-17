<?php

/* default/social/profile.tpl */
class __TwigTemplate_fa27acc3ef59ed4ce9bb999f309f8e71d1d5ef469302a99400b402f0f17c5866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($context["template"] ?? null) . "/layout/layout_1_col.tpl"), "default/social/profile.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
    <div class=\"col-md-3\">
        ";
        // line 6
        echo ($context["social_avatar_block"] ?? null);
        echo "
        ";
        // line 7
        echo ($context["social_extra_info_block"] ?? null);
        echo "
        <div class=\"social-network-menu\">
            ";
        // line 9
        echo ($context["social_menu_block"] ?? null);
        echo "
        </div>
    </div>
    <div id=\"wallMessages\" class=\"col-md-6\">
        ";
        // line 13
        echo ($context["social_wall_block"] ?? null);
        echo "
        <div class=\"spinner\"></div>
        <div class=\"panel panel-preview panel-default\" hidden=\"true\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 17
        echo get_lang("Url");
        echo " - ";
        echo get_lang("Preview");
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"url_preview\"></div>
            </div>
        </div>
        ";
        // line 23
        echo ($context["social_post_wall_block"] ?? null);
        echo "
        ";
        // line 24
        echo ($context["social_auto_extend_link"] ?? null);
        echo "
    </div>
    <div class=\"col-md-3\">
        <div class=\"chat-friends\">
            <div class=\"panel-group\" id=\"blocklistFriends\" role=\"tablist\" aria-multiselectable=\"true\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                        <h4 class=\"panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#blocklistFriends\" href=\"#listFriends\" aria-expanded=\"true\" aria-controls=\"listFriends\">
                                ";
        // line 33
        echo get_lang("SocialFriend");
        echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"listFriends\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                        <div class=\"panel-body\">
                            ";
        // line 39
        echo ($context["social_friend_block"] ?? null);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 45
        echo ($context["social_skill_block"] ?? null);
        echo "
        ";
        // line 46
        echo ($context["social_group_info_block"] ?? null);
        echo "
        <!-- Block course list -->
        ";
        // line 48
        if ((($context["social_course_block"] ?? null) != null)) {
            // line 49
            echo "        <div class=\"panel-group\" id=\"course-block\" role=\"tablist\" aria-multiselectable=\"true\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                    <h4 class=\"panel-title\">
                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#course-block\" href=\"#courseList\" aria-expanded=\"true\" aria-controls=\"courseList\">
                            ";
            // line 54
            echo get_lang("MyCourses");
            echo "
                        </a>
                    </h4>
                </div>
                <div id=\"courseList\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                    <div class=\"panel-body\">
                        <ul class=\"list-group\">
                            ";
            // line 61
            echo ($context["social_course_block"] ?? null);
            echo "
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 68
        echo "        <!-- Block session list -->
        ";
        // line 69
        if ((($context["session_list"] ?? null) != null)) {
            // line 70
            echo "        <div class=\"panel-group\" id=\"session-block\" role=\"tablist\" aria-multiselectable=\"true\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                    <h4 class=\"panel-title\">
                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#session-block\" href=\"#sessionList\" aria-expanded=\"true\" aria-controls=\"sessionList\">
                           ";
            // line 75
            echo get_lang("MySessions");
            echo "
                        </a>
                    </h4>
                </div>
                <div id=\"sessionList\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                    <div class=\"panel-body\">
                        <ul class=\"list-group\">
                            ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["session_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 83
                echo "                            <li id=\"session_";
                echo $this->getAttribute($context["session"], "id", array());
                echo "\" class=\"list-group-item\" style=\"min-height:65px;\">
                                <img class=\"img-session\" src=\"";
                // line 84
                echo $this->getAttribute($context["session"], "image", array());
                echo "\"/>
                                <span class=\"title\">";
                // line 85
                echo $this->getAttribute($context["session"], "name", array());
                echo "</span>
                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                        </ul>
                    </div>
                </div>
            </div>
         </div>
        ";
        }
        // line 94
        echo "        ";
        echo ($context["invitations"] ?? null);
        echo "
        ";
        // line 95
        echo ($context["social_rss_block"] ?? null);
        echo "
        ";
        // line 96
        echo ($context["social_right_information"] ?? null);
        echo "
    </div>
</div>

";
        // line 100
        if (array_key_exists("form_modals", $context)) {
            // line 101
            echo "    ";
            echo ($context["form_modals"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/social/profile.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 101,  208 => 100,  201 => 96,  197 => 95,  192 => 94,  184 => 88,  175 => 85,  171 => 84,  166 => 83,  162 => 82,  152 => 75,  145 => 70,  143 => 69,  140 => 68,  130 => 61,  120 => 54,  113 => 49,  111 => 48,  106 => 46,  102 => 45,  93 => 39,  84 => 33,  72 => 24,  68 => 23,  57 => 17,  50 => 13,  43 => 9,  38 => 7,  34 => 6,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/social/profile.tpl", "/var/www/html/cursos_online/main/template/default/social/profile.tpl");
    }
}
