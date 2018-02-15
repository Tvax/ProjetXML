<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cd88e7b852bbf9967484c5b005b52468d69447ec92081b31944ccdb1b5cf63ae extends Twig_Template
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
        $__internal_1c09cd756cd82ee8ab86b54629943c2435b29e757124d6832f87fe4567bad109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c09cd756cd82ee8ab86b54629943c2435b29e757124d6832f87fe4567bad109->enter($__internal_1c09cd756cd82ee8ab86b54629943c2435b29e757124d6832f87fe4567bad109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7b75dc5a72775483b6589e47bbf5ee0d2dc629f84c415b440564ea1ba2804f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b75dc5a72775483b6589e47bbf5ee0d2dc629f84c415b440564ea1ba2804f5f->enter($__internal_7b75dc5a72775483b6589e47bbf5ee0d2dc629f84c415b440564ea1ba2804f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1c09cd756cd82ee8ab86b54629943c2435b29e757124d6832f87fe4567bad109->leave($__internal_1c09cd756cd82ee8ab86b54629943c2435b29e757124d6832f87fe4567bad109_prof);

        
        $__internal_7b75dc5a72775483b6589e47bbf5ee0d2dc629f84c415b440564ea1ba2804f5f->leave($__internal_7b75dc5a72775483b6589e47bbf5ee0d2dc629f84c415b440564ea1ba2804f5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26d342130f9018bd723fb2f5c72e82112c025bdd369a09c196ae2d5f71214a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d342130f9018bd723fb2f5c72e82112c025bdd369a09c196ae2d5f71214a8c->enter($__internal_26d342130f9018bd723fb2f5c72e82112c025bdd369a09c196ae2d5f71214a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e03265b100c87173f08905d461ec03aa51c1d063b5fdfd211fac1068003dc1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03265b100c87173f08905d461ec03aa51c1d063b5fdfd211fac1068003dc1bb->enter($__internal_e03265b100c87173f08905d461ec03aa51c1d063b5fdfd211fac1068003dc1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e03265b100c87173f08905d461ec03aa51c1d063b5fdfd211fac1068003dc1bb->leave($__internal_e03265b100c87173f08905d461ec03aa51c1d063b5fdfd211fac1068003dc1bb_prof);

        
        $__internal_26d342130f9018bd723fb2f5c72e82112c025bdd369a09c196ae2d5f71214a8c->leave($__internal_26d342130f9018bd723fb2f5c72e82112c025bdd369a09c196ae2d5f71214a8c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fc4040c310c61b9ef29f1b7343dec8e82f52023b0b1ccb57473abe6ae867449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc4040c310c61b9ef29f1b7343dec8e82f52023b0b1ccb57473abe6ae867449->enter($__internal_1fc4040c310c61b9ef29f1b7343dec8e82f52023b0b1ccb57473abe6ae867449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_53ef8926235352d6ff0e5544cbf33fe3de81cf98ba966a563ca36c7e4fdd6524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ef8926235352d6ff0e5544cbf33fe3de81cf98ba966a563ca36c7e4fdd6524->enter($__internal_53ef8926235352d6ff0e5544cbf33fe3de81cf98ba966a563ca36c7e4fdd6524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_53ef8926235352d6ff0e5544cbf33fe3de81cf98ba966a563ca36c7e4fdd6524->leave($__internal_53ef8926235352d6ff0e5544cbf33fe3de81cf98ba966a563ca36c7e4fdd6524_prof);

        
        $__internal_1fc4040c310c61b9ef29f1b7343dec8e82f52023b0b1ccb57473abe6ae867449->leave($__internal_1fc4040c310c61b9ef29f1b7343dec8e82f52023b0b1ccb57473abe6ae867449_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_64b0f4eb10fc5b2f07c958a8f9125258b9451b3339e82612ecb9b5ad40044029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b0f4eb10fc5b2f07c958a8f9125258b9451b3339e82612ecb9b5ad40044029->enter($__internal_64b0f4eb10fc5b2f07c958a8f9125258b9451b3339e82612ecb9b5ad40044029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38d10af11fc1e51a2e8ce2d3dde70986e41898368448ecf13803067676486239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d10af11fc1e51a2e8ce2d3dde70986e41898368448ecf13803067676486239->enter($__internal_38d10af11fc1e51a2e8ce2d3dde70986e41898368448ecf13803067676486239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_38d10af11fc1e51a2e8ce2d3dde70986e41898368448ecf13803067676486239->leave($__internal_38d10af11fc1e51a2e8ce2d3dde70986e41898368448ecf13803067676486239_prof);

        
        $__internal_64b0f4eb10fc5b2f07c958a8f9125258b9451b3339e82612ecb9b5ad40044029->leave($__internal_64b0f4eb10fc5b2f07c958a8f9125258b9451b3339e82612ecb9b5ad40044029_prof);

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
", "@Twig/layout.html.twig", "/home/teiva/Documents/ProjetXML/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
