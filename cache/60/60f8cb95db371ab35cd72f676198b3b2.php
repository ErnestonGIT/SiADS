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

/* index.html */
class __TwigTemplate_b5a47501a66b5bfb70cbc1b4f90b5ac1 extends Template
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
  
                ";
        // line 14
        yield from $this->loadTemplate("./routes/partials/index/contenido.html", "index.html", 14)->unwrap()->yield($context);
        // line 15
        yield "
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
        return "index.html";
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
        return array (  62 => 15,  60 => 14,  52 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.html", "C:\\xampp\\htdocs\\PlantillaEscolar-ale\\public\\templates\\index.html");
    }
}
