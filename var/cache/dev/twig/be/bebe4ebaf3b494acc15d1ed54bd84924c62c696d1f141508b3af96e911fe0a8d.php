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
        $__internal_816dbce3bab363bf14ea37cacb3e8bb6910b9b08732737f744c400ebb55a44b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816dbce3bab363bf14ea37cacb3e8bb6910b9b08732737f744c400ebb55a44b8->enter($__internal_816dbce3bab363bf14ea37cacb3e8bb6910b9b08732737f744c400ebb55a44b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_c31d7866bac9c3c18e756602753bee3e2905e71d14545e930769bca4d73c5326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31d7866bac9c3c18e756602753bee3e2905e71d14545e930769bca4d73c5326->enter($__internal_c31d7866bac9c3c18e756602753bee3e2905e71d14545e930769bca4d73c5326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

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
        <form class=\"form-signin\">
            <h2 class=\"form-signin-heading\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new Twig_Error_Runtime('Variable "errorMessage" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "</h2>
            <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
            <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
            <label for=\"inputPassword\" class=\"sr-only\">Password</label>
            <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>
    </div>
</body>
</html>";
        
        $__internal_816dbce3bab363bf14ea37cacb3e8bb6910b9b08732737f744c400ebb55a44b8->leave($__internal_816dbce3bab363bf14ea37cacb3e8bb6910b9b08732737f744c400ebb55a44b8_prof);

        
        $__internal_c31d7866bac9c3c18e756602753bee3e2905e71d14545e930769bca4d73c5326->leave($__internal_c31d7866bac9c3c18e756602753bee3e2905e71d14545e930769bca4d73c5326_prof);

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
        <form class=\"form-signin\">
            <h2 class=\"form-signin-heading\">{{ errorMessage }}</h2>
            <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
            <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
            <label for=\"inputPassword\" class=\"sr-only\">Password</label>
            <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>
    </div>
</body>
</html>", "login.html.twig", "/home/teiva/Documents/Cours/Papon/symfony-XML/templates/login.html.twig");
    }
}
