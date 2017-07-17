<?php

/* post/flag.html */
class __TwigTemplate_72a1f5d4e90e538582e2c2b0befde1296b8eb5eab3bcab6db3df9d64ea6d2e8f extends Twig_Template
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
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "display_flags") && $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "flag"))) {
            // line 2
            echo "\t <img
\t\t";
            // line 3
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "country_flags_condensed")) {
                // line 4
                echo "\t\t\t class=\"flag flag-";
                echo $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "flag");
                echo "\" src=\"";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_blank");
                echo "\"
\t\t";
            } else {
                // line 6
                echo "\t\t\t class=\"flag\" src=\"";
                echo sprintf($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_flags"), $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "flag"));
                echo "\"
\t\t";
            }
            // line 8
            echo "\t\t style=\"";
            if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "flag style", array(), "array")) {
                // line 9
                echo "\t\t\t\t";
                echo $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "flag style", array(), "array");
                echo "
\t\t\t";
            } else {
                // line 11
                echo "\t\t\t\t";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "flag_style");
                echo "
\t\t\t";
            }
            // line 12
            echo "\"

\t\t";
            // line 14
            if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "flag alt", array(), "array")) {
                echo " alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "flag alt", array(), "array"), "html_attr");
                echo "\"
\t\t\t title=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "flag alt", array(), "array"), "html_attr");
                echo "\"
\t\t";
            }
            // line 17
            echo "\t>
";
        }
    }

    public function getTemplateName()
    {
        return "post/flag.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  46 => 9,  43 => 8,  37 => 6,  69 => 15,  61 => 11,  59 => 10,  47 => 8,  32 => 5,  150 => 45,  139 => 41,  132 => 39,  125 => 37,  122 => 36,  116 => 34,  110 => 32,  108 => 31,  97 => 27,  88 => 23,  85 => 22,  73 => 17,  58 => 12,  55 => 12,  45 => 7,  36 => 7,  29 => 4,  27 => 3,  71 => 17,  63 => 12,  60 => 14,  49 => 9,  41 => 9,  38 => 5,  30 => 5,  28 => 4,  167 => 37,  149 => 34,  147 => 33,  142 => 42,  137 => 30,  134 => 29,  128 => 27,  120 => 25,  118 => 24,  112 => 22,  103 => 30,  101 => 29,  94 => 17,  92 => 16,  87 => 15,  81 => 13,  79 => 20,  70 => 10,  64 => 8,  62 => 14,  51 => 10,  34 => 6,  31 => 4,  25 => 2,  22 => 1,  348 => 89,  345 => 87,  341 => 85,  336 => 84,  333 => 79,  330 => 78,  327 => 77,  321 => 75,  318 => 74,  315 => 69,  313 => 68,  310 => 67,  308 => 66,  305 => 65,  299 => 63,  296 => 62,  293 => 61,  287 => 59,  284 => 58,  273 => 56,  270 => 55,  267 => 54,  256 => 52,  253 => 51,  242 => 49,  239 => 48,  236 => 47,  230 => 45,  226 => 43,  223 => 42,  220 => 41,  217 => 40,  211 => 38,  207 => 36,  204 => 35,  201 => 34,  198 => 33,  192 => 31,  188 => 29,  185 => 28,  182 => 27,  179 => 26,  173 => 24,  169 => 22,  166 => 21,  164 => 20,  152 => 35,  140 => 31,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  124 => 13,  121 => 12,  119 => 11,  115 => 23,  109 => 21,  100 => 8,  98 => 7,  95 => 6,  89 => 5,  83 => 4,  80 => 3,  77 => 1,  72 => 95,  67 => 14,  52 => 11,  35 => 91,  33 => 90,  26 => 2,  24 => 2,);
    }
}
