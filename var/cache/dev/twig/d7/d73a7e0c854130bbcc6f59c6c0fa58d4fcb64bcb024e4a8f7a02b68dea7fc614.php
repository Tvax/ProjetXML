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
        $__internal_488446c0cf74ab10856f5fe8e9178114e553a454aeb528253a17418f033766ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488446c0cf74ab10856f5fe8e9178114e553a454aeb528253a17418f033766ef->enter($__internal_488446c0cf74ab10856f5fe8e9178114e553a454aeb528253a17418f033766ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_244afd63645c776ea269e7e829e3864d75a9de9389f6168128cc2574beaf79f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244afd63645c776ea269e7e829e3864d75a9de9389f6168128cc2574beaf79f9->enter($__internal_244afd63645c776ea269e7e829e3864d75a9de9389f6168128cc2574beaf79f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_488446c0cf74ab10856f5fe8e9178114e553a454aeb528253a17418f033766ef->leave($__internal_488446c0cf74ab10856f5fe8e9178114e553a454aeb528253a17418f033766ef_prof);

        
        $__internal_244afd63645c776ea269e7e829e3864d75a9de9389f6168128cc2574beaf79f9->leave($__internal_244afd63645c776ea269e7e829e3864d75a9de9389f6168128cc2574beaf79f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f9a7fab0454b6a43e77b2d24f2f1dd0470e722363c6bf82c82520d6c28d5f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9a7fab0454b6a43e77b2d24f2f1dd0470e722363c6bf82c82520d6c28d5f5c->enter($__internal_2f9a7fab0454b6a43e77b2d24f2f1dd0470e722363c6bf82c82520d6c28d5f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a9725208fe2226e85dfd073ca3b78e0a328436d094f0981af4e5c144697705d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9725208fe2226e85dfd073ca3b78e0a328436d094f0981af4e5c144697705d8->enter($__internal_a9725208fe2226e85dfd073ca3b78e0a328436d094f0981af4e5c144697705d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a9725208fe2226e85dfd073ca3b78e0a328436d094f0981af4e5c144697705d8->leave($__internal_a9725208fe2226e85dfd073ca3b78e0a328436d094f0981af4e5c144697705d8_prof);

        
        $__internal_2f9a7fab0454b6a43e77b2d24f2f1dd0470e722363c6bf82c82520d6c28d5f5c->leave($__internal_2f9a7fab0454b6a43e77b2d24f2f1dd0470e722363c6bf82c82520d6c28d5f5c_prof);

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
