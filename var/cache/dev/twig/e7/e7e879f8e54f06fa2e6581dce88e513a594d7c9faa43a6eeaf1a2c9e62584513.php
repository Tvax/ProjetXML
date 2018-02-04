<?php

/* base.html.twig */
class __TwigTemplate_687c8d67c81b15d7a05e0754517744310c43ddbfb90b37da9eeebf4fa867a360 extends Twig_Template
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
        $__internal_6e2beac9bd28a2c49c877428dba293b1001ace1c04e2ddb120102d6f55594b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2beac9bd28a2c49c877428dba293b1001ace1c04e2ddb120102d6f55594b4f->enter($__internal_6e2beac9bd28a2c49c877428dba293b1001ace1c04e2ddb120102d6f55594b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_deeaefdef0da1d1b919a70bb9f5eb83bf8b837a9271eb021524c1585fa7338a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deeaefdef0da1d1b919a70bb9f5eb83bf8b837a9271eb021524c1585fa7338a6->enter($__internal_deeaefdef0da1d1b919a70bb9f5eb83bf8b837a9271eb021524c1585fa7338a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

  <body>

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
        // line 42
        $this->displayBlock('navbar', $context, $blocks);
        // line 43
        echo "          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "        </div>
      </div>
    </div>

  </body>

</html>
";
        
        $__internal_6e2beac9bd28a2c49c877428dba293b1001ace1c04e2ddb120102d6f55594b4f->leave($__internal_6e2beac9bd28a2c49c877428dba293b1001ace1c04e2ddb120102d6f55594b4f_prof);

        
        $__internal_deeaefdef0da1d1b919a70bb9f5eb83bf8b837a9271eb021524c1585fa7338a6->leave($__internal_deeaefdef0da1d1b919a70bb9f5eb83bf8b837a9271eb021524c1585fa7338a6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9838cdd61047671010c52acceac435172daa456ca52614427708b44aaf8710c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9838cdd61047671010c52acceac435172daa456ca52614427708b44aaf8710c->enter($__internal_c9838cdd61047671010c52acceac435172daa456ca52614427708b44aaf8710c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_acf5aa379967f9da7190ded4240c38940a099b605ae359f2584b3dd2e0081ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf5aa379967f9da7190ded4240c38940a099b605ae359f2584b3dd2e0081ddb->enter($__internal_acf5aa379967f9da7190ded4240c38940a099b605ae359f2584b3dd2e0081ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_acf5aa379967f9da7190ded4240c38940a099b605ae359f2584b3dd2e0081ddb->leave($__internal_acf5aa379967f9da7190ded4240c38940a099b605ae359f2584b3dd2e0081ddb_prof);

        
        $__internal_c9838cdd61047671010c52acceac435172daa456ca52614427708b44aaf8710c->leave($__internal_c9838cdd61047671010c52acceac435172daa456ca52614427708b44aaf8710c_prof);

    }

    // line 42
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_73b3644669ec476dc2f91a04977631c6cdb439706504cadc2869dec52cd1da24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b3644669ec476dc2f91a04977631c6cdb439706504cadc2869dec52cd1da24->enter($__internal_73b3644669ec476dc2f91a04977631c6cdb439706504cadc2869dec52cd1da24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_69b3aba31dc7781f0ff988a5e131fa211348ab45616be13b7eacc52e752b30bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b3aba31dc7781f0ff988a5e131fa211348ab45616be13b7eacc52e752b30bc->enter($__internal_69b3aba31dc7781f0ff988a5e131fa211348ab45616be13b7eacc52e752b30bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_69b3aba31dc7781f0ff988a5e131fa211348ab45616be13b7eacc52e752b30bc->leave($__internal_69b3aba31dc7781f0ff988a5e131fa211348ab45616be13b7eacc52e752b30bc_prof);

        
        $__internal_73b3644669ec476dc2f91a04977631c6cdb439706504cadc2869dec52cd1da24->leave($__internal_73b3644669ec476dc2f91a04977631c6cdb439706504cadc2869dec52cd1da24_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_0adf8edcbe2d7837a3684e8ce07f5fdad7c1abe7b81b91afa1d07356321a84ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adf8edcbe2d7837a3684e8ce07f5fdad7c1abe7b81b91afa1d07356321a84ef->enter($__internal_0adf8edcbe2d7837a3684e8ce07f5fdad7c1abe7b81b91afa1d07356321a84ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6245cc7bff5490661dfe4df7ef8029037e081ed27aa83c225c31743cd3985bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6245cc7bff5490661dfe4df7ef8029037e081ed27aa83c225c31743cd3985bf->enter($__internal_b6245cc7bff5490661dfe4df7ef8029037e081ed27aa83c225c31743cd3985bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6245cc7bff5490661dfe4df7ef8029037e081ed27aa83c225c31743cd3985bf->leave($__internal_b6245cc7bff5490661dfe4df7ef8029037e081ed27aa83c225c31743cd3985bf_prof);

        
        $__internal_0adf8edcbe2d7837a3684e8ce07f5fdad7c1abe7b81b91afa1d07356321a84ef->leave($__internal_0adf8edcbe2d7837a3684e8ce07f5fdad7c1abe7b81b91afa1d07356321a84ef_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  123 => 42,  106 => 11,  89 => 53,  87 => 52,  76 => 43,  74 => 42,  40 => 11,  28 => 1,);
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

  <body>

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

    <!-- Page Content -->
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {% block body %}{% endblock %}
        </div>
      </div>
    </div>

  </body>

</html>
", "base.html.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/templates/base.html.twig");
    }
}
