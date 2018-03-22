<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_dff87d1c4b86f36989703c98abf327382c9a6015e814891aac2cdd4eb94ab36a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_872802c74873f69c851dfcb4020b7f17f7ad27867e89a63e230b88c1f60b8853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872802c74873f69c851dfcb4020b7f17f7ad27867e89a63e230b88c1f60b8853->enter($__internal_872802c74873f69c851dfcb4020b7f17f7ad27867e89a63e230b88c1f60b8853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_daf08fb1db37e372f7ebbba2bc325dfe924e0b1805690f96842bccbb398cb37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf08fb1db37e372f7ebbba2bc325dfe924e0b1805690f96842bccbb398cb37e->enter($__internal_daf08fb1db37e372f7ebbba2bc325dfe924e0b1805690f96842bccbb398cb37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872802c74873f69c851dfcb4020b7f17f7ad27867e89a63e230b88c1f60b8853->leave($__internal_872802c74873f69c851dfcb4020b7f17f7ad27867e89a63e230b88c1f60b8853_prof);

        
        $__internal_daf08fb1db37e372f7ebbba2bc325dfe924e0b1805690f96842bccbb398cb37e->leave($__internal_daf08fb1db37e372f7ebbba2bc325dfe924e0b1805690f96842bccbb398cb37e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_306b1c84c6484ac8a4182322fad3b44b2bad7b303e198739831745af4760b87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306b1c84c6484ac8a4182322fad3b44b2bad7b303e198739831745af4760b87e->enter($__internal_306b1c84c6484ac8a4182322fad3b44b2bad7b303e198739831745af4760b87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2edb4b5ebbda1a51fd457a9f3a115a15c50c614d011f1d8db9962815b12ae915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edb4b5ebbda1a51fd457a9f3a115a15c50c614d011f1d8db9962815b12ae915->enter($__internal_2edb4b5ebbda1a51fd457a9f3a115a15c50c614d011f1d8db9962815b12ae915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2edb4b5ebbda1a51fd457a9f3a115a15c50c614d011f1d8db9962815b12ae915->leave($__internal_2edb4b5ebbda1a51fd457a9f3a115a15c50c614d011f1d8db9962815b12ae915_prof);

        
        $__internal_306b1c84c6484ac8a4182322fad3b44b2bad7b303e198739831745af4760b87e->leave($__internal_306b1c84c6484ac8a4182322fad3b44b2bad7b303e198739831745af4760b87e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/teiva/Documents/Projet-Papon/modelManager/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
