<?php

/* view/base.html.twig */
class __TwigTemplate_07e87b87c4d8c7829765dd885e0dd6e9ef374b1f16d09f1b7cca0b9af200108e extends Twig_Template
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
        $__internal_86975b548f80de877d923ccbda102e551b1ba359d457608575ca5a9b35b35b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86975b548f80de877d923ccbda102e551b1ba359d457608575ca5a9b35b35b14->enter($__internal_86975b548f80de877d923ccbda102e551b1ba359d457608575ca5a9b35b35b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "view/base.html.twig"));

        $__internal_0eaf76d576f8df22612bd6d98c1abe25e6f1ac72683ee45c9adcc2c7bfc29f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eaf76d576f8df22612bd6d98c1abe25e6f1ac72683ee45c9adcc2c7bfc29f15->enter($__internal_0eaf76d576f8df22612bd6d98c1abe25e6f1ac72683ee45c9adcc2c7bfc29f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "view/base.html.twig"));

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
        
        $__internal_86975b548f80de877d923ccbda102e551b1ba359d457608575ca5a9b35b35b14->leave($__internal_86975b548f80de877d923ccbda102e551b1ba359d457608575ca5a9b35b35b14_prof);

        
        $__internal_0eaf76d576f8df22612bd6d98c1abe25e6f1ac72683ee45c9adcc2c7bfc29f15->leave($__internal_0eaf76d576f8df22612bd6d98c1abe25e6f1ac72683ee45c9adcc2c7bfc29f15_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d9565ca9220534d36f6c1d207af9acf1ce190898b5d9fe25a2a5dee96079c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9565ca9220534d36f6c1d207af9acf1ce190898b5d9fe25a2a5dee96079c71->enter($__internal_5d9565ca9220534d36f6c1d207af9acf1ce190898b5d9fe25a2a5dee96079c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85c7aba79523474e0ef9565947fa9a2680ccae398e7c60ad4660a74c2a5052fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c7aba79523474e0ef9565947fa9a2680ccae398e7c60ad4660a74c2a5052fd->enter($__internal_85c7aba79523474e0ef9565947fa9a2680ccae398e7c60ad4660a74c2a5052fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_85c7aba79523474e0ef9565947fa9a2680ccae398e7c60ad4660a74c2a5052fd->leave($__internal_85c7aba79523474e0ef9565947fa9a2680ccae398e7c60ad4660a74c2a5052fd_prof);

        
        $__internal_5d9565ca9220534d36f6c1d207af9acf1ce190898b5d9fe25a2a5dee96079c71->leave($__internal_5d9565ca9220534d36f6c1d207af9acf1ce190898b5d9fe25a2a5dee96079c71_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_25f52fdcc43e860eda63be5d219ebb51b815823adfeb537498efb9a06666f2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f52fdcc43e860eda63be5d219ebb51b815823adfeb537498efb9a06666f2cc->enter($__internal_25f52fdcc43e860eda63be5d219ebb51b815823adfeb537498efb9a06666f2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ca3644a612ff94742c48ca656eca6b1592f71a4d9a06344ef3af5ee2327e1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca3644a612ff94742c48ca656eca6b1592f71a4d9a06344ef3af5ee2327e1bd->enter($__internal_5ca3644a612ff94742c48ca656eca6b1592f71a4d9a06344ef3af5ee2327e1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5ca3644a612ff94742c48ca656eca6b1592f71a4d9a06344ef3af5ee2327e1bd->leave($__internal_5ca3644a612ff94742c48ca656eca6b1592f71a4d9a06344ef3af5ee2327e1bd_prof);

        
        $__internal_25f52fdcc43e860eda63be5d219ebb51b815823adfeb537498efb9a06666f2cc->leave($__internal_25f52fdcc43e860eda63be5d219ebb51b815823adfeb537498efb9a06666f2cc_prof);

    }

    public function getTemplateName()
    {
        return "view/base.html.twig";
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
", "view/base.html.twig", "/home/teiva/Documents/Projet-Papon/modelManager/templates/view/base.html.twig");
    }
}
