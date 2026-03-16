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

/* themes/custom/cpg_theme/templates/layout/page--front.html.twig */
class __TwigTemplate_b1e286b366b5c8715319ee6878c8cfd4 extends Template
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
        yield "<div class=\"cpg-layout cpg-front-page\">

  ";
        // line 10
        yield "  <header class=\"cpg-layout__header\" role=\"banner\">
    <div class=\"cpg-container header-inner\">
      
      ";
        // line 14
        yield "      <button class=\"mobile-menu-toggle\" aria-label=\"Toggle mobile menu\" aria-expanded=\"false\">
        <span class=\"hamburger-box\">
          <span class=\"hamburger-inner\"></span>
        </span>
      </button>

      ";
        // line 21
        yield "      <div class=\"header-branding\">
        <a href=\"/\" class=\"site-branding-link\">
          ";
        // line 23
        if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "            <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"CPG Matters\" class=\"site-logo-img\" style=\"max-height: 40px; width: auto; display: block; margin-bottom: 4px;\" />
          ";
        } else {
            // line 26
            yield "            <h1 class=\"site-title\">CPG Matters</h1>
          ";
        }
        // line 28
        yield "          <div class=\"site-slogan\">A brand marketing magazine for the 21st century</div>
        </a>
      </div>

      ";
        // line 33
        yield "      <div class=\"header-nav\">
        ";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 34), "html", null, true);
        yield "
      </div>

      ";
        // line 38
        yield "      <div class=\"header-actions\">
        <a href=\"/register-step1\" class=\"cpg-subscribe-btn\">Subscribe</a>
        <form action=\"/search/node\" method=\"get\" class=\"search-form\">
          <input type=\"search\" name=\"keys\" placeholder=\"Search articles...\" class=\"form-search\" required>
          <button type=\"submit\" class=\"form-submit\">Search</button>
        </form>
      </div>

    </div>
  </header>

  ";
        // line 50
        yield "  <div class=\"mobile-menu-overlay\"></div>
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
        // line 103
        yield "  <div class=\"cpg-top-banner cpg-container\" style=\"padding: 2rem 0; text-align: center;\">
    ";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 104), "html", null, true);
        yield "
  </div>

  ";
        // line 108
        yield "  <main role=\"main\" class=\"cpg-layout__main cpg-container\">
    ";
        // line 109
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 109), "html", null, true);
        yield "

    ";
        // line 111
        $context["layout_class"] = "cpg-columns";
        // line 112
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 112) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 112))) {
            // line 113
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-both-sidebars");
            // line 114
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-sidebar-first");
            // line 116
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 117
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-sidebar-second");
            // line 118
            yield "    ";
        } else {
            // line 119
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " no-sidebars");
            // line 120
            yield "    ";
        }
        // line 121
        yield "
    <div class=\"";
        // line 122
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["layout_class"] ?? null), "html", null, true);
        yield "\">
      
      ";
        // line 125
        yield "      <aside class=\"cpg-sidebar cpg-sidebar--first\" role=\"complementary\">
        ";
        // line 126
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 126), "html", null, true);
        yield "
      </aside>

      ";
        // line 130
        yield "      <div class=\"cpg-content-main\">
        ";
        // line 131
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 131), "html", null, true);
        yield "
      </div>

      ";
        // line 135
        yield "      <aside class=\"cpg-sidebar cpg-sidebar--second\" role=\"complementary\">
        ";
        // line 136
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 136), "html", null, true);
        yield "
      </aside>
      
    </div>
  </main>

  ";
        // line 143
        yield "  <footer class=\"cpg-layout__footer\" role=\"contentinfo\">
    <div class=\"cpg-container footer-columns\">
      <div class=\"footer-col\">";
        // line 145
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 145), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 146
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 146), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 147
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 147), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 148
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 148), "html", null, true);
        yield "</div>
    </div>
    <div class=\"footer-bottom\">
      <div class=\"cpg-container\">
        ";
        // line 152
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 152), "html", null, true);
        yield "
      </div>
    </div>
  </footer>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/layout/page--front.html.twig";
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
        return array (  266 => 152,  259 => 148,  255 => 147,  251 => 146,  247 => 145,  243 => 143,  234 => 136,  231 => 135,  225 => 131,  222 => 130,  216 => 126,  213 => 125,  208 => 122,  205 => 121,  202 => 120,  199 => 119,  196 => 118,  193 => 117,  190 => 116,  187 => 115,  184 => 114,  181 => 113,  178 => 112,  176 => 111,  171 => 109,  168 => 108,  162 => 104,  159 => 103,  105 => 50,  92 => 38,  86 => 34,  83 => 33,  77 => 28,  73 => 26,  67 => 24,  65 => 23,  61 => 21,  53 => 14,  48 => 10,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/layout/page--front.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 23, "set" => 111];
        static $filters = ["escape" => 24];
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
