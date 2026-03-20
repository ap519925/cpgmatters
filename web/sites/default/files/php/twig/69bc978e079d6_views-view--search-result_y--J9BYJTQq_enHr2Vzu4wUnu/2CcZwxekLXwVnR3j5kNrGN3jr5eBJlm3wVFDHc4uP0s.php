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

/* themes/custom/cpg_theme/templates/views/views-view--search-results.html.twig */
class __TwigTemplate_ce75dc8845576a82263fa105fb0a2a73 extends Template
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
        // line 22
        yield "
<div class=\"cpg-serp\">

  ";
        // line 26
        yield "  <div class=\"cpg-serp__header\">
    ";
        // line 27
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "      <h1 class=\"cpg-serp__title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h1>
    ";
        }
        // line 30
        yield "    ";
        if ((($tmp = ($context["header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "      <div class=\"cpg-serp__result-count\">
        ";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 35
        yield "  </div>

  ";
        // line 38
        yield "  ";
        // line 39
        yield "
  ";
        // line 41
        yield "  ";
        if ((($tmp = ($context["exposed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "    <div class=\"cpg-serp__filters\">
      <div class=\"cpg-serp__filters-header\" role=\"button\" tabindex=\"0\" aria-expanded=\"true\" aria-controls=\"serp-filter-drawer\">
        <h2 class=\"cpg-serp__filters-title\">";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Filters"));
            yield "</h2>
        <a href=\"#\" class=\"cpg-serp__filters-clear\">";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Clear All"));
            yield "</a>
      </div>
      <div class=\"cpg-serp__filters-body\" id=\"serp-filter-drawer\">
        ";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 52
        yield "
  ";
        // line 54
        yield "  <div class=\"cpg-serp__toolbar\">
    <div class=\"cpg-serp__view-toggles\">
      <span class=\"cpg-serp__view-label\">";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("View:"));
        yield "</span>
      <button class=\"cpg-serp__view-btn cpg-serp__view-btn--active\" data-view=\"table\" aria-label=\"";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Table view"));
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Table"));
        yield "</button>
      <button class=\"cpg-serp__view-btn\" data-view=\"grid\" aria-label=\"";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Grid view"));
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Grid"));
        yield "</button>
      <button class=\"cpg-serp__view-btn\" data-view=\"list\" aria-label=\"";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("List view"));
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("List"));
        yield "</button>
    </div>
    ";
        // line 62
        yield "  </div>

  ";
        // line 65
        yield "  ";
        if ((($tmp = ($context["rows"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "    <div class=\"cpg-serp__results cpg-serp__results--table\">
      ";
            // line 68
            yield "      <div class=\"cpg-serp__table-header\">
        <div class=\"cpg-serp__th cpg-serp__th--title\">";
            // line 69
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Title"));
            yield " <span class=\"cpg-sort-icon\">▼</span></div>
        <div class=\"cpg-serp__th cpg-serp__th--category\">";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Category"));
            yield " <span class=\"cpg-sort-icon\">⇅</span></div>
        <div class=\"cpg-serp__th cpg-serp__th--author\">";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Author"));
            yield " <span class=\"cpg-sort-icon\">⇅</span></div>
        <div class=\"cpg-serp__th cpg-serp__th--date\">";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Date"));
            yield " <span class=\"cpg-sort-icon\">⇅</span></div>
      </div>
      ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        } elseif ((($tmp =         // line 76
($context["empty"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "    <div class=\"cpg-serp__empty\">
      ";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 81
        yield "
  ";
        // line 83
        yield "  ";
        if ((($tmp = ($context["pager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "    <div class=\"cpg-serp__pager\">
      ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 88
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "header", "exposed", "rows", "empty", "pager"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/views/views-view--search-results.html.twig";
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
        return array (  196 => 88,  190 => 85,  187 => 84,  184 => 83,  181 => 81,  175 => 78,  172 => 77,  170 => 76,  165 => 74,  160 => 72,  156 => 71,  152 => 70,  148 => 69,  145 => 68,  142 => 66,  139 => 65,  135 => 62,  128 => 59,  122 => 58,  116 => 57,  112 => 56,  108 => 54,  105 => 52,  98 => 48,  92 => 45,  88 => 44,  84 => 42,  81 => 41,  78 => 39,  76 => 38,  72 => 35,  66 => 32,  63 => 31,  60 => 30,  54 => 28,  52 => 27,  49 => 26,  44 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/views/views-view--search-results.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/views/views-view--search-results.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 27];
        static $filters = ["escape" => 28, "t" => 44];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
