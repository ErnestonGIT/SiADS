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

/* index2.html */
class __TwigTemplate_4a7fc4b345c0de0f6e6d7c9177fc0f9f912ededcb3055f1f72d48a84d428815a extends Template
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
  
  <!--PAGINA PRINCIPAL AL LOGGEARSE -->
  
            <!--Body-->
              ";
        // line 17
        if ((0 === CoreExtension::compare(($context["rol"] ?? null), 1))) {
            // line 18
            yield "                ";
            yield from             $this->loadTemplate("./routes/administrador.php", "index2.html", 18)->unwrap()->yield($context);
            // line 19
            yield "              ";
        } elseif ((0 === CoreExtension::compare(($context["rol"] ?? null), 2))) {
            // line 20
            yield "                ";
            yield from             $this->loadTemplate("./routes/coordinadora.php", "index2.html", 20)->unwrap()->yield($context);
            // line 21
            yield "              ";
        } elseif ((0 === CoreExtension::compare(($context["rol"] ?? null), 3))) {
            // line 22
            yield "                ";
            yield from             $this->loadTemplate("./routes/estudiante.php", "index2.html", 22)->unwrap()->yield($context);
            // line 23
            yield "              ";
        } else {
            // line 24
            yield "                ";
            yield from             $this->loadTemplate("./routes/pestanias.php", "index2.html", 24)->unwrap()->yield($context);
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
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index2.html";
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
        return array (  85 => 26,  82 => 25,  79 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  59 => 17,  48 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index2.html", "C:\\wamp64\\www\\CICS-IPN\\public\\templates\\index2.html");
    }
}
