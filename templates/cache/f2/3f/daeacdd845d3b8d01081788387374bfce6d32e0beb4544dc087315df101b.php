<?php

/* post/post_controls.html */
class __TwigTemplate_f23fdaeacdd845d3b8d01081788387374bfce6d32e0beb4544dc087315df101b extends Twig_Template
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
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            // line 2
            echo "
<span class=\"controls ";
            // line 3
            if ((!$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thread"))) {
                echo "op";
            }
            echo "\">
";
            // line 4
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "delete"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                // line 5
                echo "\t";
                echo twig_secure_link_confirm($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_delete"), gettext("Delete"), gettext("Are you sure you want to delete this?"), (($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "delete/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
                echo "&nbsp;
";
            }
            // line 7
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "deletebyip"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                // line 8
                echo "\t";
                echo twig_secure_link_confirm($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_deletebyip"), gettext("Delete all posts by IP"), gettext("Are you sure you want to delete all posts by this IP address?"), (($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "deletebyip/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
                echo "&nbsp;
";
            }
            // line 10
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "deletebyip_global"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                // line 11
                echo "\t";
                echo twig_secure_link_confirm($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_deletebyip_global"), gettext("Delete all posts by IP across all boards"), gettext("Are you sure you want to delete all posts by this IP address, across all boards?"), ((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "deletebyip/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")) . "/global"));
                echo "&nbsp;
";
            }
            // line 13
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "ban"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                // line 14
                echo "\t<a title=\"";
                echo gettext("Ban");
                echo "\" href=\"?/";
                echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir");
                echo "ban/";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
                echo "\">";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_ban");
                echo "</a>&nbsp;
";
            }
            // line 16
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "bandelete"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                // line 17
                echo "\t<a title=\"";
                echo gettext("Ban & Delete");
                echo "\" href=\"?/";
                echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir");
                echo "ban&amp;delete/";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
                echo "\">";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_bandelete");
                echo "</a>&nbsp;
";
            }
            // line 19
            echo "
";
            // line 20
            if ((!$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thread"))) {
                // line 21
                if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "sticky"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                    // line 22
                    echo "\t";
                    if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "sticky")) {
                        // line 23
                        echo "\t<a title=\"";
                        echo gettext("Make thread not sticky");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "unsticky/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_desticky");
                        echo "</a>&nbsp;
\t";
                    } else {
                        // line 25
                        echo "\t<a title=\"";
                        echo gettext("Make thread sticky");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "sticky/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_sticky");
                        echo "</a>&nbsp;
\t";
                    }
                }
                // line 28
                if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "bumplock"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                    // line 29
                    echo "\t";
                    if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "sage")) {
                        // line 30
                        echo "\t<a title=\"";
                        echo gettext("Allow thread to be bumped");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "bumpunlock/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_bumpunlock");
                        echo "</a>&nbsp;
\t";
                    } else {
                        // line 32
                        echo "\t<a title=\"";
                        echo gettext("Prevent thread from being bumped");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "bumplock/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_bumplock");
                        echo "</a>&nbsp;
\t";
                    }
                }
                // line 35
                if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "lock"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                    // line 36
                    echo "\t";
                    if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "locked")) {
                        // line 37
                        echo "\t<a title=\"";
                        echo gettext("Unlock thread");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "unlock/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_unlock");
                        echo "</a>&nbsp;
\t";
                    } else {
                        // line 39
                        echo "\t<a title=\"";
                        echo gettext("Lock thread");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "lock/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_lock");
                        echo "</a>&nbsp;
\t";
                    }
                }
                // line 42
                echo "
";
            }
            // line 44
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "move"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                // line 45
                echo "\t";
                if ((!$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thread"))) {
                    // line 46
                    echo "\t\t<a title=\"";
                    echo gettext("Move thread to another board");
                    echo "\" href=\"?/";
                    echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir");
                    echo "move/";
                    echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_move");
                    echo "</a>&nbsp;
\t";
                } else {
                    // line 48
                    echo "\t\t<a title=\"";
                    echo gettext("Move reply to another board");
                    echo "\" href=\"?/";
                    echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir");
                    echo "move_reply/";
                    echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_move");
                    echo "</a>&nbsp;
\t";
                }
            }
            // line 51
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "cycle"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                // line 52
                echo "\t";
                if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "cycle")) {
                    // line 53
                    echo "\t<a title=\"";
                    echo gettext("Make thread not cycle");
                    echo "\" href=\"?/";
                    echo twig_secure_link((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "uncycle/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_uncycle");
                    echo "</a>&nbsp;
\t";
                } else {
                    // line 55
                    echo "\t<a title=\"";
                    echo gettext("Make thread cycle");
                    echo "\" href=\"?/";
                    echo twig_secure_link((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "cycle/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")));
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_cycle");
                    echo "</a>&nbsp;
\t";
                }
            }
            // line 58
            if (twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "editpost"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                // line 59
                echo "\t<a title=\"";
                echo gettext("Edit post");
                echo "\" href=\"?/";
                echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir");
                echo "edit";
                if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "raw_html_default")) {
                    echo "_raw";
                }
                echo "/";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id");
                echo "\">";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_editpost");
                echo "</a>&nbsp;
";
            }
            // line 61
            echo "</span>

";
        }
    }

    public function getTemplateName()
    {
        return "post/post_controls.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 61,  228 => 58,  202 => 51,  189 => 48,  177 => 46,  174 => 45,  172 => 44,  168 => 42,  157 => 39,  144 => 36,  131 => 32,  105 => 25,  90 => 21,  57 => 13,  68 => 15,  46 => 9,  43 => 8,  37 => 6,  69 => 15,  61 => 11,  59 => 14,  47 => 8,  32 => 5,  150 => 45,  139 => 41,  132 => 39,  125 => 37,  122 => 36,  116 => 28,  110 => 32,  108 => 31,  97 => 27,  88 => 20,  85 => 19,  73 => 17,  58 => 12,  55 => 12,  45 => 7,  36 => 7,  29 => 4,  27 => 3,  71 => 16,  63 => 12,  60 => 14,  49 => 10,  41 => 7,  38 => 5,  30 => 5,  28 => 4,  167 => 37,  149 => 34,  147 => 37,  142 => 35,  137 => 30,  134 => 29,  128 => 27,  120 => 25,  118 => 29,  112 => 22,  103 => 30,  101 => 29,  94 => 17,  92 => 22,  87 => 15,  81 => 13,  79 => 20,  70 => 10,  64 => 8,  62 => 14,  51 => 11,  34 => 6,  31 => 4,  25 => 2,  22 => 1,  348 => 89,  345 => 87,  341 => 85,  336 => 84,  333 => 79,  330 => 78,  327 => 77,  321 => 75,  318 => 74,  315 => 69,  313 => 68,  310 => 67,  308 => 66,  305 => 65,  299 => 63,  296 => 62,  293 => 61,  287 => 59,  284 => 58,  273 => 56,  270 => 55,  267 => 54,  256 => 52,  253 => 51,  242 => 49,  239 => 48,  236 => 47,  230 => 59,  226 => 43,  223 => 42,  220 => 41,  217 => 55,  211 => 38,  207 => 53,  204 => 52,  201 => 34,  198 => 33,  192 => 31,  188 => 29,  185 => 28,  182 => 27,  179 => 26,  173 => 24,  169 => 22,  166 => 21,  164 => 20,  152 => 35,  140 => 31,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  124 => 13,  121 => 30,  119 => 11,  115 => 23,  109 => 21,  100 => 8,  98 => 7,  95 => 23,  89 => 5,  83 => 4,  80 => 3,  77 => 1,  72 => 95,  67 => 14,  52 => 11,  35 => 5,  33 => 4,  26 => 2,  24 => 2,);
    }
}
