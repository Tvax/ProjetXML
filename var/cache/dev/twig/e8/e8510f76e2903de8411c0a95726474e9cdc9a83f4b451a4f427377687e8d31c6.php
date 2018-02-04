<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5b9dc010015eb3794c64617159e6aa2135ceda20678aebddc90fccd0ded0a519 extends Twig_Template
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
        $__internal_e6860848c495b901863dccf4295ffbc7f3bf5a8a2b0fefd08c9f269cdf1ea318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6860848c495b901863dccf4295ffbc7f3bf5a8a2b0fefd08c9f269cdf1ea318->enter($__internal_e6860848c495b901863dccf4295ffbc7f3bf5a8a2b0fefd08c9f269cdf1ea318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c6f4a536d60a55f6305d1bf2526a95cb5efcee90c7971179783bf14af6d48b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f4a536d60a55f6305d1bf2526a95cb5efcee90c7971179783bf14af6d48b53->enter($__internal_c6f4a536d60a55f6305d1bf2526a95cb5efcee90c7971179783bf14af6d48b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6860848c495b901863dccf4295ffbc7f3bf5a8a2b0fefd08c9f269cdf1ea318->leave($__internal_e6860848c495b901863dccf4295ffbc7f3bf5a8a2b0fefd08c9f269cdf1ea318_prof);

        
        $__internal_c6f4a536d60a55f6305d1bf2526a95cb5efcee90c7971179783bf14af6d48b53->leave($__internal_c6f4a536d60a55f6305d1bf2526a95cb5efcee90c7971179783bf14af6d48b53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_851e8ee22375c8eb70df1ccef52428b347d399892a538a110a0ac4d00f1dd72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851e8ee22375c8eb70df1ccef52428b347d399892a538a110a0ac4d00f1dd72f->enter($__internal_851e8ee22375c8eb70df1ccef52428b347d399892a538a110a0ac4d00f1dd72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9795a852ba3e6fd9fd56cf52377c0154e25ea84de4409b686ba9cafb7b24daf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9795a852ba3e6fd9fd56cf52377c0154e25ea84de4409b686ba9cafb7b24daf4->enter($__internal_9795a852ba3e6fd9fd56cf52377c0154e25ea84de4409b686ba9cafb7b24daf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9795a852ba3e6fd9fd56cf52377c0154e25ea84de4409b686ba9cafb7b24daf4->leave($__internal_9795a852ba3e6fd9fd56cf52377c0154e25ea84de4409b686ba9cafb7b24daf4_prof);

        
        $__internal_851e8ee22375c8eb70df1ccef52428b347d399892a538a110a0ac4d00f1dd72f->leave($__internal_851e8ee22375c8eb70df1ccef52428b347d399892a538a110a0ac4d00f1dd72f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cece7c84a80d8e04e24bbc23c614ea1f3875f2cf68d4126b503a4655113a5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cece7c84a80d8e04e24bbc23c614ea1f3875f2cf68d4126b503a4655113a5db->enter($__internal_9cece7c84a80d8e04e24bbc23c614ea1f3875f2cf68d4126b503a4655113a5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6753cca9332e2b0c1c112fcfa9de16d4acb6a2ab803e9ba4047645c2da62f213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6753cca9332e2b0c1c112fcfa9de16d4acb6a2ab803e9ba4047645c2da62f213->enter($__internal_6753cca9332e2b0c1c112fcfa9de16d4acb6a2ab803e9ba4047645c2da62f213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_6753cca9332e2b0c1c112fcfa9de16d4acb6a2ab803e9ba4047645c2da62f213->leave($__internal_6753cca9332e2b0c1c112fcfa9de16d4acb6a2ab803e9ba4047645c2da62f213_prof);

        
        $__internal_9cece7c84a80d8e04e24bbc23c614ea1f3875f2cf68d4126b503a4655113a5db->leave($__internal_9cece7c84a80d8e04e24bbc23c614ea1f3875f2cf68d4126b503a4655113a5db_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9ea3005522bfedbe0c2840416fb233617b72a6f761cc53ffeab63d2d7c7fb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ea3005522bfedbe0c2840416fb233617b72a6f761cc53ffeab63d2d7c7fb93->enter($__internal_c9ea3005522bfedbe0c2840416fb233617b72a6f761cc53ffeab63d2d7c7fb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a2ce9c8d0a7d091aa3453716639fad7af963efd1fd9116d81349254814b1bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2ce9c8d0a7d091aa3453716639fad7af963efd1fd9116d81349254814b1bbe->enter($__internal_3a2ce9c8d0a7d091aa3453716639fad7af963efd1fd9116d81349254814b1bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3a2ce9c8d0a7d091aa3453716639fad7af963efd1fd9116d81349254814b1bbe->leave($__internal_3a2ce9c8d0a7d091aa3453716639fad7af963efd1fd9116d81349254814b1bbe_prof);

        
        $__internal_c9ea3005522bfedbe0c2840416fb233617b72a6f761cc53ffeab63d2d7c7fb93->leave($__internal_c9ea3005522bfedbe0c2840416fb233617b72a6f761cc53ffeab63d2d7c7fb93_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
