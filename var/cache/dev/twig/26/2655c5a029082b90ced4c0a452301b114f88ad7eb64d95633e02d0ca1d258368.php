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
        $__internal_3b3cd45fac28f1071d69875d9ee83c4702bf0b444108ad08fbc65af11514ec9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3cd45fac28f1071d69875d9ee83c4702bf0b444108ad08fbc65af11514ec9e->enter($__internal_3b3cd45fac28f1071d69875d9ee83c4702bf0b444108ad08fbc65af11514ec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e6ddefe4395e41b1d8bf1e0087ee48a5313efc1d897e29413c3f8507d2ea4000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ddefe4395e41b1d8bf1e0087ee48a5313efc1d897e29413c3f8507d2ea4000->enter($__internal_e6ddefe4395e41b1d8bf1e0087ee48a5313efc1d897e29413c3f8507d2ea4000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b3cd45fac28f1071d69875d9ee83c4702bf0b444108ad08fbc65af11514ec9e->leave($__internal_3b3cd45fac28f1071d69875d9ee83c4702bf0b444108ad08fbc65af11514ec9e_prof);

        
        $__internal_e6ddefe4395e41b1d8bf1e0087ee48a5313efc1d897e29413c3f8507d2ea4000->leave($__internal_e6ddefe4395e41b1d8bf1e0087ee48a5313efc1d897e29413c3f8507d2ea4000_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ba2708f61e8822e01e3972b61b683d200b1949236392b5dc71bbf6a6be1ddeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba2708f61e8822e01e3972b61b683d200b1949236392b5dc71bbf6a6be1ddeb->enter($__internal_9ba2708f61e8822e01e3972b61b683d200b1949236392b5dc71bbf6a6be1ddeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_051b993e9cedb41589f2b0bff9f4092f108cad601aa2a2bd1c9183ec4904c885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051b993e9cedb41589f2b0bff9f4092f108cad601aa2a2bd1c9183ec4904c885->enter($__internal_051b993e9cedb41589f2b0bff9f4092f108cad601aa2a2bd1c9183ec4904c885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_051b993e9cedb41589f2b0bff9f4092f108cad601aa2a2bd1c9183ec4904c885->leave($__internal_051b993e9cedb41589f2b0bff9f4092f108cad601aa2a2bd1c9183ec4904c885_prof);

        
        $__internal_9ba2708f61e8822e01e3972b61b683d200b1949236392b5dc71bbf6a6be1ddeb->leave($__internal_9ba2708f61e8822e01e3972b61b683d200b1949236392b5dc71bbf6a6be1ddeb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_46e45f5f43c36cb81b74648c441f110f135969570d94b928dc073ea41b68a0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e45f5f43c36cb81b74648c441f110f135969570d94b928dc073ea41b68a0a7->enter($__internal_46e45f5f43c36cb81b74648c441f110f135969570d94b928dc073ea41b68a0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1016291c80766977008dc75b2887eec283936efc75da97b0a1bc55445b0e2584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1016291c80766977008dc75b2887eec283936efc75da97b0a1bc55445b0e2584->enter($__internal_1016291c80766977008dc75b2887eec283936efc75da97b0a1bc55445b0e2584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_1016291c80766977008dc75b2887eec283936efc75da97b0a1bc55445b0e2584->leave($__internal_1016291c80766977008dc75b2887eec283936efc75da97b0a1bc55445b0e2584_prof);

        
        $__internal_46e45f5f43c36cb81b74648c441f110f135969570d94b928dc073ea41b68a0a7->leave($__internal_46e45f5f43c36cb81b74648c441f110f135969570d94b928dc073ea41b68a0a7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_08c415739d384a0bdcecdb8a34acad602e91c086d0770317197ebb148db300b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c415739d384a0bdcecdb8a34acad602e91c086d0770317197ebb148db300b4->enter($__internal_08c415739d384a0bdcecdb8a34acad602e91c086d0770317197ebb148db300b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9647192a368e01ba66d1ee3e762a53b40253f40af99d61ef5b8aa68e72a7fd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9647192a368e01ba66d1ee3e762a53b40253f40af99d61ef5b8aa68e72a7fd5f->enter($__internal_9647192a368e01ba66d1ee3e762a53b40253f40af99d61ef5b8aa68e72a7fd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9647192a368e01ba66d1ee3e762a53b40253f40af99d61ef5b8aa68e72a7fd5f->leave($__internal_9647192a368e01ba66d1ee3e762a53b40253f40af99d61ef5b8aa68e72a7fd5f_prof);

        
        $__internal_08c415739d384a0bdcecdb8a34acad602e91c086d0770317197ebb148db300b4->leave($__internal_08c415739d384a0bdcecdb8a34acad602e91c086d0770317197ebb148db300b4_prof);

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
