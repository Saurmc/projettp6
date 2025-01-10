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

/* registration/register_dev.html.twig */
class __TwigTemplate_5c183d17f80b8a19cfcd2028694cfb62 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_dev.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register_dev.html.twig", 1);
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

        yield "Inscription Développeur - AdopteUnDev";
        
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
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .competences-header {
            background-color: #4285f4;
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .competences-header h3 {
            margin: 0;
            font-size: 1.1rem;
        }

        .btn-ajouter-competence {
            background-color: #fff;
            color: #4285f4;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-ajouter-competence:hover {
            background-color: #f8f9fa;
            transform: translateY(-1px);
        }

        .competence-row {
            padding: 1rem;
            display: flex;
            gap: 1rem;
            align-items: center;
            background-color: #f8f9fa;
            margin: 0.5rem;
            border-radius: 4px;
            border: 1px solid #e9ecef;
        }

        .competence-row .form-group {
            flex-grow: 1;
            margin: 0;
        }

        .btn-supprimer {
            background-color: #fff;
            color: #dc3545;
            border: 1px solid #dc3545;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-supprimer:hover {
            background-color: #dc3545;
            color: #fff;
        }

        .competences-error {
            margin: 0.5rem;
            border-radius: 4px;
        }

        .btn-submit {
            background-color: #4285f4;
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 4px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            font-weight: 500;
            margin-top: 1rem;
        }

        .btn-submit:hover:not(:disabled) {
            background-color: #3367d6;
        }

        .btn-submit:disabled {
            background-color: #b3b3b3;
            cursor: not-allowed;
        }

        .form-select {
            padding: 0.5rem;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }

        .form-select:focus {
            border-color: #4285f4;
            box-shadow: 0 0 0 0.2rem rgba(66, 133, 244, 0.25);
        }

        .required::after {
            content: \" *\";
            color: red;
        }
        .invalid-feedback {
            display: block;
        }

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

    // line 196
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 197
        yield "    <div class=\"container py-5\">
        ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "flashes", [], "any", false, false, false, 198));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 199
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 200
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "
        ";
        // line 207
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 207, $this->source); })()), "vars", [], "any", false, false, false, 207), "valid", [], "any", false, false, false, 207)) {
            // line 208
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 209
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 209, $this->source); })()), 'errors');
            yield "
            </div>
        ";
        }
        // line 212
        yield "
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow\">
                    <div class=\"card-header py-3\">
                        <h1 class=\"h3 mb-0\">Inscription Développeur</h1>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 220
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 220, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                            <div class=\"alert alert-danger d-none\" id=\"form-errors\">
                                Veuillez corriger les erreurs suivantes :
                                <ul class=\"mb-0\"></ul>
                            </div>
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 227, $this->source); })()), "prenom", [], "any", false, false, false, 227), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Votre prénom"], "label_attr" => ["class" => "required"]]);
        // line 235
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 238, $this->source); })()), "nom", [], "any", false, false, false, 238), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"], "label_attr" => ["class" => "required"]]);
        // line 246
        yield "
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 251, $this->source); })()), "email", [], "any", false, false, false, 251), 'row', ["attr" => ["class" => "form-control", "placeholder" => "exemple@email.com"], "label_attr" => ["class" => "required"]]);
        // line 259
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 263, $this->source); })()), "plainPassword", [], "any", false, false, false, 263), 'row', ["attr" => ["class" => "form-control", "minlength" => "6", "id" => "password"], "label_attr" => ["class" => "required"]]);
        // line 272
        yield "
                            </div>

                            <div class=\"mb-3\">
                                <label for=\"confirmPassword\" class=\"form-label required\">Confirmez le mot de passe</label>
                                <input type=\"password\" 
                                       id=\"confirmPassword\" 
                                       class=\"form-control\" 
                                       required 
                                       minlength=\"6\"
                                       oninput=\"validatePassword(this)\">
                                <div class=\"invalid-feedback\">
                                    Les mots de passe ne correspondent pas
                                </div>
                            </div>

                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    ";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 290, $this->source); })()), "localisation", [], "any", false, false, false, 290), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ville, Pays"], "label_attr" => ["class" => "required"]]);
        // line 298
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 301
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 301, $this->source); })()), "niveauExperience", [], "any", false, false, false, 301), 'row', ["attr" => ["class" => "form-select"], "label_attr" => ["class" => "required"]]);
        // line 308
        yield "
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 313
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 313, $this->source); })()), "salaireMinimum", [], "any", false, false, false, 313), 'row', ["label" => "Salaire minimum annuel (€)", "attr" => ["class" => "form-control", "placeholder" => "Ex: 35000", "min" => "0", "step" => "1000"], "help" => "Indiquez votre salaire minimum annuel brut en euros", "label_attr" => ["class" => "required"]]);
        // line 325
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 329
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 329, $this->source); })()), "biographie", [], "any", false, false, false, 329), 'row', ["attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Parlez-nous de vous, de votre parcours et de vos expériences..."], "label_attr" => ["class" => "required"]]);
        // line 338
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 342, $this->source); })()), "avatar", [], "any", false, false, false, 342), 'row', ["attr" => ["class" => "form-control", "placeholder" => "https://exemple.com/votre-avatar.jpg"]]);
        // line 347
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
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 358, $this->source); })()), "competences", [], "any", false, false, false, 358), 'widget', ["attr" => ["class" => "d-none"]]);
        yield "
                                    <div class=\"competences-container\" id=\"selectedCompetences\">
                                        ";
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 360, $this->source); })()), "competences", [], "any", false, false, false, 360));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 361
            yield "                                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 361), "checked", [], "any", false, false, false, 361)) {
                // line 362
                yield "                                                <div class=\"competence-item\" data-competence-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 362), "id", [], "any", false, false, false, 362), "html", null, true);
                yield "\">
                                                    <span class=\"competence-label\">";
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 363), "label", [], "any", false, false, false, 363), "html", null, true);
                yield "</span>
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"></div>
                                                    </div>
                                                    <button type=\"button\" class=\"btn-close remove-competence\" aria-label=\"Supprimer\"></button>
                                                </div>
                                            ";
            }
            // line 370
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 371
        yield "                                    </div>
                                </div>
                                ";
        // line 373
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 373, $this->source); })()), "competences", [], "any", false, false, false, 373), 'errors');
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
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 389, $this->source); })()), "competences", [], "any", false, false, false, 389));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 390
            yield "                                                    ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 390), "checked", [], "any", false, false, false, 390)) {
                // line 391
                yield "                                                        <div class=\"competence-item\" data-competence-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 391), "id", [], "any", false, false, false, 391), "html", null, true);
                yield "\">
                                                            <span class=\"competence-label\">";
                // line 392
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["competence"], "vars", [], "any", false, false, false, 392), "label", [], "any", false, false, false, 392), "html", null, true);
                yield "</span>
                                                            <div class=\"progress\">
                                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 0%\"></div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 398
            yield "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        yield "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn-submit\">
                                <i class=\"fas fa-user-plus\"></i>
                                S'inscrire
                            </button>
                        ";
        // line 409
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 409, $this->source); })()), 'form_end');
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

    // line 417
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 418
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

        function validatePassword(input) {
            const password = document.getElementById('password');
            if (input.value !== password.value) {
                input.setCustomValidity('Les mots de passe ne correspondent pas');
            } else {
                input.setCustomValidity('');
            }
        }
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
        return "registration/register_dev.html.twig";
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
        return array (  575 => 418,  565 => 417,  550 => 409,  538 => 399,  532 => 398,  523 => 392,  518 => 391,  515 => 390,  511 => 389,  492 => 373,  488 => 371,  482 => 370,  472 => 363,  467 => 362,  464 => 361,  460 => 360,  455 => 358,  442 => 347,  440 => 342,  434 => 338,  432 => 329,  426 => 325,  424 => 313,  417 => 308,  415 => 301,  410 => 298,  408 => 290,  388 => 272,  386 => 263,  380 => 259,  378 => 251,  371 => 246,  369 => 238,  364 => 235,  362 => 227,  352 => 220,  342 => 212,  336 => 209,  333 => 208,  331 => 207,  328 => 206,  322 => 205,  312 => 201,  307 => 200,  302 => 199,  298 => 198,  295 => 197,  285 => 196,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription Développeur - AdopteUnDev{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .competences-section {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .competences-header {
            background-color: #4285f4;
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .competences-header h3 {
            margin: 0;
            font-size: 1.1rem;
        }

        .btn-ajouter-competence {
            background-color: #fff;
            color: #4285f4;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-ajouter-competence:hover {
            background-color: #f8f9fa;
            transform: translateY(-1px);
        }

        .competence-row {
            padding: 1rem;
            display: flex;
            gap: 1rem;
            align-items: center;
            background-color: #f8f9fa;
            margin: 0.5rem;
            border-radius: 4px;
            border: 1px solid #e9ecef;
        }

        .competence-row .form-group {
            flex-grow: 1;
            margin: 0;
        }

        .btn-supprimer {
            background-color: #fff;
            color: #dc3545;
            border: 1px solid #dc3545;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-supprimer:hover {
            background-color: #dc3545;
            color: #fff;
        }

        .competences-error {
            margin: 0.5rem;
            border-radius: 4px;
        }

        .btn-submit {
            background-color: #4285f4;
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 4px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            font-weight: 500;
            margin-top: 1rem;
        }

        .btn-submit:hover:not(:disabled) {
            background-color: #3367d6;
        }

        .btn-submit:disabled {
            background-color: #b3b3b3;
            cursor: not-allowed;
        }

        .form-select {
            padding: 0.5rem;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }

        .form-select:focus {
            border-color: #4285f4;
            box-shadow: 0 0 0 0.2rem rgba(66, 133, 244, 0.25);
        }

        .required::after {
            content: \" *\";
            color: red;
        }
        .invalid-feedback {
            display: block;
        }

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

{% block body %}
    <div class=\"container py-5\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        {% if not registrationForm.vars.valid %}
            <div class=\"alert alert-danger\">
                {{ form_errors(registrationForm) }}
            </div>
        {% endif %}

        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow\">
                    <div class=\"card-header py-3\">
                        <h1 class=\"h3 mb-0\">Inscription Développeur</h1>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(registrationForm, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                            <div class=\"alert alert-danger d-none\" id=\"form-errors\">
                                Veuillez corriger les erreurs suivantes :
                                <ul class=\"mb-0\"></ul>
                            </div>
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    {{ form_row(registrationForm.prenom, {
                                        'attr': {
                                            'class': 'form-control',
                                            'placeholder': 'Votre prénom'
                                        },
                                        'label_attr': {
                                            'class': 'required'
                                        }
                                    }) }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_row(registrationForm.nom, {
                                        'attr': {
                                            'class': 'form-control',
                                            'placeholder': 'Votre nom'
                                        },
                                        'label_attr': {
                                            'class': 'required'
                                        }
                                    }) }}
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.email, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'exemple@email.com'
                                    },
                                    'label_attr': {
                                        'class': 'required'
                                    }
                                }) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.plainPassword, {
                                    'attr': {
                                        'class': 'form-control',
                                        'minlength': '6',
                                        'id': 'password'
                                    },
                                    'label_attr': {
                                        'class': 'required'
                                    }
                                }) }}
                            </div>

                            <div class=\"mb-3\">
                                <label for=\"confirmPassword\" class=\"form-label required\">Confirmez le mot de passe</label>
                                <input type=\"password\" 
                                       id=\"confirmPassword\" 
                                       class=\"form-control\" 
                                       required 
                                       minlength=\"6\"
                                       oninput=\"validatePassword(this)\">
                                <div class=\"invalid-feedback\">
                                    Les mots de passe ne correspondent pas
                                </div>
                            </div>

                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    {{ form_row(registrationForm.localisation, {
                                        'attr': {
                                            'class': 'form-control',
                                            'placeholder': 'Ville, Pays'
                                        },
                                        'label_attr': {
                                            'class': 'required'
                                        }
                                    }) }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_row(registrationForm.niveauExperience, {
                                        'attr': {
                                            'class': 'form-select'
                                        },
                                        'label_attr': {
                                            'class': 'required'
                                        }
                                    }) }}
                                </div>
                            </div>

                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.salaireMinimum, {
                                    'label': 'Salaire minimum annuel (€)',
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Ex: 35000',
                                        'min': '0',
                                        'step': '1000'
                                    },
                                    'help': 'Indiquez votre salaire minimum annuel brut en euros',
                                    'label_attr': {
                                        'class': 'required'
                                    }
                                }) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.biographie, {
                                    'attr': {
                                        'class': 'form-control',
                                        'rows': 5,
                                        'placeholder': 'Parlez-nous de vous, de votre parcours et de vos expériences...'
                                    },
                                    'label_attr': {
                                        'class': 'required'
                                    }
                                }) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_row(registrationForm.avatar, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'https://exemple.com/votre-avatar.jpg'
                                    }
                                }) }}
                            </div>

                            <div class=\"mb-4\">
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <h5 class=\"mb-0\">Compétences</h5>
                                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addCompetenceModal\">
                                        <i class=\"fas fa-plus\"></i> Ajouter une compétence
                                    </button>
                                </div>
                                <div id=\"competences-wrapper\">
                                    {{ form_widget(registrationForm.competences, {'attr': {'class': 'd-none'}}) }}
                                    <div class=\"competences-container\" id=\"selectedCompetences\">
                                        {% for competence in registrationForm.competences %}
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
                                {{ form_errors(registrationForm.competences) }}
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
                                                {% for competence in registrationForm.competences %}
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

                            <button type=\"submit\" class=\"btn-submit\">
                                <i class=\"fas fa-user-plus\"></i>
                                S'inscrire
                            </button>
                        {{ form_end(registrationForm) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
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

        function validatePassword(input) {
            const password = document.getElementById('password');
            if (input.value !== password.value) {
                input.setCustomValidity('Les mots de passe ne correspondent pas');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
{% endblock %}
", "registration/register_dev.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\registration\\register_dev.html.twig");
    }
}
