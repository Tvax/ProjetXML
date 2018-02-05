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
        $__internal_5ec68e1c042dcffa11f3a7fb2a89ea0a7e65cfe2b15784b67f4f1c7fa315fa8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec68e1c042dcffa11f3a7fb2a89ea0a7e65cfe2b15784b67f4f1c7fa315fa8d->enter($__internal_5ec68e1c042dcffa11f3a7fb2a89ea0a7e65cfe2b15784b67f4f1c7fa315fa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d8b754c5bb9aad24b5bd28dccd82d01bd5c50eb636a29b69bf85f9e81bcb0acc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b754c5bb9aad24b5bd28dccd82d01bd5c50eb636a29b69bf85f9e81bcb0acc->enter($__internal_d8b754c5bb9aad24b5bd28dccd82d01bd5c50eb636a29b69bf85f9e81bcb0acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec68e1c042dcffa11f3a7fb2a89ea0a7e65cfe2b15784b67f4f1c7fa315fa8d->leave($__internal_5ec68e1c042dcffa11f3a7fb2a89ea0a7e65cfe2b15784b67f4f1c7fa315fa8d_prof);

        
        $__internal_d8b754c5bb9aad24b5bd28dccd82d01bd5c50eb636a29b69bf85f9e81bcb0acc->leave($__internal_d8b754c5bb9aad24b5bd28dccd82d01bd5c50eb636a29b69bf85f9e81bcb0acc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_afe0666f0987ef00f0574b6739691ea027004ba9fb138b511538ed27ff517888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe0666f0987ef00f0574b6739691ea027004ba9fb138b511538ed27ff517888->enter($__internal_afe0666f0987ef00f0574b6739691ea027004ba9fb138b511538ed27ff517888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd6f39875eea845d6d6deb778546d2a21a9ce05fd2b42d692a385b5b0d47105d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6f39875eea845d6d6deb778546d2a21a9ce05fd2b42d692a385b5b0d47105d->enter($__internal_bd6f39875eea845d6d6deb778546d2a21a9ce05fd2b42d692a385b5b0d47105d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bd6f39875eea845d6d6deb778546d2a21a9ce05fd2b42d692a385b5b0d47105d->leave($__internal_bd6f39875eea845d6d6deb778546d2a21a9ce05fd2b42d692a385b5b0d47105d_prof);

        
        $__internal_afe0666f0987ef00f0574b6739691ea027004ba9fb138b511538ed27ff517888->leave($__internal_afe0666f0987ef00f0574b6739691ea027004ba9fb138b511538ed27ff517888_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9256ee6818373b0f6a7254d64d5a16a98767050ccfd44c0aa6219aa9305bf4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9256ee6818373b0f6a7254d64d5a16a98767050ccfd44c0aa6219aa9305bf4b8->enter($__internal_9256ee6818373b0f6a7254d64d5a16a98767050ccfd44c0aa6219aa9305bf4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_33337b15bee264b52516caaf738293abc76ccfd7c0418dd21674820945679265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33337b15bee264b52516caaf738293abc76ccfd7c0418dd21674820945679265->enter($__internal_33337b15bee264b52516caaf738293abc76ccfd7c0418dd21674820945679265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_33337b15bee264b52516caaf738293abc76ccfd7c0418dd21674820945679265->leave($__internal_33337b15bee264b52516caaf738293abc76ccfd7c0418dd21674820945679265_prof);

        
        $__internal_9256ee6818373b0f6a7254d64d5a16a98767050ccfd44c0aa6219aa9305bf4b8->leave($__internal_9256ee6818373b0f6a7254d64d5a16a98767050ccfd44c0aa6219aa9305bf4b8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2774c602582d70f846be9650f9c61b8d7d04799e291e8f94e2b06ea2efd4316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2774c602582d70f846be9650f9c61b8d7d04799e291e8f94e2b06ea2efd4316->enter($__internal_f2774c602582d70f846be9650f9c61b8d7d04799e291e8f94e2b06ea2efd4316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea9024747ec31191f402f214ab0d00ee4e6aaaca7131d82154c18b51c07e58c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9024747ec31191f402f214ab0d00ee4e6aaaca7131d82154c18b51c07e58c3->enter($__internal_ea9024747ec31191f402f214ab0d00ee4e6aaaca7131d82154c18b51c07e58c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ea9024747ec31191f402f214ab0d00ee4e6aaaca7131d82154c18b51c07e58c3->leave($__internal_ea9024747ec31191f402f214ab0d00ee4e6aaaca7131d82154c18b51c07e58c3_prof);

        
        $__internal_f2774c602582d70f846be9650f9c61b8d7d04799e291e8f94e2b06ea2efd4316->leave($__internal_f2774c602582d70f846be9650f9c61b8d7d04799e291e8f94e2b06ea2efd4316_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/teiva/Documents/ProjetXML/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
