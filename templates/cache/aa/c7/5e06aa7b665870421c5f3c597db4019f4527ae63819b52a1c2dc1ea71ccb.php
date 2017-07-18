<?php

/* post/image_identification.html */
class __TwigTemplate_aac75e06aa7b665870421c5f3c597db4019f4527ae63819b52a1c2dc1ea71ccb extends Twig_Template
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
        if ((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "thumb") != "file") && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_identification"))) {
            // line 2
            echo "\t 
\t<span class='image_id'>
\t\t";
            // line 4
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_identification_imgops")) {
                // line 5
                echo "\t\t\t<a href=\"http://imgops.com/";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "domain");
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_img");
                echo $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file");
                echo "\" target=\"_blank\">ImgOps</a> 
\t\t";
            }
            // line 7
            echo "\t\t";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_identification_exif") && (twig_extension_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file")) == "jpg"))) {
                // line 8
                echo "\t\t\t<a href=\"http://exif.int21h.win/?url=";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "domain");
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_img");
                echo $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file");
                echo "\" target=\"_blank\">Exif</a> 
\t\t";
            }
            // line 10
            echo "\t\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_identification_google")) {
                // line 11
                echo "\t\t\t<a href=\"https://www.google.com/searchbyimage?image_url=";
                echo twig_urlencode_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "domain"));
                echo twig_urlencode_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_img"));
                echo twig_urlencode_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file"));
                echo "\" target=\"_blank\">Google</a> 
\t\t";
            }
            // line 13
            echo "\t\t";
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_identification_iqdb")) {
                // line 14
                echo "\t\t\t<a href=\"http://iqdb.org/?url=";
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "domain");
                echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_img");
                echo $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file");
                echo "\" target=\"_blank\">iqdb</a>
\t\t";
            }
            // line 16
            echo "\t</span>
";
        }
    }

    public function getTemplateName()
    {
        return "post/image_identification.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  63 => 14,  60 => 13,  52 => 11,  49 => 10,  41 => 8,  38 => 7,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
