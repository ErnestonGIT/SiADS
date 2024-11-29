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

/* ./routes/partials/pestanias.html */
class __TwigTemplate_84c92bd00e5ed3071eb2497027709b10 extends Template
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
        yield "<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, viewport-fit=cover\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"/>
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    
  </head>
  <body >
    <!--<script src=\"./dist/js/demo-theme.min.js?1692870487\"></script>-->
    <div class=\"page\">
      <!-- Navbar -->
      <header class=\"navbar navbar-expand-md d-print-none\" >
        <div class=\"container-xl\">
          <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <h1 class=\"navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3\">
            <a href=\".\">
              <img src=\"/images/logo.webp\" width=\"110\" height=\"100\" alt=\"Tabler\">
            </a>
          </h1>
        </div>
      </header>
      <header class=\"navbar-expand-md\">
        <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
          <div class=\"navbar\">
            <div class=\"container-xl\">
              <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"./\" >
                    <span class=\"nav-link-icon d-md-none d-lg-inline-block\"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" /><path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" /><path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" /></svg>
                    </span>
                    <span class=\"nav-link-title\">
                      Inicio
                    </span>
                  </a>
                </li>
\t\t\t\t
\t\t\t\t<li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"./\" >
                    
                    <span class=\"nav-link-title\">
                      Optometria
                    </span>
                  </a>
                </li>
\t\t\t\t<li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"./\" >
                    
                    <span class=\"nav-link-title\">
                      Odontologia
                    </span>
                  </a>
                </li>
\t\t\t\t<li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"./\" >
                    
                    <span class=\"nav-link-title\">
                      Psicologia
                    </span>
                  </a>
                </li>
\t\t\t\t<li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"templates/routes/login.php\" >
                    <span class=\"nav-link-icon d-md-none d-lg-inline-block\"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg  xmlns=\"http://www.w3.org/2000/svg\"  width=\"24\"  height=\"24\"  viewBox=\"0 0 24 24\"  fill=\"none\"  stroke=\"currentColor\"  stroke-width=\"2\"  stroke-linecap=\"round\"  stroke-linejoin=\"round\"  class=\"icon icon-tabler icons-tabler-outline icon-tabler-transfer-in\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M4 18v3h16v-14l-8 -4l-8 4v3\" /><path d=\"M4 14h9\" /><path d=\"M10 11l3 3l-3 3\" /></svg>
                    </span>
                    <span class=\"nav-link-title\">
                      Iniciar Sesion
                    </span>
                  </a>
                </li>
                
                </ul>
              
            </div>
          </div>
        </div>
      </header>
      <div class=\"page-wrapper\">
\t  
        <!-- Page header -->
        <div class=\"page-header d-print-none\">
          
        </div>
\t\t
        <!-- Page body -->
        <div class=\"page-body\">
\t\t
        </div>
\t\t
        <footer class=\"footer footer-transparent d-print-none\">
          <div class=\"container-xl\">
            <div class=\"row text-center align-items-center flex-row-reverse\">
              <div class=\"col-lg-auto ms-lg-auto\">
                <ul class=\"list-inline list-inline-dots mb-0\">
                  <li class=\"list-inline-item\"><a href=\"https://tabler.io/docs\" target=\"_blank\" class=\"link-secondary\" rel=\"noopener\">Documentation</a></li>
                  <li class=\"list-inline-item\"><a href=\"./license.html\" class=\"link-secondary\">License</a></li>
                  <li class=\"list-inline-item\"><a href=\"https://github.com/tabler/tabler\" target=\"_blank\" class=\"link-secondary\" rel=\"noopener\">Source code</a></li>
                  <li class=\"list-inline-item\">
                    <a href=\"https://github.com/sponsors/codecalm\" target=\"_blank\" class=\"link-secondary\" rel=\"noopener\">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                      <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-pink icon-filled icon-inline\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572\" /></svg>
                      Sponsor
                    </a>
                  </li>
                </ul>
              </div>
              <div class=\"col-12 col-lg-auto mt-3 mt-lg-0\">
                <ul class=\"list-inline list-inline-dots mb-0\">
                  <li class=\"list-inline-item\">
                    Copyright &copy; 2023
                    <a href=\".\" class=\"link-secondary\">Tabler</a>.
                    All rights reserved.
                  </li>
                  <li class=\"list-inline-item\">
                    <a href=\"./changelog.html\" class=\"link-secondary\" rel=\"noopener\">
                      v1.0.0-beta20
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    
  </body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "./routes/partials/pestanias.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "./routes/partials/pestanias.html", "C:\\xampp\\htdocs\\CICS-IPN\\public\\templates\\routes\\partials\\pestanias.html");
    }
}
