<?php

/* mod/rebuild.html */
class __TwigTemplate_0865db3fbfd9e833cd643979b82e6e44f3c45fb09791582e79bf07611b84a962 extends Twig_Template
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
        echo "<form style=\"width:300px;margin:auto\" action=\"?/rebuild\" method=\"post\">
\t<input type=\"hidden\" name=\"token\" value=\"";
        // line 2
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "\">
\t<ul id=\"rebuild\">
\t\t<li style=\"margin-bottom:8px\">
\t\t\t<input type=\"checkbox\" name=\"rebuild_all\" id=\"rebuild_all\" onchange=\"toggleall(this.checked)\"> 
\t\t\t<label for=\"rebuild_all\"><strong>";
        // line 6
        echo gettext("Toggle all");
        echo "</strong></label>
\t\t\t<script>
\t\t\t\tfunction toggleall(val) {
\t\t\t\t\t/* TODO: something more suitable for all browsers? */
\t\t\t\t\tvar elements = document.getElementById('rebuild').querySelectorAll('input');
\t\t\t\t\tfor (i in elements) {
\t\t\t\t\t\telements[i].checked = val;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t</script>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_cache\" id=\"rebuild_cache\" checked> 
\t\t\t<label for=\"rebuild_cache\">";
        // line 19
        echo gettext("Flush cache");
        echo "</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_javascript\" id=\"rebuild_javascript\" checked> 
\t\t\t<label for=\"rebuild_javascript\">";
        // line 23
        echo gettext("Rebuild Javascript");
        echo "</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_index\" id=\"rebuild_index\" checked> 
\t\t\t<label for=\"rebuild_index\">";
        // line 27
        echo gettext("Rebuild index pages");
        echo "</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_thread\" id=\"rebuild_thread\" checked> 
\t\t\t<label for=\"rebuild_thread\">";
        // line 31
        echo gettext("Rebuild thread pages");
        echo "</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_themes\" id=\"rebuild_themes\" checked> 
\t\t\t<label for=\"rebuild_themes\">";
        // line 35
        echo gettext("Rebuild themes");
        echo "</label>
\t\t</li>
\t\t<li>
\t\t\t<input type=\"checkbox\" name=\"rebuild_posts\" id=\"rebuild_posts\"> 
\t\t\t<label for=\"rebuild_posts\">";
        // line 39
        echo gettext("Rebuild replies");
        echo "</label>
\t\t</li>
\t</ul>
\t
\t<hr>
\t
\t<ul id=\"boards\">
\t\t<li style=\"margin-bottom:8px\">
\t\t\t<input type=\"checkbox\" name=\"boards_all\" id=\"boards_all\" onchange=\"toggleallboards(this.checked)\" checked> 
\t\t\t<label for=\"boards_all\"><strong>";
        // line 48
        echo gettext("All boards");
        echo "</strong></label>
\t\t\t<script>
\t\t\t\tfunction toggleallboards(val) {
\t\t\t\t\t/* TODO: something more suitable for all browsers? */
\t\t\t\t\tvar elements = document.getElementById('boards').querySelectorAll('input');
\t\t\t\t\tfor (i in elements) {
\t\t\t\t\t\telements[i].checked = val;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t</script>
\t\t</li>
\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boards"]) ? $context["boards"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["board"]) {
            // line 60
            echo "\t\t\t<li>
\t\t\t\t<input type=\"checkbox\" name=\"board_";
            // line 61
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
            echo "\" id=\"board-";
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
            echo "\" checked> 
\t\t\t\t<label for=\"board-";
            // line 62
            echo $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri");
            echo "\">
\t\t\t\t\t";
            // line 63
            echo sprintf($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "board_abbreviation"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri"));
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "title"));
            echo "
\t\t\t\t</label>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t</ul>
\t
\t<p style=\"text-align:center\">
\t\t<input type=\"submit\" value=\"";
        // line 70
        echo gettext("Rebuild");
        echo "\" name=\"rebuild\">
\t</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "mod/rebuild.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 70,  138 => 67,  126 => 63,  122 => 62,  116 => 61,  113 => 60,  109 => 59,  95 => 48,  83 => 39,  76 => 35,  69 => 31,  62 => 27,  55 => 23,  48 => 19,  32 => 6,  25 => 2,  22 => 1,);
    }
}
