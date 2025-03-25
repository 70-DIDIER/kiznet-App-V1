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
class __TwigTemplate_423b52bc9d6471d4afe7b521ed35cc27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>kiznetapp | ";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" type=\"images/png\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        yield "\">
                ";
        // line 8
        yield "        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        yield "\">
    </head>
    <body class=\"d-flex flex-column min-vh-100\">
        <div class=\"container-fluid barrenav sticky-top   shadow-sm px-5 pe-lg-0\" style=\"background-color: #45526e\">
            <nav class=\"navbar navbar-expand-lg  navbar-secondary py-3 py-lg-0\">
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand\">
                    <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        yield "\" width=\"100\" height=\"60\" alt=\"Logo\" class=\"me-2\" />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\" style=\"color: rgb(46, 193, 253);\">Acceuil</a>
                        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture");
        yield "\" class=\"nav-item nav-link\" style=\"color: rgb(46, 193, 253);\">Facture</a>
                        <a href=\"#about\" class=\"nav-item nav-link\" style=\"color: rgb(46, 193, 253);\">A propos</a>
                    </div>
                </div>
            </nav>
        </div>
        ";
        // line 29
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 30
        yield "        <!-- Remove the container if you want to extend the Footer to full width. -->
  <!-- Footer -->
  <footer
          class=\"text-center text-lg-start text-white\"
          style=\"background-color: #45526e\"
          >
    <!-- Grid container -->
    <div class=\"container p-4 pb-0\">
      <!-- Section: Links -->
      <section class=\"\">
        <!--Grid row-->
        <div class=\"row\">
          <!-- Grid column -->
          <div class=\"col-md-3 col-lg-3 col-xl-3 mx-auto mt-3\">
            <h3 class=\"text-uppercase mb-4 font-weight-bold\">
           <a href=\"https://kiznetservice.com\" style=\"color: rgb(46, 193, 253);\">KIZNET-SERVICE </a>  
            </h3>
            <p>
              est une entreprise specialiser dans le domaine de télécomunication et ingeniérie logiciel
            </p>
          </div>
          <!-- Grid column -->

          <hr class=\"w-100 clearfix d-md-none\" />

          <!-- Grid column -->
          <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mt-3\">
            <h6 class=\"text-uppercase mb-4 font-weight-bold\">Services</h6>
            <p>
              installation camera de vidéo surveillance 
            </p>
            <p>
              création de site web, developpement d'application web et mobile
            </p>
            
          </div>
          <!-- Grid column -->

          <hr class=\"w-100 clearfix d-md-none\" />

          <!-- Grid column -->
          

          <!-- Grid column -->
          <hr class=\"w-100 clearfix d-md-none\" />

          <!-- Grid column -->
          <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mt-3\">
            <h6 class=\"text-uppercase mb-4 font-weight-bold\">Contact</h6>
            <p><i class=\"fas fa-home mr-3\"></i> congo brazzaville, POINTE NOIRE</p>
            <p><i class=\"fas fa-envelope mr-3\"></i> christnkounkou@gmail.com</p>
            <p><i class=\"fas fa-phone mr-3\"></i> +(242) 06 931 7477 </p>
            <p><i class=\"fas fa-print mr-3\"></i> + 242 05 537 10 28</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class=\"my-3\">

      <!-- Section: Copyright -->
      <section class=\"p-3 pt-0\">
        <div class=\"row d-flex align-items-center\">
          <!-- Grid column -->
          <div class=\"col-md-7 col-lg-8 text-center text-md-start\">
            <!-- Copyright -->
            <div class=\"p-3\">
                &copy; 2025 kiznet services. Tous droits réservés. Designed by <a href=\"https://www.linkedin.com/in/koffi-didier-guinwogbegno\" target=\"_blank\" style=\"color: rgb(46, 193, 253);\">Didier Guin</a>

            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class=\"col-md-5 col-lg-4 ml-lg-0 text-center text-md-end\">
            <!-- Facebook -->
            <a
               class=\"btn btn-outline-light btn-floating m-1\"
               class=\"text-white\"
               role=\"button\"
               ><i class=\"fab fa-facebook-f\"></i
              ></a>

            <!-- Twitter -->
            <a
               class=\"btn btn-outline-light btn-floating m-1\"
               class=\"text-white\"
               role=\"button\"
               ><i class=\"fab fa-linkedin-in\"></i></a>

            <!-- Google -->
            <a
               class=\"btn btn-outline-light btn-floating m-1\"
               class=\"text-white\"
               role=\"button\"
               ><i class=\"fab fa-google\"></i
              ></a>

            <!-- Instagram -->
            <a
               class=\"btn btn-outline-light btn-floating m-1\"
               class=\"text-white\"
               role=\"button\"
               ><i class=\"fab fa-instagram\"></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
<!-- End of .container -->
        <script src=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  261 => 29,  239 => 5,  224 => 148,  104 => 30,  102 => 29,  93 => 23,  89 => 22,  79 => 15,  75 => 14,  67 => 9,  64 => 8,  60 => 6,  56 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>kiznetapp | {% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"images/png\" href=\"{{ asset('images/favicon.png') }}\">
                {# le lien des icones fontawesome #}
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.css') }}\">
    </head>
    <body class=\"d-flex flex-column min-vh-100\">
        <div class=\"container-fluid barrenav sticky-top   shadow-sm px-5 pe-lg-0\" style=\"background-color: #45526e\">
            <nav class=\"navbar navbar-expand-lg  navbar-secondary py-3 py-lg-0\">
                <a href=\"{{ path('app_home') }}\" class=\"navbar-brand\">
                    <img src=\"{{ asset('images/logo1.png') }}\" width=\"100\" height=\"60\" alt=\"Logo\" class=\"me-2\" />
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link active\" style=\"color: rgb(46, 193, 253);\">Acceuil</a>
                        <a href=\"{{ path('app_facture') }}\" class=\"nav-item nav-link\" style=\"color: rgb(46, 193, 253);\">Facture</a>
                        <a href=\"#about\" class=\"nav-item nav-link\" style=\"color: rgb(46, 193, 253);\">A propos</a>
                    </div>
                </div>
            </nav>
        </div>
        {% block body %}{% endblock %}
        <!-- Remove the container if you want to extend the Footer to full width. -->
  <!-- Footer -->
  <footer
          class=\"text-center text-lg-start text-white\"
          style=\"background-color: #45526e\"
          >
    <!-- Grid container -->
    <div class=\"container p-4 pb-0\">
      <!-- Section: Links -->
      <section class=\"\">
        <!--Grid row-->
        <div class=\"row\">
          <!-- Grid column -->
          <div class=\"col-md-3 col-lg-3 col-xl-3 mx-auto mt-3\">
            <h3 class=\"text-uppercase mb-4 font-weight-bold\">
           <a href=\"https://kiznetservice.com\" style=\"color: rgb(46, 193, 253);\">KIZNET-SERVICE </a>  
            </h3>
            <p>
              est une entreprise specialiser dans le domaine de télécomunication et ingeniérie logiciel
            </p>
          </div>
          <!-- Grid column -->

          <hr class=\"w-100 clearfix d-md-none\" />

          <!-- Grid column -->
          <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mt-3\">
            <h6 class=\"text-uppercase mb-4 font-weight-bold\">Services</h6>
            <p>
              installation camera de vidéo surveillance 
            </p>
            <p>
              création de site web, developpement d'application web et mobile
            </p>
            
          </div>
          <!-- Grid column -->

          <hr class=\"w-100 clearfix d-md-none\" />

          <!-- Grid column -->
          

          <!-- Grid column -->
          <hr class=\"w-100 clearfix d-md-none\" />

          <!-- Grid column -->
          <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mt-3\">
            <h6 class=\"text-uppercase mb-4 font-weight-bold\">Contact</h6>
            <p><i class=\"fas fa-home mr-3\"></i> congo brazzaville, POINTE NOIRE</p>
            <p><i class=\"fas fa-envelope mr-3\"></i> christnkounkou@gmail.com</p>
            <p><i class=\"fas fa-phone mr-3\"></i> +(242) 06 931 7477 </p>
            <p><i class=\"fas fa-print mr-3\"></i> + 242 05 537 10 28</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class=\"my-3\">

      <!-- Section: Copyright -->
      <section class=\"p-3 pt-0\">
        <div class=\"row d-flex align-items-center\">
          <!-- Grid column -->
          <div class=\"col-md-7 col-lg-8 text-center text-md-start\">
            <!-- Copyright -->
            <div class=\"p-3\">
                &copy; 2025 kiznet services. Tous droits réservés. Designed by <a href=\"https://www.linkedin.com/in/koffi-didier-guinwogbegno\" target=\"_blank\" style=\"color: rgb(46, 193, 253);\">Didier Guin</a>

            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class=\"col-md-5 col-lg-4 ml-lg-0 text-center text-md-end\">
            <!-- Facebook -->
            <a
               class=\"btn btn-outline-light btn-floating m-1\"
               class=\"text-white\"
               role=\"button\"
               ><i class=\"fab fa-facebook-f\"></i
              ></a>

            <!-- Twitter -->
            <a
               class=\"btn btn-outline-light btn-floating m-1\"
               class=\"text-white\"
               role=\"button\"
               ><i class=\"fab fa-linkedin-in\"></i></a>

            <!-- Google -->
            <a
               class=\"btn btn-outline-light btn-floating m-1\"
               class=\"text-white\"
               role=\"button\"
               ><i class=\"fab fa-google\"></i
              ></a>

            <!-- Instagram -->
            <a
               class=\"btn btn-outline-light btn-floating m-1\"
               class=\"text-white\"
               role=\"button\"
               ><i class=\"fab fa-instagram\"></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
<!-- End of .container -->
        <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "C:\\1-Tousprojet\\kiznetapp\\templates\\base.html.twig");
    }
}
