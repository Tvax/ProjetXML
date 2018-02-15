<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d158e2b08ef8b91610718b3dafed6a761ce9f87179954f865edfd9e98a8e7bf8 extends Twig_Template
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
        $__internal_4b1b2f8f805a2bfbf71385a6bc7438976acc3f55c2ad8e494e19ac449233d461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1b2f8f805a2bfbf71385a6bc7438976acc3f55c2ad8e494e19ac449233d461->enter($__internal_4b1b2f8f805a2bfbf71385a6bc7438976acc3f55c2ad8e494e19ac449233d461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_98ec6c010d39f70e2a3b160b18ebde66270238938d920936340f17487a1e017c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ec6c010d39f70e2a3b160b18ebde66270238938d920936340f17487a1e017c->enter($__internal_98ec6c010d39f70e2a3b160b18ebde66270238938d920936340f17487a1e017c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1b2f8f805a2bfbf71385a6bc7438976acc3f55c2ad8e494e19ac449233d461->leave($__internal_4b1b2f8f805a2bfbf71385a6bc7438976acc3f55c2ad8e494e19ac449233d461_prof);

        
        $__internal_98ec6c010d39f70e2a3b160b18ebde66270238938d920936340f17487a1e017c->leave($__internal_98ec6c010d39f70e2a3b160b18ebde66270238938d920936340f17487a1e017c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e449ae3f2532f677eb83c42f554f160db0102df0dbfa986235e4afc86845718d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e449ae3f2532f677eb83c42f554f160db0102df0dbfa986235e4afc86845718d->enter($__internal_e449ae3f2532f677eb83c42f554f160db0102df0dbfa986235e4afc86845718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dca7e2e1e58b056fed19c893ad67f97bc22facd93c3db6c96f59662f81985e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca7e2e1e58b056fed19c893ad67f97bc22facd93c3db6c96f59662f81985e84->enter($__internal_dca7e2e1e58b056fed19c893ad67f97bc22facd93c3db6c96f59662f81985e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dca7e2e1e58b056fed19c893ad67f97bc22facd93c3db6c96f59662f81985e84->leave($__internal_dca7e2e1e58b056fed19c893ad67f97bc22facd93c3db6c96f59662f81985e84_prof);

        
        $__internal_e449ae3f2532f677eb83c42f554f160db0102df0dbfa986235e4afc86845718d->leave($__internal_e449ae3f2532f677eb83c42f554f160db0102df0dbfa986235e4afc86845718d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5025b8d0a1ffbb4aba52a8d97d5c8d06da92a249206d221947edf7c2737e535e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5025b8d0a1ffbb4aba52a8d97d5c8d06da92a249206d221947edf7c2737e535e->enter($__internal_5025b8d0a1ffbb4aba52a8d97d5c8d06da92a249206d221947edf7c2737e535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6464b2b8856f911a71b2ab662d51285472a5721eda955c995292ed0a88dd0c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6464b2b8856f911a71b2ab662d51285472a5721eda955c995292ed0a88dd0c4f->enter($__internal_6464b2b8856f911a71b2ab662d51285472a5721eda955c995292ed0a88dd0c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_6464b2b8856f911a71b2ab662d51285472a5721eda955c995292ed0a88dd0c4f->leave($__internal_6464b2b8856f911a71b2ab662d51285472a5721eda955c995292ed0a88dd0c4f_prof);

        
        $__internal_5025b8d0a1ffbb4aba52a8d97d5c8d06da92a249206d221947edf7c2737e535e->leave($__internal_5025b8d0a1ffbb4aba52a8d97d5c8d06da92a249206d221947edf7c2737e535e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_da3a97558bd16257b49b790ac8a7c3d5d64a000cecae89f6c758e039374cf0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3a97558bd16257b49b790ac8a7c3d5d64a000cecae89f6c758e039374cf0b9->enter($__internal_da3a97558bd16257b49b790ac8a7c3d5d64a000cecae89f6c758e039374cf0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8f71c9853173210adb0c75a3054dd114dbf0dc99cfabe322ff33900243b6eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f71c9853173210adb0c75a3054dd114dbf0dc99cfabe322ff33900243b6eb6->enter($__internal_a8f71c9853173210adb0c75a3054dd114dbf0dc99cfabe322ff33900243b6eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a8f71c9853173210adb0c75a3054dd114dbf0dc99cfabe322ff33900243b6eb6->leave($__internal_a8f71c9853173210adb0c75a3054dd114dbf0dc99cfabe322ff33900243b6eb6_prof);

        
        $__internal_da3a97558bd16257b49b790ac8a7c3d5d64a000cecae89f6c758e039374cf0b9->leave($__internal_da3a97558bd16257b49b790ac8a7c3d5d64a000cecae89f6c758e039374cf0b9_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/teiva/Documents/ProjetXML/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
