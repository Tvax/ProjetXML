<?php

/* default/validate.php.twig */
class __TwigTemplate_3042024e5392186e6b805752684388d1c64fde16e00e61597d1cb68c4b55c80e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/validate.php.twig", 1);
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
        $__internal_c0a8153cd32e86b5c8d400c102189649bfece5a613a25cac963b64523bed9639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a8153cd32e86b5c8d400c102189649bfece5a613a25cac963b64523bed9639->enter($__internal_c0a8153cd32e86b5c8d400c102189649bfece5a613a25cac963b64523bed9639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $__internal_3aed2a4da512960d45e89cedd0e586a7b81aba427bc36eb772f8015b11cc3392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aed2a4da512960d45e89cedd0e586a7b81aba427bc36eb772f8015b11cc3392->enter($__internal_3aed2a4da512960d45e89cedd0e586a7b81aba427bc36eb772f8015b11cc3392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/validate.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a8153cd32e86b5c8d400c102189649bfece5a613a25cac963b64523bed9639->leave($__internal_c0a8153cd32e86b5c8d400c102189649bfece5a613a25cac963b64523bed9639_prof);

        
        $__internal_3aed2a4da512960d45e89cedd0e586a7b81aba427bc36eb772f8015b11cc3392->leave($__internal_3aed2a4da512960d45e89cedd0e586a7b81aba427bc36eb772f8015b11cc3392_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_149a62af2a60005b67dbf130cee5055ff8b5e5e4be539606987956f3e837b25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149a62af2a60005b67dbf130cee5055ff8b5e5e4be539606987956f3e837b25b->enter($__internal_149a62af2a60005b67dbf130cee5055ff8b5e5e4be539606987956f3e837b25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dffff37ef9fd8ecaa400417efb5d9d36fea610fbdca6b1b762f0fb1aba407211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dffff37ef9fd8ecaa400417efb5d9d36fea610fbdca6b1b762f0fb1aba407211->enter($__internal_dffff37ef9fd8ecaa400417efb5d9d36fea610fbdca6b1b762f0fb1aba407211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Validate";
        
        $__internal_dffff37ef9fd8ecaa400417efb5d9d36fea610fbdca6b1b762f0fb1aba407211->leave($__internal_dffff37ef9fd8ecaa400417efb5d9d36fea610fbdca6b1b762f0fb1aba407211_prof);

        
        $__internal_149a62af2a60005b67dbf130cee5055ff8b5e5e4be539606987956f3e837b25b->leave($__internal_149a62af2a60005b67dbf130cee5055ff8b5e5e4be539606987956f3e837b25b_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_765bd490c650f66225ca6dd1851ff1acd597be496e63bbd008dd00f60f47d205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765bd490c650f66225ca6dd1851ff1acd597be496e63bbd008dd00f60f47d205->enter($__internal_765bd490c650f66225ca6dd1851ff1acd597be496e63bbd008dd00f60f47d205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2938f7168456a595ebd8c198f641e70d3e8da19d47ec1dc98c94e2c90b7c779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2938f7168456a595ebd8c198f641e70d3e8da19d47ec1dc98c94e2c90b7c779->enter($__internal_b2938f7168456a595ebd8c198f641e70d3e8da19d47ec1dc98c94e2c90b7c779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "validation
";
        
        $__internal_b2938f7168456a595ebd8c198f641e70d3e8da19d47ec1dc98c94e2c90b7c779->leave($__internal_b2938f7168456a595ebd8c198f641e70d3e8da19d47ec1dc98c94e2c90b7c779_prof);

        
        $__internal_765bd490c650f66225ca6dd1851ff1acd597be496e63bbd008dd00f60f47d205->leave($__internal_765bd490c650f66225ca6dd1851ff1acd597be496e63bbd008dd00f60f47d205_prof);

    }

    public function getTemplateName()
    {
        return "default/validate.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  59 => 20,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Validate{% endblock %}

{#{% block navbar %}#}
    {#<li class=\"btn nav-item active\">#}
        {#<a class=\"nav-link\" href=\"/validate\">Validate</a>#}
    {#</li>#}

    {#{% if isAdmin %}#}
        {#<li class=\"btn nav-item active\">#}
            {#<a class=\"nav-link\" href=\"/admin\">Admin</a>#}
        {#</li>#}
    {#{% endif %}#}
{#<li class=\"btn nav-item btn-danger active\">#}
    {#<a class=\"nav-link\" href=\"/?disconnect=true\">Disconnect</a>#}
{#</li>#}
{#{% endblock %}#}

{% block body %}
validation
{% endblock %}
", "default/validate.php.twig", "/home/teiva/Documents/ProjetXML/templates/default/validate.php.twig");
    }
}
