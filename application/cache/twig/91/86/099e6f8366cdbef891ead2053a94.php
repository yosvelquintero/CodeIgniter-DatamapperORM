<?php

/* templates/bootstrap.html.twig */
class __TwigTemplate_9186099e6f8366cdbef891ead2053a94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "  </head>
  <body data-spy=\"scroll\" data-target=\".bs-docs-sidebar\">

  \t<div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          \t";
        // line 41
        echo anchor("home", "CI & Bootstrap", array("class" => "brand"));
        echo "
          <div class=\"nav-collapse collapse\">
            ";
        // line 43
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
          </div>
        </div>
      </div>
    </div>

  \t<div id=\"container\">
  \t\t<div id=\"content\">";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
  \t\t<div id=\"footer\">
  \t\t\t";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "  \t\t</div>
  \t</div>

  \t<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
  \t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.js\"></script>
  \t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/google-code-prettify/prettify.js\"></script>
  \t<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-transition.js\"></script>
  \t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-alert.js\"></script>
  \t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-modal.js\"></script>
  \t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-dropdown.js\"></script>
  \t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-scrollspy.js\"></script>
  \t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-tab.js\"></script>
  \t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-tooltip.js\"></script>
  \t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-popover.js\"></script>
  \t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-button.js\"></script>
  \t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-collapse.js\"></script>
  \t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-carousel.js\"></script>
  \t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-typeahead.js\"></script>
  \t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap-affix.js\"></script>
  \t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/application.js\"></script>
  </body>
  </html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<meta charset=utf-8 />
\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - CI & Bootstrap based application</title>

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">

\t<!-- Le styles -->
\t";
        // line 13
        echo link_tag("assets/css/bootstrap.css");
        echo "
\t";
        // line 14
        echo link_tag("assets/css/bootstrap-responsive.css");
        echo "
\t";
        // line 15
        echo link_tag("assets/css/docs.css");
        echo "
\t";
        // line 16
        echo link_tag("assets/js/google-code-prettify/prettify.css");
        echo "

\t<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
      <![endif]-->

      <!-- Le fav and touch icons -->
      ";
        // line 24
        echo link_tag("assets/ico/favicon.ico", "shortcut icon", "image/ico");
        echo "
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/ico/apple-touch-icon-144-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/ico/apple-touch-icon-114-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/ico/apple-touch-icon-72-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/ico/apple-touch-icon-57-precomposed.png\">
      ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "  \t\t\t<footer class=\"footer\">
  \t\t\t\t<div class=\"container\">
  \t\t\t\t\t<p class=\"pull-right\"><a href=\"#\">Back to top</a></p>
  \t\t\t\t\t<p>Designed and built with all the love in the world by <a href=\"http://twitter.com/mdo\" target=\"_blank\">@mdo</a> and <a href=\"http://twitter.com/fat\" target=\"_blank\">@fat</a>.</p>
  \t\t\t\t\t<p>Code licensed under <a href=\"http://www.apache.org/licenses/LICENSE-2.0\" target=\"_blank\">Apache License v2.0</a>, documentation under <a href=\"http://creativecommons.org/licenses/by/3.0/\">CC BY 3.0</a>.</p>
            <p><a href=\"http://glyphicons.com\">Glyphicons Free</a> licensed under <a href=\"http://creativecommons.org/licenses/by/3.0/\">CC BY 3.0</a>.</p>
            <p>Page rendered in <strong>";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["elapsed_time"]) ? $context["elapsed_time"] : null), "html", null, true);
        echo "</strong> seconds. Memory usage: <strong>";
        echo twig_escape_filter($this->env, (isset($context["memory_usage"]) ? $context["memory_usage"] : null), "html", null, true);
        echo "</strong></p>

            <ul class=\"footer-links\">
              <li><a href=\"http://blog.getbootstrap.com\">Blog</a></li>
              <li class=\"muted\">&middot;</li>
              <li><a href=\"https://github.com/twitter/bootstrap/issues?state=open\">Issues</a></li>
              <li class=\"muted\">&middot;</li>
              <li><a href=\"https://github.com/twitter/bootstrap/wiki\">Roadmap and changelog</a></li>
            </ul>
  \t\t\t\t</div>
  \t\t\t</footer>
  \t\t\t";
    }

    public function getTemplateName()
    {
        return "templates/bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 59,  212 => 53,  209 => 52,  204 => 50,  199 => 6,  193 => 28,  189 => 27,  185 => 26,  181 => 25,  177 => 24,  166 => 16,  162 => 15,  158 => 14,  154 => 13,  144 => 6,  141 => 5,  138 => 4,  131 => 90,  127 => 89,  123 => 88,  119 => 87,  115 => 86,  111 => 85,  107 => 84,  103 => 83,  99 => 82,  95 => 81,  91 => 80,  87 => 79,  83 => 78,  79 => 77,  75 => 76,  71 => 75,  65 => 71,  63 => 52,  58 => 50,  48 => 43,  43 => 41,  30 => 30,  28 => 4,  23 => 1,  38 => 6,  35 => 5,  29 => 3,);
    }
}
