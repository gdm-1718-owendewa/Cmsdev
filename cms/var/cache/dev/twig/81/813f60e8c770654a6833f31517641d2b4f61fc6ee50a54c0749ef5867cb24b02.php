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

/* functions/pdf.html.twig */
class __TwigTemplate_2acd51b364fd388aaa472c0caaa1ced667f3995ff7b5337b0281b0e840fe5951 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "functions/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "functions/pdf.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "functions/pdf.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Factuur ";
        echo twig_escape_filter($this->env, (isset($context["User"]) || array_key_exists("User", $context) ? $context["User"] : (function () { throw new RuntimeError('Variable "User" does not exist.', 2, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <header>
        <nav>
            <ul>
                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/users\">Users</a></li>
                <li><a href=\"/tasks\">Tasks</a></li>
                <li><a href=\"/hourrates\">Hourrates</a></li>
                <li><a href=\"/transportrates\">Transportrates</a></li>
                <li><code>| Arte Tech</code></li>
            </ul>
        </nav>
    </header>
    <div>
      
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 20
            echo "        <p>Start: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "Start", [], "any", false, false, false, 20), "date", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
        <p>Einde: ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "End", [], "any", false, false, false, 21), "date", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
        <p>Activiteiten: ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Activities", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
        <p>Materiaal: ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Materials", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
        <p>Uren: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Datediff", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
        <p>Kilometers: ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Traveldistance", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new RuntimeError('Variable "prices" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 27
                echo "            ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "                <p>Prijs: €";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "price", [], "any", false, false, false, 28), "html", null, true);
                    echo "</p>
            ";
                }
                // line 30
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "functions/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 32,  154 => 31,  148 => 30,  142 => 28,  139 => 27,  135 => 26,  131 => 25,  127 => 24,  123 => 23,  119 => 22,  115 => 21,  110 => 20,  106 => 19,  89 => 4,  79 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Factuur {{User}}{% endblock %}
{% block body %}

    <header>
        <nav>
            <ul>
                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/users\">Users</a></li>
                <li><a href=\"/tasks\">Tasks</a></li>
                <li><a href=\"/hourrates\">Hourrates</a></li>
                <li><a href=\"/transportrates\">Transportrates</a></li>
                <li><code>| Arte Tech</code></li>
            </ul>
        </nav>
    </header>
    <div>
      
    {% for task in tasks %}
        <p>Start: {{task.Start.date}}</p>
        <p>Einde: {{task.End.date}}</p>
        <p>Activiteiten: {{task.Activities}}</p>
        <p>Materiaal: {{task.Materials}}</p>
        <p>Uren: {{task.Datediff}}</p>
        <p>Kilometers: {{task.Traveldistance}}</p>
        {% for price in prices %}
            {% if price.id == task.id%}
                <p>Prijs: €{{price.price}}</p>
            {%endif%}
        {% endfor %}
    {% endfor %}
    </div>
     
{% endblock %}

", "functions/pdf.html.twig", "/Users/owendewaele/Desktop/eindwerk_cmsdev/templates/functions/pdf.html.twig");
    }
}
