<?php

/* mod/ban_list.html */
class __TwigTemplate_dfe82064335c581301872d9cc61ebd202cafceae8abef2e8626c3203e182202d extends Twig_Template
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
        echo "<script src='main.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/mobile-style.js'></script>
<script src='js/strftime.min.js'></script>
<script src='js/longtable/longtable.js'></script>
<script src='js/mod/ban-list.js'></script>
<link rel='stylesheet' href='stylesheets/longtable/longtable.css'>
<link rel='stylesheet' href='stylesheets/mod/ban-list.css'>

\t<form action=\"?/bans\" method=\"post\" class=\"banform\">
\t\t";
        // line 11
        if ((isset($context["token"]) ? $context["token"] : null)) {
            // line 12
            echo "\t\t\t<input type=\"hidden\" name=\"token\" value=\"";
            echo (isset($context["token"]) ? $context["token"] : null);
            echo "\">
\t\t";
        }
        // line 14
        echo "\t\t<div class='banlist-opts'>
\t\t\t<div class='checkboxes'>
\t\t\t\t";
        // line 16
        if (((isset($context["mod"]) ? $context["mod"] : null) && ($this->getAttribute($this->getAttribute((isset($context["mod"]) ? $context["mod"] : null), "boards"), 0, array(), "array") != "*"))) {
            // line 17
            echo "\t\t\t\t<label><input type=\"checkbox\" id=\"only_mine\"> ";
            echo gettext("Show only bans from boards I moderate");
            echo "</label>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t<label><input type=\"checkbox\" id=\"only_not_expired\"> ";
        echo gettext("Show only active bans");
        echo "</label>
\t\t\t</div>
\t\t\t<div class='buttons'>
\t\t\t\t<input type=\"text\" id=\"search\" placeholder=\"";
        // line 22
        echo gettext("Search");
        echo "\">
\t\t\t\t";
        // line 23
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            // line 24
            echo "\t\t\t\t<input type=\"submit\" name=\"unban\" id=\"unban\" value=\"";
            echo gettext("Unban selected");
            echo "\">
\t\t\t\t";
        }
        // line 26
        echo "\t\t\t</div>

\t\t\t<br class='clear'>
\t\t</div>

\t\t<table class=\"mod\" style=\"width:100%\" id=\"banlist\">
\t\t</table>


\t\t
\t</form>
";
        // line 37
        if ((isset($context["token_json"]) ? $context["token_json"] : null)) {
            // line 38
            echo "\t<script>\$(function(){ banlist_init(\"";
            echo (isset($context["token_json"]) ? $context["token_json"] : null);
            echo "\", ";
            echo (isset($context["boards"]) ? $context["boards"] : null);
            echo "); });</script>
";
        } else {
            // line 40
            echo "\t<script>\$(function(){ banlist_init(\"";
            echo (isset($context["uri_json"]) ? $context["uri_json"] : null);
            echo "\", ";
            echo (isset($context["boards"]) ? $context["boards"] : null);
            echo ", true); });</script>
";
        }
    }

    public function getTemplateName()
    {
        return "mod/ban_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  88 => 38,  86 => 37,  73 => 26,  67 => 24,  65 => 23,  61 => 22,  54 => 19,  48 => 17,  46 => 16,  42 => 14,  36 => 12,  34 => 11,  22 => 1,);
    }
}
