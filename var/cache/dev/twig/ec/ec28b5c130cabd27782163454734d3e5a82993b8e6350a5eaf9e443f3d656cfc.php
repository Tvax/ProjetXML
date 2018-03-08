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
        $__internal_bdf6bd5d34b08527a1a565bf5ae2f5050efa95a4e0d936eb46e2075b6d33a98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf6bd5d34b08527a1a565bf5ae2f5050efa95a4e0d936eb46e2075b6d33a98e->enter($__internal_bdf6bd5d34b08527a1a565bf5ae2f5050efa95a4e0d936eb46e2075b6d33a98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $__internal_a11bf4b641805c02d4858b12c9f9eb65b85c1699f2f2d36edaad73f5d27c29b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11bf4b641805c02d4858b12c9f9eb65b85c1699f2f2d36edaad73f5d27c29b3->enter($__internal_a11bf4b641805c02d4858b12c9f9eb65b85c1699f2f2d36edaad73f5d27c29b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf6bd5d34b08527a1a565bf5ae2f5050efa95a4e0d936eb46e2075b6d33a98e->leave($__internal_bdf6bd5d34b08527a1a565bf5ae2f5050efa95a4e0d936eb46e2075b6d33a98e_prof);

        
        $__internal_a11bf4b641805c02d4858b12c9f9eb65b85c1699f2f2d36edaad73f5d27c29b3->leave($__internal_a11bf4b641805c02d4858b12c9f9eb65b85c1699f2f2d36edaad73f5d27c29b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77688df8c565b187f0b00e1a70a96968e940f96c8858615026e876a911174d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77688df8c565b187f0b00e1a70a96968e940f96c8858615026e876a911174d7e->enter($__internal_77688df8c565b187f0b00e1a70a96968e940f96c8858615026e876a911174d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2dc55f331ba4954fe22f34d7ba43f9714fee689907001da316afe1018667512f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc55f331ba4954fe22f34d7ba43f9714fee689907001da316afe1018667512f->enter($__internal_2dc55f331ba4954fe22f34d7ba43f9714fee689907001da316afe1018667512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Validate";
        
        $__internal_2dc55f331ba4954fe22f34d7ba43f9714fee689907001da316afe1018667512f->leave($__internal_2dc55f331ba4954fe22f34d7ba43f9714fee689907001da316afe1018667512f_prof);

        
        $__internal_77688df8c565b187f0b00e1a70a96968e940f96c8858615026e876a911174d7e->leave($__internal_77688df8c565b187f0b00e1a70a96968e940f96c8858615026e876a911174d7e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_e437505ff4b6688069372c1206c5911d836eb59338959a814b1e114de44675f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e437505ff4b6688069372c1206c5911d836eb59338959a814b1e114de44675f2->enter($__internal_e437505ff4b6688069372c1206c5911d836eb59338959a814b1e114de44675f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf2bf1e7e016f7e0bb6ec010137d8aafdb3ef0a90d6304a3936d8762ae81d7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2bf1e7e016f7e0bb6ec010137d8aafdb3ef0a90d6304a3936d8762ae81d7e5->enter($__internal_bf2bf1e7e016f7e0bb6ec010137d8aafdb3ef0a90d6304a3936d8762ae81d7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf2bf1e7e016f7e0bb6ec010137d8aafdb3ef0a90d6304a3936d8762ae81d7e5->leave($__internal_bf2bf1e7e016f7e0bb6ec010137d8aafdb3ef0a90d6304a3936d8762ae81d7e5_prof);

        
        $__internal_e437505ff4b6688069372c1206c5911d836eb59338959a814b1e114de44675f2->leave($__internal_e437505ff4b6688069372c1206c5911d836eb59338959a814b1e114de44675f2_prof);

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
