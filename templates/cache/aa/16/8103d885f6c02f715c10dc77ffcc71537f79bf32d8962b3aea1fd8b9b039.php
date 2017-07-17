<?php

/* post/image.html */
class __TwigTemplate_aa168103d885f6c02f715c10dc77ffcc71537f79bf32d8962b3aea1fd8b9b039 extends Twig_Template
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
        return array (  150 => 45,  139 => 41,  132 => 39,  125 => 37,  122 => 36,  116 => 34,  110 => 32,  108 => 31,  97 => 27,  88 => 23,  85 => 22,  73 => 18,  58 => 13,  55 => 12,  45 => 7,  36 => 7,  29 => 4,  27 => 3,  71 => 17,  63 => 14,  60 => 14,  49 => 9,  41 => 9,  38 => 5,  30 => 5,  28 => 4,  167 => 37,  149 => 34,  147 => 33,  142 => 42,  137 => 30,  134 => 29,  128 => 27,  120 => 25,  118 => 24,  112 => 22,  103 => 30,  101 => 29,  94 => 17,  92 => 16,  87 => 15,  81 => 13,  79 => 20,  70 => 10,  64 => 8,  62 => 7,  51 => 10,  34 => 6,  31 => 4,  25 => 2,  22 => 1,  348 => 89,  345 => 87,  341 => 85,  336 => 84,  333 => 79,  330 => 78,  327 => 77,  321 => 75,  318 => 74,  315 => 69,  313 => 68,  310 => 67,  308 => 66,  305 => 65,  299 => 63,  296 => 62,  293 => 61,  287 => 59,  284 => 58,  273 => 56,  270 => 55,  267 => 54,  256 => 52,  253 => 51,  242 => 49,  239 => 48,  236 => 47,  230 => 45,  226 => 43,  223 => 42,  220 => 41,  217 => 40,  211 => 38,  207 => 36,  204 => 35,  201 => 34,  198 => 33,  192 => 31,  188 => 29,  185 => 28,  182 => 27,  179 => 26,  173 => 24,  169 => 22,  166 => 21,  164 => 20,  152 => 35,  140 => 31,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  124 => 13,  121 => 12,  119 => 11,  115 => 23,  109 => 21,  100 => 8,  98 => 7,  95 => 6,  89 => 5,  83 => 4,  80 => 3,  77 => 1,  72 => 95,  67 => 16,  52 => 11,  35 => 91,  33 => 90,  26 => 61,  24 => 2,);
    }
}
