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

/* registration/choix.html.twig */
class __TwigTemplate_b31c19f48b1bde94423826350994aacd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/choix.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/choix.html.twig", 1);
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

        yield "Choisissez votre profil - AdopteUnDev";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 text-center mb-4\">
            <h1 class=\"display-4 mb-3\">Rejoignez AdopteUnDev</h1>
            <p class=\"lead\">Choisissez votre profil pour commencer l'aventure</p>
        </div>
    </div>
    
    <div class=\"row justify-content-center\">
        <div class=\"col-md-5\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-laptop-code fa-4x text-primary mb-3\"></i>
                    <h2 class=\"card-title\">Je suis développeur</h2>
                    <p class=\"card-text\">
                        Créez votre profil, mettez en avant vos compétences et trouvez l'entreprise qui vous correspond.
                    </p>
                    <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_dev");
        yield "\" class=\"btn btn-primary btn-lg mt-3\">
                        <i class=\"fas fa-user-plus me-2\"></i>S'inscrire en tant que développeur
                    </a>
                </div>
            </div>
        </div>

        <div class=\"col-md-5\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-building fa-4x text-success mb-3\"></i>
                    <h2 class=\"card-title\">Je suis une entreprise</h2>
                    <p class=\"card-text\">
                        Publiez vos offres d'emploi et trouvez les meilleurs talents pour vos projets.
                    </p>
                    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_company");
        yield "\" class=\"btn btn-success btn-lg mt-3\">
                        <i class=\"fas fa-user-plus me-2\"></i>S'inscrire en tant qu'entreprise
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-6 text-center\">
            <p>Déjà inscrit ? <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connectez-vous ici</a></p>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/choix.html.twig";
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
        return array (  135 => 48,  122 => 38,  104 => 23,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Choisissez votre profil - AdopteUnDev{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 text-center mb-4\">
            <h1 class=\"display-4 mb-3\">Rejoignez AdopteUnDev</h1>
            <p class=\"lead\">Choisissez votre profil pour commencer l'aventure</p>
        </div>
    </div>
    
    <div class=\"row justify-content-center\">
        <div class=\"col-md-5\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-laptop-code fa-4x text-primary mb-3\"></i>
                    <h2 class=\"card-title\">Je suis développeur</h2>
                    <p class=\"card-text\">
                        Créez votre profil, mettez en avant vos compétences et trouvez l'entreprise qui vous correspond.
                    </p>
                    <a href=\"{{ path('register_dev') }}\" class=\"btn btn-primary btn-lg mt-3\">
                        <i class=\"fas fa-user-plus me-2\"></i>S'inscrire en tant que développeur
                    </a>
                </div>
            </div>
        </div>

        <div class=\"col-md-5\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-building fa-4x text-success mb-3\"></i>
                    <h2 class=\"card-title\">Je suis une entreprise</h2>
                    <p class=\"card-text\">
                        Publiez vos offres d'emploi et trouvez les meilleurs talents pour vos projets.
                    </p>
                    <a href=\"{{ path('register_company') }}\" class=\"btn btn-success btn-lg mt-3\">
                        <i class=\"fas fa-user-plus me-2\"></i>S'inscrire en tant qu'entreprise
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-6 text-center\">
            <p>Déjà inscrit ? <a href=\"{{ path('app_login') }}\">Connectez-vous ici</a></p>
        </div>
    </div>
</div>
{% endblock %}
", "registration/choix.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\registration\\choix.html.twig");
    }
}
