<?php

/* post_form.html */
class __TwigTemplate_e25b6bdd6ced3176b1773cd61b9998a9a6cf393da11914bdc713b41bf715c49d extends Twig_Template
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
        return array (  483 => 175,  477 => 170,  473 => 169,  470 => 168,  464 => 165,  460 => 164,  452 => 160,  450 => 159,  444 => 157,  439 => 154,  434 => 152,  430 => 151,  425 => 150,  420 => 148,  416 => 147,  411 => 146,  406 => 144,  402 => 143,  398 => 142,  394 => 140,  392 => 139,  388 => 137,  385 => 136,  374 => 129,  368 => 126,  366 => 125,  359 => 122,  352 => 118,  347 => 116,  342 => 114,  334 => 109,  324 => 103,  309 => 100,  300 => 96,  297 => 95,  291 => 91,  280 => 89,  276 => 88,  266 => 84,  263 => 83,  249 => 77,  240 => 73,  234 => 70,  224 => 66,  208 => 64,  206 => 63,  171 => 51,  163 => 47,  161 => 46,  155 => 44,  148 => 41,  145 => 40,  117 => 33,  106 => 28,  99 => 25,  91 => 22,  386 => 90,  383 => 87,  372 => 128,  365 => 82,  358 => 78,  353 => 76,  349 => 117,  339 => 72,  337 => 71,  319 => 70,  303 => 97,  279 => 65,  277 => 64,  272 => 87,  268 => 62,  264 => 61,  260 => 82,  257 => 59,  251 => 58,  248 => 57,  241 => 54,  227 => 67,  194 => 58,  191 => 50,  186 => 48,  183 => 52,  180 => 46,  162 => 39,  141 => 32,  135 => 30,  123 => 26,  96 => 23,  84 => 19,  113 => 32,  111 => 19,  107 => 18,  82 => 15,  78 => 18,  75 => 13,  66 => 10,  50 => 6,  44 => 5,  246 => 61,  228 => 58,  202 => 62,  189 => 49,  177 => 45,  174 => 44,  172 => 43,  168 => 42,  157 => 36,  144 => 36,  131 => 32,  105 => 25,  90 => 21,  57 => 10,  68 => 15,  46 => 9,  43 => 8,  37 => 4,  69 => 14,  61 => 11,  59 => 19,  47 => 8,  32 => 5,  150 => 35,  139 => 41,  132 => 39,  125 => 37,  122 => 21,  116 => 28,  110 => 32,  108 => 29,  97 => 24,  88 => 20,  85 => 19,  73 => 17,  58 => 12,  55 => 12,  45 => 6,  36 => 10,  29 => 4,  27 => 2,  71 => 15,  63 => 9,  60 => 14,  49 => 7,  41 => 5,  38 => 3,  30 => 5,  28 => 4,  167 => 41,  149 => 34,  147 => 34,  142 => 35,  137 => 30,  134 => 25,  128 => 23,  120 => 25,  118 => 29,  112 => 22,  103 => 30,  101 => 29,  94 => 16,  92 => 22,  87 => 15,  81 => 13,  79 => 20,  70 => 10,  64 => 12,  62 => 14,  51 => 8,  34 => 6,  31 => 3,  25 => 2,  22 => 1,  348 => 89,  345 => 87,  341 => 85,  336 => 110,  333 => 79,  330 => 107,  327 => 77,  321 => 75,  318 => 74,  315 => 69,  313 => 101,  310 => 67,  308 => 66,  305 => 65,  299 => 63,  296 => 62,  293 => 61,  287 => 59,  284 => 68,  273 => 56,  270 => 55,  267 => 54,  256 => 52,  253 => 78,  242 => 74,  239 => 48,  236 => 71,  230 => 68,  226 => 43,  223 => 42,  220 => 41,  217 => 55,  211 => 65,  207 => 53,  204 => 52,  201 => 34,  198 => 33,  192 => 57,  188 => 55,  185 => 28,  182 => 27,  179 => 26,  173 => 24,  169 => 22,  166 => 21,  164 => 40,  152 => 35,  140 => 31,  136 => 17,  133 => 16,  130 => 38,  127 => 14,  124 => 13,  121 => 35,  119 => 24,  115 => 23,  109 => 21,  100 => 8,  98 => 7,  95 => 23,  89 => 5,  83 => 4,  80 => 3,  77 => 1,  72 => 12,  67 => 14,  52 => 11,  35 => 1,  33 => 9,  26 => 21,  24 => 2,);
    }
}
