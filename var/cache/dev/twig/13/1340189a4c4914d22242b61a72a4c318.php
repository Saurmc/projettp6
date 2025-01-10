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

/* dev/profile.html.twig */
class __TwigTemplate_1a1cb39c80bbee122fa085d2662d7a73 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dev/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dev/profile.html.twig", 1);
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

        yield "Mon Profil";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h3 class=\"mb-0\">Mon Profil</h3>
                        <span class=\"badge bg-light text-primary\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["completionPercentage"]) || array_key_exists("completionPercentage", $context) ? $context["completionPercentage"] : (function () { throw new RuntimeError('Variable "completionPercentage" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "% complété</span>
                    </div>
                </div>

                ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        yield "
                <div class=\"card-body\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                yield "                            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                                ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
                    <div class=\"row g-4\">
                        <!-- Informations personnelles -->
                        <div class=\"col-md-6\">
                            <div class=\"p-3 border rounded bg-light\">
                                <h5 class=\"border-bottom pb-2 mb-3\">
                                    <i class=\"fas fa-user-circle me-2\"></i>Informations personnelles
                                </h5>
                                <div class=\"mb-3\">
                                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prenom", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "prenom", [], "any", false, false, false, 38), 'errors');
        yield "
                                </div>
                                <div class=\"mb-3\">
                                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), 'errors');
        yield "
                                </div>
                                <div class=\"mb-3\">
                                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "localisation", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "localisation", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Paris, France"]]);
        yield "
                                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "localisation", [], "any", false, false, false, 48), 'errors');
        yield "
                                </div>
                                <div class=\"mb-3\">
                                    ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "avatar", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                    <div class=\"input-group\">
                                        <span class=\"input-group-text\"><i class=\"fas fa-image\"></i></span>
                                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "avatar", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "avatar", [], "any", false, false, false, 56), 'errors');
        yield "
                                    <small class=\"text-muted\">URL de votre photo de profil (optionnel)</small>
                                </div>
                            </div>
                        </div>

                        <!-- Informations professionnelles -->
                        <div class=\"col-md-6\">
                            <div class=\"p-3 border rounded bg-light\">
                                <h5 class=\"border-bottom pb-2 mb-3\">
                                    <i class=\"fas fa-briefcase me-2\"></i>Informations professionnelles
                                </h5>
                                <div class=\"mb-3\">
                                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "niveauExperience", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "niveauExperience", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "niveauExperience", [], "any", false, false, false, 71), 'errors');
        yield "
                                </div>
                                <div class=\"mb-3\">
                                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "salaireMinimum", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                                    <div class=\"input-group\">
                                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "salaireMinimum", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 35000"]]);
        yield "
                                        <span class=\"input-group-text\">€/an</span>
                                    </div>
                                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "salaireMinimum", [], "any", false, false, false, 79), 'errors');
        yield "
                                </div>
                                <div class=\"mb-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                        <h5 class=\"mb-0\">Compétences</h5>
                                        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addCompetenceModal\">
                                            <i class=\"fas fa-plus\"></i> Ajouter une compétence
                                        </button>
                                    </div>
                                    <div id=\"competences-wrapper\">
                                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "competences", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "d-none"]]);
        yield "
                                        <div class=\"competences-container\" id=\"selectedCompetences\">
                                            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "competences", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 92
            yield "                                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 92), "checked", [], "any", false, false, false, 92)) {
                // line 93
                yield "                                                    <div class=\"competence-item\" data-competence-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
                yield "\">
                                                        <span class=\"competence-label\">";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 94), "label", [], "any", false, false, false, 94), "html", null, true);
                yield "</span>
                                                        <div class=\"progress\">
                                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"></div>
                                                        </div>
                                                        <button type=\"button\" class=\"btn-close remove-competence\" aria-label=\"Supprimer\"></button>
                                                    </div>
                                                ";
            }
            // line 101
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "                                        </div>
                                    </div>
                                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "competences", [], "any", false, false, false, 104), 'errors');
        yield "
                                </div>

                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"addCompetenceModal\" tabindex=\"-1\" aria-labelledby=\"addCompetenceModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"addCompetenceModalLabel\">Ajouter une compétence</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"mb-3\">
                                                    <input type=\"text\" class=\"form-control\" id=\"competenceSearch\" placeholder=\"Rechercher une compétence...\">
                                                </div>
                                                <div class=\"competences-list\">
                                                    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "competences", [], "any", false, false, false, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 121
            yield "                                                        ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 121), "checked", [], "any", false, false, false, 121)) {
                // line 122
                yield "                                                            <div class=\"competence-item\" data-competence-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 122), "id", [], "any", false, false, false, 122), "html", null, true);
                yield "\">
                                                                <span class=\"competence-label\">";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 123), "label", [], "any", false, false, false, 123), "html", null, true);
                yield "</span>
                                                                <div class=\"progress\">
                                                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 0%\"></div>
                                                                </div>
                                                            </div>
                                                        ";
            }
            // line 129
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Biographie -->
                        <div class=\"col-12\">
                            <div class=\"p-3 border rounded bg-light\">
                                <h5 class=\"border-bottom pb-2 mb-3\">
                                    <i class=\"fas fa-book me-2\"></i>Biographie
                                </h5>
                                <div class=\"mb-3\">
                                    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "biographie", [], "any", false, false, false, 145), 'widget', ["attr" => ["class" => "form-control", "rows" => "5", "style" => "resize: vertical;"]]);
        // line 151
        yield "
                                    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "biographie", [], "any", false, false, false, 152), 'errors');
        yield "
                                    <small class=\"text-muted\">Décrivez votre parcours, vos expériences et vos objectifs professionnels</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dev_dashboard");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-2\"></i>Enregistrer les modifications
                        </button>
                    </div>
                </div>
                ";
        // line 170
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 179
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .competences-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .competence-item {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            padding: 1rem;
            position: relative;
        }

        .competence-label {
            display: block;
            padding-left: 0;
            margin-bottom: 0.5rem;
            font-weight: 500;
            cursor: pointer;
        }

        .progress {
            height: 4px;
            background-color: #f0f0f0;
            border-radius: 2px;
            overflow: hidden;
        }

        .progress-bar {
            transition: width 0.3s ease;
        }

        .competence-item:hover {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .remove-competence {
            position: absolute;
            top: 1rem;
            right: 1rem;
            opacity: 0.5;
        }

        .remove-competence:hover {
            opacity: 1;
        }

        .competences-list {
            max-height: 400px;
            overflow-y: auto;
        }

        #competenceSearch {
            margin-bottom: 1rem;
        }

        .modal-body .competence-item {
            margin-bottom: 0.5rem;
            transition: background-color 0.2s;
        }

        .modal-body .competence-item:hover {
            background-color: #f8f9fa;
            cursor: pointer;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 250
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 251
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const competencesWrapper = document.getElementById('competences-wrapper');
            const selectedCompetences = document.getElementById('selectedCompetences');
            const competencesList = document.querySelector('.competences-list');
            const searchInput = document.getElementById('competenceSearch');
            const checkboxes = competencesWrapper.querySelectorAll('input[type=\"checkbox\"]');

            // Fonction de recherche
            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                const competences = competencesList.querySelectorAll('.competence-item');
                
                competences.forEach(competence => {
                    const label = competence.querySelector('.competence-label').textContent.toLowerCase();
                    if (label.includes(searchTerm)) {
                        competence.style.display = '';
                    } else {
                        competence.style.display = 'none';
                    }
                });
            });

            // Ajout d'une compétence
            competencesList.addEventListener('click', function(e) {
                const competenceItem = e.target.closest('.competence-item');
                if (!competenceItem) return;

                const competenceId = competenceItem.dataset.competenceId;
                const checkbox = competencesWrapper.querySelector(`input[id=\"\${competenceId}\"]`);
                const clone = competenceItem.cloneNode(true);
                
                // Ajouter le bouton de suppression
                const removeButton = document.createElement('button');
                removeButton.className = 'btn-close remove-competence';
                removeButton.setAttribute('aria-label', 'Supprimer');
                clone.appendChild(removeButton);

                selectedCompetences.appendChild(clone);
                checkbox.checked = true;
                competenceItem.remove();

                // Fermer le modal
                const modal = document.getElementById('addCompetenceModal');
                const modalInstance = bootstrap.Modal.getInstance(modal);
                modalInstance.hide();
            });

            // Suppression d'une compétence
            selectedCompetences.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-competence')) {
                    const competenceItem = e.target.closest('.competence-item');
                    const competenceId = competenceItem.dataset.competenceId;
                    const checkbox = competencesWrapper.querySelector(`input[id=\"\${competenceId}\"]`);
                    const clone = competenceItem.cloneNode(true);
                    
                    // Supprimer le bouton de suppression
                    clone.querySelector('.remove-competence').remove();
                    
                    competencesList.appendChild(clone);
                    checkbox.checked = false;
                    competenceItem.remove();
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dev/profile.html.twig";
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
        return array (  499 => 251,  489 => 250,  410 => 179,  400 => 178,  385 => 170,  374 => 162,  361 => 152,  358 => 151,  356 => 145,  339 => 130,  333 => 129,  324 => 123,  319 => 122,  316 => 121,  312 => 120,  293 => 104,  289 => 102,  283 => 101,  273 => 94,  268 => 93,  265 => 92,  261 => 91,  256 => 89,  243 => 79,  237 => 76,  232 => 74,  226 => 71,  222 => 70,  218 => 69,  202 => 56,  197 => 54,  191 => 51,  185 => 48,  181 => 47,  177 => 46,  171 => 43,  167 => 42,  163 => 41,  157 => 38,  153 => 37,  149 => 36,  138 => 27,  132 => 26,  122 => 22,  117 => 21,  112 => 20,  108 => 19,  103 => 17,  96 => 13,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h3 class=\"mb-0\">Mon Profil</h3>
                        <span class=\"badge bg-light text-primary\">{{ completionPercentage }}% complété</span>
                    </div>
                </div>

                {{ form_start(form, {'attr': {'class': 'needs-validation'}}) }}
                <div class=\"card-body\">
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    <div class=\"row g-4\">
                        <!-- Informations personnelles -->
                        <div class=\"col-md-6\">
                            <div class=\"p-3 border rounded bg-light\">
                                <h5 class=\"border-bottom pb-2 mb-3\">
                                    <i class=\"fas fa-user-circle me-2\"></i>Informations personnelles
                                </h5>
                                <div class=\"mb-3\">
                                    {{ form_label(form.prenom, null, {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.prenom) }}
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(form.nom, null, {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.nom) }}
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(form.localisation, null, {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.localisation, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Paris, France'}}) }}
                                    {{ form_errors(form.localisation) }}
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(form.avatar, null, {'label_attr': {'class': 'form-label'}}) }}
                                    <div class=\"input-group\">
                                        <span class=\"input-group-text\"><i class=\"fas fa-image\"></i></span>
                                        {{ form_widget(form.avatar, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                    {{ form_errors(form.avatar) }}
                                    <small class=\"text-muted\">URL de votre photo de profil (optionnel)</small>
                                </div>
                            </div>
                        </div>

                        <!-- Informations professionnelles -->
                        <div class=\"col-md-6\">
                            <div class=\"p-3 border rounded bg-light\">
                                <h5 class=\"border-bottom pb-2 mb-3\">
                                    <i class=\"fas fa-briefcase me-2\"></i>Informations professionnelles
                                </h5>
                                <div class=\"mb-3\">
                                    {{ form_label(form.niveauExperience, null, {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.niveauExperience, {'attr': {'class': 'form-select'}}) }}
                                    {{ form_errors(form.niveauExperience) }}
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(form.salaireMinimum, null, {'label_attr': {'class': 'form-label'}}) }}
                                    <div class=\"input-group\">
                                        {{ form_widget(form.salaireMinimum, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 35000'}}) }}
                                        <span class=\"input-group-text\">€/an</span>
                                    </div>
                                    {{ form_errors(form.salaireMinimum) }}
                                </div>
                                <div class=\"mb-4\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                        <h5 class=\"mb-0\">Compétences</h5>
                                        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addCompetenceModal\">
                                            <i class=\"fas fa-plus\"></i> Ajouter une compétence
                                        </button>
                                    </div>
                                    <div id=\"competences-wrapper\">
                                        {{ form_widget(form.competences, {'attr': {'class': 'd-none'}}) }}
                                        <div class=\"competences-container\" id=\"selectedCompetences\">
                                            {% for competence in form.competences %}
                                                {% if competence.vars.checked %}
                                                    <div class=\"competence-item\" data-competence-id=\"{{ competence.vars.id }}\">
                                                        <span class=\"competence-label\">{{ competence.vars.label }}</span>
                                                        <div class=\"progress\">
                                                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"></div>
                                                        </div>
                                                        <button type=\"button\" class=\"btn-close remove-competence\" aria-label=\"Supprimer\"></button>
                                                    </div>
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                    </div>
                                    {{ form_errors(form.competences) }}
                                </div>

                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"addCompetenceModal\" tabindex=\"-1\" aria-labelledby=\"addCompetenceModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"addCompetenceModalLabel\">Ajouter une compétence</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div class=\"mb-3\">
                                                    <input type=\"text\" class=\"form-control\" id=\"competenceSearch\" placeholder=\"Rechercher une compétence...\">
                                                </div>
                                                <div class=\"competences-list\">
                                                    {% for competence in form.competences %}
                                                        {% if not competence.vars.checked %}
                                                            <div class=\"competence-item\" data-competence-id=\"{{ competence.vars.id }}\">
                                                                <span class=\"competence-label\">{{ competence.vars.label }}</span>
                                                                <div class=\"progress\">
                                                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 0%\"></div>
                                                                </div>
                                                            </div>
                                                        {% endif %}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Biographie -->
                        <div class=\"col-12\">
                            <div class=\"p-3 border rounded bg-light\">
                                <h5 class=\"border-bottom pb-2 mb-3\">
                                    <i class=\"fas fa-book me-2\"></i>Biographie
                                </h5>
                                <div class=\"mb-3\">
                                    {{ form_widget(form.biographie, {
                                        'attr': {
                                            'class': 'form-control',
                                            'rows': '5',
                                            'style': 'resize: vertical;'
                                        }
                                    }) }}
                                    {{ form_errors(form.biographie) }}
                                    <small class=\"text-muted\">Décrivez votre parcours, vos expériences et vos objectifs professionnels</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('dev_dashboard') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-2\"></i>Enregistrer les modifications
                        </button>
                    </div>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .competences-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .competence-item {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            padding: 1rem;
            position: relative;
        }

        .competence-label {
            display: block;
            padding-left: 0;
            margin-bottom: 0.5rem;
            font-weight: 500;
            cursor: pointer;
        }

        .progress {
            height: 4px;
            background-color: #f0f0f0;
            border-radius: 2px;
            overflow: hidden;
        }

        .progress-bar {
            transition: width 0.3s ease;
        }

        .competence-item:hover {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .remove-competence {
            position: absolute;
            top: 1rem;
            right: 1rem;
            opacity: 0.5;
        }

        .remove-competence:hover {
            opacity: 1;
        }

        .competences-list {
            max-height: 400px;
            overflow-y: auto;
        }

        #competenceSearch {
            margin-bottom: 1rem;
        }

        .modal-body .competence-item {
            margin-bottom: 0.5rem;
            transition: background-color 0.2s;
        }

        .modal-body .competence-item:hover {
            background-color: #f8f9fa;
            cursor: pointer;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const competencesWrapper = document.getElementById('competences-wrapper');
            const selectedCompetences = document.getElementById('selectedCompetences');
            const competencesList = document.querySelector('.competences-list');
            const searchInput = document.getElementById('competenceSearch');
            const checkboxes = competencesWrapper.querySelectorAll('input[type=\"checkbox\"]');

            // Fonction de recherche
            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                const competences = competencesList.querySelectorAll('.competence-item');
                
                competences.forEach(competence => {
                    const label = competence.querySelector('.competence-label').textContent.toLowerCase();
                    if (label.includes(searchTerm)) {
                        competence.style.display = '';
                    } else {
                        competence.style.display = 'none';
                    }
                });
            });

            // Ajout d'une compétence
            competencesList.addEventListener('click', function(e) {
                const competenceItem = e.target.closest('.competence-item');
                if (!competenceItem) return;

                const competenceId = competenceItem.dataset.competenceId;
                const checkbox = competencesWrapper.querySelector(`input[id=\"\${competenceId}\"]`);
                const clone = competenceItem.cloneNode(true);
                
                // Ajouter le bouton de suppression
                const removeButton = document.createElement('button');
                removeButton.className = 'btn-close remove-competence';
                removeButton.setAttribute('aria-label', 'Supprimer');
                clone.appendChild(removeButton);

                selectedCompetences.appendChild(clone);
                checkbox.checked = true;
                competenceItem.remove();

                // Fermer le modal
                const modal = document.getElementById('addCompetenceModal');
                const modalInstance = bootstrap.Modal.getInstance(modal);
                modalInstance.hide();
            });

            // Suppression d'une compétence
            selectedCompetences.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-competence')) {
                    const competenceItem = e.target.closest('.competence-item');
                    const competenceId = competenceItem.dataset.competenceId;
                    const checkbox = competencesWrapper.querySelector(`input[id=\"\${competenceId}\"]`);
                    const clone = competenceItem.cloneNode(true);
                    
                    // Supprimer le bouton de suppression
                    clone.querySelector('.remove-competence').remove();
                    
                    competencesList.appendChild(clone);
                    checkbox.checked = false;
                    competenceItem.remove();
                }
            });
        });
    </script>
{% endblock %}
", "dev/profile.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\dev\\profile.html.twig");
    }
}
