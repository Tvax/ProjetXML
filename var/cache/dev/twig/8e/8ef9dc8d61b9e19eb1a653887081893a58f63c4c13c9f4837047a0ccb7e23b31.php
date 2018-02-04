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
        $__internal_1ed0d6bd053fe7ff95d2bab3beb491f6605062d89196852c6ca58d81f6e8a1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed0d6bd053fe7ff95d2bab3beb491f6605062d89196852c6ca58d81f6e8a1af->enter($__internal_1ed0d6bd053fe7ff95d2bab3beb491f6605062d89196852c6ca58d81f6e8a1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $__internal_5042c3a744a6a34ec2651e44403d30951ed284be42fb1b0335994515f178fa98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5042c3a744a6a34ec2651e44403d30951ed284be42fb1b0335994515f178fa98->enter($__internal_5042c3a744a6a34ec2651e44403d30951ed284be42fb1b0335994515f178fa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed0d6bd053fe7ff95d2bab3beb491f6605062d89196852c6ca58d81f6e8a1af->leave($__internal_1ed0d6bd053fe7ff95d2bab3beb491f6605062d89196852c6ca58d81f6e8a1af_prof);

        
        $__internal_5042c3a744a6a34ec2651e44403d30951ed284be42fb1b0335994515f178fa98->leave($__internal_5042c3a744a6a34ec2651e44403d30951ed284be42fb1b0335994515f178fa98_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f6e9181bd5da470278a9642d85b7dccd30f80904685c927e6c4aba022ee34f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6e9181bd5da470278a9642d85b7dccd30f80904685c927e6c4aba022ee34f1->enter($__internal_9f6e9181bd5da470278a9642d85b7dccd30f80904685c927e6c4aba022ee34f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1203ca61f1bf141e073d919d0182cbca133af7964f569b5b455a06b8c2769b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1203ca61f1bf141e073d919d0182cbca133af7964f569b5b455a06b8c2769b48->enter($__internal_1203ca61f1bf141e073d919d0182cbca133af7964f569b5b455a06b8c2769b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_1203ca61f1bf141e073d919d0182cbca133af7964f569b5b455a06b8c2769b48->leave($__internal_1203ca61f1bf141e073d919d0182cbca133af7964f569b5b455a06b8c2769b48_prof);

        
        $__internal_9f6e9181bd5da470278a9642d85b7dccd30f80904685c927e6c4aba022ee34f1->leave($__internal_9f6e9181bd5da470278a9642d85b7dccd30f80904685c927e6c4aba022ee34f1_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_c7ac539d80b010da535c1fe3f6bf5ee18dc3edbec4744b04b5a0b0714a9a234e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ac539d80b010da535c1fe3f6bf5ee18dc3edbec4744b04b5a0b0714a9a234e->enter($__internal_c7ac539d80b010da535c1fe3f6bf5ee18dc3edbec4744b04b5a0b0714a9a234e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_7d7d7fe43a2660c972bc72e54ea0b94fc3dc1efb26eae3e1a5592ef174daf192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7d7fe43a2660c972bc72e54ea0b94fc3dc1efb26eae3e1a5592ef174daf192->enter($__internal_7d7d7fe43a2660c972bc72e54ea0b94fc3dc1efb26eae3e1a5592ef174daf192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        <a class=\"nav-link\" href=\"/?disconnect=true\">Disconnect</a>
    </li>

";
        
        $__internal_7d7d7fe43a2660c972bc72e54ea0b94fc3dc1efb26eae3e1a5592ef174daf192->leave($__internal_7d7d7fe43a2660c972bc72e54ea0b94fc3dc1efb26eae3e1a5592ef174daf192_prof);

        
        $__internal_c7ac539d80b010da535c1fe3f6bf5ee18dc3edbec4744b04b5a0b0714a9a234e->leave($__internal_c7ac539d80b010da535c1fe3f6bf5ee18dc3edbec4744b04b5a0b0714a9a234e_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa5927f40814aa4cefe16b6b48f3494d0275bf4c9611f52f997b5b78e05ecaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5927f40814aa4cefe16b6b48f3494d0275bf4c9611f52f997b5b78e05ecaa4->enter($__internal_aa5927f40814aa4cefe16b6b48f3494d0275bf4c9611f52f997b5b78e05ecaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a7d78dced4ecfb7f3f990017fbd63adb8e07602dcb347f59ebf5922c754dbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7d78dced4ecfb7f3f990017fbd63adb8e07602dcb347f59ebf5922c754dbdf->enter($__internal_5a7d78dced4ecfb7f3f990017fbd63adb8e07602dcb347f59ebf5922c754dbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5a7d78dced4ecfb7f3f990017fbd63adb8e07602dcb347f59ebf5922c754dbdf->leave($__internal_5a7d78dced4ecfb7f3f990017fbd63adb8e07602dcb347f59ebf5922c754dbdf_prof);

        
        $__internal_aa5927f40814aa4cefe16b6b48f3494d0275bf4c9611f52f997b5b78e05ecaa4->leave($__internal_aa5927f40814aa4cefe16b6b48f3494d0275bf4c9611f52f997b5b78e05ecaa4_prof);

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
        <a class=\"nav-link\" href=\"/?disconnect=true\">Disconnect</a>
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
