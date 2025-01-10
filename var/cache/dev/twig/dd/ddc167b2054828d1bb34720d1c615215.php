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

/* registration/register_company.html.twig */
class __TwigTemplate_74f0c56a367ec3d798b34f2879354a1b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_company.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register_company.html.twig", 1);
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

        yield "Inscription Entreprise";
        
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
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title text-center mb-4\">Inscription Entreprise</h2>

                        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control", "placeholder" => "exemple@entreprise.com"]]);
        // line 22
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de votre entreprise"]]);
        // line 30
        yield "
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Décrivez votre entreprise..."]]);
        // line 40
        yield "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "siteWeb", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control", "placeholder" => "https://www.votreentreprise.com"]]);
        // line 50
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "adresse", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Adresse complète"]]);
        // line 58
        yield "
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "plainPassword", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Choisissez un mot de passe sécurisé"]]);
        // line 68
        yield "
                        </div>

                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">S'inscrire</button>
                        </div>

                        ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), 'form_end');
        yield "

                        <div class=\"mt-3 text-center\">
                            <p>Déjà inscrit ? <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connectez-vous</a></p>
                        </div>
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
        return "registration/register_company.html.twig";
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
        return array (  159 => 78,  153 => 75,  144 => 68,  142 => 63,  135 => 58,  133 => 53,  128 => 50,  126 => 45,  119 => 40,  117 => 35,  110 => 30,  108 => 25,  103 => 22,  101 => 17,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription Entreprise{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow\">
                    <div class=\"card-body\">
                        <h2 class=\"card-title text-center mb-4\">Inscription Entreprise</h2>

                        {{ form_start(registrationForm, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_row(registrationForm.email, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'exemple@entreprise.com'
                                    }
                                }) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_row(registrationForm.nom, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Nom de votre entreprise'
                                    }
                                }) }}
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            {{ form_row(registrationForm.description, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Décrivez votre entreprise...'
                                }
                            }) }}
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_row(registrationForm.siteWeb, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'https://www.votreentreprise.com'
                                    }
                                }) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_row(registrationForm.adresse, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Adresse complète'
                                    }
                                }) }}
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            {{ form_row(registrationForm.plainPassword, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Choisissez un mot de passe sécurisé'
                                }
                            }) }}
                        </div>

                        <div class=\"d-grid gap-2\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">S'inscrire</button>
                        </div>

                        {{ form_end(registrationForm) }}

                        <div class=\"mt-3 text-center\">
                            <p>Déjà inscrit ? <a href=\"{{ path('app_login') }}\">Connectez-vous</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "registration/register_company.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\registration\\register_company.html.twig");
    }
}
