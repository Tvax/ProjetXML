<?php

/* base.html.twig */
class __TwigTemplate_7131e8cc1616b114a4c8b1ca94d59192c38d0ddc533142ef9506fadcd143ba7a extends Twig_Template
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
        $__internal_1fb40f89ae13aecfa6fd3330689dff58dfddfbc7cd7db207fbf40c05a2ccefff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb40f89ae13aecfa6fd3330689dff58dfddfbc7cd7db207fbf40c05a2ccefff->enter($__internal_1fb40f89ae13aecfa6fd3330689dff58dfddfbc7cd7db207fbf40c05a2ccefff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_22752871c72ec956421896b11d5ac8b29f2ce43d6d5c2cf7d0a0d8dcf7a875a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22752871c72ec956421896b11d5ac8b29f2ce43d6d5c2cf7d0a0d8dcf7a875a6->enter($__internal_22752871c72ec956421896b11d5ac8b29f2ce43d6d5c2cf7d0a0d8dcf7a875a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 40
        if ((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new Twig_Error_Runtime('Variable "isAdmin" does not exist.', 40, $this->getSourceContext()); })())) {
            // line 41
            echo "                    <li class=\"btn nav-item active\">
                        <a class=\"nav-link\" href=\"/admin\">Admin</a>
                    </li>
                ";
        }
        // line 45
        echo "
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
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "        </div>
    </div>
</div>
</body>
</html>

<script src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_1fb40f89ae13aecfa6fd3330689dff58dfddfbc7cd7db207fbf40c05a2ccefff->leave($__internal_1fb40f89ae13aecfa6fd3330689dff58dfddfbc7cd7db207fbf40c05a2ccefff_prof);

        
        $__internal_22752871c72ec956421896b11d5ac8b29f2ce43d6d5c2cf7d0a0d8dcf7a875a6->leave($__internal_22752871c72ec956421896b11d5ac8b29f2ce43d6d5c2cf7d0a0d8dcf7a875a6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_e577be4acce1af3c80be9702fb6ab77fc0e00bd5c7ace7ecccee483b89846217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e577be4acce1af3c80be9702fb6ab77fc0e00bd5c7ace7ecccee483b89846217->enter($__internal_e577be4acce1af3c80be9702fb6ab77fc0e00bd5c7ace7ecccee483b89846217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c8a9853d38d347107d1ad8e6823bd57f1de1e640e48238b3a417cee6d5089cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8a9853d38d347107d1ad8e6823bd57f1de1e640e48238b3a417cee6d5089cd->enter($__internal_2c8a9853d38d347107d1ad8e6823bd57f1de1e640e48238b3a417cee6d5089cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2c8a9853d38d347107d1ad8e6823bd57f1de1e640e48238b3a417cee6d5089cd->leave($__internal_2c8a9853d38d347107d1ad8e6823bd57f1de1e640e48238b3a417cee6d5089cd_prof);

        
        $__internal_e577be4acce1af3c80be9702fb6ab77fc0e00bd5c7ace7ecccee483b89846217->leave($__internal_e577be4acce1af3c80be9702fb6ab77fc0e00bd5c7ace7ecccee483b89846217_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fe1f179120cde93317d20473c5797ed1980a22935c7b17f245d3a371d2c1170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe1f179120cde93317d20473c5797ed1980a22935c7b17f245d3a371d2c1170->enter($__internal_2fe1f179120cde93317d20473c5797ed1980a22935c7b17f245d3a371d2c1170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d07de556af3d3ec8694750258837323bf4d87938f572e3510a39dac3dc80efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d07de556af3d3ec8694750258837323bf4d87938f572e3510a39dac3dc80efd->enter($__internal_2d07de556af3d3ec8694750258837323bf4d87938f572e3510a39dac3dc80efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d07de556af3d3ec8694750258837323bf4d87938f572e3510a39dac3dc80efd->leave($__internal_2d07de556af3d3ec8694750258837323bf4d87938f572e3510a39dac3dc80efd_prof);

        
        $__internal_2fe1f179120cde93317d20473c5797ed1980a22935c7b17f245d3a371d2c1170->leave($__internal_2fe1f179120cde93317d20473c5797ed1980a22935c7b17f245d3a371d2c1170_prof);

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
        return array (  133 => 60,  116 => 11,  98 => 61,  96 => 60,  79 => 45,  73 => 41,  71 => 40,  39 => 11,  27 => 1,);
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

<script src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
", "base.html.twig", "/home/teiva/Documents/Cours/Papon/modelManager/templates/base.html.twig");
    }
}
