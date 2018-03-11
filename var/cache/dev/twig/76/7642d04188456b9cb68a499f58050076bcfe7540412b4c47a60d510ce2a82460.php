<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e0f02a76a09bfe4bf2cf92c20cf699909424920e26d9a9d6d430c521b504bdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7608ed636e4466e396001204eeddcf22fd8ad19eb175bb228b285d1de05b4d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7608ed636e4466e396001204eeddcf22fd8ad19eb175bb228b285d1de05b4d5d->enter($__internal_7608ed636e4466e396001204eeddcf22fd8ad19eb175bb228b285d1de05b4d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e5ab11946f913cab28d2273442332dd4e5e7db1865647aa90a1e69f02d3d624e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ab11946f913cab28d2273442332dd4e5e7db1865647aa90a1e69f02d3d624e->enter($__internal_e5ab11946f913cab28d2273442332dd4e5e7db1865647aa90a1e69f02d3d624e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7608ed636e4466e396001204eeddcf22fd8ad19eb175bb228b285d1de05b4d5d->leave($__internal_7608ed636e4466e396001204eeddcf22fd8ad19eb175bb228b285d1de05b4d5d_prof);

        
        $__internal_e5ab11946f913cab28d2273442332dd4e5e7db1865647aa90a1e69f02d3d624e->leave($__internal_e5ab11946f913cab28d2273442332dd4e5e7db1865647aa90a1e69f02d3d624e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6a7e08e363f4a8a73c7fa28d413e8f4352f1cab36c674d68ecf6f85f3387856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a7e08e363f4a8a73c7fa28d413e8f4352f1cab36c674d68ecf6f85f3387856->enter($__internal_f6a7e08e363f4a8a73c7fa28d413e8f4352f1cab36c674d68ecf6f85f3387856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6306036633e57992ffa3fbfdce954119da65b009ebcf02dcc37ebafd48731fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6306036633e57992ffa3fbfdce954119da65b009ebcf02dcc37ebafd48731fc->enter($__internal_e6306036633e57992ffa3fbfdce954119da65b009ebcf02dcc37ebafd48731fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e6306036633e57992ffa3fbfdce954119da65b009ebcf02dcc37ebafd48731fc->leave($__internal_e6306036633e57992ffa3fbfdce954119da65b009ebcf02dcc37ebafd48731fc_prof);

        
        $__internal_f6a7e08e363f4a8a73c7fa28d413e8f4352f1cab36c674d68ecf6f85f3387856->leave($__internal_f6a7e08e363f4a8a73c7fa28d413e8f4352f1cab36c674d68ecf6f85f3387856_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_789aa3811757617b254790e5578f4f60338f6c68ba09fbfd0abe59e86d4b4e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789aa3811757617b254790e5578f4f60338f6c68ba09fbfd0abe59e86d4b4e88->enter($__internal_789aa3811757617b254790e5578f4f60338f6c68ba09fbfd0abe59e86d4b4e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a86c495961bd9e24f011de99e5b15c763f3921706951ffbff8a8c548522d3a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86c495961bd9e24f011de99e5b15c763f3921706951ffbff8a8c548522d3a75->enter($__internal_a86c495961bd9e24f011de99e5b15c763f3921706951ffbff8a8c548522d3a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a86c495961bd9e24f011de99e5b15c763f3921706951ffbff8a8c548522d3a75->leave($__internal_a86c495961bd9e24f011de99e5b15c763f3921706951ffbff8a8c548522d3a75_prof);

        
        $__internal_789aa3811757617b254790e5578f4f60338f6c68ba09fbfd0abe59e86d4b4e88->leave($__internal_789aa3811757617b254790e5578f4f60338f6c68ba09fbfd0abe59e86d4b4e88_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccb535120ce034b8dd989a61e97206e99a6a3bac3903ad466dee840de299e750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb535120ce034b8dd989a61e97206e99a6a3bac3903ad466dee840de299e750->enter($__internal_ccb535120ce034b8dd989a61e97206e99a6a3bac3903ad466dee840de299e750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_871a2dae48ed9ca75b30dff15702bf63a100185c346f8b89f3f1bd49ed1a48e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871a2dae48ed9ca75b30dff15702bf63a100185c346f8b89f3f1bd49ed1a48e3->enter($__internal_871a2dae48ed9ca75b30dff15702bf63a100185c346f8b89f3f1bd49ed1a48e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_871a2dae48ed9ca75b30dff15702bf63a100185c346f8b89f3f1bd49ed1a48e3->leave($__internal_871a2dae48ed9ca75b30dff15702bf63a100185c346f8b89f3f1bd49ed1a48e3_prof);

        
        $__internal_ccb535120ce034b8dd989a61e97206e99a6a3bac3903ad466dee840de299e750->leave($__internal_ccb535120ce034b8dd989a61e97206e99a6a3bac3903ad466dee840de299e750_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/teiva/Documents/Cours/Papon/modelManager/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
