<?php

/* thread.html */
class __TwigTemplate_494f4c1aadc62544064aeb57b9cf89c9575af9e488ca22278827f1b97dbabdd5 extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">

        <script type=\"text/javascript\">
          var active_page = \"thread\"
\t    , board_name = \"";
        // line 8
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
        echo "\"
\t    , thread_id = \"";
        // line 9
        echo $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id");
        echo "\";
\t</script>

\t";
        // line 12
        $this->env->loadTemplate("header.html")->display($context);
        // line 13
        echo "
\t";
        // line 14
        ob_start();
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "thread_subject_in_title") && $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "subject"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "subject"));
        } else {
            echo twig_escape_filter($this->env, remove_modifiers(twig_slice($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "body_nomarkup"), 0, 256)));
        }
        $context["meta_subject"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
\t<meta name=\"description\" content=\"";
        // line 16
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "url");
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "title"));
        echo " - ";
        echo (isset($context["meta_subject"]) ? $context["meta_subject"] : null);
        echo "\" />
\t<meta name=\"twitter:card\" value=\"summary\">
\t<meta property=\"og:title\" content=\"";
        // line 18
        echo (isset($context["meta_subject"]) ? $context["meta_subject"] : null);
        echo "\" />
\t<meta property=\"og:type\" content=\"article\" />
\t<meta property=\"og:url\" content=\"";
        // line 20
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "domain");
        echo "/";
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
        echo "/";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "dir"), "res");
        echo $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id");
        echo ".html\" />
\t";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "files"), 0), "thumb")) {
            echo "<meta property=\"og:image\" content=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "domain");
            echo "/";
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
            echo "/";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "dir"), "thumb");
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "files"), 0), "thumb");
            echo "\" />";
        }
        // line 22
        echo "\t<meta property=\"og:description\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "body_nomarkup"));
        echo "\" />

\t<title>";
        // line 24
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "url");
        echo " - ";
        echo (isset($context["meta_subject"]) ? $context["meta_subject"] : null);
        echo "</title>
</head>
<body class=\"8chan vichan ";
        // line 26
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            echo "is-moderator";
        } else {
            echo "is-not-moderator";
        }
        echo " active-thread\" data-stylesheet=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1) != "")) {
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1);
        } else {
            echo "default";
        }
        echo "\">
\t";
        // line 27
        echo $this->getAttribute((isset($context["boardlist"]) ? $context["boardlist"] : null), "top");
        echo "
\t<a name=\"top\"></a>
\t";
        // line 29
        if ((isset($context["pm"]) ? $context["pm"] : null)) {
            echo "<div class=\"top_notice\">You have <a href=\"?/PM/";
            echo $this->getAttribute((isset($context["pm"]) ? $context["pm"] : null), "id");
            echo "\">an unread PM</a>";
            if (($this->getAttribute((isset($context["pm"]) ? $context["pm"] : null), "waiting") > 0)) {
                echo ", plus ";
                echo $this->getAttribute((isset($context["pm"]) ? $context["pm"] : null), "waiting");
                echo " more waiting";
            }
            echo ".</div><hr />";
        }
        // line 30
        echo "\t";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url_banner")) {
            echo "<img class=\"board_image\" src=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url_banner");
            echo "\" ";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "banner_width") || $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "banner_height"))) {
                echo "style=\"";
                if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "banner_width")) {
                    echo "width:";
                    echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "banner_width");
                    echo "px";
                }
                echo ";";
                if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "banner_width")) {
                    echo "height:";
                    echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "banner_height");
                    echo "px";
                }
                echo "\" ";
            }
            echo "alt=\"\" />";
        }
        // line 31
        echo "\t<header>
\t\t<h1>";
        // line 32
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "url");
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "title"));
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 34
        if ($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "subtitle")) {
            // line 35
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "allow_subtitle_html")) {
                // line 36
                echo "\t\t\t\t\t";
                echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "subtitle");
                echo "
\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "subtitle"));
                echo "
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t";
        }
        // line 41
        echo "\t\t\t";
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 42
        echo "\t\t</div>
\t</header>

\t";
        // line 45
        $this->env->loadTemplate("attention_bar.html")->display($context);
        // line 46
        echo "
\t<div class=\"banner\">";
        // line 47
        echo gettext("Posting mode: Reply");
        echo " <a class=\"unimportant\" href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">[";
        echo gettext("Return");
        echo "]</a> <a class=\"unimportant\" href=\"#bottom\">[";
        echo gettext("Go to bottom");
        echo "]</a></div>

\t";
        // line 49
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ad"), "top");
        echo "

\t";
        // line 51
        $this->env->loadTemplate("post_form.html")->display($context);
        // line 52
        echo "
\t";
        // line 53
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "global_message")) {
            echo "<hr /><div class=\"blotter\">";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "global_message");
            echo "</div>";
        }
        // line 54
        echo "\t<hr />
\t<form name=\"postcontrols\" action=\"";
        // line 55
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "post_url");
        echo "\" method=\"post\">
\t\t<input type=\"hidden\" name=\"board\" value=\"";
        // line 56
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
        echo "\" />
\t\t";
        // line 57
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\" />";
        }
        // line 58
        echo "\t\t
\t\t";
        // line 59
        echo (isset($context["body"]) ? $context["body"] : null);
        echo "
\t\t
\t\t<div id=\"thread-interactions\">
\t\t\t<span id=\"thread-links\">
\t\t\t\t<a id=\"thread-return\" href=\"";
        // line 63
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">[";
        echo gettext("Return");
        echo "]</a>
\t\t\t\t<a id=\"thread-top\" href=\"#top\">[";
        // line 64
        echo gettext("Go to top");
        echo "]</a>
                \t\t";
        // line 65
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "catalog_link")) {
            // line 66
            echo "\t\t\t\t\t<a id=\"thread-catalog\" href=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir");
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "catalog_link");
            echo "\">[";
            echo gettext("Catalog");
            echo "]</a>
\t\t                ";
        }
        // line 68
        echo "\t\t\t</span>
\t\t\t
\t\t\t<span id=\"thread-quick-reply\">
\t\t\t\t<a id=\"link-quick-reply\" href=\"#\">[";
        // line 71
        echo gettext("Post a Reply");
        echo "]</a>
\t\t\t</span>
\t\t\t
\t\t\t";
        // line 74
        $this->env->loadTemplate("report_delete.html")->display($context);
        // line 75
        echo "\t\t</div>
\t\t
\t\t<div class=\"clearfix\"></div>
\t</form>
\t
\t<a name=\"bottom\"></a>
\t";
        // line 81
        echo $this->getAttribute((isset($context["boardlist"]) ? $context["boardlist"] : null), "bottom");
        echo "

\t";
        // line 83
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ad"), "bottom");
        echo "

\t<footer>
\t\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">- Tinyboard + 
\t\t\t<a href=\"https://engine.vichan.net/\">vichan</a> ";
        // line 87
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "version");
        echo " -
\t\t<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group    
\t\t<br><a href=\"https://engine.vichan.net/\">vichan</a> Copyright &copy; 2012-2016 vichan-devel</p>
\t\t";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "footer"));
        foreach ($context['_seq'] as $context["_key"] => $context["footer"]) {
            echo "<p class=\"unimportant\" style=\"text-align:center;\">";
            echo (isset($context["footer"]) ? $context["footer"] : null);
            echo "</p>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t</footer>
\t<script type=\"text/javascript\">";
        // line 94
        echo "
\t\tready();
\t";
        echo "</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "thread.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 94,  329 => 91,  318 => 90,  312 => 87,  305 => 83,  300 => 81,  292 => 75,  290 => 74,  284 => 71,  279 => 68,  269 => 66,  267 => 65,  263 => 64,  257 => 63,  250 => 59,  247 => 58,  243 => 57,  239 => 56,  235 => 55,  232 => 54,  226 => 53,  223 => 52,  221 => 51,  216 => 49,  205 => 47,  202 => 46,  200 => 45,  195 => 42,  188 => 41,  185 => 40,  179 => 38,  173 => 36,  170 => 35,  168 => 34,  161 => 32,  158 => 31,  135 => 30,  123 => 29,  118 => 27,  104 => 26,  97 => 24,  91 => 22,  80 => 21,  71 => 20,  66 => 18,  57 => 16,  54 => 15,  46 => 14,  43 => 13,  41 => 12,  35 => 9,  31 => 8,  22 => 1,);
    }
}
