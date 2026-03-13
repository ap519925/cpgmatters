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
          <a href=\"/user/register\" class=\"cpg-subscribe-btn\">Subscribe</a>
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
        ";
            // line 54
            if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "          <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
                yield "\" alt=\"CPG Matters\" class=\"site-logo-img\" style=\"max-height: 30px; width: auto; display: block;\" />
        ";
            } else {
                // line 57
                yield "          <div class=\"site-title\">CPG Matters</div>
        ";
            }
            // line 59
            yield "        <button class=\"mobile-menu-close\" aria-label=\"Close mobile menu\">&times;</button>
      </div>
      <div class=\"mobile-flyout__nav\">
        ";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 62), "html", null, true);
            yield "
      </div>
      <div class=\"mobile-flyout__actions\">
        <a href=\"/user/register\" class=\"cpg-subscribe-btn\" style=\"width: 100%; text-align: center; margin-bottom: 1rem;\">Subscribe</a>
        <form action=\"/search/node\" method=\"get\" class=\"search-form\" style=\"width: 100%;\">
          <input type=\"search\" name=\"keys\" placeholder=\"Search...\" class=\"form-search\" style=\"width: 100%;\" required>
        </form>
      </div>
    </div>
  ";
        }
        // line 72
        yield "
  ";
        // line 73
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "    <section class=\"cpg-layout__hero cpg-container\">
      ";
            // line 75
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 75), "html", null, true);
            yield "
    </section>
  ";
        }
        // line 78
        yield "
  ";
        // line 79
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "    <div class=\"cpg-layout__ad cpg-container\">
      ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 81), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 84
        yield "
  <main role=\"main\" class=\"cpg-layout__main cpg-container\">
    ";
        // line 86
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 87), "html", null, true);
            yield "
    ";
        }
        // line 89
        yield "
    ";
        // line 90
        $context["layout_class"] = "cpg-columns";
        // line 91
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 91) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 91))) {
            // line 92
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-both-sidebars");
            // line 93
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-sidebar-first");
            // line 95
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-sidebar-second");
            // line 97
            yield "    ";
        } else {
            // line 98
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " no-sidebars");
            // line 99
            yield "    ";
        }
        // line 100
        yield "
    <div class=\"";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["layout_class"] ?? null), "html", null, true);
        yield "\">
      ";
        // line 102
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "        <aside class=\"cpg-sidebar cpg-sidebar--first\" role=\"complementary\">
          ";
            // line 104
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 104), "html", null, true);
            yield "
        </aside>
      ";
        }
        // line 107
        yield "
      <div class=\"cpg-content-main\">
        ";
        // line 109
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 109), "html", null, true);
        yield "
      </div>

      ";
        // line 112
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "        <aside class=\"cpg-sidebar cpg-sidebar--second\" role=\"complementary\">
          ";
            // line 114
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 114), "html", null, true);
            yield "
        </aside>
      ";
        }
        // line 117
        yield "    </div>
  </main>

  <footer class=\"cpg-layout__footer\" role=\"contentinfo\">
    <div class=\"cpg-container footer-columns\">
      <div class=\"footer-col\">";
        // line 122
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 122), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 123), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 124
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 124), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 125
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 125), "html", null, true);
        yield "</div>
    </div>
    
    ";
        // line 128
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 129
            yield "      <div class=\"footer-bottom\">
        <div class=\"cpg-container\">
          ";
            // line 131
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 131), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 135
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
        return array (  292 => 135,  285 => 131,  281 => 129,  279 => 128,  273 => 125,  269 => 124,  265 => 123,  261 => 122,  254 => 117,  248 => 114,  245 => 113,  243 => 112,  237 => 109,  233 => 107,  227 => 104,  224 => 103,  222 => 102,  218 => 101,  215 => 100,  212 => 99,  209 => 98,  206 => 97,  203 => 96,  200 => 95,  197 => 94,  194 => 93,  191 => 92,  188 => 91,  186 => 90,  183 => 89,  177 => 87,  175 => 86,  171 => 84,  165 => 81,  162 => 80,  160 => 79,  157 => 78,  151 => 75,  148 => 74,  146 => 73,  143 => 72,  130 => 62,  125 => 59,  121 => 57,  115 => 55,  113 => 54,  108 => 51,  95 => 39,  89 => 35,  86 => 34,  80 => 29,  76 => 27,  70 => 25,  68 => 24,  64 => 22,  56 => 15,  51 => 11,  48 => 10,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 10, "set" => 90];
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
