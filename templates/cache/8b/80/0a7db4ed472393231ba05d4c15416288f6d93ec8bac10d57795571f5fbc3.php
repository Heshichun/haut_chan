<?php

/* index.html */
class __TwigTemplate_8b800a7db4ed472393231ba05d4c15416288f6d93ec8bac10d57795571f5fbc3 extends Twig_Template
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
\t  var
          ";
        // line 8
        if ((!(isset($context["no_post_form"]) ? $context["no_post_form"] : null))) {
            // line 9
            echo "              active_page = \"index\"
            , board_name = \"";
            // line 10
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
            echo "\";
\t  ";
        } else {
            // line 12
            echo "              active_page = \"ukko\";
          ";
        }
        // line 14
        echo "        </script>

\t";
        // line 16
        $this->env->loadTemplate("header.html")->display($context);
        // line 17
        echo "\t<title>";
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "url");
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "title"));
        echo "</title>
</head>
<body class=\"8chan vichan ";
        // line 19
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            echo "is-moderator";
        } else {
            echo "is-not-moderator";
        }
        echo " active-";
        if ((!(isset($context["no_post_form"]) ? $context["no_post_form"] : null))) {
            echo "index";
        } else {
            echo "ukko";
        }
        echo "\" data-stylesheet=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1) != "")) {
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1);
        } else {
            echo "default";
        }
        echo "\">
\t";
        // line 20
        echo $this->getAttribute((isset($context["boardlist"]) ? $context["boardlist"] : null), "top");
        echo "
\t
\t";
        // line 22
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
        // line 23
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
        // line 24
        echo "\t
\t<header>
\t\t<h1>";
        // line 26
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "url");
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "title"));
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 28
        if ($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "subtitle")) {
            // line 29
            echo "\t\t\t\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "allow_subtitle_html")) {
                // line 30
                echo "\t\t\t\t\t";
                echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "subtitle");
                echo "
\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "subtitle"));
                echo "
\t\t\t\t";
            }
            // line 34
            echo "\t\t\t";
        }
        // line 35
        echo "\t\t\t";
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 36
        echo "\t\t</div>
\t</header>

\t";
        // line 39
        $this->env->loadTemplate("attention_bar.html")->display($context);
        // line 40
        echo "
\t";
        // line 41
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ad"), "top");
        echo "

\t";
        // line 43
        if ((!(isset($context["no_post_form"]) ? $context["no_post_form"] : null))) {
            // line 44
            echo "\t\t";
            $this->env->loadTemplate("post_form.html")->display($context);
            // line 45
            echo "\t";
        } else {
            // line 46
            echo "\t\t";
            $this->env->loadTemplate("boardlist.html")->display($context);
            // line 47
            echo "\t";
        }
        // line 48
        echo "
\t";
        // line 49
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "page_nav_top")) {
            // line 50
            echo "\t\t<div class=\"pages top\">
\t\t\t";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 52
                echo "\t\t\t [<a ";
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "selected")) {
                    echo "class=\"selected\"";
                }
                if ((!$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "selected"))) {
                    echo "href=\"";
                    echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link");
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "num");
                echo "</a>]";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                    echo " ";
                }
                // line 53
                echo "\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t";
            echo $this->getAttribute((isset($context["btn"]) ? $context["btn"] : null), "next");
            echo "
\t\t</div>
\t";
        }
        // line 57
        echo "\t
\t";
        // line 58
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "global_message")) {
            echo "<hr /><div class=\"blotter\">";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "global_message");
            echo "</div>";
        }
        // line 59
        echo "\t<hr />
\t<form name=\"postcontrols\" action=\"";
        // line 60
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "post_url");
        echo "\" method=\"post\">
\t<input type=\"hidden\" name=\"board\" value=\"";
        // line 61
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
        echo "\" />
\t";
        // line 62
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\" />";
        }
        // line 63
        echo "\t";
        echo (isset($context["body"]) ? $context["body"] : null);
        echo "
\t";
        // line 64
        $this->env->loadTemplate("report_delete.html")->display($context);
        // line 65
        echo "\t</form>
\t
\t<div class=\"pages\">
\t\t";
        // line 68
        echo $this->getAttribute((isset($context["btn"]) ? $context["btn"] : null), "prev");
        echo " ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 69
            echo "\t\t [<a ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "selected")) {
                echo "class=\"selected\"";
            }
            if ((!$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "selected"))) {
                echo "href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "link");
                echo "\"";
            }
            echo ">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "num");
            echo "</a>]";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                echo " ";
            }
            // line 70
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        echo $this->getAttribute((isset($context["btn"]) ? $context["btn"] : null), "next");
        echo "
\t\t";
        // line 71
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "catalog_link")) {
            // line 72
            echo "\t\t\t | <a href=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir");
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "catalog_link");
            echo "\">";
            echo gettext("Catalog");
            echo "</a>
\t\t";
        }
        // line 74
        echo "\t</div>
\t
\t";
        // line 76
        echo $this->getAttribute((isset($context["boardlist"]) ? $context["boardlist"] : null), "bottom");
        echo "

\t";
        // line 78
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ad"), "bottom");
        echo "

\t<footer>
\t\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">- Tinyboard + 
\t\t\t<a href=\"https://engine.vichan.net/\">vichan</a> ";
        // line 82
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "version");
        echo " -
\t\t<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group
\t\t<br><a href=\"https://engine.vichan.net/\">vichan</a> Copyright &copy; 2012-2016 vichan-devel</p>

\t\t";
        // line 86
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
        // line 87
        echo "\t</footer>
\t<script type=\"text/javascript\">";
        // line 90
        echo "
\t\tready();
\t";
        echo "</script>
\t
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 90,  383 => 87,  372 => 86,  365 => 82,  358 => 78,  353 => 76,  349 => 74,  339 => 72,  337 => 71,  319 => 70,  303 => 69,  284 => 68,  279 => 65,  277 => 64,  272 => 63,  268 => 62,  264 => 61,  260 => 60,  257 => 59,  251 => 58,  248 => 57,  241 => 54,  227 => 53,  211 => 52,  194 => 51,  191 => 50,  189 => 49,  186 => 48,  180 => 46,  177 => 45,  174 => 44,  172 => 43,  167 => 41,  164 => 40,  162 => 39,  147 => 34,  141 => 32,  132 => 29,  130 => 28,  119 => 24,  84 => 22,  79 => 20,  51 => 17,  49 => 16,  41 => 12,  36 => 10,  33 => 9,  31 => 8,  527 => 407,  518 => 403,  514 => 401,  512 => 400,  509 => 399,  493 => 398,  491 => 396,  484 => 392,  480 => 391,  454 => 389,  452 => 368,  446 => 364,  444 => 363,  412 => 362,  403 => 334,  398 => 328,  315 => 326,  259 => 246,  245 => 191,  243 => 182,  223 => 180,  221 => 165,  219 => 164,  185 => 163,  183 => 47,  179 => 131,  171 => 130,  169 => 125,  157 => 36,  150 => 35,  142 => 115,  136 => 114,  22 => 1,  161 => 42,  154 => 37,  151 => 36,  143 => 34,  135 => 30,  131 => 30,  125 => 28,  123 => 26,  118 => 26,  113 => 25,  109 => 23,  107 => 22,  100 => 18,  96 => 23,  91 => 15,  77 => 14,  74 => 13,  66 => 12,  59 => 19,  54 => 10,  48 => 9,  45 => 14,  39 => 7,  35 => 6,  29 => 2,  23 => 1,);
    }
}
