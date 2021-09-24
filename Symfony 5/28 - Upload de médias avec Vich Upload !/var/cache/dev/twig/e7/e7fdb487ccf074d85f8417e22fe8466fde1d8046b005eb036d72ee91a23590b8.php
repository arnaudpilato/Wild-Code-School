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

/* program/show.html.twig */
class __TwigTemplate_19745f2536c039825cdc2e39d5ae899e27f98298aff5c02bf4a0eb5e515637bf extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "program/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "program/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "program/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("serie"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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

        // line 6
        echo "    <section>
        <div class=\"media\">
            <img class=\"align-self-start mr-3\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 8, $this->source); })()), "poster", [], "any", false, false, false, 8))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " poster\">
            <div class=\"media-body\">
                <h1 class=\"mt-0\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
                ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "                <a id=\"watchlist\">
                    <i id=\"watchlistIcon\" class=\"";
            // line 13
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "isInWatchlist", [0 => (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 13, $this->source); })())], "method", false, false, false, 13)) ? ("fas") : ("far"));
            echo " fa-heart watchlist\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("program_watchlist", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\"></i>
                </a>
                ";
        }
        // line 16
        echo "                <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("synopsis"), "html", null, true);
        echo "</p>
                <ul>
                    <li>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 18, $this->source); })()), "summary", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
                </ul>
                <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("actors"), "html", null, true);
        echo " :</p>
                <ul>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 22, $this->source); })()), "actors", [], "any", false, false, false, 22));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 23
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actor_show", ["id" => twig_get_attribute($this->env, $this->source, $context["actor"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no.actors"), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </ul>
                <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("categorie"), "html", null, true);
        echo " :</p>
                <ul>
                    <li>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 30, $this->source); })()), "category", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</li>
                </ul>
                <ul>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seasons"]) || array_key_exists("seasons", $context) ? $context["seasons"] : (function () { throw new RuntimeError('Variable "seasons" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 34
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("program_season_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 34, $this->source); })()), "slug", [], "any", false, false, false, 34), "season" => twig_get_attribute($this->env, $this->source, $context["season"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("season"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["season"], "number", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </ul>

                <a class=\"btn btn-secondary\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("program_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back.list.programs"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("watchlist");
        echo "
    ";
        // line 46
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "program/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 46,  222 => 45,  212 => 44,  195 => 38,  191 => 36,  178 => 34,  174 => 33,  168 => 30,  163 => 28,  160 => 27,  151 => 25,  141 => 23,  136 => 22,  131 => 20,  126 => 18,  120 => 16,  112 => 13,  109 => 12,  107 => 11,  103 => 10,  96 => 8,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{'serie'|trans}} {{ program.id }} {% endblock %}

{% block body %}
    <section>
        <div class=\"media\">
            <img class=\"align-self-start mr-3\" src=\"{{ asset('uploads/' ~ program.poster) }}\" alt=\"{{ program.title }} poster\">
            <div class=\"media-body\">
                <h1 class=\"mt-0\">{{ program.title }}</h1>
                {% if app.user %}
                <a id=\"watchlist\">
                    <i id=\"watchlistIcon\" class=\"{{ app.user.isInWatchlist(program) ? 'fas' : 'far' }} fa-heart watchlist\" data-href=\"{{ path(\"program_watchlist\", { id: program.id}) }}\"></i>
                </a>
                {% endif %}
                <p>{{ 'synopsis'|trans }}</p>
                <ul>
                    <li>{{ program.summary }}</li>
                </ul>
                <p>{{ 'actors'|trans }} :</p>
                <ul>
                    {% for actor in program.actors %}
                        <li><a href=\"{{ path('actor_show', {id: actor.id}) }}\">{{ actor.name }}</a></li>
                    {% else %}
                        <li>{{ 'no.actors'|trans}}</li>
                    {% endfor %}
                </ul>
                <p>{{ 'categorie'|trans }} :</p>
                <ul>
                    <li>{{ program.category.name }}</li>
                </ul>
                <ul>
                    {% for season in seasons %}
                        <li><a href=\"{{ path('program_season_show', {slug: program.slug, season: season.id}) }}\">{{ 'season'|trans }} {{ season.number }}</a></li>
                    {% endfor %}
                </ul>

                <a class=\"btn btn-secondary\" href=\"{{ path('program_index') }}\">{{ 'back.list.programs'|trans}}</a>
            </div>
        </div>
    </section>
{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('watchlist') }}
    {{ parent() }}
{% endblock %}", "program/show.html.twig", "/Users/pil/PhpstormProjects/wild-series/templates/program/show.html.twig");
    }
}
