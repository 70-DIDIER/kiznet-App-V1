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

/* item/index.html.twig */
class __TwigTemplate_9985dedf64a82e2aba844a4821f45e72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "item/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "item/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "item/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "La facture";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-5\">
    <div class=\"col-lg-6\">
        <a href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_item_create", ["factureId" => (isset($context["factureId"]) || array_key_exists("factureId", $context) ? $context["factureId"] : (function () { throw new RuntimeError('Variable "factureId" does not exist.', 8, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Ajouter</a>
        <a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_facture_pdf", ["factureId" => (isset($context["factureId"]) || array_key_exists("factureId", $context) ? $context["factureId"] : (function () { throw new RuntimeError('Variable "factureId" does not exist.', 9, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-success\">Télécharger</a>

    </div>
    <div class=\"row justify-content-center\">
        <h1>La facture</h1>
        <table class=\"table table-bordered table-hover\">
            <thead class=\"table-primary\">
                <tr>
                    <th>Designation</th>
                    <th>Quantite</th>
                    <th>Prix unitaire</th>
                     <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            yield "                    <tr>
                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "designation", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                        <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                        <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 29), "html", null, true);
            yield " F</td>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 30) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 30)), "html", null, true);
            yield " F CFA</td>
                       
                        <td>
                            <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_item_update", ["factureId" => (isset($context["factureId"]) || array_key_exists("factureId", $context) ? $context["factureId"] : (function () { throw new RuntimeError('Variable "factureId" does not exist.', 33, $this->source); })()), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
                            <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_item_delete", ["factureId" => (isset($context["factureId"]) || array_key_exists("factureId", $context) ? $context["factureId"] : (function () { throw new RuntimeError('Variable "factureId" does not exist.', 34, $this->source); })()), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-danger\">Supprimer</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            </tbody>
        </table>
    </div>       
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "item/index.html.twig";
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
        return array (  166 => 38,  156 => 34,  152 => 33,  146 => 30,  142 => 29,  138 => 28,  134 => 27,  131 => 26,  127 => 25,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La facture{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"col-lg-6\">
        <a href=\"{{ url('app_item_create', {'factureId': factureId}) }}\" class=\"btn btn-primary\">Ajouter</a>
        <a href=\"{{ url('app_facture_pdf', {'factureId': factureId}) }}\" class=\"btn btn-success\">Télécharger</a>

    </div>
    <div class=\"row justify-content-center\">
        <h1>La facture</h1>
        <table class=\"table table-bordered table-hover\">
            <thead class=\"table-primary\">
                <tr>
                    <th>Designation</th>
                    <th>Quantite</th>
                    <th>Prix unitaire</th>
                     <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {% for item in items %}
                    <tr>
                        <td>{{ item.designation }}</td>
                        <td>{{ item.qte }}</td>
                        <td>{{ item.prixUnitaire }} F</td>
                        <td>{{ item.prixUnitaire * item.qte }} F CFA</td>
                       
                        <td>
                            <a href=\"{{ url('app_item_update', {'factureId': factureId, 'id': item.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                            <a href=\"{{ url('app_item_delete', {'factureId': factureId, 'id': item.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>       
</div>
{% endblock %}
", "item/index.html.twig", "C:\\1-Tousprojet\\kiznetapp\\templates\\item\\index.html.twig");
    }
}
