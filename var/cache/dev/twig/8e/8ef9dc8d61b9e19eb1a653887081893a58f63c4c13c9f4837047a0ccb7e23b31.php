<?php

/* default/model_list.php.twig */
class __TwigTemplate_6c78c4e60ad9194b8372987bb28fdbc83499383c3f4e68e5ee5c16ce201c1ea7 extends Twig_Template
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
        $__internal_ef4b0c7e208fd12c7b0c09adf1b34846b30331dc43755b86b61d0ed39fbf3331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4b0c7e208fd12c7b0c09adf1b34846b30331dc43755b86b61d0ed39fbf3331->enter($__internal_ef4b0c7e208fd12c7b0c09adf1b34846b30331dc43755b86b61d0ed39fbf3331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $__internal_b1a63457704dfd00b85e669f6a5ba3da59667ec00c8e929e40374faf4430de37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a63457704dfd00b85e669f6a5ba3da59667ec00c8e929e40374faf4430de37->enter($__internal_b1a63457704dfd00b85e669f6a5ba3da59667ec00c8e929e40374faf4430de37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef4b0c7e208fd12c7b0c09adf1b34846b30331dc43755b86b61d0ed39fbf3331->leave($__internal_ef4b0c7e208fd12c7b0c09adf1b34846b30331dc43755b86b61d0ed39fbf3331_prof);

        
        $__internal_b1a63457704dfd00b85e669f6a5ba3da59667ec00c8e929e40374faf4430de37->leave($__internal_b1a63457704dfd00b85e669f6a5ba3da59667ec00c8e929e40374faf4430de37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ed19a422a67ee99fae22efbce085a0c534a94d12fb89aa42134ec382009fec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed19a422a67ee99fae22efbce085a0c534a94d12fb89aa42134ec382009fec8->enter($__internal_9ed19a422a67ee99fae22efbce085a0c534a94d12fb89aa42134ec382009fec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a473e0fb9ae645d40095dafd54c5f13d7004e32c4e02838be375c1884a4250d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a473e0fb9ae645d40095dafd54c5f13d7004e32c4e02838be375c1884a4250d5->enter($__internal_a473e0fb9ae645d40095dafd54c5f13d7004e32c4e02838be375c1884a4250d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_a473e0fb9ae645d40095dafd54c5f13d7004e32c4e02838be375c1884a4250d5->leave($__internal_a473e0fb9ae645d40095dafd54c5f13d7004e32c4e02838be375c1884a4250d5_prof);

        
        $__internal_9ed19a422a67ee99fae22efbce085a0c534a94d12fb89aa42134ec382009fec8->leave($__internal_9ed19a422a67ee99fae22efbce085a0c534a94d12fb89aa42134ec382009fec8_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_2d90e9f9c895e668b6a06263dd5f6418b746420dd7fd89c717412eca4e5046f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d90e9f9c895e668b6a06263dd5f6418b746420dd7fd89c717412eca4e5046f8->enter($__internal_2d90e9f9c895e668b6a06263dd5f6418b746420dd7fd89c717412eca4e5046f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_be7ff09485552b434664b0470dd8b195fa3f1dd39cf2a729f9bd1ac4da0dffd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7ff09485552b434664b0470dd8b195fa3f1dd39cf2a729f9bd1ac4da0dffd7->enter($__internal_be7ff09485552b434664b0470dd8b195fa3f1dd39cf2a729f9bd1ac4da0dffd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_be7ff09485552b434664b0470dd8b195fa3f1dd39cf2a729f9bd1ac4da0dffd7->leave($__internal_be7ff09485552b434664b0470dd8b195fa3f1dd39cf2a729f9bd1ac4da0dffd7_prof);

        
        $__internal_2d90e9f9c895e668b6a06263dd5f6418b746420dd7fd89c717412eca4e5046f8->leave($__internal_2d90e9f9c895e668b6a06263dd5f6418b746420dd7fd89c717412eca4e5046f8_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_12f41001288dd46ae20898267ad92bf4d9d5c57bb5a671f45464c60fe56cef7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f41001288dd46ae20898267ad92bf4d9d5c57bb5a671f45464c60fe56cef7b->enter($__internal_12f41001288dd46ae20898267ad92bf4d9d5c57bb5a671f45464c60fe56cef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b229e20f23d4bb26050c1e30a58fda8b917f6377c3a8efed0375f6866a8424d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b229e20f23d4bb26050c1e30a58fda8b917f6377c3a8efed0375f6866a8424d->enter($__internal_9b229e20f23d4bb26050c1e30a58fda8b917f6377c3a8efed0375f6866a8424d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b229e20f23d4bb26050c1e30a58fda8b917f6377c3a8efed0375f6866a8424d->leave($__internal_9b229e20f23d4bb26050c1e30a58fda8b917f6377c3a8efed0375f6866a8424d_prof);

        
        $__internal_12f41001288dd46ae20898267ad92bf4d9d5c57bb5a671f45464c60fe56cef7b->leave($__internal_12f41001288dd46ae20898267ad92bf4d9d5c57bb5a671f45464c60fe56cef7b_prof);

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
