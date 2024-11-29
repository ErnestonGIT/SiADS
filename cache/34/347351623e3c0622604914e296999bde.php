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

/* ./routes/administrador.php */
class __TwigTemplate_f98aaf0062fe61101daae85362063866 extends Template
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
        yield "<div class=\"page\">
    ";
        // line 2
        yield from $this->loadTemplate("./routes/partials/sidebar.html", "./routes/administrador.php", 2)->unwrap()->yield($context);
        // line 3
        yield "    <div class=\"page-wrapper\">

        ";
        // line 5
        yield from $this->loadTemplate("./routes/partials/administrador.html", "./routes/administrador.php", 5)->unwrap()->yield($context);
        // line 6
        yield "    </div>

</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "./routes/administrador.php";
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
        return array (  53 => 6,  51 => 5,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "./routes/administrador.php", "C:\\xampp\\htdocs\\CICS-IPN\\public\\templates\\routes\\administrador.php");
    }
}
