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

/* themes/custom/cpg_theme/templates/layout/page--about-us.html.twig */
class __TwigTemplate_9b6ef22453911e9ab6efd18e2f60092e extends Template
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
        // line 10
        yield "<div class=\"cpg-layout\">

  ";
        // line 13
        yield "  ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 13) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 13)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 13))) {
            // line 14
            yield "    <header class=\"cpg-layout__header\" role=\"banner\">
      <div class=\"cpg-container header-inner\">

        ";
            // line 18
            yield "        <button class=\"mobile-menu-toggle\" aria-label=\"Toggle mobile menu\" aria-expanded=\"false\">
          <span class=\"hamburger-box\">
            <span class=\"hamburger-inner\"></span>
          </span>
        </button>

        ";
            // line 25
            yield "        <div class=\"header-branding\">
          <a href=\"/\" class=\"site-branding-link\">
            ";
            // line 27
            if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "              <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
                yield "\" alt=\"CPG Matters\" class=\"site-logo-img\" style=\"max-height: 40px; width: auto; display: block; margin-bottom: 4px;\" />
            ";
            } else {
                // line 30
                yield "              <h1 class=\"site-title\">CPG Matters</h1>
            ";
            }
            // line 32
            yield "            <div class=\"site-slogan\">A brand marketing magazine for the 21st century</div>
          </a>
        </div>

        ";
            // line 37
            yield "        <div class=\"header-nav\">
          ";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 38), "html", null, true);
            yield "
        </div>

        ";
            // line 42
            yield "        <div class=\"header-actions\">
          <a href=\"/register-step1\" class=\"cpg-subscribe-btn\">Subscribe</a>
          <form action=\"/search/node\" method=\"get\" class=\"search-form\">
            <input type=\"search\" name=\"keys\" placeholder=\"Search articles...\" class=\"form-search\" required>
            <button type=\"submit\" class=\"form-submit\">Search</button>
          </form>
        </div>

      </div>
    </header>

    ";
            // line 54
            yield "    <div class=\"mobile-menu-overlay\"></div>
    <div class=\"mobile-flyout\">
      <div class=\"mobile-flyout__header\">
        ";
            // line 57
            if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "          <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
                yield "\" alt=\"CPG Matters\" class=\"site-logo-img\" style=\"max-height: 30px; width: auto; display: block;\" />
        ";
            } else {
                // line 60
                yield "          <div class=\"site-title\">CPG Matters</div>
        ";
            }
            // line 62
            yield "        <button class=\"mobile-menu-close\" aria-label=\"Close mobile menu\">&times;</button>
      </div>
      <div class=\"mobile-flyout__nav\">
        ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 65), "html", null, true);
            yield "
      </div>
      <div class=\"mobile-flyout__actions\">
        <a href=\"/register-step1\" class=\"cpg-subscribe-btn\" style=\"width: 100%; text-align: center; margin-bottom: 1rem;\">Subscribe</a>
        <form action=\"/search/node\" method=\"get\" class=\"search-form\" style=\"width: 100%;\">
          <input type=\"search\" name=\"keys\" placeholder=\"Search...\" class=\"form-search\" style=\"width: 100%;\" required>
        </form>
      </div>
    </div>
  ";
        }
        // line 75
        yield "
  ";
        // line 77
        yield "
  <main role=\"main\" class=\"cpg-layout__main\">
    ";
        // line 79
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 80), "html", null, true);
            yield "
    ";
        }
        // line 82
        yield "
    ";
        // line 84
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 84), "html", null, true);
        yield "
  </main>

  <footer class=\"cpg-layout__footer\" role=\"contentinfo\">
    <div class=\"cpg-container footer-columns\">
      <div class=\"footer-col\">";
        // line 89
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 89), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 90), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 91), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 92
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 92), "html", null, true);
        yield "</div>
    </div>

    ";
        // line 95
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "      <div class=\"footer-bottom\">
        <div class=\"cpg-container\">
          ";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 98), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 102
        yield "  </footer>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "site_logo"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/layout/page--about-us.html.twig";
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
        return array (  201 => 102,  194 => 98,  190 => 96,  188 => 95,  182 => 92,  178 => 91,  174 => 90,  170 => 89,  161 => 84,  158 => 82,  152 => 80,  150 => 79,  146 => 77,  143 => 75,  130 => 65,  125 => 62,  121 => 60,  115 => 58,  113 => 57,  108 => 54,  95 => 42,  89 => 38,  86 => 37,  80 => 32,  76 => 30,  70 => 28,  68 => 27,  64 => 25,  56 => 18,  51 => 14,  48 => 13,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/layout/page--about-us.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/layout/page--about-us.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 13];
        static $filters = ["escape" => 28];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
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
