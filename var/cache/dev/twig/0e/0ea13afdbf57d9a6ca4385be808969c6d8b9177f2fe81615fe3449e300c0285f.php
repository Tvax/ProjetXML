<?php

/* default/model_list.php.twig */
class __TwigTemplate_dde20adb81c8ce3a70fdc24562a0e941cab8d80621178188cdae45c9f47ea169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/model_list.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_997d298d45bf20b561d7ad6ebb989228d1b8dd54c0a9a707b0ac51289fd4b060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997d298d45bf20b561d7ad6ebb989228d1b8dd54c0a9a707b0ac51289fd4b060->enter($__internal_997d298d45bf20b561d7ad6ebb989228d1b8dd54c0a9a707b0ac51289fd4b060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $__internal_7b16a30b47878d38624db77363b223244f6bea0a6fc22e9ab80ae90242fd051e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b16a30b47878d38624db77363b223244f6bea0a6fc22e9ab80ae90242fd051e->enter($__internal_7b16a30b47878d38624db77363b223244f6bea0a6fc22e9ab80ae90242fd051e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_997d298d45bf20b561d7ad6ebb989228d1b8dd54c0a9a707b0ac51289fd4b060->leave($__internal_997d298d45bf20b561d7ad6ebb989228d1b8dd54c0a9a707b0ac51289fd4b060_prof);

        
        $__internal_7b16a30b47878d38624db77363b223244f6bea0a6fc22e9ab80ae90242fd051e->leave($__internal_7b16a30b47878d38624db77363b223244f6bea0a6fc22e9ab80ae90242fd051e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c3989440e2c6d1097f0ee79105a4def0d75b4d82bdef5ec3a0929b8f78442eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3989440e2c6d1097f0ee79105a4def0d75b4d82bdef5ec3a0929b8f78442eb->enter($__internal_8c3989440e2c6d1097f0ee79105a4def0d75b4d82bdef5ec3a0929b8f78442eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc02210fde50cc5e92c0c8f6d1484da46b2c0f052d1d162031906e054d8982f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc02210fde50cc5e92c0c8f6d1484da46b2c0f052d1d162031906e054d8982f8->enter($__internal_dc02210fde50cc5e92c0c8f6d1484da46b2c0f052d1d162031906e054d8982f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_dc02210fde50cc5e92c0c8f6d1484da46b2c0f052d1d162031906e054d8982f8->leave($__internal_dc02210fde50cc5e92c0c8f6d1484da46b2c0f052d1d162031906e054d8982f8_prof);

        
        $__internal_8c3989440e2c6d1097f0ee79105a4def0d75b4d82bdef5ec3a0929b8f78442eb->leave($__internal_8c3989440e2c6d1097f0ee79105a4def0d75b4d82bdef5ec3a0929b8f78442eb_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_5080176aeb43367c0798c1d60d5dbd564fa698aa0b7bb50cff5ef3cd935288e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5080176aeb43367c0798c1d60d5dbd564fa698aa0b7bb50cff5ef3cd935288e5->enter($__internal_5080176aeb43367c0798c1d60d5dbd564fa698aa0b7bb50cff5ef3cd935288e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5844f341d39d4e545c6a4f02d560f01e677b8f0758245a787f543a316734026c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5844f341d39d4e545c6a4f02d560f01e677b8f0758245a787f543a316734026c->enter($__internal_5844f341d39d4e545c6a4f02d560f01e677b8f0758245a787f543a316734026c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    <div class=\"col-sm-12\">
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "                <tr>
                    <th scope=\"row\">";
            // line 37
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>
                    <td>Model ";
            // line 38
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                    <td>v.";
            // line 39
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                    <td><a href=\"#\" class=\"btn btn-info\">View</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_5844f341d39d4e545c6a4f02d560f01e677b8f0758245a787f543a316734026c->leave($__internal_5844f341d39d4e545c6a4f02d560f01e677b8f0758245a787f543a316734026c_prof);

        
        $__internal_5080176aeb43367c0798c1d60d5dbd564fa698aa0b7bb50cff5ef3cd935288e5->leave($__internal_5080176aeb43367c0798c1d60d5dbd564fa698aa0b7bb50cff5ef3cd935288e5_prof);

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
        return array (  106 => 43,  96 => 39,  92 => 38,  88 => 37,  85 => 36,  81 => 35,  68 => 24,  59 => 23,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{#{% block navbar %}#}

    {#<li class=\"btn nav-item active\">#}
        {#<a class=\"nav-link\" href=\"/validate\">Validate</a>#}
    {#</li>#}

    {#{% if isAdmin %}#}
        {#<li class=\"btn nav-item active\">#}
            {#<a class=\"nav-link\" href=\"/admin\">Admin</a>#}
        {#</li>#}
    {#{% endif %}#}

    {#<li class=\"btn nav-item btn-danger active\">#}
        {#<a class=\"nav-link\" href=\"/?disconnect=true\">Disconnect</a>#}
    {#</li>#}

{#{% endblock %}#}

{% block body %}
    <div class=\"col-sm-12\">
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
{% endblock %}


    {#{% set array =#}
        {#{#}
            {#0:{'name':'Home','link':\"#\"},#}
            {#1:{'name':'Validate','link':\"#\"}#}
        {#}#}
    {#%}#}

    {#{% set i = 0 %}#}

    {#{% for item in array %}#}
        {#{% if i == page_number %}#}
            {#<li class=\"btn nav-item active\">#}
        {#{% else %}#}
            {#<li class=\"btn nav-item\">#}
        {#{% endif %}#}

        {#<a class=\"nav-link\" href=\"{{ item.link }}\">{{ item.name }}</a>#}
        {#</li>#}

        {#{% set i = i +1 %}#}
    {#{% endfor %}#}


", "default/model_list.php.twig", "/home/teiva/Documents/ProjetXML/templates/default/model_list.php.twig");
    }
}
