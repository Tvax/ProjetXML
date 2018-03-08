<?php

/* default/model_list.php.twig */
class __TwigTemplate_3831acfd2f058b1146304e07769fbcfd1803022ce6046189d283d7efe5dac173 extends Twig_Template
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
        $__internal_7855e0e5c9bacfc15e0ff18cbc03910610815f887064e4af8ce9be8f82fedc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7855e0e5c9bacfc15e0ff18cbc03910610815f887064e4af8ce9be8f82fedc3e->enter($__internal_7855e0e5c9bacfc15e0ff18cbc03910610815f887064e4af8ce9be8f82fedc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $__internal_5c593f2316b416c544fa71ba94bb2ce871d842a70cb790084c1a969d2176f724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c593f2316b416c544fa71ba94bb2ce871d842a70cb790084c1a969d2176f724->enter($__internal_5c593f2316b416c544fa71ba94bb2ce871d842a70cb790084c1a969d2176f724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7855e0e5c9bacfc15e0ff18cbc03910610815f887064e4af8ce9be8f82fedc3e->leave($__internal_7855e0e5c9bacfc15e0ff18cbc03910610815f887064e4af8ce9be8f82fedc3e_prof);

        
        $__internal_5c593f2316b416c544fa71ba94bb2ce871d842a70cb790084c1a969d2176f724->leave($__internal_5c593f2316b416c544fa71ba94bb2ce871d842a70cb790084c1a969d2176f724_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_545e434fa00814d9d16c0402fb236ddeae571e72a488635a477117df1330ab96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545e434fa00814d9d16c0402fb236ddeae571e72a488635a477117df1330ab96->enter($__internal_545e434fa00814d9d16c0402fb236ddeae571e72a488635a477117df1330ab96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e4cb780be75adbdd41ab7041a2c02f1b6d83e4501dde85b85d4d1265f34c7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4cb780be75adbdd41ab7041a2c02f1b6d83e4501dde85b85d4d1265f34c7d7->enter($__internal_1e4cb780be75adbdd41ab7041a2c02f1b6d83e4501dde85b85d4d1265f34c7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_1e4cb780be75adbdd41ab7041a2c02f1b6d83e4501dde85b85d4d1265f34c7d7->leave($__internal_1e4cb780be75adbdd41ab7041a2c02f1b6d83e4501dde85b85d4d1265f34c7d7_prof);

        
        $__internal_545e434fa00814d9d16c0402fb236ddeae571e72a488635a477117df1330ab96->leave($__internal_545e434fa00814d9d16c0402fb236ddeae571e72a488635a477117df1330ab96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2871168117f91c2f9997f7c23745973e010556d273b6edfe76b77ab3b133bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2871168117f91c2f9997f7c23745973e010556d273b6edfe76b77ab3b133bd5->enter($__internal_e2871168117f91c2f9997f7c23745973e010556d273b6edfe76b77ab3b133bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e78eef0eacf5b7b92bf4155cdfaf13c6774dbcec718af906a1ccfcfd3a7536fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78eef0eacf5b7b92bf4155cdfaf13c6774dbcec718af906a1ccfcfd3a7536fb->enter($__internal_e78eef0eacf5b7b92bf4155cdfaf13c6774dbcec718af906a1ccfcfd3a7536fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            // line 33
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                <div class=\"modal-dialog\">
                  <div class=\"modal-content\">

                    <!-- Modal Header -->
                    <div class=\"modal-header\">
                      <h4 class=\"modal-title\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getVersion", array()), "html", null, true);
            echo "</h4>
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class=\"modal-body\">
                        ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "
                    </div>

                    <!-- Modal footer -->
                    <div class=\"modal-footer\">

                      <textarea name=\"xsd\" style=\"display:none;\">";
            // line 51
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
        // line 67
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_e78eef0eacf5b7b92bf4155cdfaf13c6774dbcec718af906a1ccfcfd3a7536fb->leave($__internal_e78eef0eacf5b7b92bf4155cdfaf13c6774dbcec718af906a1ccfcfd3a7536fb_prof);

        
        $__internal_e2871168117f91c2f9997f7c23745973e010556d273b6edfe76b77ab3b133bd5->leave($__internal_e2871168117f91c2f9997f7c23745973e010556d273b6edfe76b77ab3b133bd5_prof);

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
        return array (  167 => 67,  145 => 51,  136 => 45,  127 => 39,  118 => 33,  109 => 27,  103 => 24,  99 => 23,  94 => 22,  92 => 21,  89 => 20,  84 => 19,  82 => 18,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
