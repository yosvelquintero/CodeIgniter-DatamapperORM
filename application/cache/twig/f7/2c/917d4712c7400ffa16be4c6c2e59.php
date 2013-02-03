<?php

/* contents/users/form_view.html.twig */
class __TwigTemplate_f72c917d4712c7400ffa16be4c6c2e59 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t<!-- Subhead
\t================================================== -->
\t<header class=\"jumbotron subhead\" id=\"overview\">
\t\t<div class=\"container\">
\t\t\t<h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true);
        echo "</h1>
\t\t\t<p class=\"lead\">Fundamental HTML elements styled and enhanced with extensible classes.</p>
\t\t</div>
\t</header>

\t<div class=\"container\">

\t\t<div class=\"row\">

\t\t\t\t\t<!-- Forms
\t\t\t\t\t================================================== -->
\t\t\t\t\t<section id=\"forms\">
\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t<h1>Forms</h1>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h2>User form</h2>
\t\t\t\t\t\t<p>Here you can ";
        // line 28
        echo anchor("users/index", "list");
        echo " all users.</p>

\t\t\t\t\t\t";
        // line 30
        if ((isset($context["form_errors"]) ? $context["form_errors"] : null)) {
            // line 31
            echo "\t\t\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t\t\t<h4>Warning!</h4> 
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 35
            echo (isset($context["form_errors"]) ? $context["form_errors"] : null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 39
        echo form_open("", array("class" => "bs-docs-example form-horizontal"));
        echo "
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"name\">Name</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "name"), "html", null, true);
        echo "\" placeholder=\"Name\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"username\">Username</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"username\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "username"), "html", null, true);
        echo "\" placeholder=\"Username\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"email\">Email</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "email"), "html", null, true);
        echo "\" placeholder=\"Email\"  required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"password\">Password</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\" required>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"confirm_password\">Confirm password</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" placeholder=\"Confirm password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"group\">Group</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t";
        // line 73
        echo form_dropdown("group", (isset($context["groups"]) ? $context["groups"] : null), (isset($context["value_group"]) ? $context["value_group"] : null));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary\">Save!!</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 82
        echo form_close();
        echo "

\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
    }

    public function getTemplateName()
    {
        return "contents/users/form_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 82,  133 => 73,  112 => 55,  103 => 49,  94 => 43,  87 => 39,  84 => 38,  78 => 35,  72 => 31,  70 => 30,  65 => 28,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
