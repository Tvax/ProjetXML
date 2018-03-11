<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0e607283b7a685241a2e647d7db11e3c36962efc4d879fa714a8c5956977f9e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_608b636e70f904f944d90187366790b0b5cb3e0a630595cef95f10b74573a95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608b636e70f904f944d90187366790b0b5cb3e0a630595cef95f10b74573a95f->enter($__internal_608b636e70f904f944d90187366790b0b5cb3e0a630595cef95f10b74573a95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b8b5babe13ecc52d0dd15c216fb9bf77bb539dfab3e2ff5abe6517fd215c8ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b5babe13ecc52d0dd15c216fb9bf77bb539dfab3e2ff5abe6517fd215c8ef3->enter($__internal_b8b5babe13ecc52d0dd15c216fb9bf77bb539dfab3e2ff5abe6517fd215c8ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_608b636e70f904f944d90187366790b0b5cb3e0a630595cef95f10b74573a95f->leave($__internal_608b636e70f904f944d90187366790b0b5cb3e0a630595cef95f10b74573a95f_prof);

        
        $__internal_b8b5babe13ecc52d0dd15c216fb9bf77bb539dfab3e2ff5abe6517fd215c8ef3->leave($__internal_b8b5babe13ecc52d0dd15c216fb9bf77bb539dfab3e2ff5abe6517fd215c8ef3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_647813d2561ef09db174f51af7ef2017b567482857de9ebc99ecdd6bb22c9d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647813d2561ef09db174f51af7ef2017b567482857de9ebc99ecdd6bb22c9d87->enter($__internal_647813d2561ef09db174f51af7ef2017b567482857de9ebc99ecdd6bb22c9d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8aef17ff4b0d06421c5ffedd2f3468dec452ec3482170b4890a200a8a19bc0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aef17ff4b0d06421c5ffedd2f3468dec452ec3482170b4890a200a8a19bc0f5->enter($__internal_8aef17ff4b0d06421c5ffedd2f3468dec452ec3482170b4890a200a8a19bc0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8aef17ff4b0d06421c5ffedd2f3468dec452ec3482170b4890a200a8a19bc0f5->leave($__internal_8aef17ff4b0d06421c5ffedd2f3468dec452ec3482170b4890a200a8a19bc0f5_prof);

        
        $__internal_647813d2561ef09db174f51af7ef2017b567482857de9ebc99ecdd6bb22c9d87->leave($__internal_647813d2561ef09db174f51af7ef2017b567482857de9ebc99ecdd6bb22c9d87_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aeaf42cbfc255329cba1639df27b33cc5888fc33dc89c606a225bd23b37213e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeaf42cbfc255329cba1639df27b33cc5888fc33dc89c606a225bd23b37213e3->enter($__internal_aeaf42cbfc255329cba1639df27b33cc5888fc33dc89c606a225bd23b37213e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1027589389cb8a9c4cb3c8c405df26ebc4dc81ae4bf9070fc051e98fe7e8c392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1027589389cb8a9c4cb3c8c405df26ebc4dc81ae4bf9070fc051e98fe7e8c392->enter($__internal_1027589389cb8a9c4cb3c8c405df26ebc4dc81ae4bf9070fc051e98fe7e8c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1027589389cb8a9c4cb3c8c405df26ebc4dc81ae4bf9070fc051e98fe7e8c392->leave($__internal_1027589389cb8a9c4cb3c8c405df26ebc4dc81ae4bf9070fc051e98fe7e8c392_prof);

        
        $__internal_aeaf42cbfc255329cba1639df27b33cc5888fc33dc89c606a225bd23b37213e3->leave($__internal_aeaf42cbfc255329cba1639df27b33cc5888fc33dc89c606a225bd23b37213e3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cea96aa41217363b92e807186aa78df3a336395c7d970032c6ffecda7a30df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cea96aa41217363b92e807186aa78df3a336395c7d970032c6ffecda7a30df2->enter($__internal_9cea96aa41217363b92e807186aa78df3a336395c7d970032c6ffecda7a30df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38759b835fae9bcbf4f0b51f9562176352a646d9e8ca8c547e23ef089c693a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38759b835fae9bcbf4f0b51f9562176352a646d9e8ca8c547e23ef089c693a63->enter($__internal_38759b835fae9bcbf4f0b51f9562176352a646d9e8ca8c547e23ef089c693a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_38759b835fae9bcbf4f0b51f9562176352a646d9e8ca8c547e23ef089c693a63->leave($__internal_38759b835fae9bcbf4f0b51f9562176352a646d9e8ca8c547e23ef089c693a63_prof);

        
        $__internal_9cea96aa41217363b92e807186aa78df3a336395c7d970032c6ffecda7a30df2->leave($__internal_9cea96aa41217363b92e807186aa78df3a336395c7d970032c6ffecda7a30df2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/teiva/Documents/Cours/Papon/modelManager/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
