<?php

/* index.php.twig */
class __TwigTemplate_9c298c4be465e2881f36793223f78a4b3eca5fa57925026c1baab04f3e506ccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36b3dc709ae938efe2b4fe16a662a547c0e10170a1164f7dbce85d543d3318f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b3dc709ae938efe2b4fe16a662a547c0e10170a1164f7dbce85d543d3318f7->enter($__internal_36b3dc709ae938efe2b4fe16a662a547c0e10170a1164f7dbce85d543d3318f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.php.twig"));

        $__internal_edbdd85f04b7d53ce6ed9c58b4dd44e63d486adbdc35407b62c1b5560dd8aaf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbdd85f04b7d53ce6ed9c58b4dd44e63d486adbdc35407b62c1b5560dd8aaf7->enter($__internal_edbdd85f04b7d53ce6ed9c58b4dd44e63d486adbdc35407b62c1b5560dd8aaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.php.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new Twig_Error_Runtime('Variable "app_name" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo " <br />

";
        
        $__internal_36b3dc709ae938efe2b4fe16a662a547c0e10170a1164f7dbce85d543d3318f7->leave($__internal_36b3dc709ae938efe2b4fe16a662a547c0e10170a1164f7dbce85d543d3318f7_prof);

        
        $__internal_edbdd85f04b7d53ce6ed9c58b4dd44e63d486adbdc35407b62c1b5560dd8aaf7->leave($__internal_edbdd85f04b7d53ce6ed9c58b4dd44e63d486adbdc35407b62c1b5560dd8aaf7_prof);

    }

    public function getTemplateName()
    {
        return "index.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ app_name }} <br />

", "index.php.twig", "/home/teiva/Documents/Cours/Papon/my-project/templates/index.php.twig");
    }
}
