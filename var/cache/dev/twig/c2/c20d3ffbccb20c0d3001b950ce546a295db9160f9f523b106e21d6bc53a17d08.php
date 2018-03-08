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
        $__internal_347d84d89b6378001acec7da5e244282509859dd64dbc1dc67f7c85dc11ae4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347d84d89b6378001acec7da5e244282509859dd64dbc1dc67f7c85dc11ae4c2->enter($__internal_347d84d89b6378001acec7da5e244282509859dd64dbc1dc67f7c85dc11ae4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_92b78f52dcd26660f866c3eb0dfa8dfe4d91533a521564bce079dda23efde8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b78f52dcd26660f866c3eb0dfa8dfe4d91533a521564bce079dda23efde8cb->enter($__internal_92b78f52dcd26660f866c3eb0dfa8dfe4d91533a521564bce079dda23efde8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_347d84d89b6378001acec7da5e244282509859dd64dbc1dc67f7c85dc11ae4c2->leave($__internal_347d84d89b6378001acec7da5e244282509859dd64dbc1dc67f7c85dc11ae4c2_prof);

        
        $__internal_92b78f52dcd26660f866c3eb0dfa8dfe4d91533a521564bce079dda23efde8cb->leave($__internal_92b78f52dcd26660f866c3eb0dfa8dfe4d91533a521564bce079dda23efde8cb_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f662ad93aa2a828ed09c7c2a03d3e1159397edb148b77dff09fb920d1d5dfb80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f662ad93aa2a828ed09c7c2a03d3e1159397edb148b77dff09fb920d1d5dfb80->enter($__internal_f662ad93aa2a828ed09c7c2a03d3e1159397edb148b77dff09fb920d1d5dfb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d774c9a3af37aa8fa618cd2433052a83ea8e795944b1d7b2935dbcdf156171f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d774c9a3af37aa8fa618cd2433052a83ea8e795944b1d7b2935dbcdf156171f->enter($__internal_3d774c9a3af37aa8fa618cd2433052a83ea8e795944b1d7b2935dbcdf156171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3d774c9a3af37aa8fa618cd2433052a83ea8e795944b1d7b2935dbcdf156171f->leave($__internal_3d774c9a3af37aa8fa618cd2433052a83ea8e795944b1d7b2935dbcdf156171f_prof);

        
        $__internal_f662ad93aa2a828ed09c7c2a03d3e1159397edb148b77dff09fb920d1d5dfb80->leave($__internal_f662ad93aa2a828ed09c7c2a03d3e1159397edb148b77dff09fb920d1d5dfb80_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c1d728a86e7a4f11ae87487c70a05a1c73eedc54401709b9460aa7bdcc068df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1d728a86e7a4f11ae87487c70a05a1c73eedc54401709b9460aa7bdcc068df->enter($__internal_8c1d728a86e7a4f11ae87487c70a05a1c73eedc54401709b9460aa7bdcc068df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6942bce985e88e237e6418fe76c3a3196e35cd8bacdfc725ec1f7e03f365838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6942bce985e88e237e6418fe76c3a3196e35cd8bacdfc725ec1f7e03f365838->enter($__internal_e6942bce985e88e237e6418fe76c3a3196e35cd8bacdfc725ec1f7e03f365838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e6942bce985e88e237e6418fe76c3a3196e35cd8bacdfc725ec1f7e03f365838->leave($__internal_e6942bce985e88e237e6418fe76c3a3196e35cd8bacdfc725ec1f7e03f365838_prof);

        
        $__internal_8c1d728a86e7a4f11ae87487c70a05a1c73eedc54401709b9460aa7bdcc068df->leave($__internal_8c1d728a86e7a4f11ae87487c70a05a1c73eedc54401709b9460aa7bdcc068df_prof);

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
