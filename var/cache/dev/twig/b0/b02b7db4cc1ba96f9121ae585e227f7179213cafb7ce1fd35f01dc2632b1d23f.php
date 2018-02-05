<?php

/* base.html.twig */
class __TwigTemplate_02df2f51bca6ed0e6368c515b705c5790cfcb4c8bae2c318787744ed5e4c51d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ced800cf0dca03dfadbc6a805ed1221f802ca08c6382c322813ce122570978d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced800cf0dca03dfadbc6a805ed1221f802ca08c6382c322813ce122570978d1->enter($__internal_ced800cf0dca03dfadbc6a805ed1221f802ca08c6382c322813ce122570978d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b3886bad46fc1308188c428d3270b0e52b9e1d37391b9aefe001adf017537672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3886bad46fc1308188c428d3270b0e52b9e1d37391b9aefe001adf017537672->enter($__internal_b3886bad46fc1308188c428d3270b0e52b9e1d37391b9aefe001adf017537672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
    </style>

  </head>
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">Home</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
              ";
        // line 38
        $this->displayBlock('navbar', $context, $blocks);
        // line 39
        echo "          </ul>
        </div>
      </div>
    </nav>

  <body>

  <!-- Page Content -->
    <div class=\"container\">
      <div class=\"mt-5\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "        </div>
      </div>
    </div>
  </body>

</html>
";
        
        $__internal_ced800cf0dca03dfadbc6a805ed1221f802ca08c6382c322813ce122570978d1->leave($__internal_ced800cf0dca03dfadbc6a805ed1221f802ca08c6382c322813ce122570978d1_prof);

        
        $__internal_b3886bad46fc1308188c428d3270b0e52b9e1d37391b9aefe001adf017537672->leave($__internal_b3886bad46fc1308188c428d3270b0e52b9e1d37391b9aefe001adf017537672_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf49dca17af20460efa61e7a4d31c90bbf4c581dfe1dd8c79210baaa4849bd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf49dca17af20460efa61e7a4d31c90bbf4c581dfe1dd8c79210baaa4849bd76->enter($__internal_cf49dca17af20460efa61e7a4d31c90bbf4c581dfe1dd8c79210baaa4849bd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8476ad8a260556f9030fae558f6c045b3934b2d684889833445da8461fcbd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8476ad8a260556f9030fae558f6c045b3934b2d684889833445da8461fcbd1f->enter($__internal_d8476ad8a260556f9030fae558f6c045b3934b2d684889833445da8461fcbd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d8476ad8a260556f9030fae558f6c045b3934b2d684889833445da8461fcbd1f->leave($__internal_d8476ad8a260556f9030fae558f6c045b3934b2d684889833445da8461fcbd1f_prof);

        
        $__internal_cf49dca17af20460efa61e7a4d31c90bbf4c581dfe1dd8c79210baaa4849bd76->leave($__internal_cf49dca17af20460efa61e7a4d31c90bbf4c581dfe1dd8c79210baaa4849bd76_prof);

    }

    // line 38
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_70f476449720bc486483a4cced3b1e74925327d1d4814dd7a4af95bc5c871111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f476449720bc486483a4cced3b1e74925327d1d4814dd7a4af95bc5c871111->enter($__internal_70f476449720bc486483a4cced3b1e74925327d1d4814dd7a4af95bc5c871111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_ffcadfd4db08abe16d7b33dda3f9569fb540bdeb398224acd234e86761571d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcadfd4db08abe16d7b33dda3f9569fb540bdeb398224acd234e86761571d7c->enter($__internal_ffcadfd4db08abe16d7b33dda3f9569fb540bdeb398224acd234e86761571d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_ffcadfd4db08abe16d7b33dda3f9569fb540bdeb398224acd234e86761571d7c->leave($__internal_ffcadfd4db08abe16d7b33dda3f9569fb540bdeb398224acd234e86761571d7c_prof);

        
        $__internal_70f476449720bc486483a4cced3b1e74925327d1d4814dd7a4af95bc5c871111->leave($__internal_70f476449720bc486483a4cced3b1e74925327d1d4814dd7a4af95bc5c871111_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6f9788543e5ea09c93acf453a2ab05a8c7d8f003ea105ee8454c576e6fc1f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f9788543e5ea09c93acf453a2ab05a8c7d8f003ea105ee8454c576e6fc1f07->enter($__internal_e6f9788543e5ea09c93acf453a2ab05a8c7d8f003ea105ee8454c576e6fc1f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7824a2c43c4a59ffeb40bf3bb04c6c9b4f7c9cb46a26a30a22e6ea11799ecc0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7824a2c43c4a59ffeb40bf3bb04c6c9b4f7c9cb46a26a30a22e6ea11799ecc0c->enter($__internal_7824a2c43c4a59ffeb40bf3bb04c6c9b4f7c9cb46a26a30a22e6ea11799ecc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7824a2c43c4a59ffeb40bf3bb04c6c9b4f7c9cb46a26a30a22e6ea11799ecc0c->leave($__internal_7824a2c43c4a59ffeb40bf3bb04c6c9b4f7c9cb46a26a30a22e6ea11799ecc0c_prof);

        
        $__internal_e6f9788543e5ea09c93acf453a2ab05a8c7d8f003ea105ee8454c576e6fc1f07->leave($__internal_e6f9788543e5ea09c93acf453a2ab05a8c7d8f003ea105ee8454c576e6fc1f07_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 50,  120 => 38,  103 => 11,  87 => 51,  85 => 50,  72 => 39,  70 => 38,  40 => 11,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
    </style>

  </head>
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">Home</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
              {% block navbar %}{% endblock %}
          </ul>
        </div>
      </div>
    </nav>

  <body>

  <!-- Page Content -->
    <div class=\"container\">
      <div class=\"mt-5\">
        <div class=\"col-lg-12 text-center\">
            {% block body %}{% endblock %}
        </div>
      </div>
    </div>
  </body>

</html>
", "base.html.twig", "/home/teiva/Documents/ProjetXML/templates/base.html.twig");
    }
}
