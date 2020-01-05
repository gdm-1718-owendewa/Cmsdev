<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_94f6ec73359e038b9c16eeba67ad29108fdda369f8144014d93a42ab78570ebf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<header>
    <nav>
        <ul>
        ";
        // line 9
        if (0 !== twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 9, $this->source); })()), "anon.")) {
            // line 10
            echo "            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 10, $this->source); })()), "function", [], "any", false, false, false, 10), "Owner")) {
                // line 11
                echo "                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/users\">Users</a></li>
                <li><a href=\"/tasks\">Tasks</a></li>
                <li><a href=\"/hourrates\">Hourrates</a></li>
                <li><a href=\"/transportrates\">Transportrates</a></li>
                <li><a href=\"/logout\">Logout</a></li>
            ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 17
(isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 17, $this->source); })()), "function", [], "any", false, false, false, 17), "Client")) {
                // line 18
                echo "                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/tasks/client/";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
                echo "\">Tasks</a></li>
                <li><a href=\"/logout\">Logout</a></li>
            ";
            } else {
                // line 22
                echo "                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/logout\">Logout</a></li>
            ";
            }
            // line 25
            echo "         ";
        } else {
            // line 26
            echo "            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/login\">Login</a></li>
         ";
        }
        // line 29
        echo "        </ul>
    </nav>
</header>
    ";
        // line 32
        if (0 !== twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 32, $this->source); })()), "anon.")) {
            // line 33
            echo "        <div id=\"leftDiv\">
            ";
            // line 34
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 34, $this->source); })()), "function", [], "any", false, false, false, 34), "Client")) {
                // line 35
                echo "                <p> Ontvang een mail met een periode van de door u opgegeven aantal dagen</p>
                ";
                // line 36
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
                echo "
                ";
                // line 37
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
                echo "
                <p> Ontvang een pdf met een periode van de door u opgegeven aantal dagen</p>
                ";
                // line 39
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpdf"]) || array_key_exists("formpdf", $context) ? $context["formpdf"] : (function () { throw new RuntimeError('Variable "formpdf" does not exist.', 39, $this->source); })()), 'form_start');
                echo "
                ";
                // line 40
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpdf"]) || array_key_exists("formpdf", $context) ? $context["formpdf"] : (function () { throw new RuntimeError('Variable "formpdf" does not exist.', 40, $this->source); })()), 'form_end');
                echo "
            ";
            }
            // line 42
            echo "            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 42, $this->source); })()), "function", [], "any", false, false, false, 42), "Owner")) {
                // line 43
                echo "            <h1>Most recent Users</h1>
               ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["recentUsers"]) || array_key_exists("recentUsers", $context) ? $context["recentUsers"] : (function () { throw new RuntimeError('Variable "recentUsers" does not exist.', 44, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 45
                    echo "                        <div id=\"recentusers\">
                            <h2>Name: ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 46), "html", null, true);
                    echo "</h2>
                            <h4>Email: ";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 47), "html", null, true);
                    echo "</h4>
                            <p>Tel: ";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 48), "html", null, true);
                    echo "</p>
                            
                        </div>    
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "            ";
            }
            // line 53
            echo "        </div>  
        <div id=\"middleDiv\"><h1>Welkom 
            ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 55, $this->source); })()), "Name", [], "any", false, false, false, 55), "html", null, true);
            echo "</h1>
            ";
            // line 56
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 56, $this->source); })()), "function", [], "any", false, false, false, 56), "Employee") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 56, $this->source); })()), "function", [], "any", false, false, false, 56), "Freelance"))) {
                // line 57
                echo "                <p> Als werknemer en/of freelancer moet u gebruik maken van onze company app om taken toe te kunnen voegen.</p>
            ";
            }
            // line 59
            echo "        </div>
        <div id=\"rightDiv\">
            ";
            // line 61
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 61, $this->source); })()), "function", [], "any", false, false, false, 61), "Client")) {
                // line 62
                echo "                    <h2>Your recent tasks <a href=\"tasks/client/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62), "html", null, true);
                echo "\">see all</a></h2>
                    <hr>
                    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cientTasks"]) || array_key_exists("cientTasks", $context) ? $context["cientTasks"] : (function () { throw new RuntimeError('Variable "cientTasks" does not exist.', 64, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 65
                    echo "                        <div id=\"clientTasks\">
                            <h4>Employee: ";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "EmployeeId", [], "any", false, false, false, 66), "html", null, true);
                    echo "</h4>
                            <p>From: ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "start", [], "any", false, false, false, 67), "Y-m-d H:i:s"), "html", null, true);
                    echo " Until: ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "end", [], "any", false, false, false, 67), "Y-m-d H:i:s"), "html", null, true);
                    echo "</p>
                            <p> </p>
                            <p>Activities: ";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "activities", [], "any", false, false, false, 69), "html", null, true);
                    echo "</p>
                            <p>Materials: ";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "materials", [], "any", false, false, false, 70), "html", null, true);
                    echo "</p>
                            <p>Traveldistance: ";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "traveldistance", [], "any", false, false, false, 71), "html", null, true);
                    echo "km Gewerkte uren: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "datediff", [], "any", false, false, false, 71), "html", null, true);
                    echo "uur</p>
                        </div>
                        <hr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "            ";
            }
            // line 76
            echo "            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 76, $this->source); })()), "function", [], "any", false, false, false, 76), "Owner")) {
                // line 77
                echo "                    <h1>Most recent Tasks</h1>
                    ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["recentTasks"]) || array_key_exists("recentTasks", $context) ? $context["recentTasks"] : (function () { throw new RuntimeError('Variable "recentTasks" does not exist.', 78, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                    // line 79
                    echo "                        <div id=\"recentTasks\">
                            <h2>Employee: ";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "EmployeeId", [], "any", false, false, false, 80), "html", null, true);
                    echo "</h2>
                            <p>Activities: ";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "activities", [], "any", false, false, false, 81), "html", null, true);
                    echo "</p>
                            <p>Materials: ";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "materials", [], "any", false, false, false, 82), "html", null, true);
                    echo "</p>

                        </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "            ";
            }
            // line 87
            echo "        </div>
    ";
        } else {
            // line 89
            echo "        <div id=\"leftDiv\">
        </div>  
        <div id=\"middleDiv\">
        <h1>Welkom </h1>
        <p>Om gebruik te maken van onze website gelieve in te loggen.</p>
        <p>Deze website is bestemd voor de klanten van ARTE-TECH om hun taken op te volgen</p>
        <p> Bent u een werknemer en/of freelancer gelieve gebruik te maken van onze app</p>
        </div>
        <div id=\"rightDiv\"></div>
    ";
        }
        // line 99
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 99,  303 => 89,  299 => 87,  296 => 86,  286 => 82,  282 => 81,  278 => 80,  275 => 79,  271 => 78,  268 => 77,  265 => 76,  262 => 75,  250 => 71,  246 => 70,  242 => 69,  235 => 67,  231 => 66,  228 => 65,  224 => 64,  218 => 62,  216 => 61,  212 => 59,  208 => 57,  206 => 56,  202 => 55,  198 => 53,  195 => 52,  185 => 48,  181 => 47,  177 => 46,  174 => 45,  170 => 44,  167 => 43,  164 => 42,  159 => 40,  155 => 39,  150 => 37,  146 => 36,  143 => 35,  141 => 34,  138 => 33,  136 => 32,  131 => 29,  126 => 26,  123 => 25,  118 => 22,  112 => 19,  109 => 18,  107 => 17,  99 => 11,  96 => 10,  94 => 9,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}
{% block body %}

<header>
    <nav>
        <ul>
        {% if state != \"anon.\"%}
            {% if state.function == \"Owner\"%}
                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/users\">Users</a></li>
                <li><a href=\"/tasks\">Tasks</a></li>
                <li><a href=\"/hourrates\">Hourrates</a></li>
                <li><a href=\"/transportrates\">Transportrates</a></li>
                <li><a href=\"/logout\">Logout</a></li>
            {%elseif state.function == \"Client\"%}
                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/tasks/client/{{state.id}}\">Tasks</a></li>
                <li><a href=\"/logout\">Logout</a></li>
            {% else %}
                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/logout\">Logout</a></li>
            {%endif%}
         {%else%}
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/login\">Login</a></li>
         {%endif%}
        </ul>
    </nav>
</header>
    {% if state != \"anon.\" %}
        <div id=\"leftDiv\">
            {% if state.function == \"Client\" %}
                <p> Ontvang een mail met een periode van de door u opgegeven aantal dagen</p>
                {{ form_start(form) }}
                {{ form_end(form) }}
                <p> Ontvang een pdf met een periode van de door u opgegeven aantal dagen</p>
                {{ form_start(formpdf) }}
                {{ form_end(formpdf) }}
            {% endif %}
            {% if state.function == \"Owner\" %}
            <h1>Most recent Users</h1>
               {% for user in recentUsers %}
                        <div id=\"recentusers\">
                            <h2>Name: {{ user.name }}</h2>
                            <h4>Email: {{ user.email }}</h4>
                            <p>Tel: {{ user.tel }}</p>
                            
                        </div>    
                {% endfor %}
            {% endif %}
        </div>  
        <div id=\"middleDiv\"><h1>Welkom 
            {{state.Name}}</h1>
            {% if state.function == \"Employee\" or state.function == \"Freelance\"%}
                <p> Als werknemer en/of freelancer moet u gebruik maken van onze company app om taken toe te kunnen voegen.</p>
            {% endif %}
        </div>
        <div id=\"rightDiv\">
            {% if state.function == \"Client\" %}
                    <h2>Your recent tasks <a href=\"tasks/client/{{state.id}}\">see all</a></h2>
                    <hr>
                    {% for task in cientTasks %}
                        <div id=\"clientTasks\">
                            <h4>Employee: {{ task.EmployeeId }}</h4>
                            <p>From: {{ task.start|date('Y-m-d H:i:s')  }} Until: {{ task.end|date('Y-m-d H:i:s')  }}</p>
                            <p> </p>
                            <p>Activities: {{ task.activities }}</p>
                            <p>Materials: {{ task.materials }}</p>
                            <p>Traveldistance: {{ task.traveldistance }}km Gewerkte uren: {{ task.datediff }}uur</p>
                        </div>
                        <hr>
                {% endfor %}
            {% endif %}
            {% if state.function == \"Owner\" %}
                    <h1>Most recent Tasks</h1>
                    {% for task in recentTasks %}
                        <div id=\"recentTasks\">
                            <h2>Employee: {{ task.EmployeeId }}</h2>
                            <p>Activities: {{ task.activities }}</p>
                            <p>Materials: {{ task.materials }}</p>

                        </div>
                {% endfor %}
            {% endif %}
        </div>
    {% else %}
        <div id=\"leftDiv\">
        </div>  
        <div id=\"middleDiv\">
        <h1>Welkom </h1>
        <p>Om gebruik te maken van onze website gelieve in te loggen.</p>
        <p>Deze website is bestemd voor de klanten van ARTE-TECH om hun taken op te volgen</p>
        <p> Bent u een werknemer en/of freelancer gelieve gebruik te maken van onze app</p>
        </div>
        <div id=\"rightDiv\"></div>
    {% endif%}

{% endblock %}
", "home/index.html.twig", "/Users/owendewaele/Desktop/eindwerk_cmsdev/templates/home/index.html.twig");
    }
}
