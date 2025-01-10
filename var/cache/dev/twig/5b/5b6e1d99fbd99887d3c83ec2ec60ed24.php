<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_5c59291f48eeb7cfa49f3799b99846e6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>👩‍💻</text></svg>\">
        
        ";
        // line 10
        yield "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        ";
        // line 13
        yield "        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
        
        ";
        // line 16
        yield "        ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 17
        yield "    </head>
    <body>
        ";
        // line 20
        yield "        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                    <i class=\"fas fa-laptop-code me-2\"></i>AdopteUnDev
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-auto\">
                        ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            yield "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEV")) {
                // line 32
                yield "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 33
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dev_dashboard");
                yield "\">
                                        <i class=\"fas fa-tachometer-alt me-1\"></i>Dashboard
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 38
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dev_profile");
                yield "\">
                                        <i class=\"fas fa-user me-1\"></i>Mon Profil
                                    </a>
                                </li>
                            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENTREPRISE")) {
                // line 43
                yield "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 44
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_dashboard");
                yield "\">
                                        <i class=\"fas fa-tachometer-alt me-1\"></i>Dashboard
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 49
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_poste_new");
                yield "\">
                                        <i class=\"fas fa-plus-circle me-1\"></i>Créer une offre
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 54
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_about");
                yield "\">
                                        <i class=\"fas fa-info-circle me-1\"></i>À propos de nous
                                    </a>
                                </li>
                            ";
            }
            // line 59
            yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"fas fa-sign-out-alt me-1\"></i>Déconnexion
                                </a>
                            </li>
                        ";
        } else {
            // line 65
            yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 66
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                                    <i class=\"fas fa-sign-in-alt me-1\"></i>Connexion
                                </a>
                            </li>
                        ";
        }
        // line 71
        yield "                    </ul>
                </div>
            </div>
        </nav>

        ";
        // line 77
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "flashes", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 78
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 79
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "
        ";
        // line 87
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 88
        yield "
        ";
        // line 90
        yield "        <footer class=\"bg-dark text-white py-4 mt-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h5>AdopteUnDev</h5>
                        <p>La plateforme qui connecte les développeurs talentueux avec les entreprises innovantes.</p>
                    </div>
                    <div class=\"col-md-6 text-md-end\">
                        <h5>Liens utiles</h5>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-white\">Accueil</a></li>
                            ";
        // line 101
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) {
            // line 102
            yield "                                <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-white\">Connexion</a></li>
                            ";
        }
        // line 104
        yield "                        </ul>
                    </div>
                </div>
                <hr>
                <div class=\"text-center\">
                    <p class=\"mb-0\">&copy; ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " AdopteUnDev. Tous droits réservés.</p>
                </div>
            </div>
        </footer>

        ";
        // line 115
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
        
        ";
        // line 118
        yield "        ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 119
        yield "    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  316 => 118,  300 => 87,  284 => 16,  267 => 6,  258 => 119,  255 => 118,  251 => 115,  243 => 109,  236 => 104,  230 => 102,  228 => 101,  224 => 100,  212 => 90,  209 => 88,  206 => 87,  203 => 85,  197 => 84,  187 => 80,  182 => 79,  177 => 78,  172 => 77,  165 => 71,  157 => 66,  154 => 65,  146 => 60,  143 => 59,  135 => 54,  127 => 49,  119 => 44,  116 => 43,  108 => 38,  100 => 33,  97 => 32,  94 => 31,  92 => 30,  81 => 22,  77 => 20,  73 => 17,  70 => 16,  66 => 13,  62 => 10,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>👩‍💻</text></svg>\">
        
        {# Bootstrap CSS #}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        {# Font Awesome #}
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
        
        {# Custom CSS #}
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {# Navbar #}
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                    <i class=\"fas fa-laptop-code me-2\"></i>AdopteUnDev
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-auto\">
                        {% if app.user %}
                            {% if is_granted('ROLE_DEV') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('dev_dashboard') }}\">
                                        <i class=\"fas fa-tachometer-alt me-1\"></i>Dashboard
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('app_dev_profile') }}\">
                                        <i class=\"fas fa-user me-1\"></i>Mon Profil
                                    </a>
                                </li>
                            {% elseif is_granted('ROLE_ENTREPRISE') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('entreprise_dashboard') }}\">
                                        <i class=\"fas fa-tachometer-alt me-1\"></i>Dashboard
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('fiche_poste_new') }}\">
                                        <i class=\"fas fa-plus-circle me-1\"></i>Créer une offre
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('entreprise_about') }}\">
                                        <i class=\"fas fa-info-circle me-1\"></i>À propos de nous
                                    </a>
                                </li>
                            {% endif %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                                    <i class=\"fas fa-sign-out-alt me-1\"></i>Déconnexion
                                </a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
                                    <i class=\"fas fa-sign-in-alt me-1\"></i>Connexion
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>

        {# Flash Messages #}
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        {# Main Content #}
        {% block body %}{% endblock %}

        {# Footer #}
        <footer class=\"bg-dark text-white py-4 mt-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h5>AdopteUnDev</h5>
                        <p>La plateforme qui connecte les développeurs talentueux avec les entreprises innovantes.</p>
                    </div>
                    <div class=\"col-md-6 text-md-end\">
                        <h5>Liens utiles</h5>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"{{ path('app_home') }}\" class=\"text-white\">Accueil</a></li>
                            {% if not app.user %}
                                <li><a href=\"{{ path('app_login') }}\" class=\"text-white\">Connexion</a></li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
                <hr>
                <div class=\"text-center\">
                    <p class=\"mb-0\">&copy; {{ \"now\"|date(\"Y\") }} AdopteUnDev. Tous droits réservés.</p>
                </div>
            </div>
        </footer>

        {# Bootstrap JS #}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
        
        {# Custom JS #}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\base.html.twig");
    }
}
