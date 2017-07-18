<?php

/* header.html */
class __TwigTemplate_826d2238454fa1520f7ca8891b9d1d33c290ac0279622b6485d466a3275a3808 extends Twig_Template
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
        return array (  115 => 20,  112 => 19,  109 => 18,  96 => 17,  94 => 16,  89 => 15,  82 => 12,  74 => 11,  59 => 8,  51 => 7,  43 => 6,  37 => 5,  27 => 2,  104 => 28,  97 => 24,  93 => 22,  86 => 21,  78 => 18,  58 => 14,  53 => 12,  39 => 11,  33 => 3,  88 => 18,  83 => 16,  80 => 19,  70 => 10,  67 => 9,  54 => 9,  44 => 7,  42 => 6,  34 => 5,  29 => 3,  481 => 176,  475 => 173,  471 => 171,  458 => 165,  451 => 160,  449 => 159,  446 => 158,  441 => 155,  435 => 153,  433 => 152,  429 => 151,  425 => 150,  420 => 148,  417 => 147,  415 => 146,  412 => 145,  407 => 142,  396 => 140,  392 => 139,  386 => 136,  383 => 135,  381 => 134,  378 => 133,  372 => 129,  370 => 128,  363 => 124,  360 => 123,  358 => 122,  352 => 118,  346 => 116,  343 => 115,  337 => 113,  334 => 112,  328 => 110,  325 => 109,  319 => 107,  316 => 106,  310 => 104,  307 => 103,  301 => 101,  298 => 100,  290 => 98,  284 => 96,  281 => 95,  275 => 93,  272 => 92,  266 => 90,  263 => 89,  259 => 87,  255 => 86,  248 => 85,  244 => 84,  241 => 83,  239 => 82,  233 => 79,  225 => 73,  215 => 72,  211 => 71,  204 => 68,  198 => 66,  193 => 63,  183 => 59,  179 => 57,  175 => 56,  169 => 54,  167 => 53,  162 => 50,  156 => 48,  150 => 46,  148 => 45,  144 => 44,  141 => 43,  137 => 42,  132 => 40,  129 => 39,  126 => 38,  124 => 37,  119 => 48,  113 => 31,  107 => 29,  105 => 28,  102 => 27,  95 => 25,  87 => 14,  84 => 22,  76 => 20,  73 => 16,  69 => 17,  63 => 15,  57 => 10,  55 => 12,  52 => 11,  50 => 10,  46 => 9,  38 => 7,  35 => 6,  31 => 8,  25 => 2,  22 => 1,);
    }
}
