<?php

/* post_reply.html */
class __TwigTemplate_0c0ea40a8b87cfe414ac46b8d966c0c60145b214ab4a539f37da6d6a60e96a98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_5e68eb0388e21ed0f0944adbe455c2ac0558182ed529bb16badabf1730933443' => array($this, 'block___internal_5e68eb0388e21ed0f0944adbe455c2ac0558182ed529bb16badabf1730933443'),
            '__internal_3f163521ba58782f42e70219a8077c84eec5d9954a13b1ee3032f9cb08437db0' => array($this, 'block___internal_3f163521ba58782f42e70219a8077c84eec5d9954a13b1ee3032f9cb08437db0'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_5e68eb0388e21ed0f0944adbe455c2ac0558182ed529bb16badabf1730933443", $context, $blocks));
        // line 21
        if ((isset($context["index"]) ? $context["index"] : null)) {
            echo truncate($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "body"), $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link"));
        } else {
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "body");
        }
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_3f163521ba58782f42e70219a8077c84eec5d9954a13b1ee3032f9cb08437db0", $context, $blocks));
    }

    // line 1
    public function block___internal_5e68eb0388e21ed0f0944adbe455c2ac0558182ed529bb16badabf1730933443($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"post reply\" id=\"reply_";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "\">
<p class=\"intro\">
\t";
        // line 5
        if ((!(isset($context["index"]) ? $context["index"] : null))) {
            echo "<a id=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
            echo "\" class=\"post_anchor\"></a>";
        }
        // line 6
        echo "\t<input type=\"checkbox\" class=\"delete\" name=\"delete_";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "\" id=\"delete_";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "\" />
\t<label for=\"delete_";
        // line 7
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
        echo "\">
\t\t";
        // line 8
        $this->env->loadTemplate("post/subject.html")->display($context);
        // line 9
        echo "\t\t";
        $this->env->loadTemplate("post/name.html")->display($context);
        // line 10
        echo "\t\t";
        $this->env->loadTemplate("post/ip.html")->display($context);
        // line 11
        echo "\t\t";
        $this->env->loadTemplate("post/flag.html")->display($context);
        // line 12
        echo "\t\t";
        $this->env->loadTemplate("post/time.html")->display($context);
        // line 13
        echo "\t</label>
\t";
        // line 14
        $this->env->loadTemplate("post/poster_id.html")->display($context);
        echo "&nbsp;
\t<a class=\"post_no\" id=\"post_no_";
        // line 15
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
        // line 16
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
\t</p>
    ";
        // line 18
        $this->env->loadTemplate("post/fileinfo.html")->display($context);
        echo " 
    ";
        // line 19
        $this->env->loadTemplate("post/post_controls.html")->display($context);
        // line 20
        echo "\t<div class=\"body\" ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "files")) > 1)) {
            echo "style=\"clear:both\"";
        }
        echo ">
\t\t";
    }

    // line 21
    public function block___internal_3f163521ba58782f42e70219a8077c84eec5d9954a13b1ee3032f9cb08437db0($context, array $blocks = array())
    {
        // line 22
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "ban message", array(), "array")) {
            // line 23
            echo "\t\t\t";
            echo sprintf($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "ban_message"), $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "ban message", array(), "array"));
            echo "
\t\t";
        }
        // line 25
        echo "\t</div>
</div>
<br/>
";
    }

    public function getTemplateName()
    {
        return "post_reply.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 20,  111 => 19,  107 => 18,  82 => 15,  78 => 14,  75 => 13,  66 => 10,  50 => 6,  44 => 5,  246 => 61,  228 => 58,  202 => 51,  189 => 48,  177 => 46,  174 => 45,  172 => 44,  168 => 42,  157 => 39,  144 => 36,  131 => 32,  105 => 25,  90 => 21,  57 => 7,  68 => 15,  46 => 9,  43 => 8,  37 => 6,  69 => 11,  61 => 8,  59 => 14,  47 => 8,  32 => 5,  150 => 45,  139 => 41,  132 => 39,  125 => 22,  122 => 21,  116 => 28,  110 => 32,  108 => 31,  97 => 27,  88 => 20,  85 => 19,  73 => 17,  58 => 12,  55 => 12,  45 => 7,  36 => 7,  29 => 4,  27 => 3,  71 => 16,  63 => 9,  60 => 14,  49 => 10,  41 => 7,  38 => 3,  30 => 5,  28 => 4,  167 => 37,  149 => 34,  147 => 37,  142 => 35,  137 => 30,  134 => 25,  128 => 23,  120 => 25,  118 => 29,  112 => 22,  103 => 30,  101 => 29,  94 => 16,  92 => 22,  87 => 15,  81 => 13,  79 => 20,  70 => 10,  64 => 8,  62 => 14,  51 => 11,  34 => 6,  31 => 4,  25 => 2,  22 => 1,  348 => 89,  345 => 87,  341 => 85,  336 => 84,  333 => 79,  330 => 78,  327 => 77,  321 => 75,  318 => 74,  315 => 69,  313 => 68,  310 => 67,  308 => 66,  305 => 65,  299 => 63,  296 => 62,  293 => 61,  287 => 59,  284 => 58,  273 => 56,  270 => 55,  267 => 54,  256 => 52,  253 => 51,  242 => 49,  239 => 48,  236 => 47,  230 => 59,  226 => 43,  223 => 42,  220 => 41,  217 => 55,  211 => 38,  207 => 53,  204 => 52,  201 => 34,  198 => 33,  192 => 31,  188 => 29,  185 => 28,  182 => 27,  179 => 26,  173 => 24,  169 => 22,  166 => 21,  164 => 20,  152 => 35,  140 => 31,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  124 => 13,  121 => 30,  119 => 11,  115 => 23,  109 => 21,  100 => 8,  98 => 7,  95 => 23,  89 => 5,  83 => 4,  80 => 3,  77 => 1,  72 => 12,  67 => 14,  52 => 11,  35 => 1,  33 => 4,  26 => 21,  24 => 1,);
    }
}
