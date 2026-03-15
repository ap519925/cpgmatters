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
      ";
        // line 53
        if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "        <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"CPG Matters\" class=\"site-logo-img\" style=\"max-height: 30px; width: auto; display: block;\" />
      ";
        } else {
            // line 56
            yield "        <div class=\"site-title\">CPG Matters</div>
      ";
        }
        // line 58
        yield "      <button class=\"mobile-menu-close\" aria-label=\"Close mobile menu\">&times;</button>
    </div>
    <div class=\"mobile-flyout__nav\">
      ";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 61), "html", null, true);
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
        // line 72
        yield "  <div class=\"cpg-top-banner cpg-container\" style=\"padding: 2rem 0; text-align: center;\">
    ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 73), "html", null, true);
        yield "
  </div>

  ";
        // line 77
        yield "  <main role=\"main\" class=\"cpg-layout__main cpg-container\">
    ";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 78), "html", null, true);
        yield "

    ";
        // line 80
        $context["layout_class"] = "cpg-columns";
        // line 81
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 81) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 81))) {
            // line 82
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-both-sidebars");
            // line 83
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-sidebar-first");
            // line 85
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-sidebar-second");
            // line 87
            yield "    ";
        } else {
            // line 88
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " no-sidebars");
            // line 89
            yield "    ";
        }
        // line 90
        yield "
    <div class=\"";
        // line 91
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["layout_class"] ?? null), "html", null, true);
        yield "\">
      
      ";
        // line 94
        yield "      <aside class=\"cpg-sidebar cpg-sidebar--first\" role=\"complementary\">
        ";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 95), "html", null, true);
        yield "
      </aside>

      ";
        // line 99
        yield "      <div class=\"cpg-content-main\">
        ";
        // line 100
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 100), "html", null, true);
        yield "
      </div>

      ";
        // line 104
        yield "      <aside class=\"cpg-sidebar cpg-sidebar--second\" role=\"complementary\">
        ";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 105), "html", null, true);
        yield "
      </aside>
      
    </div>
  </main>

  ";
        // line 112
        yield "  <footer class=\"cpg-layout__footer\" role=\"contentinfo\">
    <div class=\"cpg-container footer-columns\">
      <div class=\"footer-col\">";
        // line 114
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 114), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 115
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 115), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 116
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 116), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 117
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 117), "html", null, true);
        yield "</div>
    </div>
    <div class=\"footer-bottom\">
      <div class=\"cpg-container\">
        ";
        // line 121
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 121), "html", null, true);
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
        return array (  247 => 121,  240 => 117,  236 => 116,  232 => 115,  228 => 114,  224 => 112,  215 => 105,  212 => 104,  206 => 100,  203 => 99,  197 => 95,  194 => 94,  189 => 91,  186 => 90,  183 => 89,  180 => 88,  177 => 87,  174 => 86,  171 => 85,  168 => 84,  165 => 83,  162 => 82,  159 => 81,  157 => 80,  152 => 78,  149 => 77,  143 => 73,  140 => 72,  127 => 61,  122 => 58,  118 => 56,  112 => 54,  110 => 53,  105 => 50,  92 => 38,  86 => 34,  83 => 33,  77 => 28,  73 => 26,  67 => 24,  65 => 23,  61 => 21,  53 => 14,  48 => 10,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/layout/page--front.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 23, "set" => 80];
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
