<?php

/* mod/log.html */
class __TwigTemplate_0e422e20a124d5e5afcc9b90321cfadb6d6c8b6fb965971378e2c0ca8f85d635 extends Twig_Template
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
        echo "<table class=\"modlog\">
\t<tr>
\t\t<th>";
        // line 3
        echo gettext("Staff");
        echo "</th>
\t\t<th>";
        // line 4
        echo gettext("IP address");
        echo "</th>
\t\t<th>";
        // line 5
        echo gettext("Time");
        echo "</th>
\t\t<th>";
        // line 6
        echo gettext("Board");
        echo "</th>
\t\t<th>";
        // line 7
        echo gettext("Action");
        echo "</th>
\t</tr>
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 10
            echo "\t\t<tr>
\t\t\t<td class=\"minimal\">
\t\t\t\t";
            // line 12
            if ($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username")) {
                // line 13
                echo "\t\t\t\t\t";
                if ((isset($context["hide_names"]) ? $context["hide_names"] : null)) {
                    // line 14
                    echo "\t\t\t\t\t\t<em>hidden</em>
\t\t\t\t\t";
                } else {
                    // line 16
                    echo "\t\t\t\t\t\t";
                    if ((!twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "modlog")))) {
                        // line 17
                        echo "\t\t\t\t\t\t\t<a href=\"?/new_PM/";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username"));
                        echo "</a>
\t\t\t\t\t\t";
                    } else {
                        // line 19
                        echo "\t\t\t\t\t\t\t<a href=\"?/log:";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username"));
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 21
                    echo "\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "mod") == (-1))) {
                // line 23
                echo "\t\t\t\t\t<em>system</em>
\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t<em>";
                echo gettext("deleted?");
                echo "</em>
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t</td>
\t\t\t<td class=\"minimal\">
\t\t\t\t";
            // line 29
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "show_ip_modlog"))) {
                // line 30
                echo "\t\t\t\t\t<a href=\"?/IP/";
                echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "ip");
                echo "\">";
                echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "ip");
                echo "</a>
\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t<em>hidden</em>
\t\t\t\t";
            }
            // line 34
            echo "\t\t\t</td>
\t\t\t<td class=\"minimal\">
\t\t\t\t<span title=\"";
            // line 36
            echo twig_date_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "time"), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "post_date"));
            echo "\">";
            echo ago($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "time"));
            echo "</span>
\t\t\t</td>
\t\t\t<td class=\"minimal\">
\t\t\t\t";
            // line 39
            if ($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "board")) {
                // line 40
                echo "\t\t\t\t\t<a href=\"?/";
                echo sprintf($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "board_path"), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "board"));
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_index");
                echo "\">";
                echo sprintf($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "board_abbreviation"), $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "board"));
                echo "</a>
\t\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t\t-
\t\t\t\t";
            }
            // line 44
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 46
            echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "text");
            echo "
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</table>

";
        // line 52
        if (((isset($context["count"]) ? $context["count"] : null) > count((isset($context["logs"]) ? $context["logs"] : null)))) {
            // line 53
            echo "\t<p class=\"unimportant\" style=\"text-align:center;word-wrap:break-word\">
\t\t";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (((isset($context["count"]) ? $context["count"] : null) - 1) / $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "modlog_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                echo "\t\t\t";
                if ((isset($context["public"]) ? $context["public"] : null)) {
                    // line 56
                    echo "\t\t\t\t<a href=\"?page=";
                    echo ((isset($context["i"]) ? $context["i"] : null) + 1);
                    echo "&amp;board=";
                    echo twig_urlencode_filter((isset($context["board"]) ? $context["board"] : null));
                    echo "\">[";
                    echo ((isset($context["i"]) ? $context["i"] : null) + 1);
                    echo "]</a> 
\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t\t<a href=\"?/log";
                    if ((isset($context["username"]) ? $context["username"] : null)) {
                        echo ":";
                        echo (isset($context["username"]) ? $context["username"] : null);
                    } elseif ((isset($context["board"]) ? $context["board"] : null)) {
                        echo ":b:";
                        echo (isset($context["board"]) ? $context["board"] : null);
                    }
                    echo "/";
                    echo ((isset($context["i"]) ? $context["i"] : null) + 1);
                    echo "\">[";
                    echo ((isset($context["i"]) ? $context["i"] : null) + 1);
                    echo "]</a> 
\t\t\t";
                }
                // line 60
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t</p>
";
        }
        // line 63
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod/log.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 63,  206 => 61,  200 => 60,  184 => 58,  174 => 56,  171 => 55,  167 => 54,  164 => 53,  162 => 52,  158 => 50,  148 => 46,  144 => 44,  140 => 42,  131 => 40,  129 => 39,  121 => 36,  117 => 34,  113 => 32,  105 => 30,  103 => 29,  99 => 27,  93 => 25,  89 => 23,  86 => 22,  83 => 21,  75 => 19,  67 => 17,  64 => 16,  60 => 14,  57 => 13,  55 => 12,  51 => 10,  47 => 9,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
