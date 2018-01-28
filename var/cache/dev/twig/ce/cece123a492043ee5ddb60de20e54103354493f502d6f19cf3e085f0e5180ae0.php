<?php

/* index.php.twig */
class __TwigTemplate_e985610083a45f7615bee09af56ee474ed1bde7b2e0b5761942925fe619b5c2d extends Twig_Template
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
        $__internal_144f6ca7526659842bdad9735017b3a50ad8bb3bdb76e4e195fcaecdd611502a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144f6ca7526659842bdad9735017b3a50ad8bb3bdb76e4e195fcaecdd611502a->enter($__internal_144f6ca7526659842bdad9735017b3a50ad8bb3bdb76e4e195fcaecdd611502a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.php.twig"));

        $__internal_3ee6106bae01d41be311f353f32f9ed008890d29b64d0ea4a691c265a5d0c394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee6106bae01d41be311f353f32f9ed008890d29b64d0ea4a691c265a5d0c394->enter($__internal_3ee6106bae01d41be311f353f32f9ed008890d29b64d0ea4a691c265a5d0c394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.php.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["app_name"]) || array_key_exists("app_name", $context) ? $context["app_name"] : (function () { throw new Twig_Error_Runtime('Variable "app_name" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo " <br />

";
        
        $__internal_144f6ca7526659842bdad9735017b3a50ad8bb3bdb76e4e195fcaecdd611502a->leave($__internal_144f6ca7526659842bdad9735017b3a50ad8bb3bdb76e4e195fcaecdd611502a_prof);

        
        $__internal_3ee6106bae01d41be311f353f32f9ed008890d29b64d0ea4a691c265a5d0c394->leave($__internal_3ee6106bae01d41be311f353f32f9ed008890d29b64d0ea4a691c265a5d0c394_prof);

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
