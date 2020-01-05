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
class __TwigTemplate_f434161d8c1101d9726fd831ea0ace04df8f34cc58d373af4cc6cdbcc55eef39 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/detail.html.twig"));

        // line 1
        echo "<header>
    <nav>
        <ul>
        <li><a href=\"/users\">Users</a></li>
        <li><a href=\"/tasks\">Tasks</a></li>
        <li><a href=\"/hourrates\">Hourrates</a></li>
        <li><a href=\"/transportrates\">Transportrates</a></li>
        <li><a href=\"/\">Home</a></li>
        </ul>
    </nav>
</header>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpdf"]) || array_key_exists("formpdf", $context) ? $context["formpdf"] : (function () { throw new RuntimeError('Variable "formpdf" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpdf"]) || array_key_exists("formpdf", $context) ? $context["formpdf"] : (function () { throw new RuntimeError('Variable "formpdf" does not exist.', 15, $this->source); })()), 'form_end');
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 17
            echo "        <div>
            <h2>Employee: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "EmployeeId", [], "any", false, false, false, 18), "html", null, true);
            echo "</h2>
            <h3>Client: ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "ClientId", [], "any", false, false, false, 19), "html", null, true);
            echo "</h3>
            <p>From: ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "start", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
            <p> Until: ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "end", [], "any", false, false, false, 21), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
            <p>Break Time: ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "break", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
            <p>Activities done: ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "activities", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
            <p>Materials used: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "materials", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
            <p>Traveldistance: ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "traveldistance", [], "any", false, false, false, 25), "html", null, true);
            echo "km</p>
            <p>Dag: ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "currentday", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
            <p>Gewerkte uren: ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "datediff", [], "any", false, false, false, 27), "html", null, true);
            echo " uur</p>
            <a href=\"/edit-task/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">Edit</a>
            <a href=\"/delete-task/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "Id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">Delete</a>
         </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  123 => 29,  119 => 28,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <nav>
        <ul>
        <li><a href=\"/users\">Users</a></li>
        <li><a href=\"/tasks\">Tasks</a></li>
        <li><a href=\"/hourrates\">Hourrates</a></li>
        <li><a href=\"/transportrates\">Transportrates</a></li>
        <li><a href=\"/\">Home</a></li>
        </ul>
    </nav>
</header>
{{ form_start(form) }}
{{ form_end(form) }}
{{ form_start(formpdf) }}
{{ form_end(formpdf) }}
{% for task in tasks %}
        <div>
            <h2>Employee: {{ task.EmployeeId }}</h2>
            <h3>Client: {{ task.ClientId }}</h3>
            <p>From: {{ task.start|date('Y-m-d H:i:s')  }}</p>
            <p> Until: {{ task.end|date('Y-m-d H:i:s')  }}</p>
            <p>Break Time: {{ task.break }}</p>
            <p>Activities done: {{ task.activities }}</p>
            <p>Materials used: {{ task.materials }}</p>
            <p>Traveldistance: {{ task.traveldistance }}km</p>
            <p>Dag: {{ task.currentday }}</p>
            <p>Gewerkte uren: {{ task.datediff }} uur</p>
            <a href=\"/edit-task/{{task.Id}}\">Edit</a>
            <a href=\"/delete-task/{{task.Id}}\">Delete</a>
         </div>
    {% endfor %}", "task/detail.html.twig", "/Users/owendewaele/Desktop/eindwerk_cmsdev/templates/task/detail.html.twig");
    }
}
