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

/* themes/custom/cpg_theme/templates/views/views-view-fields--search-results.html.twig */
class __TwigTemplate_72986b26a8b2a2229148b958d4db6d23 extends Template
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
        // line 20
        yield "
<div class=\"cpg-serp__row-inner\">
  <div class=\"cpg-serp__cell cpg-serp__cell--title\">
    ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", true, true, true, 23)) {
            // line 24
            yield "      <div class=\"cpg-serp__article-title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 24), "content", [], "any", false, false, true, 24), "html", null, true);
            yield "</div>
    ";
        }
        // line 26
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", true, true, true, 26)) {
            // line 27
            yield "      <div class=\"cpg-serp__article-excerpt\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 27), "content", [], "any", false, false, true, 27), "html", null, true);
            yield "</div>
    ";
        }
        // line 29
        yield "  </div>

  <div class=\"cpg-serp__cell cpg-serp__cell--category\">
    ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_tags", [], "any", true, true, true, 32)) {
            // line 33
            yield "      <span class=\"cpg-serp__category-tag\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_tags", [], "any", false, false, true, 33), "content", [], "any", false, false, true, 33), "html", null, true);
            yield "</span>
    ";
        }
        // line 35
        yield "  </div>

  <div class=\"cpg-serp__cell cpg-serp__cell--author\">
    ";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "uid", [], "any", true, true, true, 38)) {
            // line 39
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "uid", [], "any", false, false, true, 39), "content", [], "any", false, false, true, 39), "html", null, true);
            yield "
    ";
        }
        // line 41
        yield "  </div>

  <div class=\"cpg-serp__cell cpg-serp__cell--date\">
    ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "created", [], "any", true, true, true, 44)) {
            // line 45
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "created", [], "any", false, false, true, 45), "content", [], "any", false, false, true, 45), "html", null, true);
            yield "
    ";
        }
        // line 47
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/views/views-view-fields--search-results.html.twig";
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
        return array (  105 => 47,  99 => 45,  97 => 44,  92 => 41,  86 => 39,  84 => 38,  79 => 35,  73 => 33,  71 => 32,  66 => 29,  60 => 27,  57 => 26,  51 => 24,  49 => 23,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/views/views-view-fields--search-results.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/views/views-view-fields--search-results.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 23];
        static $filters = ["escape" => 24];
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
