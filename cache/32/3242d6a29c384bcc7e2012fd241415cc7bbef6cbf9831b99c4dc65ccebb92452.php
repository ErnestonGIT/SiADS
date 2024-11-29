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

/* ./routes/partials/administrador.html */
class __TwigTemplate_3112bf138d01256ae14a081199e2b3991337b13000a684d0a2da7d510a1d43e2 extends Template
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
        yield "<div class=\"page-header d-print-none\">
\t<div class=\"container-xl\">
\t\t<div class=\"row g-2 align-items-center\">
\t\t\t<div
\t\t\t\tclass=\"col\">
\t\t\t\t<!-- Page pre-title -->
\t\t\t\t<div class=\"page-pretitle\">
\t\t\t\t\tAdministración
\t\t\t\t</div>
\t\t\t\t<h2 class=\"page-title\">
\t\t\t\t\tCICS-UST
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<!-- Page title actions -->
\t\t\t<div class=\"col-auto ms-auto d-print-none\">
\t\t\t\t<div class=\"btn-list\">
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"btn btn-primary d-none d-sm-inline-block\" style=\"background-color:#6b1d47;\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-report\">
\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t<path d=\"M12 5l0 14\"></path>
\t\t\t\t\t\t\t<path d=\"M5 12l14 0\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tAñadir seminario
\t\t\t\t\t</a>
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"btn btn-primary d-sm-none btn-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-report\" aria-label=\"Create new report\">
\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t<path d=\"M12 5l0 14\"></path>
\t\t\t\t\t\t\t<path d=\"M5 12l14 0\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"page-body\">
\t<div class=\"container-xl\">
\t\t<div class=\"row row-deck row-cards\">
\t\t\t<div class=\"col-7\">
\t\t\t\t<div class=\"card\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-5\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\tSelección de plantilla
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"text-secondary\">Seleccione la plantilla que más le guste y llene los datos solicitados para su
\t\t\t\t\t\t\t              publicación.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label class=\"form-imagecheck mb-2\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"form-imagecheck-radio\" value=\"1\" class=\"form-imagecheck-input\">
\t\t\t\t\t\t\t\t<span class=\"form-imagecheck-figure\">
\t\t\t\t\t\t\t\t\t<img src=\"/images/plantillas/Plantilla1.svg\" alt=\"Plantilla 1\" class=\"form-imagecheck-image\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label class=\"form-imagecheck mb-2\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"form-imagecheck-radio\" value=\"2\" class=\"form-imagecheck-input\">
\t\t\t\t\t\t\t\t<span class=\"form-imagecheck-figure\">
\t\t\t\t\t\t\t\t\t<img src=\"/images/plantillas/Plantilla2.svg\" alt=\"Plantilla 2\" class=\"form-imagecheck-image\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label class=\"form-imagecheck mb-2\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"form-imagecheck-radio\" value=\"3\" class=\"form-imagecheck-input\">
\t\t\t\t\t\t\t\t<span class=\"form-imagecheck-figure\">
\t\t\t\t\t\t\t\t\t<img src=\"/images/plantillas/Plantilla3.svg\" alt=\"Plantilla 3\" class=\"form-imagecheck-image\">
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"nombre\" class=\"form-label\">Nombre</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"nombre\" placeholder=\"Nombre del seminario\" class=\"form-control\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"description\" class=\"form-label\">Descripción del seminario</label>
\t\t\t\t\t\t\t<textarea name=\"description\" placeholder=\"Ingresa una pequeña descripción.\" class=\"form-control\" maxlength=\"255\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"\" class=\"form-label\">Fecha de Inicio</label>
\t\t\t\t\t\t\t<div class=\"row g-2\">
\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t<select name=\"user[month]\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t<option disabled selected>Mes</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Enero</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Febrero</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Marzo</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\">Abril</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\">Mayo</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\">Junio</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"7\">Julio</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"8\">Agosto</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"9\">Septiembre</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"10\">Octubre</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"11\">Noviembre</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"12\">Diciembre</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t<select name=\"user[dia]\" id=\"\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled=\"disabled\" selected=\"selected\">Día</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"12\">12</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"13\">13</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"14\">14</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"15\">15</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"16\">16</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"17\">17</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"18\">18</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"19\">19</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"20\">20</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"21\">21</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"22\">22</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"23\">23</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"24\">24</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"25\">25</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"26\">26</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"27\">27</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"28\">28</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"29\">29</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"30\">30</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"31\">31</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t<select name=\"user[dia]\" id=\"\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled=\"disabled\" selected=\"selected\">Año</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">2024</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2025</option>
\t\t\t\t\t\t\t\t\t</select>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./routes/partials/administrador.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "./routes/partials/administrador.html", "C:\\wamp64\\www\\CICS-IPN\\public\\templates\\routes\\partials\\administrador.html");
    }
}
