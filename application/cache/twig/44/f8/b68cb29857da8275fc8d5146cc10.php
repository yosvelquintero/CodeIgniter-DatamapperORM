<?php

/* contents/users/create_view.html.twig */
class __TwigTemplate_44f8b68cb29857da8275fc8d5146cc10 extends Twig_Template
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
  ================================================== -->
  <header class=\"jumbotron subhead\" id=\"overview\">
    <div class=\"container\">
      <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true);
        echo "</h1>
      <p class=\"lead\">Fundamental HTML elements styled and enhanced with extensible classes.</p>
    </div>
  </header>

  <div class=\"container\">

    <div class=\"row\">
      <div class=\"span3 bs-docs-sidebar\">
        <ul class=\"nav nav-list bs-docs-sidenav\">
          <li>";
        // line 21
        echo anchor("users/create#forms", "<i class=\"icon-chevron-right\"></i> Create");
        echo "</li>
          <li>";
        // line 22
        echo anchor("users/index#tables", "<i class=\"icon-chevron-right\"></i> List");
        echo "</li>
        </ul>
      </div>
      <div class=\"span9\">

          <!-- Forms
          ================================================== -->
          <section id=\"forms\">
            <div class=\"page-header\">
              <h1>Forms</h1>
            </div>

            <h2>User form</h2>
            <p>Here you can ";
        // line 35
        echo anchor("users/index", "list");
        echo " all users.</p>

            ";
        // line 37
        if ((isset($context["form_errors"]) ? $context["form_errors"] : null)) {
            // line 38
            echo "            <div class=\"alert alert-error\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
              <h4>Warning!</h4> 
              <br>
              ";
            // line 42
            echo (isset($context["form_errors"]) ? $context["form_errors"] : null);
            echo "
            </div>
            ";
        }
        // line 45
        echo "            ";
        echo form_open("users/create#forms", array("class" => "bs-docs-example form-horizontal"));
        echo "
            <div class=\"control-group\">
              <label class=\"control-label\" for=\"name\">Name</label>
              <div class=\"controls\">
                <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "name"), "html", null, true);
        echo "\" placeholder=\"Name\">
              </div>
            </div>
            <div class=\"control-group\">
              <label class=\"control-label\" for=\"username\">Username</label>
              <div class=\"controls\">
                <input type=\"text\" id=\"username\" name=\"username\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "username"), "html", null, true);
        echo "\" placeholder=\"Username\">
              </div>
            </div>
            <div class=\"control-group\">
              <label class=\"control-label\" for=\"email\">Email</label>
              <div class=\"controls\">
                <input type=\"text\" id=\"email\" name=\"email\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "email"), "html", null, true);
        echo "\" placeholder=\"Email\">
              </div>
            </div>
            <div class=\"control-group\">
              <label class=\"control-label\" for=\"password\">Password</label>
              <div class=\"controls\">
                <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"Password\">
              </div>
            </div>
            <div class=\"control-group\">
              <label class=\"control-label\" for=\"confirm_password\">Confirm password</label>
              <div class=\"controls\">
                <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" placeholder=\"Confirm password\">
              </div>
            </div>
            <div class=\"control-group\">
              <label class=\"control-label\" for=\"group\">Group</label>
              <div class=\"controls\">
                ";
        // line 79
        echo form_dropdown("group", (isset($context["groups"]) ? $context["groups"] : null), (isset($context["value_group"]) ? $context["value_group"] : null));
        echo "
              </div>
            </div>

            <div class=\"control-group\">
              <div class=\"controls\">
                <button type=\"submit\" class=\"btn btn-large btn-primary\">Register</button>
              </div>
            </div>
            ";
        // line 88
        echo form_close();
        echo "

          </section>
      </div>
    </div>

  </div>

  ";
    }

    public function getTemplateName()
    {
        return "contents/users/create_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 88,  144 => 79,  123 => 61,  114 => 55,  105 => 49,  97 => 45,  91 => 42,  85 => 38,  83 => 37,  78 => 35,  62 => 22,  58 => 21,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
