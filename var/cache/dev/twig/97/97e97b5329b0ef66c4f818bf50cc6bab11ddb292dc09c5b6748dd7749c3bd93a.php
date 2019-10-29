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

/* home/animales.html.twig */
class __TwigTemplate_5d7e274d6e7a193b6dbf55727ae74bf667aed3fbf1f71b34398e89b630cc5559 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'cabecera' => [$this, 'block_cabecera'],
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/animales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/animales.html.twig"));

        $this->parent = $this->loadTemplate("layouts/master.html.twig", "home/animales.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titulo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        // line 5
        echo "    Animales
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_cabecera($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cabecera"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cabecera"));

        // line 9
        echo "    ";
        $this->displayParentBlock("cabecera", $context, $blocks);
        echo "
    <h1>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h1>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 15
        echo "
    ";
        // line 24
        echo "
    ";
        // line 25
        $context["perro"] = "Pastor Aleman";
        echo "<h4>
    ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["perro"]) || array_key_exists("perro", $context) ? $context["perro"] : (function () { throw new RuntimeError('Variable "perro" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "
    </h4>

    ";
        // line 30
        echo "    <pre>
        ";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 31, $this->source); })()));
        echo "
    </pre>
    ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 33, $this->source); })()), 2, [], "array", false, false, false, 33), "html", null, true);
        echo "

    ";
        // line 36
        echo "    <pre>
        ";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["aves"]) || array_key_exists("aves", $context) ? $context["aves"] : (function () { throw new RuntimeError('Variable "aves" does not exist.', 37, $this->source); })()));
        echo "
    </pre>
    ";
        // line 39
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["aves"]) || array_key_exists("aves", $context) ? $context["aves"] : (function () { throw new RuntimeError('Variable "aves" does not exist.', 39, $this->source); })()), "tipo", [], "any", false, false, false, 39) . " - ") . twig_get_attribute($this->env, $this->source, (isset($context["aves"]) || array_key_exists("aves", $context) ? $context["aves"] : (function () { throw new RuntimeError('Variable "aves" does not exist.', 39, $this->source); })()), "color", [], "any", false, false, false, 39)), "html", null, true);
        echo "


    ";
        // line 43
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["aves"]) || array_key_exists("aves", $context) ? $context["aves"] : (function () { throw new RuntimeError('Variable "aves" does not exist.', 43, $this->source); })()), "color", [], "any", false, false, false, 43) == "gris")) {
            // line 44
            echo "            <h2>
        Una paloma gris
        </h2>

    ";
        } else {
            // line 49
            echo "        <h2>
            No hay palomas gris a la vista
        </h2>

    ";
        }
        // line 54
        echo "
    ";
        // line 56
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 56, $this->source); })())) >= 0)) {
            // line 57
            echo "        <ul>
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["animales"]) || array_key_exists("animales", $context) ? $context["animales"] : (function () { throw new RuntimeError('Variable "animales" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
                // line 59
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["animal"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </ul>
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 65
            echo "        ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "

    ";
        // line 69
        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, (isset($context["aves"]) || array_key_exists("aves", $context) ? $context["aves"] : (function () { throw new RuntimeError('Variable "aves" does not exist.', 69, $this->source); })()), "color", [], "any", false, false, false, 69)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "g") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            // line 70
            echo "    
        <h1>Empieza por g </h1>
    
    ";
        }
        // line 74
        echo "
     ";
        // line 75
        if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, (isset($context["aves"]) || array_key_exists("aves", $context) ? $context["aves"] : (function () { throw new RuntimeError('Variable "aves" does not exist.', 75, $this->source); })()), "color", [], "any", false, false, false, 75)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "s") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 === substr($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, -strlen($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))))) {
            // line 76
            echo "    
        <h1>Termina en  s </h1>
    
    ";
        }
        // line 80
        echo "
    <hr>
   ";
        // line 82
        echo twig_include($this->env, $context, "partials/funciones.html.twig", ["nombre" => "Victoria "]);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/animales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 82,  244 => 80,  238 => 76,  236 => 75,  233 => 74,  227 => 70,  225 => 69,  221 => 67,  212 => 65,  208 => 64,  205 => 63,  201 => 61,  192 => 59,  188 => 58,  185 => 57,  182 => 56,  179 => 54,  172 => 49,  165 => 44,  162 => 43,  156 => 39,  151 => 37,  148 => 36,  143 => 33,  138 => 31,  135 => 30,  129 => 26,  125 => 25,  122 => 24,  119 => 15,  109 => 14,  96 => 10,  91 => 9,  81 => 8,  70 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/master.html.twig\" %}


{% block titulo %}
    Animales
{% endblock %}

{% block cabecera %}
    {{parent()}}
    <h1>{{ title }}</h1>

{% endblock %}

{% block contenido %}

    {#
            <h1>{{ title }}</h1>
        
            <h2>Tu nombre es
                {{nombre}}
                {{apellidos}}
            </h2>
            #}

    {# crear variables #}{% set perro = 'Pastor Aleman' %}<h4>
    {{perro}}
    </h4>

    {#arrays#}
    <pre>
        {{ dump(animales) }}
    </pre>
    {{animales[2]}}

    {#arrays asociativos#}
    <pre>
        {{ dump(aves) }}
    </pre>
    {{aves.tipo ~ ' - ' ~ aves.color  }}


    {#condicionales#}
        {% if aves.color == 'gris' %}
            <h2>
        Una paloma gris
        </h2>

    {% else %}
        <h2>
            No hay palomas gris a la vista
        </h2>

    {% endif %}

    {#bucles#}
    {% if animales|length >= 0 %}
        <ul>
            {% for animal in animales %}
                <li>{{animal}}</li>
            {% endfor %}
        </ul>
    {% endif %}

    {% for i in 0..10 %}
        {{i}}<br>
    {% endfor %}


    {% if aves.color starts with 'g' %}
    
        <h1>Empieza por g </h1>
    
    {% endif %}

     {% if aves.color ends with 's' %}
    
        <h1>Termina en  s </h1>
    
    {% endif %}

    <hr>
   {{ include (\"partials/funciones.html.twig\", {'nombre':'Victoria '}) }}

{% endblock %}
", "home/animales.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/aprendiendo-symfony/templates/home/animales.html.twig");
    }
}
