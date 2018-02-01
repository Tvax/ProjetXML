<?php

/* login.html.twig */
class __TwigTemplate_fb4704b52dd3a383b79402ee96b4943236bef399d0aad110cdce59dfd93ea831 extends Twig_Template
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
        $__internal_93172073205184792ad95d72a1578657cd165aa5a5a6b210aa4f1260a1e5d194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93172073205184792ad95d72a1578657cd165aa5a5a6b210aa4f1260a1e5d194->enter($__internal_93172073205184792ad95d72a1578657cd165aa5a5a6b210aa4f1260a1e5d194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_885bc38cc752adb36c0a512627bdccb0ce6dfd190918a5143df784b30d1bf309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885bc38cc752adb36c0a512627bdccb0ce6dfd190918a5143df784b30d1bf309->enter($__internal_885bc38cc752adb36c0a512627bdccb0ce6dfd190918a5143df784b30d1bf309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Login</title>

    <link rel=\"stylesheet\" href=\"https://getbootstrap.com/docs/3.3/examples/signin/signin.css\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

</head>

<body>
    <div class=\"container\">
        <form class=\"form-signin\" action=\"/connect\" method=\"post\">
            <h2 class=\"form-signin-heading\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new Twig_Error_Runtime('Variable "errorMessage" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "</h2>
            <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
            <input name=\"username\" type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
            <label for=\"inputPassword\" class=\"sr-only\">Password</label>
            <input name=\"password\" type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>
    </div>
</body>
</html>";
        
        $__internal_93172073205184792ad95d72a1578657cd165aa5a5a6b210aa4f1260a1e5d194->leave($__internal_93172073205184792ad95d72a1578657cd165aa5a5a6b210aa4f1260a1e5d194_prof);

        
        $__internal_885bc38cc752adb36c0a512627bdccb0ce6dfd190918a5143df784b30d1bf309->leave($__internal_885bc38cc752adb36c0a512627bdccb0ce6dfd190918a5143df784b30d1bf309_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 21,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Login</title>

    <link rel=\"stylesheet\" href=\"https://getbootstrap.com/docs/3.3/examples/signin/signin.css\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

</head>

<body>
    <div class=\"container\">
        <form class=\"form-signin\" action=\"/connect\" method=\"post\">
            <h2 class=\"form-signin-heading\">{{ errorMessage }}</h2>
            <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
            <input name=\"username\" type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
            <label for=\"inputPassword\" class=\"sr-only\">Password</label>
            <input name=\"password\" type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>
    </div>
</body>
</html>", "login.html.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/templates/login.html.twig");
    }
}
