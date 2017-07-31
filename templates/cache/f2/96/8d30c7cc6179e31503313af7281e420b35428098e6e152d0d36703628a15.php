<?php

/* post_form.html */
class __TwigTemplate_f2968d30c7cc6179e31503313af7281e420b35428098e6e152d0d36703628a15 extends Twig_Template
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
        echo "<form name=\"post\" onsubmit=\"return dopost(this);\" enctype=\"multipart/form-data\" action=\"";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "post_url");
        echo "\" method=\"post\">
";
        // line 2
        echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
        echo "
";
        // line 3
        if ((isset($context["id"]) ? $context["id"] : null)) {
            echo "<input type=\"hidden\" name=\"thread\" value=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\">";
        }
        // line 4
        echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
        echo "
<input type=\"hidden\" name=\"board\" value=\"";
        // line 5
        echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
        echo "\">
";
        // line 6
        echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
        echo "
";
        // line 7
        if ((isset($context["current_page"]) ? $context["current_page"] : null)) {
            // line 8
            echo "\t<input type=\"hidden\" name=\"page\" value=\"";
            echo (isset($context["current_page"]) ? $context["current_page"] : null);
            echo "\">
";
        }
        // line 10
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\">";
        }
        // line 11
        echo "\t<table>
\t\t";
        // line 12
        if (((!$this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_disable_name")) || ((isset($context["mod"]) ? $context["mod"] : null) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "bypass_field_disable"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 14
            echo gettext("Name");
            // line 15
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"name\" size=\"25\" maxlength=\"35\" autocomplete=\"off\"> ";
            // line 18
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "allow_no_country") && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "country_flags"))) {
                echo "<input id=\"no_country\" name=\"no_country\" type=\"checkbox\"> <label for=\"no_country\">";
                echo gettext("Don't show my flag");
                echo "</label>";
            }
            // line 19
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t</td>
\t\t</tr>";
        }
        // line 22
        echo "\t\t";
        if (((!$this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_disable_email")) || ((isset($context["mod"]) ? $context["mod"] : null) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "bypass_field_disable"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 24
            echo gettext("Email");
            // line 25
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t";
            // line 28
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_email_selectbox")) {
                // line 29
                echo "\t\t\t\t<select name=\"email\" id=\"email_selectbox\" autocomplete=\"off\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t<option value=\"sage\">sage</option>
\t\t\t\t\t";
                // line 32
                if ((!$this->getAttribute((isset($context["config"]) ? $context["config"] : null), "always_noko"))) {
                    echo "<option value=\"noko\">noko</option>";
                }
                // line 33
                echo "\t\t\t\t</select>
\t\t\t\t";
            } else {
                // line 35
                echo "\t\t\t\t<input type=\"text\" name=\"email\" size=\"25\" maxlength=\"40\" autocomplete=\"off\">
\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t\t";
            // line 38
            if ((!((!($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_disable_subject") || ((isset($context["id"]) ? $context["id"] : null) && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_disable_reply_subject")))) || ((isset($context["mod"]) ? $context["mod"] : null) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "bypass_field_disable"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri")))))) {
                // line 39
                echo "\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
                if ((isset($context["id"]) ? $context["id"] : null)) {
                    echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "button_reply");
                } else {
                    echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "button_newtopic");
                }
                echo "\" />";
                if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "spoiler_images")) {
                    echo " <input id=\"spoiler\" name=\"spoiler\" type=\"checkbox\"> <label for=\"spoiler\">";
                    echo gettext("Spoiler Image");
                    echo "</label>\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t</td>
\t\t</tr>";
        }
        // line 44
        echo "\t\t";
        if (((!($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_disable_subject") || ((isset($context["id"]) ? $context["id"] : null) && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_disable_reply_subject")))) || ((isset($context["mod"]) ? $context["mod"] : null) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "bypass_field_disable"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 46
            echo gettext("Subject");
            // line 47
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input style=\"float:left;\" type=\"text\" name=\"subject\" size=\"25\" maxlength=\"100\" autocomplete=\"off\">
\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
            // line 51
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "button_reply");
            } else {
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "button_newtopic");
            }
            echo "\" />";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "spoiler_images")) {
                echo " <input id=\"spoiler\" name=\"spoiler\" type=\"checkbox\"> <label for=\"spoiler\">";
                echo gettext("Spoiler Image");
                echo "</label>";
            }
            // line 52
            echo "\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 55
        echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
        // line 57
        echo gettext("Comment");
        // line 58
        echo "\t\t\t\t";
        echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
        echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<textarea name=\"body\" id=\"body\" rows=\"5\" cols=\"35\"></textarea>
\t\t\t\t";
        // line 62
        echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
        echo "
\t\t\t\t";
        // line 63
        if ((!((!($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_disable_subject") || ((isset($context["id"]) ? $context["id"] : null) && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_disable_reply_subject")))) || ((isset($context["mod"]) ? $context["mod"] : null) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "bypass_field_disable"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri")))))) {
            // line 64
            echo "\t\t\t\t";
            if ((!((!$this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_disable_email")) || ((isset($context["mod"]) ? $context["mod"] : null) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "bypass_field_disable"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri")))))) {
                // line 65
                echo "\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
                if ((isset($context["id"]) ? $context["id"] : null)) {
                    echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "button_reply");
                } else {
                    echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "button_newtopic");
                }
                echo "\" />";
                if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "spoiler_images")) {
                    echo " <input id=\"spoiler\" name=\"spoiler\" type=\"checkbox\"> <label for=\"spoiler\">";
                    echo gettext("Spoiler Image");
                    echo "</label>";
                }
                // line 66
                echo "\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t";
        }
        // line 68
        echo "\t\t\t</td>
\t\t</tr>
\t\t";
        // line 70
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "recaptcha")) {
            // line 71
            echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
            // line 73
            echo gettext("Verification");
            // line 74
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<script type=\"text/javascript\" src=\"//www.google.com/recaptcha/api/challenge?k=";
            // line 77
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "recaptcha_public");
            echo "\"></script>
\t\t\t\t";
            // line 78
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 82
        echo "\t\t";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "user_flag")) {
            // line 83
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 84
            echo gettext("Flag");
            echo "</th>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"user_flag\" id=\"user_flag\">
\t\t\t\t\t\t<option value=\"\">";
            // line 87
            echo gettext("None");
            echo "</option>
\t\t\t\t\t\t";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "user_flags"));
            foreach ($context['_seq'] as $context["flag"] => $context["text"]) {
                // line 89
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo (isset($context["flag"]) ? $context["flag"] : null);
                echo "\">";
                echo (isset($context["text"]) ? $context["text"] : null);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 95
        echo "\t\t";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "allowed_tags") && (!(isset($context["id"]) ? $context["id"] : null)))) {
            // line 96
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 97
            echo gettext("Tag");
            echo "</th>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"tag\">
\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "allowed_tags"));
            foreach ($context['_seq'] as $context["id"] => $context["tag"]) {
                // line 101
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null));
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null));
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 107
        echo "\t\t<tr id=\"upload\">
\t\t\t<th>
\t\t\t\t";
        // line 109
        echo gettext("File");
        // line 110
        echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"file\" name=\"file\" id=\"upload_file\">

\t\t\t\t<script type=\"text/javascript\">if (typeof init_file_selector !== 'undefined') init_file_selector(";
        // line 114
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "max_images");
        echo ");</script>

\t\t\t\t";
        // line 116
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "allow_upload_by_url")) {
            // line 117
            echo "\t\t\t\t\t<div style=\"float:none;text-align:left\" id=\"upload_url\">
\t\t\t\t\t\t<label for=\"file_url\">";
            // line 118
            echo gettext("Or URL");
            echo "</label>: 
\t\t\t\t\t\t<input style=\"display:inline\" type=\"text\" id=\"file_url\" name=\"file_url\" size=\"35\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t";
        echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
        echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 125
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "enable_embedding")) {
            // line 126
            echo "\t\t<tr id=\"upload_embed\">
\t\t\t<th>
\t\t\t\t";
            // line 128
            echo gettext("Embed");
            // line 129
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"embed\" value=\"\" size=\"30\" maxlength=\"120\" autocomplete=\"off\">
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 136
        echo "\t\t";
        if (((isset($context["mod"]) ? $context["mod"] : null) && ((((!(isset($context["id"]) ? $context["id"] : null)) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "sticky"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) || ((!(isset($context["id"]) ? $context["id"] : null)) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "lock"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri")))) || twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "rawhtml"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))))) {
            // line 137
            echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
            // line 139
            echo gettext("Flags");
            // line 140
            echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t";
            // line 142
            if (((!(isset($context["id"]) ? $context["id"] : null)) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "sticky"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri")))) {
                echo "<div class=\"center\">
\t\t\t\t\t<label for=\"sticky\">";
                // line 143
                echo gettext("Sticky");
                echo "</label>
\t\t\t\t\t<input title=\"";
                // line 144
                echo gettext("Sticky");
                echo "\" type=\"checkbox\" name=\"sticky\" id=\"sticky\"><br>
\t\t\t\t</div>";
            }
            // line 146
            echo "\t\t\t\t";
            if (((!(isset($context["id"]) ? $context["id"] : null)) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "lock"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri")))) {
                echo "<div class=\"center\">
\t\t\t\t\t<label for=\"lock\">";
                // line 147
                echo gettext("Lock");
                echo "</label><br>
\t\t\t\t\t<input title=\"";
                // line 148
                echo gettext("Lock");
                echo "\" type=\"checkbox\" name=\"lock\" id=\"lock\">
\t\t\t\t</div>";
            }
            // line 150
            echo "\t\t\t\t";
            if (twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "rawhtml"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))) {
                echo "<div class=\"center\">
\t\t\t\t\t<label for=\"raw\">";
                // line 151
                echo gettext("Raw HTML");
                echo "</label><br>
\t\t\t\t\t<input title=\"";
                // line 152
                echo gettext("Raw HTML");
                echo "\" type=\"checkbox\" name=\"raw\" id=\"raw\">
\t\t\t\t</div>";
            }
            // line 154
            echo "\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 157
        echo "\t\t";
        if (((!$this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field_disable_password")) || ((isset($context["mod"]) ? $context["mod"] : null) && twig_hasPermission_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "mod"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "bypass_field_disable"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"))))) {
            echo "<tr>
\t\t\t<th>
\t\t\t\t";
            // line 159
            echo gettext("Password");
            // line 160
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"password\" value=\"\" size=\"12\" maxlength=\"18\" autocomplete=\"off\"> 
\t\t\t\t<span class=\"unimportant\">";
            // line 164
            echo gettext("(For file deletion.)");
            echo "</span>
\t\t\t\t";
            // line 165
            echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(), "method");
            echo "
\t\t\t</td>
\t\t</tr>";
        }
        // line 168
        echo "\t</table>
";
        // line 169
        echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "html", array(0 => true), "method");
        echo "
<input type=\"hidden\" name=\"hash\" value=\"";
        // line 170
        echo $this->getAttribute((isset($context["antibot"]) ? $context["antibot"] : null), "hash", array(), "method");
        echo "\">
</form>

<script type=\"text/javascript\">";
        // line 175
        echo "
\trememberStuff();
";
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "post_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 175,  477 => 170,  473 => 169,  470 => 168,  464 => 165,  460 => 164,  450 => 159,  439 => 154,  434 => 152,  430 => 151,  425 => 150,  420 => 148,  416 => 147,  411 => 146,  406 => 144,  402 => 143,  394 => 140,  392 => 139,  388 => 137,  385 => 136,  374 => 129,  368 => 126,  366 => 125,  359 => 122,  352 => 118,  347 => 116,  342 => 114,  336 => 110,  334 => 109,  330 => 107,  324 => 103,  313 => 101,  309 => 100,  300 => 96,  297 => 95,  291 => 91,  280 => 89,  276 => 88,  266 => 84,  263 => 83,  253 => 78,  249 => 77,  242 => 74,  240 => 73,  236 => 71,  234 => 70,  230 => 68,  224 => 66,  208 => 64,  206 => 63,  202 => 62,  192 => 57,  188 => 55,  163 => 47,  155 => 44,  148 => 41,  145 => 40,  121 => 35,  117 => 33,  108 => 29,  106 => 28,  99 => 25,  97 => 24,  78 => 18,  71 => 15,  69 => 14,  64 => 12,  61 => 11,  57 => 10,  24 => 2,  115 => 20,  112 => 19,  94 => 16,  89 => 15,  87 => 14,  82 => 12,  70 => 10,  67 => 9,  43 => 6,  37 => 4,  27 => 2,  386 => 90,  383 => 87,  372 => 128,  365 => 82,  358 => 78,  353 => 76,  349 => 117,  339 => 72,  337 => 71,  319 => 70,  303 => 97,  284 => 68,  279 => 65,  277 => 64,  272 => 87,  268 => 62,  264 => 61,  260 => 82,  257 => 59,  251 => 58,  248 => 57,  241 => 54,  227 => 67,  211 => 65,  194 => 58,  191 => 50,  189 => 49,  186 => 48,  180 => 46,  177 => 45,  174 => 44,  172 => 43,  167 => 41,  164 => 40,  162 => 39,  147 => 34,  141 => 32,  132 => 39,  130 => 38,  119 => 48,  84 => 19,  79 => 20,  51 => 8,  49 => 7,  41 => 5,  36 => 10,  33 => 3,  31 => 3,  527 => 407,  518 => 403,  514 => 401,  512 => 400,  509 => 399,  493 => 398,  491 => 396,  484 => 392,  480 => 391,  454 => 389,  452 => 160,  446 => 364,  444 => 157,  412 => 362,  403 => 334,  398 => 142,  315 => 326,  259 => 246,  245 => 191,  243 => 182,  223 => 180,  221 => 165,  219 => 164,  185 => 163,  183 => 52,  179 => 131,  171 => 51,  169 => 125,  157 => 36,  150 => 35,  142 => 115,  136 => 114,  22 => 1,  161 => 46,  154 => 37,  151 => 36,  143 => 34,  135 => 30,  131 => 30,  125 => 37,  123 => 26,  118 => 26,  113 => 32,  109 => 18,  107 => 22,  100 => 18,  96 => 17,  91 => 22,  77 => 14,  74 => 11,  66 => 12,  59 => 8,  54 => 10,  48 => 9,  45 => 6,  39 => 7,  35 => 6,  29 => 2,  23 => 1,);
    }
}
