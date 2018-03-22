<?php

/* view/model_list.php.twig */
class __TwigTemplate_d03e6487c1c983ae2d0193f0f6e7cfb1b35bda226d6df935199e2bb3aff62b00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("view/base.html.twig", "view/model_list.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "view/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0da66a0361258bc238b30620bd31395a433114d1c22bb05c102457b85356cd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da66a0361258bc238b30620bd31395a433114d1c22bb05c102457b85356cd3c->enter($__internal_0da66a0361258bc238b30620bd31395a433114d1c22bb05c102457b85356cd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "view/model_list.php.twig"));

        $__internal_b1c29812e972ed505352f2d25adf542393cb2cdb7f6120737ba6f4f334413ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c29812e972ed505352f2d25adf542393cb2cdb7f6120737ba6f4f334413ce3->enter($__internal_b1c29812e972ed505352f2d25adf542393cb2cdb7f6120737ba6f4f334413ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "view/model_list.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da66a0361258bc238b30620bd31395a433114d1c22bb05c102457b85356cd3c->leave($__internal_0da66a0361258bc238b30620bd31395a433114d1c22bb05c102457b85356cd3c_prof);

        
        $__internal_b1c29812e972ed505352f2d25adf542393cb2cdb7f6120737ba6f4f334413ce3->leave($__internal_b1c29812e972ed505352f2d25adf542393cb2cdb7f6120737ba6f4f334413ce3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8957350a7ab6de6ec2165be52e77eef07e0e3bf24d483598a59b57f88c69430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8957350a7ab6de6ec2165be52e77eef07e0e3bf24d483598a59b57f88c69430->enter($__internal_e8957350a7ab6de6ec2165be52e77eef07e0e3bf24d483598a59b57f88c69430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2868a03006be3f83ca5f97ada63e7942d3c2c8de520140ec2e84e57ce65b7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2868a03006be3f83ca5f97ada63e7942d3c2c8de520140ec2e84e57ce65b7e2->enter($__internal_f2868a03006be3f83ca5f97ada63e7942d3c2c8de520140ec2e84e57ce65b7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_f2868a03006be3f83ca5f97ada63e7942d3c2c8de520140ec2e84e57ce65b7e2->leave($__internal_f2868a03006be3f83ca5f97ada63e7942d3c2c8de520140ec2e84e57ce65b7e2_prof);

        
        $__internal_e8957350a7ab6de6ec2165be52e77eef07e0e3bf24d483598a59b57f88c69430->leave($__internal_e8957350a7ab6de6ec2165be52e77eef07e0e3bf24d483598a59b57f88c69430_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8b4beed20ff43d650cc08ab9c37e33d714effa193bdafd87e97e4775b8c3adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b4beed20ff43d650cc08ab9c37e33d714effa193bdafd87e97e4775b8c3adc->enter($__internal_d8b4beed20ff43d650cc08ab9c37e33d714effa193bdafd87e97e4775b8c3adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2054634999d57bd28ceb283131b33a79be672c4fdd7b68df483753e5b440cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2054634999d57bd28ceb283131b33a79be672c4fdd7b68df483753e5b440cf9->enter($__internal_d2054634999d57bd28ceb283131b33a79be672c4fdd7b68df483753e5b440cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <div class=\"card\">
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
        // line 18
        $context["i"] = 0;
        // line 19
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new Twig_Error_Runtime('Variable "models" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 20
            echo "        <tr>
            ";
            // line 21
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 21, $this->getSourceContext()); })()) + 1);
            // line 22
            echo "          <th scope=\"row\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
          <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getDescription", array()), "html", null, true);
            echo "</td>
          <td>v.";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getVersion", array()), "html", null, true);
            echo "</td>
          <td>
            <!-- Button to Open the Modal -->
            <button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\">View</button>

            <form action=\"/validate\" method=\"post\">
              <!-- The Modal -->
              <div class=\"modal fade\" id=\"myModal";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 31, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                <div class=\"modal-dialog\">
                  <div class=\"modal-content\">

                    <!-- Modal Header -->
                    <div class=\"modal-header\">
                      <h4 class=\"modal-title\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getVersion", array()), "html", null, true);
            echo "</h4>
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class=\"modal-body\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "
                    </div>

                    <!-- Modal footer -->
                    <div class=\"modal-footer\">

                      <textarea name=\"xsd\" style=\"display:none;\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "</textarea>

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
        // line 65
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_d2054634999d57bd28ceb283131b33a79be672c4fdd7b68df483753e5b440cf9->leave($__internal_d2054634999d57bd28ceb283131b33a79be672c4fdd7b68df483753e5b440cf9_prof);

        
        $__internal_d8b4beed20ff43d650cc08ab9c37e33d714effa193bdafd87e97e4775b8c3adc->leave($__internal_d8b4beed20ff43d650cc08ab9c37e33d714effa193bdafd87e97e4775b8c3adc_prof);

    }

    public function getTemplateName()
    {
        return "view/model_list.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 65,  143 => 49,  134 => 43,  125 => 37,  116 => 31,  109 => 27,  103 => 24,  99 => 23,  94 => 22,  92 => 21,  89 => 20,  84 => 19,  82 => 18,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'view/base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}

  <div class=\"card\">
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
                <div class=\"modal-dialog\">
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
{% endblock %}
", "view/model_list.php.twig", "/home/teiva/Documents/Projet-Papon/modelManager/templates/view/model_list.php.twig");
    }
}
