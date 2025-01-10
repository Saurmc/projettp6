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

/* entreprise/edit_profile.html.twig */
class __TwigTemplate_d77be24798e87ec0639e5968099db3d4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise/edit_profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entreprise/edit_profile.html.twig", 1);
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

        yield "Modifier le profil - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <h2 class=\"card-title text-center mb-4\">Modifier votre profil</h2>

                    ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de l'entreprise"]]);
        // line 22
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        // line 30
        yield "
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Description de votre entreprise"]]);
        // line 41
        yield "
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "siteWeb", [], "any", false, false, false, 46), 'row', ["attr" => ["class" => "form-control", "placeholder" => "https://www.example.com"]]);
        // line 51
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "adresse", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Adresse complète"]]);
        // line 59
        yield "
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "logo", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control"]]);
        // line 68
        yield "
                        <small class=\"form-text text-muted\">Format recommandé : JPG ou PNG, max 2MB</small>
                    </div>

                    <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-2\"></i>Enregistrer les modifications
                        </button>
                        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_dashboard");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour au dashboard
                        </a>
                    </div>

                    ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
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
        return "entreprise/edit_profile.html.twig";
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
        return array (  163 => 81,  155 => 76,  145 => 68,  143 => 64,  136 => 59,  134 => 54,  129 => 51,  127 => 46,  120 => 41,  118 => 35,  111 => 30,  109 => 25,  104 => 22,  102 => 17,  95 => 13,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le profil - {{ entreprise.nom }}{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <h2 class=\"card-title text-center mb-4\">Modifier votre profil</h2>

                    {{ form_start(form) }}
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.nom, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Nom de l\\'entreprise'
                                }
                            }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.email, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Email'
                                }
                            }) }}
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_row(form.description, {
                            'attr': {
                                'class': 'form-control',
                                'rows': 4,
                                'placeholder': 'Description de votre entreprise'
                            }
                        }) }}
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.siteWeb, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'https://www.example.com'
                                }
                            }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.adresse, {
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Adresse complète'
                                }
                            }) }}
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_row(form.logo, {
                            'attr': {
                                'class': 'form-control'
                            }
                        }) }}
                        <small class=\"form-text text-muted\">Format recommandé : JPG ou PNG, max 2MB</small>
                    </div>

                    <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-2\"></i>Enregistrer les modifications
                        </button>
                        <a href=\"{{ path('entreprise_dashboard') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour au dashboard
                        </a>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "entreprise/edit_profile.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\entreprise\\edit_profile.html.twig");
    }
}
