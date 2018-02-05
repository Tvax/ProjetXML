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
        $__internal_f7d0329a913f7f73cd87944e6347981c98fb2ca0e0bdd68cc7bb3c8660816d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d0329a913f7f73cd87944e6347981c98fb2ca0e0bdd68cc7bb3c8660816d1c->enter($__internal_f7d0329a913f7f73cd87944e6347981c98fb2ca0e0bdd68cc7bb3c8660816d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_050bc561eb04a4f2539ab815d5b34d1710ee2d74443039eea1ffbc522207c5b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050bc561eb04a4f2539ab815d5b34d1710ee2d74443039eea1ffbc522207c5b9->enter($__internal_050bc561eb04a4f2539ab815d5b34d1710ee2d74443039eea1ffbc522207c5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d0329a913f7f73cd87944e6347981c98fb2ca0e0bdd68cc7bb3c8660816d1c->leave($__internal_f7d0329a913f7f73cd87944e6347981c98fb2ca0e0bdd68cc7bb3c8660816d1c_prof);

        
        $__internal_050bc561eb04a4f2539ab815d5b34d1710ee2d74443039eea1ffbc522207c5b9->leave($__internal_050bc561eb04a4f2539ab815d5b34d1710ee2d74443039eea1ffbc522207c5b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_742cd241474937756518c1e2acd2a4ee72bb0100daf6dfdda4be67a64b5bc13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742cd241474937756518c1e2acd2a4ee72bb0100daf6dfdda4be67a64b5bc13f->enter($__internal_742cd241474937756518c1e2acd2a4ee72bb0100daf6dfdda4be67a64b5bc13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3a55e0c51ae2d492037b7bb1df4d740615b2b771e8bc85674313384d4a8a301f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a55e0c51ae2d492037b7bb1df4d740615b2b771e8bc85674313384d4a8a301f->enter($__internal_3a55e0c51ae2d492037b7bb1df4d740615b2b771e8bc85674313384d4a8a301f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3a55e0c51ae2d492037b7bb1df4d740615b2b771e8bc85674313384d4a8a301f->leave($__internal_3a55e0c51ae2d492037b7bb1df4d740615b2b771e8bc85674313384d4a8a301f_prof);

        
        $__internal_742cd241474937756518c1e2acd2a4ee72bb0100daf6dfdda4be67a64b5bc13f->leave($__internal_742cd241474937756518c1e2acd2a4ee72bb0100daf6dfdda4be67a64b5bc13f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d38d43330bc7208f2193b093a0c2ce8acad4ee6c7e6f3efba9cd31d5c783ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d38d43330bc7208f2193b093a0c2ce8acad4ee6c7e6f3efba9cd31d5c783ef4->enter($__internal_9d38d43330bc7208f2193b093a0c2ce8acad4ee6c7e6f3efba9cd31d5c783ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f739c132699699ea66055d153da2f367e064a8e8395e6cd48894c221e587813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f739c132699699ea66055d153da2f367e064a8e8395e6cd48894c221e587813->enter($__internal_4f739c132699699ea66055d153da2f367e064a8e8395e6cd48894c221e587813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f739c132699699ea66055d153da2f367e064a8e8395e6cd48894c221e587813->leave($__internal_4f739c132699699ea66055d153da2f367e064a8e8395e6cd48894c221e587813_prof);

        
        $__internal_9d38d43330bc7208f2193b093a0c2ce8acad4ee6c7e6f3efba9cd31d5c783ef4->leave($__internal_9d38d43330bc7208f2193b093a0c2ce8acad4ee6c7e6f3efba9cd31d5c783ef4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dcfb8c349006f673fdb483a0de737d43abf7383de106a06ea75f9a87376143c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfb8c349006f673fdb483a0de737d43abf7383de106a06ea75f9a87376143c9->enter($__internal_dcfb8c349006f673fdb483a0de737d43abf7383de106a06ea75f9a87376143c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ad533718e9e93344c45b1c7bd345c5f10731e001f891cd4428acd0b1940f8b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad533718e9e93344c45b1c7bd345c5f10731e001f891cd4428acd0b1940f8b28->enter($__internal_ad533718e9e93344c45b1c7bd345c5f10731e001f891cd4428acd0b1940f8b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ad533718e9e93344c45b1c7bd345c5f10731e001f891cd4428acd0b1940f8b28->leave($__internal_ad533718e9e93344c45b1c7bd345c5f10731e001f891cd4428acd0b1940f8b28_prof);

        
        $__internal_dcfb8c349006f673fdb483a0de737d43abf7383de106a06ea75f9a87376143c9->leave($__internal_dcfb8c349006f673fdb483a0de737d43abf7383de106a06ea75f9a87376143c9_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/teiva/Documents/ProjetXML/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
