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
class __TwigTemplate_f4a3bd67c1ebce7c544d53dffbce390284c83ce43fd4573a3f6153d1070be2c7 extends Template
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
            'header' => [$this, 'block_header'],
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
        $this->displayBlock('header', $context, $blocks);
        // line 7
        echo "
<header>
    <nav>
        <ul>
        ";
        // line 11
        if (0 !== twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 11, $this->source); })()), "anon.")) {
            // line 12
            echo "            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 12, $this->source); })()), "position", [], "any", false, false, false, 12), "Admin")) {
                // line 13
                echo "            <li><a href=\"/users\">Users</a></li>
            <li><a href=\"/tasks\">Tasks</a></li>
            <li><a href=\"/hourrates\">Hourrates</a></li>
            <li><a href=\"/transportrates\">Transportrates</a></li>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/logout\">Logout</a></li>
            ";
            } else {
                // line 20
                echo "            <li><a href=\"/logout\">Logout</a></li>
            ";
            }
            // line 22
            echo "         ";
        } else {
            // line 23
            echo "            <li><a href=\"/login\">Login</a></li>
         ";
        }
        // line 25
        echo "        </ul>
    </nav>
</header>
    
    <div id=\"leftDiv\"></div>  
    <div id=\"middleDiv\"><h1>Welkom 
    ";
        // line 31
        if (0 !== twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 31, $this->source); })()), "anon.")) {
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 32, $this->source); })()), "Name", [], "any", false, false, false, 32), "html", null, true);
            echo "</h1>
        ";
            // line 33
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 33, $this->source); })()), "function", [], "any", false, false, false, 33), "Client")) {
                // line 34
                echo "        <p> Ontvang een mail met een de periode van de door u aangeduide aantal dagen</p>
        ";
                // line 35
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start');
                echo "
        ";
                // line 36
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
                echo "
        <p> Ontvang een pdf met een de periode van de door u aangeduide aantal dagen</p>
        ";
                // line 38
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpdf"]) || array_key_exists("formpdf", $context) ? $context["formpdf"] : (function () { throw new RuntimeError('Variable "formpdf" does not exist.', 38, $this->source); })()), 'form_start');
                echo "
        ";
                // line 39
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpdf"]) || array_key_exists("formpdf", $context) ? $context["formpdf"] : (function () { throw new RuntimeError('Variable "formpdf" does not exist.', 39, $this->source); })()), 'form_end');
                echo "
        ";
            }
            // line 41
            echo "    ";
        }
        // line 42
        echo "    </div>
    <div id=\"rightDiv\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
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
        return array (  175 => 5,  163 => 42,  160 => 41,  155 => 39,  151 => 38,  146 => 36,  142 => 35,  139 => 34,  137 => 33,  132 => 32,  130 => 31,  122 => 25,  118 => 23,  115 => 22,  111 => 20,  102 => 13,  99 => 12,  97 => 11,  91 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}
{% block body %}
{%block header%}
{%endblock%}

<header>
    <nav>
        <ul>
        {% if state != \"anon.\"%}
            {% if state.position == \"Admin\"%}
            <li><a href=\"/users\">Users</a></li>
            <li><a href=\"/tasks\">Tasks</a></li>
            <li><a href=\"/hourrates\">Hourrates</a></li>
            <li><a href=\"/transportrates\">Transportrates</a></li>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/logout\">Logout</a></li>
            {%else%}
            <li><a href=\"/logout\">Logout</a></li>
            {%endif%}
         {%else%}
            <li><a href=\"/login\">Login</a></li>
         {%endif%}
        </ul>
    </nav>
</header>
    
    <div id=\"leftDiv\"></div>  
    <div id=\"middleDiv\"><h1>Welkom 
    {% if state != \"anon.\" %}
        {{state.Name}}</h1>
        {% if state.function == \"Client\" %}
        <p> Ontvang een mail met een de periode van de door u aangeduide aantal dagen</p>
        {{ form_start(form) }}
        {{ form_end(form) }}
        <p> Ontvang een pdf met een de periode van de door u aangeduide aantal dagen</p>
        {{ form_start(formpdf) }}
        {{ form_end(formpdf) }}
        {% endif %}
    {% endif %}
    </div>
    <div id=\"rightDiv\"></div>
{% endblock %}
", "home/index.html.twig", "/Users/owendewaele/Desktop/eindwerk_cmsdev/templates/home/index.html.twig");
    }
}
