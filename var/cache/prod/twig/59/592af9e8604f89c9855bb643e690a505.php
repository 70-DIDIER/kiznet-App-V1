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

/* base.html.twig */
class __TwigTemplate_24730b103839c649cb1d27abd3c03f5f extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>kiznetapp | ";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        yield "\">
    </head>
    <body class=\"d-flex flex-column min-vh-100\">
        <div class=\"container-fluid barrenav sticky-top bg-secondary bg-light-radial shadow-sm px-5 pe-lg-0\">
            <nav class=\"navbar navbar-expand-lg bg-secondary navbar-secondary py-3 py-lg-0\">
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand\">
                    <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        yield "\" width=\"100\" height=\"60\" alt=\"Logo\" class=\"me-2\" />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\" style=\"color: rgb(46, 193, 253);\">Acceuil</a>
                        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture");
        yield "\" class=\"nav-item nav-link\" style=\"color: rgb(46, 193, 253);\">Facture</a>
                        <a href=\"#about\" class=\"nav-item nav-link\" style=\"color: rgb(46, 193, 253);\">A propos</a>
                    </div>
                </div>
            </nav>
        </div>
        ";
        // line 26
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 27
        yield "        <footer class=\"bg-secondary text-white py-4\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Section : À propos -->
                    <div class=\"col-md-4 mb-3 mb-md-0\">
                        <h5 class=\"text-uppercase fw-bold\" style=\"color: rgb(46, 193, 253);\">À propos</h5>
                        <p class=\"small\">
                        <a href=\"https://kiznetservice.com\" style=\"color: rgb(46, 193, 253);\">Kiznet Service</a>  vous accompagne dans l’installation, la maintenance et le support technique de vos réseaux. Forts d’une expertise reconnue, nous proposons des solutions sur mesure pour améliorer votre connectivité.
                        </p>
                    </div>
                    
                    <!-- Section : Liens utiles -->
                    <div class=\"col-md-4 mb-3 mb-md-0\">
                        <h5 class=\"text-uppercase fw-bold\" style=\"color: rgb(46, 193, 253);\">Liens utiles</h5>
                        <ul class=\"list-unstyled small\">
                            <li><a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-white text-decoration-none\">Accueil</a></li>
                            <li><a href=\"#\" class=\"text-white text-decoration-none\">Services</a></li>
                            <li><a href=\"#\" class=\"text-white text-decoration-none\">Contact</a></li>
                            <li><a href=\"#\" class=\"text-white text-decoration-none\">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                    
                    <!-- Section : Contact -->
                    <div class=\"col-md-4\">
                        <h5 class=\"text-uppercase fw-bold\" style=\"color: rgb(46, 193, 253);\">Contact</h5>
                        <p class=\"small\">
                            Adresse : congo brazzaville, POINTE NOIRE<br>
                            Téléphone : +(242) 06 931 7477 / 05 537 10 28<br>
                            Email : christnkounkou@gmail.com
                        </p>
                    </div>
                </div>
                
                <!-- Ligne de séparation -->
                <hr class=\"my-4\">
                <!-- Copyright -->
                <div class=\"text-center small\">
                    &copy; 2025 kiznet services. Tous droits réservés. Designed by <a href=\"https://www.linkedin.com/in/koffi-didier-guinwogbegno\" target=\"_blank\" style=\"color: rgb(46, 193, 253);\">Didier Guin</a>
                </div>
            </div>
        </footer>
        <script src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    </body>
</html>
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  156 => 26,  146 => 5,  137 => 68,  108 => 42,  91 => 27,  89 => 26,  80 => 20,  76 => 19,  66 => 12,  62 => 11,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\1-Tousprojet\\kiznetapp\\templates\\base.html.twig");
    }
}
