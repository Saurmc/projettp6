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

/* entreprise/dashboard.html.twig */
class __TwigTemplate_d983072672be3f46f0545817ab480cf7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entreprise/dashboard.html.twig", 1);
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

        yield "Dashboard Entreprise - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
    .profile-card {
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .job-card {
        transition: transform 0.2s;
    }
    .job-card:hover {
        transform: translateY(-5px);
    }
    .company-logo {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        yield "<div class=\"container py-5\">
    <div class=\"row\">
        <!-- Profil de l'entreprise -->
        <div class=\"col-md-4\">
            <div class=\"card profile-card\">
                <div class=\"card-body text-center\">
                    ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 33, $this->source); })()), "logo", [], "any", false, false, false, 33)) {
            // line 34
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 34, $this->source); })()), "logo", [], "any", false, false, false, 34))), "html", null, true);
            yield "\" alt=\"Logo\" class=\"company-logo mb-3\">
                    ";
        } else {
            // line 36
            yield "                        <div class=\"company-logo bg-light d-flex align-items-center justify-content-center mb-3 mx-auto\">
                            <i class=\"fas fa-building fa-3x text-secondary\"></i>
                        </div>
                    ";
        }
        // line 40
        yield "                    
                    <h2 class=\"card-title\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), "html", null, true);
        yield "</h2>
                    <p class=\"text-muted\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 42, $this->source); })()), "adresse", [], "any", false, false, false, 42), "html", null, true);
        yield "</p>
                    
                    <hr>
                    
                    <div class=\"mb-3\">
                        <h5>À propos</h5>
                        <p>";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true)) : ("Aucune description fournie"));
        yield "</p>
                    </div>
                    
                    ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 51, $this->source); })()), "siteWeb", [], "any", false, false, false, 51)) {
            // line 52
            yield "                        <div class=\"mb-3\">
                            <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 53, $this->source); })()), "siteWeb", [], "any", false, false, false, 53), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-globe me-2\"></i>Site Web
                            </a>
                        </div>
                    ";
        }
        // line 58
        yield "                    
                    <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_profile_edit");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-edit me-2\"></i>Modifier le profil
                    </a>
                </div>
            </div>
        </div>

        <!-- Liste des offres d'emploi -->
        <div class=\"col-md-8\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h3>Vos offres d'emploi</h3>
                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_poste_new");
        yield "\" class=\"btn btn-success\">
                    <i class=\"fas fa-plus-circle me-2\"></i>Nouvelle offre
                </a>
            </div>

            ";
        // line 75
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fichesDePoste"]) || array_key_exists("fichesDePoste", $context) ? $context["fichesDePoste"] : (function () { throw new RuntimeError('Variable "fichesDePoste" does not exist.', 75, $this->source); })())) > 0)) {
            // line 76
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fichesDePoste"]) || array_key_exists("fichesDePoste", $context) ? $context["fichesDePoste"] : (function () { throw new RuntimeError('Variable "fichesDePoste" does not exist.', 76, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                // line 77
                yield "                    <div class=\"card mb-3 job-card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <h4 class=\"card-title\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "titre", [], "any", false, false, false, 81), "html", null, true);
                yield "</h4>
                                    <p class=\"text-muted mb-2\">
                                        <i class=\"fas fa-map-marker-alt me-2\"></i>";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "localisation", [], "any", false, false, false, 83), "html", null, true);
                yield "
                                        <span class=\"mx-2\">•</span>
                                        <i class=\"fas fa-clock me-2\"></i>";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "dateCreation", [], "any", false, false, false, 85), "d/m/Y"), "html", null, true);
                yield "
                                    </p>
                                </div>
                                <div class=\"btn-group\">
                                    <a href=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_poste_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary btn-sm\">
                                        <i class=\"fas fa-edit me-1\"></i>Modifier
                                    </a>
                                    <button type=\"button\" class=\"btn btn-outline-danger btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "id", [], "any", false, false, false, 92), "html", null, true);
                yield "\">
                                        <i class=\"fas fa-trash-alt me-1\"></i>Supprimer
                                    </button>
                                </div>
                            </div>

                            <p class=\"card-text mb-2\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "description", [], "any", false, false, false, 98), 0, 150), "html", null, true);
                yield "...</p>

                            <div class=\"mb-2\">
                                ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "competences", [], "any", false, false, false, 101));
                foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                    // line 102
                    yield "                                    <span class=\"badge bg-primary me-1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "nom", [], "any", false, false, false, 102), "html", null, true);
                    yield "</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                yield "                            </div>

                            <div class=\"d-flex justify-content-between align-items-center\">
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-euro-sign me-1\"></i>";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "salaire", [], "any", false, false, false, 108), "html", null, true);
                yield " €/an
                                </small>
                                <a href=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_poste_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\" class=\"btn btn-link\">
                                    Voir les détails
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de confirmation de suppression -->
                    <div class=\"modal fade\" id=\"deleteModal";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "id", [], "any", false, false, false, 118), "html", null, true);
                yield "\" tabindex=\"-1\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Confirmer la suppression</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    Êtes-vous sûr de vouloir supprimer cette offre d'emploi ?
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                    <form action=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_fiche_poste_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "id", [], "any", false, false, false, 130)]), "html", null, true);
                yield "\" method=\"post\" style=\"display: inline;\">
                                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            yield "            ";
        } else {
            // line 139
            yield "                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>Vous n'avez pas encore publié d'offres d'emploi.
                    <a href=\"";
            // line 141
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_poste_new");
            yield "\" class=\"alert-link\">Créez votre première offre</a>
                </div>
            ";
        }
        // line 144
        yield "        </div>
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
        return "entreprise/dashboard.html.twig";
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
        return array (  333 => 144,  327 => 141,  323 => 139,  320 => 138,  306 => 130,  291 => 118,  280 => 110,  275 => 108,  269 => 104,  260 => 102,  256 => 101,  250 => 98,  241 => 92,  235 => 89,  228 => 85,  223 => 83,  218 => 81,  212 => 77,  207 => 76,  205 => 75,  197 => 70,  183 => 59,  180 => 58,  172 => 53,  169 => 52,  167 => 51,  161 => 48,  152 => 42,  148 => 41,  145 => 40,  139 => 36,  133 => 34,  131 => 33,  123 => 27,  113 => 26,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard Entreprise - {{ app.user.nom }}{% endblock %}

{% block stylesheets %}
<style>
    .profile-card {
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .job-card {
        transition: transform 0.2s;
    }
    .job-card:hover {
        transform: translateY(-5px);
    }
    .company-logo {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row\">
        <!-- Profil de l'entreprise -->
        <div class=\"col-md-4\">
            <div class=\"card profile-card\">
                <div class=\"card-body text-center\">
                    {% if entreprise.logo %}
                        <img src=\"{{ asset('uploads/logos/' ~ entreprise.logo) }}\" alt=\"Logo\" class=\"company-logo mb-3\">
                    {% else %}
                        <div class=\"company-logo bg-light d-flex align-items-center justify-content-center mb-3 mx-auto\">
                            <i class=\"fas fa-building fa-3x text-secondary\"></i>
                        </div>
                    {% endif %}
                    
                    <h2 class=\"card-title\">{{ entreprise.nom }}</h2>
                    <p class=\"text-muted\">{{ entreprise.adresse }}</p>
                    
                    <hr>
                    
                    <div class=\"mb-3\">
                        <h5>À propos</h5>
                        <p>{{ entreprise.description ?: 'Aucune description fournie' }}</p>
                    </div>
                    
                    {% if entreprise.siteWeb %}
                        <div class=\"mb-3\">
                            <a href=\"{{ entreprise.siteWeb }}\" target=\"_blank\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-globe me-2\"></i>Site Web
                            </a>
                        </div>
                    {% endif %}
                    
                    <a href=\"{{ path('entreprise_profile_edit') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-edit me-2\"></i>Modifier le profil
                    </a>
                </div>
            </div>
        </div>

        <!-- Liste des offres d'emploi -->
        <div class=\"col-md-8\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h3>Vos offres d'emploi</h3>
                <a href=\"{{ path('fiche_poste_new') }}\" class=\"btn btn-success\">
                    <i class=\"fas fa-plus-circle me-2\"></i>Nouvelle offre
                </a>
            </div>

            {% if fichesDePoste|length > 0 %}
                {% for fiche in fichesDePoste %}
                    <div class=\"card mb-3 job-card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <h4 class=\"card-title\">{{ fiche.titre }}</h4>
                                    <p class=\"text-muted mb-2\">
                                        <i class=\"fas fa-map-marker-alt me-2\"></i>{{ fiche.localisation }}
                                        <span class=\"mx-2\">•</span>
                                        <i class=\"fas fa-clock me-2\"></i>{{ fiche.dateCreation|date('d/m/Y') }}
                                    </p>
                                </div>
                                <div class=\"btn-group\">
                                    <a href=\"{{ path('fiche_poste_edit', {'id': fiche.id}) }}\" class=\"btn btn-outline-primary btn-sm\">
                                        <i class=\"fas fa-edit me-1\"></i>Modifier
                                    </a>
                                    <button type=\"button\" class=\"btn btn-outline-danger btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ fiche.id }}\">
                                        <i class=\"fas fa-trash-alt me-1\"></i>Supprimer
                                    </button>
                                </div>
                            </div>

                            <p class=\"card-text mb-2\">{{ fiche.description|slice(0, 150) }}...</p>

                            <div class=\"mb-2\">
                                {% for competence in fiche.competences %}
                                    <span class=\"badge bg-primary me-1\">{{ competence.nom }}</span>
                                {% endfor %}
                            </div>

                            <div class=\"d-flex justify-content-between align-items-center\">
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-euro-sign me-1\"></i>{{ fiche.salaire }} €/an
                                </small>
                                <a href=\"{{ path('fiche_poste_show', {'id': fiche.id}) }}\" class=\"btn btn-link\">
                                    Voir les détails
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de confirmation de suppression -->
                    <div class=\"modal fade\" id=\"deleteModal{{ fiche.id }}\" tabindex=\"-1\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Confirmer la suppression</h5>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                </div>
                                <div class=\"modal-body\">
                                    Êtes-vous sûr de vouloir supprimer cette offre d'emploi ?
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                    <form action=\"{{ path('entreprise_fiche_poste_delete', {'id': fiche.id}) }}\" method=\"post\" style=\"display: inline;\">
                                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>Vous n'avez pas encore publié d'offres d'emploi.
                    <a href=\"{{ path('fiche_poste_new') }}\" class=\"alert-link\">Créez votre première offre</a>
                </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "entreprise/dashboard.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\entreprise\\dashboard.html.twig");
    }
}
