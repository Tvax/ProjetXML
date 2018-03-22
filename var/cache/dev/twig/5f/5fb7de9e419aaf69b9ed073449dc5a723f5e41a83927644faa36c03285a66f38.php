<?php

/* view/validate.php.twig */
class __TwigTemplate_4f3d39ed8646e091280b6276cb3277ad37dd7789a844b402aa484f9728bb56cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("view/base.html.twig", "view/validate.php.twig", 1);
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
        $__internal_5f0b3cfd340b0cdf907f2bbb4b70de6c5bfb7f146ad8601ebb125a195b5b106b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0b3cfd340b0cdf907f2bbb4b70de6c5bfb7f146ad8601ebb125a195b5b106b->enter($__internal_5f0b3cfd340b0cdf907f2bbb4b70de6c5bfb7f146ad8601ebb125a195b5b106b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "view/validate.php.twig"));

        $__internal_7d54b0661dea4823cd6420c7b9964b77a24b9e5595d9e664f099999a4a127dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d54b0661dea4823cd6420c7b9964b77a24b9e5595d9e664f099999a4a127dae->enter($__internal_7d54b0661dea4823cd6420c7b9964b77a24b9e5595d9e664f099999a4a127dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "view/validate.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f0b3cfd340b0cdf907f2bbb4b70de6c5bfb7f146ad8601ebb125a195b5b106b->leave($__internal_5f0b3cfd340b0cdf907f2bbb4b70de6c5bfb7f146ad8601ebb125a195b5b106b_prof);

        
        $__internal_7d54b0661dea4823cd6420c7b9964b77a24b9e5595d9e664f099999a4a127dae->leave($__internal_7d54b0661dea4823cd6420c7b9964b77a24b9e5595d9e664f099999a4a127dae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f54e2c982c593275db68129a4bc097311d364e059d1d03ae1f6579b29eaae1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f54e2c982c593275db68129a4bc097311d364e059d1d03ae1f6579b29eaae1f->enter($__internal_3f54e2c982c593275db68129a4bc097311d364e059d1d03ae1f6579b29eaae1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44c0b2792e691daed9159d60aebbe44636ad9ed8e74b80b2c2d7c26bbb82ba7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c0b2792e691daed9159d60aebbe44636ad9ed8e74b80b2c2d7c26bbb82ba7b->enter($__internal_44c0b2792e691daed9159d60aebbe44636ad9ed8e74b80b2c2d7c26bbb82ba7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Validate";
        
        $__internal_44c0b2792e691daed9159d60aebbe44636ad9ed8e74b80b2c2d7c26bbb82ba7b->leave($__internal_44c0b2792e691daed9159d60aebbe44636ad9ed8e74b80b2c2d7c26bbb82ba7b_prof);

        
        $__internal_3f54e2c982c593275db68129a4bc097311d364e059d1d03ae1f6579b29eaae1f->leave($__internal_3f54e2c982c593275db68129a4bc097311d364e059d1d03ae1f6579b29eaae1f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0afae476bede110eab6a160b1a191aac645773bc81bfb9b8c183631d90868b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afae476bede110eab6a160b1a191aac645773bc81bfb9b8c183631d90868b6a->enter($__internal_0afae476bede110eab6a160b1a191aac645773bc81bfb9b8c183631d90868b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2bff73cc5c54829f02f068b9b470b0a1821a24b9cfce4a5a0d79a68d6502ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2bff73cc5c54829f02f068b9b470b0a1821a24b9cfce4a5a0d79a68d6502ea1->enter($__internal_a2bff73cc5c54829f02f068b9b470b0a1821a24b9cfce4a5a0d79a68d6502ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if (((isset($context["modelValidated"]) || array_key_exists("modelValidated", $context) ? $context["modelValidated"] : (function () { throw new Twig_Error_Runtime('Variable "modelValidated" does not exist.', 7, $this->getSourceContext()); })()) == "valid")) {
            // line 8
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Success!</strong> Your model has been validated.
      </div>
    ";
        } elseif ((        // line 12
(isset($context["modelValidated"]) || array_key_exists("modelValidated", $context) ? $context["modelValidated"] : (function () { throw new Twig_Error_Runtime('Variable "modelValidated" does not exist.', 12, $this->getSourceContext()); })()) == "notValid")) {
            // line 13
            echo "      <div class=\"alert alert-danger alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Failed!</strong> Your model contains errors.
      </div>
    ";
        }
        // line 18
        echo "
  <form action=\"/validate\" method=\"post\">
    <div class=\"card-group\">

      <div class=\"card\">
        <div class=\"card-header\">Model</div>
        <div class=\"card-body\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["xsd"]) || array_key_exists("xsd", $context) ? $context["xsd"] : (function () { throw new Twig_Error_Runtime('Variable "xsd" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
      </div>

      <div class=\"card\">
        <div class=\"card-header\">XML</div>
        <div class=\"card-body\"><textarea name=\"xml\" class=\"form-control\" rows=\"5\" id=\"xml\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["xml"]) || array_key_exists("xml", $context) ? $context["xml"] : (function () { throw new Twig_Error_Runtime('Variable "xml" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea></div>
      </div>


      <textarea name=\"xsd\" class=\"form-control\" rows=\"5\" id=\"xsd\" style=\"display:none;\">";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["xsd"]) || array_key_exists("xsd", $context) ? $context["xsd"] : (function () { throw new Twig_Error_Runtime('Variable "xsd" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" style=\"margin: 10px;\">Submit</button>
  </form>
";
        
        $__internal_a2bff73cc5c54829f02f068b9b470b0a1821a24b9cfce4a5a0d79a68d6502ea1->leave($__internal_a2bff73cc5c54829f02f068b9b470b0a1821a24b9cfce4a5a0d79a68d6502ea1_prof);

        
        $__internal_0afae476bede110eab6a160b1a191aac645773bc81bfb9b8c183631d90868b6a->leave($__internal_0afae476bede110eab6a160b1a191aac645773bc81bfb9b8c183631d90868b6a_prof);

    }

    public function getTemplateName()
    {
        return "view/validate.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  104 => 29,  96 => 24,  88 => 18,  81 => 13,  79 => 12,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'view/base.html.twig' %}

{% block title %}Validate{% endblock %}

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
{% endblock %}", "view/validate.php.twig", "/home/teiva/Documents/Projet-Papon/modelManager/templates/view/validate.php.twig");
    }
}
