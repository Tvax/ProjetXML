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
        $__internal_9a4b21ec518fcf80fc7537d1e1d700df452ac859da84c0465a81d4db4e7d7646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4b21ec518fcf80fc7537d1e1d700df452ac859da84c0465a81d4db4e7d7646->enter($__internal_9a4b21ec518fcf80fc7537d1e1d700df452ac859da84c0465a81d4db4e7d7646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $__internal_74f2eb58fd90f3db87d8f1f85aefac280bc3ec99193cf2c019fe16628d9b4f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f2eb58fd90f3db87d8f1f85aefac280bc3ec99193cf2c019fe16628d9b4f20->enter($__internal_74f2eb58fd90f3db87d8f1f85aefac280bc3ec99193cf2c019fe16628d9b4f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a4b21ec518fcf80fc7537d1e1d700df452ac859da84c0465a81d4db4e7d7646->leave($__internal_9a4b21ec518fcf80fc7537d1e1d700df452ac859da84c0465a81d4db4e7d7646_prof);

        
        $__internal_74f2eb58fd90f3db87d8f1f85aefac280bc3ec99193cf2c019fe16628d9b4f20->leave($__internal_74f2eb58fd90f3db87d8f1f85aefac280bc3ec99193cf2c019fe16628d9b4f20_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2592668f20d2c33290532b9408841403a27379be7b2f37d3eed4a8efc86720a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2592668f20d2c33290532b9408841403a27379be7b2f37d3eed4a8efc86720a3->enter($__internal_2592668f20d2c33290532b9408841403a27379be7b2f37d3eed4a8efc86720a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82de75ddc9cbda3cc20d8a9dd7f7c29299840a4df1e37b295d8312953e344e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82de75ddc9cbda3cc20d8a9dd7f7c29299840a4df1e37b295d8312953e344e58->enter($__internal_82de75ddc9cbda3cc20d8a9dd7f7c29299840a4df1e37b295d8312953e344e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Validate";
        
        $__internal_82de75ddc9cbda3cc20d8a9dd7f7c29299840a4df1e37b295d8312953e344e58->leave($__internal_82de75ddc9cbda3cc20d8a9dd7f7c29299840a4df1e37b295d8312953e344e58_prof);

        
        $__internal_2592668f20d2c33290532b9408841403a27379be7b2f37d3eed4a8efc86720a3->leave($__internal_2592668f20d2c33290532b9408841403a27379be7b2f37d3eed4a8efc86720a3_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_6ad1460383d06d8e99aca115b4311b1048c9e9f6567a957d614141e34a880c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad1460383d06d8e99aca115b4311b1048c9e9f6567a957d614141e34a880c81->enter($__internal_6ad1460383d06d8e99aca115b4311b1048c9e9f6567a957d614141e34a880c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_9656cf659e3d47dccde0205474408fcbaec6d3826b8adc3f121adcf0fb684771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9656cf659e3d47dccde0205474408fcbaec6d3826b8adc3f121adcf0fb684771->enter($__internal_9656cf659e3d47dccde0205474408fcbaec6d3826b8adc3f121adcf0fb684771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
    <a class=\"nav-link\" href=\"#\">Disconnect</a>
</li>
";
        
        $__internal_9656cf659e3d47dccde0205474408fcbaec6d3826b8adc3f121adcf0fb684771->leave($__internal_9656cf659e3d47dccde0205474408fcbaec6d3826b8adc3f121adcf0fb684771_prof);

        
        $__internal_6ad1460383d06d8e99aca115b4311b1048c9e9f6567a957d614141e34a880c81->leave($__internal_6ad1460383d06d8e99aca115b4311b1048c9e9f6567a957d614141e34a880c81_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb3e753561d3b821beecbcdb3d0176c2121b56e94c1f8a178fd5d98bcbf7b143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3e753561d3b821beecbcdb3d0176c2121b56e94c1f8a178fd5d98bcbf7b143->enter($__internal_bb3e753561d3b821beecbcdb3d0176c2121b56e94c1f8a178fd5d98bcbf7b143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cc2baf083f3404ff93ed716db97407456ee56e6f2984cbcb6a75a82483bbdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc2baf083f3404ff93ed716db97407456ee56e6f2984cbcb6a75a82483bbdad->enter($__internal_7cc2baf083f3404ff93ed716db97407456ee56e6f2984cbcb6a75a82483bbdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "validation
";
        
        $__internal_7cc2baf083f3404ff93ed716db97407456ee56e6f2984cbcb6a75a82483bbdad->leave($__internal_7cc2baf083f3404ff93ed716db97407456ee56e6f2984cbcb6a75a82483bbdad_prof);

        
        $__internal_bb3e753561d3b821beecbcdb3d0176c2121b56e94c1f8a178fd5d98bcbf7b143->leave($__internal_bb3e753561d3b821beecbcdb3d0176c2121b56e94c1f8a178fd5d98bcbf7b143_prof);

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
    <a class=\"nav-link\" href=\"#\">Disconnect</a>
</li>
{% endblock %}

{% block body %}
validation
{% endblock %}
", "default/validate.php.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/templates/default/validate.php.twig");
    }
}
