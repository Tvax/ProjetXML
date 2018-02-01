<?php

/* default/model_list.php.twig */
class __TwigTemplate_f43cabc86e47290b8f3e71273ddef53f65b384d0b10ff450638cb9fc07b51952 extends Twig_Template
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
        $__internal_2ce69ee70ccb528f127b829006e5db733df5ad96af75b5b8c65d7ac098f0941a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce69ee70ccb528f127b829006e5db733df5ad96af75b5b8c65d7ac098f0941a->enter($__internal_2ce69ee70ccb528f127b829006e5db733df5ad96af75b5b8c65d7ac098f0941a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $__internal_1ad0937c56224140e21dd71fead18c947526d6e82905a8ff1661894682829caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad0937c56224140e21dd71fead18c947526d6e82905a8ff1661894682829caf->enter($__internal_1ad0937c56224140e21dd71fead18c947526d6e82905a8ff1661894682829caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce69ee70ccb528f127b829006e5db733df5ad96af75b5b8c65d7ac098f0941a->leave($__internal_2ce69ee70ccb528f127b829006e5db733df5ad96af75b5b8c65d7ac098f0941a_prof);

        
        $__internal_1ad0937c56224140e21dd71fead18c947526d6e82905a8ff1661894682829caf->leave($__internal_1ad0937c56224140e21dd71fead18c947526d6e82905a8ff1661894682829caf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_075b43e0792c137cf36d0822d6b97832d63c8e323d7bfe34e346db3b72bd9022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075b43e0792c137cf36d0822d6b97832d63c8e323d7bfe34e346db3b72bd9022->enter($__internal_075b43e0792c137cf36d0822d6b97832d63c8e323d7bfe34e346db3b72bd9022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e81b6819d1296e1dcb08e170136a0551f15bf65bbfe4fe7642a9b185831897c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e81b6819d1296e1dcb08e170136a0551f15bf65bbfe4fe7642a9b185831897c->enter($__internal_2e81b6819d1296e1dcb08e170136a0551f15bf65bbfe4fe7642a9b185831897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_2e81b6819d1296e1dcb08e170136a0551f15bf65bbfe4fe7642a9b185831897c->leave($__internal_2e81b6819d1296e1dcb08e170136a0551f15bf65bbfe4fe7642a9b185831897c_prof);

        
        $__internal_075b43e0792c137cf36d0822d6b97832d63c8e323d7bfe34e346db3b72bd9022->leave($__internal_075b43e0792c137cf36d0822d6b97832d63c8e323d7bfe34e346db3b72bd9022_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_45dff2173372d1f4ef994aa81a0b3304cd1234fb0543bdbd19279519cc834965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dff2173372d1f4ef994aa81a0b3304cd1234fb0543bdbd19279519cc834965->enter($__internal_45dff2173372d1f4ef994aa81a0b3304cd1234fb0543bdbd19279519cc834965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_5c550490dc567b75b89e73d1fa1a616c36002ccbf11a21ea4c09d7391b26a544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c550490dc567b75b89e73d1fa1a616c36002ccbf11a21ea4c09d7391b26a544->enter($__internal_5c550490dc567b75b89e73d1fa1a616c36002ccbf11a21ea4c09d7391b26a544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        echo "
    <li class=\"btn nav-item active\">
        <a class=\"nav-link\" href=\"/validate\">Validate</a>
    </li>

    ";
        // line 11
        if ((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new Twig_Error_Runtime('Variable "isAdmin" does not exist.', 11, $this->getSourceContext()); })())) {
            // line 12
            echo "        <li class=\"btn nav-item active\">
            <a class=\"nav-link\" href=\"/admin\">Admin</a>
        </li>
    ";
        }
        // line 16
        echo "
    <li class=\"btn nav-item btn-danger active\">
        <a class=\"nav-link\" href=\"#\">Disconnect</a>
    </li>

";
        
        $__internal_5c550490dc567b75b89e73d1fa1a616c36002ccbf11a21ea4c09d7391b26a544->leave($__internal_5c550490dc567b75b89e73d1fa1a616c36002ccbf11a21ea4c09d7391b26a544_prof);

        
        $__internal_45dff2173372d1f4ef994aa81a0b3304cd1234fb0543bdbd19279519cc834965->leave($__internal_45dff2173372d1f4ef994aa81a0b3304cd1234fb0543bdbd19279519cc834965_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_375c927314f819785737f3bb939e35e503da31a122e99522dcdec676f14f6f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375c927314f819785737f3bb939e35e503da31a122e99522dcdec676f14f6f87->enter($__internal_375c927314f819785737f3bb939e35e503da31a122e99522dcdec676f14f6f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ba8fbbc3c3900223c38e79a94e29aa4ad890292fd6b6961c1228835856c9944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba8fbbc3c3900223c38e79a94e29aa4ad890292fd6b6961c1228835856c9944->enter($__internal_0ba8fbbc3c3900223c38e79a94e29aa4ad890292fd6b6961c1228835856c9944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "            <tr>
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
        echo "        </tbody>
    </table>
";
        
        $__internal_0ba8fbbc3c3900223c38e79a94e29aa4ad890292fd6b6961c1228835856c9944->leave($__internal_0ba8fbbc3c3900223c38e79a94e29aa4ad890292fd6b6961c1228835856c9944_prof);

        
        $__internal_375c927314f819785737f3bb939e35e503da31a122e99522dcdec676f14f6f87->leave($__internal_375c927314f819785737f3bb939e35e503da31a122e99522dcdec676f14f6f87_prof);

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
        return array (  146 => 43,  136 => 39,  132 => 38,  128 => 37,  125 => 36,  121 => 35,  108 => 24,  99 => 23,  84 => 16,  78 => 12,  76 => 11,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block navbar %}

    <li class=\"btn nav-item active\">
        <a class=\"nav-link\" href=\"/validate\">Validate</a>
    </li>

    {% if isAdmin %}
        <li class=\"btn nav-item active\">
            <a class=\"nav-link\" href=\"/admin\">Admin</a>
        </li>
    {% endif %}

    <li class=\"btn nav-item btn-danger active\">
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


", "default/model_list.php.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/templates/default/model_list.php.twig");
    }
}
