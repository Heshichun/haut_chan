<?php

/* mod/dashboard.html */
class __TwigTemplate_5dea6ab036c024509878cb5d858d1cc43ccdf7434e5f9800d48d8934569a420a extends Twig_Template
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
        echo "<fieldset>
\t<legend>";
        // line 2
        echo gettext("Boards");
        echo "</legend>
\t
\t<ul>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boards"]) ? $context["boards"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
            // line 6
            echo "\t\t\t<li>
\t\t\t\t<a href=\"?/";
            // line 7
            echo sprintf($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "board_path"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"));
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_index");
            echo "\">";
            echo sprintf($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "board_abbreviation"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"));
            echo "</a>
\t\t\t\t\t - 
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "title"));
            echo "
\t\t\t\t";
            // line 10
            if ($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "subtitle")) {
                // line 11
                echo "\t\t\t\t\t<small>&mdash; 
\t\t\t\t\t\t";
                // line 12
                if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "allow_subtitle_html")) {
                    // line 13
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "subtitle");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "subtitle"));
                    echo "
\t\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t</small>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t";
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "manageboards"))) {
                // line 20
                echo "\t\t\t\t\t <a href=\"?/edit/";
                echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
                echo "\"><small>[";
                echo gettext("edit");
                echo "]</small></a>
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t";
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "edit_pages"))) {
                // line 23
                echo "\t\t\t\t\t <a href=\"?/edit_pages/";
                echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
                echo "\"><small>[";
                echo gettext("pages");
                echo "]</small></a>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t
\t\t";
        // line 28
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "newboard"))) {
            // line 29
            echo "\t\t\t<li style=\"margin-top:15px\"><a href=\"?/new-board\"><strong>";
            echo gettext("Create new board");
            echo "</strong></a></li>
\t\t";
        }
        // line 31
        echo "\t</ul>
</fieldset>

<fieldset>
\t<legend>";
        // line 35
        echo gettext("Messages");
        echo "</legend>
\t<ul>
\t\t";
        // line 37
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "noticeboard"))) {
            // line 38
            echo "\t\t\t";
            if ((count((isset($context["noticeboard"]) ? $context["noticeboard"] : null)) > 0)) {
                // line 39
                echo "\t\t\t\t<li>
\t\t\t\t\t";
                // line 40
                echo gettext("Noticeboard");
                echo ":
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["noticeboard"]) ? $context["noticeboard"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 43
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"?/noticeboard#";
                    // line 44
                    echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 45
                    if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subject")) {
                        // line 46
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subject"));
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t\t\t<em>";
                        echo gettext("no subject");
                        echo "</em>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 50
                    echo "\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t<small class=\"unimportant\">
\t\t\t\t\t\t\t\t\t&mdash; by 
\t\t\t\t\t\t\t\t\t";
                    // line 53
                    if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "username")) {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "username"));
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t\t<em>deleted?</em>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 57
                    echo " 
\t\t\t\t\t\t\t\t\tat 
\t\t\t\t\t\t\t\t\t";
                    // line 59
                    echo twig_date_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "time"), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "post_date"));
                    echo " 
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t";
            }
            // line 66
            echo "\t\t\t<li><a href=\"?/noticeboard\">";
            echo gettext("View all noticeboard entries");
            echo "</a></li>
\t\t";
        }
        // line 68
        echo "\t\t<li><a href=\"?/edit_news\">";
        echo gettext("News");
        echo "</a></li>
\t\t<li>
\t\t\t<a href=\"?/inbox\">
\t\t\t\t";
        // line 71
        echo gettext("PM inbox");
        echo " 
\t\t\t\t";
        // line 72
        if (((isset($context["unread_pms"]) ? $context["unread_pms"] : null) > 0)) {
            echo "<strong>";
        }
        echo "(";
        echo (isset($context["unread_pms"]) ? $context["unread_pms"] : null);
        echo " unread)";
        if (((isset($context["unread_pms"]) ? $context["unread_pms"] : null) > 0)) {
            echo "</strong>";
        }
        // line 73
        echo "\t\t\t</a>
\t\t</li>
\t</ul>
</fieldset>

<fieldset>
\t<legend>";
        // line 79
        echo gettext("Administration");
        echo "</legend>
\t
\t<ul>
\t\t";
        // line 82
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "reports"))) {
            // line 83
            echo "\t\t\t<li>
\t\t\t\t";
            // line 84
            if (((isset($context["reports"]) ? $context["reports"] : null) > 0)) {
                echo "<strong>";
            }
            // line 85
            echo "\t\t\t\t\t<a href=\"?/reports\">";
            echo gettext("Report queue");
            echo " (";
            echo (isset($context["reports"]) ? $context["reports"] : null);
            echo ")</a>
\t\t\t\t";
            // line 86
            if (((isset($context["reports"]) ? $context["reports"] : null) > 0)) {
                echo "</strong>";
            }
            // line 87
            echo "\t\t\t</li>
\t\t";
        }
        // line 89
        echo "\t\t";
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "view_banlist"))) {
            // line 90
            echo "\t\t\t<li><a href=\"?/bans\">";
            echo gettext("Ban list");
            echo "</a></li>
\t\t";
        }
        // line 92
        echo "\t\t";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "ban_appeals") && twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "view_ban_appeals")))) {
            // line 93
            echo "\t\t\t<li><a href=\"?/ban-appeals\">";
            echo gettext("Ban appeals");
            echo "</a></li>
\t\t";
        }
        // line 95
        echo "\t\t";
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "manageusers"))) {
            // line 96
            echo "\t\t\t<li><a href=\"?/users\">";
            echo gettext("Manage users");
            echo "</a></li>
\t\t";
        } elseif (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "change_password"))) {
            // line 98
            echo "\t\t\t<li><a href=\"?/users/";
            echo $this->getAttribute((isset($context["mod"]) ? $context["mod"] : null), "id");
            echo "\">";
            echo gettext("Change password");
            echo "</a></li>
\t\t";
        }
        // line 100
        echo "\t\t";
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "themes"))) {
            // line 101
            echo "\t\t\t<li><a href=\"?/themes\">";
            echo gettext("Manage themes");
            echo "</a></li>
\t\t";
        }
        // line 103
        echo "\t\t";
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "modlog"))) {
            // line 104
            echo "\t\t\t<li><a href=\"?/log\">";
            echo gettext("Moderation log");
            echo "</a></li>
\t\t";
        }
        // line 106
        echo "\t\t";
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "edit_pages"))) {
            // line 107
            echo "\t\t\t<li><a href=\"?/edit_pages\">";
            echo gettext("Global static pages");
            echo "</a></li>
\t\t";
        }
        // line 109
        echo "\t\t";
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "recent"))) {
            // line 110
            echo "\t\t\t<li><a href=\"?/recent/25\">";
            echo gettext("Recent posts");
            echo "</a></li>
\t\t";
        }
        // line 112
        echo "\t\t";
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "rebuild"))) {
            // line 113
            echo "\t\t\t<li><a href=\"?/rebuild\">";
            echo gettext("Rebuild");
            echo "</a></li>
\t\t";
        }
        // line 115
        echo "\t\t";
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "edit_config"))) {
            // line 116
            echo "\t\t\t<li><a href=\"?/config\">";
            echo gettext("Configuration");
            echo "</a></li>
\t\t";
        }
        // line 118
        echo "\t\t
\t</ul>
</fieldset>

";
        // line 122
        if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "search"))) {
            // line 123
            echo "\t<fieldset>
\t\t<legend>";
            // line 124
            echo gettext("Search");
            echo "</legend>
\t\t
\t\t<ul>
\t\t\t<li>
\t\t\t\t";
            // line 128
            $this->env->loadTemplate("mod/search_form.html")->display($context);
            // line 129
            echo "\t\t\t</li>
\t\t</ul>
\t</fieldset>
";
        }
        // line 133
        echo "
";
        // line 134
        if (count($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "dashboard_links"))) {
            // line 135
            echo "\t<fieldset>
\t\t<legend>";
            // line 136
            echo gettext("Other");
            echo "</legend>
\t
\t\t<ul>
\t\t\t";
            // line 139
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "dashboard_links"));
            foreach ($context['_seq'] as $context["label"] => $context["link"]) {
                // line 140
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["link"]) ? $context["link"] : null);
                echo "\">";
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t</ul>
\t</fieldset>
";
        }
        // line 145
        echo "
";
        // line 146
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "debug")) {
            // line 147
            echo "\t<fieldset>
\t\t<legend>";
            // line 148
            echo gettext("Debug");
            echo "</legend>
\t\t<ul>
\t\t\t<li><a href=\"?/debug/antispam\">";
            // line 150
            echo gettext("Anti-spam");
            echo "</a></li>
\t\t\t<li><a href=\"?/debug/recent\">";
            // line 151
            echo gettext("Recent posts");
            echo "</a></li>
\t\t\t";
            // line 152
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "debug_sql"))) {
                // line 153
                echo "\t\t\t\t<li><a href=\"?/debug/sql\">";
                echo gettext("SQL");
                echo "</a></li>
\t\t\t";
            }
            // line 155
            echo "\t\t</ul>
\t</fieldset>
";
        }
        // line 158
        echo "
";
        // line 159
        if ((isset($context["newer_release"]) ? $context["newer_release"] : null)) {
            // line 160
            echo "\t<fieldset>
\t\t<legend>Update</legend>
\t\t<ul>
\t\t\t<li>
\t\t\t\tA newer version of vichan 
\t\t\t\t(<strong>v";
            // line 165
            echo $this->getAttribute((isset($context["newer_release"]) ? $context["newer_release"] : null), "massive");
            echo ".";
            echo $this->getAttribute((isset($context["newer_release"]) ? $context["newer_release"] : null), "major");
            echo ".";
            echo $this->getAttribute((isset($context["newer_release"]) ? $context["newer_release"] : null), "minor");
            echo "</strong>) is available! 
\t\t\t\tSee <a href=\"https://engine.vichan.net\">https://engine.vichan.net/</a> for upgrade instructions.
\t\t\t</li>
\t\t</ul>
\t</fieldset>
";
        }
        // line 171
        echo "
<fieldset>
\t<legend>";
        // line 173
        echo gettext("User account");
        echo "</legend>
\t
\t<ul>
\t\t<li><a href=\"?/logout/";
        // line 176
        echo (isset($context["logout_token"]) ? $context["logout_token"] : null);
        echo "\">";
        echo gettext("Logout");
        echo "</a></li>
\t</ul>
</fieldset>

";
    }

    public function getTemplateName()
    {
        return "mod/dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 176,  475 => 173,  471 => 171,  458 => 165,  451 => 160,  449 => 159,  446 => 158,  441 => 155,  435 => 153,  433 => 152,  429 => 151,  425 => 150,  420 => 148,  417 => 147,  415 => 146,  412 => 145,  407 => 142,  396 => 140,  392 => 139,  386 => 136,  383 => 135,  381 => 134,  378 => 133,  372 => 129,  370 => 128,  363 => 124,  360 => 123,  358 => 122,  352 => 118,  346 => 116,  343 => 115,  337 => 113,  334 => 112,  328 => 110,  325 => 109,  319 => 107,  316 => 106,  310 => 104,  307 => 103,  301 => 101,  298 => 100,  290 => 98,  284 => 96,  281 => 95,  275 => 93,  272 => 92,  266 => 90,  263 => 89,  259 => 87,  255 => 86,  248 => 85,  244 => 84,  241 => 83,  239 => 82,  233 => 79,  225 => 73,  215 => 72,  211 => 71,  204 => 68,  198 => 66,  193 => 63,  183 => 59,  179 => 57,  175 => 56,  169 => 54,  167 => 53,  162 => 50,  156 => 48,  150 => 46,  148 => 45,  144 => 44,  141 => 43,  137 => 42,  132 => 40,  129 => 39,  126 => 38,  124 => 37,  119 => 35,  113 => 31,  107 => 29,  105 => 28,  102 => 27,  95 => 25,  87 => 23,  84 => 22,  76 => 20,  73 => 19,  69 => 17,  63 => 15,  57 => 13,  55 => 12,  52 => 11,  50 => 10,  46 => 9,  38 => 7,  35 => 6,  31 => 5,  25 => 2,  22 => 1,);
    }
}
