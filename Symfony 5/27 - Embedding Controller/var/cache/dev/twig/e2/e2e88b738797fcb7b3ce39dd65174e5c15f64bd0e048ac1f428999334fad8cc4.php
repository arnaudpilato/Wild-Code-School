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

/* /include/_navbar.html.twig */
class __TwigTemplate_ca19606134b1321c35f3e9866e138ab58b7ce242b5c5f4b1028ffb3566402f60 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/include/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/include/_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-primary\">
    <a class=\"navbar-brand text-secondary\" href=\"/fr\"><img class=\"logo\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo_wild_series.png"), "html", null, true);
        echo "\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link text-secondary text-home\" href=\"#\">Wild Series<span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link text-secondary\" href=\"/categories/\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle text-secondary\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Dropdown
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled text-secondary\" href=\"#\">Disabled</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle text-secondary\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index", ["_locale" => "fr"]);
        echo "\" id=\"translateDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"  aria-expanded=\"false\"><span class=\"flag-icon flag-icon-fr\"> </span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("language"), "html", null, true);
        echo "</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"translateDropdown\">
                    <a class=\"dropdown-item\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index", ["_locale" => "fr"]);
        echo "\"><span class=\"flag-icon flag-icon-fr\"> </span>Français</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index", ["_locale" => "en"]);
        echo "\"><span class=\"flag-icon flag-icon-en\"> </span>English</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index", ["_locale" => "es"]);
        echo "\"><span class=\"flag-icon flag-icon-es\"> </span>Spain</a>
                </div>
            </li>
            <li class=\"dropdown\">
                <a class=\"nav-link dropdown-toggle text-secondary\" href=\"#\" role=\"button\" id=\"dropdownMenuCategories\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Categories</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuCategories\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DefautController::navbarTop"));
        // line 41
        echo "
                </div>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-secondary my-2 my-sm-0\" type=\"submit\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search"), "html", null, true);
        echo "</button>
        </form>
        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("hello_username", ["%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "email", [], "any", false, false, false, 50)], "messages");
            // line 52
            echo " !
            <a class=\"ml-1 mr-1\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account"), "html", null, true);
            echo "</a>
            <a class=\"ml-1 mr-1\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.logout"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 56
            echo "            <a class=\"ml-1 mr-1\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.create"), "html", null, true);
            echo "</a>
            <a class=\"ml-1 mr-1\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.login"), "html", null, true);
            echo "</a>
        ";
        }
        // line 59
        echo "    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/include/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 59,  147 => 57,  140 => 56,  133 => 54,  127 => 53,  124 => 52,  121 => 50,  119 => 49,  114 => 47,  106 => 41,  104 => 40,  95 => 34,  91 => 33,  87 => 32,  80 => 30,  60 => 13,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-primary\">
    <a class=\"navbar-brand text-secondary\" href=\"/fr\"><img class=\"logo\" src=\"{{ asset('build/logo_wild_series.png') }}\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link text-secondary text-home\" href=\"#\">Wild Series<span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link text-secondary\" href=\"/categories/\">{{ 'link'|trans }}</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle text-secondary\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Dropdown
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled text-secondary\" href=\"#\">Disabled</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle text-secondary\" href=\"{{ path('app_index', {'_locale': 'fr'}) }}\" id=\"translateDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"  aria-expanded=\"false\"><span class=\"flag-icon flag-icon-fr\"> </span>{{ 'language'|trans }}</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"translateDropdown\">
                    <a class=\"dropdown-item\" href=\"{{ path('app_index', {'_locale':'fr'}) }}\"><span class=\"flag-icon flag-icon-fr\"> </span>Français</a>
                    <a class=\"dropdown-item\" href=\"{{ path('app_index', {'_locale':'en'}) }}\"><span class=\"flag-icon flag-icon-en\"> </span>English</a>
                    <a class=\"dropdown-item\" href=\"{{ path('app_index', {'_locale':'es'}) }}\"><span class=\"flag-icon flag-icon-es\"> </span>Spain</a>
                </div>
            </li>
            <li class=\"dropdown\">
                <a class=\"nav-link dropdown-toggle text-secondary\" href=\"#\" role=\"button\" id=\"dropdownMenuCategories\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Categories</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuCategories\">
                    {{ render(controller(
                        'App\\\\Controller\\\\DefautController::navbarTop'))}}
                </div>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-secondary my-2 my-sm-0\" type=\"submit\">{{ 'search'|trans }}</button>
        </form>
        {% if app.user %}
            {% trans with {'%username%': app.user.email} %}
                hello_username
            {% endtrans %} !
            <a class=\"ml-1 mr-1\" href=\"{{ path('profile_index') }}\">{{ 'account'|trans }}</a>
            <a class=\"ml-1 mr-1\" href=\"{{ path('app_logout') }}\">{{ 'account.logout'|trans }}</a>
        {% else %}
            <a class=\"ml-1 mr-1\" href=\"{{ path('app_register') }}\">{{ 'account.create'|trans}}</a>
            <a class=\"ml-1 mr-1\" href=\"{{ path('app_login') }}\">{{ 'account.login'|trans }}</a>
        {% endif %}
    </div>
</nav>", "/include/_navbar.html.twig", "/Users/pil/PhpstormProjects/wild-series/templates/include/_navbar.html.twig");
    }
}
