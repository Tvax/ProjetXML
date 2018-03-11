<?php

/* default/model_list.php.twig */
class __TwigTemplate_dde20adb81c8ce3a70fdc24562a0e941cab8d80621178188cdae45c9f47ea169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/model_list.php.twig", 1);
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
        $__internal_e1348baf14df9800f0468aeb94f8bdc6f0958ba024c1834bcf41e857d4a0a1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1348baf14df9800f0468aeb94f8bdc6f0958ba024c1834bcf41e857d4a0a1bd->enter($__internal_e1348baf14df9800f0468aeb94f8bdc6f0958ba024c1834bcf41e857d4a0a1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $__internal_9682560a262725bf77d4a0e0bd14e739f2450529283562c0ed397ca880d72df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9682560a262725bf77d4a0e0bd14e739f2450529283562c0ed397ca880d72df4->enter($__internal_9682560a262725bf77d4a0e0bd14e739f2450529283562c0ed397ca880d72df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1348baf14df9800f0468aeb94f8bdc6f0958ba024c1834bcf41e857d4a0a1bd->leave($__internal_e1348baf14df9800f0468aeb94f8bdc6f0958ba024c1834bcf41e857d4a0a1bd_prof);

        
        $__internal_9682560a262725bf77d4a0e0bd14e739f2450529283562c0ed397ca880d72df4->leave($__internal_9682560a262725bf77d4a0e0bd14e739f2450529283562c0ed397ca880d72df4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69d406da9195e0df315f8668f5b2e282973dbf432169f0feadc3cb2bebbb64e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d406da9195e0df315f8668f5b2e282973dbf432169f0feadc3cb2bebbb64e3->enter($__internal_69d406da9195e0df315f8668f5b2e282973dbf432169f0feadc3cb2bebbb64e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb683c14e14b28df605f666f4d19a7768d6f51a6596596928627b0ea453af110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb683c14e14b28df605f666f4d19a7768d6f51a6596596928627b0ea453af110->enter($__internal_cb683c14e14b28df605f666f4d19a7768d6f51a6596596928627b0ea453af110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_cb683c14e14b28df605f666f4d19a7768d6f51a6596596928627b0ea453af110->leave($__internal_cb683c14e14b28df605f666f4d19a7768d6f51a6596596928627b0ea453af110_prof);

        
        $__internal_69d406da9195e0df315f8668f5b2e282973dbf432169f0feadc3cb2bebbb64e3->leave($__internal_69d406da9195e0df315f8668f5b2e282973dbf432169f0feadc3cb2bebbb64e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a98ad8a16e7f61aa49dbc88122fd64a6c2c276637e0c337154267f679aef211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a98ad8a16e7f61aa49dbc88122fd64a6c2c276637e0c337154267f679aef211->enter($__internal_6a98ad8a16e7f61aa49dbc88122fd64a6c2c276637e0c337154267f679aef211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3368dde628b38a9088ad0954aa4c586cf1dc554160b813111f334cb762f9d67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3368dde628b38a9088ad0954aa4c586cf1dc554160b813111f334cb762f9d67f->enter($__internal_3368dde628b38a9088ad0954aa4c586cf1dc554160b813111f334cb762f9d67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3368dde628b38a9088ad0954aa4c586cf1dc554160b813111f334cb762f9d67f->leave($__internal_3368dde628b38a9088ad0954aa4c586cf1dc554160b813111f334cb762f9d67f_prof);

        
        $__internal_6a98ad8a16e7f61aa49dbc88122fd64a6c2c276637e0c337154267f679aef211->leave($__internal_6a98ad8a16e7f61aa49dbc88122fd64a6c2c276637e0c337154267f679aef211_prof);

    }

    public function getTemplateName()
    {
        return "default/model_list.php.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

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
", "default/model_list.php.twig", "/home/teiva/Documents/Cours/Papon/modelManager/templates/default/model_list.php.twig");
    }
}
