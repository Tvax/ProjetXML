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
            'body' => array($this, 'block_body'),
            'include' => array($this, 'block_include'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57d67294389c169b0161a8aeeaad4682efa77b36c5088e881625842844d3723f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d67294389c169b0161a8aeeaad4682efa77b36c5088e881625842844d3723f->enter($__internal_57d67294389c169b0161a8aeeaad4682efa77b36c5088e881625842844d3723f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_890d475f8c805d1411941fd7018d164d96cc4d5a9c38c4735289cc4cad104811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890d475f8c805d1411941fd7018d164d96cc4d5a9c38c4735289cc4cad104811->enter($__internal_890d475f8c805d1411941fd7018d164d96cc4d5a9c38c4735289cc4cad104811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if ((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new Twig_Error_Runtime('Variable "isAdmin" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            echo "                  <li class=\"btn nav-item active\">
                      <a class=\"nav-link\" href=\"/admin\">Admin</a>
                  </li>
              ";
        }
        // line 43
        echo "
              <li class=\"btn nav-item active\">
                <a class=\"nav-link\" href=\"/validate\">Validate</a>
              </li>
              <li class=\"btn nav-item btn-danger active\">
                <a class=\"nav-link\" href=\"/?disconnect=true\">Disconnect</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

  <body>

  <!-- Page Content -->
    <div class=\"container\">
      <div class=\"mt-5\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "        </div>
      </div>
    </div>
  </body>
";
        // line 66
        $this->displayBlock('include', $context, $blocks);
        // line 67
        echo "</html>
";
        
        $__internal_57d67294389c169b0161a8aeeaad4682efa77b36c5088e881625842844d3723f->leave($__internal_57d67294389c169b0161a8aeeaad4682efa77b36c5088e881625842844d3723f_prof);

        
        $__internal_890d475f8c805d1411941fd7018d164d96cc4d5a9c38c4735289cc4cad104811->leave($__internal_890d475f8c805d1411941fd7018d164d96cc4d5a9c38c4735289cc4cad104811_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c45450e4d3010ea1562bb028ca7fd5ed485041f6356d737ab5c86aeb60a79ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c45450e4d3010ea1562bb028ca7fd5ed485041f6356d737ab5c86aeb60a79ce->enter($__internal_6c45450e4d3010ea1562bb028ca7fd5ed485041f6356d737ab5c86aeb60a79ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ccb777f24446e597d323bb246051bcae0aebee31b1561c6aa12fe3d782b1b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ccb777f24446e597d323bb246051bcae0aebee31b1561c6aa12fe3d782b1b6b->enter($__internal_3ccb777f24446e597d323bb246051bcae0aebee31b1561c6aa12fe3d782b1b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3ccb777f24446e597d323bb246051bcae0aebee31b1561c6aa12fe3d782b1b6b->leave($__internal_3ccb777f24446e597d323bb246051bcae0aebee31b1561c6aa12fe3d782b1b6b_prof);

        
        $__internal_6c45450e4d3010ea1562bb028ca7fd5ed485041f6356d737ab5c86aeb60a79ce->leave($__internal_6c45450e4d3010ea1562bb028ca7fd5ed485041f6356d737ab5c86aeb60a79ce_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_6127951dece7327827aab4050b76377173396c13f534bf96ee5b79104b9c20b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6127951dece7327827aab4050b76377173396c13f534bf96ee5b79104b9c20b2->enter($__internal_6127951dece7327827aab4050b76377173396c13f534bf96ee5b79104b9c20b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7520fcbf862586db9967e4cc9696043ac58826d07da152a8cffd7c031fd3c749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7520fcbf862586db9967e4cc9696043ac58826d07da152a8cffd7c031fd3c749->enter($__internal_7520fcbf862586db9967e4cc9696043ac58826d07da152a8cffd7c031fd3c749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7520fcbf862586db9967e4cc9696043ac58826d07da152a8cffd7c031fd3c749->leave($__internal_7520fcbf862586db9967e4cc9696043ac58826d07da152a8cffd7c031fd3c749_prof);

        
        $__internal_6127951dece7327827aab4050b76377173396c13f534bf96ee5b79104b9c20b2->leave($__internal_6127951dece7327827aab4050b76377173396c13f534bf96ee5b79104b9c20b2_prof);

    }

    // line 66
    public function block_include($context, array $blocks = array())
    {
        $__internal_30bfbfa8f4858724a9eea95acfb6a525c74353dfdb33319901c70cc181771f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bfbfa8f4858724a9eea95acfb6a525c74353dfdb33319901c70cc181771f5c->enter($__internal_30bfbfa8f4858724a9eea95acfb6a525c74353dfdb33319901c70cc181771f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_1e11e88e37d75f40b6958997a5a8f57263f7efaf3e921f883f2904b455d7da0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e11e88e37d75f40b6958997a5a8f57263f7efaf3e921f883f2904b455d7da0d->enter($__internal_1e11e88e37d75f40b6958997a5a8f57263f7efaf3e921f883f2904b455d7da0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        
        $__internal_1e11e88e37d75f40b6958997a5a8f57263f7efaf3e921f883f2904b455d7da0d->leave($__internal_1e11e88e37d75f40b6958997a5a8f57263f7efaf3e921f883f2904b455d7da0d_prof);

        
        $__internal_30bfbfa8f4858724a9eea95acfb6a525c74353dfdb33319901c70cc181771f5c->leave($__internal_30bfbfa8f4858724a9eea95acfb6a525c74353dfdb33319901c70cc181771f5c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 66,  136 => 61,  119 => 11,  108 => 67,  106 => 66,  100 => 62,  98 => 61,  78 => 43,  72 => 39,  70 => 38,  40 => 11,  28 => 1,);
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
              {% if isAdmin %}
                  <li class=\"btn nav-item active\">
                      <a class=\"nav-link\" href=\"/admin\">Admin</a>
                  </li>
              {% endif %}

              <li class=\"btn nav-item active\">
                <a class=\"nav-link\" href=\"/validate\">Validate</a>
              </li>
              <li class=\"btn nav-item btn-danger active\">
                <a class=\"nav-link\" href=\"/?disconnect=true\">Disconnect</a>
              </li>
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
{% block include %}{% endblock %}
</html>
", "base.html.twig", "/home/teiva/Documents/ProjetXML/templates/base.html.twig");
    }
}
