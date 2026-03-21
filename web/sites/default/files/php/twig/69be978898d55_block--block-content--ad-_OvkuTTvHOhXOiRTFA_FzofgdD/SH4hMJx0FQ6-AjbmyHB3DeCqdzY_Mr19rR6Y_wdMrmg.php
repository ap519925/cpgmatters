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

/* themes/custom/cpg_theme/templates/block/block--block-content--ad-banner.html.twig */
class __TwigTemplate_187cf8634a91dcbda3e00d5f27667fcc extends Template
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
        // line 8
        $context["size"] = ((array_key_exists("ad_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["ad_size"] ?? null), "300x250")) : ("300x250"));
        // line 9
        $context["dims"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["size"] ?? null), "x");
        // line 10
        $context["w"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["dims"] ?? null), 0, [], "array", true, true, true, 10)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["dims"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["dims"] ?? null), 0, [], "array", false, false, true, 10)), "300")) : ("300"));
        // line 11
        $context["h"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["dims"] ?? null), 1, [], "array", true, true, true, 11)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["dims"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["dims"] ?? null), 1, [], "array", false, false, true, 11)), "250")) : ("250"));
        // line 12
        yield "
<div";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["cpg-ad-banner"], "method", false, false, true, 13), "html", null, true);
        yield " style=\"
  max-width: ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["w"] ?? null), "html", null, true);
        yield "px;
  aspect-ratio: ";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["w"] ?? null), "html", null, true);
        yield " / ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["h"] ?? null), "html", null, true);
        yield ";
  width: 100%;
\">
  ";
        // line 18
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_ad_image", [], "any", false, false, true, 18)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_ad_image", [], "any", false, false, true, 19), "html", null, true);
            yield "
  ";
        } else {
            // line 21
            yield "    <div>
      <span style=\"display:block; font-weight:700; color:#64748B; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.06em;\">
        SAMPLE BANNER
      </span>
      <span style=\"display:block; color:#94A3B8; font-size:0.65rem; margin-top:2px; text-transform:uppercase;\">
        ";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["size"] ?? null), "html", null, true);
            yield "
      </span>
    </div>
  ";
        }
        // line 30
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["ad_size", "attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/block/block--block-content--ad-banner.html.twig";
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
        return array (  93 => 30,  86 => 26,  79 => 21,  73 => 19,  71 => 18,  63 => 15,  59 => 14,  55 => 13,  52 => 12,  50 => 11,  48 => 10,  46 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/block/block--block-content--ad-banner.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/block/block--block-content--ad-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "if" => 18];
        static $filters = ["default" => 8, "split" => 9, "escape" => 13, "trim" => 18, "render" => 18];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'split', 'escape', 'trim', 'render'],
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
