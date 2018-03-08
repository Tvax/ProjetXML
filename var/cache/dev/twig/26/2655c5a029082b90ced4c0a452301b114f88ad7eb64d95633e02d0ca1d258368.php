<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_96d2e6e52be9e163f80a3694840aeea9d7b50a8dbb848b35db9887a911267a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fb4a3acb41732c45d2bd51e3d3d08e248206bcffdf87b4d6062c0e9f924a5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb4a3acb41732c45d2bd51e3d3d08e248206bcffdf87b4d6062c0e9f924a5b4->enter($__internal_5fb4a3acb41732c45d2bd51e3d3d08e248206bcffdf87b4d6062c0e9f924a5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_08101d7d82947667cfebd18efbfd505a4064f05b31928a0e0ad96297ce06cec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08101d7d82947667cfebd18efbfd505a4064f05b31928a0e0ad96297ce06cec3->enter($__internal_08101d7d82947667cfebd18efbfd505a4064f05b31928a0e0ad96297ce06cec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fb4a3acb41732c45d2bd51e3d3d08e248206bcffdf87b4d6062c0e9f924a5b4->leave($__internal_5fb4a3acb41732c45d2bd51e3d3d08e248206bcffdf87b4d6062c0e9f924a5b4_prof);

        
        $__internal_08101d7d82947667cfebd18efbfd505a4064f05b31928a0e0ad96297ce06cec3->leave($__internal_08101d7d82947667cfebd18efbfd505a4064f05b31928a0e0ad96297ce06cec3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1b7fb0c572c783aad8735c794748cb9327f1ddf08ca3744993f0f28f8f30a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b7fb0c572c783aad8735c794748cb9327f1ddf08ca3744993f0f28f8f30a1d->enter($__internal_d1b7fb0c572c783aad8735c794748cb9327f1ddf08ca3744993f0f28f8f30a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d41d4ea7cb3e44050556437a89348c96756d3172f2eea722fef7ff70fe1f6646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41d4ea7cb3e44050556437a89348c96756d3172f2eea722fef7ff70fe1f6646->enter($__internal_d41d4ea7cb3e44050556437a89348c96756d3172f2eea722fef7ff70fe1f6646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d41d4ea7cb3e44050556437a89348c96756d3172f2eea722fef7ff70fe1f6646->leave($__internal_d41d4ea7cb3e44050556437a89348c96756d3172f2eea722fef7ff70fe1f6646_prof);

        
        $__internal_d1b7fb0c572c783aad8735c794748cb9327f1ddf08ca3744993f0f28f8f30a1d->leave($__internal_d1b7fb0c572c783aad8735c794748cb9327f1ddf08ca3744993f0f28f8f30a1d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5809a8e16a0599a65f7e68f8d29f13788916cfd66eeba9b245f547a6d2f6eefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5809a8e16a0599a65f7e68f8d29f13788916cfd66eeba9b245f547a6d2f6eefe->enter($__internal_5809a8e16a0599a65f7e68f8d29f13788916cfd66eeba9b245f547a6d2f6eefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d536109ba0ee5d477efabeaf757891cd3f31953d0afe3164cb48565a36f7b00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d536109ba0ee5d477efabeaf757891cd3f31953d0afe3164cb48565a36f7b00c->enter($__internal_d536109ba0ee5d477efabeaf757891cd3f31953d0afe3164cb48565a36f7b00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d536109ba0ee5d477efabeaf757891cd3f31953d0afe3164cb48565a36f7b00c->leave($__internal_d536109ba0ee5d477efabeaf757891cd3f31953d0afe3164cb48565a36f7b00c_prof);

        
        $__internal_5809a8e16a0599a65f7e68f8d29f13788916cfd66eeba9b245f547a6d2f6eefe->leave($__internal_5809a8e16a0599a65f7e68f8d29f13788916cfd66eeba9b245f547a6d2f6eefe_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8959bdd5ba96f66f555d62d49e2ed8ccf395f87f8bd9a0bc0b3ebd4475dffb2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8959bdd5ba96f66f555d62d49e2ed8ccf395f87f8bd9a0bc0b3ebd4475dffb2a->enter($__internal_8959bdd5ba96f66f555d62d49e2ed8ccf395f87f8bd9a0bc0b3ebd4475dffb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_760726830511ee937435ab8190d8cdc8444a70c2d9bfa9a9ae024e311326e6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760726830511ee937435ab8190d8cdc8444a70c2d9bfa9a9ae024e311326e6c7->enter($__internal_760726830511ee937435ab8190d8cdc8444a70c2d9bfa9a9ae024e311326e6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_760726830511ee937435ab8190d8cdc8444a70c2d9bfa9a9ae024e311326e6c7->leave($__internal_760726830511ee937435ab8190d8cdc8444a70c2d9bfa9a9ae024e311326e6c7_prof);

        
        $__internal_8959bdd5ba96f66f555d62d49e2ed8ccf395f87f8bd9a0bc0b3ebd4475dffb2a->leave($__internal_8959bdd5ba96f66f555d62d49e2ed8ccf395f87f8bd9a0bc0b3ebd4475dffb2a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/teiva/Documents/Cours/Papon/modelManager/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
