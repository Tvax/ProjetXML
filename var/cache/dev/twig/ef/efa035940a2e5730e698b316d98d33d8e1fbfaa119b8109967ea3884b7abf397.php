<?php

/* default/validate.php.twig */
class __TwigTemplate_3042024e5392186e6b805752684388d1c64fde16e00e61597d1cb68c4b55c80e extends Twig_Template
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
        $__internal_7c8aadee874e94582ed510da465f96af4c4b26e5dcae90a9f1719a762cbe5ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8aadee874e94582ed510da465f96af4c4b26e5dcae90a9f1719a762cbe5ea5->enter($__internal_7c8aadee874e94582ed510da465f96af4c4b26e5dcae90a9f1719a762cbe5ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $__internal_e169b906fac63a10ed3b224a253bc5e57a0f8c8f4debb88d7db9c7277463e556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e169b906fac63a10ed3b224a253bc5e57a0f8c8f4debb88d7db9c7277463e556->enter($__internal_e169b906fac63a10ed3b224a253bc5e57a0f8c8f4debb88d7db9c7277463e556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c8aadee874e94582ed510da465f96af4c4b26e5dcae90a9f1719a762cbe5ea5->leave($__internal_7c8aadee874e94582ed510da465f96af4c4b26e5dcae90a9f1719a762cbe5ea5_prof);

        
        $__internal_e169b906fac63a10ed3b224a253bc5e57a0f8c8f4debb88d7db9c7277463e556->leave($__internal_e169b906fac63a10ed3b224a253bc5e57a0f8c8f4debb88d7db9c7277463e556_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb85166b0585bd480c19c98cdec898afccf9b6d853cc316b69ab73cc3cfc1d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb85166b0585bd480c19c98cdec898afccf9b6d853cc316b69ab73cc3cfc1d85->enter($__internal_cb85166b0585bd480c19c98cdec898afccf9b6d853cc316b69ab73cc3cfc1d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6f054d976ecb768da2f10c27f7bc3144508cd9b44a8faa284375802e0f8d410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f054d976ecb768da2f10c27f7bc3144508cd9b44a8faa284375802e0f8d410->enter($__internal_e6f054d976ecb768da2f10c27f7bc3144508cd9b44a8faa284375802e0f8d410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Validate";
        
        $__internal_e6f054d976ecb768da2f10c27f7bc3144508cd9b44a8faa284375802e0f8d410->leave($__internal_e6f054d976ecb768da2f10c27f7bc3144508cd9b44a8faa284375802e0f8d410_prof);

        
        $__internal_cb85166b0585bd480c19c98cdec898afccf9b6d853cc316b69ab73cc3cfc1d85->leave($__internal_cb85166b0585bd480c19c98cdec898afccf9b6d853cc316b69ab73cc3cfc1d85_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_ef1ceb2425e92dd9426379631944bf5327499e12ed4f3e574a1f58f82e545bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1ceb2425e92dd9426379631944bf5327499e12ed4f3e574a1f58f82e545bc7->enter($__internal_ef1ceb2425e92dd9426379631944bf5327499e12ed4f3e574a1f58f82e545bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_47e2ea96e56d05c46dad4c65f5b7625400cb474b53bee2d1320f426aa9e72abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e2ea96e56d05c46dad4c65f5b7625400cb474b53bee2d1320f426aa9e72abe->enter($__internal_47e2ea96e56d05c46dad4c65f5b7625400cb474b53bee2d1320f426aa9e72abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_47e2ea96e56d05c46dad4c65f5b7625400cb474b53bee2d1320f426aa9e72abe->leave($__internal_47e2ea96e56d05c46dad4c65f5b7625400cb474b53bee2d1320f426aa9e72abe_prof);

        
        $__internal_ef1ceb2425e92dd9426379631944bf5327499e12ed4f3e574a1f58f82e545bc7->leave($__internal_ef1ceb2425e92dd9426379631944bf5327499e12ed4f3e574a1f58f82e545bc7_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_b57ab1cdf09077d7eb512d5b1cf9e59114b99000355696bacf5af5b14887305b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57ab1cdf09077d7eb512d5b1cf9e59114b99000355696bacf5af5b14887305b->enter($__internal_b57ab1cdf09077d7eb512d5b1cf9e59114b99000355696bacf5af5b14887305b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d13d46655a19c03e167854069e8fba043aa9a35b57a515e1aba6dfbdb7485bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d13d46655a19c03e167854069e8fba043aa9a35b57a515e1aba6dfbdb7485bb->enter($__internal_8d13d46655a19c03e167854069e8fba043aa9a35b57a515e1aba6dfbdb7485bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "validation
";
        
        $__internal_8d13d46655a19c03e167854069e8fba043aa9a35b57a515e1aba6dfbdb7485bb->leave($__internal_8d13d46655a19c03e167854069e8fba043aa9a35b57a515e1aba6dfbdb7485bb_prof);

        
        $__internal_b57ab1cdf09077d7eb512d5b1cf9e59114b99000355696bacf5af5b14887305b->leave($__internal_b57ab1cdf09077d7eb512d5b1cf9e59114b99000355696bacf5af5b14887305b_prof);

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
", "default/validate.php.twig", "/home/teiva/Documents/ProjetXML/templates/default/validate.php.twig");
    }
}
