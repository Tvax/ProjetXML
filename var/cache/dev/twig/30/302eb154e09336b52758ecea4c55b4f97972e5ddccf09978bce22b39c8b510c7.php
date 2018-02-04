<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ea5a1342e446fa375646af5544e54923d8327a317301e8ea202675b8cf7ee16b extends Twig_Template
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
        $__internal_2c1f526e53b022587599d12a772ee2a6f9b794be107a52fc9cf41ff4fd74464c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1f526e53b022587599d12a772ee2a6f9b794be107a52fc9cf41ff4fd74464c->enter($__internal_2c1f526e53b022587599d12a772ee2a6f9b794be107a52fc9cf41ff4fd74464c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_451b63bcf45e1e5138511a619248658059cc39dda5a349f4e3272e5c322654a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451b63bcf45e1e5138511a619248658059cc39dda5a349f4e3272e5c322654a0->enter($__internal_451b63bcf45e1e5138511a619248658059cc39dda5a349f4e3272e5c322654a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2c1f526e53b022587599d12a772ee2a6f9b794be107a52fc9cf41ff4fd74464c->leave($__internal_2c1f526e53b022587599d12a772ee2a6f9b794be107a52fc9cf41ff4fd74464c_prof);

        
        $__internal_451b63bcf45e1e5138511a619248658059cc39dda5a349f4e3272e5c322654a0->leave($__internal_451b63bcf45e1e5138511a619248658059cc39dda5a349f4e3272e5c322654a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
