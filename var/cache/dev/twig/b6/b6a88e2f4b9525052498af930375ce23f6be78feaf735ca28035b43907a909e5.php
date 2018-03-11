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
        $__internal_782650b3ff60980855dc36caf6b47302c92be6ba06178c94a3f5b208f6b91256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782650b3ff60980855dc36caf6b47302c92be6ba06178c94a3f5b208f6b91256->enter($__internal_782650b3ff60980855dc36caf6b47302c92be6ba06178c94a3f5b208f6b91256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_77b51652b9d52df153249f24b2a2b9c71ecd99ba2590739754ce6105ff3e460a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b51652b9d52df153249f24b2a2b9c71ecd99ba2590739754ce6105ff3e460a->enter($__internal_77b51652b9d52df153249f24b2a2b9c71ecd99ba2590739754ce6105ff3e460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_782650b3ff60980855dc36caf6b47302c92be6ba06178c94a3f5b208f6b91256->leave($__internal_782650b3ff60980855dc36caf6b47302c92be6ba06178c94a3f5b208f6b91256_prof);

        
        $__internal_77b51652b9d52df153249f24b2a2b9c71ecd99ba2590739754ce6105ff3e460a->leave($__internal_77b51652b9d52df153249f24b2a2b9c71ecd99ba2590739754ce6105ff3e460a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5ff05c445c033c29bae2440f55d9967de2bf8e8df0c506de296f8e7b34231f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ff05c445c033c29bae2440f55d9967de2bf8e8df0c506de296f8e7b34231f5->enter($__internal_a5ff05c445c033c29bae2440f55d9967de2bf8e8df0c506de296f8e7b34231f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d8fc5fc378d63fb925b4bcde8e7807397bb862e66b71dbcebb86677c8231516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d8fc5fc378d63fb925b4bcde8e7807397bb862e66b71dbcebb86677c8231516->enter($__internal_6d8fc5fc378d63fb925b4bcde8e7807397bb862e66b71dbcebb86677c8231516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6d8fc5fc378d63fb925b4bcde8e7807397bb862e66b71dbcebb86677c8231516->leave($__internal_6d8fc5fc378d63fb925b4bcde8e7807397bb862e66b71dbcebb86677c8231516_prof);

        
        $__internal_a5ff05c445c033c29bae2440f55d9967de2bf8e8df0c506de296f8e7b34231f5->leave($__internal_a5ff05c445c033c29bae2440f55d9967de2bf8e8df0c506de296f8e7b34231f5_prof);

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
