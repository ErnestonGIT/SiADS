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

/* inicio.html */
class __TwigTemplate_3683312d29299e1497f015b71e416239 extends Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css\"/>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler.min.css\">
    <link rel=\"shortcut icon\" href=\"/assets/images/logo.webp\" type=\"image/x-icon\">
    <title>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inicio"] ?? null), "html", null, true);
        yield "</title>
  </ul>
</head>
<body>
  
  <!--PAGINA PRINCIPAL AL LOGGEARSE -->
  
            <!--Body-->
              ";
        // line 17
        if ((($context["rol"] ?? null) == 1)) {
            // line 18
            yield "                ";
            yield from $this->loadTemplate("./routes/administrador.php", "inicio.html", 18)->unwrap()->yield($context);
            // line 19
            yield "              ";
        } elseif ((($context["rol"] ?? null) == 2)) {
            // line 20
            yield "                ";
            yield from $this->loadTemplate("./routes/coordinadora.php", "inicio.html", 20)->unwrap()->yield($context);
            // line 21
            yield "              ";
        } elseif ((($context["rol"] ?? null) == 3)) {
            // line 22
            yield "                ";
            yield from $this->loadTemplate("./routes/estudiante.php", "inicio.html", 22)->unwrap()->yield($context);
            // line 23
            yield "              ";
        } else {
            // line 24
            yield "                ";
            yield from $this->loadTemplate("./partials/Not_Found.html", "inicio.html", 24)->unwrap()->yield($context);
            // line 25
            yield "              ";
        }
        // line 26
        yield "
            <!--End body-->
   
    <!-- Libs JS -->

<script src=\"https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js\"></script>

</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "inicio.html";
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
        return array (  89 => 26,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  52 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "inicio.html", "C:\\xampp\\htdocs\\PlantillaEscolar-ale\\public\\templates\\inicio.html");
    }
}
