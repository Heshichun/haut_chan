<?php

/* mod/pages.html */
class __TwigTemplate_d85fc7b422fd7f6bdcba9da493222cbcb46fba8fa0a3d051144c5780f6b04efb extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
<div style=\"text-align:center\">
<p class=\"unimportant\">
";
        // line 4
        if ((isset($context["board"]) ? $context["board"] : null)) {
            // line 5
            $context["page_max"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "pages_max");
            // line 6
            echo strtr(gettext("This page allows you to create static pages for your board. The limit is %page_max% pages per board. You will still have to link to your pages somewhere in your board, for example in a sticky or in the board's announcement. To make links in the board's announcement, use &lt;a&gt; HTML tags."), array("%page_max%" => (isset($context["page_max"]) ? $context["page_max"] : null), ));
        } else {
            // line 8
            echo gettext("This page allows you to create static pages for your imageboard.");
        }
        // line 10
        echo "<h2>";
        echo gettext("Existing pages");
        echo "</h2>
";
        // line 11
        if ((isset($context["pages"]) ? $context["pages"] : null)) {
            // line 12
            echo "<form>
<table style=\"margin:auto\">
<tr><th>";
            // line 14
            echo gettext("URL");
            echo "</th><th>";
            echo gettext("Title");
            echo "</th><th>";
            echo gettext("Edit");
            echo "</th><th>";
            echo gettext("Delete");
            echo "</tr>
";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 16
                echo "<tr><td>";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
                echo "</td><td>";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
                echo "</td><td><a href=\"?/edit_page/";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id");
                echo "\">";
                echo gettext("Edit");
                echo "</a></td><td><a href=\"?/edit_pages/delete/";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
                if ((isset($context["board"]) ? $context["board"] : null)) {
                    echo "/";
                    echo (isset($context["board"]) ? $context["board"] : null);
                }
                echo "/";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "delete_token");
                echo "\">";
                echo gettext("Delete");
                echo "</a></td>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "<em>No pages yet!</em>
";
        }
        // line 21
        echo "</table>
</form>
<hr/>
<h2>";
        // line 24
        echo gettext("Create a new page");
        echo "</h2>
<form method=\"POST\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 26
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "\">
<table>
<tr><th>";
        // line 28
        echo gettext("URL");
        echo "</th><th>";
        echo gettext("Title");
        echo "</th></tr>
<tr><td><input type=\"text\" name=\"page\"></td><td><input type=\"text\" name=\"title\"></td>
</table>\t
<input type=\"submit\" value=\"";
        // line 31
        echo gettext("Create");
        echo "\">
</form>

</div>
";
    }

    public function getTemplateName()
    {
        return "mod/pages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  107 => 28,  102 => 26,  97 => 24,  92 => 21,  88 => 19,  62 => 16,  58 => 15,  48 => 14,  44 => 12,  42 => 11,  37 => 10,  34 => 8,  31 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }
}
