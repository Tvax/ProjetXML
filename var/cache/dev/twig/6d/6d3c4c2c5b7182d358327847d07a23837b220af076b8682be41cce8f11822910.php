<?php

/* view/login.html.twig */
class __TwigTemplate_e0a407dce097ec3da01a40b870444a8a86066b9e9f4282937bc318687c6714d7 extends Twig_Template
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
        $__internal_129abe86342d83e8f8de62759e4ca1ad52f50ca6f4d4e15212d80cd6315c32b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129abe86342d83e8f8de62759e4ca1ad52f50ca6f4d4e15212d80cd6315c32b4->enter($__internal_129abe86342d83e8f8de62759e4ca1ad52f50ca6f4d4e15212d80cd6315c32b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "view/login.html.twig"));

        $__internal_20238109b2992ebda24001a4727d8a95c6590716e5c82d80883aa5dcee5a2963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20238109b2992ebda24001a4727d8a95c6590716e5c82d80883aa5dcee5a2963->enter($__internal_20238109b2992ebda24001a4727d8a95c6590716e5c82d80883aa5dcee5a2963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "view/login.html.twig"));

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
    <form class=\"form-signin\" action=\"/\" method=\"post\">
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
        
        $__internal_129abe86342d83e8f8de62759e4ca1ad52f50ca6f4d4e15212d80cd6315c32b4->leave($__internal_129abe86342d83e8f8de62759e4ca1ad52f50ca6f4d4e15212d80cd6315c32b4_prof);

        
        $__internal_20238109b2992ebda24001a4727d8a95c6590716e5c82d80883aa5dcee5a2963->leave($__internal_20238109b2992ebda24001a4727d8a95c6590716e5c82d80883aa5dcee5a2963_prof);

    }

    public function getTemplateName()
    {
        return "view/login.html.twig";
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
    <form class=\"form-signin\" action=\"/\" method=\"post\">
        <h2 class=\"form-signin-heading\">{{ errorMessage }}</h2>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input name=\"username\" type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input name=\"password\" type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    </form>
</div>
</body>
</html>", "view/login.html.twig", "/home/teiva/Documents/Projet-Papon/modelManager/templates/view/login.html.twig");
    }
}
