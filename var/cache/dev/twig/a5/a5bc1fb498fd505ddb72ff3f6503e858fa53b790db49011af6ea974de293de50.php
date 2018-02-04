<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f253b30a521d3b5669c6b4972a883f489f5e546704cb8c565a201cc27dcf8ffe extends Twig_Template
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
        $__internal_3f111c0a70dac42a5ff7cdcdc33fcbe2bd20d995e4942af0a2a53bbe08a61524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f111c0a70dac42a5ff7cdcdc33fcbe2bd20d995e4942af0a2a53bbe08a61524->enter($__internal_3f111c0a70dac42a5ff7cdcdc33fcbe2bd20d995e4942af0a2a53bbe08a61524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3acc2b60f6ffb82c51e50864f147b4f0955c5b0e32800b32bcaa5569d72f3bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acc2b60f6ffb82c51e50864f147b4f0955c5b0e32800b32bcaa5569d72f3bfa->enter($__internal_3acc2b60f6ffb82c51e50864f147b4f0955c5b0e32800b32bcaa5569d72f3bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3f111c0a70dac42a5ff7cdcdc33fcbe2bd20d995e4942af0a2a53bbe08a61524->leave($__internal_3f111c0a70dac42a5ff7cdcdc33fcbe2bd20d995e4942af0a2a53bbe08a61524_prof);

        
        $__internal_3acc2b60f6ffb82c51e50864f147b4f0955c5b0e32800b32bcaa5569d72f3bfa->leave($__internal_3acc2b60f6ffb82c51e50864f147b4f0955c5b0e32800b32bcaa5569d72f3bfa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da2ad39a324873f6a4eba98473ac300cfef99ba223f3fc2307383d2892c80a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2ad39a324873f6a4eba98473ac300cfef99ba223f3fc2307383d2892c80a69->enter($__internal_da2ad39a324873f6a4eba98473ac300cfef99ba223f3fc2307383d2892c80a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67823f8ac6c9d6670344c3853969f7f0cb9ec3d08544704ca95e39922eee9853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67823f8ac6c9d6670344c3853969f7f0cb9ec3d08544704ca95e39922eee9853->enter($__internal_67823f8ac6c9d6670344c3853969f7f0cb9ec3d08544704ca95e39922eee9853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_67823f8ac6c9d6670344c3853969f7f0cb9ec3d08544704ca95e39922eee9853->leave($__internal_67823f8ac6c9d6670344c3853969f7f0cb9ec3d08544704ca95e39922eee9853_prof);

        
        $__internal_da2ad39a324873f6a4eba98473ac300cfef99ba223f3fc2307383d2892c80a69->leave($__internal_da2ad39a324873f6a4eba98473ac300cfef99ba223f3fc2307383d2892c80a69_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_34ac022c44d50957e0c726d94b3d2947b3671396afbeef3e8589d28a52baf2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ac022c44d50957e0c726d94b3d2947b3671396afbeef3e8589d28a52baf2e2->enter($__internal_34ac022c44d50957e0c726d94b3d2947b3671396afbeef3e8589d28a52baf2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5841cfe6b4726b436f709a2a29f14912e6d6c83cebcabcca4235a4e16a5fba56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5841cfe6b4726b436f709a2a29f14912e6d6c83cebcabcca4235a4e16a5fba56->enter($__internal_5841cfe6b4726b436f709a2a29f14912e6d6c83cebcabcca4235a4e16a5fba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5841cfe6b4726b436f709a2a29f14912e6d6c83cebcabcca4235a4e16a5fba56->leave($__internal_5841cfe6b4726b436f709a2a29f14912e6d6c83cebcabcca4235a4e16a5fba56_prof);

        
        $__internal_34ac022c44d50957e0c726d94b3d2947b3671396afbeef3e8589d28a52baf2e2->leave($__internal_34ac022c44d50957e0c726d94b3d2947b3671396afbeef3e8589d28a52baf2e2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b70ac7bedb2ceb6521209443aa9fd638d56699b915da72990be98834448b9e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70ac7bedb2ceb6521209443aa9fd638d56699b915da72990be98834448b9e9a->enter($__internal_b70ac7bedb2ceb6521209443aa9fd638d56699b915da72990be98834448b9e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_217485a0c44c2d0ccb9e08315aa2ef7e0f768a5369a1a8de450871959c4724eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217485a0c44c2d0ccb9e08315aa2ef7e0f768a5369a1a8de450871959c4724eb->enter($__internal_217485a0c44c2d0ccb9e08315aa2ef7e0f768a5369a1a8de450871959c4724eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_217485a0c44c2d0ccb9e08315aa2ef7e0f768a5369a1a8de450871959c4724eb->leave($__internal_217485a0c44c2d0ccb9e08315aa2ef7e0f768a5369a1a8de450871959c4724eb_prof);

        
        $__internal_b70ac7bedb2ceb6521209443aa9fd638d56699b915da72990be98834448b9e9a->leave($__internal_b70ac7bedb2ceb6521209443aa9fd638d56699b915da72990be98834448b9e9a_prof);

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
", "@Twig/layout.html.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
