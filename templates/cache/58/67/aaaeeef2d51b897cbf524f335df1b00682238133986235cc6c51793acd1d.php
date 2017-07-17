<?php

/* mod/theme_config.html */
class __TwigTemplate_5867aaaeeef2d51b897cbf524f335df1b00682238133986235cc6c51793acd1d extends Twig_Template
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
        echo "<form action=\"\" method=\"post\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 2
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "\">
\t";
        // line 3
        if ((!(isset($context["config"]) ? $context["config"] : null))) {
            // line 4
            echo "\t\t<p style=\"text-align:center\" class=\"unimportant\">(No configuration required.)</p>
\t";
        } else {
            // line 6
            echo "\t\t<table>
\t\t\t";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "config"));
            foreach ($context['_seq'] as $context["_key"] => $context["conf"]) {
                // line 8
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 9
                echo $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "title");
                echo "</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 11
                if (($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "type") == "checkbox")) {
                    // line 12
                    echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
                    echo $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "name");
                    echo "\"
\t\t\t\t\t\t\t";
                    // line 13
                    if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "name"), array(), "array") || ((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "name"), array(), "array", true, true)) && $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "default")))) {
                        // line 14
                        echo "\t\t\t\t\t\t\t\tchecked
\t\t\t\t\t\t\t";
                    }
                    // line 15
                    echo ">
\t\t\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t\t\t\t<input type=\"text\" name=\"";
                    echo $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "name");
                    echo "\" 
\t\t\t\t\t\t\t";
                    // line 18
                    if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "name"), array(), "array")) {
                        // line 19
                        echo "\t\t\t\t\t\t\t\tvalue=\"";
                        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "name"), array(), "array");
                        echo "\"
\t\t\t\t\t\t\t";
                    } else {
                        // line 21
                        echo "\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "default")) {
                            echo "value=\"";
                            echo $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "default");
                            echo "\"";
                        }
                    }
                    // line 22
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "size")) {
                        // line 23
                        echo "\t\t\t\t\t\t\t\tsize=\"";
                        echo $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "size");
                        echo "\"
\t\t\t\t\t\t\t";
                    }
                    // line 24
                    echo ">
\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t";
                if ($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "comment")) {
                    // line 27
                    echo "\t\t\t\t\t\t <span class=\"unimportant\">";
                    echo $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "comment");
                    echo "</span>
\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t</table>
\t";
        }
        // line 34
        echo "\t<p style=\"text-align:center\">
\t\t<input name=\"install\" type=\"submit\" value=\"";
        // line 35
        echo gettext("Install theme");
        echo "\" />
\t</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "mod/theme_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  122 => 34,  118 => 32,  110 => 29,  104 => 27,  101 => 26,  97 => 24,  91 => 23,  88 => 22,  80 => 21,  74 => 19,  72 => 18,  67 => 17,  63 => 15,  59 => 14,  57 => 13,  52 => 12,  50 => 11,  45 => 9,  42 => 8,  38 => 7,  35 => 6,  31 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
