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
        $__internal_ae901b811f58a64a24b442531ee6b0956736347709b682e6d7d2c2b63b82bfd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae901b811f58a64a24b442531ee6b0956736347709b682e6d7d2c2b63b82bfd7->enter($__internal_ae901b811f58a64a24b442531ee6b0956736347709b682e6d7d2c2b63b82bfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e83d9d805d13b4207bab35a8e4a345ac6f47c6db37c92caa7429821f4bc40af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83d9d805d13b4207bab35a8e4a345ac6f47c6db37c92caa7429821f4bc40af1->enter($__internal_e83d9d805d13b4207bab35a8e4a345ac6f47c6db37c92caa7429821f4bc40af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae901b811f58a64a24b442531ee6b0956736347709b682e6d7d2c2b63b82bfd7->leave($__internal_ae901b811f58a64a24b442531ee6b0956736347709b682e6d7d2c2b63b82bfd7_prof);

        
        $__internal_e83d9d805d13b4207bab35a8e4a345ac6f47c6db37c92caa7429821f4bc40af1->leave($__internal_e83d9d805d13b4207bab35a8e4a345ac6f47c6db37c92caa7429821f4bc40af1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8536ccdfbd6b655825afa28213c7fccaae1474218762304e808c80d4269c0f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8536ccdfbd6b655825afa28213c7fccaae1474218762304e808c80d4269c0f9d->enter($__internal_8536ccdfbd6b655825afa28213c7fccaae1474218762304e808c80d4269c0f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ffe8e73715423d92797d036fb8fea705836646bddd3fec68730322ed60e88e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe8e73715423d92797d036fb8fea705836646bddd3fec68730322ed60e88e94->enter($__internal_ffe8e73715423d92797d036fb8fea705836646bddd3fec68730322ed60e88e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ffe8e73715423d92797d036fb8fea705836646bddd3fec68730322ed60e88e94->leave($__internal_ffe8e73715423d92797d036fb8fea705836646bddd3fec68730322ed60e88e94_prof);

        
        $__internal_8536ccdfbd6b655825afa28213c7fccaae1474218762304e808c80d4269c0f9d->leave($__internal_8536ccdfbd6b655825afa28213c7fccaae1474218762304e808c80d4269c0f9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c3431d2cd3b2845f055fcc7364e0e86a9089ba648b9ced91d3e81c58094e710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3431d2cd3b2845f055fcc7364e0e86a9089ba648b9ced91d3e81c58094e710->enter($__internal_0c3431d2cd3b2845f055fcc7364e0e86a9089ba648b9ced91d3e81c58094e710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9a8f43449a4daee720d4436853dc03c7b9d799e2be4fc7b5f0cd50d7284c293b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8f43449a4daee720d4436853dc03c7b9d799e2be4fc7b5f0cd50d7284c293b->enter($__internal_9a8f43449a4daee720d4436853dc03c7b9d799e2be4fc7b5f0cd50d7284c293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a8f43449a4daee720d4436853dc03c7b9d799e2be4fc7b5f0cd50d7284c293b->leave($__internal_9a8f43449a4daee720d4436853dc03c7b9d799e2be4fc7b5f0cd50d7284c293b_prof);

        
        $__internal_0c3431d2cd3b2845f055fcc7364e0e86a9089ba648b9ced91d3e81c58094e710->leave($__internal_0c3431d2cd3b2845f055fcc7364e0e86a9089ba648b9ced91d3e81c58094e710_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2b1d75a57ced6ee3623896a5e47f3b7adcabdbc610c8360927af03943e905e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b1d75a57ced6ee3623896a5e47f3b7adcabdbc610c8360927af03943e905e3->enter($__internal_c2b1d75a57ced6ee3623896a5e47f3b7adcabdbc610c8360927af03943e905e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dde18a21771405a200c9e57d14bdd4975498a63bf4bb4ffb891a3855d848a52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde18a21771405a200c9e57d14bdd4975498a63bf4bb4ffb891a3855d848a52b->enter($__internal_dde18a21771405a200c9e57d14bdd4975498a63bf4bb4ffb891a3855d848a52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_dde18a21771405a200c9e57d14bdd4975498a63bf4bb4ffb891a3855d848a52b->leave($__internal_dde18a21771405a200c9e57d14bdd4975498a63bf4bb4ffb891a3855d848a52b_prof);

        
        $__internal_c2b1d75a57ced6ee3623896a5e47f3b7adcabdbc610c8360927af03943e905e3->leave($__internal_c2b1d75a57ced6ee3623896a5e47f3b7adcabdbc610c8360927af03943e905e3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/teiva/Documents/Cours/Papon/modelManager/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
