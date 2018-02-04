<?php

/* default/model_list.php.twig */
class __TwigTemplate_cb450612d72846b734e026e0e65bef81fa835ebb2666218b803dd5b9f2d5deb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/model_list.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf12f8d3a28f0f118979219084c4998b14b0658c66965bb3710ee5795164ae48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf12f8d3a28f0f118979219084c4998b14b0658c66965bb3710ee5795164ae48->enter($__internal_bf12f8d3a28f0f118979219084c4998b14b0658c66965bb3710ee5795164ae48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $__internal_3254106d8669c749a493e081ab3d0d7daeeb197492be89c29a02b8736330955d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3254106d8669c749a493e081ab3d0d7daeeb197492be89c29a02b8736330955d->enter($__internal_3254106d8669c749a493e081ab3d0d7daeeb197492be89c29a02b8736330955d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf12f8d3a28f0f118979219084c4998b14b0658c66965bb3710ee5795164ae48->leave($__internal_bf12f8d3a28f0f118979219084c4998b14b0658c66965bb3710ee5795164ae48_prof);

        
        $__internal_3254106d8669c749a493e081ab3d0d7daeeb197492be89c29a02b8736330955d->leave($__internal_3254106d8669c749a493e081ab3d0d7daeeb197492be89c29a02b8736330955d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5522305691984425b97bee88774d1344034b285831b00230db4fce0c3da9eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5522305691984425b97bee88774d1344034b285831b00230db4fce0c3da9eca->enter($__internal_d5522305691984425b97bee88774d1344034b285831b00230db4fce0c3da9eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf446b7580c44727c67b8284e2d2d40a926ca3ecdb5707b788c8b50a75641cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf446b7580c44727c67b8284e2d2d40a926ca3ecdb5707b788c8b50a75641cf5->enter($__internal_cf446b7580c44727c67b8284e2d2d40a926ca3ecdb5707b788c8b50a75641cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_cf446b7580c44727c67b8284e2d2d40a926ca3ecdb5707b788c8b50a75641cf5->leave($__internal_cf446b7580c44727c67b8284e2d2d40a926ca3ecdb5707b788c8b50a75641cf5_prof);

        
        $__internal_d5522305691984425b97bee88774d1344034b285831b00230db4fce0c3da9eca->leave($__internal_d5522305691984425b97bee88774d1344034b285831b00230db4fce0c3da9eca_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_785087d4ad9fbb66adf4862d1bb62bc4ba2f5fff5e3a452da71e1545b2159af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785087d4ad9fbb66adf4862d1bb62bc4ba2f5fff5e3a452da71e1545b2159af8->enter($__internal_785087d4ad9fbb66adf4862d1bb62bc4ba2f5fff5e3a452da71e1545b2159af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_130963428fd2f78f6c29931c4df74ad33d42de94ded4fa2afc606e2ef22b3912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130963428fd2f78f6c29931c4df74ad33d42de94ded4fa2afc606e2ef22b3912->enter($__internal_130963428fd2f78f6c29931c4df74ad33d42de94ded4fa2afc606e2ef22b3912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        echo "
    ";
        // line 7
        $context["array"] = array(0 => array("name" => "Home", "link" => "#"), 1 => array("name" => "Validate", "link" => "#"));
        // line 13
        echo "
    ";
        // line 14
        $context["i"] = 0;
        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new Twig_Error_Runtime('Variable "array" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "        ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 17, $this->getSourceContext()); })()) == (isset($context["page_number"]) || array_key_exists("page_number", $context) ? $context["page_number"] : (function () { throw new Twig_Error_Runtime('Variable "page_number" does not exist.', 17, $this->getSourceContext()); })()))) {
                // line 18
                echo "            <li class=\"btn nav-item active\">
        ";
            } else {
                // line 20
                echo "            <li class=\"btn nav-item\">
        ";
            }
            // line 22
            echo "
        <a class=\"nav-link\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "name", array()), "html", null, true);
            echo "</a>
        </li>

        ";
            // line 26
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 26, $this->getSourceContext()); })()) + 1);
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "

    <li class=\"btn nav-item btn-danger\">
        <a class=\"nav-link\" href=\"#\">Disconnect</a>
    </li>
    
";
        
        $__internal_130963428fd2f78f6c29931c4df74ad33d42de94ded4fa2afc606e2ef22b3912->leave($__internal_130963428fd2f78f6c29931c4df74ad33d42de94ded4fa2afc606e2ef22b3912_prof);

        
        $__internal_785087d4ad9fbb66adf4862d1bb62bc4ba2f5fff5e3a452da71e1545b2159af8->leave($__internal_785087d4ad9fbb66adf4862d1bb62bc4ba2f5fff5e3a452da71e1545b2159af8_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d833f889163bc8e49466d94e1460ddef7acb8dd8486aae6e7a44ee2a7f4e605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d833f889163bc8e49466d94e1460ddef7acb8dd8486aae6e7a44ee2a7f4e605->enter($__internal_1d833f889163bc8e49466d94e1460ddef7acb8dd8486aae6e7a44ee2a7f4e605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7644945df64cbdc26af78c266a22f66c722ed791936feccd29c67a3881a88274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7644945df64cbdc26af78c266a22f66c722ed791936feccd29c67a3881a88274->enter($__internal_7644945df64cbdc26af78c266a22f66c722ed791936feccd29c67a3881a88274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Model</th>
            <th>Last Name</th>
            <th>Version</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 49
            echo "            <tr>
                <th scope=\"row\">";
            // line 50
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>
                <td>Model ";
            // line 51
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                <td>v.";
            // line 52
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                <td><a href=\"#\" class=\"btn btn-info\">View</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>
";
        
        $__internal_7644945df64cbdc26af78c266a22f66c722ed791936feccd29c67a3881a88274->leave($__internal_7644945df64cbdc26af78c266a22f66c722ed791936feccd29c67a3881a88274_prof);

        
        $__internal_1d833f889163bc8e49466d94e1460ddef7acb8dd8486aae6e7a44ee2a7f4e605->leave($__internal_1d833f889163bc8e49466d94e1460ddef7acb8dd8486aae6e7a44ee2a7f4e605_prof);

    }

    public function getTemplateName()
    {
        return "default/model_list.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 56,  169 => 52,  165 => 51,  161 => 50,  158 => 49,  154 => 48,  141 => 37,  132 => 36,  116 => 28,  110 => 27,  108 => 26,  100 => 23,  97 => 22,  93 => 20,  89 => 18,  86 => 17,  82 => 16,  79 => 15,  77 => 14,  74 => 13,  72 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block navbar %}

    {% set array =
        {
            0:{'name':'Home','link':\"#\"},
            1:{'name':'Validate','link':\"#\"}
        }
    %}

    {% set i = 0 %}

    {% for item in array %}
        {% if i == page_number %}
            <li class=\"btn nav-item active\">
        {% else %}
            <li class=\"btn nav-item\">
        {% endif %}

        <a class=\"nav-link\" href=\"{{ item.link }}\">{{ item.name }}</a>
        </li>

        {% set i = i +1 %}
    {% endfor %}


    <li class=\"btn nav-item btn-danger\">
        <a class=\"nav-link\" href=\"#\">Disconnect</a>
    </li>
    
{% endblock %}

{% block body %}
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Model</th>
            <th>Last Name</th>
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
{% endblock %}

", "default/model_list.php.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/templates/default/model_list.php.twig");
    }
}
