<?php

/* contents/users/index_view.html.twig */
class __TwigTemplate_5e31c2c35da720e2dd26e826c13c0836 extends Twig_Template
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

       <!-- Tables
       ================================================== -->
       <section id=\"tables\">
        <div class=\"page-header\">
          <h1>Tables</h1>
        </div>

        <h2>Users list</h2>
        <p>Here you can ";
        // line 28
        echo anchor("users/create", "create");
        echo " a new user.</p>

        ";
        // line 30
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 31
            echo "        <div class=\"alert alert-success\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
          <h4>Well done!</h4> 
          <br>
          ";
            // line 35
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "
        </div>
        ";
        }
        // line 38
        echo "
        <div class=\"bs-docs-example\">
          <table class=\"table table-hover\">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Group</th>
                <th>Created</th>
                <th>Updated</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 55
            echo "              <tr>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"));
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name"));
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"));
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"));
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "group_name"));
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "created"), "Y.m.d h:i"));
            echo "</td>
                ";
            // line 62
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "updated") != "0000-00-00 00:00:00")) {
                // line 63
                echo "                  <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "updated"), "Y.m.d h:i"));
                echo "</td>
                ";
            } else {
                // line 65
                echo "                  <td>&nbsp;</td>
                ";
            }
            // line 67
            echo "
                <td class=\"center tooltip-demo\">
                  <a data-placement=\"left\" rel=\"tooltip\" data-original-title=\"Edit ";
            // line 69
            echo ucfirst($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, base_url((("users/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id")) . "/edit")), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i></a>
                  &nbsp;&nbsp;&nbsp;
                  <a data-placement=\"left\" rel=\"tooltip\" data-original-title=\"Delete ";
            // line 71
            echo ucfirst($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, base_url((("users/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id")) . "/delete")), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                </td>
              </tr>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "              <tr><td><em>No user found!</em></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 77
        echo "            </tbody>
          </table>
        </div>

        <div class=\"pagination pull-right\">
          ";
        // line 82
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        echo "
        </div>

      </section>
    </div>
  </div>

  ";
    }

    public function getTemplateName()
    {
        return "contents/users/index_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 82,  175 => 77,  168 => 75,  157 => 71,  150 => 69,  146 => 67,  142 => 65,  136 => 63,  134 => 62,  130 => 61,  126 => 60,  122 => 59,  118 => 58,  114 => 57,  110 => 56,  107 => 55,  102 => 54,  84 => 38,  78 => 35,  72 => 31,  70 => 30,  65 => 28,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
