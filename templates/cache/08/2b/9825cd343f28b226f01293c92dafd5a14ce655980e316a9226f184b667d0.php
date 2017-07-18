<?php

/* post/fileinfo.html */
class __TwigTemplate_082b9825cd343f28b226f01293c92dafd5a14ce655980e316a9226f184b667d0 extends Twig_Template
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
        echo "\t";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "embed")) {
            // line 2
            echo "\t\t";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "embed");
            echo "
    ";
        } else {
            // line 4
            echo "    <div class=\"files\">
    ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "files"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 6
                echo "        <div class=\"file";
                if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "num_files") > 1)) {
                    echo " multifile\" style=\"width:";
                    echo ($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "thumbwidth") + 40);
                    echo "px\"";
                } else {
                    echo "\"";
                }
                echo ">
\t";
                // line 7
                if (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file") == "deleted")) {
                    // line 8
                    echo "\t\t<img class=\"post-image deleted\" src=\"";
                    echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "image_deleted");
                    echo "\" alt=\"\" />
\t";
                } else {
                    // line 10
                    echo "\t\t<p class=\"fileinfo\">File: <a href=\"";
                    echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_img");
                    echo $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file");
                    echo "\">";
                    echo $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file");
                    echo "</a> <span class=\"unimportant\">
\t\t(
\t\t\t";
                    // line 12
                    if (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "thumb") == "spoiler")) {
                        // line 13
                        echo "\t\t\t\t";
                        echo gettext("Spoiler Image");
                        echo ", 
\t\t\t";
                    }
                    // line 15
                    echo "\t\t\t";
                    echo format_bytes($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "size"));
                    echo "
\t\t\t";
                    // line 16
                    if (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "width") && $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "height"))) {
                        // line 17
                        echo "\t\t\t\t, ";
                        echo $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "width");
                        echo "x";
                        echo $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "height");
                        echo "
\t\t\t\t";
                        // line 18
                        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "show_ratio")) {
                            // line 19
                            echo "\t\t\t\t\t, ";
                            echo twig_ratio_function($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "width"), $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "height"));
                            echo "
\t\t\t\t";
                        }
                        // line 21
                        echo "\t\t\t";
                    }
                    // line 22
                    echo "\t\t\t";
                    if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "show_filename") && $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "filename"))) {
                        // line 23
                        echo "\t\t\t\t, 
\t\t\t\t";
                        // line 24
                        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "filename")) > $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "max_filename_display"))) {
                            // line 25
                            echo "\t\t\t\t\t<span class=\"postfilename\" title=\"";
                            echo bidi_cleanup(twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "filename")));
                            echo "\">";
                            echo bidi_cleanup(twig_escape_filter($this->env, twig_filename_truncate_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "filename"), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "max_filename_display"))));
                            echo "</span>
\t\t\t\t";
                        } else {
                            // line 27
                            echo "\t\t\t\t\t<span class=\"postfilename\">";
                            echo bidi_cleanup(twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "filename")));
                            echo "</span>
\t\t\t\t";
                        }
                        // line 29
                        echo "\t\t\t";
                    }
                    // line 30
                    echo "\t\t)
\t\t";
                    // line 31
                    $this->env->loadTemplate("post/image_identification.html")->display($context);
                    // line 32
                    echo "\t\t";
                    $this->env->loadTemplate("post/file_controls.html")->display($context);
                    echo "</span></p>
\t";
                    // line 33
                    $this->env->loadTemplate("post/image.html")->display(array_merge($context, array("post" => (isset($context["file"]) ? $context["file"] : null))));
                    // line 34
                    echo "\t";
                }
                // line 35
                echo "</div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "post/fileinfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 37,  149 => 34,  147 => 33,  142 => 32,  137 => 30,  134 => 29,  128 => 27,  120 => 25,  118 => 24,  112 => 22,  103 => 19,  101 => 18,  94 => 17,  92 => 16,  87 => 15,  81 => 13,  79 => 12,  70 => 10,  64 => 8,  62 => 7,  51 => 6,  34 => 5,  31 => 4,  25 => 2,  22 => 1,  348 => 89,  345 => 87,  341 => 85,  336 => 84,  333 => 79,  330 => 78,  327 => 77,  321 => 75,  318 => 74,  315 => 69,  313 => 68,  310 => 67,  308 => 66,  305 => 65,  299 => 63,  296 => 62,  293 => 61,  287 => 59,  284 => 58,  273 => 56,  270 => 55,  267 => 54,  256 => 52,  253 => 51,  242 => 49,  239 => 48,  236 => 47,  230 => 45,  226 => 43,  223 => 42,  220 => 41,  217 => 40,  211 => 38,  207 => 36,  204 => 35,  201 => 34,  198 => 33,  192 => 31,  188 => 29,  185 => 28,  182 => 27,  179 => 26,  173 => 24,  169 => 22,  166 => 21,  164 => 20,  152 => 35,  140 => 31,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  124 => 13,  121 => 12,  119 => 11,  115 => 23,  109 => 21,  100 => 8,  98 => 7,  95 => 6,  89 => 5,  83 => 4,  80 => 3,  77 => 1,  72 => 95,  67 => 94,  52 => 92,  35 => 91,  33 => 90,  26 => 61,  24 => 1,);
    }
}
