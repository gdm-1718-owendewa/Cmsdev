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

/* functions/email.html.twig */
class __TwigTemplate_415b2e6484f2cea8b09077c3c45b5b839d5f38de8d98e9daa262a44a1593924c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "functions/email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "functions/email.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "functions/email.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
  <h2>Mail voor ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["User"]) || array_key_exists("User", $context) ? $context["User"] : (function () { throw new RuntimeError('Variable "User" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</h2>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 6
            echo "        <p>Start: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "Start", [], "any", false, false, false, 6), "date", [], "any", false, false, false, 6), "html", null, true);
            echo "</p>
        <p>Einde: ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "End", [], "any", false, false, false, 7), "date", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
        <p>Activiteiten: ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Activities", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
        <p>Materiaal: ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Materials", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
        <p>Uren: ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Datediff", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
        <p>Kilometers: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Traveldistance", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prices"]) || array_key_exists("prices", $context) ? $context["prices"] : (function () { throw new RuntimeError('Variable "prices" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 13
                echo "            ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["price"], "id", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 13))) {
                    // line 14
                    echo "                <p>Prijs: €";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "price", [], "any", false, false, false, 14), "html", null, true);
                    echo "</p>
            ";
                }
                // line 16
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "functions/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 18,  123 => 17,  117 => 16,  111 => 14,  108 => 13,  104 => 12,  100 => 11,  96 => 10,  92 => 9,  88 => 8,  84 => 7,  79 => 6,  75 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% extends 'base.html.twig' %}
{% block body %}

  <h2>Mail voor {{User}}</h2>
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
  {%endblock%}", "functions/email.html.twig", "/Users/owendewaele/Desktop/eindwerk_cmsdev/templates/functions/email.html.twig");
    }
}
