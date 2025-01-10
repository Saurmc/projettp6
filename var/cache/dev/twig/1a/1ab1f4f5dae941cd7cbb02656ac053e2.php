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

/* dev/dashboard.html.twig */
class __TwigTemplate_baac3542d4255364e8bf634bffbc142f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dev/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dev/dashboard.html.twig", 1);
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

        yield "Tableau de bord Développeur";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .profile-progress {
            position: relative;
            height: 4px;
            background-color: #e9ecef;
            border-radius: 2px;
            margin: 20px 0;
        }
        .progress-step {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: #fff;
            border: 2px solid #28a745;
            border-radius: 50%;
            top: -8px;
        }
        .progress-step.completed {
            background-color: #28a745;
        }
        .progress-bar {
            height: 100%;
            background-color: #28a745;
            border-radius: 2px;
        }
        .skill-tag {
            display: inline-block;
            padding: 5px 10px;
            margin: 2px;
            background-color: #e9ecef;
            border-radius: 15px;
            font-size: 0.9em;
        }
        .job-card {
            transition: transform 0.2s;
        }
        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 51
        yield "<div class=\"container-fluid mt-4\">
    <div class=\"row\">
        <!-- Partie droite : Profil -->
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <img src=\"";
        // line 57
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["dev"] ?? null), "avatar", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["dev"] ?? null), "avatar", [], "any", false, false, false, 57)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dev"] ?? null), "avatar", [], "any", false, false, false, 57), "html", null, true)) : ("https://via.placeholder.com/150"));
        yield "\" 
                         class=\"rounded-circle mb-3\" 
                         alt=\"Photo de profil\"
                         style=\"width: 150px; height: 150px; object-fit: cover;\">
                    
                    <h4>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dev"]) || array_key_exists("dev", $context) ? $context["dev"] : (function () { throw new RuntimeError('Variable "dev" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dev"]) || array_key_exists("dev", $context) ? $context["dev"] : (function () { throw new RuntimeError('Variable "dev" does not exist.', 62, $this->source); })()), "prenom", [], "any", false, false, false, 62), "html", null, true);
        yield "</h4>
                    
                    <!-- Barre de progression du profil -->
                    <div class=\"text-start\">
                        <h6>Mon Profil <span class=\"float-end\">";
        // line 66
        yield ($context["completionPercentage"] ?? 100);
        yield "%</span></h6>
                        <div class=\"profile-progress\">
                            <div class=\"progress-bar\" style=\"width: ";
        // line 68
        yield ($context["completionPercentage"] ?? 100);
        yield "%\"></div>
                            <div class=\"progress-step completed\" style=\"left: 0%\"></div>
                            <div class=\"progress-step completed\" style=\"left: 50%\"></div>
                            <div class=\"progress-step\" style=\"left: 100%\"></div>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class=\"mt-4 text-start\">
                        <h6>Compétences</h6>
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dev"]) || array_key_exists("dev", $context) ? $context["dev"] : (function () { throw new RuntimeError('Variable "dev" does not exist.', 78, $this->source); })()), "competences", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 79
            yield "                            <span class=\"skill-tag\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "nom", [], "any", false, false, false, 79), "html", null, true);
            yield "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                    </div>

                    <!-- Statistiques -->
                    <div class=\"row mt-4 text-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-network-wired mb-2\"></i>
                            <br>
                            <small>RÉSEAUX</small>
                        </div>
                        <div class=\"col-4\">
                            <i class=\"fas fa-calendar-alt mb-2\"></i>
                            <br>
                            <small>ÉVÉNEMENTS</small>
                        </div>
                        <div class=\"col-4\">
                            <i class=\"fas fa-eye mb-2\"></i>
                            <br>
                            <small>VISIBILITÉ</small>
                        </div>
                    </div>

                    <div class=\"d-grid gap-2 mt-4\">
                        <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dev_profile");
        yield "\" class=\"btn btn-primary\">
                            Compléter mon profil
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partie gauche : Fiches de poste -->
        <div class=\"col-md-9\">
            <div class=\"mb-4\">
                <h4>Offres d'emploi pour vous</h4>
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une offre...\">
                    <button class=\"btn btn-outline-secondary\" type=\"button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fichesDePoste"]) || array_key_exists("fichesDePoste", $context) ? $context["fichesDePoste"] : (function () { throw new RuntimeError('Variable "fichesDePoste" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 125
            yield "                    <div class=\"col-md-6 mb-4\">
                        <div class=\"card job-card h-100\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "titre", [], "any", false, false, false, 128), "html", null, true);
            yield "</h5>
                                <h6 class=\"card-subtitle mb-2 text-muted\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "entreprise", [], "any", false, false, false, 129), "nom", [], "any", false, false, false, 129), "html", null, true);
            yield "</h6>
                                
                                <p class=\"card-text\">
                                    <i class=\"fas fa-map-marker-alt\"></i> ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "localisation", [], "any", false, false, false, 132), "html", null, true);
            yield "<br>
                                    <i class=\"fas fa-euro-sign\"></i> ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "salaire", [], "any", false, false, false, 133), "html", null, true);
            yield "€<br>
                                    <i class=\"fas fa-clock\"></i> ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "niveauExperience", [], "any", false, false, false, 134), "html", null, true);
            yield " ans d'expérience
                                </p>

                                <div class=\"mb-3\">
                                    ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "competences", [], "any", false, false, false, 138));
            foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                // line 139
                yield "                                        <span class=\"badge bg-primary me-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "nom", [], "any", false, false, false, 139), "html", null, true);
                yield "</span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            yield "                                </div>

                                <a href=\"#\" class=\"btn btn-outline-primary btn-sm\">Voir plus</a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://kit.fontawesome.com/your-code.js\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dev/dashboard.html.twig";
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
        return array (  334 => 155,  324 => 154,  312 => 148,  300 => 141,  291 => 139,  287 => 138,  280 => 134,  276 => 133,  272 => 132,  266 => 129,  262 => 128,  257 => 125,  253 => 124,  229 => 103,  205 => 81,  196 => 79,  192 => 78,  179 => 68,  174 => 66,  165 => 62,  157 => 57,  149 => 51,  139 => 50,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord Développeur{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .profile-progress {
            position: relative;
            height: 4px;
            background-color: #e9ecef;
            border-radius: 2px;
            margin: 20px 0;
        }
        .progress-step {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: #fff;
            border: 2px solid #28a745;
            border-radius: 50%;
            top: -8px;
        }
        .progress-step.completed {
            background-color: #28a745;
        }
        .progress-bar {
            height: 100%;
            background-color: #28a745;
            border-radius: 2px;
        }
        .skill-tag {
            display: inline-block;
            padding: 5px 10px;
            margin: 2px;
            background-color: #e9ecef;
            border-radius: 15px;
            font-size: 0.9em;
        }
        .job-card {
            transition: transform 0.2s;
        }
        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid mt-4\">
    <div class=\"row\">
        <!-- Partie droite : Profil -->
        <div class=\"col-md-3\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <img src=\"{{ dev.avatar ?? 'https://via.placeholder.com/150' }}\" 
                         class=\"rounded-circle mb-3\" 
                         alt=\"Photo de profil\"
                         style=\"width: 150px; height: 150px; object-fit: cover;\">
                    
                    <h4>{{ dev.nom }} {{ dev.prenom }}</h4>
                    
                    <!-- Barre de progression du profil -->
                    <div class=\"text-start\">
                        <h6>Mon Profil <span class=\"float-end\">{{ completionPercentage ?? 100 }}%</span></h6>
                        <div class=\"profile-progress\">
                            <div class=\"progress-bar\" style=\"width: {{ completionPercentage ?? 100 }}%\"></div>
                            <div class=\"progress-step completed\" style=\"left: 0%\"></div>
                            <div class=\"progress-step completed\" style=\"left: 50%\"></div>
                            <div class=\"progress-step\" style=\"left: 100%\"></div>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class=\"mt-4 text-start\">
                        <h6>Compétences</h6>
                        {% for competence in dev.competences %}
                            <span class=\"skill-tag\">{{ competence.nom }}</span>
                        {% endfor %}
                    </div>

                    <!-- Statistiques -->
                    <div class=\"row mt-4 text-center\">
                        <div class=\"col-4\">
                            <i class=\"fas fa-network-wired mb-2\"></i>
                            <br>
                            <small>RÉSEAUX</small>
                        </div>
                        <div class=\"col-4\">
                            <i class=\"fas fa-calendar-alt mb-2\"></i>
                            <br>
                            <small>ÉVÉNEMENTS</small>
                        </div>
                        <div class=\"col-4\">
                            <i class=\"fas fa-eye mb-2\"></i>
                            <br>
                            <small>VISIBILITÉ</small>
                        </div>
                    </div>

                    <div class=\"d-grid gap-2 mt-4\">
                        <a href=\"{{ path('app_dev_profile') }}\" class=\"btn btn-primary\">
                            Compléter mon profil
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partie gauche : Fiches de poste -->
        <div class=\"col-md-9\">
            <div class=\"mb-4\">
                <h4>Offres d'emploi pour vous</h4>
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher une offre...\">
                    <button class=\"btn btn-outline-secondary\" type=\"button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>

            <div class=\"row\">
                {% for fiche in fichesDePoste %}
                    <div class=\"col-md-6 mb-4\">
                        <div class=\"card job-card h-100\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ fiche.titre }}</h5>
                                <h6 class=\"card-subtitle mb-2 text-muted\">{{ fiche.entreprise.nom }}</h6>
                                
                                <p class=\"card-text\">
                                    <i class=\"fas fa-map-marker-alt\"></i> {{ fiche.localisation }}<br>
                                    <i class=\"fas fa-euro-sign\"></i> {{ fiche.salaire }}€<br>
                                    <i class=\"fas fa-clock\"></i> {{ fiche.niveauExperience }} ans d'expérience
                                </p>

                                <div class=\"mb-3\">
                                    {% for competence in fiche.competences %}
                                        <span class=\"badge bg-primary me-1\">{{ competence.nom }}</span>
                                    {% endfor %}
                                </div>

                                <a href=\"#\" class=\"btn btn-outline-primary btn-sm\">Voir plus</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://kit.fontawesome.com/your-code.js\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "dev/dashboard.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\dev\\dashboard.html.twig");
    }
}
