<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5d2817be65fb9c7e5d32fd21d943a1d307367e34e2a4dcd816292e815117b689 extends Twig_Template
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
        $__internal_1f782cbcbb537bc265c392c30fc2f91b41a3bfd7bce60601b1370e26cb422578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f782cbcbb537bc265c392c30fc2f91b41a3bfd7bce60601b1370e26cb422578->enter($__internal_1f782cbcbb537bc265c392c30fc2f91b41a3bfd7bce60601b1370e26cb422578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_072cecab438fb801a18787faf8a74826bd0a25838d613670250709d6dc8a8ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072cecab438fb801a18787faf8a74826bd0a25838d613670250709d6dc8a8ad6->enter($__internal_072cecab438fb801a18787faf8a74826bd0a25838d613670250709d6dc8a8ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f782cbcbb537bc265c392c30fc2f91b41a3bfd7bce60601b1370e26cb422578->leave($__internal_1f782cbcbb537bc265c392c30fc2f91b41a3bfd7bce60601b1370e26cb422578_prof);

        
        $__internal_072cecab438fb801a18787faf8a74826bd0a25838d613670250709d6dc8a8ad6->leave($__internal_072cecab438fb801a18787faf8a74826bd0a25838d613670250709d6dc8a8ad6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_907972a4484594386747d72bcf2d646b2bb94cb3c265942bab384f1615ca5e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907972a4484594386747d72bcf2d646b2bb94cb3c265942bab384f1615ca5e2f->enter($__internal_907972a4484594386747d72bcf2d646b2bb94cb3c265942bab384f1615ca5e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_75707a45234cb6bada5a1c948c720aaa70ee616d01899b377167f4aae0139473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75707a45234cb6bada5a1c948c720aaa70ee616d01899b377167f4aae0139473->enter($__internal_75707a45234cb6bada5a1c948c720aaa70ee616d01899b377167f4aae0139473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_75707a45234cb6bada5a1c948c720aaa70ee616d01899b377167f4aae0139473->leave($__internal_75707a45234cb6bada5a1c948c720aaa70ee616d01899b377167f4aae0139473_prof);

        
        $__internal_907972a4484594386747d72bcf2d646b2bb94cb3c265942bab384f1615ca5e2f->leave($__internal_907972a4484594386747d72bcf2d646b2bb94cb3c265942bab384f1615ca5e2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32a12a5214ff1411e63a55bceb2172e8b28a1f7e2ffcd4840c210c5547bf56e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a12a5214ff1411e63a55bceb2172e8b28a1f7e2ffcd4840c210c5547bf56e8->enter($__internal_32a12a5214ff1411e63a55bceb2172e8b28a1f7e2ffcd4840c210c5547bf56e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9a5099f6229868d0130406669be42e6a9ac99d5e1b391c3734faf12bef308836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5099f6229868d0130406669be42e6a9ac99d5e1b391c3734faf12bef308836->enter($__internal_9a5099f6229868d0130406669be42e6a9ac99d5e1b391c3734faf12bef308836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a5099f6229868d0130406669be42e6a9ac99d5e1b391c3734faf12bef308836->leave($__internal_9a5099f6229868d0130406669be42e6a9ac99d5e1b391c3734faf12bef308836_prof);

        
        $__internal_32a12a5214ff1411e63a55bceb2172e8b28a1f7e2ffcd4840c210c5547bf56e8->leave($__internal_32a12a5214ff1411e63a55bceb2172e8b28a1f7e2ffcd4840c210c5547bf56e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68e2d01e332f9666e594157b0c4b9a97b20c4fd3d9bb78cc3abd5310757a3151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e2d01e332f9666e594157b0c4b9a97b20c4fd3d9bb78cc3abd5310757a3151->enter($__internal_68e2d01e332f9666e594157b0c4b9a97b20c4fd3d9bb78cc3abd5310757a3151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a62f69c9482636db1a9e48a541978617d823dadeb358deb1473d249bc1c6a281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62f69c9482636db1a9e48a541978617d823dadeb358deb1473d249bc1c6a281->enter($__internal_a62f69c9482636db1a9e48a541978617d823dadeb358deb1473d249bc1c6a281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a62f69c9482636db1a9e48a541978617d823dadeb358deb1473d249bc1c6a281->leave($__internal_a62f69c9482636db1a9e48a541978617d823dadeb358deb1473d249bc1c6a281_prof);

        
        $__internal_68e2d01e332f9666e594157b0c4b9a97b20c4fd3d9bb78cc3abd5310757a3151->leave($__internal_68e2d01e332f9666e594157b0c4b9a97b20c4fd3d9bb78cc3abd5310757a3151_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
