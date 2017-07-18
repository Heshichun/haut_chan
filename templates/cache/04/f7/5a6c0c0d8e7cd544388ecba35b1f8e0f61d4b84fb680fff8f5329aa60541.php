<?php

/* post/file_controls.html */
class __TwigTemplate_04f75a6c0c0d8e7cd544388ecba35b1f8e0f61d4b84fb680fff8f5329aa60541 extends Twig_Template
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
        return array (  36 => 7,  34 => 6,  29 => 4,  27 => 3,  71 => 16,  63 => 14,  60 => 13,  52 => 11,  49 => 10,  41 => 9,  38 => 7,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
