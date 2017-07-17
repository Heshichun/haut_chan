<?php

/* themes/basic/index.html */
class __TwigTemplate_91fb4828bb77f60851fcf6c6f37fb61bc48c5a8aaea822ddc80bf7f9a506db35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_b2c910b7f6a20e4d8df6852035b6c837265ee18fa75894da54df33d4d2b695cb' => array($this, 'block___internal_b2c910b7f6a20e4d8df6852035b6c837265ee18fa75894da54df33d4d2b695cb'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_remove_whitespace_filter((string) $this->renderBlock("__internal_b2c910b7f6a20e4d8df6852035b6c837265ee18fa75894da54df33d4d2b695cb", $context, $blocks));
    }

    public function block___internal_b2c910b7f6a20e4d8df6852035b6c837265ee18fa75894da54df33d4d2b695cb($context, array $blocks = array())
    {
        // line 2
        echo "<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title>";
        // line 6
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title");
        echo "</title>
\t";
        // line 7
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta_keywords")) {
            echo "<meta name=\"keywords\" content=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta_keywords");
            echo "\">";
        }
        // line 8
        echo "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=yes\">
\t";
        // line 9
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url_favicon")) {
            echo "<link rel=\"shortcut icon\" href=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url_favicon");
            echo "\">";
        }
        // line 10
        echo "\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url_stylesheet");
        echo "\">
\t";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1) != "")) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" id=\"stylesheet\" href=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_stylesheets");
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1);
            echo "\">";
        }
        // line 12
        echo "\t";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "font_awesome")) {
            echo "<link rel=\"stylesheet\" href=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "font_awesome_css");
            echo "\">";
        }
        // line 13
        echo "</head>
<body class=\"8chan vichan ";
        // line 14
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            echo "is-moderator";
        } else {
            echo "is-not-moderator";
        }
        echo "\" data-stylesheet=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1) != "")) {
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1);
        } else {
            echo "default";
        }
        echo "\">
\t";
        // line 15
        echo $this->getAttribute((isset($context["boardlist"]) ? $context["boardlist"] : null), "top");
        echo "
\t<header>
\t\t<h1>";
        // line 17
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title");
        echo "</h1>
\t\t<div class=\"subtitle\">";
        // line 18
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subtitle");
        echo "</div>
\t</header>
\t
\t<div class=\"ban\">
\t\t";
        // line 22
        if ((count((isset($context["news"]) ? $context["news"] : null)) == 0)) {
            // line 23
            echo "\t\t\t<p style=\"text-align:center\" class=\"unimportant\">(No news to show.)</p>
\t\t";
        } else {
            // line 25
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 26
                echo "\t\t\t\t<h2 id=\"";
                echo $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id");
                echo "\">
\t\t\t\t\t";
                // line 27
                if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "subject")) {
                    // line 28
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "subject");
                    echo "
\t\t\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t\t\t<em>no subject</em>
\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t<span class=\"unimportant\"> &mdash; by ";
                echo $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "name");
                echo " at ";
                echo twig_date_filter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "time"), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "post_date"), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "timezone"));
                echo "</span>
\t\t\t\t</h2>
\t\t\t\t<p>";
                // line 34
                echo $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "body");
                echo "</p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t";
        }
        // line 37
        echo "\t</div>
\t
\t<hr/>
        <footer>
                <p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">- Tinyboard + 
                        <a href=\"https://engine.vichan.net/\">vichan</a> ";
        // line 42
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "version");
        echo " -
                <br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group    
                <br><a href=\"https://engine.vichan.net/\">vichan</a> Copyright &copy; 2012-2016 vichan-devel</p>
        </footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/basic/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  154 => 37,  151 => 36,  143 => 34,  135 => 32,  131 => 30,  125 => 28,  123 => 27,  118 => 26,  113 => 25,  109 => 23,  107 => 22,  100 => 18,  96 => 17,  91 => 15,  77 => 14,  74 => 13,  66 => 12,  59 => 11,  54 => 10,  48 => 9,  45 => 8,  39 => 7,  35 => 6,  29 => 2,  23 => 1,);
    }
}
