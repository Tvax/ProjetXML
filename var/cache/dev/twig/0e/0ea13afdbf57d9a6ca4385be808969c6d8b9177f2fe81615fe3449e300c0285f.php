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
        $__internal_c33351699d19f828e9de852d020e0555c26c03a2a8e3ef0783e80289b983beb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33351699d19f828e9de852d020e0555c26c03a2a8e3ef0783e80289b983beb6->enter($__internal_c33351699d19f828e9de852d020e0555c26c03a2a8e3ef0783e80289b983beb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $__internal_e843df517c68eec05ee0f63d516a21e0b51217f516c2d06124c777e5a8bf889c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e843df517c68eec05ee0f63d516a21e0b51217f516c2d06124c777e5a8bf889c->enter($__internal_e843df517c68eec05ee0f63d516a21e0b51217f516c2d06124c777e5a8bf889c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33351699d19f828e9de852d020e0555c26c03a2a8e3ef0783e80289b983beb6->leave($__internal_c33351699d19f828e9de852d020e0555c26c03a2a8e3ef0783e80289b983beb6_prof);

        
        $__internal_e843df517c68eec05ee0f63d516a21e0b51217f516c2d06124c777e5a8bf889c->leave($__internal_e843df517c68eec05ee0f63d516a21e0b51217f516c2d06124c777e5a8bf889c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b6876e26f1103492b06811f6794d6c8e6fc3dbd68ca32738d0ca50eede8e89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6876e26f1103492b06811f6794d6c8e6fc3dbd68ca32738d0ca50eede8e89a->enter($__internal_1b6876e26f1103492b06811f6794d6c8e6fc3dbd68ca32738d0ca50eede8e89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3bd0ab9f6e29973572411b55632711170837aa78ab76d3d1c90da09ed28825f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd0ab9f6e29973572411b55632711170837aa78ab76d3d1c90da09ed28825f2->enter($__internal_3bd0ab9f6e29973572411b55632711170837aa78ab76d3d1c90da09ed28825f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_3bd0ab9f6e29973572411b55632711170837aa78ab76d3d1c90da09ed28825f2->leave($__internal_3bd0ab9f6e29973572411b55632711170837aa78ab76d3d1c90da09ed28825f2_prof);

        
        $__internal_1b6876e26f1103492b06811f6794d6c8e6fc3dbd68ca32738d0ca50eede8e89a->leave($__internal_1b6876e26f1103492b06811f6794d6c8e6fc3dbd68ca32738d0ca50eede8e89a_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a1d9cf3c3f8ec0b4f47188b7fc69bb1b07f40821c3fdab931a3ecb976e3f0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1d9cf3c3f8ec0b4f47188b7fc69bb1b07f40821c3fdab931a3ecb976e3f0bd->enter($__internal_3a1d9cf3c3f8ec0b4f47188b7fc69bb1b07f40821c3fdab931a3ecb976e3f0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3041f2043d3136f780960fa2a40d73e5ab4557f2e5c21e1d21386fc1a045e495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3041f2043d3136f780960fa2a40d73e5ab4557f2e5c21e1d21386fc1a045e495->enter($__internal_3041f2043d3136f780960fa2a40d73e5ab4557f2e5c21e1d21386fc1a045e495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "    <table class=\"table table-striped\">
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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "            <tr>
                <th scope=\"row\">";
            // line 36
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>
                <td>Model ";
            // line 37
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                <td>v.";
            // line 38
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
                <td><a href=\"#\" class=\"btn btn-info\">View</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
";
        
        $__internal_3041f2043d3136f780960fa2a40d73e5ab4557f2e5c21e1d21386fc1a045e495->leave($__internal_3041f2043d3136f780960fa2a40d73e5ab4557f2e5c21e1d21386fc1a045e495_prof);

        
        $__internal_3a1d9cf3c3f8ec0b4f47188b7fc69bb1b07f40821c3fdab931a3ecb976e3f0bd->leave($__internal_3a1d9cf3c3f8ec0b4f47188b7fc69bb1b07f40821c3fdab931a3ecb976e3f0bd_prof);

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
        return array (  105 => 42,  95 => 38,  91 => 37,  87 => 36,  84 => 35,  80 => 34,  68 => 24,  59 => 23,  41 => 3,  11 => 1,);
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
