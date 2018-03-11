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
        $__internal_2efbc6bb6cc353b09f6a04051a4ca1e3d4d88932d03db70969cd8eb3ae8980d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efbc6bb6cc353b09f6a04051a4ca1e3d4d88932d03db70969cd8eb3ae8980d8->enter($__internal_2efbc6bb6cc353b09f6a04051a4ca1e3d4d88932d03db70969cd8eb3ae8980d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_01bff43eda5165567b656084a3b0a4f2cee77ba36f2cacdc4e26f8566127c320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bff43eda5165567b656084a3b0a4f2cee77ba36f2cacdc4e26f8566127c320->enter($__internal_01bff43eda5165567b656084a3b0a4f2cee77ba36f2cacdc4e26f8566127c320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2efbc6bb6cc353b09f6a04051a4ca1e3d4d88932d03db70969cd8eb3ae8980d8->leave($__internal_2efbc6bb6cc353b09f6a04051a4ca1e3d4d88932d03db70969cd8eb3ae8980d8_prof);

        
        $__internal_01bff43eda5165567b656084a3b0a4f2cee77ba36f2cacdc4e26f8566127c320->leave($__internal_01bff43eda5165567b656084a3b0a4f2cee77ba36f2cacdc4e26f8566127c320_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e9b683c634945e3ced9877835f70d926959f113ab67f63dc3aa1d11f98b7f40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b683c634945e3ced9877835f70d926959f113ab67f63dc3aa1d11f98b7f40e->enter($__internal_e9b683c634945e3ced9877835f70d926959f113ab67f63dc3aa1d11f98b7f40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ba98adf894e1d2edcecf9e2f609553cde5d5ee14ad09c90a932d997553b77c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba98adf894e1d2edcecf9e2f609553cde5d5ee14ad09c90a932d997553b77c9a->enter($__internal_ba98adf894e1d2edcecf9e2f609553cde5d5ee14ad09c90a932d997553b77c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba98adf894e1d2edcecf9e2f609553cde5d5ee14ad09c90a932d997553b77c9a->leave($__internal_ba98adf894e1d2edcecf9e2f609553cde5d5ee14ad09c90a932d997553b77c9a_prof);

        
        $__internal_e9b683c634945e3ced9877835f70d926959f113ab67f63dc3aa1d11f98b7f40e->leave($__internal_e9b683c634945e3ced9877835f70d926959f113ab67f63dc3aa1d11f98b7f40e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a3558b68e75147aeb48e284f7ad37fd8bc4a689b2b66a159132954ea504b7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3558b68e75147aeb48e284f7ad37fd8bc4a689b2b66a159132954ea504b7b4->enter($__internal_0a3558b68e75147aeb48e284f7ad37fd8bc4a689b2b66a159132954ea504b7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03fe16961915d8308f247b551ecc1fe1fa8b331af538d950b46433d4c4f0d70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fe16961915d8308f247b551ecc1fe1fa8b331af538d950b46433d4c4f0d70c->enter($__internal_03fe16961915d8308f247b551ecc1fe1fa8b331af538d950b46433d4c4f0d70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03fe16961915d8308f247b551ecc1fe1fa8b331af538d950b46433d4c4f0d70c->leave($__internal_03fe16961915d8308f247b551ecc1fe1fa8b331af538d950b46433d4c4f0d70c_prof);

        
        $__internal_0a3558b68e75147aeb48e284f7ad37fd8bc4a689b2b66a159132954ea504b7b4->leave($__internal_0a3558b68e75147aeb48e284f7ad37fd8bc4a689b2b66a159132954ea504b7b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d325e8a4a9d19910264c2d8cabd82c3b48c07b3bc8459aedd342979fa23605a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d325e8a4a9d19910264c2d8cabd82c3b48c07b3bc8459aedd342979fa23605a->enter($__internal_0d325e8a4a9d19910264c2d8cabd82c3b48c07b3bc8459aedd342979fa23605a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c93f1b0ca706c8adc81e644b17febacca54cb71f902c81b58a091b088e53c347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93f1b0ca706c8adc81e644b17febacca54cb71f902c81b58a091b088e53c347->enter($__internal_c93f1b0ca706c8adc81e644b17febacca54cb71f902c81b58a091b088e53c347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c93f1b0ca706c8adc81e644b17febacca54cb71f902c81b58a091b088e53c347->leave($__internal_c93f1b0ca706c8adc81e644b17febacca54cb71f902c81b58a091b088e53c347_prof);

        
        $__internal_0d325e8a4a9d19910264c2d8cabd82c3b48c07b3bc8459aedd342979fa23605a->leave($__internal_0d325e8a4a9d19910264c2d8cabd82c3b48c07b3bc8459aedd342979fa23605a_prof);

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
