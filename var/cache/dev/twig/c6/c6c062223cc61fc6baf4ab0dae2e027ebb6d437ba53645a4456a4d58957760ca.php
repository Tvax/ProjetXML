<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_762369728d99e6101d6afd8a4b0a1a1eadf795624c13a9da8b8332e84fda32fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9effdda8503ea01b13dfbb8fb152e7cadea2c98454dad71c6307bb36762e05bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9effdda8503ea01b13dfbb8fb152e7cadea2c98454dad71c6307bb36762e05bd->enter($__internal_9effdda8503ea01b13dfbb8fb152e7cadea2c98454dad71c6307bb36762e05bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b951dd9bbef0ffa816b8577af8a8d61382ee720d9f188efe14843629f3fcf416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b951dd9bbef0ffa816b8577af8a8d61382ee720d9f188efe14843629f3fcf416->enter($__internal_b951dd9bbef0ffa816b8577af8a8d61382ee720d9f188efe14843629f3fcf416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9effdda8503ea01b13dfbb8fb152e7cadea2c98454dad71c6307bb36762e05bd->leave($__internal_9effdda8503ea01b13dfbb8fb152e7cadea2c98454dad71c6307bb36762e05bd_prof);

        
        $__internal_b951dd9bbef0ffa816b8577af8a8d61382ee720d9f188efe14843629f3fcf416->leave($__internal_b951dd9bbef0ffa816b8577af8a8d61382ee720d9f188efe14843629f3fcf416_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c17a16e97f0c26c78b6ce91cf959ea5e4ed31ef00e797f7c512563c486adce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c17a16e97f0c26c78b6ce91cf959ea5e4ed31ef00e797f7c512563c486adce6->enter($__internal_8c17a16e97f0c26c78b6ce91cf959ea5e4ed31ef00e797f7c512563c486adce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c850629efabddac13d936b8516f644f3492f7d5f111df52063d6d531c5e0dd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c850629efabddac13d936b8516f644f3492f7d5f111df52063d6d531c5e0dd10->enter($__internal_c850629efabddac13d936b8516f644f3492f7d5f111df52063d6d531c5e0dd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c850629efabddac13d936b8516f644f3492f7d5f111df52063d6d531c5e0dd10->leave($__internal_c850629efabddac13d936b8516f644f3492f7d5f111df52063d6d531c5e0dd10_prof);

        
        $__internal_8c17a16e97f0c26c78b6ce91cf959ea5e4ed31ef00e797f7c512563c486adce6->leave($__internal_8c17a16e97f0c26c78b6ce91cf959ea5e4ed31ef00e797f7c512563c486adce6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c2a1101bcea31a98fcdbfa28dc7034d5f52767d4e09ceb1d8361c512c237ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2a1101bcea31a98fcdbfa28dc7034d5f52767d4e09ceb1d8361c512c237ea5->enter($__internal_5c2a1101bcea31a98fcdbfa28dc7034d5f52767d4e09ceb1d8361c512c237ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b967b3580587aa2866e3093f26f61f0651ef95ba8b53ffcda95858acfa0ca6a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b967b3580587aa2866e3093f26f61f0651ef95ba8b53ffcda95858acfa0ca6a7->enter($__internal_b967b3580587aa2866e3093f26f61f0651ef95ba8b53ffcda95858acfa0ca6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b967b3580587aa2866e3093f26f61f0651ef95ba8b53ffcda95858acfa0ca6a7->leave($__internal_b967b3580587aa2866e3093f26f61f0651ef95ba8b53ffcda95858acfa0ca6a7_prof);

        
        $__internal_5c2a1101bcea31a98fcdbfa28dc7034d5f52767d4e09ceb1d8361c512c237ea5->leave($__internal_5c2a1101bcea31a98fcdbfa28dc7034d5f52767d4e09ceb1d8361c512c237ea5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_643b1d01b209cd07296285b75107efc774dc1e0014002b393c741d3d7b0769fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643b1d01b209cd07296285b75107efc774dc1e0014002b393c741d3d7b0769fd->enter($__internal_643b1d01b209cd07296285b75107efc774dc1e0014002b393c741d3d7b0769fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_acdbf6ae0772a14cf41b5f8588815c8eed005e19a5c9ca9c9dfd6755993c3bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdbf6ae0772a14cf41b5f8588815c8eed005e19a5c9ca9c9dfd6755993c3bd0->enter($__internal_acdbf6ae0772a14cf41b5f8588815c8eed005e19a5c9ca9c9dfd6755993c3bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_acdbf6ae0772a14cf41b5f8588815c8eed005e19a5c9ca9c9dfd6755993c3bd0->leave($__internal_acdbf6ae0772a14cf41b5f8588815c8eed005e19a5c9ca9c9dfd6755993c3bd0_prof);

        
        $__internal_643b1d01b209cd07296285b75107efc774dc1e0014002b393c741d3d7b0769fd->leave($__internal_643b1d01b209cd07296285b75107efc774dc1e0014002b393c741d3d7b0769fd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/teiva/Documents/Projet-Papon/modelManager/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
