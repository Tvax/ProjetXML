<?php

/* admin/admin.php.twig */
class __TwigTemplate_820ed377b9ea8f0d9075e5c553ff19c5a995153fca463fdafa1de0146b8c4101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ecd65da2cedc0d093c1197cd674c919575d963364c4e3e4a6de38ee8e382d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecd65da2cedc0d093c1197cd674c919575d963364c4e3e4a6de38ee8e382d99->enter($__internal_1ecd65da2cedc0d093c1197cd674c919575d963364c4e3e4a6de38ee8e382d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.php.twig"));

        $__internal_e707cf36df44bbb44c91ca157a775509b634c10091717ded6bb4acc6affba257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e707cf36df44bbb44c91ca157a775509b634c10091717ded6bb4acc6affba257->enter($__internal_e707cf36df44bbb44c91ca157a775509b634c10091717ded6bb4acc6affba257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ecd65da2cedc0d093c1197cd674c919575d963364c4e3e4a6de38ee8e382d99->leave($__internal_1ecd65da2cedc0d093c1197cd674c919575d963364c4e3e4a6de38ee8e382d99_prof);

        
        $__internal_e707cf36df44bbb44c91ca157a775509b634c10091717ded6bb4acc6affba257->leave($__internal_e707cf36df44bbb44c91ca157a775509b634c10091717ded6bb4acc6affba257_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc447d3beacd39a15ac026055ec48bf5ca3a2f41873d586454b66990acd25553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc447d3beacd39a15ac026055ec48bf5ca3a2f41873d586454b66990acd25553->enter($__internal_fc447d3beacd39a15ac026055ec48bf5ca3a2f41873d586454b66990acd25553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9483ee9af9310a9dcf952792e39efab413a910d20bfab5ff2990702ebc1aa92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9483ee9af9310a9dcf952792e39efab413a910d20bfab5ff2990702ebc1aa92->enter($__internal_d9483ee9af9310a9dcf952792e39efab413a910d20bfab5ff2990702ebc1aa92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_d9483ee9af9310a9dcf952792e39efab413a910d20bfab5ff2990702ebc1aa92->leave($__internal_d9483ee9af9310a9dcf952792e39efab413a910d20bfab5ff2990702ebc1aa92_prof);

        
        $__internal_fc447d3beacd39a15ac026055ec48bf5ca3a2f41873d586454b66990acd25553->leave($__internal_fc447d3beacd39a15ac026055ec48bf5ca3a2f41873d586454b66990acd25553_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_d4446843eae72ab1134901d52a64092f6d56d0b5954a80178315ab7a970823d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4446843eae72ab1134901d52a64092f6d56d0b5954a80178315ab7a970823d9->enter($__internal_d4446843eae72ab1134901d52a64092f6d56d0b5954a80178315ab7a970823d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_51c50d4b1358012616b96b7f002577f825d1cd51122c67190b7754bc2579e8db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c50d4b1358012616b96b7f002577f825d1cd51122c67190b7754bc2579e8db->enter($__internal_51c50d4b1358012616b96b7f002577f825d1cd51122c67190b7754bc2579e8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        echo "<li class=\"btn nav-item active\">
    <a class=\"nav-link\" href=\"/validate\">Validate</a>
</li>
    <li class=\"btn nav-item active\">
        <a class=\"nav-link\" href=\"/admin\">Admin</a>
    </li>
<li class=\"btn nav-item btn-danger active\">
    <a class=\"nav-link\" href=\"#\">Disconnect</a>
</li>
";
        
        $__internal_51c50d4b1358012616b96b7f002577f825d1cd51122c67190b7754bc2579e8db->leave($__internal_51c50d4b1358012616b96b7f002577f825d1cd51122c67190b7754bc2579e8db_prof);

        
        $__internal_d4446843eae72ab1134901d52a64092f6d56d0b5954a80178315ab7a970823d9->leave($__internal_d4446843eae72ab1134901d52a64092f6d56d0b5954a80178315ab7a970823d9_prof);

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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Admin{% endblock %}

{% block navbar %}
<li class=\"btn nav-item active\">
    <a class=\"nav-link\" href=\"/validate\">Validate</a>
</li>
    <li class=\"btn nav-item active\">
        <a class=\"nav-link\" href=\"/admin\">Admin</a>
    </li>
<li class=\"btn nav-item btn-danger active\">
    <a class=\"nav-link\" href=\"#\">Disconnect</a>
</li>
{% endblock %}", "admin/admin.php.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/templates/admin/admin.php.twig");
    }
}
