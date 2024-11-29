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

/* ./routes/partials/sidebar.html */
class __TwigTemplate_d569c4dc8337dc5086185dfd46aa5283 extends Template
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
        yield "<aside class=\"navbar navbar-vertical navbar-expand-lg\" style=\"background-color:#6b1d47;\" data-bs-theme=\"dark\">
\t<div class=\"container-fluid\">
\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebar-menu\" aria-controls=\"sidebar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"navbar-brand navbar-brand-autodark\">
\t\t\t<a href=\".\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"110\" height=\"32\" viewbox=\"0 0 232 68\" class=\"navbar-brand-image\">
\t\t\t\t\t<path d=\"M64.6 16.2C63 9.9 58.1 5 51.8 3.4 40 1.5 28 1.5 16.2 3.4 9.9 5 5 9.9 3.4 16.2 1.5 28 1.5 40 3.4 51.8 5 58.1 9.9 63 16.2 64.6c11.8 1.9 23.8 1.9 35.6 0C58.1 63 63 58.1 64.6 51.8c1.9-11.8 1.9-23.8 0-35.6zM33.3 36.3c-2.8 4.4-6.6 8.2-11.1 11-1.5.9-3.3.9-4.8.1s-2.4-2.3-2.5-4c0-1.7.9-3.3 2.4-4.1 2.3-1.4 4.4-3.2 6.1-5.3-1.8-2.1-3.8-3.8-6.1-5.3-2.3-1.3-3-4.2-1.7-6.4s4.3-2.9 6.5-1.6c4.5 2.8 8.2 6.5 11.1 10.9 1 1.4 1 3.3.1 4.7zM49.2 46H37.8c-2.1 0-3.8-1-3.8-3s1.7-3 3.8-3h11.4c2.1 0 3.8 1 3.8 3s-1.7 3-3.8 3z\" fill=\"#066fd1\" style=\"fill: var(--tblr-primary, #066fd1)\"></path>
\t\t\t\t\t<path d=\"M105.8 46.1c.4 0 .9.2 1.2.6s.6 1 .6 1.7c0 .9-.5 1.6-1.4 2.2s-2 .9-3.2.9c-2 0-3.7-.4-5-1.3s-2-2.6-2-5.4V31.6h-2.2c-.8 0-1.4-.3-1.9-.8s-.9-1.1-.9-1.9c0-.7.3-1.4.8-1.8s1.2-.7 1.9-.7h2.2v-3.1c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v3.1h3.4c.8 0 1.4.3 1.9.8s.8 1.2.8 1.9-.3 1.4-.8 1.8-1.2.7-1.9.7h-3.4v13c0 .7.2 1.2.5 1.5s.8.5 1.4.5c.3 0 .6-.1 1.1-.2.5-.2.8-.3 1.2-.3zm28-20.7c.8 0 1.5.3 2.1.8.5.5.8 1.2.8 2.1v20.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2-.8-.8-1.2-.8-2.1c-.8.9-1.9 1.7-3.2 2.4-1.3.7-2.8 1-4.3 1-2.2 0-4.2-.6-6-1.7-1.8-1.1-3.2-2.7-4.2-4.7s-1.6-4.3-1.6-6.9c0-2.6.5-4.9 1.5-6.9s2.4-3.6 4.2-4.8c1.8-1.1 3.7-1.7 5.9-1.7 1.5 0 3 .3 4.3.8 1.3.6 2.5 1.3 3.4 2.1 0-.8.3-1.5.8-2.1.5-.5 1.2-.7 2-.7zm-9.7 21.3c2.1 0 3.8-.8 5.1-2.3s2-3.4 2-5.7-.7-4.2-2-5.8c-1.3-1.5-3-2.3-5.1-2.3-2 0-3.7.8-5 2.3-1.3 1.5-2 3.5-2 5.8s.6 4.2 1.9 5.7 3 2.3 5.1 2.3zm32.1-21.3c2.2 0 4.2.6 6 1.7 1.8 1.1 3.2 2.7 4.2 4.7s1.6 4.3 1.6 6.9-.5 4.9-1.5 6.9-2.4 3.6-4.2 4.8c-1.8 1.1-3.7 1.7-5.9 1.7-1.5 0-3-.3-4.3-.9s-2.5-1.4-3.4-2.3v.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.5-.8-1.2-.8-2.1V18.9c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v10c.8-1 1.8-1.8 3.2-2.5 1.3-.7 2.8-1 4.3-1zm-.7 21.3c2 0 3.7-.8 5-2.3s2-3.5 2-5.8-.6-4.2-1.9-5.7-3-2.3-5.1-2.3-3.8.8-5.1 2.3-2 3.4-2 5.7.7 4.2 2 5.8c1.3 1.6 3 2.3 5.1 2.3zm23.6 1.9c0 .8-.3 1.5-.8 2.1s-1.3.8-2.1.8-1.5-.3-2-.8-.8-1.3-.8-2.1V18.9c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v29.7zm29.3-10.5c0 .8-.3 1.4-.9 1.9-.6.5-1.2.7-2 .7h-15.8c.4 1.9 1.3 3.4 2.6 4.4 1.4 1.1 2.9 1.6 4.7 1.6 1.3 0 2.3-.1 3.1-.4.7-.2 1.3-.5 1.8-.8.4-.3.7-.5.9-.6.6-.3 1.1-.4 1.6-.4.7 0 1.2.2 1.7.7s.7 1 .7 1.7c0 .9-.4 1.6-1.3 2.4-.9.7-2.1 1.4-3.6 1.9s-3 .8-4.6.8c-2.7 0-5-.6-7-1.7s-3.5-2.7-4.6-4.6-1.6-4.2-1.6-6.6c0-2.8.6-5.2 1.7-7.2s2.7-3.7 4.6-4.8 3.9-1.7 6-1.7 4.1.6 6 1.7 3.4 2.7 4.5 4.7c.9 1.9 1.5 4.1 1.5 6.3zm-12.2-7.5c-3.7 0-5.9 1.7-6.6 5.2h12.6v-.3c-.1-1.3-.8-2.5-2-3.5s-2.5-1.4-4-1.4zm30.3-5.2c1 0 1.8.3 2.4.8.7.5 1 1.2 1 1.9 0 1-.3 1.7-.8 2.2-.5.5-1.1.8-1.8.7-.5 0-1-.1-1.6-.3-.2-.1-.4-.1-.6-.2-.4-.1-.7-.1-1.1-.1-.8 0-1.6.3-2.4.8s-1.4 1.3-1.9 2.3-.7 2.3-.7 3.7v11.4c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.6-.8-1.3-.8-2.1V28.8c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v.6c.7-1.3 1.8-2.3 3.2-3 1.3-.7 2.8-1 4.3-1z\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" fill=\"#4a4a4a\"></path>
\t\t\t\t</svg>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"navbar-nav flex-row d-lg-none\">
\t\t\t<div class=\"nav-item d-none d-lg-flex me-3\">
\t\t\t\t<div class=\"btn-list\">
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"https://github.com/tabler/tabler\" class=\"btn\" target=\"_blank\" rel=\"noreferrer\">
\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t<path d=\"M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tSource code
\t\t\t\t\t</a>
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"https://github.com/sponsors/codecalm\" class=\"btn\" target=\"_blank\" rel=\"noreferrer\">
\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/heart -->
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon text-pink\">
\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t<path d=\"M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tSponsor
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"d-none d-lg-flex\">
\t\t\t\t<a
\t\t\t\t\thref=\"?theme=dark\" class=\"nav-link px-0 hide-theme-dark\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" aria-label=\"Enable dark mode\" data-bs-original-title=\"Enable dark mode\">
\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/moon -->
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t<path d=\"M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<a
\t\t\t\t\thref=\"?theme=light\" class=\"nav-link px-0 hide-theme-light\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" aria-label=\"Enable light mode\" data-bs-original-title=\"Enable light mode\">
\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/sun -->
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t<path d=\"M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\"></path>
\t\t\t\t\t\t<path d=\"M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7\"></path>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t\t<div class=\"nav-item dropdown d-none d-md-flex me-3\">
\t\t\t\t\t<a
\t\t\t\t\t\thref=\"#\" class=\"nav-link px-0\" data-bs-toggle=\"dropdown\" tabindex=\"-1\" aria-label=\"Show notifications\">
\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/bell -->
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t<path d=\"M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6\"></path>
\t\t\t\t\t\t\t<path d=\"M9 17v1a3 3 0 0 0 6 0v-1\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"badge bg-red\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">Last updates</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-group list-group-flush list-group-hoverable\">
\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-dot status-dot-animated bg-red d-block\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body d-block\">Example 1</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block text-secondary text-truncate mt-n1\">
\t\t\t\t\t\t\t\t\t\t\t\tChange deprecated html tags to text decoration classes (#29604)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\" class=\"list-group-item-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/star -->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-dot d-block\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body d-block\">Example 2</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block text-secondary text-truncate mt-n1\">
\t\t\t\t\t\t\t\t\t\t\t\tjustify-content:between ⇒ justify-content:space-between (#29734)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\" class=\"list-group-item-actions show\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/star -->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon text-yellow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-dot d-block\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body d-block\">Example 3</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block text-secondary text-truncate mt-n1\">
\t\t\t\t\t\t\t\t\t\t\t\tUpdate change-version.js (#29736)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\" class=\"list-group-item-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/star -->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-dot status-dot-animated bg-green d-block\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-truncate\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body d-block\">Example 4</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-block text-secondary text-truncate mt-n1\">
\t\t\t\t\t\t\t\t\t\t\t\tRegenerate package-lock.json (#29730)
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\thref=\"#\" class=\"list-group-item-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/star -->
\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t<a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-0\" data-bs-toggle=\"dropdown\" aria-label=\"Open user menu\">
\t\t\t\t\t<span class=\"avatar avatar-sm\" style=\"background-image: url(./static/avatars/000m.jpg)\"></span>
\t\t\t\t\t<div class=\"d-none d-xl-block ps-2\">
\t\t\t\t\t\t<div>Paweł Kuna</div>
\t\t\t\t\t\t<div class=\"mt-1 small text-secondary\">UI Designer</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Status</a>
\t\t\t\t\t<a href=\"./profile.html\" class=\"dropdown-item\">Profile</a>
\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Feedback</a>
\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t<a href=\"./settings.html\" class=\"dropdown-item\">Settings</a>
\t\t\t\t\t<a href=\"./sign-in.html\" class=\"dropdown-item\">Logout</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"navbar-collapse collapse\" id=\"sidebar-menu\">
\t\t\t<ul class=\"navbar-nav pt-lg-3\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"./\">
\t\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"nav-link-icon d-md-none d-lg-inline-block\">
\t\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/home -->
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t<path d=\"M5 12l-2 0l9 -9l9 9l-2 0\"></path>
\t\t\t\t\t\t\t\t<path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\"></path>
\t\t\t\t\t\t\t\t<path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"nav-link-title\">
\t\t\t\t\t\t\tInicio
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"false\" role=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"nav-link-icon d-md-none d-lg-inline-block\">
\t\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/package -->
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t<path d=\"M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5\"></path>
\t\t\t\t\t\t\t\t<path d=\"M12 12l8 -4.5\"></path>
\t\t\t\t\t\t\t\t<path d=\"M12 12l0 9\"></path>
\t\t\t\t\t\t\t\t<path d=\"M12 12l-8 -4.5\"></path>
\t\t\t\t\t\t\t\t<path d=\"M16 5.25l-8 4.5\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"nav-link-title\">
\t\t\t\t\t\t\tSeminarios
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t<div class=\"dropdown-menu-columns\">
\t\t\t\t\t\t\t<div class=\"dropdown-menu-column\">
\t\t\t\t\t\t\t\t<div class=\"dropend\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#sidebar-authentication\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"false\" role=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\tAdministración
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"./sign-in.html\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tCreación
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"./sign-in-link.html\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tCierre
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"./sign-in-illustration.html\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tInscritos
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"./form-elements.html\">
\t\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"nav-link-icon d-md-none d-lg-inline-block\">
\t\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t<path d=\"M9 11l3 3l8 -8\"></path>
\t\t\t\t\t\t\t\t<path d=\"M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"nav-link-title\">
\t\t\t\t\t\t\tLogs
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#navbar-extra\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"false\" role=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t<span
\t\t\t\t\t\t\tclass=\"nav-link-icon d-md-none d-lg-inline-block\">
\t\t\t\t\t\t\t<!-- Download SVG icon from http://tabler-icons.io/i/star -->
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"icon\">
\t\t\t\t\t\t\t\t<path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
\t\t\t\t\t\t\t\t<path d=\"M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"nav-link-title\">
\t\t\t\t\t\t\tExtra
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>

\t\t\t\t</li>

\t\t\t</ul>
\t\t</div>
\t</div>
</aside>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "./routes/partials/sidebar.html";
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
        return new Source("", "./routes/partials/sidebar.html", "C:\\xampp\\htdocs\\PlantillaEscolar-ale\\public\\templates\\routes\\partials\\sidebar.html");
    }
}
