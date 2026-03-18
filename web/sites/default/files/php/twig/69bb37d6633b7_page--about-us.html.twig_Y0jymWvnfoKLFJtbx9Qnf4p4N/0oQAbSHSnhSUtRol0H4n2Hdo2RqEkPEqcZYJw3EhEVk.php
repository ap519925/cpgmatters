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
            yield "        <div class=\"header-branding\">
          <a href=\"/\" class=\"site-branding-link\">
            ";
            // line 20
            if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "              <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
                yield "\" class=\"site-logo-img\" style=\"max-height: 40px; width: auto; display: block; margin-bottom: 4px;\" />
            ";
            } else {
                // line 23
                yield "              <h1 class=\"site-title\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("site_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["site_name"] ?? null), "CPG Matters")) : ("CPG Matters")), "html", null, true);
                yield "</h1>
            ";
            }
            // line 25
            yield "            ";
            if ((($tmp = ($context["site_slogan"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "            <div class=\"site-slogan\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
                yield "</div>
          ";
            }
            // line 28
            yield "          </a>
        </div>

        ";
            // line 32
            yield "        <div class=\"header-nav\">
          ";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 33), "html", null, true);
            yield "
        </div>

        ";
            // line 37
            yield "        <div class=\"header-actions\">
          ";
            // line 39
            yield "          <button class=\"mobile-nav-hamburger\" aria-label=\"Open navigation\" aria-expanded=\"false\">
            <span class=\"mobile-nav-hamburger__bar\"></span>
            <span class=\"mobile-nav-hamburger__bar\"></span>
            <span class=\"mobile-nav-hamburger__bar\"></span>
          </button>
          ";
            // line 44
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_actions", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_actions", [], "any", false, false, true, 44), "html", null, true);
            }
            // line 45
            yield "        </div>

      </div>
    </header>

    ";
            // line 51
            yield "    ";
            // line 52
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_topics", [], "any", false, false, true, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_topics", [], "any", false, false, true, 53), "html", null, true);
                yield "
    ";
            }
            // line 55
            yield "
    ";
            // line 57
            yield "    <div class=\"mobile-nav-overlay\"></div>
    <nav class=\"mobile-nav-drawer\" aria-label=\"Mobile navigation\">
      <div class=\"mobile-nav-drawer__header\">
        <span class=\"mobile-nav-drawer__title\">";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Navigation"));
            yield "</span>
        <button class=\"mobile-nav-drawer__close\" aria-label=\"Close navigation\">&times;</button>
      </div>
      ";
            // line 63
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_nav", [], "any", false, false, true, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_nav", [], "any", false, false, true, 64), "html", null, true);
                yield "
      ";
            }
            // line 66
            yield "    </nav>
  ";
        }
        // line 68
        yield "
  ";
        // line 70
        yield "
  <main role=\"main\" class=\"cpg-layout__main\">
    ";
        // line 72
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 73), "html", null, true);
            yield "
    ";
        }
        // line 75
        yield "
    ";
        // line 77
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 77), "html", null, true);
        yield "
  </main>

  <footer class=\"cpg-layout__footer\" role=\"contentinfo\">
    <div class=\"cpg-container footer-columns\">
      <div class=\"footer-col\">";
        // line 82
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 82), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 83), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 84), "html", null, true);
        yield "</div>
      <div class=\"footer-col\">";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 85), "html", null, true);
        yield "</div>
    </div>

    ";
        // line 88
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "      <div class=\"footer-bottom\">
        <div class=\"cpg-container\">
          ";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 91), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 95
        yield "  </footer>
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
        return array (  215 => 95,  208 => 91,  204 => 89,  202 => 88,  196 => 85,  192 => 84,  188 => 83,  184 => 82,  175 => 77,  172 => 75,  166 => 73,  164 => 72,  160 => 70,  157 => 68,  153 => 66,  147 => 64,  145 => 63,  139 => 60,  134 => 57,  131 => 55,  125 => 53,  122 => 52,  120 => 51,  113 => 45,  109 => 44,  102 => 39,  99 => 37,  93 => 33,  90 => 32,  85 => 28,  79 => 26,  76 => 25,  70 => 23,  62 => 21,  60 => 20,  56 => 18,  51 => 14,  48 => 13,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/layout/page--about-us.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/layout/page--about-us.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 13];
        static $filters = ["escape" => 21, "default" => 23, "t" => 60];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
