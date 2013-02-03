<?php

/* contents/home/index_view.html.twig */
class __TwigTemplate_5afab44201e1e305eb54293711ddf90b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/bootstrap.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/bootstrap.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t<div class=\"jumbotron masthead\">
\t\t<div class=\"container\">
\t\t\t<h1>CI & Bootstrap</h1>
\t\t\t<p>Based on Bootstrap: The sleek, intuitive, and powerful front-end framework for faster and easier web development.</p>
\t\t\t<p>
\t\t\t\t<a href=\"assets/bootstrap.zip\" class=\"btn btn-primary btn-large\" >Download Bootstrap</a>
\t\t\t</p>
\t\t\t<ul class=\"masthead-links\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"http://github.com/twitter/bootstrap\" >GitHub project</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"./getting-started.html#examples\" >Examples</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"./extend.html\" >Extend</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\tVersion 2.2.1
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"bs-docs-social\">
\t\t<div class=\"container\">
\t\t\t
\t\t</div>
\t</div>

\t<div class=\"container\">

\t\t<div class=\"marketing\">

\t\t\t<h1>Introducing Bootstrap.</h1>
\t\t\t<p class=\"marketing-byline\">Need reasons to love Bootstrap? Look no further.</p>

\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t";
        // line 46
        echo img("assets/img/bs-docs-twitter-github.png");
        echo "
\t\t\t\t\t<h2>By nerds, for nerds.</h2>
\t\t\t\t\t<p>Built at Twitter by <a href=\"http://twitter.com/mdo\">@mdo</a> and <a href=\"http://twitter.com/fat\">@fat</a>, Bootstrap utilizes <a href=\"http://lesscss.org\">LESS CSS</a>, is compiled via <a href=\"http://nodejs.org\">Node</a>, and is managed through <a href=\"http://github.com\">GitHub</a> to help nerds do awesome stuff on the web.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t";
        // line 51
        echo img("assets/img/bs-docs-responsive-illustrations.png");
        echo "
\t\t\t\t\t<h2>Made for everyone.</h2>
\t\t\t\t\t<p>Bootstrap was made to not only look and behave great in the latest desktop browsers (as well as IE7!), but in tablet and smartphone browsers via <a href=\"./scaffolding.html#responsive\">responsive CSS</a> as well.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t";
        // line 56
        echo img("assets/img/bs-docs-bootstrap-features.png");
        echo "
\t\t\t\t\t<h2>Packed with features.</h2>
\t\t\t\t\t<p>A 12-column responsive <a href=\"./scaffolding.html#grid\">grid</a>, dozens of components, <a href=\"./javascript.html\">JavaScript plugins</a>, typography, form controls, and even a <a href=\"./customize.html\">web-based Customizer</a> to make Bootstrap your own.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr class=\"soften\">

\t\t\t<h1>Built with Bootstrap.</h1>
\t\t\t<p class=\"marketing-byline\">For even more sites built with Bootstrap, <a href=\"http://builtwithbootstrap.tumblr.com/\" target=\"_blank\">visit the unofficial Tumblr</a> or <a href=\"./getting-started.html#examples\">browse the examples</a>.</p>
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<ul class=\"thumbnails example-sites\">
\t\t\t\t\t<li class=\"span3\">
\t\t\t\t\t\t<a class=\"thumbnail\" href=\"http://soundready.fm/\" target=\"_blank\">
\t\t\t\t\t\t\t";
        // line 70
        echo img("assets/img/example-sites/soundready.png", true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"span3\">
\t\t\t\t\t\t<a class=\"thumbnail\" href=\"http://kippt.com/\" target=\"_blank\">
\t\t\t\t\t\t\t";
        // line 75
        echo img("assets/img/example-sites/kippt.png", true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"span3\">
\t\t\t\t\t\t<a class=\"thumbnail\" href=\"http://www.gathercontent.com/\" target=\"_blank\">
\t\t\t\t\t\t\t";
        // line 80
        echo img("assets/img/example-sites/gathercontent.png", true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"span3\">
\t\t\t\t\t\t<a class=\"thumbnail\" href=\"http://www.jshint.com/\" target=\"_blank\">
\t\t\t\t\t\t\t";
        // line 85
        echo img("assets/img/example-sites/jshint.png", true);
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "contents/home/index_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 85,  129 => 80,  121 => 75,  113 => 70,  96 => 56,  88 => 51,  80 => 46,  38 => 6,  35 => 5,  29 => 3,);
    }
}
