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
class __TwigTemplate_adc136e3dfda581d8d911b98bb540f7e extends Template
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
        yield "  ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 10) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 10)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 10))) {
            // line 11
            yield "    <header class=\"cpg-layout__header\" role=\"banner\">
      <div class=\"cpg-container header-inner\">
        
        ";
            // line 15
            yield "        <div class=\"header-branding\">
          <a href=\"/\" class=\"site-branding-link\">
            ";
            // line 17
            if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "              <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
                yield "\" class=\"site-logo-img\" style=\"max-height: 40px; width: auto; display: block; margin-bottom: 4px;\" />
            ";
            } else {
                // line 20
                yield "              <h1 class=\"site-title\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("site_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["site_name"] ?? null), "CPG Matters")) : ("CPG Matters")), "html", null, true);
                yield "</h1>
            ";
            }
            // line 22
            yield "            ";
            if ((($tmp = ($context["site_slogan"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "            <div class=\"site-slogan\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
                yield "</div>
          ";
            }
            // line 25
            yield "          </a>
        </div>

        ";
            // line 29
            yield "        <div class=\"header-nav\">
          ";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 30), "html", null, true);
            yield "
        </div>

        ";
            // line 34
            yield "        <div class=\"header-actions\">
          ";
            // line 36
            yield "          <button class=\"mobile-nav-hamburger\" aria-label=\"Open navigation\" aria-expanded=\"false\">
            <span class=\"mobile-nav-hamburger__bar\"></span>
            <span class=\"mobile-nav-hamburger__bar\"></span>
            <span class=\"mobile-nav-hamburger__bar\"></span>
          </button>
          ";
            // line 41
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_actions", [], "any", false, false, true, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_actions", [], "any", false, false, true, 42), "html", null, true);
                yield "
          ";
            }
            // line 44
            yield "        </div>

      </div>
    </header>

    ";
            // line 50
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_topics", [], "any", false, false, true, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 51
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_topics", [], "any", false, false, true, 51), "html", null, true);
                yield "
    ";
            }
            // line 53
            yield "
    ";
            // line 55
            yield "    <div class=\"mobile-nav-overlay\"></div>
    <nav class=\"mobile-nav-drawer\" aria-label=\"Mobile navigation\">
      <div class=\"mobile-nav-drawer__header\">
        <span class=\"mobile-nav-drawer__title\">";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Navigation"));
            yield "</span>
        <button class=\"mobile-nav-drawer__close\" aria-label=\"Close navigation\">&times;</button>
      </div>

      ";
            // line 62
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_nav", [], "any", false, false, true, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_nav", [], "any", false, false, true, 63), "html", null, true);
                yield "
      ";
            }
            // line 65
            yield "    </nav>
  ";
        }
        // line 67
        yield "
  ";
        // line 69
        yield "  <div class=\"cpg-top-banner cpg-container\" style=\"padding: 2rem 0; text-align: center;\">
    ";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_banner", [], "any", false, false, true, 70), "html", null, true);
        yield "
  </div>

  ";
        // line 74
        yield "  <main role=\"main\" class=\"cpg-layout__main cpg-container\">
    ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 75), "html", null, true);
        yield "

    ";
        // line 77
        $context["layout_class"] = "cpg-columns";
        // line 78
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 78) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 78))) {
            // line 79
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-both-sidebars");
            // line 80
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-sidebar-first");
            // line 82
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " has-sidebar-second");
            // line 84
            yield "    ";
        } else {
            // line 85
            yield "      ";
            $context["layout_class"] = (($context["layout_class"] ?? null) . " no-sidebars");
            // line 86
            yield "    ";
        }
        // line 87
        yield "
    <div class=\"";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["layout_class"] ?? null), "html", null, true);
        yield "\">
      
      ";
        // line 91
        yield "      <aside class=\"cpg-sidebar cpg-sidebar--first\" role=\"complementary\">
        ";
        // line 92
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 92), "html", null, true);
        yield "
      </aside>

      ";
        // line 96
        yield "      <div class=\"cpg-content-main\">
        ";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 97), "html", null, true);
        yield "
      </div>

      ";
        // line 101
        yield "      <aside class=\"cpg-sidebar cpg-sidebar--second\" role=\"complementary\">
        ";
        // line 102
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 102), "html", null, true);
        yield "
      </aside>
      
    </div>
  </main>

  ";
        // line 109
        yield "  <footer class=\"cpg-layout__footer\" role=\"contentinfo\">
    <div class=\"cpg-container footer-columns\">
      <div class=\"footer-col\">";
        // line 111
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 111), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 112
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 112), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 113
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 113), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 114
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 114), "html", null, true);
        yield "</div>
    </div>
    <div class=\"footer-bottom\">
      <div class=\"cpg-container\">
        ";
        // line 118
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 118), "html", null, true);
        yield "
      </div>
    </div>
  </footer>

</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "site_logo", "site_name", "site_slogan"]);        yield from [];
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
        return array (  270 => 118,  263 => 114,  259 => 113,  255 => 112,  251 => 111,  247 => 109,  238 => 102,  235 => 101,  229 => 97,  226 => 96,  220 => 92,  217 => 91,  212 => 88,  209 => 87,  206 => 86,  203 => 85,  200 => 84,  197 => 83,  194 => 82,  191 => 81,  188 => 80,  185 => 79,  182 => 78,  180 => 77,  175 => 75,  172 => 74,  166 => 70,  163 => 69,  160 => 67,  156 => 65,  150 => 63,  148 => 62,  141 => 58,  136 => 55,  133 => 53,  127 => 51,  124 => 50,  117 => 44,  111 => 42,  109 => 41,  102 => 36,  99 => 34,  93 => 30,  90 => 29,  85 => 25,  79 => 23,  76 => 22,  70 => 20,  62 => 18,  60 => 17,  56 => 15,  51 => 11,  48 => 10,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/layout/page--front.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 10, "set" => 77];
        static $filters = ["escape" => 18, "default" => 20, "t" => 58];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'default', 't'],
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
