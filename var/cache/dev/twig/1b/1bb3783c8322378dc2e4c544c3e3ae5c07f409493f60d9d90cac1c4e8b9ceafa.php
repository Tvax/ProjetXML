<?php

/* default/compare.php.twig */
class __TwigTemplate_3d5f7f8bafd87686b2e50b18b6fac8ae271a64526673c1f5f09d12cf8d5b344e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/compare.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db2a6483e990c3c0d446ce3345a13f3cfbeb197d4d0d0b34dbdb461e3d2500ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2a6483e990c3c0d446ce3345a13f3cfbeb197d4d0d0b34dbdb461e3d2500ef->enter($__internal_db2a6483e990c3c0d446ce3345a13f3cfbeb197d4d0d0b34dbdb461e3d2500ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/compare.php.twig"));

        $__internal_4d6a2e82a6f24d15d4ad2160f79d940ab4ceec4bf3be23a703798a749df83e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6a2e82a6f24d15d4ad2160f79d940ab4ceec4bf3be23a703798a749df83e78->enter($__internal_4d6a2e82a6f24d15d4ad2160f79d940ab4ceec4bf3be23a703798a749df83e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/compare.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db2a6483e990c3c0d446ce3345a13f3cfbeb197d4d0d0b34dbdb461e3d2500ef->leave($__internal_db2a6483e990c3c0d446ce3345a13f3cfbeb197d4d0d0b34dbdb461e3d2500ef_prof);

        
        $__internal_4d6a2e82a6f24d15d4ad2160f79d940ab4ceec4bf3be23a703798a749df83e78->leave($__internal_4d6a2e82a6f24d15d4ad2160f79d940ab4ceec4bf3be23a703798a749df83e78_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_155d639d6123ea0db4cd6e2eff9b3f634ebb77cd1fbb5cc4efde4b4abb13dc28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155d639d6123ea0db4cd6e2eff9b3f634ebb77cd1fbb5cc4efde4b4abb13dc28->enter($__internal_155d639d6123ea0db4cd6e2eff9b3f634ebb77cd1fbb5cc4efde4b4abb13dc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c90f4a555016b605b02158c09dfcd2a98129596221f6dd08f80bc89ff461912e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90f4a555016b605b02158c09dfcd2a98129596221f6dd08f80bc89ff461912e->enter($__internal_c90f4a555016b605b02158c09dfcd2a98129596221f6dd08f80bc89ff461912e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Compare";
        
        $__internal_c90f4a555016b605b02158c09dfcd2a98129596221f6dd08f80bc89ff461912e->leave($__internal_c90f4a555016b605b02158c09dfcd2a98129596221f6dd08f80bc89ff461912e_prof);

        
        $__internal_155d639d6123ea0db4cd6e2eff9b3f634ebb77cd1fbb5cc4efde4b4abb13dc28->leave($__internal_155d639d6123ea0db4cd6e2eff9b3f634ebb77cd1fbb5cc4efde4b4abb13dc28_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a71a257d2ae0dc6a0a438418d17e729cc327ba875f2128c80ba9503895aa7593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71a257d2ae0dc6a0a438418d17e729cc327ba875f2128c80ba9503895aa7593->enter($__internal_a71a257d2ae0dc6a0a438418d17e729cc327ba875f2128c80ba9503895aa7593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82027d33970ddb40dbaec6b90cb2511352d18eeeeca115eac9aa1dcd2d73627c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82027d33970ddb40dbaec6b90cb2511352d18eeeeca115eac9aa1dcd2d73627c->enter($__internal_82027d33970ddb40dbaec6b90cb2511352d18eeeeca115eac9aa1dcd2d73627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["modelComparedString"]) || array_key_exists("modelComparedString", $context) ? $context["modelComparedString"] : (function () { throw new Twig_Error_Runtime('Variable "modelComparedString" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "

";
        
        $__internal_82027d33970ddb40dbaec6b90cb2511352d18eeeeca115eac9aa1dcd2d73627c->leave($__internal_82027d33970ddb40dbaec6b90cb2511352d18eeeeca115eac9aa1dcd2d73627c_prof);

        
        $__internal_a71a257d2ae0dc6a0a438418d17e729cc327ba875f2128c80ba9503895aa7593->leave($__internal_a71a257d2ae0dc6a0a438418d17e729cc327ba875f2128c80ba9503895aa7593_prof);

    }

    public function getTemplateName()
    {
        return "default/compare.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Compare{% endblock %}

{% block body %}

{{ modelComparedString }}

{% endblock %}
", "default/compare.php.twig", "/home/teiva/Documents/Cours/Papon/modelManager/templates/default/compare.php.twig");
    }
}
