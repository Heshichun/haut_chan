<?php

/* post_reply.html */
class __TwigTemplate_47f7916cf83a7d729a6bd63113f6d433244194ec7eb74c3472170e6c0c04e257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_4136ab67d561c06dca73b5b79fdfc78c7e6697301c08d80a37300245b1a87f79' => array($this, 'block___internal_4136ab67d561c06dca73b5b79fdfc78c7e6697301c08d80a37300245b1a87f79'),
            '__internal_25c085d1481c5a5c1b33bcccc8649e1c417bc34af42d37c68a08ede9b1d86737' => array($this, 'block___internal_25c085d1481c5a5c1b33bcccc8649e1c417bc34af42d37c68a08ede9b1d86737'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_4136ab67d561c06dca73b5b79fdfc78c7e6697301c08d80a37300245b1a87f79", $context, $blocks));
        // line 21
        if ((isset($context["index"]) ? $context["index"] : null)) {
            echo truncate($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "body"), $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link"));
        } else {
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "body");
        }
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_25c085d1481c5a5c1b33bcccc8649e1c417bc34af42d37c68a08ede9b1d86737", $context, $blocks));
    }

    // line 1
    public function block___internal_4136ab67d561c06dca73b5b79fdfc78c7e6697301c08d80a37300245b1a87f79($context, array $blocks = array())
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
    public function block___internal_25c085d1481c5a5c1b33bcccc8649e1c417bc34af42d37c68a08ede9b1d86737($context, array $blocks = array())
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
        return array (  134 => 25,  128 => 23,  125 => 22,  122 => 21,  113 => 20,  111 => 19,  107 => 18,  94 => 16,  82 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  61 => 8,  57 => 7,  50 => 6,  44 => 5,  38 => 3,  35 => 1,  26 => 21,  24 => 1,);
    }
}
