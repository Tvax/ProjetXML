<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2b0ca155660c7f9727796fc68e4c6951a8af132f635ca1b874cae5eeefcee5a9 extends Twig_Template
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
        $__internal_35949c3c144eef7e5abbe16b04deae2e983fbc63d671874d54623ba7289257c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35949c3c144eef7e5abbe16b04deae2e983fbc63d671874d54623ba7289257c9->enter($__internal_35949c3c144eef7e5abbe16b04deae2e983fbc63d671874d54623ba7289257c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6e9caead3094c0d0ebc5cf42e2c2d1f344951e006d1d72bcbf79b81c076523e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9caead3094c0d0ebc5cf42e2c2d1f344951e006d1d72bcbf79b81c076523e3->enter($__internal_6e9caead3094c0d0ebc5cf42e2c2d1f344951e006d1d72bcbf79b81c076523e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35949c3c144eef7e5abbe16b04deae2e983fbc63d671874d54623ba7289257c9->leave($__internal_35949c3c144eef7e5abbe16b04deae2e983fbc63d671874d54623ba7289257c9_prof);

        
        $__internal_6e9caead3094c0d0ebc5cf42e2c2d1f344951e006d1d72bcbf79b81c076523e3->leave($__internal_6e9caead3094c0d0ebc5cf42e2c2d1f344951e006d1d72bcbf79b81c076523e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33b00fde11abc6594f3aa1db14b7976ff37d31340a1f5ca96f6fc0e8efa22751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b00fde11abc6594f3aa1db14b7976ff37d31340a1f5ca96f6fc0e8efa22751->enter($__internal_33b00fde11abc6594f3aa1db14b7976ff37d31340a1f5ca96f6fc0e8efa22751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_282cbe534b35bce0f9d6efbc65dad018df3452b3619a36f8e1310fdf3c09785c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282cbe534b35bce0f9d6efbc65dad018df3452b3619a36f8e1310fdf3c09785c->enter($__internal_282cbe534b35bce0f9d6efbc65dad018df3452b3619a36f8e1310fdf3c09785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_282cbe534b35bce0f9d6efbc65dad018df3452b3619a36f8e1310fdf3c09785c->leave($__internal_282cbe534b35bce0f9d6efbc65dad018df3452b3619a36f8e1310fdf3c09785c_prof);

        
        $__internal_33b00fde11abc6594f3aa1db14b7976ff37d31340a1f5ca96f6fc0e8efa22751->leave($__internal_33b00fde11abc6594f3aa1db14b7976ff37d31340a1f5ca96f6fc0e8efa22751_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e394e18b087357e7b2e169fb4deff2c749b90c504100e594a399854e48dad58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e394e18b087357e7b2e169fb4deff2c749b90c504100e594a399854e48dad58->enter($__internal_9e394e18b087357e7b2e169fb4deff2c749b90c504100e594a399854e48dad58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4391f22cc351c5d1b67e121eec8c141baef3495d543133a0f0ffc56bbaec4a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4391f22cc351c5d1b67e121eec8c141baef3495d543133a0f0ffc56bbaec4a65->enter($__internal_4391f22cc351c5d1b67e121eec8c141baef3495d543133a0f0ffc56bbaec4a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4391f22cc351c5d1b67e121eec8c141baef3495d543133a0f0ffc56bbaec4a65->leave($__internal_4391f22cc351c5d1b67e121eec8c141baef3495d543133a0f0ffc56bbaec4a65_prof);

        
        $__internal_9e394e18b087357e7b2e169fb4deff2c749b90c504100e594a399854e48dad58->leave($__internal_9e394e18b087357e7b2e169fb4deff2c749b90c504100e594a399854e48dad58_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02967ca65076d5d923fbe1ab05e118d3bfeaad55c8203d8385417e114aec11ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02967ca65076d5d923fbe1ab05e118d3bfeaad55c8203d8385417e114aec11ef->enter($__internal_02967ca65076d5d923fbe1ab05e118d3bfeaad55c8203d8385417e114aec11ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4fe46de7dbc3cb3c3d4bcc278f21656b741ee68c6e927575e74156a9819ddf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4fe46de7dbc3cb3c3d4bcc278f21656b741ee68c6e927575e74156a9819ddf4->enter($__internal_c4fe46de7dbc3cb3c3d4bcc278f21656b741ee68c6e927575e74156a9819ddf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c4fe46de7dbc3cb3c3d4bcc278f21656b741ee68c6e927575e74156a9819ddf4->leave($__internal_c4fe46de7dbc3cb3c3d4bcc278f21656b741ee68c6e927575e74156a9819ddf4_prof);

        
        $__internal_02967ca65076d5d923fbe1ab05e118d3bfeaad55c8203d8385417e114aec11ef->leave($__internal_02967ca65076d5d923fbe1ab05e118d3bfeaad55c8203d8385417e114aec11ef_prof);

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
