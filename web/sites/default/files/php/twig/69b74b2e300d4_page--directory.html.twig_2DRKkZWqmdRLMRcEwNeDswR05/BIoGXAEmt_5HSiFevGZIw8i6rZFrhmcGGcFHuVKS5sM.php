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

/* themes/custom/cpg_theme/templates/layout/page--directory.html.twig */
class __TwigTemplate_754330c79c84448baa1ccf2e96c4cb51 extends Template
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
        <h2 class=\"mobile-flyout__title\">Browse by Topic</h2>
        <button class=\"mobile-menu-close\" aria-label=\"Close menu\">&times;</button>
      </div>
      <div class=\"mobile-flyout__nav\">
        <div class=\"topic-grid\">
            <a href=\"/articles?category=sustainability\" class=\"topic-card\">
              <span class=\"topic-icon\">🌱</span>
              <span class=\"topic-name\">Sustainability</span>
              <span class=\"topic-count\">23 white papers</span>
            </a>
            <a href=\"/articles?category=e-commerce\" class=\"topic-card\">
              <span class=\"topic-icon\">🛒</span>
              <span class=\"topic-name\">E-Commerce</span>
              <span class=\"topic-count\">18 white papers</span>
            </a>
            <a href=\"/articles?category=supply-chain\" class=\"topic-card\">
              <span class=\"topic-icon\">🚚</span>
              <span class=\"topic-name\">Supply Chain</span>
              <span class=\"topic-count\">31 white papers</span>
            </a>
            <a href=\"/articles?category=digital-marketing\" class=\"topic-card\">
              <span class=\"topic-icon\">📱</span>
              <span class=\"topic-name\">Digital Marketing</span>
              <span class=\"topic-count\">26 white papers</span>
            </a>
            <a href=\"/articles?category=innovation\" class=\"topic-card\">
              <span class=\"topic-icon\">💡</span>
              <span class=\"topic-name\">Innovation</span>
              <span class=\"topic-count\">19 white papers</span>
            </a>
            <a href=\"/articles?category=market-research\" class=\"topic-card\">
              <span class=\"topic-icon\">📊</span>
              <span class=\"topic-name\">Market Research</span>
              <span class=\"topic-count\">28 white papers</span>
            </a>
            <a href=\"/articles?category=consumer-insights\" class=\"topic-card\">
              <span class=\"topic-icon\">🎯</span>
              <span class=\"topic-name\">Consumer Insights</span>
              <span class=\"topic-count\">22 white papers</span>
            </a>
            <a href=\"/articles?category=ai-technology\" class=\"topic-card\">
              <span class=\"topic-icon\">🤖</span>
              <span class=\"topic-name\">AI & Technology</span>
              <span class=\"topic-count\">15 white papers</span>
            </a>
        </div>
      </div>
    </div>
  ";
        }
        // line 106
        yield "
  ";
        // line 108
        yield "
  <main role=\"main\" class=\"cpg-layout__main\">
    ";
        // line 110
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 111), "html", null, true);
            yield "
    ";
        }
        // line 113
        yield "
    ";
        // line 115
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 115), "html", null, true);
        yield "
  </main>

  <footer class=\"cpg-layout__footer\" role=\"contentinfo\">
    <div class=\"cpg-container footer-columns\">
      <div class=\"footer-col\">";
        // line 120
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 120), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 121
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 121), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 122
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 122), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 123), "html", null, true);
        yield "</div>
    </div>

    ";
        // line 126
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "      <div class=\"footer-bottom\">
        <div class=\"cpg-container\">
          ";
            // line 129
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 129), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 133
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
        return "themes/custom/cpg_theme/templates/layout/page--directory.html.twig";
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
        return array (  220 => 133,  213 => 129,  209 => 127,  207 => 126,  201 => 123,  197 => 122,  193 => 121,  189 => 120,  180 => 115,  177 => 113,  171 => 111,  169 => 110,  165 => 108,  162 => 106,  108 => 54,  95 => 42,  89 => 38,  86 => 37,  80 => 32,  76 => 30,  70 => 28,  68 => 27,  64 => 25,  56 => 18,  51 => 14,  48 => 13,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/layout/page--directory.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/layout/page--directory.html.twig");
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
