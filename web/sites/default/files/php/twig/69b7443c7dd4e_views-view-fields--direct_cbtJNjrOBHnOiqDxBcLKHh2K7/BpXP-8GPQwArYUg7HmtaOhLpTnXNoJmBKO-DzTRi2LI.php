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

/* themes/custom/cpg_theme/templates/views/views-view-fields--directory.html.twig */
class __TwigTemplate_bed7e947e78a8448c8f6f5feda7fe2da extends Template
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
<div class=\"cpg-directory-card\">
  ";
        // line 23
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", true, true, true, 23)) {
            // line 24
            yield "    <h3 class=\"cpg-directory-card__name\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 24), "content", [], "any", false, false, true, 24), "html", null, true);
            yield "</h3>
  ";
        }
        // line 26
        yield "
  ";
        // line 28
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_website", [], "any", true, true, true, 28)) {
            // line 29
            yield "    <div class=\"cpg-directory-card__website\">
      ";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_website", [], "any", false, false, true, 30), "content", [], "any", false, false, true, 30), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 33
        yield "
  ";
        // line 35
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_contact_name", [], "any", true, true, true, 35)) {
            // line 36
            yield "    <div class=\"cpg-directory-card__contact\">
      <span class=\"cpg-directory-card__label\">";
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact Name"));
            yield "</span>
      <span class=\"cpg-directory-card__value\">";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_contact_name", [], "any", false, false, true, 38), "content", [], "any", false, false, true, 38), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        // line 41
        yield "
  ";
        // line 43
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_expertise", [], "any", true, true, true, 43)) {
            // line 44
            yield "    <div class=\"cpg-directory-card__expertise\">
      <span class=\"cpg-directory-card__label\">";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Expertise"));
            yield "</span>
      <div class=\"cpg-directory-card__tags\">
        ";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_expertise", [], "any", false, false, true, 47), "content", [], "any", false, false, true, 47), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 51
        yield "
  ";
        // line 53
        yield "  <div class=\"cpg-directory-card__actions\">
    ";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "nid", [], "any", true, true, true, 54)) {
            // line 55
            yield "      <a href=\"/node/";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "nid", [], "any", false, false, true, 55), "content", [], "any", false, false, true, 55))), "html", null, true);
            yield "/claim\" class=\"cpg-directory-card__claim-btn\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Claim Profile"));
            yield "</a>
    ";
        } else {
            // line 57
            yield "      <a href=\"#\" class=\"cpg-directory-card__claim-btn\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Claim Profile"));
            yield "</a>
    ";
        }
        // line 59
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
        return "themes/custom/cpg_theme/templates/views/views-view-fields--directory.html.twig";
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
        return array (  134 => 59,  128 => 57,  120 => 55,  118 => 54,  115 => 53,  112 => 51,  105 => 47,  100 => 45,  97 => 44,  94 => 43,  91 => 41,  85 => 38,  81 => 37,  78 => 36,  75 => 35,  72 => 33,  66 => 30,  63 => 29,  60 => 28,  57 => 26,  51 => 24,  48 => 23,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/views/views-view-fields--directory.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/views/views-view-fields--directory.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 23];
        static $filters = ["escape" => 24, "t" => 37, "trim" => 55, "striptags" => 55];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'trim', 'striptags'],
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
