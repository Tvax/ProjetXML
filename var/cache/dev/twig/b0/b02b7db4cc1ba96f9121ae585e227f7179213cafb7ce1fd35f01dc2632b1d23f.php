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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d8176cde44a40d6c91a98903a1c56bf0009e6ae7236abaff39030e6fa990be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8176cde44a40d6c91a98903a1c56bf0009e6ae7236abaff39030e6fa990be8->enter($__internal_5d8176cde44a40d6c91a98903a1c56bf0009e6ae7236abaff39030e6fa990be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3abccb58b95ebafd9068633f80c9e50d394aaf839b940bfcad7ccfef69616a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abccb58b95ebafd9068633f80c9e50d394aaf839b940bfcad7ccfef69616a32->enter($__internal_3abccb58b95ebafd9068633f80c9e50d394aaf839b940bfcad7ccfef69616a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

</html>
";
        
        $__internal_5d8176cde44a40d6c91a98903a1c56bf0009e6ae7236abaff39030e6fa990be8->leave($__internal_5d8176cde44a40d6c91a98903a1c56bf0009e6ae7236abaff39030e6fa990be8_prof);

        
        $__internal_3abccb58b95ebafd9068633f80c9e50d394aaf839b940bfcad7ccfef69616a32->leave($__internal_3abccb58b95ebafd9068633f80c9e50d394aaf839b940bfcad7ccfef69616a32_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_35d437144696d21fea7e0d4931493b479e5c8ada202f316a515bcc6a22f9666a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d437144696d21fea7e0d4931493b479e5c8ada202f316a515bcc6a22f9666a->enter($__internal_35d437144696d21fea7e0d4931493b479e5c8ada202f316a515bcc6a22f9666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72978b5c5e5ff83f63968e261e415d183d609f270778437d603867f3c65b220c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72978b5c5e5ff83f63968e261e415d183d609f270778437d603867f3c65b220c->enter($__internal_72978b5c5e5ff83f63968e261e415d183d609f270778437d603867f3c65b220c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_72978b5c5e5ff83f63968e261e415d183d609f270778437d603867f3c65b220c->leave($__internal_72978b5c5e5ff83f63968e261e415d183d609f270778437d603867f3c65b220c_prof);

        
        $__internal_35d437144696d21fea7e0d4931493b479e5c8ada202f316a515bcc6a22f9666a->leave($__internal_35d437144696d21fea7e0d4931493b479e5c8ada202f316a515bcc6a22f9666a_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_cafd9134429c82a8b8def42bc74d75bf3f2d8c5e9f01a0fb426082f81c8a1026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafd9134429c82a8b8def42bc74d75bf3f2d8c5e9f01a0fb426082f81c8a1026->enter($__internal_cafd9134429c82a8b8def42bc74d75bf3f2d8c5e9f01a0fb426082f81c8a1026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8d247eb54ba8c345b854ad8bdc971a33b4a7d284506b1b8f79d79f65ea2442e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d247eb54ba8c345b854ad8bdc971a33b4a7d284506b1b8f79d79f65ea2442e->enter($__internal_c8d247eb54ba8c345b854ad8bdc971a33b4a7d284506b1b8f79d79f65ea2442e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8d247eb54ba8c345b854ad8bdc971a33b4a7d284506b1b8f79d79f65ea2442e->leave($__internal_c8d247eb54ba8c345b854ad8bdc971a33b4a7d284506b1b8f79d79f65ea2442e_prof);

        
        $__internal_cafd9134429c82a8b8def42bc74d75bf3f2d8c5e9f01a0fb426082f81c8a1026->leave($__internal_cafd9134429c82a8b8def42bc74d75bf3f2d8c5e9f01a0fb426082f81c8a1026_prof);

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
        return array (  132 => 61,  115 => 11,  99 => 62,  97 => 61,  77 => 43,  71 => 39,  69 => 38,  39 => 11,  27 => 1,);
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

</html>
", "base.html.twig", "/home/teiva/Documents/ProjetXML/templates/base.html.twig");
    }
}
