<?php

/* element/admin-menu.html.twig */
class __TwigTemplate_bd11c33f5065d0d40d551dc7c5c679e06b95477feabadd5b826b03d89e141c61 extends Twig_Template
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
        $__internal_04ac108830bbb7fbb5e485994a524f89018d9bfdbf3c187e64a1d9b9f702ee1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ac108830bbb7fbb5e485994a524f89018d9bfdbf3c187e64a1d9b9f702ee1d->enter($__internal_04ac108830bbb7fbb5e485994a524f89018d9bfdbf3c187e64a1d9b9f702ee1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "element/admin-menu.html.twig"));

        $__internal_3e355b0c6a37192bedecb8f0f708af1dbb275fa0cac8eee2516e923a39d0570d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e355b0c6a37192bedecb8f0f708af1dbb275fa0cac8eee2516e923a39d0570d->enter($__internal_3e355b0c6a37192bedecb8f0f708af1dbb275fa0cac8eee2516e923a39d0570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "element/admin-menu.html.twig"));

        // line 1
        echo "
<!-- Button click actions -->


<div class=\"modal fade\" id=\"button1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Modal Header -->
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Add User</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>

            <form action=\"/admin\" method=\"post\">

                <!-- Modal body -->
                <div class=\"modal-body\">


                    <div class=\"form-group\">
                        <label for=\"email\">Email address:</label>
                        <input name=\"name\" type=\"email\" class=\"form-control\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"pwd\">Password:</label>
                        <input name=\"password\" type=\"password\" class=\"form-control\">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-default\">Add User</button>
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>

            </form>

        </div>
    </div>
</div>

<form action=\"/admin\" method=\"post\">
    <!-- The Modal -->
    <div class=\"modal fade\" id=\"button2\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Delete User</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body\">

                    <div class=\"form-group\">
                        <label for=\"email\">Email address:</label>
                        <input name=\"delUser\" type=\"email\" class=\"form-control\">
                    </div>

                    <!-- Modal footer -->
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-default\">Delete User</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

<div class=\"modal fade\" id=\"button3\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Modal Header -->
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">List Users</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>

            <!-- Modal body -->
            <div class=\"modal-body\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Users</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 98
        $context["i"] = 0;
        // line 99
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new Twig_Error_Runtime('Variable "models" does not exist.', 99, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 100
            echo "                                <tr>
                                    ";
            // line 101
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 101, $this->getSourceContext()); })()) + 1);
            // line 102
            echo "                                    <th scope=\"row\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 102, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
                                    <td>Username</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
            </div>

        </div>
    </div>
</div>
";
        
        $__internal_04ac108830bbb7fbb5e485994a524f89018d9bfdbf3c187e64a1d9b9f702ee1d->leave($__internal_04ac108830bbb7fbb5e485994a524f89018d9bfdbf3c187e64a1d9b9f702ee1d_prof);

        
        $__internal_3e355b0c6a37192bedecb8f0f708af1dbb275fa0cac8eee2516e923a39d0570d->leave($__internal_3e355b0c6a37192bedecb8f0f708af1dbb275fa0cac8eee2516e923a39d0570d_prof);

    }

    public function getTemplateName()
    {
        return "element/admin-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 106,  136 => 102,  134 => 101,  131 => 100,  126 => 99,  124 => 98,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!-- Button click actions -->


<div class=\"modal fade\" id=\"button1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Modal Header -->
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Add User</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>

            <form action=\"/admin\" method=\"post\">

                <!-- Modal body -->
                <div class=\"modal-body\">


                    <div class=\"form-group\">
                        <label for=\"email\">Email address:</label>
                        <input name=\"name\" type=\"email\" class=\"form-control\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"pwd\">Password:</label>
                        <input name=\"password\" type=\"password\" class=\"form-control\">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-default\">Add User</button>
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>

            </form>

        </div>
    </div>
</div>

<form action=\"/admin\" method=\"post\">
    <!-- The Modal -->
    <div class=\"modal fade\" id=\"button2\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Delete User</h4>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body\">

                    <div class=\"form-group\">
                        <label for=\"email\">Email address:</label>
                        <input name=\"delUser\" type=\"email\" class=\"form-control\">
                    </div>

                    <!-- Modal footer -->
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-default\">Delete User</button>
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

<div class=\"modal fade\" id=\"button3\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <!-- Modal Header -->
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">List Users</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>

            <!-- Modal body -->
            <div class=\"modal-body\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Users</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% set i = 0 %}
                            {% for  model in models %}
                                <tr>
                                    {% set i = i +1 %}
                                    <th scope=\"row\">{{ i }}</th>
                                    <td>Username</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
            </div>

        </div>
    </div>
</div>
", "element/admin-menu.html.twig", "/home/teiva/Documents/Projet-Papon/modelManager/templates/element/admin-menu.html.twig");
    }
}
