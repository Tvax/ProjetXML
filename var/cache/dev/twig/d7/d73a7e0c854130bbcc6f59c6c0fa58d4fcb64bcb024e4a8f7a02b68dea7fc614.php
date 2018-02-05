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
        $__internal_5973705a9c58730116151e11ec3568fee007d1f36f1d419042a902c9c7b8225f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5973705a9c58730116151e11ec3568fee007d1f36f1d419042a902c9c7b8225f->enter($__internal_5973705a9c58730116151e11ec3568fee007d1f36f1d419042a902c9c7b8225f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fa1679efb135642511331d4da09326bde9e0343d854ed93cd67986d6bc857aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1679efb135642511331d4da09326bde9e0343d854ed93cd67986d6bc857aa1->enter($__internal_fa1679efb135642511331d4da09326bde9e0343d854ed93cd67986d6bc857aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5973705a9c58730116151e11ec3568fee007d1f36f1d419042a902c9c7b8225f->leave($__internal_5973705a9c58730116151e11ec3568fee007d1f36f1d419042a902c9c7b8225f_prof);

        
        $__internal_fa1679efb135642511331d4da09326bde9e0343d854ed93cd67986d6bc857aa1->leave($__internal_fa1679efb135642511331d4da09326bde9e0343d854ed93cd67986d6bc857aa1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a73ee72d6678a3e4f8b5e8acf70aa6a404caf682804f5d2bb47a4a18703d762f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73ee72d6678a3e4f8b5e8acf70aa6a404caf682804f5d2bb47a4a18703d762f->enter($__internal_a73ee72d6678a3e4f8b5e8acf70aa6a404caf682804f5d2bb47a4a18703d762f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c756049b94dbf98ca08302b8f7233324ce6f829a3a4157ea11927dda101f625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c756049b94dbf98ca08302b8f7233324ce6f829a3a4157ea11927dda101f625->enter($__internal_7c756049b94dbf98ca08302b8f7233324ce6f829a3a4157ea11927dda101f625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7c756049b94dbf98ca08302b8f7233324ce6f829a3a4157ea11927dda101f625->leave($__internal_7c756049b94dbf98ca08302b8f7233324ce6f829a3a4157ea11927dda101f625_prof);

        
        $__internal_a73ee72d6678a3e4f8b5e8acf70aa6a404caf682804f5d2bb47a4a18703d762f->leave($__internal_a73ee72d6678a3e4f8b5e8acf70aa6a404caf682804f5d2bb47a4a18703d762f_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/teiva/Documents/ProjetXML/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
