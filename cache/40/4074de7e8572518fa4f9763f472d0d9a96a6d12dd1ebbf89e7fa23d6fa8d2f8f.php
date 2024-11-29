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

/* ./routes/administrador.php */
class __TwigTemplate_e3cfe46d36839e53578e355dec0019bde86c488c8cfa12b9c4334ecaa360f759 extends Template
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
        yield "<div class=\"page\">
    ";
        // line 2
        yield from         $this->loadTemplate("./routes/partials/sidebar.html", "./routes/administrador.php", 2)->unwrap()->yield($context);
        // line 3
        yield "    <div class=\"page-wrapper\">

        ";
        // line 5
        yield from         $this->loadTemplate("./routes/partials/administrador.html", "./routes/administrador.php", 5)->unwrap()->yield($context);
        // line 6
        yield "    </div>

</div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./routes/administrador.php";
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
        return array (  49 => 6,  47 => 5,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./routes/administrador.php", "C:\\wamp64\\www\\CICS-IPN\\public\\templates\\routes\\administrador.php");
    }
}
