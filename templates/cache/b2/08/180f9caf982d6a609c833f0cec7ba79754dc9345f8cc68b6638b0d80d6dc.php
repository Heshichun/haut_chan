<?php

/* post/image.html */
class __TwigTemplate_b208180f9caf982d6a609c833f0cec7ba79754dc9345f8cc68b6638b0d80d6dc extends Twig_Template
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
        echo "<a href=\"
\t";
        // line 2
        if (((twig_extension_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "file")) == "webm") || (twig_extension_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "file")) == "mp4"))) {
            // line 3
            echo "\t\t";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
            echo "player.php?v=";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_img");
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "file");
            echo "&amp;t=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "filename"), "url");
            echo "&amp;loop=1
\t";
        } else {
            // line 5
            echo "\t\t";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_img");
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "file");
            echo "
\t";
        }
        // line 7
        echo "\t\"
\t target=\"_blank\"
\t";
        // line 9
        if ((((($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumb") == "file") || ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "modifiers"), "is_file", array(), "array") == "1")) || (twig_extension_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "filename")) == "webm")) || (twig_extension_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "file")) == "mp4"))) {
            // line 10
            echo "\t\t class=\"file\"
\t";
        }
        // line 12
        echo ">
\t";
        // line 13
        if (((twig_extension_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumb")) == "webm") || (twig_extension_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumb")) == "mp4"))) {
            // line 14
            echo "\t\t<video autoplay class=\"post-image\" src=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_thumb");
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumb");
            echo "\"
\t\t\t poster=\"
\t\t\t\t";
            // line 16
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
            echo "
\t\t\t\t";
            // line 17
            if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_icons"), twig_extension_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "filename")), array(), "array")) {
                // line 18
                echo "\t\t\t\t\t";
                echo sprintf($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_thumb"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_icons"), twig_extension_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "filename")), array(), "array"));
                echo "
\t\t\t\t";
            } else {
                // line 20
                echo "\t\t\t\t\t";
                echo sprintf($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_thumb"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_icons"), "default"));
                echo "
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\"
\t\t\t style=\"width:";
            // line 23
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumbwidth");
            echo "px;height:";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumbheight");
            echo "px\"
\t\t>
\t\t</video>
\t";
        } else {
            // line 27
            echo "\t\t<img class=\"post-image\" 
\t\t\tsrc=\"
\t\t\t\t";
            // line 29
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumb") == "file")) {
                // line 30
                echo "\t\t\t\t\t";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
                echo "
\t\t\t\t\t";
                // line 31
                if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_icons"), twig_extension_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "filename")), array(), "array")) {
                    // line 32
                    echo "\t\t\t\t\t\t";
                    echo sprintf($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_thumb"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_icons"), twig_extension_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "filename")), array(), "array"));
                    echo "
\t\t\t\t\t";
                } else {
                    // line 34
                    echo "\t\t\t\t\t\t";
                    echo sprintf($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_thumb"), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "file_icons"), "default"));
                    echo "
\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumb") == "spoiler")) {
                // line 37
                echo "\t\t\t\t\t";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "spoiler_image");
                echo "
\t\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t\t";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_thumb");
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumb");
                echo "
\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\"
\t\t\t style=\"width:";
            // line 42
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumbwidth");
            echo "px;height:";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumbheight");
            echo "px\" alt=\"\" 
\t\t/>
\t";
        }
        // line 45
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "post/image.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 45,  142 => 42,  139 => 41,  132 => 39,  125 => 37,  122 => 36,  116 => 34,  110 => 32,  108 => 31,  103 => 30,  101 => 29,  97 => 27,  88 => 23,  85 => 22,  79 => 20,  73 => 18,  67 => 16,  58 => 13,  55 => 12,  51 => 10,  45 => 7,  25 => 2,  36 => 7,  34 => 6,  29 => 4,  27 => 3,  71 => 17,  63 => 14,  60 => 14,  52 => 11,  49 => 9,  41 => 9,  38 => 5,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
