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

/* pdf/index.html.twig */
class __TwigTemplate_927d3bd2dcc5224fc2d82d8814c18446 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Facture Proforma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .invoice {
            background: white;
            padding: 20px;
            max-width: 700px;
            margin: auto;
            border: 1px solid #ddd;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo img {
            max-height: 60px;
        }
        .company-info {
            text-align: right;
        }
        h1 {
            text-align: center;
            font-size: 18px;
            text-decoration: underline;
        }
        p {
            margin: 5px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        th, td {
            padding: 8px;
        }
        tfoot td {
            font-weight: bold;
        }
        .total-text {
            text-align: right;
            font-size: 14px;
            margin-top: 10px;
        }
        .signature {
            text-align: right;
            margin-top: 40px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"invoice\">
        <header>
            <div class=\"logo\">
                <img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.jpg")), "html", null, true);
        yield "\"

                     alt=\"Kiznet Services\">
            </div>
            <div class=\"company-info\">
                <h2>KIZNET SERVICES</h2>
                <p>INSTALLATION INTERNET<br>VENTE DES ÉQUIPEMENTS INFORMATIQUES</p>
            </div>
        </header>

        <h1>FACTURE PROFORMA N°";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82), "html", null, true);
        yield "</h1>
        <p><strong>Doit :</strong> ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 83, $this->source); })()), "nomClient", [], "any", false, false, false, 83), "html", null, true);
        yield "</p>
        <p><strong>Date :</strong> ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 84, $this->source); })()), "date", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true);
        yield "</p>

        ";
        // line 86
        $context["total"] = 0;
        // line 87
        yield "        <table>
            <thead>
                <tr>
                    <th>Désignation</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Prix Total</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 98
            yield "                    ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 98, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 98) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 98)));
            // line 99
            yield "                    <tr>
                        <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "designation", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
                        <td>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                        <td>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 102), "html", null, true);
            yield " F</td>
                        <td>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 103) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 103)), "html", null, true);
            yield " F CFA</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"3\">Total</td>
                    <td><strong>";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 110, $this->source); })()), "html", null, true);
        yield " F CFA</strong></td>
                </tr>
            </tfoot>
        </table>

        <p class=\"total-text\">
            Arrêté la présente facture pro-forma à la somme de : 
            <strong>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 117, $this->source); })()), 0, ".", " "), "html", null, true);
        yield " francs CFA</strong>
        </p>
        
        <p class=\"signature\">Le Responsable</p>
        <p class=\"signature\">Christ N'Konkou </p>
        
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pdf/index.html.twig";
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
        return array (  208 => 117,  198 => 110,  192 => 106,  183 => 103,  179 => 102,  175 => 101,  171 => 100,  168 => 99,  165 => 98,  161 => 97,  149 => 87,  147 => 86,  142 => 84,  138 => 83,  134 => 82,  121 => 72,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Facture Proforma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .invoice {
            background: white;
            padding: 20px;
            max-width: 700px;
            margin: auto;
            border: 1px solid #ddd;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo img {
            max-height: 60px;
        }
        .company-info {
            text-align: right;
        }
        h1 {
            text-align: center;
            font-size: 18px;
            text-decoration: underline;
        }
        p {
            margin: 5px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        th, td {
            padding: 8px;
        }
        tfoot td {
            font-weight: bold;
        }
        .total-text {
            text-align: right;
            font-size: 14px;
            margin-top: 10px;
        }
        .signature {
            text-align: right;
            margin-top: 40px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"invoice\">
        <header>
            <div class=\"logo\">
                <img src=\"{{ absolute_url(asset('images/logo.jpg')) }}\"

                     alt=\"Kiznet Services\">
            </div>
            <div class=\"company-info\">
                <h2>KIZNET SERVICES</h2>
                <p>INSTALLATION INTERNET<br>VENTE DES ÉQUIPEMENTS INFORMATIQUES</p>
            </div>
        </header>

        <h1>FACTURE PROFORMA N°{{ facture.id }}</h1>
        <p><strong>Doit :</strong> {{ facture.nomClient }}</p>
        <p><strong>Date :</strong> {{ facture.date | date('d/m/Y') }}</p>

        {% set total = 0 %}
        <table>
            <thead>
                <tr>
                    <th>Désignation</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Prix Total</th>
                </tr>
            </thead>
            <tbody>
                {% for item in items %}
                    {% set total = total + (item.prixUnitaire * item.qte) %}
                    <tr>
                        <td>{{ item.designation }}</td>
                        <td>{{ item.qte }}</td>
                        <td>{{ item.prixUnitaire }} F</td>
                        <td>{{ item.prixUnitaire * item.qte }} F CFA</td>
                    </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"3\">Total</td>
                    <td><strong>{{ total }} F CFA</strong></td>
                </tr>
            </tfoot>
        </table>

        <p class=\"total-text\">
            Arrêté la présente facture pro-forma à la somme de : 
            <strong>{{ total | number_format(0, '.', ' ') }} francs CFA</strong>
        </p>
        
        <p class=\"signature\">Le Responsable</p>
        <p class=\"signature\">Christ N'Konkou </p>
        
    </div>
</body>
</html>
", "pdf/index.html.twig", "C:\\1-Tousprojet\\kiznetapp\\templates\\pdf\\index.html.twig");
    }
}
