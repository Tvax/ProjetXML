<?php

/* default/not_connected.php.twig */
class __TwigTemplate_fd0f72c79644be42089f95c0849d212056d281d53a580352af978724fda5b277 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login.html.twig", "default/not_connected.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94e9fd2cd3678ef697e0f15491545d9509e6f2fd936b915df68e28374a133555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e9fd2cd3678ef697e0f15491545d9509e6f2fd936b915df68e28374a133555->enter($__internal_94e9fd2cd3678ef697e0f15491545d9509e6f2fd936b915df68e28374a133555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/not_connected.php.twig"));

        $__internal_0cc5a7f665b7134b4d4993393ec67de8a2f02bb8449f61268d6d84fdedac2ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc5a7f665b7134b4d4993393ec67de8a2f02bb8449f61268d6d84fdedac2ef7->enter($__internal_0cc5a7f665b7134b4d4993393ec67de8a2f02bb8449f61268d6d84fdedac2ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/not_connected.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94e9fd2cd3678ef697e0f15491545d9509e6f2fd936b915df68e28374a133555->leave($__internal_94e9fd2cd3678ef697e0f15491545d9509e6f2fd936b915df68e28374a133555_prof);

        
        $__internal_0cc5a7f665b7134b4d4993393ec67de8a2f02bb8449f61268d6d84fdedac2ef7->leave($__internal_0cc5a7f665b7134b4d4993393ec67de8a2f02bb8449f61268d6d84fdedac2ef7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec83d39af376b213fa27025ab8cc3f60211c957cc41c4c0f86e9b8f90fcac474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec83d39af376b213fa27025ab8cc3f60211c957cc41c4c0f86e9b8f90fcac474->enter($__internal_ec83d39af376b213fa27025ab8cc3f60211c957cc41c4c0f86e9b8f90fcac474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ce58fe691e3813e385575d7ebcf2dbf898cafaab144c012f238fda874a811d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce58fe691e3813e385575d7ebcf2dbf898cafaab144c012f238fda874a811d3->enter($__internal_4ce58fe691e3813e385575d7ebcf2dbf898cafaab144c012f238fda874a811d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_4ce58fe691e3813e385575d7ebcf2dbf898cafaab144c012f238fda874a811d3->leave($__internal_4ce58fe691e3813e385575d7ebcf2dbf898cafaab144c012f238fda874a811d3_prof);

        
        $__internal_ec83d39af376b213fa27025ab8cc3f60211c957cc41c4c0f86e9b8f90fcac474->leave($__internal_ec83d39af376b213fa27025ab8cc3f60211c957cc41c4c0f86e9b8f90fcac474_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_76ded4e45d565bd5d2023f2b9b815235a38b7fb6f49a4829a8b98c858966b35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ded4e45d565bd5d2023f2b9b815235a38b7fb6f49a4829a8b98c858966b35f->enter($__internal_76ded4e45d565bd5d2023f2b9b815235a38b7fb6f49a4829a8b98c858966b35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_3e37263a616dc708f0b23ed685258c183c9b8c549119390065eee59d7d8d46e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e37263a616dc708f0b23ed685258c183c9b8c549119390065eee59d7d8d46e8->enter($__internal_3e37263a616dc708f0b23ed685258c183c9b8c549119390065eee59d7d8d46e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        echo "    <li class=\"btn nav-item btn-success\">
        <a class=\"nav-link\" href=\"#\">Login</a>
    </li>
";
        
        $__internal_3e37263a616dc708f0b23ed685258c183c9b8c549119390065eee59d7d8d46e8->leave($__internal_3e37263a616dc708f0b23ed685258c183c9b8c549119390065eee59d7d8d46e8_prof);

        
        $__internal_76ded4e45d565bd5d2023f2b9b815235a38b7fb6f49a4829a8b98c858966b35f->leave($__internal_76ded4e45d565bd5d2023f2b9b815235a38b7fb6f49a4829a8b98c858966b35f_prof);

    }

    public function getTemplateName()
    {
        return "default/not_connected.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'login.html.twig' %}

{% block title %}Home{% endblock %}

{% block navbar %}
    <li class=\"btn nav-item btn-success\">
        <a class=\"nav-link\" href=\"#\">Login</a>
    </li>
{% endblock %}
", "default/not_connected.php.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/templates/default/not_connected.php.twig");
    }
}
