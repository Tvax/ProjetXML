<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8c4522326ccca99d74112ce7d1e69da4e06fe81a47f51d8e608e4cb9709faf8d extends Twig_Template
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
        $__internal_7139a3fe69412092569535fbcd63351c2254d9090ed761b835882b81261c38dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7139a3fe69412092569535fbcd63351c2254d9090ed761b835882b81261c38dd->enter($__internal_7139a3fe69412092569535fbcd63351c2254d9090ed761b835882b81261c38dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c8424bcd8d89ac9fbfaed956880c46addf417bb27e6ef42d166aa89bf20b17f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8424bcd8d89ac9fbfaed956880c46addf417bb27e6ef42d166aa89bf20b17f8->enter($__internal_c8424bcd8d89ac9fbfaed956880c46addf417bb27e6ef42d166aa89bf20b17f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7139a3fe69412092569535fbcd63351c2254d9090ed761b835882b81261c38dd->leave($__internal_7139a3fe69412092569535fbcd63351c2254d9090ed761b835882b81261c38dd_prof);

        
        $__internal_c8424bcd8d89ac9fbfaed956880c46addf417bb27e6ef42d166aa89bf20b17f8->leave($__internal_c8424bcd8d89ac9fbfaed956880c46addf417bb27e6ef42d166aa89bf20b17f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72712b1e2a05f0dd0e68dab6016d62aae84e455436dc6c012fdee60a16a17176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72712b1e2a05f0dd0e68dab6016d62aae84e455436dc6c012fdee60a16a17176->enter($__internal_72712b1e2a05f0dd0e68dab6016d62aae84e455436dc6c012fdee60a16a17176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9752eb6b76bd9fed8319993250eb025f29ac35a16786fc22f291e9a827ebbb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9752eb6b76bd9fed8319993250eb025f29ac35a16786fc22f291e9a827ebbb94->enter($__internal_9752eb6b76bd9fed8319993250eb025f29ac35a16786fc22f291e9a827ebbb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9752eb6b76bd9fed8319993250eb025f29ac35a16786fc22f291e9a827ebbb94->leave($__internal_9752eb6b76bd9fed8319993250eb025f29ac35a16786fc22f291e9a827ebbb94_prof);

        
        $__internal_72712b1e2a05f0dd0e68dab6016d62aae84e455436dc6c012fdee60a16a17176->leave($__internal_72712b1e2a05f0dd0e68dab6016d62aae84e455436dc6c012fdee60a16a17176_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/teiva/Documents/Cours/Papon/modelManager/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
