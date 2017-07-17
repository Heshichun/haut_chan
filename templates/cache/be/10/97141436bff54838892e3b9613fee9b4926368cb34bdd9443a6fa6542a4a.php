<?php

/* post/file_controls.html */
class __TwigTemplate_be1097141436bff54838892e3b9613fee9b4926368cb34bdd9443a6fa6542a4a extends Twig_Template
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
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "files") && (isset($context["mod"]) ? $context["mod"] : null))) {
            // line 2
            echo "<span class=\"controls\">
";
            // line 3
            if ((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file") != "deleted") && twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "deletefile"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri")))) {
                // line 4
                echo twig_secure_link_confirm($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_deletefile"), gettext("Delete file"), gettext("Are you sure you want to delete this file?"), (((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "deletefile/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")) . "/") . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0")));
                echo "&nbsp;
";
            }
            // line 6
            if (((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file") && ($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file") != "deleted")) && ($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "thumb") != "spoiler")) && twig_hasPermission_filter((isset($context["mod"]) ? $context["mod"] : null), $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "spoilerimage"), $this->getAttribute((isset($context["board"]) ? $context["board"] : null), "uri")))) {
                // line 7
                echo twig_secure_link_confirm($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mod"), "link_spoilerimage"), gettext("Spoiler file"), gettext("Are you sure you want to spoiler this file?"), (((($this->getAttribute((isset($context["board"]) ? $context["board"] : null), "dir") . "spoiler/") . $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id")) . "/") . $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0")));
                echo "
";
            }
            // line 9
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "post/file_controls.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  29 => 4,  27 => 3,  71 => 16,  63 => 14,  60 => 13,  49 => 10,  41 => 9,  38 => 7,  30 => 5,  28 => 4,  167 => 37,  149 => 34,  147 => 33,  142 => 32,  137 => 30,  134 => 29,  128 => 27,  120 => 25,  118 => 24,  112 => 22,  103 => 19,  101 => 18,  94 => 17,  92 => 16,  87 => 15,  81 => 13,  79 => 12,  70 => 10,  64 => 8,  62 => 7,  51 => 6,  34 => 6,  31 => 4,  25 => 2,  22 => 1,  348 => 89,  345 => 87,  341 => 85,  336 => 84,  333 => 79,  330 => 78,  327 => 77,  321 => 75,  318 => 74,  315 => 69,  313 => 68,  310 => 67,  308 => 66,  305 => 65,  299 => 63,  296 => 62,  293 => 61,  287 => 59,  284 => 58,  273 => 56,  270 => 55,  267 => 54,  256 => 52,  253 => 51,  242 => 49,  239 => 48,  236 => 47,  230 => 45,  226 => 43,  223 => 42,  220 => 41,  217 => 40,  211 => 38,  207 => 36,  204 => 35,  201 => 34,  198 => 33,  192 => 31,  188 => 29,  185 => 28,  182 => 27,  179 => 26,  173 => 24,  169 => 22,  166 => 21,  164 => 20,  152 => 35,  140 => 31,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  124 => 13,  121 => 12,  119 => 11,  115 => 23,  109 => 21,  100 => 8,  98 => 7,  95 => 6,  89 => 5,  83 => 4,  80 => 3,  77 => 1,  72 => 95,  67 => 94,  52 => 11,  35 => 91,  33 => 90,  26 => 61,  24 => 2,);
    }
}
