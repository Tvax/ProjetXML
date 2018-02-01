<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5cd98bd7676799689596b452caa14311b052ce188b9a1d0c96de0d9a4d45f5cd extends Twig_Template
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
        $__internal_c35cf70722fedfbab84e09535282fd845a2ad0ae8a055cae0017b01d9538e3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35cf70722fedfbab84e09535282fd845a2ad0ae8a055cae0017b01d9538e3e8->enter($__internal_c35cf70722fedfbab84e09535282fd845a2ad0ae8a055cae0017b01d9538e3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0945d5906530cf6669a8fb0e77ad5800513a58a2d31dcf65b23da547e0cde6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0945d5906530cf6669a8fb0e77ad5800513a58a2d31dcf65b23da547e0cde6bf->enter($__internal_0945d5906530cf6669a8fb0e77ad5800513a58a2d31dcf65b23da547e0cde6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35cf70722fedfbab84e09535282fd845a2ad0ae8a055cae0017b01d9538e3e8->leave($__internal_c35cf70722fedfbab84e09535282fd845a2ad0ae8a055cae0017b01d9538e3e8_prof);

        
        $__internal_0945d5906530cf6669a8fb0e77ad5800513a58a2d31dcf65b23da547e0cde6bf->leave($__internal_0945d5906530cf6669a8fb0e77ad5800513a58a2d31dcf65b23da547e0cde6bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4dc2f39974108895b355b40ceafdceee7979d13ea0167fd535892b3841b0731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4dc2f39974108895b355b40ceafdceee7979d13ea0167fd535892b3841b0731->enter($__internal_b4dc2f39974108895b355b40ceafdceee7979d13ea0167fd535892b3841b0731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab16f410df52c4ed9f9a7d7ea99dabcfc07c925b2422e9833c31c5dab894911b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab16f410df52c4ed9f9a7d7ea99dabcfc07c925b2422e9833c31c5dab894911b->enter($__internal_ab16f410df52c4ed9f9a7d7ea99dabcfc07c925b2422e9833c31c5dab894911b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ab16f410df52c4ed9f9a7d7ea99dabcfc07c925b2422e9833c31c5dab894911b->leave($__internal_ab16f410df52c4ed9f9a7d7ea99dabcfc07c925b2422e9833c31c5dab894911b_prof);

        
        $__internal_b4dc2f39974108895b355b40ceafdceee7979d13ea0167fd535892b3841b0731->leave($__internal_b4dc2f39974108895b355b40ceafdceee7979d13ea0167fd535892b3841b0731_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30eeaeb9c2b4f5665ca2f620732b50c09b0433f00acfd85352fceb3b1bab8e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30eeaeb9c2b4f5665ca2f620732b50c09b0433f00acfd85352fceb3b1bab8e4c->enter($__internal_30eeaeb9c2b4f5665ca2f620732b50c09b0433f00acfd85352fceb3b1bab8e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_21b28a77159024bf5cc213a7fb2262e693dd65144c5e045dc7c4a247e4c0f651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b28a77159024bf5cc213a7fb2262e693dd65144c5e045dc7c4a247e4c0f651->enter($__internal_21b28a77159024bf5cc213a7fb2262e693dd65144c5e045dc7c4a247e4c0f651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_21b28a77159024bf5cc213a7fb2262e693dd65144c5e045dc7c4a247e4c0f651->leave($__internal_21b28a77159024bf5cc213a7fb2262e693dd65144c5e045dc7c4a247e4c0f651_prof);

        
        $__internal_30eeaeb9c2b4f5665ca2f620732b50c09b0433f00acfd85352fceb3b1bab8e4c->leave($__internal_30eeaeb9c2b4f5665ca2f620732b50c09b0433f00acfd85352fceb3b1bab8e4c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_487677fdf1391ed0827b0173f915961097906b919837e145e3beef6c1ba6753b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487677fdf1391ed0827b0173f915961097906b919837e145e3beef6c1ba6753b->enter($__internal_487677fdf1391ed0827b0173f915961097906b919837e145e3beef6c1ba6753b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_93f5aa52397919c799ccb7f9eecd321eb449d287f9e1b8e365eee6f86f23ffc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f5aa52397919c799ccb7f9eecd321eb449d287f9e1b8e365eee6f86f23ffc4->enter($__internal_93f5aa52397919c799ccb7f9eecd321eb449d287f9e1b8e365eee6f86f23ffc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_93f5aa52397919c799ccb7f9eecd321eb449d287f9e1b8e365eee6f86f23ffc4->leave($__internal_93f5aa52397919c799ccb7f9eecd321eb449d287f9e1b8e365eee6f86f23ffc4_prof);

        
        $__internal_487677fdf1391ed0827b0173f915961097906b919837e145e3beef6c1ba6753b->leave($__internal_487677fdf1391ed0827b0173f915961097906b919837e145e3beef6c1ba6753b_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
