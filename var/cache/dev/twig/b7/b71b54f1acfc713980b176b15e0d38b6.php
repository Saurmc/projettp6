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

/* entreprise/fiche_poste/new.html.twig */
class __TwigTemplate_794132d12919ab866f3ffaaf5b56c4f3 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise/fiche_poste/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entreprise/fiche_poste/new.html.twig", 1);
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

        yield "Nouvelle offre d'emploi";
        
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
        .competences-section {
            margin-top: 30px;
        }
        .competence-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .competence-select {
            flex: 1;
        }
        .btn-supprimer {
            white-space: nowrap;
        }
        .progress {
            height: 4px;
            margin-top: 5px;
            background-color: #eee;
        }
        .progress-bar {
            background-color: #28a745;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const competencesList = document.querySelector('.competences-list');
            const btnAjouter = document.querySelector('.btn-ajouter-competence');
            const hiddenSelect = document.querySelector('#fiche_de_poste_competences');
            const form = document.querySelector('form');
            let competenceCounter = 0;

            function addCompetenceRow() {
                const row = document.createElement('div');
                row.className = 'competence-row';
                row.innerHTML = `
                    <div class=\"form-group flex-grow-1\">
                        <label>Compétences</label>
                        <select class=\"form-select competence-select\" required>
                            <option value=\"\">Choisir une compétence</option>
                            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "competences", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "choices", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 55
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "value", [], "any", false, false, false, 55), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "label", [], "any", false, false, false, 55), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                        </select>
                        <div class=\"invalid-feedback\">
                            Veuillez sélectionner une compétence
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn btn-outline-danger btn-supprimer\">
                        Supprimer
                    </button>
                `;
                
                competencesList.appendChild(row);

                const select = row.querySelector('.competence-select');
                select.addEventListener('change', updateHiddenSelect);

                const btnSupprimer = row.querySelector('.btn-supprimer');
                btnSupprimer.addEventListener('click', () => {
                    row.remove();
                    updateHiddenSelect();
                    validateForm();
                });
            }

            function updateHiddenSelect() {
                Array.from(hiddenSelect.options).forEach(option => {
                    option.selected = false;
                });

                document.querySelectorAll('.competence-select').forEach(select => {
                    if (select.value) {
                        const option = hiddenSelect.querySelector(`option[value=\"\${select.value}\"]`);
                        if (option) {
                            option.selected = true;
                        }
                    }
                });
                validateForm();
            }

            function validateForm() {
                const isValid = form.checkValidity();
                const hasCompetences = document.querySelectorAll('.competence-select').length > 0 &&
                                     Array.from(document.querySelectorAll('.competence-select')).every(select => select.value);
                
                const submitBtn = form.querySelector('button[type=\"submit\"]');
                submitBtn.disabled = !isValid || !hasCompetences;

                if (!hasCompetences) {
                    // Afficher un message d'erreur si aucune compétence n'est sélectionnée
                    let errorDiv = document.querySelector('.competences-error');
                    if (!errorDiv) {
                        errorDiv = document.createElement('div');
                        errorDiv.className = 'alert alert-danger mt-2 competences-error';
                        competencesList.parentNode.insertBefore(errorDiv, competencesList);
                    }
                    errorDiv.textContent = 'Veuillez ajouter au moins une compétence';
                } else {
                    // Supprimer le message d'erreur si des compétences sont sélectionnées
                    const errorDiv = document.querySelector('.competences-error');
                    if (errorDiv) {
                        errorDiv.remove();
                    }
                }
            }

            form.addEventListener('submit', function(e) {
                if (!form.checkValidity() || document.querySelectorAll('.competence-select').length === 0) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                form.classList.add('was-validated');
                validateForm();
            });

            btnAjouter.addEventListener('click', addCompetenceRow);

            // Validation initiale
            validateForm();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 143
        yield "    <div class=\"container mt-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "flashes", [], "any", false, false, false, 146));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 147
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 148
                yield "                        <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                            ";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "
                <div class=\"card shadow\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title mb-4\">Créer une nouvelle offre d'emploi</h2>

                        ";
        // line 159
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                            <div class=\"mb-3\">
                                ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "titre", [], "any", false, false, false, 161), 'row', ["attr" => ["class" => "form-control"]]);
        // line 163
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "description", [], "any", false, false, false, 167), 'row', ["attr" => ["class" => "form-control"]]);
        // line 169
        yield "
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "localisation", [], "any", false, false, false, 174), 'row', ["attr" => ["class" => "form-control"]]);
        // line 176
        yield "
                                </div>

                                <div class=\"col-md-6 mb-3\">
                                    ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "salaire", [], "any", false, false, false, 180), 'row', ["attr" => ["class" => "form-control"]]);
        // line 182
        yield "
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "niveauExperience", [], "any", false, false, false, 187), 'row', ["attr" => ["class" => "form-control"]]);
        // line 189
        yield "
                            </div>

                            <div class=\"competences-section\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <h3>Compétences</h3>
                                    <button type=\"button\" class=\"btn btn-primary btn-ajouter-competence\">
                                        <i class=\"fas fa-plus\"></i> Ajouter une compétence
                                    </button>
                                </div>

                                ";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "competences", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "form-select", "style" => "display: none;"]]);
        // line 205
        yield "

                                <div class=\"competences-list\">
                                    <!-- Les compétences seront ajoutées ici dynamiquement -->
                                </div>
                            </div>

                            <div class=\"d-grid gap-2 d-md-flex justify-content-md-end mt-4\">
                                <a href=\"";
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_dashboard");
        yield "\" class=\"btn btn-secondary me-2\">
                                    <i class=\"fas fa-times me-1\"></i>Annuler
                                </a>
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-save me-1\"></i>Créer l'offre
                                </button>
                            </div>
                        ";
        // line 220
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), 'form_end');
        yield "
                    </div>
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
        return "entreprise/fiche_poste/new.html.twig";
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
        return array (  390 => 220,  380 => 213,  370 => 205,  368 => 200,  355 => 189,  353 => 187,  346 => 182,  344 => 180,  338 => 176,  336 => 174,  329 => 169,  327 => 167,  321 => 163,  319 => 161,  314 => 159,  307 => 154,  301 => 153,  291 => 149,  286 => 148,  281 => 147,  277 => 146,  272 => 143,  262 => 142,  171 => 57,  160 => 55,  156 => 54,  135 => 37,  125 => 36,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle offre d'emploi{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .competences-section {
            margin-top: 30px;
        }
        .competence-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .competence-select {
            flex: 1;
        }
        .btn-supprimer {
            white-space: nowrap;
        }
        .progress {
            height: 4px;
            margin-top: 5px;
            background-color: #eee;
        }
        .progress-bar {
            background-color: #28a745;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const competencesList = document.querySelector('.competences-list');
            const btnAjouter = document.querySelector('.btn-ajouter-competence');
            const hiddenSelect = document.querySelector('#fiche_de_poste_competences');
            const form = document.querySelector('form');
            let competenceCounter = 0;

            function addCompetenceRow() {
                const row = document.createElement('div');
                row.className = 'competence-row';
                row.innerHTML = `
                    <div class=\"form-group flex-grow-1\">
                        <label>Compétences</label>
                        <select class=\"form-select competence-select\" required>
                            <option value=\"\">Choisir une compétence</option>
                            {% for competence in form.competences.vars.choices %}
                                <option value=\"{{ competence.value }}\">{{ competence.label }}</option>
                            {% endfor %}
                        </select>
                        <div class=\"invalid-feedback\">
                            Veuillez sélectionner une compétence
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" style=\"width: 100%\"></div>
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn btn-outline-danger btn-supprimer\">
                        Supprimer
                    </button>
                `;
                
                competencesList.appendChild(row);

                const select = row.querySelector('.competence-select');
                select.addEventListener('change', updateHiddenSelect);

                const btnSupprimer = row.querySelector('.btn-supprimer');
                btnSupprimer.addEventListener('click', () => {
                    row.remove();
                    updateHiddenSelect();
                    validateForm();
                });
            }

            function updateHiddenSelect() {
                Array.from(hiddenSelect.options).forEach(option => {
                    option.selected = false;
                });

                document.querySelectorAll('.competence-select').forEach(select => {
                    if (select.value) {
                        const option = hiddenSelect.querySelector(`option[value=\"\${select.value}\"]`);
                        if (option) {
                            option.selected = true;
                        }
                    }
                });
                validateForm();
            }

            function validateForm() {
                const isValid = form.checkValidity();
                const hasCompetences = document.querySelectorAll('.competence-select').length > 0 &&
                                     Array.from(document.querySelectorAll('.competence-select')).every(select => select.value);
                
                const submitBtn = form.querySelector('button[type=\"submit\"]');
                submitBtn.disabled = !isValid || !hasCompetences;

                if (!hasCompetences) {
                    // Afficher un message d'erreur si aucune compétence n'est sélectionnée
                    let errorDiv = document.querySelector('.competences-error');
                    if (!errorDiv) {
                        errorDiv = document.createElement('div');
                        errorDiv.className = 'alert alert-danger mt-2 competences-error';
                        competencesList.parentNode.insertBefore(errorDiv, competencesList);
                    }
                    errorDiv.textContent = 'Veuillez ajouter au moins une compétence';
                } else {
                    // Supprimer le message d'erreur si des compétences sont sélectionnées
                    const errorDiv = document.querySelector('.competences-error');
                    if (errorDiv) {
                        errorDiv.remove();
                    }
                }
            }

            form.addEventListener('submit', function(e) {
                if (!form.checkValidity() || document.querySelectorAll('.competence-select').length === 0) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                form.classList.add('was-validated');
                validateForm();
            });

            btnAjouter.addEventListener('click', addCompetenceRow);

            // Validation initiale
            validateForm();
        });
    </script>
{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}
                {% endfor %}

                <div class=\"card shadow\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title mb-4\">Créer une nouvelle offre d'emploi</h2>

                        {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                            <div class=\"mb-3\">
                                {{ form_row(form.titre, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_row(form.description, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    {{ form_row(form.localisation, {
                                        'attr': {'class': 'form-control'}
                                    }) }}
                                </div>

                                <div class=\"col-md-6 mb-3\">
                                    {{ form_row(form.salaire, {
                                        'attr': {'class': 'form-control'}
                                    }) }}
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                {{ form_row(form.niveauExperience, {
                                    'attr': {'class': 'form-control'}
                                }) }}
                            </div>

                            <div class=\"competences-section\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <h3>Compétences</h3>
                                    <button type=\"button\" class=\"btn btn-primary btn-ajouter-competence\">
                                        <i class=\"fas fa-plus\"></i> Ajouter une compétence
                                    </button>
                                </div>

                                {{ form_widget(form.competences, {
                                    'attr': {
                                        'class': 'form-select',
                                        'style': 'display: none;'
                                    }
                                }) }}

                                <div class=\"competences-list\">
                                    <!-- Les compétences seront ajoutées ici dynamiquement -->
                                </div>
                            </div>

                            <div class=\"d-grid gap-2 d-md-flex justify-content-md-end mt-4\">
                                <a href=\"{{ path('entreprise_dashboard') }}\" class=\"btn btn-secondary me-2\">
                                    <i class=\"fas fa-times me-1\"></i>Annuler
                                </a>
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-save me-1\"></i>Créer l'offre
                                </button>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "entreprise/fiche_poste/new.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\entreprise\\fiche_poste\\new.html.twig");
    }
}
