<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_58efa056d0f066525a1d6a946adc7ad1f80036e5a0539a8d991b0f915682d6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4a341c6a9c22bd694e20dcc0ad6eb0884359311c6758cdb268e3eed9a5d2113a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a341c6a9c22bd694e20dcc0ad6eb0884359311c6758cdb268e3eed9a5d2113a->enter($__internal_4a341c6a9c22bd694e20dcc0ad6eb0884359311c6758cdb268e3eed9a5d2113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1f1df98614485aeacf2120bb260ac9e4913659464a1ceb9a2759b68a0655df07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1df98614485aeacf2120bb260ac9e4913659464a1ceb9a2759b68a0655df07->enter($__internal_1f1df98614485aeacf2120bb260ac9e4913659464a1ceb9a2759b68a0655df07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a341c6a9c22bd694e20dcc0ad6eb0884359311c6758cdb268e3eed9a5d2113a->leave($__internal_4a341c6a9c22bd694e20dcc0ad6eb0884359311c6758cdb268e3eed9a5d2113a_prof);

        
        $__internal_1f1df98614485aeacf2120bb260ac9e4913659464a1ceb9a2759b68a0655df07->leave($__internal_1f1df98614485aeacf2120bb260ac9e4913659464a1ceb9a2759b68a0655df07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d1a4a56ab170c120f1aff6b3548458ba98f7bc541ffee834a6250b0ae0f2de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1a4a56ab170c120f1aff6b3548458ba98f7bc541ffee834a6250b0ae0f2de1->enter($__internal_0d1a4a56ab170c120f1aff6b3548458ba98f7bc541ffee834a6250b0ae0f2de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c41fb6ea4f8d585eefc042598dd137bb5110afa21856059933a3be07d9251f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c41fb6ea4f8d585eefc042598dd137bb5110afa21856059933a3be07d9251f3->enter($__internal_7c41fb6ea4f8d585eefc042598dd137bb5110afa21856059933a3be07d9251f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7c41fb6ea4f8d585eefc042598dd137bb5110afa21856059933a3be07d9251f3->leave($__internal_7c41fb6ea4f8d585eefc042598dd137bb5110afa21856059933a3be07d9251f3_prof);

        
        $__internal_0d1a4a56ab170c120f1aff6b3548458ba98f7bc541ffee834a6250b0ae0f2de1->leave($__internal_0d1a4a56ab170c120f1aff6b3548458ba98f7bc541ffee834a6250b0ae0f2de1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3eb243f6d778362aa860d6998ef74ee0c072c09526f93ac879ba221b38053007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb243f6d778362aa860d6998ef74ee0c072c09526f93ac879ba221b38053007->enter($__internal_3eb243f6d778362aa860d6998ef74ee0c072c09526f93ac879ba221b38053007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_53150e85ebc91fec85e130642d0c9d3cddc097214b6c328c410f257f38231eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53150e85ebc91fec85e130642d0c9d3cddc097214b6c328c410f257f38231eda->enter($__internal_53150e85ebc91fec85e130642d0c9d3cddc097214b6c328c410f257f38231eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_53150e85ebc91fec85e130642d0c9d3cddc097214b6c328c410f257f38231eda->leave($__internal_53150e85ebc91fec85e130642d0c9d3cddc097214b6c328c410f257f38231eda_prof);

        
        $__internal_3eb243f6d778362aa860d6998ef74ee0c072c09526f93ac879ba221b38053007->leave($__internal_3eb243f6d778362aa860d6998ef74ee0c072c09526f93ac879ba221b38053007_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_137dabaa72044d42f8a03ceeac857a17dc277d94377853d2f62f71e3ec5a7e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137dabaa72044d42f8a03ceeac857a17dc277d94377853d2f62f71e3ec5a7e1f->enter($__internal_137dabaa72044d42f8a03ceeac857a17dc277d94377853d2f62f71e3ec5a7e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f8b78c539d9da41c9f16ab263bcf333deaef9489d1260ed8f7f071cfa41d09ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b78c539d9da41c9f16ab263bcf333deaef9489d1260ed8f7f071cfa41d09ad->enter($__internal_f8b78c539d9da41c9f16ab263bcf333deaef9489d1260ed8f7f071cfa41d09ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_f8b78c539d9da41c9f16ab263bcf333deaef9489d1260ed8f7f071cfa41d09ad->leave($__internal_f8b78c539d9da41c9f16ab263bcf333deaef9489d1260ed8f7f071cfa41d09ad_prof);

        
        $__internal_137dabaa72044d42f8a03ceeac857a17dc277d94377853d2f62f71e3ec5a7e1f->leave($__internal_137dabaa72044d42f8a03ceeac857a17dc277d94377853d2f62f71e3ec5a7e1f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/teiva/Documents/Cours/Papon/modelManager/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
