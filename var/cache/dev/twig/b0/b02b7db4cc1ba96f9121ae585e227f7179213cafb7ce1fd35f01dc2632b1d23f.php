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
        $__internal_b7fca6bd2af0a134ebd03621dfa55c4f070bc113518b49fdfb44e8309ee96598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fca6bd2af0a134ebd03621dfa55c4f070bc113518b49fdfb44e8309ee96598->enter($__internal_b7fca6bd2af0a134ebd03621dfa55c4f070bc113518b49fdfb44e8309ee96598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_248fd2f851dfb8162208315529627cc33d4e4155e059772ec6bf72e3fc4614c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248fd2f851dfb8162208315529627cc33d4e4155e059772ec6bf72e3fc4614c8->enter($__internal_248fd2f851dfb8162208315529627cc33d4e4155e059772ec6bf72e3fc4614c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b7fca6bd2af0a134ebd03621dfa55c4f070bc113518b49fdfb44e8309ee96598->leave($__internal_b7fca6bd2af0a134ebd03621dfa55c4f070bc113518b49fdfb44e8309ee96598_prof);

        
        $__internal_248fd2f851dfb8162208315529627cc33d4e4155e059772ec6bf72e3fc4614c8->leave($__internal_248fd2f851dfb8162208315529627cc33d4e4155e059772ec6bf72e3fc4614c8_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_80755c21010f278931657799a748728f992780ac802b388f2650a7f5b49d2043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80755c21010f278931657799a748728f992780ac802b388f2650a7f5b49d2043->enter($__internal_80755c21010f278931657799a748728f992780ac802b388f2650a7f5b49d2043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7326bb2f82440d71250cb35795e4c1ea70b5a4b791e438cf812bf50947f0afb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7326bb2f82440d71250cb35795e4c1ea70b5a4b791e438cf812bf50947f0afb4->enter($__internal_7326bb2f82440d71250cb35795e4c1ea70b5a4b791e438cf812bf50947f0afb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7326bb2f82440d71250cb35795e4c1ea70b5a4b791e438cf812bf50947f0afb4->leave($__internal_7326bb2f82440d71250cb35795e4c1ea70b5a4b791e438cf812bf50947f0afb4_prof);

        
        $__internal_80755c21010f278931657799a748728f992780ac802b388f2650a7f5b49d2043->leave($__internal_80755c21010f278931657799a748728f992780ac802b388f2650a7f5b49d2043_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1771070b9fb2e57aa36819b349e515e7732cd8bae370f1d4e3140099c199054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1771070b9fb2e57aa36819b349e515e7732cd8bae370f1d4e3140099c199054->enter($__internal_a1771070b9fb2e57aa36819b349e515e7732cd8bae370f1d4e3140099c199054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8217de7c6840419c0a1267476b31f984f0ba11cd67cadd0ce8b522ba7cf5cf7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8217de7c6840419c0a1267476b31f984f0ba11cd67cadd0ce8b522ba7cf5cf7f->enter($__internal_8217de7c6840419c0a1267476b31f984f0ba11cd67cadd0ce8b522ba7cf5cf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8217de7c6840419c0a1267476b31f984f0ba11cd67cadd0ce8b522ba7cf5cf7f->leave($__internal_8217de7c6840419c0a1267476b31f984f0ba11cd67cadd0ce8b522ba7cf5cf7f_prof);

        
        $__internal_a1771070b9fb2e57aa36819b349e515e7732cd8bae370f1d4e3140099c199054->leave($__internal_a1771070b9fb2e57aa36819b349e515e7732cd8bae370f1d4e3140099c199054_prof);

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
