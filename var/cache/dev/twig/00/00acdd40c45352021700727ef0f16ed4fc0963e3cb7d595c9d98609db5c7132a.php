<?php

/* default/compare.php.twig */
class __TwigTemplate_a8cc49b58d50faac874890db492531dd1339ed2f20385b0dc6c6feb0e4f9227d extends Twig_Template
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
        $__internal_5b49e513ce205839383d27dfc9dee418d541f78159ecf7def295801ee3e99aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b49e513ce205839383d27dfc9dee418d541f78159ecf7def295801ee3e99aa9->enter($__internal_5b49e513ce205839383d27dfc9dee418d541f78159ecf7def295801ee3e99aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/compare.php.twig"));

        $__internal_88eb5819ed522251c8460947f3b65ffa405820297059614e2164b1beebb5c385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88eb5819ed522251c8460947f3b65ffa405820297059614e2164b1beebb5c385->enter($__internal_88eb5819ed522251c8460947f3b65ffa405820297059614e2164b1beebb5c385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/compare.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b49e513ce205839383d27dfc9dee418d541f78159ecf7def295801ee3e99aa9->leave($__internal_5b49e513ce205839383d27dfc9dee418d541f78159ecf7def295801ee3e99aa9_prof);

        
        $__internal_88eb5819ed522251c8460947f3b65ffa405820297059614e2164b1beebb5c385->leave($__internal_88eb5819ed522251c8460947f3b65ffa405820297059614e2164b1beebb5c385_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9ae71df9b8a7ee8c14ea0f748ad3f93e707f31979fdcc73a1e25663973df178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ae71df9b8a7ee8c14ea0f748ad3f93e707f31979fdcc73a1e25663973df178->enter($__internal_f9ae71df9b8a7ee8c14ea0f748ad3f93e707f31979fdcc73a1e25663973df178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b38343ca277da7c3ebd1f56529fc29bc48ee7e5ebf1da3a662f772ade8a8fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b38343ca277da7c3ebd1f56529fc29bc48ee7e5ebf1da3a662f772ade8a8fe5->enter($__internal_4b38343ca277da7c3ebd1f56529fc29bc48ee7e5ebf1da3a662f772ade8a8fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Compare";
        
        $__internal_4b38343ca277da7c3ebd1f56529fc29bc48ee7e5ebf1da3a662f772ade8a8fe5->leave($__internal_4b38343ca277da7c3ebd1f56529fc29bc48ee7e5ebf1da3a662f772ade8a8fe5_prof);

        
        $__internal_f9ae71df9b8a7ee8c14ea0f748ad3f93e707f31979fdcc73a1e25663973df178->leave($__internal_f9ae71df9b8a7ee8c14ea0f748ad3f93e707f31979fdcc73a1e25663973df178_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1da81d1395400977f4c4f01e3ecc5e724fb9e0a9e4bced9144732beae34cf741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da81d1395400977f4c4f01e3ecc5e724fb9e0a9e4bced9144732beae34cf741->enter($__internal_1da81d1395400977f4c4f01e3ecc5e724fb9e0a9e4bced9144732beae34cf741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d09b2144aa3d0422725623aa6ccbec7bdcced9449756bc243caa8cf9fa359d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09b2144aa3d0422725623aa6ccbec7bdcced9449756bc243caa8cf9fa359d13->enter($__internal_d09b2144aa3d0422725623aa6ccbec7bdcced9449756bc243caa8cf9fa359d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["modelComparedString"]) || array_key_exists("modelComparedString", $context) ? $context["modelComparedString"] : (function () { throw new Twig_Error_Runtime('Variable "modelComparedString" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "

";
        
        $__internal_d09b2144aa3d0422725623aa6ccbec7bdcced9449756bc243caa8cf9fa359d13->leave($__internal_d09b2144aa3d0422725623aa6ccbec7bdcced9449756bc243caa8cf9fa359d13_prof);

        
        $__internal_1da81d1395400977f4c4f01e3ecc5e724fb9e0a9e4bced9144732beae34cf741->leave($__internal_1da81d1395400977f4c4f01e3ecc5e724fb9e0a9e4bced9144732beae34cf741_prof);

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
