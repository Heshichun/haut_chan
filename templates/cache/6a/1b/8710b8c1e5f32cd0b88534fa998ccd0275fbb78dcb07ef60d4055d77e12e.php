<?php

/* posts.sql */
class __TwigTemplate_6a1b8710b8c1e5f32cd0b88534fa998ccd0275fbb78dcb07ef60d4055d77e12e extends Twig_Template
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
        echo "CREATE TABLE IF NOT EXISTS ``posts_";
        echo (isset($context["board"]) ? $context["board"] : null);
        echo "`` (
   `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
   `thread` int(11) DEFAULT NULL,
   `subject` varchar(100) DEFAULT NULL,
   `email` varchar(30) DEFAULT NULL,
   `name` varchar(35) DEFAULT NULL,
   `trip` varchar(15) DEFAULT NULL,
   `capcode` varchar(50) DEFAULT NULL,
   `body` text NOT NULL,
   `body_nomarkup` text,
   `time` int(11) NOT NULL,
   `bump` int(11) DEFAULT NULL,
   `files` text DEFAULT NULL,
   `num_files` int(11) DEFAULT 0,
   `filehash` text CHARACTER SET ascii,
   `password` varchar(20) DEFAULT NULL,
   `ip` varchar(39) CHARACTER SET ascii NOT NULL,
   `sticky` int(1) NOT NULL,
   `locked` int(1) NOT NULL,
   `cycle` int(1) NOT NULL,
   `sage` int(1) NOT NULL,
   `embed` text,
   `slug` varchar(256) DEFAULT NULL,
   UNIQUE KEY `id` (`id`),
   KEY `thread_id` (`thread`,`id`),
   KEY `filehash` (`filehash`(40)),
   KEY `time` (`time`),
   KEY `ip` (`ip`),
   KEY `list_threads` (`thread`, `sticky`, `bump`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;
 
";
    }

    public function getTemplateName()
    {
        return "posts.sql";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
