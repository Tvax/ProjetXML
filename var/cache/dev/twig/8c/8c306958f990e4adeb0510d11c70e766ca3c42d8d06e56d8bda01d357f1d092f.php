<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_36698f9da6abdf33ab7cd0f3d07a1695114ec25be21f9a529662aa1b79bf7df2 extends Twig_Template
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
        $__internal_17c0fa3155473b5fb3d683b1b8a570cbc0854db8717e33e93a31929d1bfd3254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c0fa3155473b5fb3d683b1b8a570cbc0854db8717e33e93a31929d1bfd3254->enter($__internal_17c0fa3155473b5fb3d683b1b8a570cbc0854db8717e33e93a31929d1bfd3254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f93864b21f48a96b69a6b9ae6d87322b06f538477cc2771ecc9e5915d437178f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93864b21f48a96b69a6b9ae6d87322b06f538477cc2771ecc9e5915d437178f->enter($__internal_f93864b21f48a96b69a6b9ae6d87322b06f538477cc2771ecc9e5915d437178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c0fa3155473b5fb3d683b1b8a570cbc0854db8717e33e93a31929d1bfd3254->leave($__internal_17c0fa3155473b5fb3d683b1b8a570cbc0854db8717e33e93a31929d1bfd3254_prof);

        
        $__internal_f93864b21f48a96b69a6b9ae6d87322b06f538477cc2771ecc9e5915d437178f->leave($__internal_f93864b21f48a96b69a6b9ae6d87322b06f538477cc2771ecc9e5915d437178f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2cc80095a0ae1a1054a7dee5718df77554bac362c03673dc307aa3b1ec8a3995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc80095a0ae1a1054a7dee5718df77554bac362c03673dc307aa3b1ec8a3995->enter($__internal_2cc80095a0ae1a1054a7dee5718df77554bac362c03673dc307aa3b1ec8a3995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd2a718b145f547b44a9eaa318c8f44c6998e66a531070ad45a081161b80c0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2a718b145f547b44a9eaa318c8f44c6998e66a531070ad45a081161b80c0a9->enter($__internal_fd2a718b145f547b44a9eaa318c8f44c6998e66a531070ad45a081161b80c0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fd2a718b145f547b44a9eaa318c8f44c6998e66a531070ad45a081161b80c0a9->leave($__internal_fd2a718b145f547b44a9eaa318c8f44c6998e66a531070ad45a081161b80c0a9_prof);

        
        $__internal_2cc80095a0ae1a1054a7dee5718df77554bac362c03673dc307aa3b1ec8a3995->leave($__internal_2cc80095a0ae1a1054a7dee5718df77554bac362c03673dc307aa3b1ec8a3995_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
