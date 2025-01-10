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

/* entreprise/profile.html.twig */
class __TwigTemplate_5d27f6e2112dbd529cf8e25219018b6d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entreprise/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entreprise/profile.html.twig", 1);
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

        yield "Profil de ";
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
    <div class=\"row\">
        <div class=\"col-md-8 mx-auto\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                        <h1 class=\"card-title mb-0\">Profil de l'entreprise</h1>
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_profile_edit");
        yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-edit me-2\"></i>Modifier le profil
                        </a>
                    </div>

                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "                        <div class=\"alert alert-success\">
                            ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
                    <div class=\"row\">
                        <div class=\"col-md-4 text-center mb-4\">
                            ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 26, $this->source); })()), "logo", [], "any", false, false, false, 26)) {
            // line 27
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 27, $this->source); })()), "logo", [], "any", false, false, false, 27))), "html", null, true);
            yield "\" alt=\"Logo ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-width: 200px;\">
                            ";
        } else {
            // line 29
            yield "                                <div class=\"bg-light rounded p-4 mb-3\">
                                    <i class=\"fas fa-building fa-4x text-secondary\"></i>
                                </div>
                            ";
        }
        // line 33
        yield "                        </div>
                        <div class=\"col-md-8\">
                            <h2 class=\"h3 mb-3\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        yield "</h2>
                            
                            <div class=\"mb-3\">
                                <i class=\"fas fa-envelope me-2 text-primary\"></i>
                                ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), "html", null, true);
        yield "
                            </div>

                            ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 42, $this->source); })()), "siteWeb", [], "any", false, false, false, 42)) {
            // line 43
            yield "                                <div class=\"mb-3\">
                                    <i class=\"fas fa-globe me-2 text-primary\"></i>
                                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 45, $this->source); })()), "siteWeb", [], "any", false, false, false, 45), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 45, $this->source); })()), "siteWeb", [], "any", false, false, false, 45), "html", null, true);
            yield "</a>
                                </div>
                            ";
        }
        // line 48
        yield "
                            <div class=\"mb-3\">
                                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 51, $this->source); })()), "adresse", [], "any", false, false, false, 51), "html", null, true);
        yield "
                            </div>

                            ";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54)) {
            // line 55
            yield "                                <div class=\"mt-4\">
                                    <h3 class=\"h5 mb-3\">À propos de nous</h3>
                                    <p class=\"text-muted\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), "html", null, true);
            yield "</p>
                                </div>
                            ";
        }
        // line 60
        yield "                        </div>
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
        return "entreprise/profile.html.twig";
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
        return array (  194 => 60,  188 => 57,  184 => 55,  182 => 54,  176 => 51,  171 => 48,  163 => 45,  159 => 43,  157 => 42,  151 => 39,  144 => 35,  140 => 33,  134 => 29,  126 => 27,  124 => 26,  119 => 23,  110 => 20,  107 => 19,  103 => 18,  95 => 13,  86 => 6,  76 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ entreprise.nom }}{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-md-8 mx-auto\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                        <h1 class=\"card-title mb-0\">Profil de l'entreprise</h1>
                        <a href=\"{{ path('entreprise_profile_edit') }}\" class=\"btn btn-primary\">
                            <i class=\"fas fa-edit me-2\"></i>Modifier le profil
                        </a>
                    </div>

                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                    {% endfor %}

                    <div class=\"row\">
                        <div class=\"col-md-4 text-center mb-4\">
                            {% if entreprise.logo %}
                                <img src=\"{{ asset('uploads/logos/' ~ entreprise.logo) }}\" alt=\"Logo {{ entreprise.nom }}\" class=\"img-fluid rounded mb-3\" style=\"max-width: 200px;\">
                            {% else %}
                                <div class=\"bg-light rounded p-4 mb-3\">
                                    <i class=\"fas fa-building fa-4x text-secondary\"></i>
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"col-md-8\">
                            <h2 class=\"h3 mb-3\">{{ entreprise.nom }}</h2>
                            
                            <div class=\"mb-3\">
                                <i class=\"fas fa-envelope me-2 text-primary\"></i>
                                {{ entreprise.email }}
                            </div>

                            {% if entreprise.siteWeb %}
                                <div class=\"mb-3\">
                                    <i class=\"fas fa-globe me-2 text-primary\"></i>
                                    <a href=\"{{ entreprise.siteWeb }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ entreprise.siteWeb }}</a>
                                </div>
                            {% endif %}

                            <div class=\"mb-3\">
                                <i class=\"fas fa-map-marker-alt me-2 text-primary\"></i>
                                {{ entreprise.adresse }}
                            </div>

                            {% if entreprise.description %}
                                <div class=\"mt-4\">
                                    <h3 class=\"h5 mb-3\">À propos de nous</h3>
                                    <p class=\"text-muted\">{{ entreprise.description }}</p>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "entreprise/profile.html.twig", "C:\\Users\\Rabah\\Desktop\\L3_Miage\\ProjetPW\\mon_projet\\templates\\entreprise\\profile.html.twig");
    }
}
