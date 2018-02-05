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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3848c65adcb59b67c6fc90c2e20bcccbeeba331b962008972df4f2ca11001823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3848c65adcb59b67c6fc90c2e20bcccbeeba331b962008972df4f2ca11001823->enter($__internal_3848c65adcb59b67c6fc90c2e20bcccbeeba331b962008972df4f2ca11001823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.php.twig"));

        $__internal_92a6873b6dc2f8496065a1a7837f77f35c0cdfbebd39d204a07ee6fa6009e2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a6873b6dc2f8496065a1a7837f77f35c0cdfbebd39d204a07ee6fa6009e2e3->enter($__internal_92a6873b6dc2f8496065a1a7837f77f35c0cdfbebd39d204a07ee6fa6009e2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3848c65adcb59b67c6fc90c2e20bcccbeeba331b962008972df4f2ca11001823->leave($__internal_3848c65adcb59b67c6fc90c2e20bcccbeeba331b962008972df4f2ca11001823_prof);

        
        $__internal_92a6873b6dc2f8496065a1a7837f77f35c0cdfbebd39d204a07ee6fa6009e2e3->leave($__internal_92a6873b6dc2f8496065a1a7837f77f35c0cdfbebd39d204a07ee6fa6009e2e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_873987a95b2353a5c1aae0c8aba68957129da6c1773452ddb3b19c2f04a3d193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873987a95b2353a5c1aae0c8aba68957129da6c1773452ddb3b19c2f04a3d193->enter($__internal_873987a95b2353a5c1aae0c8aba68957129da6c1773452ddb3b19c2f04a3d193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a37931d351f73465f0aac0478f1d114e0cc74365960b40e1d7fac3057f930c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a37931d351f73465f0aac0478f1d114e0cc74365960b40e1d7fac3057f930c2->enter($__internal_8a37931d351f73465f0aac0478f1d114e0cc74365960b40e1d7fac3057f930c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_8a37931d351f73465f0aac0478f1d114e0cc74365960b40e1d7fac3057f930c2->leave($__internal_8a37931d351f73465f0aac0478f1d114e0cc74365960b40e1d7fac3057f930c2_prof);

        
        $__internal_873987a95b2353a5c1aae0c8aba68957129da6c1773452ddb3b19c2f04a3d193->leave($__internal_873987a95b2353a5c1aae0c8aba68957129da6c1773452ddb3b19c2f04a3d193_prof);

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
        return array (  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Admin{% endblock %}

{#{% block navbar %}#}
{#<li class=\"btn nav-item active\">#}
    {#<a class=\"nav-link\" href=\"/validate\">Validate</a>#}
{#</li>#}
    {#<li class=\"btn nav-item active\">#}
        {#<a class=\"nav-link\" href=\"/admin\">Admin</a>#}
    {#</li>#}
{#<li class=\"btn nav-item btn-danger active\">#}
    {#<a class=\"nav-link\" href=\"#\">Disconnect</a>#}
{#</li>#}
{#{% endblock %}#}", "admin/admin.php.twig", "/home/teiva/Documents/ProjetXML/templates/admin/admin.php.twig");
    }
}
