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
        $__internal_8668ed8db036727580e6b10519deed478bf7e4f0cbad64c173fe43ce772f8367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8668ed8db036727580e6b10519deed478bf7e4f0cbad64c173fe43ce772f8367->enter($__internal_8668ed8db036727580e6b10519deed478bf7e4f0cbad64c173fe43ce772f8367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $__internal_588e24fa62c48a2e3f171295554404afbc5318c3cb9015d0512b1802a132c5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588e24fa62c48a2e3f171295554404afbc5318c3cb9015d0512b1802a132c5d9->enter($__internal_588e24fa62c48a2e3f171295554404afbc5318c3cb9015d0512b1802a132c5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/model_list.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8668ed8db036727580e6b10519deed478bf7e4f0cbad64c173fe43ce772f8367->leave($__internal_8668ed8db036727580e6b10519deed478bf7e4f0cbad64c173fe43ce772f8367_prof);

        
        $__internal_588e24fa62c48a2e3f171295554404afbc5318c3cb9015d0512b1802a132c5d9->leave($__internal_588e24fa62c48a2e3f171295554404afbc5318c3cb9015d0512b1802a132c5d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f238b2b6bed578f8579765f58623260ed430752acb2c26d280ab3456e6b57e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f238b2b6bed578f8579765f58623260ed430752acb2c26d280ab3456e6b57e0->enter($__internal_0f238b2b6bed578f8579765f58623260ed430752acb2c26d280ab3456e6b57e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd0e032fb2e50f62471db251235ee79522a34a9aa1da88a9e109993b8d07ab7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0e032fb2e50f62471db251235ee79522a34a9aa1da88a9e109993b8d07ab7f->enter($__internal_bd0e032fb2e50f62471db251235ee79522a34a9aa1da88a9e109993b8d07ab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_bd0e032fb2e50f62471db251235ee79522a34a9aa1da88a9e109993b8d07ab7f->leave($__internal_bd0e032fb2e50f62471db251235ee79522a34a9aa1da88a9e109993b8d07ab7f_prof);

        
        $__internal_0f238b2b6bed578f8579765f58623260ed430752acb2c26d280ab3456e6b57e0->leave($__internal_0f238b2b6bed578f8579765f58623260ed430752acb2c26d280ab3456e6b57e0_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_18c4c0e3e254a145dc675776fc6d8498fcdc471f02177c220ee304ec9c475748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c4c0e3e254a145dc675776fc6d8498fcdc471f02177c220ee304ec9c475748->enter($__internal_18c4c0e3e254a145dc675776fc6d8498fcdc471f02177c220ee304ec9c475748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_67b86e6c7e79bc6db5ca56479f5497632cf89d5d94358f196c8abb0631f58877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b86e6c7e79bc6db5ca56479f5497632cf89d5d94358f196c8abb0631f58877->enter($__internal_67b86e6c7e79bc6db5ca56479f5497632cf89d5d94358f196c8abb0631f58877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_67b86e6c7e79bc6db5ca56479f5497632cf89d5d94358f196c8abb0631f58877->leave($__internal_67b86e6c7e79bc6db5ca56479f5497632cf89d5d94358f196c8abb0631f58877_prof);

        
        $__internal_18c4c0e3e254a145dc675776fc6d8498fcdc471f02177c220ee304ec9c475748->leave($__internal_18c4c0e3e254a145dc675776fc6d8498fcdc471f02177c220ee304ec9c475748_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff06631a438e633d08d659e51fa62d1acabb811ff1cc6c3804d53970c95372b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff06631a438e633d08d659e51fa62d1acabb811ff1cc6c3804d53970c95372b7->enter($__internal_ff06631a438e633d08d659e51fa62d1acabb811ff1cc6c3804d53970c95372b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9931211320dcb32f6512c67dbfb468c6bf9956c6d63ceffd2cb20f22dd29e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9931211320dcb32f6512c67dbfb468c6bf9956c6d63ceffd2cb20f22dd29e8e->enter($__internal_a9931211320dcb32f6512c67dbfb468c6bf9956c6d63ceffd2cb20f22dd29e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a9931211320dcb32f6512c67dbfb468c6bf9956c6d63ceffd2cb20f22dd29e8e->leave($__internal_a9931211320dcb32f6512c67dbfb468c6bf9956c6d63ceffd2cb20f22dd29e8e_prof);

        
        $__internal_ff06631a438e633d08d659e51fa62d1acabb811ff1cc6c3804d53970c95372b7->leave($__internal_ff06631a438e633d08d659e51fa62d1acabb811ff1cc6c3804d53970c95372b7_prof);

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
        return array (  145 => 42,  135 => 38,  131 => 37,  127 => 36,  124 => 35,  120 => 34,  108 => 24,  99 => 23,  84 => 16,  78 => 12,  76 => 11,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
