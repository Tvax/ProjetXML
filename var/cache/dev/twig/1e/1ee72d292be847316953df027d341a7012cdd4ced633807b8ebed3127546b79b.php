<?php

/* default/validate.php.twig */
class __TwigTemplate_27a7fd3aa6a636e893488a7ffc95bca0c2d25175efc2dd780dd365e20b3bc9dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/validate.php.twig", 1);
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
        $__internal_694f5c8a33e1b1eb64af032ccdfc4bd5e1744d207f0b932b59d2ab9e40712184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694f5c8a33e1b1eb64af032ccdfc4bd5e1744d207f0b932b59d2ab9e40712184->enter($__internal_694f5c8a33e1b1eb64af032ccdfc4bd5e1744d207f0b932b59d2ab9e40712184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $__internal_091b525bdfae2e99c3405ac2c2f3496aaf1810842c0c02189caa723486cc2148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091b525bdfae2e99c3405ac2c2f3496aaf1810842c0c02189caa723486cc2148->enter($__internal_091b525bdfae2e99c3405ac2c2f3496aaf1810842c0c02189caa723486cc2148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_694f5c8a33e1b1eb64af032ccdfc4bd5e1744d207f0b932b59d2ab9e40712184->leave($__internal_694f5c8a33e1b1eb64af032ccdfc4bd5e1744d207f0b932b59d2ab9e40712184_prof);

        
        $__internal_091b525bdfae2e99c3405ac2c2f3496aaf1810842c0c02189caa723486cc2148->leave($__internal_091b525bdfae2e99c3405ac2c2f3496aaf1810842c0c02189caa723486cc2148_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b1d5b0cb13b79a6acdac9fe1bb1b59e2084cbc9d25e224f2d965a900abcfdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1d5b0cb13b79a6acdac9fe1bb1b59e2084cbc9d25e224f2d965a900abcfdc0->enter($__internal_2b1d5b0cb13b79a6acdac9fe1bb1b59e2084cbc9d25e224f2d965a900abcfdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40c8633d0cb99650fb34575761afd5d6adf5be207180c5c1d9dd49b11f5d9710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c8633d0cb99650fb34575761afd5d6adf5be207180c5c1d9dd49b11f5d9710->enter($__internal_40c8633d0cb99650fb34575761afd5d6adf5be207180c5c1d9dd49b11f5d9710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Validate";
        
        $__internal_40c8633d0cb99650fb34575761afd5d6adf5be207180c5c1d9dd49b11f5d9710->leave($__internal_40c8633d0cb99650fb34575761afd5d6adf5be207180c5c1d9dd49b11f5d9710_prof);

        
        $__internal_2b1d5b0cb13b79a6acdac9fe1bb1b59e2084cbc9d25e224f2d965a900abcfdc0->leave($__internal_2b1d5b0cb13b79a6acdac9fe1bb1b59e2084cbc9d25e224f2d965a900abcfdc0_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_4107e8c8066c5fe72a5d8c1d88eba2ee15ecf4b39605af1a086a80217f324252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4107e8c8066c5fe72a5d8c1d88eba2ee15ecf4b39605af1a086a80217f324252->enter($__internal_4107e8c8066c5fe72a5d8c1d88eba2ee15ecf4b39605af1a086a80217f324252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_9517f0ab3af8a5819bc24b07d01a1b92d809751197c6a98dc69ba0422f161c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9517f0ab3af8a5819bc24b07d01a1b92d809751197c6a98dc69ba0422f161c33->enter($__internal_9517f0ab3af8a5819bc24b07d01a1b92d809751197c6a98dc69ba0422f161c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        echo "    <li class=\"btn nav-item active\">
        <a class=\"nav-link\" href=\"/validate\">Validate</a>
    </li>

    ";
        // line 10
        if ((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new Twig_Error_Runtime('Variable "isAdmin" does not exist.', 10, $this->getSourceContext()); })())) {
            // line 11
            echo "        <li class=\"btn nav-item active\">
            <a class=\"nav-link\" href=\"/admin\">Admin</a>
        </li>
    ";
        }
        // line 15
        echo "<li class=\"btn nav-item btn-danger active\">
    <a class=\"nav-link\" href=\"/?disconnect=true\">Disconnect</a>
</li>
";
        
        $__internal_9517f0ab3af8a5819bc24b07d01a1b92d809751197c6a98dc69ba0422f161c33->leave($__internal_9517f0ab3af8a5819bc24b07d01a1b92d809751197c6a98dc69ba0422f161c33_prof);

        
        $__internal_4107e8c8066c5fe72a5d8c1d88eba2ee15ecf4b39605af1a086a80217f324252->leave($__internal_4107e8c8066c5fe72a5d8c1d88eba2ee15ecf4b39605af1a086a80217f324252_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_0140fcb2595727d2c4e337f575edec5f05aab7c10eb2f2225f842a6497d56b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0140fcb2595727d2c4e337f575edec5f05aab7c10eb2f2225f842a6497d56b38->enter($__internal_0140fcb2595727d2c4e337f575edec5f05aab7c10eb2f2225f842a6497d56b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08b37468f53f995e9a87c813f0068e6ee9e4552b47ec67d34f8dd99692503532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b37468f53f995e9a87c813f0068e6ee9e4552b47ec67d34f8dd99692503532->enter($__internal_08b37468f53f995e9a87c813f0068e6ee9e4552b47ec67d34f8dd99692503532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "validation
";
        
        $__internal_08b37468f53f995e9a87c813f0068e6ee9e4552b47ec67d34f8dd99692503532->leave($__internal_08b37468f53f995e9a87c813f0068e6ee9e4552b47ec67d34f8dd99692503532_prof);

        
        $__internal_0140fcb2595727d2c4e337f575edec5f05aab7c10eb2f2225f842a6497d56b38->leave($__internal_0140fcb2595727d2c4e337f575edec5f05aab7c10eb2f2225f842a6497d56b38_prof);

    }

    public function getTemplateName()
    {
        return "default/validate.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  96 => 20,  83 => 15,  77 => 11,  75 => 10,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Validate{% endblock %}

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
validation
{% endblock %}
", "default/validate.php.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/templates/default/validate.php.twig");
    }
}
