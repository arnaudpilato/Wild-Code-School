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

/* episode/newEpisodeEmail.html.twig */
class __TwigTemplate_6ba7753a3317dcb94518c12652fe50d2d2ee66565a3e7b279a3b6653ff444df7 extends Template
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
        return "layoutEmail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "episode/newEpisodeEmail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "episode/newEpisodeEmail.html.twig"));

        $this->parent = $this->loadTemplate("layoutEmail.html.twig", "episode/newEpisodeEmail.html.twig", 1);
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
        echo "    <section style=\"background-color: #264653; border-radius: 8px\" class=\"email\">
        <h1 style=\"color:#F4A261;\">Un nouvel épisode ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo " est maintenant disponible</h1>
        <p style=\"color:#F4A261;\">Bonjour, l'épisode n°";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 6, $this->source); })()), "number", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo " de la saison ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 6, $this->source); })()), "season", [], "any", false, false, false, 6), "number", [], "any", false, false, false, 6), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 6, $this->source); })()), "season", [], "any", false, false, false, 6), "program", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo " est désormait disponible sur  Wild Series</p>
        <p style=\"color:#F4A261;\">Synopsis : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 7, $this->source); })()), "synopsis", [], "any", false, false, false, 7), "html", null, true);
        echo "
        <p><a style=\"color:#F4A261; border-radius: 8px; background: #264653; text-decoration: none;\" href=\"http://127.0.0.1:8000/programs/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 8, $this->source); })()), "season", [], "any", false, false, false, 8), "program", [], "any", false, false, false, 8), "slug", [], "any", false, false, false, 8), "html", null, true);
        echo "/seasons/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 8, $this->source); })()), "season", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "/episodes/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["episode"]) || array_key_exists("episode", $context) ? $context["episode"] : (function () { throw new RuntimeError('Variable "episode" does not exist.', 8, $this->source); })()), "slug", [], "any", false, false, false, 8), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("see.episode"), "html", null, true);
        echo "</a></p>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "episode/newEpisodeEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 8,  85 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layoutEmail.html.twig' %}

{% block body %}
    <section style=\"background-color: #264653; border-radius: 8px\" class=\"email\">
        <h1 style=\"color:#F4A261;\">Un nouvel épisode {{ episode.title }} est maintenant disponible</h1>
        <p style=\"color:#F4A261;\">Bonjour, l'épisode n°{{ episode.number}} {{ episode.title }} de la saison {{ episode.season.number }} de {{ episode.season.program.title}} est désormait disponible sur  Wild Series</p>
        <p style=\"color:#F4A261;\">Synopsis : {{episode.synopsis }}
        <p><a style=\"color:#F4A261; border-radius: 8px; background: #264653; text-decoration: none;\" href=\"http://127.0.0.1:8000/programs/{{episode.season.program.slug}}/seasons/{{ episode.season.id }}/episodes/{{ episode.slug }}\">{{ 'see.episode'|trans }}</a></p>
    </section>
{% endblock %}", "episode/newEpisodeEmail.html.twig", "/Users/pil/PhpstormProjects/wild-series/templates/episode/newEpisodeEmail.html.twig");
    }
}
