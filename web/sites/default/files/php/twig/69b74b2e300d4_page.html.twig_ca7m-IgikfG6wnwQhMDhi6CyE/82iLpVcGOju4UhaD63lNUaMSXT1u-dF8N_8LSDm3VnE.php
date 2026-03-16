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

/* themes/custom/cpg_theme/templates/layout/page.html.twig */
class __TwigTemplate_28aff2f60e6730ba10c315ac60adaeef extends Template
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
        // line 7
        yield "<div class=\"cpg-layout\">

  ";
        // line 10
        yield "  ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 10) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 10)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 10))) {
            // line 11
            yield "    <header class=\"cpg-layout__header\" role=\"banner\">
      <div class=\"cpg-container header-inner\">
        
        ";
            // line 15
            yield "        <button class=\"mobile-menu-toggle\" aria-label=\"Toggle mobile menu\" aria-expanded=\"false\">
          <span class=\"hamburger-box\">
            <span class=\"hamburger-inner\"></span>
          </span>
        </button>

        ";
            // line 22
            yield "        <div class=\"header-branding\">
          <a href=\"/\" class=\"site-branding-link\">
            ";
            // line 24
            if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "              <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
                yield "\" alt=\"CPG Matters\" class=\"site-logo-img\" style=\"max-height: 40px; width: auto; display: block; margin-bottom: 4px;\" />
            ";
            } else {
                // line 27
                yield "              <h1 class=\"site-title\">CPG Matters</h1>
            ";
            }
            // line 29
            yield "            <div class=\"site-slogan\">A brand marketing magazine for the 21st century</div>
          </a>
        </div>

        ";
            // line 34
            yield "        <div class=\"header-nav\">
          ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 35), "html", null, true);
            yield "
        </div>

        ";
            // line 39
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
            // line 51
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
        // line 103
        yield "
  ";
        // line 104
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "    <section class=\"cpg-layout__hero cpg-container\">
      ";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 106), "html", null, true);
            yield "
    </section>
  ";
        }
        // line 109
        yield "
  ";
        // line 110
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "    <div class=\"cpg-layout__ad cpg-container\">
      ";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 112), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 115
        yield "
  <main role=\"main\" class=\"cpg-layout__main cpg-container\">
    ";
        // line 117
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 118), "html", null, true);
            yield "
    ";
        }
        // line 120
        yield "
    ";
        // line 121
        $context["layout_class"] = "cpg-columns";
        // line 122
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 122) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 122))) {
            // line 123
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-both-sidebars");
            // line 124
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-sidebar-first");
            // line 126
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-sidebar-second");
            // line 128
            yield "    ";
        } else {
            // line 129
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " no-sidebars");
            // line 130
            yield "    ";
        }
        // line 131
        yield "
    <div class=\"";
        // line 132
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["layout_class"] ?? null), "html", null, true);
        yield "\">
      ";
        // line 133
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "        <aside class=\"cpg-sidebar cpg-sidebar--first\" role=\"complementary\">
          ";
            // line 135
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 135), "html", null, true);
            yield "
        </aside>
      ";
        }
        // line 138
        yield "
      <div class=\"cpg-content-main\">
        ";
        // line 140
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 140), "html", null, true);
        yield "
      </div>

      ";
        // line 143
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield "        <aside class=\"cpg-sidebar cpg-sidebar--second\" role=\"complementary\">
          ";
            // line 145
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 145), "html", null, true);
            yield "
        </aside>
      ";
        }
        // line 148
        yield "    </div>
  </main>

  <footer class=\"cpg-layout__footer\" role=\"contentinfo\">
    <div class=\"cpg-container footer-columns\">
      <div class=\"footer-col\">";
        // line 153
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 153), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 154
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 154), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 155
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 155), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 156
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 156), "html", null, true);
        yield "</div>
    </div>
    
    ";
        // line 159
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 160
            yield "      <div class=\"footer-bottom\">
        <div class=\"cpg-container\">
          ";
            // line 162
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 162), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 166
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
        return "themes/custom/cpg_theme/templates/layout/page.html.twig";
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
        return array (  311 => 166,  304 => 162,  300 => 160,  298 => 159,  292 => 156,  288 => 155,  284 => 154,  280 => 153,  273 => 148,  267 => 145,  264 => 144,  262 => 143,  256 => 140,  252 => 138,  246 => 135,  243 => 134,  241 => 133,  237 => 132,  234 => 131,  231 => 130,  228 => 129,  225 => 128,  222 => 127,  219 => 126,  216 => 125,  213 => 124,  210 => 123,  207 => 122,  205 => 121,  202 => 120,  196 => 118,  194 => 117,  190 => 115,  184 => 112,  181 => 111,  179 => 110,  176 => 109,  170 => 106,  167 => 105,  165 => 104,  162 => 103,  108 => 51,  95 => 39,  89 => 35,  86 => 34,  80 => 29,  76 => 27,  70 => 25,  68 => 24,  64 => 22,  56 => 15,  51 => 11,  48 => 10,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 10, "set" => 121];
        static $filters = ["escape" => 25];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
