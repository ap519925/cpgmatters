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

/* themes/custom/cpg_theme/templates/paragraphs/paragraph--cpg-hero.html.twig */
class __TwigTemplate_45a51d7376163028d40436721f4db327 extends Template
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
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 11))), "cpg-paragraph-hero"];
        // line 15
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "attributes", "content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "  <section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 16), "html", null, true);
        yield ">
    ";
        // line 17
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_image", [], "any", false, false, true, 17)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "      <div class=\"cpg-paragraph-hero__bg\">
        ";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_image", [], "any", false, false, true, 19), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 22
        yield "    <div class=\"cpg-paragraph-hero__overlay\"></div>
    <div class=\"cpg-paragraph-hero__content\">
      ";
        // line 24
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_title", [], "any", false, false, true, 24))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "        <h1 class=\"cpg-paragraph-hero__title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_title", [], "any", false, false, true, 25), "html", null, true);
            yield "</h1>
      ";
        }
        // line 27
        yield "      ";
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_subtitle", [], "any", false, false, true, 27)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "        <div class=\"cpg-paragraph-hero__subtitle\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_subtitle", [], "any", false, false, true, 28), "html", null, true);
            yield "</div>
      ";
        }
        // line 30
        yield "      ";
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_link", [], "any", false, false, true, 30)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "        <div class=\"cpg-paragraph-hero__cta\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_link", [], "any", false, false, true, 31), "html", null, true);
            yield "</div>
      ";
        }
        // line 33
        yield "    </div>
  </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/paragraphs/paragraph--cpg-hero.html.twig";
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
        return array (  106 => 33,  100 => 31,  97 => 30,  91 => 28,  88 => 27,  82 => 25,  80 => 24,  76 => 22,  70 => 19,  67 => 18,  65 => 17,  60 => 16,  48 => 15,  46 => 11,  45 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/paragraphs/paragraph--cpg-hero.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/paragraphs/paragraph--cpg-hero.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 9, "block" => 15, "if" => 17];
        static $filters = ["clean_class" => 11, "escape" => 16, "trim" => 17, "render" => 17, "striptags" => 24];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'trim', 'render', 'striptags'],
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
