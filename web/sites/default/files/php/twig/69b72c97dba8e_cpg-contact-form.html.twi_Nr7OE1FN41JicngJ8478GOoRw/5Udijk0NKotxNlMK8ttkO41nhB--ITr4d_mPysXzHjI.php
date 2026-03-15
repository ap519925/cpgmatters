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

/* modules/custom/cpg_contact/templates/cpg-contact-form.html.twig */
class __TwigTemplate_82abf9a5d1545cad6e2ae06acb2a00d4 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "
<div class=\"cpg-contact-page\">

  ";
        // line 15
        yield "  <div class=\"cpg-contact-page__form-col\">

    ";
        // line 18
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "intro", [], "any", false, false, true, 18), "html", null, true);
        yield "

    ";
        // line 21
        yield "    <form";
        yield (((($tmp = (($_v0 = ($context["form"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#attributes"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "#attributes", [], "array", false, false, true, 21))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute((($_v1 = ($context["form"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#attributes"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "#attributes", [], "array", false, false, true, 21))), "html", null, true)) : (""));
        yield ">

      ";
        // line 24
        yield "      <div class=\"cpg-contact__name-row\">
        <div class=\"cpg-contact__field cpg-contact__field--half\">
          ";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name_row", [], "any", false, false, true, 26), "first_name", [], "any", false, false, true, 26), "html", null, true);
        yield "
        </div>
        <div class=\"cpg-contact__field cpg-contact__field--half\">
          ";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name_row", [], "any", false, false, true, 29), "last_name", [], "any", false, false, true, 29), "html", null, true);
        yield "
        </div>
      </div>

      ";
        // line 34
        yield "      <div class=\"cpg-contact__field\">
        ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, true, 35), "html", null, true);
        yield "
      </div>

      ";
        // line 39
        yield "      <div class=\"cpg-contact__field\">
        ";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "company", [], "any", false, false, true, 40), "html", null, true);
        yield "
      </div>

      ";
        // line 44
        yield "      <div class=\"cpg-contact__field\">
        ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "subject", [], "any", false, false, true, 45), "html", null, true);
        yield "
      </div>

      ";
        // line 49
        yield "      <div class=\"cpg-contact__field\">
        ";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, true, 50), "html", null, true);
        yield "
      </div>

      ";
        // line 54
        yield "      <div class=\"cpg-contact__checkboxes\">
        ";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "newsletter", [], "any", false, false, true, 55), "html", null, true);
        yield "
        ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "privacy", [], "any", false, false, true, 56), "html", null, true);
        yield "
      </div>

      ";
        // line 60
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "required_note", [], "any", false, false, true, 60), "html", null, true);
        yield "

      ";
        // line 63
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 63), "html", null, true);
        yield "

      ";
        // line 66
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "form_build_id", [], "any", false, false, true, 66), "html", null, true);
        yield "
      ";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "form_token", [], "any", false, false, true, 67), "html", null, true);
        yield "
      ";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "form_id", [], "any", false, false, true, 68), "html", null, true);
        yield "

    </form>
  </div>

  ";
        // line 74
        yield "  <div class=\"cpg-contact-page__sidebar\">

    <h2 class=\"cpg-contact-sidebar__heading\">Contact Information</h2>

    ";
        // line 79
        yield "    <div class=\"cpg-contact-sidebar__block\">
      <div class=\"cpg-contact-sidebar__icon-row\">
        <span class=\"cpg-contact-sidebar__icon\">
          <svg viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" fill=\"white\"><path d=\"M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z\"/></svg>
        </span>
        <h3 class=\"cpg-contact-sidebar__label\">Office Address</h3>
      </div>
      <div class=\"cpg-contact-sidebar__content\">
        CPG Matters<br>
        123 Market Street, Suite 500<br>
        New York, NY 10001<br>
        United States
      </div>
    </div>

    ";
        // line 95
        yield "    <div class=\"cpg-contact-sidebar__block\">
      <div class=\"cpg-contact-sidebar__icon-row\">
        <span class=\"cpg-contact-sidebar__icon\">
          <svg viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" fill=\"white\"><path d=\"M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z\"/></svg>
        </span>
        <h3 class=\"cpg-contact-sidebar__label\">Email</h3>
      </div>
      <div class=\"cpg-contact-sidebar__content\">
        General: <a href=\"mailto:info@cpgmatters.com\">info@cpgmatters.com</a><br>
        Editorial: <a href=\"mailto:editorial@cpgmatters.com\">editorial@cpgmatters.com</a><br>
        Advertising: <a href=\"mailto:advertising@cpgmatters.com\">advertising@cpgmatters.com</a>
      </div>
    </div>

    ";
        // line 110
        yield "    <div class=\"cpg-contact-sidebar__block\">
      <div class=\"cpg-contact-sidebar__icon-row\">
        <span class=\"cpg-contact-sidebar__icon\">
          <svg viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" fill=\"white\"><path d=\"M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z\"/></svg>
        </span>
        <h3 class=\"cpg-contact-sidebar__label\">Phone</h3>
      </div>
      <div class=\"cpg-contact-sidebar__content\">
        Main: <a href=\"tel:2125551234\">(212) 555-1234</a><br>
        Toll-Free: <a href=\"tel:8005551234\">(800) 555-1234</a>
      </div>
    </div>

    ";
        // line 124
        yield "    <div class=\"cpg-contact-sidebar__block\">
      <div class=\"cpg-contact-sidebar__icon-row\">
        <span class=\"cpg-contact-sidebar__icon\">
          <svg viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" fill=\"white\"><path d=\"M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z\"/></svg>
        </span>
        <h3 class=\"cpg-contact-sidebar__label\">Office Hours</h3>
      </div>
      <div class=\"cpg-contact-sidebar__content cpg-contact-sidebar__hours\">
        <div class=\"cpg-hours-row\">
          <span class=\"cpg-hours-day\">Monday - Friday</span>
          <span class=\"cpg-hours-time\">9:00 AM - 6:00 PM EST</span>
        </div>
        <div class=\"cpg-hours-row\">
          <span class=\"cpg-hours-day\">Saturday</span>
          <span class=\"cpg-hours-time\">10:00 AM - 2:00 PM EST</span>
        </div>
        <div class=\"cpg-hours-row\">
          <span class=\"cpg-hours-day\">Sunday</span>
          <span class=\"cpg-hours-time\">Closed</span>
        </div>
      </div>
    </div>

    ";
        // line 148
        yield "    <div class=\"cpg-contact-sidebar__block\">
      <div class=\"cpg-contact-sidebar__icon-row\">
        <span class=\"cpg-contact-sidebar__icon\">
          <svg viewBox=\"0 0 24 24\" width=\"18\" height=\"18\" fill=\"white\"><path d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z\"/></svg>
        </span>
        <h3 class=\"cpg-contact-sidebar__label\">Follow Us</h3>
      </div>
      <div class=\"cpg-contact-sidebar__social\">
        <a href=\"https://linkedin.com\" target=\"_blank\" rel=\"noopener\" class=\"cpg-social-circle\" title=\"LinkedIn\">
          <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z\"/></svg>
        </a>
        <a href=\"https://twitter.com\" target=\"_blank\" rel=\"noopener\" class=\"cpg-social-circle\" title=\"X (Twitter)\">
          <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z\"/></svg>
        </a>
        <a href=\"https://facebook.com\" target=\"_blank\" rel=\"noopener\" class=\"cpg-social-circle\" title=\"Facebook\">
          <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z\"/></svg>
        </a>
        <a href=\"https://instagram.com\" target=\"_blank\" rel=\"noopener\" class=\"cpg-social-circle\" title=\"Instagram\">
          <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z\"/></svg>
        </a>
      </div>
    </div>

    ";
        // line 172
        yield "    <div class=\"cpg-contact-sidebar__quick-links\">
      <h2 class=\"cpg-contact-sidebar__heading cpg-contact-sidebar__heading--small\">Quick Links</h2>
      <ul>
        <li><span class=\"cpg-arrow\">→</span> <a href=\"/faq\">Frequently Asked Questions</a></li>
        <li><span class=\"cpg-arrow\">→</span> <a href=\"/submit-story\">Submit a Story or Press Release</a></li>
        <li><span class=\"cpg-arrow\">→</span> <a href=\"/advertise\">Advertise With Us</a></li>
        <li><span class=\"cpg-arrow\">→</span> <a href=\"/careers\">Career Opportunities</a></li>
      </ul>
    </div>

  </div>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["form"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/cpg_contact/templates/cpg-contact-form.html.twig";
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
        return array (  264 => 172,  239 => 148,  214 => 124,  199 => 110,  183 => 95,  166 => 79,  160 => 74,  152 => 68,  148 => 67,  143 => 66,  137 => 63,  131 => 60,  125 => 56,  121 => 55,  118 => 54,  112 => 50,  109 => 49,  103 => 45,  100 => 44,  94 => 40,  91 => 39,  85 => 35,  82 => 34,  75 => 29,  69 => 26,  65 => 24,  59 => 21,  53 => 18,  49 => 15,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/cpg_contact/templates/cpg-contact-form.html.twig", "/var/www/html/web/modules/custom/cpg_contact/templates/cpg-contact-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 18];
        static $functions = ["create_attribute" => 21];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['create_attribute'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
