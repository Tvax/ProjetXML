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
        $__internal_3b1d0311a3a3e0dcedc8232d55628181a5ef17a1745e4fd63ce80307a0a07121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1d0311a3a3e0dcedc8232d55628181a5ef17a1745e4fd63ce80307a0a07121->enter($__internal_3b1d0311a3a3e0dcedc8232d55628181a5ef17a1745e4fd63ce80307a0a07121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e527c83ef6e049986c97817a6815fc4e0d698c2a8672103b353837c7ab843ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e527c83ef6e049986c97817a6815fc4e0d698c2a8672103b353837c7ab843ef4->enter($__internal_e527c83ef6e049986c97817a6815fc4e0d698c2a8672103b353837c7ab843ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b1d0311a3a3e0dcedc8232d55628181a5ef17a1745e4fd63ce80307a0a07121->leave($__internal_3b1d0311a3a3e0dcedc8232d55628181a5ef17a1745e4fd63ce80307a0a07121_prof);

        
        $__internal_e527c83ef6e049986c97817a6815fc4e0d698c2a8672103b353837c7ab843ef4->leave($__internal_e527c83ef6e049986c97817a6815fc4e0d698c2a8672103b353837c7ab843ef4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d7c89ffea757ac35f42487b698f71a3825f256979ea87d6f54d78fb44727f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7c89ffea757ac35f42487b698f71a3825f256979ea87d6f54d78fb44727f27->enter($__internal_8d7c89ffea757ac35f42487b698f71a3825f256979ea87d6f54d78fb44727f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e97d063008720e67281f1f3d1b7fa045e1a6e66778dbed3f3ded23de7c56b9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97d063008720e67281f1f3d1b7fa045e1a6e66778dbed3f3ded23de7c56b9ca->enter($__internal_e97d063008720e67281f1f3d1b7fa045e1a6e66778dbed3f3ded23de7c56b9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e97d063008720e67281f1f3d1b7fa045e1a6e66778dbed3f3ded23de7c56b9ca->leave($__internal_e97d063008720e67281f1f3d1b7fa045e1a6e66778dbed3f3ded23de7c56b9ca_prof);

        
        $__internal_8d7c89ffea757ac35f42487b698f71a3825f256979ea87d6f54d78fb44727f27->leave($__internal_8d7c89ffea757ac35f42487b698f71a3825f256979ea87d6f54d78fb44727f27_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb0d8fc2b53887db9359433533ce3dc66d9bf59c2c432860aed26acf10b48dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0d8fc2b53887db9359433533ce3dc66d9bf59c2c432860aed26acf10b48dca->enter($__internal_cb0d8fc2b53887db9359433533ce3dc66d9bf59c2c432860aed26acf10b48dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1ffce371955b9ee717ac921e7c4fcbdbecd568efdb4ba6c383a30b63b36a08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ffce371955b9ee717ac921e7c4fcbdbecd568efdb4ba6c383a30b63b36a08f->enter($__internal_b1ffce371955b9ee717ac921e7c4fcbdbecd568efdb4ba6c383a30b63b36a08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b1ffce371955b9ee717ac921e7c4fcbdbecd568efdb4ba6c383a30b63b36a08f->leave($__internal_b1ffce371955b9ee717ac921e7c4fcbdbecd568efdb4ba6c383a30b63b36a08f_prof);

        
        $__internal_cb0d8fc2b53887db9359433533ce3dc66d9bf59c2c432860aed26acf10b48dca->leave($__internal_cb0d8fc2b53887db9359433533ce3dc66d9bf59c2c432860aed26acf10b48dca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6443a7e57bd6e6c0831b44616046e777c2066a0ff4561c0b202bac839ab0e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6443a7e57bd6e6c0831b44616046e777c2066a0ff4561c0b202bac839ab0e6e->enter($__internal_b6443a7e57bd6e6c0831b44616046e777c2066a0ff4561c0b202bac839ab0e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e700015fc817f7de8e0f8df9571f8326e3785087331ab02d611487e570db7535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e700015fc817f7de8e0f8df9571f8326e3785087331ab02d611487e570db7535->enter($__internal_e700015fc817f7de8e0f8df9571f8326e3785087331ab02d611487e570db7535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e700015fc817f7de8e0f8df9571f8326e3785087331ab02d611487e570db7535->leave($__internal_e700015fc817f7de8e0f8df9571f8326e3785087331ab02d611487e570db7535_prof);

        
        $__internal_b6443a7e57bd6e6c0831b44616046e777c2066a0ff4561c0b202bac839ab0e6e->leave($__internal_b6443a7e57bd6e6c0831b44616046e777c2066a0ff4561c0b202bac839ab0e6e_prof);

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
