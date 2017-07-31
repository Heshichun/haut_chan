<?php

/* header.html */
class __TwigTemplate_355bbb7911801a3475a6417b085f0705982083a240c6aa625506bfafdb5e1bca extends Twig_Template
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
        echo "\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url_stylesheet");
        echo "\">
\t\t";
        // line 2
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url_favicon")) {
            echo "<link rel=\"shortcut icon\" href=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url_favicon");
            echo "\">";
        }
        // line 3
        echo "\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=yes\">
\t\t";
        // line 5
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta_keywords")) {
            echo "<meta name=\"keywords\" content=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta_keywords");
            echo "\">";
        }
        // line 6
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1) != "")) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" id=\"stylesheet\" href=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "uri_stylesheets");
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "default_stylesheet"), 1);
            echo "\">";
        }
        // line 7
        echo "\t\t";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "font_awesome")) {
            echo "<link rel=\"stylesheet\" href=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "font_awesome_css");
            echo "\">";
        }
        // line 8
        echo "\t\t";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "country_flags_condensed")) {
            echo "<link rel=\"stylesheet\" href=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "country_flags_condensed_css");
            echo "\">";
        }
        // line 9
        echo "\t\t<script type=\"text/javascript\">
\t\t\tvar configRoot=\"";
        // line 10
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
        echo "\";
\t\t\tvar inMod = ";
        // line 11
        if ((isset($context["mod"]) ? $context["mod"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
\t\t\tvar modRoot=\"";
        // line 12
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "root");
        echo "\"+(inMod ? \"mod.php?/\" : \"\");
\t\t</script>
\t\t";
        // line 14
        if ((!(isset($context["nojavascript"]) ? $context["nojavascript"] : null))) {
            // line 15
            echo "\t\t\t<script type=\"text/javascript\" src=\"";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "url_javascript");
            echo "\"></script>
\t\t\t";
            // line 16
            if ((!$this->getAttribute((isset($context["config"]) ? $context["config"] : null), "additional_javascript_compile"))) {
                // line 17
                echo "\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "additional_javascript"));
                foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
                    echo "<script type=\"text/javascript\" src=\"";
                    echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "additional_javascript_url");
                    echo (isset($context["javascript"]) ? $context["javascript"] : null);
                    echo "\"></script>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "\t\t\t";
            }
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "recaptcha")) {
            echo "<style type=\"text/css\">";
            // line 48
            echo "
\t\t\t#recaptcha_area {
\t\t\t\tfloat: none !important;
\t\t\t\tpadding: 0 !important;
\t\t\t}
\t\t\t#recaptcha_logo, #recaptcha_privacy {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t#recaptcha_table {
\t\t\t\tborder: none !important;
\t\t\t}
\t\t\t#recaptcha_table tr:first-child {
\t\t\t\theight: auto;
\t\t\t}
\t\t\t.recaptchatable img {
\t\t\t\tfloat: none !important;
\t\t\t}
\t\t\t#recaptcha_response_field {
\t\t\t\tfont-size: 10pt !important;
\t\t\t\tborder: 1px solid #a9a9a9 !important;
\t\t\t\tpadding: 1px !important;
\t\t\t}
\t\t\ttd.recaptcha_image_cell {
\t\t\t\tbackground: transparent !important;
\t\t\t}
\t\t\t.recaptchatable, #recaptcha_area tr, #recaptcha_area td, #recaptcha_area th {
\t\t\t\tpadding: 0 !important;
\t\t\t}
\t\t";
            echo "</style>";
        }
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 20,  112 => 19,  94 => 16,  89 => 15,  87 => 14,  82 => 12,  70 => 10,  67 => 9,  43 => 6,  37 => 5,  27 => 2,  386 => 90,  383 => 87,  372 => 86,  365 => 82,  358 => 78,  353 => 76,  349 => 74,  339 => 72,  337 => 71,  319 => 70,  303 => 69,  284 => 68,  279 => 65,  277 => 64,  272 => 63,  268 => 62,  264 => 61,  260 => 60,  257 => 59,  251 => 58,  248 => 57,  241 => 54,  227 => 53,  211 => 52,  194 => 51,  191 => 50,  189 => 49,  186 => 48,  180 => 46,  177 => 45,  174 => 44,  172 => 43,  167 => 41,  164 => 40,  162 => 39,  147 => 34,  141 => 32,  132 => 29,  130 => 28,  119 => 48,  84 => 22,  79 => 20,  51 => 7,  49 => 16,  41 => 12,  36 => 10,  33 => 3,  31 => 8,  527 => 407,  518 => 403,  514 => 401,  512 => 400,  509 => 399,  493 => 398,  491 => 396,  484 => 392,  480 => 391,  454 => 389,  452 => 368,  446 => 364,  444 => 363,  412 => 362,  403 => 334,  398 => 328,  315 => 326,  259 => 246,  245 => 191,  243 => 182,  223 => 180,  221 => 165,  219 => 164,  185 => 163,  183 => 47,  179 => 131,  171 => 130,  169 => 125,  157 => 36,  150 => 35,  142 => 115,  136 => 114,  22 => 1,  161 => 42,  154 => 37,  151 => 36,  143 => 34,  135 => 30,  131 => 30,  125 => 28,  123 => 26,  118 => 26,  113 => 25,  109 => 18,  107 => 22,  100 => 18,  96 => 17,  91 => 15,  77 => 14,  74 => 11,  66 => 12,  59 => 8,  54 => 10,  48 => 9,  45 => 14,  39 => 7,  35 => 6,  29 => 2,  23 => 1,);
    }
}
