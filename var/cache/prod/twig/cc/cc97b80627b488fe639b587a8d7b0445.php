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
class __TwigTemplate_fbacff625e78197b58cfaf84a938bff9 extends Template
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
                <img src=\"http://127.0.0.1:8000/images/logo.jpg\" alt=\"Kiznet Services\">
            </div>
            <div class=\"company-info\">
                <h2>KIZNET SERVICES</h2>
                <p>INSTALLATION INTERNET<br>VENTE DES ÉQUIPEMENTS INFORMATIQUES</p>
            </div>
        </header>

        <h1>FACTURE PROFORMA N°";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "id", [], "any", false, false, false, 80), "html", null, true);
        yield "</h1>
        <p><strong>Doit :</strong> ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "nomClient", [], "any", false, false, false, 81), "html", null, true);
        yield "</p>
        <p><strong>Date :</strong> ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["facture"] ?? null), "date", [], "any", false, false, false, 82), "d/m/Y"), "html", null, true);
        yield "</p>

        ";
        // line 84
        $context["total"] = 0;
        // line 85
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
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 96
            yield "                    ";
            $context["total"] = (($context["total"] ?? null) + (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 96) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 96)));
            // line 97
            yield "                    <tr>
                        <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "designation", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                        <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                        <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 100), "html", null, true);
            yield " F</td>
                        <td>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "prixUnitaire", [], "any", false, false, false, 101) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "qte", [], "any", false, false, false, 101)), "html", null, true);
            yield " F CFA</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"3\">Total</td>
                    <td><strong>";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield " F CFA</strong></td>
                </tr>
            </tfoot>
        </table>

        <p class=\"total-text\">
            Arrêté la présente facture pro-forma à la somme de : 
            <strong>";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["total"] ?? null), 0, ".", " "), "html", null, true);
        yield " francs CFA</strong>
        </p>
        
        <p class=\"signature\">Le Responsable</p>
        <p class=\"signature\">Christ N'Konkou </p>
        
    </div>
</body>
</html>
";
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
        return array (  197 => 115,  187 => 108,  181 => 104,  172 => 101,  168 => 100,  164 => 99,  160 => 98,  157 => 97,  154 => 96,  150 => 95,  138 => 85,  136 => 84,  131 => 82,  127 => 81,  123 => 80,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pdf/index.html.twig", "C:\\1-Tousprojet\\kiznetapp\\templates\\pdf\\index.html.twig");
    }
}
