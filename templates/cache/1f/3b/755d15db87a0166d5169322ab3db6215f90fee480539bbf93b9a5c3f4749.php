<?php

/* attention_bar.html */
class __TwigTemplate_1f3b755d15db87a0166d5169322ab3db6215f90fee480539bbf93b9a5c3f4749 extends Twig_Template
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
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "attention_bar")) {
            // line 2
            echo "<div id=\"attention_bar\"></div>
<form method=\"post\" action=\"";
            // line 3
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
            echo "attentionbar.php\" id=\"attention_bar_form\">
  <input id=\"attention_bar_input\" name=\"text\" value=\"\" type=\"text\">
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "attention_bar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  115 => 20,  112 => 19,  94 => 16,  89 => 15,  87 => 14,  82 => 12,  70 => 10,  67 => 9,  43 => 6,  37 => 5,  27 => 3,  386 => 90,  383 => 87,  372 => 86,  365 => 82,  358 => 78,  353 => 76,  349 => 74,  339 => 72,  337 => 71,  319 => 70,  303 => 69,  284 => 68,  279 => 65,  277 => 64,  272 => 63,  268 => 62,  264 => 61,  260 => 60,  257 => 59,  251 => 58,  248 => 57,  241 => 54,  227 => 53,  211 => 52,  194 => 51,  191 => 50,  189 => 49,  186 => 48,  180 => 46,  177 => 45,  174 => 44,  172 => 43,  167 => 41,  164 => 40,  162 => 39,  147 => 34,  141 => 32,  132 => 29,  130 => 28,  119 => 48,  84 => 22,  79 => 20,  51 => 7,  49 => 16,  41 => 12,  36 => 10,  33 => 3,  31 => 8,  527 => 407,  518 => 403,  514 => 401,  512 => 400,  509 => 399,  493 => 398,  491 => 396,  484 => 392,  480 => 391,  454 => 389,  452 => 368,  446 => 364,  444 => 363,  412 => 362,  403 => 334,  398 => 328,  315 => 326,  259 => 246,  245 => 191,  243 => 182,  223 => 180,  221 => 165,  219 => 164,  185 => 163,  183 => 47,  179 => 131,  171 => 130,  169 => 125,  157 => 36,  150 => 35,  142 => 115,  136 => 114,  22 => 1,  161 => 42,  154 => 37,  151 => 36,  143 => 34,  135 => 30,  131 => 30,  125 => 28,  123 => 26,  118 => 26,  113 => 25,  109 => 18,  107 => 22,  100 => 18,  96 => 17,  91 => 15,  77 => 14,  74 => 11,  66 => 12,  59 => 8,  54 => 10,  48 => 9,  45 => 14,  39 => 7,  35 => 6,  29 => 2,  23 => 1,);
    }
}
