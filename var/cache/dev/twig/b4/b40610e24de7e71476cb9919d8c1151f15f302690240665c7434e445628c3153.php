<?php

/* element/admin-tab.html.twig */
class __TwigTemplate_e53483f9c104ea2c4070d0659931ab22c839b946dd8400a6c8384b1d200f5b59 extends Twig_Template
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
        $__internal_937db69fc9cc752d5f13b7ee37293c1abd764204d809038f50cc209cec2f0c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937db69fc9cc752d5f13b7ee37293c1abd764204d809038f50cc209cec2f0c10->enter($__internal_937db69fc9cc752d5f13b7ee37293c1abd764204d809038f50cc209cec2f0c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "element/admin-tab.html.twig"));

        $__internal_7daad01354cefadefd5a15b82d38e7877db9c154efa97553088d932737c90dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7daad01354cefadefd5a15b82d38e7877db9c154efa97553088d932737c90dc2->enter($__internal_7daad01354cefadefd5a15b82d38e7877db9c154efa97553088d932737c90dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "element/admin-tab.html.twig"));

        // line 1
        echo "<!-- Main Tab -->

<div class=\"card-body\">
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Model</th>
            <th>Version</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context["i"] = 0;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new Twig_Error_Runtime('Variable "models" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 16
            echo "            <tr>
                ";
            // line 17
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 17, $this->getSourceContext()); })()) + 1);
            // line 18
            echo "                <!-- <th scope=\"row\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "</th> -->
                <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getDescription", array()), "html", null, true);
            echo "</td>
                <td>v.";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getVersion", array()), "html", null, true);
            echo "</td>
                <td>
                    <!-- Button to Open the Modal -->
                    <button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
            echo "\">View</button>

                    <!-- The Modal -->
                    <div class=\"modal fade\" id=\"myModal";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                        <div class=\"modal-dialog modal-lg\" style=\"width: 98%; height: 92%; padding: 0;\">
                            <div class=\"modal-content\" style=\"height: 99%;\">

                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getVersion", array()), "html", null, true);
            echo "</h4>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class=\"modal-body\">
                                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "
                                </div>

                                <!-- Modal footer -->
                                <div class=\"modal-footer\">

                                    <form action=\"/admin\" method=\"post\">
                                        <textarea name=\"model\" style=\"display:none;\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "</textarea>
                                        <input name=\"email\" type=\"email\">
                                        <button type=\"submit\" class=\"btn btn-success\">Add To User</button>
                                    </form>

                                    <form action=\"/validate\" method=\"post\">
                                        <textarea name=\"xsd\" style=\"display:none;\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
            echo "</textarea>
                                        <button type=\"submit\" class=\"btn btn-info\">Validate</button>
                                    </form>

                                    <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#buttonCompare";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 56, $this->getSourceContext()); })()), "html", null, true);
            echo "\">Compare</button>
                                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>


                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"buttonCompare";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 61, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                                        <div class=\"modal-dialog modal-lg\" style=\"width: 98%; height: 92%; padding: 0;\">
                                            <div class=\"modal-content\" style=\"height: 99%;\">

                                                <!-- Modal Header -->
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">Compare With</h4>
                                                </div>

                                                <!-- Modal body -->
                                                <div class=\"modal-body\">
                                                    <table class=\"table table-striped\">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Model</th>
                                                            <th>Version</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
            // line 82
            $context["d"] = 1;
            // line 83
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new Twig_Error_Runtime('Variable "models" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["model2"]) {
                // line 84
                echo "                                                            <tr>

                                                                <form action=\"/compare\" method=\"post\">

                                                                    <textarea name=\"model1\" style=\"display:none;\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model"], "getModel", array()), "html", null, true);
                echo "</textarea>
                                                                    <textarea name=\"model2\" style=\"display:none;\">";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model2"], "getModel", array()), "html", null, true);
                echo "</textarea>

                                                                    <th scope=\"row\">";
                // line 91
                echo twig_escape_filter($this->env, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new Twig_Error_Runtime('Variable "d" does not exist.', 91, $this->getSourceContext()); })()), "html", null, true);
                echo "</th>
                                                                    <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model2"], "getDescription", array()), "html", null, true);
                echo "</td>
                                                                    <td>v.";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["model2"], "getVersion", array()), "html", null, true);
                echo "</td>
                                                                    <td><button type=\"submit\" class=\"btn btn-default\">Compare</button></td>

                                                                </form>

                                                            </tr>

                                                            ";
                // line 100
                $context["d"] = ((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new Twig_Error_Runtime('Variable "d" does not exist.', 100, $this->getSourceContext()); })()) + 1);
                // line 101
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </tbody>
    </table>
</div>

</div>
";
        
        $__internal_937db69fc9cc752d5f13b7ee37293c1abd764204d809038f50cc209cec2f0c10->leave($__internal_937db69fc9cc752d5f13b7ee37293c1abd764204d809038f50cc209cec2f0c10_prof);

        
        $__internal_7daad01354cefadefd5a15b82d38e7877db9c154efa97553088d932737c90dc2->leave($__internal_7daad01354cefadefd5a15b82d38e7877db9c154efa97553088d932737c90dc2_prof);

    }

    public function getTemplateName()
    {
        return "element/admin-tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 116,  201 => 102,  195 => 101,  193 => 100,  183 => 93,  179 => 92,  175 => 91,  170 => 89,  166 => 88,  160 => 84,  155 => 83,  153 => 82,  129 => 61,  121 => 56,  114 => 52,  105 => 46,  95 => 39,  86 => 33,  77 => 27,  71 => 24,  65 => 21,  61 => 20,  57 => 19,  52 => 18,  50 => 17,  47 => 16,  42 => 15,  40 => 14,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Main Tab -->

<div class=\"card-body\">
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Model</th>
            <th>Version</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        {% set i = 0 %}
        {% for  model in models %}
            <tr>
                {% set i = i +1 %}
                <!-- <th scope=\"row\">{{ i }}</th> -->
                <th scope=\"row\">{{i}}</th>
                <td>{{ model.getDescription }}</td>
                <td>v.{{ model.getVersion }}</td>
                <td>
                    <!-- Button to Open the Modal -->
                    <button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#myModal{{ i }}\">View</button>

                    <!-- The Modal -->
                    <div class=\"modal fade\" id=\"myModal{{ i }}\">
                        <div class=\"modal-dialog modal-lg\" style=\"width: 98%; height: 92%; padding: 0;\">
                            <div class=\"modal-content\" style=\"height: 99%;\">

                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">{{model.getVersion}}</h4>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class=\"modal-body\">
                                    {{model.getModel}}
                                </div>

                                <!-- Modal footer -->
                                <div class=\"modal-footer\">

                                    <form action=\"/admin\" method=\"post\">
                                        <textarea name=\"model\" style=\"display:none;\">{{model.getModel}}</textarea>
                                        <input name=\"email\" type=\"email\">
                                        <button type=\"submit\" class=\"btn btn-success\">Add To User</button>
                                    </form>

                                    <form action=\"/validate\" method=\"post\">
                                        <textarea name=\"xsd\" style=\"display:none;\">{{model.getModel}}</textarea>
                                        <button type=\"submit\" class=\"btn btn-info\">Validate</button>
                                    </form>

                                    <button type=\"button\" style=\"margin-right: 10px;\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#buttonCompare{{i}}\">Compare</button>
                                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>


                                    <!-- The Modal -->
                                    <div class=\"modal fade\" id=\"buttonCompare{{i}}\">
                                        <div class=\"modal-dialog modal-lg\" style=\"width: 98%; height: 92%; padding: 0;\">
                                            <div class=\"modal-content\" style=\"height: 99%;\">

                                                <!-- Modal Header -->
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">Compare With</h4>
                                                </div>

                                                <!-- Modal body -->
                                                <div class=\"modal-body\">
                                                    <table class=\"table table-striped\">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Model</th>
                                                            <th>Version</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% set d = 1 %}
                                                        {% for  model2 in models %}
                                                            <tr>

                                                                <form action=\"/compare\" method=\"post\">

                                                                    <textarea name=\"model1\" style=\"display:none;\">{{model.getModel}}</textarea>
                                                                    <textarea name=\"model2\" style=\"display:none;\">{{model2.getModel}}</textarea>

                                                                    <th scope=\"row\">{{d}}</th>
                                                                    <td>{{ model2.getDescription }}</td>
                                                                    <td>v.{{ model2.getVersion }}</td>
                                                                    <td><button type=\"submit\" class=\"btn btn-default\">Compare</button></td>

                                                                </form>

                                                            </tr>

                                                            {% set d = d +1 %}
                                                        {% endfor %}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>

</div>
", "element/admin-tab.html.twig", "/home/teiva/Documents/Projet-Papon/modelManager/templates/element/admin-tab.html.twig");
    }
}
