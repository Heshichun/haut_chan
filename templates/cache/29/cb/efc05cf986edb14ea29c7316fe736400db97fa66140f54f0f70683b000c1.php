<?php

/* mod/edit_page.html */
class __TwigTemplate_29cbefc05cf986edb14ea29c7316fe736400db97fa66140f54f0f70683b000c1 extends Twig_Template
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
        echo "<div style=\"text-align:center\">
<form method=\"POST\">
\t<input name=\"token\" value=\"";
        // line 3
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "\" type=\"hidden\">
\t<table>
\t\t<tr>
\t\t<th>";
        // line 6
        echo gettext("Markup method");
        // line 7
        echo "\t\t\t";
        $context["allowed_html"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "allowed_html");
        // line 8
        echo "\t\t\t";
        echo strtr(gettext("<p class=\"unimportant\">\"markdown\" is provided by <a href=\"http://parsedown.org/\">parsedown</a>. Note: images disabled.</p>
\t\t\t<p class=\"unimportant\">\"html\" allows the following tags:<br/>%allowed_html%</p>
\t\t\t<p class=\"unimportant\">\"infinity\" is the same as what is used in posts.</p>
\t\t\t<p class=\"unimportant\">This page will not convert between formats,<br/>choose it once or do the conversion yourself!</p>"), array("%allowed_html%" => (isset($context["allowed_html"]) ? $context["allowed_html"] : null), ));
        // line 12
        echo "\t\t</th>
\t\t<td>
\t\t\t<select name=\"method\">
\t\t\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "markdown", 1 => "html", 2 => "infinity"));
        foreach ($context['_seq'] as $context["_key"] => $context["markup"]) {
            // line 16
            echo "\t\t\t\t<option value=\"";
            echo (isset($context["markup"]) ? $context["markup"] : null);
            echo "\" ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "type") == (isset($context["markup"]) ? $context["markup"] : null))) {
                echo "selected";
            }
            echo ">";
            echo (isset($context["markup"]) ? $context["markup"] : null);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['markup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t</select>
\t\t</td></tr>
\t\t<tr><th>";
        // line 20
        echo gettext("Page content");
        // line 21
        echo "\t\t<br/>
\t\t<span class=\"unimportant\">";
        // line 22
        echo gettext("Page will appear at:");
        echo " 
\t\t";
        // line 23
        if ((isset($context["board"]) ? $context["board"] : null)) {
            echo " <a href=\"/";
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
            echo "/";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
            echo ".html\">";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "domain");
            echo "/";
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
            echo "/";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
            echo ".html</a>
\t\t";
        } else {
            // line 24
            echo " <a href=\"/";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
            echo ".html\">";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site");
            echo "/";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
            echo ".html</a>
\t\t";
        }
        // line 25
        echo "</span></th><td><textarea name=\"content\" style=\"height:500px;width:500px\">";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</textarea></td><tr>
\t</table>
\t<input type=\"submit\" value=\"Save page\">
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "mod/edit_page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  95 => 24,  80 => 23,  76 => 22,  73 => 21,  71 => 20,  67 => 18,  52 => 16,  48 => 15,  43 => 12,  37 => 8,  34 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }
}
