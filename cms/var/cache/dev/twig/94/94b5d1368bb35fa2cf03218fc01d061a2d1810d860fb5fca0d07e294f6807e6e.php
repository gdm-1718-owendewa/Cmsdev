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

/* task/detail.html.twig */
class __TwigTemplate_9e8bfc13a96a7ff1bdee034fa9c8b1c6136aae705b0de5fe74da24e641f93abe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/detail.html.twig", 1);
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

        echo "Hello TaskController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 

<header>
    <nav>
        <ul>
        ";
        // line 10
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 10, $this->source); })()), "function", [], "any", false, false, false, 10), "Owner")) {
            // line 11
            echo "            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/users\">Users</a></li>
            <li><a href=\"/tasks\">Tasks</a></li>
            <li><a href=\"/hourrates\">Hourrates</a></li>
            <li><a href=\"/transportrates\">Transportrates</a></li>
            <li><a href=\"/logout\">Logout</a></li>
        ";
        } else {
            // line 18
            echo "            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/tasks/client/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">Tasks</a></li>
            <li><a href=\"/logout\">Logout</a></li>
        ";
        }
        // line 22
        echo "        </ul>
    </nav>
</header>
";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpdf"]) || array_key_exists("formpdf", $context) ? $context["formpdf"] : (function () { throw new RuntimeError('Variable "formpdf" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpdf"]) || array_key_exists("formpdf", $context) ? $context["formpdf"] : (function () { throw new RuntimeError('Variable "formpdf" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 30
            echo "        <div id=\"detailTaskContainer\">
            <h2>Employee: ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "EmployeeId", [], "any", false, false, false, 31), "html", null, true);
            echo "</h2>
            ";
            // line 32
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 32, $this->source); })()), "function", [], "any", false, false, false, 32), "Owner")) {
                // line 33
                echo "            <h3>Client: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "ClientId", [], "any", false, false, false, 33), "html", null, true);
                echo "</h3>
            ";
            }
            // line 35
            echo "            <p>From: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "start", [], "any", false, false, false, 35), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
            <p> Until: ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "end", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
            <p>Break Time: ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "break", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
            <p>Activities: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "activities", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
            <p>Materials: ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "materials", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
            <p>Traveldistance: ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "traveldistance", [], "any", false, false, false, 40), "html", null, true);
            echo "km</p>
            <p>Gewerkte uren: ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "datediff", [], "any", false, false, false, 41), "html", null, true);
            echo " uur</p>
            ";
            // line 42
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 42, $this->source); })()), "function", [], "any", false, false, false, 42), "Owner")) {
                // line 43
                echo "            <p>Dag: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "currentday", [], "any", false, false, false, 43), "html", null, true);
                echo "</p>
            <a id=\"editButton\" href=\"/edit-task/";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Id", [], "any", false, false, false, 44), "html", null, true);
                echo "\">Edit</a>
            <a id=\"deleteButton\" href=\"/delete-task/";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Id", [], "any", false, false, false, 45), "html", null, true);
                echo "\">Delete</a>
            ";
            }
            // line 47
            echo "                                    <hr>

         </div>
         
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 47,  194 => 45,  190 => 44,  185 => 43,  183 => 42,  179 => 41,  175 => 40,  171 => 39,  167 => 38,  163 => 37,  159 => 36,  154 => 35,  148 => 33,  146 => 32,  142 => 31,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  119 => 25,  114 => 22,  108 => 19,  105 => 18,  96 => 11,  94 => 10,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TaskController!{% endblock %}

{% block body %} 

<header>
    <nav>
        <ul>
        {%if state.function == \"Owner\"%}
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/users\">Users</a></li>
            <li><a href=\"/tasks\">Tasks</a></li>
            <li><a href=\"/hourrates\">Hourrates</a></li>
            <li><a href=\"/transportrates\">Transportrates</a></li>
            <li><a href=\"/logout\">Logout</a></li>
        {% else%}
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/tasks/client/{{state.id}}\">Tasks</a></li>
            <li><a href=\"/logout\">Logout</a></li>
        {%endif%}
        </ul>
    </nav>
</header>
{{ form_start(form) }}
{{ form_end(form) }}
{{ form_start(formpdf) }}
{{ form_end(formpdf) }}
{% for task in tasks %}
        <div id=\"detailTaskContainer\">
            <h2>Employee: {{ task.EmployeeId }}</h2>
            {%if state.function == \"Owner\"%}
            <h3>Client: {{ task.ClientId }}</h3>
            {%endif%}
            <p>From: {{ task.start|date('Y-m-d H:i:s')  }}</p>
            <p> Until: {{ task.end|date('Y-m-d H:i:s')  }}</p>
            <p>Break Time: {{ task.break }}</p>
            <p>Activities: {{ task.activities }}</p>
            <p>Materials: {{ task.materials }}</p>
            <p>Traveldistance: {{ task.traveldistance }}km</p>
            <p>Gewerkte uren: {{ task.datediff }} uur</p>
            {%if state.function == \"Owner\"%}
            <p>Dag: {{ task.currentday }}</p>
            <a id=\"editButton\" href=\"/edit-task/{{task.Id}}\">Edit</a>
            <a id=\"deleteButton\" href=\"/delete-task/{{task.Id}}\">Delete</a>
            {%endif%}
                                    <hr>

         </div>
         
    {% endfor %}
{% endblock %}", "task/detail.html.twig", "/Users/owendewaele/Desktop/eindwerk_cmsdev/templates/task/detail.html.twig");
    }
}
