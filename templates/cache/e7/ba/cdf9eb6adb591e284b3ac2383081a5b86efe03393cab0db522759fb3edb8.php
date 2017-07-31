<?php

/* page.html */
class __TwigTemplate_e7bacdf9eb6adb591e284b3ac2383081a5b86efe03393cab0db522759fb3edb8 extends Twig_Template
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
\t<script type=\"text/javascript\">
\t\tvar active_page = \"page\";
\t</script>
\t";
        // line 8
        $this->env->loadTemplate("header.html")->display($context);
        // line 9
        echo "\t<title>";
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
</head>
<body class=\"8chan vichan ";
        // line 11
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            echo "is-moderator";
        } else {
            echo "is-not-moderator";
        }
        echo " active-page\" data-stylesheet=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1) != "")) {
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1);
        } else {
            echo "default";
        }
        echo "\">
        ";
        // line 12
        echo $this->getAttribute((isset($context["boardlist"]) ? $context["boardlist"] : null), "top");
        echo "

\t";
        // line 14
        if ((isset($context["pm"]) ? $context["pm"] : null)) {
            echo "<div class=\"top_notice\">You have <a href=\"?/PM/";
            echo $this->getAttribute((isset($context["pm"]) ? $context["pm"] : null), "id");
            echo "\">an unread PM</a>";
            if (($this->getAttribute((isset($context["pm"]) ? $context["pm"] : null), "waiting") > 0)) {
                echo ", plus ";
                echo $this->getAttribute((isset($context["pm"]) ? $context["pm"] : null), "waiting");
                echo " more waiting";
            }
            echo ".</div><hr>";
        }
        // line 15
        echo "\t<header>
\t\t<h1>";
        // line 16
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 18
        if ((isset($context["subtitle"]) ? $context["subtitle"] : null)) {
            // line 19
            echo "\t\t\t\t";
            echo (isset($context["subtitle"]) ? $context["subtitle"] : null);
            echo "
\t\t\t";
        }
        // line 21
        echo "\t\t\t";
        if (((isset($context["mod"]) ? $context["mod"] : null) && (!(isset($context["hide_dashboard_link"]) ? $context["hide_dashboard_link"] : null)))) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 22
        echo "\t\t</div>
\t</header>
\t";
        // line 24
        echo (isset($context["body"]) ? $context["body"] : null);
        echo "
\t<hr>
\t<footer>
\t\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">- Tinyboard + 
\t\t\t<a href=\"https://engine.vichan.net/\">vichan</a> ";
        // line 28
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "version");
        echo " -
\t\t<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group    
\t\t<br><a href=\"https://engine.vichan.net/\">vichan</a> Copyright &copy; 2012-2016 vichan-devel</p>
\t</footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  93 => 22,  86 => 21,  80 => 19,  73 => 16,  58 => 14,  53 => 12,  40 => 8,  56 => 14,  47 => 10,  34 => 5,  30 => 4,  25 => 2,  483 => 175,  477 => 170,  473 => 169,  470 => 168,  464 => 165,  460 => 164,  450 => 159,  439 => 154,  434 => 152,  430 => 151,  425 => 150,  420 => 148,  416 => 147,  411 => 146,  406 => 144,  402 => 143,  394 => 140,  392 => 139,  388 => 137,  385 => 136,  374 => 129,  368 => 126,  366 => 125,  359 => 122,  352 => 118,  347 => 116,  342 => 114,  336 => 110,  334 => 109,  330 => 107,  324 => 103,  313 => 101,  309 => 100,  300 => 96,  297 => 95,  291 => 91,  280 => 89,  276 => 88,  266 => 84,  263 => 83,  253 => 78,  249 => 77,  242 => 74,  240 => 73,  236 => 71,  234 => 70,  230 => 68,  224 => 66,  208 => 64,  206 => 63,  202 => 62,  192 => 57,  188 => 55,  163 => 47,  155 => 44,  148 => 41,  145 => 40,  121 => 35,  117 => 33,  108 => 29,  106 => 28,  99 => 25,  97 => 24,  78 => 18,  71 => 15,  69 => 14,  64 => 12,  61 => 11,  57 => 10,  24 => 2,  115 => 20,  112 => 19,  94 => 16,  89 => 15,  87 => 14,  82 => 12,  70 => 15,  67 => 9,  43 => 6,  37 => 4,  27 => 3,  386 => 90,  383 => 87,  372 => 128,  365 => 82,  358 => 78,  353 => 76,  349 => 117,  339 => 72,  337 => 71,  319 => 70,  303 => 97,  284 => 68,  279 => 65,  277 => 64,  272 => 87,  268 => 62,  264 => 61,  260 => 82,  257 => 59,  251 => 58,  248 => 57,  241 => 54,  227 => 67,  211 => 65,  194 => 58,  191 => 50,  189 => 49,  186 => 48,  180 => 46,  177 => 45,  174 => 44,  172 => 43,  167 => 41,  164 => 40,  162 => 39,  147 => 34,  141 => 32,  132 => 39,  130 => 38,  119 => 48,  84 => 19,  79 => 20,  51 => 12,  49 => 10,  41 => 7,  36 => 7,  33 => 9,  31 => 8,  527 => 407,  518 => 403,  514 => 401,  512 => 400,  509 => 399,  493 => 398,  491 => 396,  484 => 392,  480 => 391,  454 => 389,  452 => 160,  446 => 364,  444 => 157,  412 => 362,  403 => 334,  398 => 142,  315 => 326,  259 => 246,  245 => 191,  243 => 182,  223 => 180,  221 => 165,  219 => 164,  185 => 163,  183 => 52,  179 => 131,  171 => 51,  169 => 125,  157 => 36,  150 => 35,  142 => 115,  136 => 114,  22 => 1,  161 => 46,  154 => 37,  151 => 36,  143 => 34,  135 => 30,  131 => 30,  125 => 37,  123 => 26,  118 => 26,  113 => 32,  109 => 18,  107 => 22,  100 => 18,  96 => 17,  91 => 22,  77 => 14,  74 => 11,  66 => 12,  59 => 8,  54 => 10,  48 => 9,  45 => 6,  39 => 11,  35 => 6,  29 => 2,  23 => 1,);
    }
}
