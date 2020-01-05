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

/* task/index.html.twig */
class __TwigTemplate_b513b32e125b44eb46e18f508db767bbb2ee28bbc7815f125126988f06dff9dc extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "    
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<header>
    <nav>
        <ul>
        <li><a href=\"/\">Home</a></li>
            <li><a href=\"/users\">Users</a></li>
            <li><a href=\"/tasks\">Tasks</a></li>
            <li><a href=\"/hourrates\">Hourrates</a></li>
            <li><a href=\"/transportrates\">Transportrates</a></li>
            <li><a href=\"/logout\">Logout</a></li>
        </ul>
    </nav>
</header>
<div id=\"container\">
<a href=\"add-task\" id=\"add-button\"> Add </a>
<table >
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Function</th>
    </tr>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "        <tr>
        ";
            // line 34
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "function", [], "any", false, false, false, 34), "Client")) {
                // line 35
                echo "             <td><p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Name", [], "any", false, false, false, 35), "html", null, true);
                echo " </p></td>
             <td><p>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 36), "html", null, true);
                echo " </p></td>
            <td><p>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Function", [], "any", false, false, false, 37), "html", null, true);
                echo "</p></td>
            <td> <a href=\"/tasks/client/";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" id=\"taskdetailButton\">Tasks</a></td>
        ";
            } else {
                // line 40
                echo "             <td><p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Name", [], "any", false, false, false, 40), "html", null, true);
                echo " </p></td>
             <td><p>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 41), "html", null, true);
                echo " </p></td>
            <td><p>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Function", [], "any", false, false, false, 42), "html", null, true);
                echo "</p></td>
            <td> <a href=\"/tasks/";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\" id=\"taskdetailButton\">Tasks</a></td>
        ";
            }
            // line 45
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</table>    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  160 => 45,  155 => 43,  151 => 42,  147 => 41,  142 => 40,  137 => 38,  133 => 37,  129 => 36,  124 => 35,  122 => 34,  119 => 33,  115 => 32,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Hello TaskController!{% endblock %}

{% block body %}    
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<header>
    <nav>
        <ul>
        <li><a href=\"/\">Home</a></li>
            <li><a href=\"/users\">Users</a></li>
            <li><a href=\"/tasks\">Tasks</a></li>
            <li><a href=\"/hourrates\">Hourrates</a></li>
            <li><a href=\"/transportrates\">Transportrates</a></li>
            <li><a href=\"/logout\">Logout</a></li>
        </ul>
    </nav>
</header>
<div id=\"container\">
<a href=\"add-task\" id=\"add-button\"> Add </a>
<table >
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Function</th>
    </tr>
    {% for user in users %}
        <tr>
        {% if user.function == 'Client'%}
             <td><p>{{user.Name}} </p></td>
             <td><p>{{user.Email}} </p></td>
            <td><p>{{user.Function}}</p></td>
            <td> <a href=\"/tasks/client/{{user.id}}\" id=\"taskdetailButton\">Tasks</a></td>
        {%else%}
             <td><p>{{user.Name}} </p></td>
             <td><p>{{user.Email}} </p></td>
            <td><p>{{user.Function}}</p></td>
            <td> <a href=\"/tasks/{{user.id}}\" id=\"taskdetailButton\">Tasks</a></td>
        {% endif %}
        </tr>
    {% endfor %}
</table>    
</div>
{% endblock %}
", "task/index.html.twig", "/Users/owendewaele/Desktop/eindwerk_cmsdev/templates/task/index.html.twig");
    }
}
