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

/* partials/funciones.html.twig */
class __TwigTemplate_752773b41884a9b19276b689f9ff30be57094fa9c86909bf276c992220044300 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/funciones.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/funciones.html.twig"));

        // line 1
        echo "<h1>Funciones</h1>
";
        // line 3
        echo twig_escape_filter($this->env, min(9, 11, 6, 99, 2), "html", null, true);
        echo "
<br>
";
        // line 5
        echo twig_escape_filter($this->env, twig_random($this->env, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 5, $this->source); })())), "html", null, true);
        echo "
<br>
";
        // line 7
        echo twig_escape_filter($this->env, max(9, 11, 6, 99, 2), "html", null, true);
        echo "
<br>

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 100, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
    <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
<h3>
    ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nombre"]) || array_key_exists("nombre", $context) ? $context["nombre"] : (function () { throw new RuntimeError('Variable "nombre" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "
</h3>

<h1>
    Filtros
</h1>
";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 22, $this->source); })())), "html", null, true);
        echo "

";
        // line 24
        $context["email"] = "email@emnail.com";
        // line 25
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_upper_filter($this->env, twig_trim_filter((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 25, $this->source); })())))), "html", null, true);
        echo "

<h1>Extensiones personalizadas </h1>
";
        // line 28
        echo $this->extensions['App\Twig\MiFiltroExtension']->multiplicar(2);
        // line 30
        echo "
";
        // line 31
        echo $this->extensions['App\Twig\MiFiltroExtension']->multiplicar(12);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/funciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 31,  104 => 30,  102 => 28,  96 => 25,  94 => 24,  89 => 22,  80 => 16,  76 => 14,  66 => 11,  62 => 10,  56 => 7,  51 => 5,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Funciones</h1>
{#funciones predefinidas #}
{{min(9,11,6,99,2) }}
<br>
{{random(animales)}}
<br>
{{max(9,11,6,99,2) }}
<br>

{% for i in range(0,100, 5) %}
    {{i}}
    <br>
{% endfor %}

<h3>
    {{nombre}}
</h3>

<h1>
    Filtros
</h1>
{{animales|length}}

{% set email = 'email@emnail.com' %}
{{email|trim|upper|lower}}

<h1>Extensiones personalizadas </h1>
{{
    mutiplicar(2)|raw
}}
{{ 12|multiplicar|raw }}", "partials/funciones.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/aprendiendo-symfony/templates/partials/funciones.html.twig");
    }
}
