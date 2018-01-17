<?php

/* default/layout/hot_course_item.tpl */
class __TwigTemplate_3559c6bef686123f61a41f7a682722c7917e8ad963fe8512b199f5d8a912dbe3 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["hot_courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["item"], "title", array())) {
                // line 3
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"items items-hotcourse\">
                
                <div class=\"image\">
                    ";
                // line 7
                if ($this->getAttribute($context["item"], "is_registerd", array())) {
                    // line 8
                    echo "                        <a title=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["item"], "course_public_url", array());
                    echo "\">
                            <img src=\"";
                    // line 9
                    echo $this->getAttribute($context["item"], "course_image_large", array());
                    echo "\" class=\"img-responsive\" alt=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\">
                        </a>
                    ";
                } else {
                    // line 12
                    echo "                        <img src=\"";
                    echo $this->getAttribute($context["item"], "course_image_large", array());
                    echo "\" class=\"img-responsive\" alt=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\">
                    ";
                }
                // line 14
                echo "                    ";
                if (($this->getAttribute($context["item"], "categoryName", array()) != "")) {
                    // line 15
                    echo "                        <span class=\"category\">";
                    echo $this->getAttribute($context["item"], "categoryName", array());
                    echo "</span>
                        <div class=\"cribbon\"></div>
                    ";
                }
                // line 18
                echo "                    <div class=\"user-actions\">";
                echo $this->getAttribute($context["item"], "description_button", array());
                echo "</div>
                </div>
                <div class=\"description\">
                    <div class=\"block-title\">
                        ";
                // line 22
                if ($this->getAttribute($context["item"], "is_registerd", array())) {
                    // line 23
                    echo "                            <h4 class=\"title\">
                                <a alt=\"";
                    // line 24
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["item"], "course_public_url", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "title_cut", array());
                    echo "</a>
                            </h4>
                        ";
                } else {
                    // line 27
                    echo "                            <h4 class=\"title\" title=\"";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "\">
                                ";
                    // line 28
                    echo $this->getAttribute($context["item"], "title_cut", array());
                    echo "
                            </h4>
                        ";
                }
                // line 31
                echo "                    </div>
                    <div class=\"ranking\">
                        ";
                // line 33
                echo $this->getAttribute($context["item"], "rating_html", array());
                echo "
                    </div>
                    <div class=\"block-author\">
                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "teachers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                    // line 37
                    echo "                        
                            ";
                    // line 38
                    if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "teachers", array())) > 2)) {
                        // line 39
                        echo "                                <a href=\"";
                        echo $this->getAttribute($context["teacher"], "url", array());
                        echo "\" class=\"ajax\" data-title=\"";
                        echo $this->getAttribute($context["teacher"], "firstname", array());
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", array());
                        echo "\">
                                    <img src=\"";
                        // line 40
                        echo $this->getAttribute($context["teacher"], "avatar", array());
                        echo "\" alt=\"";
                        echo get_lang("TeacherPicture");
                        echo "\" />
                                </a>
                            ";
                    } else {
                        // line 43
                        echo "                                <a href=\"";
                        echo $this->getAttribute($context["teacher"], "url", array());
                        echo "\" class=\"ajax\" data-title=\"";
                        echo $this->getAttribute($context["teacher"], "firstname", array());
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", array());
                        echo "\">
                                    <img src=\"";
                        // line 44
                        echo $this->getAttribute($context["teacher"], "avatar", array());
                        echo "\" alt=\"";
                        echo get_lang("TeacherPicture");
                        echo "\" />
                                </a>
                                <div class=\"teachers-details\">
                                    <h5>
                                        <a href=\"";
                        // line 48
                        echo $this->getAttribute($context["teacher"], "url", array());
                        echo "\" class=\"ajax\" data-title=\"";
                        echo $this->getAttribute($context["teacher"], "firstname", array());
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", array());
                        echo "\">
                                            ";
                        // line 49
                        echo $this->getAttribute($context["teacher"], "firstname", array());
                        echo " ";
                        echo $this->getAttribute($context["teacher"], "lastname", array());
                        echo "
                                        </a>
                                    </h5>
                                    <p>";
                        // line 52
                        echo get_lang("Teacher");
                        echo "</p>
                                </div>
                            ";
                    }
                    // line 55
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                    </div>
                    <div class=\"toolbar\">
                        <div class=\"left\">
                            ";
                // line 59
                if ($this->getAttribute($context["item"], "price", array())) {
                    // line 60
                    echo "                                ";
                    echo $this->getAttribute($context["item"], "price", array());
                    echo "
                            ";
                }
                // line 62
                echo "                        </div>
                        <div class=\"right\">
                            <div class=\"btn-group\" role=\"group\">
                                ";
                // line 65
                echo $this->getAttribute($context["item"], "register_button", array());
                echo "
                                ";
                // line 66
                echo $this->getAttribute($context["item"], "unsubscribe_button", array());
                echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/layout/hot_course_item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 66,  203 => 65,  198 => 62,  192 => 60,  190 => 59,  185 => 56,  179 => 55,  173 => 52,  165 => 49,  157 => 48,  148 => 44,  139 => 43,  131 => 40,  122 => 39,  120 => 38,  117 => 37,  113 => 36,  107 => 33,  103 => 31,  97 => 28,  92 => 27,  80 => 24,  77 => 23,  75 => 22,  67 => 18,  60 => 15,  57 => 14,  49 => 12,  41 => 9,  34 => 8,  32 => 7,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/hot_course_item.tpl", "/var/www/html/cursos_online/main/template/default/layout/hot_course_item.tpl");
    }
}
