<?php

/* admin/admin.php.twig */
class __TwigTemplate_2afc7615fdffa45c88d1166914d2aae74edbc1cf0ce319a0e0a0740e9d8fd648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5c4ec6fd87b6c51236d347fec3b1f9a2164c9c8942c76ed99cfee60e3c120c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c4ec6fd87b6c51236d347fec3b1f9a2164c9c8942c76ed99cfee60e3c120c3->enter($__internal_f5c4ec6fd87b6c51236d347fec3b1f9a2164c9c8942c76ed99cfee60e3c120c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.php.twig"));

        $__internal_e90f90310f93244856d4fbb3563e7189b5cb40d3054fb69ea20e1a35cbbb4974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90f90310f93244856d4fbb3563e7189b5cb40d3054fb69ea20e1a35cbbb4974->enter($__internal_e90f90310f93244856d4fbb3563e7189b5cb40d3054fb69ea20e1a35cbbb4974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c4ec6fd87b6c51236d347fec3b1f9a2164c9c8942c76ed99cfee60e3c120c3->leave($__internal_f5c4ec6fd87b6c51236d347fec3b1f9a2164c9c8942c76ed99cfee60e3c120c3_prof);

        
        $__internal_e90f90310f93244856d4fbb3563e7189b5cb40d3054fb69ea20e1a35cbbb4974->leave($__internal_e90f90310f93244856d4fbb3563e7189b5cb40d3054fb69ea20e1a35cbbb4974_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e98f7c38ca04442d464a27d1cc6fb96ffef110ef148ccc5b55371fe5d17eec7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98f7c38ca04442d464a27d1cc6fb96ffef110ef148ccc5b55371fe5d17eec7e->enter($__internal_e98f7c38ca04442d464a27d1cc6fb96ffef110ef148ccc5b55371fe5d17eec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_353be6443659d3ca5211187657942d47f9d4a252f52263899dfb7f08e02525e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353be6443659d3ca5211187657942d47f9d4a252f52263899dfb7f08e02525e7->enter($__internal_353be6443659d3ca5211187657942d47f9d4a252f52263899dfb7f08e02525e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_353be6443659d3ca5211187657942d47f9d4a252f52263899dfb7f08e02525e7->leave($__internal_353be6443659d3ca5211187657942d47f9d4a252f52263899dfb7f08e02525e7_prof);

        
        $__internal_e98f7c38ca04442d464a27d1cc6fb96ffef110ef148ccc5b55371fe5d17eec7e->leave($__internal_e98f7c38ca04442d464a27d1cc6fb96ffef110ef148ccc5b55371fe5d17eec7e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c67964dcf6dd949889705ac889fab2f6fdee656e7c6d24f1b30f91ba634640da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67964dcf6dd949889705ac889fab2f6fdee656e7c6d24f1b30f91ba634640da->enter($__internal_c67964dcf6dd949889705ac889fab2f6fdee656e7c6d24f1b30f91ba634640da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a142eb24da334372cc4b955f2637aa8a708392515128dd52ec3acc96b991ba0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a142eb24da334372cc4b955f2637aa8a708392515128dd52ec3acc96b991ba0d->enter($__internal_a142eb24da334372cc4b955f2637aa8a708392515128dd52ec3acc96b991ba0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        if (((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 7, $this->getSourceContext()); })()) == "User Deleted")) {
            // line 8
            echo "<div class=\"alert alert-success alert-dismissible\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>Success!</strong> ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "
</div>
";
        } elseif ((        // line 12
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 12, $this->getSourceContext()); })()) == "User Added")) {
            // line 13
            echo "<div class=\"alert alert-success alert-dismissible\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>Success!</strong> ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "
</div>
";
        } elseif ((        // line 17
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 17, $this->getSourceContext()); })()) == "Model Added")) {
            // line 18
            echo "<div class=\"alert alert-success alert-dismissible\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>Success!</strong> ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo "
</div>
";
        }
        // line 23
        echo "
<div class=\"card\">

  <div class=\"card-header\">
    <ul class=\"nav nav-pills card-header-pills\">
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button1\">Add User</button>
      </li>
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button2\">Delete User</button>
      </li>
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button3\">List Users</button>
      </li>
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#button3\">Compare</button>
      </li>
    </ul>
  </div>

  <form action=\"/admin\" method=\"post\">
    <!-- The Modal -->
    <div class=\"modal fade\" id=\"button1\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">

          <!-- Modal Header -->
          <div class=\"modal-header\">
            <h4 class=\"modal-title\">Add User</h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          </div>

          <!-- Modal body -->
          <div class=\"modal-body\">

            <div class=\"form-group\">
              <label for=\"email\">Email address:</label>
              <input name=\"name\" type=\"email\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label for=\"pwd\">Password:</label>
              <input name=\"password\" type=\"password\" class=\"form-control\">
            </div>
          </div>

          <!-- Modal footer -->
          <div class=\"modal-footer\">
            <button type=\"submit\" class=\"btn btn-default\">Add User</button>
            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
          </div>

        </div>
      </div>
    </div>
  </form>

  <form action=\"/admin\" method=\"post\">
    <!-- The Modal -->
    <div class=\"modal fade\" id=\"button2\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">

          <!-- Modal Header -->
          <div class=\"modal-header\">
            <h4 class=\"modal-title\">Delete User</h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          </div>

          <!-- Modal body -->
          <div class=\"modal-body\">

            <div class=\"form-group\">
              <label for=\"email\">Email address:</label>
              <input name=\"delUser\" type=\"email\" class=\"form-control\">
            </div>

            <!-- Modal footer -->
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-default\">Delete User</button>
              <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </form>

  <div class=\"modal fade\" id=\"button3\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">

        <!-- Modal Header -->
        <div class=\"modal-header\">
          <h4 class=\"modal-title\">List Users</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        </div>

        <!-- Modal body -->
        <div class=\"modal-body\">
          <div class=\"card\">
            <div class=\"card-body\">
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Users</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 134
        $context["i"] = 0;
        // line 135
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new Twig_Error_Runtime('Variable "models" does not exist.', 135, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 136
            echo "                  <tr>
                    ";
            // line 137
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 137, $this->getSourceContext()); })()) + 1);
            // line 138
            echo "                    <th scope=\"row\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 138, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
                    <td>Username</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                </tbody>
              </table>
            </div>
          </div>
        </div>

          <!-- Modal footer -->
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
          </div>

        </div>
      </div>
    </div>

    <div class=\"card-body\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>#</th>
            <th>Model</th>
            <th>Version</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 168
        $context["i"] = 0;
        // line 169
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new Twig_Error_Runtime('Variable "models" does not exist.', 169, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 170
            echo "          <tr>
            ";
            // line 171
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 171, $this->getSourceContext()); })()) + 1);
            // line 172
            echo "            <th scope=\"row\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 172, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
            <td>";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getDescription", array()), "html", null, true);
            echo "</td>
            <td>v.";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getVersion", array()), "html", null, true);
            echo "</td>
            <td>
              <!-- Button to Open the Modal -->
              <button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 177
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 177, $this->getSourceContext()); })()), "html", null, true);
            echo "\">View</button>

              <form action=\"/validate\" method=\"post\">

                <!-- The Modal -->
                <div class=\"modal fade\" id=\"myModal";
            // line 182
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 182, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                  <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">

                      <!-- Modal Header -->
                      <div class=\"modal-header\">
                        <h4 class=\"modal-title\">";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getVersion", array()), "html", null, true);
            echo "</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class=\"modal-body\">
                        ";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "
                      </div>

                      <!-- Modal footer -->
                      <div class=\"modal-footer\">

                        <textarea name=\"xsd\" style=\"display:none;\">";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "</textarea>

                        <input name=\"name\" type=\"email\" class=\"form-control\">
                        <button type=\"submit\" class=\"btn btn-success\">Add To User</button>
                        <button type=\"submit\" class=\"btn btn-info\">Validate</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                      </div>

                    </div>

                  </div>

                </div>
              </form>

            </td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "        </tbody>
      </table>
    </div>
  </div>
";
        
        $__internal_a142eb24da334372cc4b955f2637aa8a708392515128dd52ec3acc96b991ba0d->leave($__internal_a142eb24da334372cc4b955f2637aa8a708392515128dd52ec3acc96b991ba0d_prof);

        
        $__internal_c67964dcf6dd949889705ac889fab2f6fdee656e7c6d24f1b30f91ba634640da->leave($__internal_c67964dcf6dd949889705ac889fab2f6fdee656e7c6d24f1b30f91ba634640da_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 218,  331 => 200,  322 => 194,  313 => 188,  304 => 182,  296 => 177,  290 => 174,  286 => 173,  281 => 172,  279 => 171,  276 => 170,  271 => 169,  269 => 168,  241 => 142,  230 => 138,  228 => 137,  225 => 136,  220 => 135,  218 => 134,  105 => 23,  99 => 20,  95 => 18,  93 => 17,  88 => 15,  84 => 13,  82 => 12,  77 => 10,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}

{% if message == \"User Deleted\" %}
<div class=\"alert alert-success alert-dismissible\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>Success!</strong> {{ message }}
</div>
{% elseif message == \"User Added\" %}
<div class=\"alert alert-success alert-dismissible\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>Success!</strong> {{ message }}
</div>
{% elseif message == \"Model Added\" %}
<div class=\"alert alert-success alert-dismissible\">
  <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
  <strong>Success!</strong> {{ message }}
</div>
{% endif %}

<div class=\"card\">

  <div class=\"card-header\">
    <ul class=\"nav nav-pills card-header-pills\">
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button1\">Add User</button>
      </li>
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button2\">Delete User</button>
      </li>
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button3\">List Users</button>
      </li>
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#button3\">Compare</button>
      </li>
    </ul>
  </div>

  <form action=\"/admin\" method=\"post\">
    <!-- The Modal -->
    <div class=\"modal fade\" id=\"button1\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">

          <!-- Modal Header -->
          <div class=\"modal-header\">
            <h4 class=\"modal-title\">Add User</h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          </div>

          <!-- Modal body -->
          <div class=\"modal-body\">

            <div class=\"form-group\">
              <label for=\"email\">Email address:</label>
              <input name=\"name\" type=\"email\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
              <label for=\"pwd\">Password:</label>
              <input name=\"password\" type=\"password\" class=\"form-control\">
            </div>
          </div>

          <!-- Modal footer -->
          <div class=\"modal-footer\">
            <button type=\"submit\" class=\"btn btn-default\">Add User</button>
            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
          </div>

        </div>
      </div>
    </div>
  </form>

  <form action=\"/admin\" method=\"post\">
    <!-- The Modal -->
    <div class=\"modal fade\" id=\"button2\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">

          <!-- Modal Header -->
          <div class=\"modal-header\">
            <h4 class=\"modal-title\">Delete User</h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          </div>

          <!-- Modal body -->
          <div class=\"modal-body\">

            <div class=\"form-group\">
              <label for=\"email\">Email address:</label>
              <input name=\"delUser\" type=\"email\" class=\"form-control\">
            </div>

            <!-- Modal footer -->
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-default\">Delete User</button>
              <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </form>

  <div class=\"modal fade\" id=\"button3\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">

        <!-- Modal Header -->
        <div class=\"modal-header\">
          <h4 class=\"modal-title\">List Users</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        </div>

        <!-- Modal body -->
        <div class=\"modal-body\">
          <div class=\"card\">
            <div class=\"card-body\">
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Users</th>
                  </tr>
                </thead>
                <tbody>
                  {% set i = 0 %}
                  {% for  model in models %}
                  <tr>
                    {% set i = i +1 %}
                    <th scope=\"row\">{{ i }}</th>
                    <td>Username</td>
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>
          </div>
        </div>

          <!-- Modal footer -->
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
          </div>

        </div>
      </div>
    </div>

    <div class=\"card-body\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>#</th>
            <th>Model</th>
            <th>Version</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% set i = 0 %}
          {% for  model in models %}
          <tr>
            {% set i = i +1 %}
            <th scope=\"row\">{{ i }}</th>
            <td>{{ model.getDescription }}</td>
            <td>v.{{ model.getVersion }}</td>
            <td>
              <!-- Button to Open the Modal -->
              <button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal{{ i }}\">View</button>

              <form action=\"/validate\" method=\"post\">

                <!-- The Modal -->
                <div class=\"modal fade\" id=\"myModal{{ i }}\">
                  <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">

                      <!-- Modal Header -->
                      <div class=\"modal-header\">
                        <h4 class=\"modal-title\">{{model.getVersion}}</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class=\"modal-body\">
                        {{model.getModel}}
                      </div>

                      <!-- Modal footer -->
                      <div class=\"modal-footer\">

                        <textarea name=\"xsd\" style=\"display:none;\">{{model.getModel}}</textarea>

                        <input name=\"name\" type=\"email\" class=\"form-control\">
                        <button type=\"submit\" class=\"btn btn-success\">Add To User</button>
                        <button type=\"submit\" class=\"btn btn-info\">Validate</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                      </div>

                    </div>

                  </div>

                </div>
              </form>

            </td>
          </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
{% endblock %}
", "admin/admin.php.twig", "/home/teiva/Documents/Cours/Papon/modelManager/templates/admin/admin.php.twig");
    }
}
