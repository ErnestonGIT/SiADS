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

/* index1.html */
class __TwigTemplate_480c0f2d3a26cfc642b3344fe25e781a63a1082a9d90b272ffc18eb65e09c569 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
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
        yield from         $this->loadTemplate("./routes/partials/pestanias.html", "index1.html", 14)->unwrap()->yield($context);
        // line 15
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/js/tabler.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js\"></script>

</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index1.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  58 => 15,  56 => 14,  48 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index1.html", "C:\\wamp64\\www\\CICS-IPN\\public\\templates\\index1.html");
    }
}
