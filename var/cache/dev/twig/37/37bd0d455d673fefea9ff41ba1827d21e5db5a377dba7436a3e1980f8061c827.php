<?php

/* view/admin.php.twig */
class __TwigTemplate_1f69c26e9f367ff479920e2c88eb1d792c3dafbeaaabc07075132966927ba0bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("view/base.html.twig", "view/admin.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "view/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d75adba8613d4a1ad48aac096c111e1851d38c39865f259155a5484ca4e93c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d75adba8613d4a1ad48aac096c111e1851d38c39865f259155a5484ca4e93c5->enter($__internal_6d75adba8613d4a1ad48aac096c111e1851d38c39865f259155a5484ca4e93c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "view/admin.php.twig"));

        $__internal_e10b4bc810baacb8bec25da8f1a7e742e721738e174a39da412380e1adb688a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10b4bc810baacb8bec25da8f1a7e742e721738e174a39da412380e1adb688a2->enter($__internal_e10b4bc810baacb8bec25da8f1a7e742e721738e174a39da412380e1adb688a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "view/admin.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d75adba8613d4a1ad48aac096c111e1851d38c39865f259155a5484ca4e93c5->leave($__internal_6d75adba8613d4a1ad48aac096c111e1851d38c39865f259155a5484ca4e93c5_prof);

        
        $__internal_e10b4bc810baacb8bec25da8f1a7e742e721738e174a39da412380e1adb688a2->leave($__internal_e10b4bc810baacb8bec25da8f1a7e742e721738e174a39da412380e1adb688a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec0f9801182f8d6f9daf5e55550d6cf18d6920fa8b9cb78aba441e04ed297863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0f9801182f8d6f9daf5e55550d6cf18d6920fa8b9cb78aba441e04ed297863->enter($__internal_ec0f9801182f8d6f9daf5e55550d6cf18d6920fa8b9cb78aba441e04ed297863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96cf5a1c3247558c6c8d171a7762940ee1d24555e4fe38fabd38858355dfae29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cf5a1c3247558c6c8d171a7762940ee1d24555e4fe38fabd38858355dfae29->enter($__internal_96cf5a1c3247558c6c8d171a7762940ee1d24555e4fe38fabd38858355dfae29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_96cf5a1c3247558c6c8d171a7762940ee1d24555e4fe38fabd38858355dfae29->leave($__internal_96cf5a1c3247558c6c8d171a7762940ee1d24555e4fe38fabd38858355dfae29_prof);

        
        $__internal_ec0f9801182f8d6f9daf5e55550d6cf18d6920fa8b9cb78aba441e04ed297863->leave($__internal_ec0f9801182f8d6f9daf5e55550d6cf18d6920fa8b9cb78aba441e04ed297863_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae3e9460779a4a366c2e68ee245e1f335bad1879f8d53357cfa45032f504e275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3e9460779a4a366c2e68ee245e1f335bad1879f8d53357cfa45032f504e275->enter($__internal_ae3e9460779a4a366c2e68ee245e1f335bad1879f8d53357cfa45032f504e275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c926a18474b42b3138518d7b3fa95e9a954c103e9950d404fbed38913203d900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c926a18474b42b3138518d7b3fa95e9a954c103e9950d404fbed38913203d900->enter($__internal_c926a18474b42b3138518d7b3fa95e9a954c103e9950d404fbed38913203d900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if (((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 7, $this->getSourceContext()); })()) == "User Deleted")) {
            // line 8
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Success!</strong> ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "
      </div>
    ";
        } elseif ((        // line 12
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 12, $this->getSourceContext()); })()) == "User Added")) {
            // line 13
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Success!</strong> ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "
      </div>
    ";
        } elseif ((        // line 17
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 17, $this->getSourceContext()); })()) == "Model Added")) {
            // line 18
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Success!</strong> ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        $this->loadTemplate("element/admin-menu.html.twig", "view/admin.php.twig", 24)->display($context);
        // line 25
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    <ul class=\"nav nav-pills card-header-pills\">
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button1\">Add User</button>
      </li>
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button2\">Delete User</button>
      </li>
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button3\">List Users</button>
      </li>
    </ul>
  </div>


    ";
        // line 42
        $this->loadTemplate("element/admin-tab.html.twig", "view/admin.php.twig", 42)->display($context);
        // line 43
        echo "

    ";
        
        $__internal_c926a18474b42b3138518d7b3fa95e9a954c103e9950d404fbed38913203d900->leave($__internal_c926a18474b42b3138518d7b3fa95e9a954c103e9950d404fbed38913203d900_prof);

        
        $__internal_ae3e9460779a4a366c2e68ee245e1f335bad1879f8d53357cfa45032f504e275->leave($__internal_ae3e9460779a4a366c2e68ee245e1f335bad1879f8d53357cfa45032f504e275_prof);

    }

    public function getTemplateName()
    {
        return "view/admin.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 43,  129 => 42,  110 => 25,  108 => 24,  105 => 23,  99 => 20,  95 => 18,  93 => 17,  88 => 15,  84 => 13,  82 => 12,  77 => 10,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'view/base.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}

    {% if message == \"User Deleted\" %}
      <div class=\"alert alert-success alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Success!</strong> {{ message }}
      </div>
    {% elseif message == \"User Added\" %}
      <div class=\"alert alert-success alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Success!</strong> {{ message }}
      </div>
    {% elseif message == \"Model Added\" %}
      <div class=\"alert alert-success alert-dismissible\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        <strong>Success!</strong> {{ message }}
      </div>
    {% endif %}

    {% include 'element/admin-menu.html.twig' %}

<div class=\"card\">
  <div class=\"card-header\">
    <ul class=\"nav nav-pills card-header-pills\">
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button1\">Add User</button>
      </li>
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button2\">Delete User</button>
      </li>
      <li class=\"nav-item\">
        <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#button3\">List Users</button>
      </li>
    </ul>
  </div>


    {% include 'element/admin-tab.html.twig' %}


    {% endblock %}
", "view/admin.php.twig", "/home/teiva/Documents/Projet-Papon/modelManager/templates/view/admin.php.twig");
    }
}
