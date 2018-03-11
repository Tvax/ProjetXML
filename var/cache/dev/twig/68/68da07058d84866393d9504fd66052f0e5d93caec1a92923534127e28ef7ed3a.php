<?php

/* admin/admin.php.twig */
class __TwigTemplate_1e988fd0f14d2fcb36b356e0c580b7decb3f1066ec3e0a772b0c6679aa7f8bbf extends Twig_Template
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
        $__internal_641bb504c0123f9bb11c096a3c54b2aeace5284c1470393199df72a716394015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641bb504c0123f9bb11c096a3c54b2aeace5284c1470393199df72a716394015->enter($__internal_641bb504c0123f9bb11c096a3c54b2aeace5284c1470393199df72a716394015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.php.twig"));

        $__internal_ec626224c8c3e813c50db3213de33838331e59d2bc6e311d024a647cd5542e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec626224c8c3e813c50db3213de33838331e59d2bc6e311d024a647cd5542e0e->enter($__internal_ec626224c8c3e813c50db3213de33838331e59d2bc6e311d024a647cd5542e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_641bb504c0123f9bb11c096a3c54b2aeace5284c1470393199df72a716394015->leave($__internal_641bb504c0123f9bb11c096a3c54b2aeace5284c1470393199df72a716394015_prof);

        
        $__internal_ec626224c8c3e813c50db3213de33838331e59d2bc6e311d024a647cd5542e0e->leave($__internal_ec626224c8c3e813c50db3213de33838331e59d2bc6e311d024a647cd5542e0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_137a6227cb5d2aaa1bc1f25918c70bbd27d30adc208a25ab8751abb02b26d26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137a6227cb5d2aaa1bc1f25918c70bbd27d30adc208a25ab8751abb02b26d26b->enter($__internal_137a6227cb5d2aaa1bc1f25918c70bbd27d30adc208a25ab8751abb02b26d26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61691596c668282d349e4f3c348036f4f6d9bdbe81e810ff9ef63bdb3614f239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61691596c668282d349e4f3c348036f4f6d9bdbe81e810ff9ef63bdb3614f239->enter($__internal_61691596c668282d349e4f3c348036f4f6d9bdbe81e810ff9ef63bdb3614f239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_61691596c668282d349e4f3c348036f4f6d9bdbe81e810ff9ef63bdb3614f239->leave($__internal_61691596c668282d349e4f3c348036f4f6d9bdbe81e810ff9ef63bdb3614f239_prof);

        
        $__internal_137a6227cb5d2aaa1bc1f25918c70bbd27d30adc208a25ab8751abb02b26d26b->leave($__internal_137a6227cb5d2aaa1bc1f25918c70bbd27d30adc208a25ab8751abb02b26d26b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27ca240e24bf2281e9faf7b1177c198f68a85696a9bd7422e79dfb5242c1fc7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ca240e24bf2281e9faf7b1177c198f68a85696a9bd7422e79dfb5242c1fc7b->enter($__internal_27ca240e24bf2281e9faf7b1177c198f68a85696a9bd7422e79dfb5242c1fc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dede0563921266d5ec2d0b30e46f924b5a20027d98fed467eacb8b76d2d86681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dede0563921266d5ec2d0b30e46f924b5a20027d98fed467eacb8b76d2d86681->enter($__internal_dede0563921266d5ec2d0b30e46f924b5a20027d98fed467eacb8b76d2d86681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if (((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 7, $this->getSourceContext()); })()) == "User Deleted")) {
            // line 8
            echo "      <div class=\"alert alert-success alert-dismissible\">
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
            echo "      <div class=\"alert alert-success alert-dismissible\">
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
            echo "      <div class=\"alert alert-success alert-dismissible\">
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
      </ul>
    </div>


    <!-- Main Tab -->

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
        // line 53
        $context["i"] = 0;
        // line 54
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new Twig_Error_Runtime('Variable "models" does not exist.', 54, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 55
            echo "          <tr>
              ";
            // line 56
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 56, $this->getSourceContext()); })()) + 1);
            // line 57
            echo "            <!-- <th scope=\"row\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 57, $this->getSourceContext()); })()), "html", null, true);
            echo "</th> -->
            <th scope=\"row\">";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 58, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getDescription", array()), "html", null, true);
            echo "</td>
            <td>v.";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getVersion", array()), "html", null, true);
            echo "</td>
            <td>
              <!-- Button to Open the Modal -->
              <button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 63, $this->getSourceContext()); })()), "html", null, true);
            echo "\">View</button>

              <!-- The Modal -->
              <div class=\"modal fade\" id=\"myModal";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                <div class=\"modal-dialog modal-lg\" style=\"width: 98%; height: 92%; padding: 0;\">
                  <div class=\"modal-content\" style=\"height: 99%;\">

                    <!-- Modal Header -->
                    <div class=\"modal-header\">
                      <h4 class=\"modal-title\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getVersion", array()), "html", null, true);
            echo "</h4>
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class=\"modal-body\">
                        ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "
                    </div>

                    <!-- Modal footer -->
                    <div class=\"modal-footer\">

                      <form action=\"/admin\" method=\"post\">
                        <textarea name=\"model\" style=\"display:none;\">";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "</textarea>
                        <input name=\"email\" type=\"email\">
                        <button type=\"submit\" class=\"btn btn-success\">Add To User</button>
                      </form>

                      <form action=\"/validate\" method=\"post\">
                        <textarea name=\"xsd\" style=\"display:none;\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "</textarea>
                        <button type=\"submit\" class=\"btn btn-info\">Validate</button>
                      </form>

                      <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 95, $this->getSourceContext()); })()), "html", null, true);
            echo "\">Compare</button>
                      <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>


                      <!-- The Modal -->
                      <div class=\"modal fade\" id=\"button";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 100, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                        <div class=\"modal-dialog modal-lg\" style=\"width: 98%; height: 92%; padding: 0;\">
                          <div class=\"modal-content\" style=\"height: 99%;\">

                            <!-- Modal Header -->
                            <div class=\"modal-header\">
                              <h4 class=\"modal-title\">Compare With</h4>
                            </div>

                            <!-- Modal body -->
                            <div class=\"modal-body\">
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
            // line 121
            $context["d"] = 0;
            // line 122
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new Twig_Error_Runtime('Variable "models" does not exist.', 122, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["model2"]) {
                // line 123
                echo "                                  <tr>

                                    <form action=\"/compare\" method=\"post\">

                                      <textarea name=\"model1\" style=\"display:none;\">";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
                echo "</textarea>
                                      <textarea name=\"model2\" style=\"display:none;\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model2"], "getModel", array()), "html", null, true);
                echo "</textarea>

                                        ";
                // line 130
                $context["d"] = ((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new Twig_Error_Runtime('Variable "d" does not exist.', 130, $this->getSourceContext()); })()) + 1);
                // line 131
                echo "                                      <th scope=\"row\">";
                echo twig_escape_filter($this->env, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new Twig_Error_Runtime('Variable "d" does not exist.', 131, $this->getSourceContext()); })()), "html", null, true);
                echo "</th>
                                      <td>";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model2"], "getDescription", array()), "html", null, true);
                echo "</td>
                                      <td>v.";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model2"], "getVersion", array()), "html", null, true);
                echo "</td>
                                      <td><button type=\"submit\" class=\"btn btn-default\">Compare</button></td>
                                    </form>

                                  </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "        </tbody>
      </table>
    </div>


    <!-- Button click actions -->


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
        // line 252
        $context["i"] = 0;
        // line 253
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new Twig_Error_Runtime('Variable "models" does not exist.', 253, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 254
            echo "                    <tr>
                        ";
            // line 255
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 255, $this->getSourceContext()); })()) + 1);
            // line 256
            echo "                      <th scope=\"row\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 256, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
                      <td>Username</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                  </tbody>
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


  </div>
";
        
        $__internal_dede0563921266d5ec2d0b30e46f924b5a20027d98fed467eacb8b76d2d86681->leave($__internal_dede0563921266d5ec2d0b30e46f924b5a20027d98fed467eacb8b76d2d86681_prof);

        
        $__internal_27ca240e24bf2281e9faf7b1177c198f68a85696a9bd7422e79dfb5242c1fc7b->leave($__internal_27ca240e24bf2281e9faf7b1177c198f68a85696a9bd7422e79dfb5242c1fc7b_prof);

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
        return array (  438 => 260,  427 => 256,  425 => 255,  422 => 254,  417 => 253,  415 => 252,  314 => 153,  295 => 139,  283 => 133,  279 => 132,  274 => 131,  272 => 130,  267 => 128,  263 => 127,  257 => 123,  252 => 122,  250 => 121,  226 => 100,  218 => 95,  211 => 91,  202 => 85,  192 => 78,  183 => 72,  174 => 66,  168 => 63,  162 => 60,  158 => 59,  154 => 58,  149 => 57,  147 => 56,  144 => 55,  139 => 54,  137 => 53,  105 => 23,  99 => 20,  95 => 18,  93 => 17,  88 => 15,  84 => 13,  82 => 12,  77 => 10,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
      </ul>
    </div>


    <!-- Main Tab -->

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
            <!-- <th scope=\"row\">{{ i }}</th> -->
            <th scope=\"row\">{{i}}</th>
            <td>{{ model.getDescription }}</td>
            <td>v.{{ model.getVersion }}</td>
            <td>
              <!-- Button to Open the Modal -->
              <button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal{{ i }}\">View</button>

              <!-- The Modal -->
              <div class=\"modal fade\" id=\"myModal{{ i }}\">
                <div class=\"modal-dialog modal-lg\" style=\"width: 98%; height: 92%; padding: 0;\">
                  <div class=\"modal-content\" style=\"height: 99%;\">

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

                      <form action=\"/admin\" method=\"post\">
                        <textarea name=\"model\" style=\"display:none;\">{{model.getModel}}</textarea>
                        <input name=\"email\" type=\"email\">
                        <button type=\"submit\" class=\"btn btn-success\">Add To User</button>
                      </form>

                      <form action=\"/validate\" method=\"post\">
                        <textarea name=\"xsd\" style=\"display:none;\">{{model.getModel}}</textarea>
                        <button type=\"submit\" class=\"btn btn-info\">Validate</button>
                      </form>

                      <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button{{i}}\">Compare</button>
                      <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>


                      <!-- The Modal -->
                      <div class=\"modal fade\" id=\"button{{i}}\">
                        <div class=\"modal-dialog modal-lg\" style=\"width: 98%; height: 92%; padding: 0;\">
                          <div class=\"modal-content\" style=\"height: 99%;\">

                            <!-- Modal Header -->
                            <div class=\"modal-header\">
                              <h4 class=\"modal-title\">Compare With</h4>
                            </div>

                            <!-- Modal body -->
                            <div class=\"modal-body\">
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
                                {% set d = 0 %}
                                {% for  model2 in models %}
                                  <tr>

                                    <form action=\"/compare\" method=\"post\">

                                      <textarea name=\"model1\" style=\"display:none;\">{{model.getModel}}</textarea>
                                      <textarea name=\"model2\" style=\"display:none;\">{{model2.getModel}}</textarea>

                                        {% set d = d +1 %}
                                      <th scope=\"row\">{{d}}</th>
                                      <td>{{ model2.getDescription }}</td>
                                      <td>v.{{ model2.getVersion }}</td>
                                      <td><button type=\"submit\" class=\"btn btn-default\">Compare</button></td>
                                    </form>

                                  </tr>
                                {% endfor %}
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>


    <!-- Button click actions -->


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


  </div>
{% endblock %}
", "admin/admin.php.twig", "/home/teiva/Documents/Cours/Papon/modelManager/templates/admin/admin.php.twig");
    }
}
