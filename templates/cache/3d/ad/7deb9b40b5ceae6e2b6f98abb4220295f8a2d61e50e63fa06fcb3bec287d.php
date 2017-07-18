<?php

/* post_thread.html */
class __TwigTemplate_3dad7deb9b40b5ceae6e2b6f98abb4220295f8a2d61e50e63fa06fcb3bec287d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_c8d742ee7eae91a5d8331edad0093a79bd3f0d14a9b02f804015def59697d70e' => array($this, 'block___internal_c8d742ee7eae91a5d8331edad0093a79bd3f0d14a9b02f804015def59697d70e'),
            '__internal_cab11264f4b195dc3ae986daabc366aa5b8757b33a909788eef0b48534cc34cf' => array($this, 'block___internal_cab11264f4b195dc3ae986daabc366aa5b8757b33a909788eef0b48534cc34cf'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_c8d742ee7eae91a5d8331edad0093a79bd3f0d14a9b02f804015def59697d70e", $context, $blocks));
        // line 61
        if ((isset($context["index"]) ? $context["index"] : null)) {
            echo truncate($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "body"), $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link"));
        } else {
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "body");
        }
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_cab11264f4b195dc3ae986daabc366aa5b8757b33a909788eef0b48534cc34cf", $context, $blocks));
        // line 90
        $context["hr"] = $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "hr");
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "posts"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 92
            echo "\t";
            $this->env->loadTemplate("post_reply.html")->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "<br class=\"clear\"/>";
        if ((isset($context["hr"]) ? $context["hr"] : null)) {
            echo "<hr/>";
        }
        // line 95
        echo "</div>
";
    }

    // line 1
    public function block___internal_c8d742ee7eae91a5d8331edad0093a79bd3f0d14a9b02f804015def59697d70e($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"thread\" id=\"thread_";
        // line 4
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "\" data-board=\"";
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
        echo "\">
";
        // line 5
        if ((!(isset($context["index"]) ? $context["index"] : null))) {
            echo "<a id=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
            echo "\" class=\"post_anchor\"></a>";
        }
        // line 6
        echo "
";
        // line 7
        $this->env->loadTemplate("post/fileinfo.html")->display($context);
        // line 8
        echo "<div class=\"post op\" id=\"op_";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "\" ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "num_files") > 1)) {
            echo "style='clear:both'";
        }
        echo "><p class=\"intro\">
\t<input type=\"checkbox\" class=\"delete\" name=\"delete_";
        // line 9
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "\" id=\"delete_";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "\" />
\t<label for=\"delete_";
        // line 10
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "\">
\t\t";
        // line 11
        $this->env->loadTemplate("post/subject.html")->display($context);
        // line 12
        echo "\t\t";
        $this->env->loadTemplate("post/name.html")->display($context);
        // line 13
        echo "\t\t";
        $this->env->loadTemplate("post/ip.html")->display($context);
        // line 14
        echo "\t\t";
        $this->env->loadTemplate("post/flag.html")->display($context);
        // line 15
        echo "\t\t";
        $this->env->loadTemplate("post/time.html")->display($context);
        // line 16
        echo "\t</label>
\t";
        // line 17
        $this->env->loadTemplate("post/poster_id.html")->display($context);
        echo "&nbsp;
\t<a class=\"post_no\" id=\"post_no_";
        // line 18
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "\" onclick=\"highlightReply(";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo ")\" href=\"";
        if ((isset($context["isnoko50"]) ? $context["isnoko50"] : null)) {
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link", array(0 => "", 1 => "50"), "method");
        } else {
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link");
        }
        echo "\">No.</a>
\t<a class=\"post_no\" onclick=\"citeReply(";
        // line 19
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo ")\" href=\"";
        if ((isset($context["isnoko50"]) ? $context["isnoko50"] : null)) {
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link", array(0 => "q", 1 => "50"), "method");
        } else {
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link", array(0 => "q"), "method");
        }
        echo "\">";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "</a>
\t";
        // line 20
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "sticky")) {
            // line 21
            echo "\t\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "font_awesome")) {
                // line 22
                echo "\t\t\t<i class=\"fa fa-thumb-tack\" title=\"Sticky\"></i>
\t\t";
            } else {
                // line 24
                echo "\t\t\t<img class=\"icon\" title=\"Sticky\" src=\"";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_sticky");
                echo "\" alt=\"Sticky\" />
\t\t";
            }
            // line 26
            echo "\t";
        }
        // line 27
        echo "\t";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "locked")) {
            // line 28
            echo "\t\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "font_awesome")) {
                // line 29
                echo "\t\t\t<i class=\"fa fa-lock\" title=\"Locked\"></i>
\t\t";
            } else {
                // line 31
                echo "\t\t\t<img class=\"icon\" title=\"Locked\" src=\"";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_locked");
                echo "\" alt=\"Locked\" />
\t\t";
            }
            // line 33
            echo "\t";
        }
        // line 34
        echo "\t";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "bumplocked") && (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "view_bumplock") < 0) || ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod") && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "view_bumplock"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri")))))) {
            // line 35
            echo "\t\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "font_awesome")) {
                // line 36
                echo "\t\t\t<i class=\"fa fa-anchor\" title=\"Bumplocked\"></i>
\t\t";
            } else {
                // line 38
                echo "\t\t\t<img class=\"icon\" title=\"Bumplocked\" src=\"";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_bumplocked");
                echo "\" alt=\"Bumplocked\" />
\t\t";
            }
            // line 40
            echo "\t";
        }
        // line 41
        echo "\t";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "cycle")) {
            // line 42
            echo "\t\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "font_awesome")) {
                // line 43
                echo "\t\t\t<i class=\"fa fa-refresh\" title=\"Cyclical\"></i>
\t\t";
            } else {
                // line 45
                echo "\t\t\t<img class=\"icon\" title=\"Cyclical\" src=\"";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_sticky");
                echo "\" alt=\"Cyclical\" />
\t\t";
            }
            // line 47
            echo "\t";
        }
        // line 48
        echo "\t";
        if ((isset($context["index"]) ? $context["index"] : null)) {
            // line 49
            echo "\t\t<a href=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "root");
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir");
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "dir"), "res");
            echo link_for((isset($context["post"]) ? $context["post"] : null));
            echo "\">[";
            echo gettext("Reply");
            echo "]</a>
\t";
        }
        // line 51
        echo "\t";
        if ((isset($context["isnoko50"]) ? $context["isnoko50"] : null)) {
            // line 52
            echo "\t\t<a href=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "root");
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir");
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "dir"), "res");
            echo link_for((isset($context["post"]) ? $context["post"] : null));
            echo "\">[";
            echo gettext("View All");
            echo "]</a>
\t";
        }
        // line 54
        echo "\t";
        if (((isset($context["hasnoko50"]) ? $context["hasnoko50"] : null) && (!(isset($context["isnoko50"]) ? $context["isnoko50"] : null)))) {
            // line 55
            echo "\t\t";
            $context["lastcount"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "noko50_count");
            // line 56
            echo "\t\t<a href=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "root");
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir");
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "dir"), "res");
            echo link_for((isset($context["post"]) ? $context["post"] : null), true);
            echo "\">[";
            echo strtr(ngettext("Last 1 Post", "Last %count% Posts", abs((isset($context["lastcount"]) ? $context["lastcount"] : null))), array("%count%" => abs((isset($context["lastcount"]) ? $context["lastcount"] : null)), ));
            echo "]</a>
\t";
        }
        // line 58
        echo "\t";
        $this->env->loadTemplate("post/post_controls.html")->display($context);
        // line 59
        echo "\t</p>
\t<div class=\"body\">
\t\t";
    }

    // line 61
    public function block___internal_cab11264f4b195dc3ae986daabc366aa5b8757b33a909788eef0b48534cc34cf($context, array $blocks = array())
    {
        // line 62
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "ban message", array(), "array")) {
            // line 63
            echo "\t\t\t";
            echo sprintf($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "ban_message"), $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "ban message", array(), "array"));
            echo "
\t\t";
        }
        // line 65
        echo "\t</div>
\t";
        // line 66
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "omitted") || $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "omitted_images"))) {
            // line 67
            echo "\t\t<span class=\"omitted\">
\t\t\t";
            // line 68
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "omitted")) {
                // line 69
                echo "\t\t\t\t";
                echo strtr(ngettext("1 post", "%count% posts", abs($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "omitted"))), array("%count%" => abs($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "omitted")), ));
                // line 74
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "omitted_images")) {
                    // line 75
                    echo "\t\t\t\t\t ";
                    echo gettext("and");
                    echo " 
\t\t\t\t";
                }
                // line 77
                echo "\t\t\t";
            }
            // line 78
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "omitted_images")) {
                // line 79
                echo "\t\t\t\t";
                echo strtr(ngettext("1 image reply", "%count% image replies", abs($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "omitted_images"))), array("%count%" => abs($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "omitted_images")), ));
                // line 84
                echo "\t\t\t";
            }
            echo " ";
            echo gettext("omitted. Click reply to view.");
            // line 85
            echo "\t\t</span>
\t";
        }
        // line 87
        if ((!(isset($context["index"]) ? $context["index"] : null))) {
        }
        // line 89
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "post_thread.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 89,  345 => 87,  341 => 85,  336 => 84,  333 => 79,  330 => 78,  327 => 77,  321 => 75,  318 => 74,  315 => 69,  313 => 68,  310 => 67,  308 => 66,  305 => 65,  299 => 63,  296 => 62,  293 => 61,  287 => 59,  284 => 58,  273 => 56,  270 => 55,  267 => 54,  256 => 52,  253 => 51,  242 => 49,  239 => 48,  236 => 47,  230 => 45,  226 => 43,  223 => 42,  220 => 41,  217 => 40,  211 => 38,  207 => 36,  204 => 35,  201 => 34,  198 => 33,  192 => 31,  188 => 29,  185 => 28,  182 => 27,  179 => 26,  173 => 24,  169 => 22,  166 => 21,  164 => 20,  152 => 19,  140 => 18,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  124 => 13,  121 => 12,  119 => 11,  115 => 10,  109 => 9,  100 => 8,  98 => 7,  95 => 6,  89 => 5,  83 => 4,  80 => 3,  77 => 1,  72 => 95,  67 => 94,  52 => 92,  35 => 91,  33 => 90,  26 => 61,  24 => 1,);
    }
}
