<?php

/* default/user_portal/classic_session.tpl */
class __TwigTemplate_569b5f28ec4e42d4fcc5b118af22977cca08e2efea8358e7ce6d0bd17a8ff668 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["session"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 2
            echo "    <div class=\"panel panel-default\">
        ";
            // line 3
            if ( !$this->getAttribute($context["row"], "show_simple_session_info", array())) {
                // line 4
                echo "            ";
                $context["collapsable"] = "";
                // line 5
                echo "            <div class=\"panel-heading\">
                ";
                // line 6
                if (($this->getAttribute($context["row"], "course_list_session_style", array()) == 1)) {
                    // line 7
                    echo "                    ";
                    // line 8
                    echo "                    ";
                    if ((($context["remove_session_url"] ?? null) == true)) {
                        // line 9
                        echo "                        <a style=\"cursor:default\">
                    ";
                    } else {
                        // line 11
                        echo "                        <a href=\"";
                        echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", array()));
                        echo "\">
                    ";
                    }
                    // line 13
                    echo "                        <img id=\"session_img_";
                    echo $this->getAttribute($context["row"], "id", array());
                    echo "\" src=\"";
                    echo Template::get_icon_path("window_list.png", 32);
                    echo "\" width=\"32\" height=\"32\"
                             alt=\"";
                    // line 14
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\">
                        ";
                    // line 15
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "
                    </a>
                ";
                } elseif (($this->getAttribute(                // line 17
$context["row"], "course_list_session_style", array()) == 2)) {
                    // line 18
                    echo "                    ";
                    // line 19
                    echo "                    <img id=\"session_img_";
                    echo $this->getAttribute($context["row"], "id", array());
                    echo "\" src=\"";
                    echo Template::get_icon_path("window_list.png", 32);
                    echo "\" width=\"32\" height=\"32\"
                         alt=\"";
                    // line 20
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\">
                    ";
                    // line 21
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "
                ";
                } elseif (($this->getAttribute(                // line 22
$context["row"], "course_list_session_style", array()) == 3)) {
                    // line 23
                    echo "                    ";
                    // line 24
                    echo "                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#page-content\" href=\"#collapse_";
                    echo $this->getAttribute($context["row"], "id", array());
                    echo "\"
                       aria-expanded=\"false\">
                        <img id=\"session_img_";
                    // line 26
                    echo $this->getAttribute($context["row"], "id", array());
                    echo "\" src=\"";
                    echo Template::get_icon_path("window_list.png", 32);
                    echo "\" width=\"32\" height=\"32\"
                             alt=\"";
                    // line 27
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "\">
                        ";
                    // line 28
                    echo $this->getAttribute($context["row"], "title", array());
                    echo "
                    </a>
                    ";
                    // line 30
                    $context["collapsable"] = "collapse";
                    // line 31
                    echo "                ";
                }
                // line 32
                echo "                ";
                if ($this->getAttribute($context["row"], "show_actions", array())) {
                    // line 33
                    echo "                    <div class=\"pull-right\">
                        <a href=\"";
                    // line 34
                    echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/resume_session.php?id_session=") . $this->getAttribute($context["row"], "id", array()));
                    echo "\">
                            <img src=\"";
                    // line 35
                    echo Template::get_icon_path("edit.png", 22);
                    echo "\" width=\"22\" height=\"22\" alt=\"";
                    echo get_lang("Edit");
                    echo "\"
                                 title=\"";
                    // line 36
                    echo get_lang("Edit");
                    echo "\">
                        </a>
                    </div>
                ";
                }
                // line 40
                echo "            </div>
            <div class=\"session panel-body ";
                // line 41
                echo ($context["collapsable"] ?? null);
                echo "\" id=\"collapse_";
                echo $this->getAttribute($context["row"], "id", array());
                echo "\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
                // line 44
                if (($this->getAttribute($context["row"], "description", array()) != "")) {
                    // line 45
                    echo "                            ";
                    echo $this->getAttribute($context["row"], "description", array());
                    echo "
                        ";
                }
                // line 47
                echo "                        <ul class=\"info-session list-inline\">
                            ";
                // line 48
                if ($this->getAttribute($context["row"], "coach_name", array())) {
                    // line 49
                    echo "                                <li>
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    ";
                    // line 51
                    echo $this->getAttribute($context["row"], "coach_name", array());
                    echo "
                                </li>
                            ";
                }
                // line 54
                echo "
                            <li>
                                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                                ";
                // line 57
                echo (($this->getAttribute($context["row"], "date", array())) ? ($this->getAttribute($context["row"], "date", array())) : ($this->getAttribute($context["row"], "duration", array())));
                echo "
                            </li>
                        </ul>
                        <div class=\"sessions-items\">
                            ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "courses", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 62
                    echo "                                <div class=\"courses\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2\">
                                            <a href=\"";
                    // line 65
                    echo $this->getAttribute($context["item"], "link", array());
                    echo "\" class=\"thumbnail\">
                                                <img class=\"img-responsive\"
                                                     src=\"";
                    // line 67
                    echo (($this->getAttribute($context["item"], "thumbnails", array())) ? ($this->getAttribute($context["item"], "thumbnails", array())) : ($this->getAttribute($context["item"], "icon", array())));
                    echo "\">
                                            </a>
                                        </div>
                                        <div class=\"col-md-10\">
                                            <h4>";
                    // line 71
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</h4>
                                            <div class=\"list-teachers\">
                                                ";
                    // line 73
                    if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "coaches", array())) > 0)) {
                        // line 74
                        echo "                                                    <img src=\"";
                        echo Template::get_icon_path("teacher.png", 16);
                        echo "\" width=\"16\" height=\"16\">
                                                    ";
                        // line 75
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "coaches", array()));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
                            // line 76
                            echo "                                                        ";
                            echo ((($this->getAttribute($context["loop"], "index", array()) > 1)) ? (" | ") : (""));
                            echo "
                                                        <a href=\"";
                            // line 77
                            echo (($this->getAttribute(($context["_p"] ?? null), "web_ajax", array()) . "user_manager.ajax.php?") . twig_urlencode_filter(array("a" => "get_user_popup", "user_id" => $this->getAttribute($context["coach"], "user_id", array()))));
                            echo "\"
                                                           data-title=\"";
                            // line 78
                            echo $this->getAttribute($context["coach"], "full_name", array());
                            echo "\" class=\"ajax\">
                                                            ";
                            // line 79
                            echo $this->getAttribute($context["coach"], "firstname", array());
                            echo ", ";
                            echo $this->getAttribute($context["coach"], "lastname", array());
                            echo "
                                                        </a>
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 82
                        echo "                                                ";
                    }
                    // line 83
                    echo "                                            </div>
                                        </div>

                                        ";
                    // line 86
                    if ($this->getAttribute($context["item"], "student_info", array())) {
                        // line 87
                        echo "                                            ";
                        if (( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array())) &&  !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array())))) {
                            // line 88
                            echo "                                                <div class=\"course-student-info\">
                                                    <div class=\"student-info\">

                                                        ";
                            // line 91
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array()))) {
                                // line 92
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseProgressX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "progress", array()));
                                echo "
                                                        ";
                            }
                            // line 94
                            echo "
                                                        ";
                            // line 95
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array()))) {
                                // line 96
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseScoreX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "score", array()));
                                echo "
                                                        ";
                            }
                            // line 98
                            echo "
                                                        ";
                            // line 99
                            if ( !(null === $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "certificate", array()))) {
                                // line 100
                                echo "                                                        ";
                                echo sprintf(get_lang("StudentCourseCertificateX"), $this->getAttribute($this->getAttribute($context["item"], "student_info", array()), "certificate", array()));
                                echo "
                                                        ";
                            }
                            // line 102
                            echo "
                                                    </div>
                                                </div>
                                            ";
                        }
                        // line 106
                        echo "                                        ";
                    }
                    // line 107
                    echo "                                    </div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 115
                echo "            <div class=\"panel-heading\">
                <a href=\"";
                // line 116
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", array()));
                echo "\">
                    <img id=\"session_img_";
                // line 117
                echo $this->getAttribute($context["row"], "id", array());
                echo "\" src=\"";
                echo Template::get_icon_path("window_list.png", 32);
                echo "\" alt=\"";
                echo $this->getAttribute($context["row"], "title", array());
                echo "\"
                         title=\"";
                // line 118
                echo $this->getAttribute($context["row"], "title", array());
                echo "\">
                    ";
                // line 119
                echo $this->getAttribute($context["row"], "title", array());
                echo "
                </a>
            </div>
            <!-- view simple info -->
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <a class=\"thumbnail\" href=\"";
                // line 126
                echo (($this->getAttribute(($context["_p"] ?? null), "web_main", array()) . "session/index.php?session_id=") . $this->getAttribute($context["row"], "id", array()));
                echo "\">
                            <img class=\"img-responsive\"
                                 src=\"";
                // line 128
                echo (($this->getAttribute($context["row"], "image", array())) ? (($this->getAttribute(($context["_p"] ?? null), "web_upload", array()) . $this->getAttribute($context["row"], "image", array()))) : (Template::get_icon_path("session_default.png")));
                echo "\"
                                 alt=\"";
                // line 129
                echo $this->getAttribute($context["row"], "title", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["row"], "title", array());
                echo "\">
                        </a>
                    </div>
                    <div class=\"col-md-10\">
                        <div class=\"info-session\">
                            <p>";
                // line 134
                echo $this->getAttribute($context["row"], "subtitle", array());
                echo "</p>
                            ";
                // line 135
                if (($this->getAttribute($context["row"], "description", array()) != "")) {
                    // line 136
                    echo "                                <div class=\"description\">
                                    ";
                    // line 137
                    echo $this->getAttribute($context["row"], "description", array());
                    echo "
                                </div>
                            ";
                }
                // line 140
                echo "                        </div>
                    </div>
                </div>
            </div>
            <!-- end view simple info -->
        ";
            }
            // line 146
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/user_portal/classic_session.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 146,  408 => 140,  402 => 137,  399 => 136,  397 => 135,  393 => 134,  383 => 129,  379 => 128,  374 => 126,  364 => 119,  360 => 118,  352 => 117,  348 => 116,  345 => 115,  338 => 110,  330 => 107,  327 => 106,  321 => 102,  315 => 100,  313 => 99,  310 => 98,  304 => 96,  302 => 95,  299 => 94,  293 => 92,  291 => 91,  286 => 88,  283 => 87,  281 => 86,  276 => 83,  273 => 82,  254 => 79,  250 => 78,  246 => 77,  241 => 76,  224 => 75,  219 => 74,  217 => 73,  212 => 71,  205 => 67,  200 => 65,  195 => 62,  191 => 61,  184 => 57,  179 => 54,  173 => 51,  169 => 49,  167 => 48,  164 => 47,  158 => 45,  156 => 44,  148 => 41,  145 => 40,  138 => 36,  132 => 35,  128 => 34,  125 => 33,  122 => 32,  119 => 31,  117 => 30,  112 => 28,  106 => 27,  100 => 26,  94 => 24,  92 => 23,  90 => 22,  86 => 21,  80 => 20,  73 => 19,  71 => 18,  69 => 17,  64 => 15,  58 => 14,  51 => 13,  45 => 11,  41 => 9,  38 => 8,  36 => 7,  34 => 6,  31 => 5,  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/user_portal/classic_session.tpl", "/var/www/html/cursos_online/main/template/default/user_portal/classic_session.tpl");
    }
}
