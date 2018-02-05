<?php

/* admin/admin.php.twig */
class __TwigTemplate_1e988fd0f14d2fcb36b356e0c580b7decb3f1066ec3e0a772b0c6679aa7f8bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'include' => array($this, 'block_include'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a5c57ff418de679fae9701af56db531abe72231ede57f5401b57da16e79dd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5c57ff418de679fae9701af56db531abe72231ede57f5401b57da16e79dd64->enter($__internal_0a5c57ff418de679fae9701af56db531abe72231ede57f5401b57da16e79dd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.php.twig"));

        $__internal_a9d52b12b76060bde7b8e690be0f78a5270c749d904126d5be0231ed8c731308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d52b12b76060bde7b8e690be0f78a5270c749d904126d5be0231ed8c731308->enter($__internal_a9d52b12b76060bde7b8e690be0f78a5270c749d904126d5be0231ed8c731308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a5c57ff418de679fae9701af56db531abe72231ede57f5401b57da16e79dd64->leave($__internal_0a5c57ff418de679fae9701af56db531abe72231ede57f5401b57da16e79dd64_prof);

        
        $__internal_a9d52b12b76060bde7b8e690be0f78a5270c749d904126d5be0231ed8c731308->leave($__internal_a9d52b12b76060bde7b8e690be0f78a5270c749d904126d5be0231ed8c731308_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_50a3195ce1f1cc54fe2176b8fef3ffc198905bb78d64436ce249cae8c65b8fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a3195ce1f1cc54fe2176b8fef3ffc198905bb78d64436ce249cae8c65b8fcc->enter($__internal_50a3195ce1f1cc54fe2176b8fef3ffc198905bb78d64436ce249cae8c65b8fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e1b07ad3c76709524e2716498e29cf28d6c51b6e63a0d93767e4636409a2d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1b07ad3c76709524e2716498e29cf28d6c51b6e63a0d93767e4636409a2d97->enter($__internal_5e1b07ad3c76709524e2716498e29cf28d6c51b6e63a0d93767e4636409a2d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_5e1b07ad3c76709524e2716498e29cf28d6c51b6e63a0d93767e4636409a2d97->leave($__internal_5e1b07ad3c76709524e2716498e29cf28d6c51b6e63a0d93767e4636409a2d97_prof);

        
        $__internal_50a3195ce1f1cc54fe2176b8fef3ffc198905bb78d64436ce249cae8c65b8fcc->leave($__internal_50a3195ce1f1cc54fe2176b8fef3ffc198905bb78d64436ce249cae8c65b8fcc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d2b603018d00a992b272f5b633a434cbb1898b9e111bce732800d8be7f69b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2b603018d00a992b272f5b633a434cbb1898b9e111bce732800d8be7f69b27->enter($__internal_9d2b603018d00a992b272f5b633a434cbb1898b9e111bce732800d8be7f69b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f7d2074708639e46991d73e53515f200573e68c447f7a5b517d468bd044d14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f7d2074708639e46991d73e53515f200573e68c447f7a5b517d468bd044d14b->enter($__internal_2f7d2074708639e46991d73e53515f200573e68c447f7a5b517d468bd044d14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">

        <div class=\"col-sm-3\">
            <div class=\"btn-group-vertical\">

                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#button1\">Add User
                </button>
                <div class=\"collapse\" id=\"button1\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email address:</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"pwd\">Password:</label>
                            <input type=\"text\" class=\"form-control\" id=\"pwd\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Add User</button>
                    </form>
                </div>

                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#button2\">Delete User
                </button>
                <div class=\"collapse\" id=\"button2\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email address:</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Delete User</button>
                    </form>
                </div>

                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#button3\">Add Template
                </button>
                <div class=\"collapse\" id=\"button3\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email address:</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"email\">XSD:</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Add XSD to User</button>
                    </form>

                </div>
            </div>
        </div>

        <div class=\"col-sm-9\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Model</th>
                    <th>Version</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 72
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 73
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>
                        <td>Model ";
            // line 74
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                        <td>v.";
            // line 75
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                        <td><a href=\"#\" class=\"btn btn-info\">View</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_2f7d2074708639e46991d73e53515f200573e68c447f7a5b517d468bd044d14b->leave($__internal_2f7d2074708639e46991d73e53515f200573e68c447f7a5b517d468bd044d14b_prof);

        
        $__internal_9d2b603018d00a992b272f5b633a434cbb1898b9e111bce732800d8be7f69b27->leave($__internal_9d2b603018d00a992b272f5b633a434cbb1898b9e111bce732800d8be7f69b27_prof);

    }

    // line 85
    public function block_include($context, array $blocks = array())
    {
        $__internal_36180099ec4d450e29b8fff0c4512d658ce9d6888775ce5ae29643e3f200efa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36180099ec4d450e29b8fff0c4512d658ce9d6888775ce5ae29643e3f200efa3->enter($__internal_36180099ec4d450e29b8fff0c4512d658ce9d6888775ce5ae29643e3f200efa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        $__internal_a7f7a202e68e705138e5e5978fc6b30510fee63f95c681d2d1be2b17e4a69ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f7a202e68e705138e5e5978fc6b30510fee63f95c681d2d1be2b17e4a69ce5->enter($__internal_a7f7a202e68e705138e5e5978fc6b30510fee63f95c681d2d1be2b17e4a69ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "include"));

        // line 86
        echo "    <script src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\"
            integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\"
            crossorigin=\"anonymous\"></script>
";
        
        $__internal_a7f7a202e68e705138e5e5978fc6b30510fee63f95c681d2d1be2b17e4a69ce5->leave($__internal_a7f7a202e68e705138e5e5978fc6b30510fee63f95c681d2d1be2b17e4a69ce5_prof);

        
        $__internal_36180099ec4d450e29b8fff0c4512d658ce9d6888775ce5ae29643e3f200efa3->leave($__internal_36180099ec4d450e29b8fff0c4512d658ce9d6888775ce5ae29643e3f200efa3_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 86,  175 => 85,  161 => 79,  151 => 75,  147 => 74,  143 => 73,  140 => 72,  136 => 71,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}
    <div class=\"row\">

        <div class=\"col-sm-3\">
            <div class=\"btn-group-vertical\">

                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#button1\">Add User
                </button>
                <div class=\"collapse\" id=\"button1\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email address:</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"pwd\">Password:</label>
                            <input type=\"text\" class=\"form-control\" id=\"pwd\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Add User</button>
                    </form>
                </div>

                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#button2\">Delete User
                </button>
                <div class=\"collapse\" id=\"button2\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email address:</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Delete User</button>
                    </form>
                </div>

                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#button3\">Add Template
                </button>
                <div class=\"collapse\" id=\"button3\">
                    <form action=\"#\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email address:</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\">
                        </div>

                        <div class=\"form-group\">
                            <label for=\"email\">XSD:</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Add XSD to User</button>
                    </form>

                </div>
            </div>
        </div>

        <div class=\"col-sm-9\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Model</th>
                    <th>Version</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {% for i in 1..5 %}
                    <tr>
                        <th scope=\"row\">{{ i }}</th>
                        <td>Model {{ i }}</td>
                        <td>v.{{ i }}</td>
                        <td><a href=\"#\" class=\"btn btn-info\">View</a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}

{% block include %}
    <script src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\"
            integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\"
            crossorigin=\"anonymous\"></script>
{% endblock %}", "admin/admin.php.twig", "/home/teiva/Documents/ProjetXML/templates/admin/admin.php.twig");
    }
}
