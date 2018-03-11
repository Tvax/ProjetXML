<?php

/* default/validate.php.twig */
class __TwigTemplate_16f9cfc6c6540865e05cd287ec6447ae8cf8d54a06f201d3e599e542b05ed063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/validate.php.twig", 1);
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
        $__internal_8819e2036cd9352e3bd77b830c57a43e86b9120eea8c18f617aee979b6faca4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8819e2036cd9352e3bd77b830c57a43e86b9120eea8c18f617aee979b6faca4c->enter($__internal_8819e2036cd9352e3bd77b830c57a43e86b9120eea8c18f617aee979b6faca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $__internal_39065d786df96ddeb45ccc86fefb1c05a97cafd3388f4c8b7e673bcb2a796976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39065d786df96ddeb45ccc86fefb1c05a97cafd3388f4c8b7e673bcb2a796976->enter($__internal_39065d786df96ddeb45ccc86fefb1c05a97cafd3388f4c8b7e673bcb2a796976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8819e2036cd9352e3bd77b830c57a43e86b9120eea8c18f617aee979b6faca4c->leave($__internal_8819e2036cd9352e3bd77b830c57a43e86b9120eea8c18f617aee979b6faca4c_prof);

        
        $__internal_39065d786df96ddeb45ccc86fefb1c05a97cafd3388f4c8b7e673bcb2a796976->leave($__internal_39065d786df96ddeb45ccc86fefb1c05a97cafd3388f4c8b7e673bcb2a796976_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b515f56a222d0d6b09dc6ea0fb9242876835d94aa17e3cd4c21b4da5756cfdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b515f56a222d0d6b09dc6ea0fb9242876835d94aa17e3cd4c21b4da5756cfdc9->enter($__internal_b515f56a222d0d6b09dc6ea0fb9242876835d94aa17e3cd4c21b4da5756cfdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f3b986dae9dbc9779023f7bf54c0c00e45a2f57eee1f9f235d2929afadbed32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3b986dae9dbc9779023f7bf54c0c00e45a2f57eee1f9f235d2929afadbed32->enter($__internal_3f3b986dae9dbc9779023f7bf54c0c00e45a2f57eee1f9f235d2929afadbed32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Validate";
        
        $__internal_3f3b986dae9dbc9779023f7bf54c0c00e45a2f57eee1f9f235d2929afadbed32->leave($__internal_3f3b986dae9dbc9779023f7bf54c0c00e45a2f57eee1f9f235d2929afadbed32_prof);

        
        $__internal_b515f56a222d0d6b09dc6ea0fb9242876835d94aa17e3cd4c21b4da5756cfdc9->leave($__internal_b515f56a222d0d6b09dc6ea0fb9242876835d94aa17e3cd4c21b4da5756cfdc9_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c50e198cbc9f0c24998a3b50a2d5d9507d2bd51454ca1f917264a3f58bf9a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c50e198cbc9f0c24998a3b50a2d5d9507d2bd51454ca1f917264a3f58bf9a29->enter($__internal_2c50e198cbc9f0c24998a3b50a2d5d9507d2bd51454ca1f917264a3f58bf9a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbc4676985a9950040ac7b7b84e876ad942355b4cf1c4dd43e75e475d8a35978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc4676985a9950040ac7b7b84e876ad942355b4cf1c4dd43e75e475d8a35978->enter($__internal_bbc4676985a9950040ac7b7b84e876ad942355b4cf1c4dd43e75e475d8a35978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
    ";
        // line 22
        if (((isset($context["modelValidated"]) || array_key_exists("modelValidated", $context) ? $context["modelValidated"] : (function () { throw new Twig_Error_Runtime('Variable "modelValidated" does not exist.', 22, $this->getSourceContext()); })()) == "valid")) {
            // line 23
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Success!</strong> Your model has been validated.
      </div>
    ";
        } elseif ((        // line 27
(isset($context["modelValidated"]) || array_key_exists("modelValidated", $context) ? $context["modelValidated"] : (function () { throw new Twig_Error_Runtime('Variable "modelValidated" does not exist.', 27, $this->getSourceContext()); })()) == "notValid")) {
            // line 28
            echo "      <div class=\"alert alert-danger alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Failed!</strong> Your model contains errors.
      </div>
    ";
        }
        // line 33
        echo "
  <form action=\"/validate\" method=\"post\">
    <div class=\"card-group\">

      <div class=\"card\">
        <div class=\"card-header\">Model</div>
        <div class=\"card-body\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["xsd"]) || array_key_exists("xsd", $context) ? $context["xsd"] : (function () { throw new Twig_Error_Runtime('Variable "xsd" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
      </div>

      <div class=\"card\">
        <div class=\"card-header\">XML</div>
        <div class=\"card-body\"><textarea name=\"xml\" class=\"form-control\" rows=\"5\" id=\"xml\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["xml"]) || array_key_exists("xml", $context) ? $context["xml"] : (function () { throw new Twig_Error_Runtime('Variable "xml" does not exist.', 44, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea></div>
      </div>


      <textarea name=\"xsd\" class=\"form-control\" rows=\"5\" id=\"xsd\" style=\"display:none;\">";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["xsd"]) || array_key_exists("xsd", $context) ? $context["xsd"] : (function () { throw new Twig_Error_Runtime('Variable "xsd" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" style=\"margin: 10px;\">Submit</button>
  </form>
";
        
        $__internal_bbc4676985a9950040ac7b7b84e876ad942355b4cf1c4dd43e75e475d8a35978->leave($__internal_bbc4676985a9950040ac7b7b84e876ad942355b4cf1c4dd43e75e475d8a35978_prof);

        
        $__internal_2c50e198cbc9f0c24998a3b50a2d5d9507d2bd51454ca1f917264a3f58bf9a29->leave($__internal_2c50e198cbc9f0c24998a3b50a2d5d9507d2bd51454ca1f917264a3f58bf9a29_prof);

    }

    public function getTemplateName()
    {
        return "default/validate.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 48,  104 => 44,  96 => 39,  88 => 33,  81 => 28,  79 => 27,  73 => 23,  71 => 22,  68 => 21,  59 => 20,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Validate{% endblock %}

{#{% block navbar %}#}
{#<li class=\"btn nav-item active\">#}
{#<a class=\"nav-link\" href=\"/validate\">Validate</a>#}
{#</li>#}

{#{% if isAdmin %}#}
{#<li class=\"btn nav-item active\">#}
{#<a class=\"nav-link\" href=\"/admin\">Admin</a>#}
{#</li>#}
{#{% endif %}#}
{#<li class=\"btn nav-item btn-danger active\">#}
{#<a class=\"nav-link\" href=\"/?disconnect=true\">Disconnect</a>#}
{#</li>#}
{#{% endblock %}#}

{% block body %}

    {% if modelValidated == \"valid\" %}
      <div class=\"alert alert-success alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Success!</strong> Your model has been validated.
      </div>
    {% elseif modelValidated == \"notValid\" %}
      <div class=\"alert alert-danger alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Failed!</strong> Your model contains errors.
      </div>
    {% endif %}

  <form action=\"/validate\" method=\"post\">
    <div class=\"card-group\">

      <div class=\"card\">
        <div class=\"card-header\">Model</div>
        <div class=\"card-body\">{{ xsd }}</div>
      </div>

      <div class=\"card\">
        <div class=\"card-header\">XML</div>
        <div class=\"card-body\"><textarea name=\"xml\" class=\"form-control\" rows=\"5\" id=\"xml\">{{ xml }}</textarea></div>
      </div>


      <textarea name=\"xsd\" class=\"form-control\" rows=\"5\" id=\"xsd\" style=\"display:none;\">{{ xsd }}</textarea>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" style=\"margin: 10px;\">Submit</button>
  </form>
{% endblock %}", "default/validate.php.twig", "/home/teiva/Documents/Cours/Papon/modelManager/templates/default/validate.php.twig");
    }
}
