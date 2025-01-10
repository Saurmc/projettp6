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

/* home/index.html.twig */
class __TwigTemplate_248e93289c56d9be3d127a728c4fb874 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "AdopteUnDev - Connectez les talents aux opportunités";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<!-- Hero Section -->
<div class=\"bg-primary text-white py-5\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <h1 class=\"display-4 fw-bold mb-4\">AdopteUnDev</h1>
                <p class=\"lead mb-4\">La plateforme qui connecte les développeurs talentueux avec les entreprises innovantes.</p>
            </div>
            <div class=\"col-md-6 text-center\">
                <img src=\"https://illustrations.popsy.co/white/developer.svg\" alt=\"Développeur\" class=\"img-fluid\" style=\"max-height: 300px;\">
            </div>
        </div>
    </div>
</div>

<!-- Choix d'inscription -->
<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 text-center mb-4\">
            <h2 class=\"display-5 mb-3\">Rejoignez l'aventure</h2>
            <p class=\"lead\">Choisissez votre profil pour commencer</p>
        </div>
    </div>
    
    <div class=\"row justify-content-center g-4\">
        <div class=\"col-md-5\">
            <div class=\"card h-100 shadow-sm hover-card\">
                <div class=\"card-body text-center p-5\">
                    <i class=\"fas fa-laptop-code fa-4x text-primary mb-4\"></i>
                    <h3 class=\"card-title mb-3\">Je suis développeur</h3>
                    <p class=\"card-text mb-4\">
                        Créez votre profil, mettez en avant vos compétences et trouvez l'entreprise qui vous correspond.
                    </p>
                    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_dev");
        yield "\" class=\"btn btn-primary btn-lg\">
                        <i class=\"fas fa-user-plus me-2\"></i>S'inscrire en tant que développeur
                    </a>
                </div>
            </div>
        </div>

        <div class=\"col-md-5\">
            <div class=\"card h-100 shadow-sm hover-card\">
                <div class=\"card-body text-center p-5\">
                    <i class=\"fas fa-building fa-4x text-success mb-4\"></i>
                    <h3 class=\"card-title mb-3\">Je suis une entreprise</h3>
                    <p class=\"card-text mb-4\">
                        Publiez vos offres d'emploi et trouvez les meilleurs talents pour vos projets.
                    </p>
                    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_company");
        yield "\" class=\"btn btn-success btn-lg\">
                        <i class=\"fas fa-user-plus me-2\"></i>S'inscrire en tant qu'entreprise
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-6 text-center\">
            <p class=\"mb-0\">Déjà inscrit ? <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connectez-vous ici</a></p>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class=\"bg-light py-5\">
    <div class=\"container\">
        <div class=\"row g-4\">
            <div class=\"col-md-4\">
                <div class=\"text-center\">
                    <i class=\"fas fa-search fa-3x text-primary mb-3\"></i>
                    <h3 class=\"h4\">Recherche par compétences</h3>
                    <p>Trouvez rapidement les profils qui correspondent exactement à vos besoins.</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"text-center\">
                    <i class=\"fas fa-handshake fa-3x text-primary mb-3\"></i>
                    <h3 class=\"h4\">Mise en relation directe</h3>
                    <p>Contactez directement les développeurs et discutez de vos projets sans intermédiaire.</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"text-center\">
                    <i class=\"fas fa-check-circle fa-3x text-primary mb-3\"></i>
                    <h3 class=\"h4\">Profils vérifiés</h3>
                    <p>Tous nos développeurs sont vérifiés pour assurer la qualité et le professionnalisme.</p>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 98
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 99
        yield "<style>
    .hover-card {
        transition: transform 0.2s ease-in-out;
    }
    .hover-card:hover {
        transform: translateY(-5px);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  206 => 99,  189 => 98,  152 => 64,  139 => 54,  121 => 39,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AdopteUnDev - Connectez les talents aux opportunités{% endblock %}

{% block body %}
<!-- Hero Section -->
<div class=\"bg-primary text-white py-5\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-6\">
                <h1 class=\"display-4 fw-bold mb-4\">AdopteUnDev</h1>
                <p class=\"lead mb-4\">La plateforme qui connecte les développeurs talentueux avec les entreprises innovantes.</p>
            </div>
            <div class=\"col-md-6 text-center\">
                <img src=\"https://illustrations.popsy.co/white/developer.svg\" alt=\"Développeur\" class=\"img-fluid\" style=\"max-height: 300px;\">
            </div>
        </div>
    </div>
</div>

<!-- Choix d'inscription -->
<div class=\"container my-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 text-center mb-4\">
            <h2 class=\"display-5 mb-3\">Rejoignez l'aventure</h2>
            <p class=\"lead\">Choisissez votre profil pour commencer</p>
        </div>
    </div>
    
    <div class=\"row justify-content-center g-4\">
        <div class=\"col-md-5\">
            <div class=\"card h-100 shadow-sm hover-card\">
                <div class=\"card-body text-center p-5\">
                    <i class=\"fas fa-laptop-code fa-4x text-primary mb-4\"></i>
                    <h3 class=\"card-title mb-3\">Je suis développeur</h3>
                    <p class=\"card-text mb-4\">
                        Créez votre profil, mettez en avant vos compétences et trouvez l'entreprise qui vous correspond.
                    </p>
                    <a href=\"{{ path('register_dev') }}\" class=\"btn btn-primary btn-lg\">
                        <i class=\"fas fa-user-plus me-2\"></i>S'inscrire en tant que développeur
                    </a>
                </div>
            </div>
        </div>

        <div class=\"col-md-5\">
            <div class=\"card h-100 shadow-sm hover-card\">
                <div class=\"card-body text-center p-5\">
                    <i class=\"fas fa-building fa-4x text-success mb-4\"></i>
                    <h3 class=\"card-title mb-3\">Je suis une entreprise</h3>
                    <p class=\"card-text mb-4\">
                        Publiez vos offres d'emploi et trouvez les meilleurs talents pour vos projets.
                    </p>
                    <a href=\"{{ path('register_company') }}\" class=\"btn btn-success btn-lg\">
                        <i class=\"fas fa-user-plus me-2\"></i>S'inscrire en tant qu'entreprise
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-6 text-center\">
            <p class=\"mb-0\">Déjà inscrit ? <a href=\"{{ path('app_login') }}\">Connectez-vous ici</a></p>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class=\"bg-light py-5\">
    <div class=\"container\">
        <div class=\"row g-4\">
            <div class=\"col-md-4\">
                <div class=\"text-center\">
                    <i class=\"fas fa-search fa-3x text-primary mb-3\"></i>
                    <h3 class=\"h4\">Recherche par compétences</h3>
                    <p>Trouvez rapidement les profils qui correspondent exactement à vos besoins.</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"text-center\">
                    <i class=\"fas fa-handshake fa-3x text-primary mb-3\"></i>
                    <h3 class=\"h4\">Mise en relation directe</h3>
                    <p>Contactez directement les développeurs et discutez de vos projets sans intermédiaire.</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"text-center\">
                    <i class=\"fas fa-check-circle fa-3x text-primary mb-3\"></i>
                    <h3 class=\"h4\">Profils vérifiés</h3>
                    <p>Tous nos développeurs sont vérifiés pour assurer la qualité et le professionnalisme.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{% block stylesheets %}
<style>
    .hover-card {
        transition: transform 0.2s ease-in-out;
    }
    .hover-card:hover {
        transform: translateY(-5px);
    }
</style>
{% endblock %}
{% endblock %}", "home/index.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\home\\index.html.twig");
    }
}
