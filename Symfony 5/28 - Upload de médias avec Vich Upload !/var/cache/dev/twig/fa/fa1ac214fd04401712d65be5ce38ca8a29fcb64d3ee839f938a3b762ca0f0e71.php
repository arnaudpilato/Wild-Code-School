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

/* program/episode_show.html.twig */
class __TwigTemplate_bdb156470550793f1f0bd738831d91669e318a9714f1800ec0e30a31304ae2a8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "program/episode_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "program/episode_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "program/episode_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "    <section>
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        echo "season|trans";
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("episode"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 5, $this->source); })()), "number", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>
        <h2>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
        <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 7, $this->source); })()), "synopsis", [], "any", false, false, false, 7), "html", null, true);
        echo "</p><br>
        <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comments"), "html", null, true);
        echo "</h2>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 9, $this->source); })()), "comments", [], "any", false, false, false, 9));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 10
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 10), "email", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
            <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("note"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 11), "html", null, true);
            echo "/ 10</p>
            <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comment"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
            ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
                // line 14
                echo "                ";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "email", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 14), "email", [], "any", false, false, false, 14))))) {
                    // line 15
                    echo "                    ";
                    echo twig_include($this->env, $context, "program/_delete_comment.html.twig");
                    echo "
                ";
                }
                // line 17
                echo "            ";
            }
            // line 18
            echo "            <hr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "            <h2>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("let.comment"), "html", null, true);
            echo "</h2>
            ";
            // line 22
            echo twig_include($this->env, $context, "episode/_form.html.twig");
            echo "
        ";
        }
        // line 24
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("program_season_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["program"]) || array_key_exists("program", $context) ? $context["program"] : (function () { throw new RuntimeError('Variable "program" does not exist.', 24, $this->source); })()), "slug", [], "any", false, false, false, 24), "season" => twig_get_attribute($this->env, $this->source, (isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("back.season"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "</a>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "program/episode_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 24,  168 => 22,  163 => 21,  160 => 20,  145 => 18,  142 => 17,  136 => 15,  133 => 14,  131 => 13,  125 => 12,  119 => 11,  112 => 10,  95 => 9,  91 => 8,  87 => 7,  83 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <section>
        <h1>{{ program.title }} - {{ 'season|trans' }} {{ season.id }} - {{ 'episode'|trans }} {{ episode.number }}</h1>
        <h2>{{ episode.title }}</h2>
        <p>{{ episode.synopsis }}</p><br>
        <h2>{{ 'comments'|trans }}</h2>
        {% for comment in episode.comments %}
            <p>{{ 'user'|trans }} : {{ comment.author.email }}</p>
            <p>{{ 'note'|trans }} : {{ comment.rate }}/ 10</p>
            <p>{{ 'comment'|trans }} : {{ comment.comment }}</p>
            {% if app.user %}
                {% if is_granted(\"ROLE_ADMIN\") or app.user.email == comment.author.email %}
                    {{ include('program/_delete_comment.html.twig') }}
                {% endif %}
            {% endif %}
            <hr>
        {% endfor %}
        {% if app.user %}
            <h2>{{ 'let.comment'|trans }}</h2>
            {{ include('episode/_form.html.twig') }}
        {% endif %}
        <a href=\"{{ path('program_season_show', {slug: program.slug, season: season.id}) }}\">{{ 'back.season'|trans }} {{ season.id }}</a>
    </section>

{% endblock %}", "program/episode_show.html.twig", "/Users/pil/PhpstormProjects/wild-series/templates/program/episode_show.html.twig");
    }
}
