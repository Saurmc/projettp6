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

/* entreprise/about.html.twig */
class __TwigTemplate_2d3c216464304e2f165a857fa0f171d3 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entreprise/about.html.twig", 1);
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

        yield "À propos - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
    .about-section {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
    }
    .company-logo {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 2rem;
    }
    .company-info {
        background-color: #fff;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        yield "<div class=\"container py-5\">
    <div class=\"about-section\">
        <div class=\"text-center mb-4\">
            ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 32, $this->source); })()), "logo", [], "any", false, false, false, 32)) {
            // line 33
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 33, $this->source); })()), "logo", [], "any", false, false, false, 33))), "html", null, true);
            yield "\" alt=\"Logo ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "\" class=\"company-logo\">
            ";
        } else {
            // line 35
            yield "                <div class=\"company-logo bg-light d-flex align-items-center justify-content-center\">
                    <i class=\"fas fa-building fa-3x text-secondary\"></i>
                </div>
            ";
        }
        // line 39
        yield "            <h1 class=\"mb-4\">À propos de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
        yield "</h1>
        </div>

        <div class=\"company-info\">
            <div class=\"mb-4\">
                <h3>Notre entreprise</h3>
                <p>";
        // line 45
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), "html", null, true)) : ("Description non disponible"));
        yield "</p>
            </div>

            <div class=\"mb-4\">
                <h3>Localisation</h3>
                <p><i class=\"fas fa-map-marker-alt me-2\"></i>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 50, $this->source); })()), "adresse", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>
            </div>

            ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 53, $this->source); })()), "siteWeb", [], "any", false, false, false, 53)) {
            // line 54
            yield "                <div class=\"mb-4\">
                    <h3>Site Web</h3>
                    <p>
                        <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 57, $this->source); })()), "siteWeb", [], "any", false, false, false, 57), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-globe me-2\"></i>Visiter notre site web
                        </a>
                    </p>
                </div>
            ";
        }
        // line 63
        yield "
            <div class=\"text-center mt-5\">
                <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_dashboard");
        yield "\" class=\"btn btn-secondary me-2\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Retour au tableau de bord
                </a>
                <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_profile_edit");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-edit me-2\"></i>Modifier les informations
                </a>
            </div>
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
        return "entreprise/about.html.twig";
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
        return array (  196 => 68,  190 => 65,  186 => 63,  177 => 57,  172 => 54,  170 => 53,  164 => 50,  156 => 45,  146 => 39,  140 => 35,  132 => 33,  130 => 32,  125 => 29,  115 => 28,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}À propos - {{ entreprise.nom }}{% endblock %}

{% block stylesheets %}
<style>
    .about-section {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
    }
    .company-logo {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 2rem;
    }
    .company-info {
        background-color: #fff;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"about-section\">
        <div class=\"text-center mb-4\">
            {% if entreprise.logo %}
                <img src=\"{{ asset('uploads/logos/' ~ entreprise.logo) }}\" alt=\"Logo {{ entreprise.nom }}\" class=\"company-logo\">
            {% else %}
                <div class=\"company-logo bg-light d-flex align-items-center justify-content-center\">
                    <i class=\"fas fa-building fa-3x text-secondary\"></i>
                </div>
            {% endif %}
            <h1 class=\"mb-4\">À propos de {{ entreprise.nom }}</h1>
        </div>

        <div class=\"company-info\">
            <div class=\"mb-4\">
                <h3>Notre entreprise</h3>
                <p>{{ entreprise.description ?: 'Description non disponible' }}</p>
            </div>

            <div class=\"mb-4\">
                <h3>Localisation</h3>
                <p><i class=\"fas fa-map-marker-alt me-2\"></i>{{ entreprise.adresse }}</p>
            </div>

            {% if entreprise.siteWeb %}
                <div class=\"mb-4\">
                    <h3>Site Web</h3>
                    <p>
                        <a href=\"{{ entreprise.siteWeb }}\" target=\"_blank\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-globe me-2\"></i>Visiter notre site web
                        </a>
                    </p>
                </div>
            {% endif %}

            <div class=\"text-center mt-5\">
                <a href=\"{{ path('entreprise_dashboard') }}\" class=\"btn btn-secondary me-2\">
                    <i class=\"fas fa-arrow-left me-2\"></i>Retour au tableau de bord
                </a>
                <a href=\"{{ path('entreprise_profile_edit') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-edit me-2\"></i>Modifier les informations
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "entreprise/about.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\entreprise\\about.html.twig");
    }
}
