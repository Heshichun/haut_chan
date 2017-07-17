<?php

/* mod/search_form.html */
class __TwigTemplate_d80f2ae8dd9a1226ef9efe3c7a68a515d86c4d652fa1ee0852a4d837a4114fab extends Twig_Template
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
        echo "<form style=\"display:inline\" action=\"?/search\" method=\"post\">
\t<label style=\"display:inline\" for=\"search\">";
        // line 2
        echo gettext("Phrase:");
        echo "</label> 
\t<input id=\"search\" name=\"query\" type=\"text\" size=\"60\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["search_query"]) ? $context["search_query"] : null));
        echo "\">
\t<select name=\"type\">
\t\t<option value=\"posts\"";
        // line 5
        if (((isset($context["search_type"]) ? $context["search_type"] : null) == "posts")) {
            echo " selected";
        }
        echo ">";
        echo gettext("Posts");
        echo "</option>
\t\t";
        // line 6
        if ((twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "view_notes")) && twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "show_ip")))) {
            // line 7
            echo "\t\t\t<option value=\"IP_notes\"";
            if (((isset($context["search_type"]) ? $context["search_type"] : null) == "IP_notes")) {
                echo " selected";
            }
            echo ">";
            echo gettext("IP address notes");
            echo "</option>
\t\t";
        }
        // line 9
        echo "\t\t";
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "view_banlist"))) {
            // line 10
            echo "\t\t\t<option value=\"bans\"";
            if (((isset($context["search_type"]) ? $context["search_type"] : null) == "bans")) {
                echo " selected";
            }
            echo ">";
            echo gettext("Bans");
            echo "</option>
\t\t";
        }
        // line 12
        echo "\t\t";
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "modlog"))) {
            // line 13
            echo "\t\t\t<option value=\"log\"";
            if (((isset($context["search_type"]) ? $context["search_type"] : null) == "log")) {
                echo " selected";
            }
            echo ">";
            echo gettext("Moderation log");
            echo "</option>
\t\t";
        }
        // line 15
        echo "\t</select>
\t<input type=\"submit\" value=\"";
        // line 16
        echo gettext("Search");
        echo "\">
</form>
<p class=\"unimportant\">";
        // line 18
        echo gettext("(Search is case-insensitive and based on keywords. To match exact phrases, use \"quotes\". Use an asterisk (*) for wildcard.)");
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "mod/search_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  83 => 16,  80 => 15,  70 => 13,  67 => 12,  54 => 9,  44 => 7,  42 => 6,  34 => 5,  29 => 3,  481 => 176,  475 => 173,  471 => 171,  458 => 165,  451 => 160,  449 => 159,  446 => 158,  441 => 155,  435 => 153,  433 => 152,  429 => 151,  425 => 150,  420 => 148,  417 => 147,  415 => 146,  412 => 145,  407 => 142,  396 => 140,  392 => 139,  386 => 136,  383 => 135,  381 => 134,  378 => 133,  372 => 129,  370 => 128,  363 => 124,  360 => 123,  358 => 122,  352 => 118,  346 => 116,  343 => 115,  337 => 113,  334 => 112,  328 => 110,  325 => 109,  319 => 107,  316 => 106,  310 => 104,  307 => 103,  301 => 101,  298 => 100,  290 => 98,  284 => 96,  281 => 95,  275 => 93,  272 => 92,  266 => 90,  263 => 89,  259 => 87,  255 => 86,  248 => 85,  244 => 84,  241 => 83,  239 => 82,  233 => 79,  225 => 73,  215 => 72,  211 => 71,  204 => 68,  198 => 66,  193 => 63,  183 => 59,  179 => 57,  175 => 56,  169 => 54,  167 => 53,  162 => 50,  156 => 48,  150 => 46,  148 => 45,  144 => 44,  141 => 43,  137 => 42,  132 => 40,  129 => 39,  126 => 38,  124 => 37,  119 => 35,  113 => 31,  107 => 29,  105 => 28,  102 => 27,  95 => 25,  87 => 23,  84 => 22,  76 => 20,  73 => 19,  69 => 17,  63 => 15,  57 => 10,  55 => 12,  52 => 11,  50 => 10,  46 => 9,  38 => 7,  35 => 6,  31 => 5,  25 => 2,  22 => 1,);
    }
}
