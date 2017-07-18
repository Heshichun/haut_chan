<?php

/* mod/recent_posts.html */
class __TwigTemplate_6751476666176ccaeda2d8eec8b45d3de919c16492f8e2dbef31b3fc7d68e62b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "additional_javascript_url");
        echo "js/mod/recent_posts.js\"></script>
";
        // line 2
        if ((!count((isset($context["posts"]) ? $context["posts"] : null)))) {
            // line 3
            echo "\t<p style=\"text-align:center\" class=\"unimportant\">(";
            echo gettext("There are no active posts.");
            echo ")</p>
";
        } else {
            // line 5
            echo "\t<h4>Viewing last ";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null));
            echo " posts</h4>
\t<p>View <a href=\"?/recent/25\"> 25 </a>|<a href=\"?/recent/50\"> 50 </a>|<a href=\"?/recent/100\"> 100 </a></p>
\t<a href=\"javascript:void(0)\" id=\"erase-local-data\" style=\"float:right; clear:both\">Erase local data</a></div>
\t";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 9
                echo "\t\t";
                if ((!$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thread"))) {
                    // line 10
                    echo "\t\t\t";
                    $context["thread"] = $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
                    // line 11
                    echo "\t\t";
                } else {
                    // line 12
                    echo "\t\t\t";
                    $context["thread"] = $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thread");
                    // line 13
                    echo "\t\t";
                }
                // line 14
                echo "\t\t<div class=\"post-wrapper\" data-board=\"";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "board");
                echo "\"><hr/><a class=\"eita-link\" id=\"eita-";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "board");
                echo "-";
                echo (isset($context["thread"]) ? $context["thread"] : null);
                echo "\" href=\"?/";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "board");
                echo "/";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "dir"), "res");
                echo (isset($context["thread"]) ? $context["thread"] : null);
                echo ".html#";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
                echo "\">/";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "board");
                echo "/";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
                echo "</a><br>
\t\t\t";
                // line 15
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "built");
                echo "
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 19
        echo "<a href=\"/mod.php?/recent/";
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null));
        echo "&amp;last=";
        echo twig_escape_filter($this->env, (isset($context["last_time"]) ? $context["last_time"] : null));
        echo "\">Next ";
        echo (isset($context["limit"]) ? $context["limit"] : null);
        echo " posts</a>
";
    }

    public function getTemplateName()
    {
        return "mod/recent_posts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  81 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  42 => 8,  35 => 5,  29 => 3,  27 => 2,  22 => 1,);
    }
}
