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
        $__internal_84e4bd3668cd8d6253a9f649620758fa03185b0ce38f6e076e84a514d7f8c25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e4bd3668cd8d6253a9f649620758fa03185b0ce38f6e076e84a514d7f8c25b->enter($__internal_84e4bd3668cd8d6253a9f649620758fa03185b0ce38f6e076e84a514d7f8c25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b6f0983f517b27c70874efa43d83a8cbda0d413c496c7c8d663bc42f59c36d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f0983f517b27c70874efa43d83a8cbda0d413c496c7c8d663bc42f59c36d29->enter($__internal_b6f0983f517b27c70874efa43d83a8cbda0d413c496c7c8d663bc42f59c36d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e4bd3668cd8d6253a9f649620758fa03185b0ce38f6e076e84a514d7f8c25b->leave($__internal_84e4bd3668cd8d6253a9f649620758fa03185b0ce38f6e076e84a514d7f8c25b_prof);

        
        $__internal_b6f0983f517b27c70874efa43d83a8cbda0d413c496c7c8d663bc42f59c36d29->leave($__internal_b6f0983f517b27c70874efa43d83a8cbda0d413c496c7c8d663bc42f59c36d29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4389030a0f78cd27847a07320e7f6b299f26131a7980e1c096ea2b0bed02e037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4389030a0f78cd27847a07320e7f6b299f26131a7980e1c096ea2b0bed02e037->enter($__internal_4389030a0f78cd27847a07320e7f6b299f26131a7980e1c096ea2b0bed02e037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4c4aad275145bf2e4479b51fb8c265de93ae501f0694ebc6fb7f4714b58e4ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c4aad275145bf2e4479b51fb8c265de93ae501f0694ebc6fb7f4714b58e4ae->enter($__internal_e4c4aad275145bf2e4479b51fb8c265de93ae501f0694ebc6fb7f4714b58e4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e4c4aad275145bf2e4479b51fb8c265de93ae501f0694ebc6fb7f4714b58e4ae->leave($__internal_e4c4aad275145bf2e4479b51fb8c265de93ae501f0694ebc6fb7f4714b58e4ae_prof);

        
        $__internal_4389030a0f78cd27847a07320e7f6b299f26131a7980e1c096ea2b0bed02e037->leave($__internal_4389030a0f78cd27847a07320e7f6b299f26131a7980e1c096ea2b0bed02e037_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4086958fe36f9a1678dc5bf6cc7472787f628c21b1befbb4dcc8cad5f50d06cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4086958fe36f9a1678dc5bf6cc7472787f628c21b1befbb4dcc8cad5f50d06cc->enter($__internal_4086958fe36f9a1678dc5bf6cc7472787f628c21b1befbb4dcc8cad5f50d06cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a0498a676c4f37040ced4f68dedaf094ddb82fe9312eaff50c18bf0c8a2157e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0498a676c4f37040ced4f68dedaf094ddb82fe9312eaff50c18bf0c8a2157e7->enter($__internal_a0498a676c4f37040ced4f68dedaf094ddb82fe9312eaff50c18bf0c8a2157e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a0498a676c4f37040ced4f68dedaf094ddb82fe9312eaff50c18bf0c8a2157e7->leave($__internal_a0498a676c4f37040ced4f68dedaf094ddb82fe9312eaff50c18bf0c8a2157e7_prof);

        
        $__internal_4086958fe36f9a1678dc5bf6cc7472787f628c21b1befbb4dcc8cad5f50d06cc->leave($__internal_4086958fe36f9a1678dc5bf6cc7472787f628c21b1befbb4dcc8cad5f50d06cc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39bbc36dcb2abc0d5a8d5bddc3035ff3321e6900136862c0cc71d4a79ec263cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bbc36dcb2abc0d5a8d5bddc3035ff3321e6900136862c0cc71d4a79ec263cd->enter($__internal_39bbc36dcb2abc0d5a8d5bddc3035ff3321e6900136862c0cc71d4a79ec263cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27eff55aedadc9f4518ae3b820d1bd937ae9ead9e059fed85d82bfe6ed31bb5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27eff55aedadc9f4518ae3b820d1bd937ae9ead9e059fed85d82bfe6ed31bb5a->enter($__internal_27eff55aedadc9f4518ae3b820d1bd937ae9ead9e059fed85d82bfe6ed31bb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_27eff55aedadc9f4518ae3b820d1bd937ae9ead9e059fed85d82bfe6ed31bb5a->leave($__internal_27eff55aedadc9f4518ae3b820d1bd937ae9ead9e059fed85d82bfe6ed31bb5a_prof);

        
        $__internal_39bbc36dcb2abc0d5a8d5bddc3035ff3321e6900136862c0cc71d4a79ec263cd->leave($__internal_39bbc36dcb2abc0d5a8d5bddc3035ff3321e6900136862c0cc71d4a79ec263cd_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/teiva/Documents/Projet-Papon/modelManager/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
