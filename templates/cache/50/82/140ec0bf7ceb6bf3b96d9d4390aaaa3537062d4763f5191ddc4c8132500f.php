<?php

/* mod/theme_installed.html */
class __TwigTemplate_5082140ec0bf7ceb6bf3b96d9d4390aaaa3537062d4763f5191ddc4c8132500f extends Twig_Template
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
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 2
            echo "\t<div style=\"border:1px dashed maroon;padding:20px;margin:auto;max-width:800px\">";
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "</div>
";
        }
        // line 4
        echo "
";
        // line 5
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 6
            echo "\t<p style=\"text-align:center\">";
            echo gettext("Successfully installed and built theme.");
            echo "</p>
";
        }
        // line 8
        echo "
<p style=\"text-align:center\"><a href=\"?/themes\">";
        // line 9
        echo gettext("Go back to themes");
        echo "</a>.</p>
";
    }

    public function getTemplateName()
    {
        return "mod/theme_installed.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  41 => 8,  33 => 5,  30 => 4,  24 => 2,  22 => 1,  161 => 42,  154 => 37,  151 => 36,  143 => 34,  135 => 32,  131 => 30,  125 => 28,  123 => 27,  118 => 26,  113 => 25,  109 => 23,  107 => 22,  100 => 18,  96 => 17,  91 => 15,  77 => 14,  74 => 13,  66 => 12,  59 => 11,  54 => 10,  48 => 9,  45 => 8,  39 => 7,  35 => 6,  29 => 2,  23 => 1,);
    }
}
