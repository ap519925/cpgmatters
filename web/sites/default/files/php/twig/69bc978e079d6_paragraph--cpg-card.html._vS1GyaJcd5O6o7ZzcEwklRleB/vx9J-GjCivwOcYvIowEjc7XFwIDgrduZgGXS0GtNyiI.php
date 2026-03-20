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

/* themes/custom/cpg_theme/templates/paragraphs/paragraph--cpg-card.html.twig */
class __TwigTemplate_a8b43829ccb5bcb0f379ae5e57e8b6f6 extends Template
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
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 11))), "cpg-paragraph-card"];
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
        yield "  <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 16), "html", null, true);
        yield ">
    ";
        // line 17
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_image", [], "any", false, false, true, 17)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "      <div class=\"cpg-paragraph-card__image\">
        ";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_image", [], "any", false, false, true, 19), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 22
        yield "    <div class=\"cpg-paragraph-card__content\">
      ";
        // line 23
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_icon", [], "any", false, false, true, 23))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "        <div class=\"cpg-paragraph-card__icon\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_icon", [], "any", false, false, true, 24)))), "html", null, true);
            yield "</div>
      ";
        }
        // line 26
        yield "      ";
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_title", [], "any", false, false, true, 26))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "        <h3 class=\"cpg-paragraph-card__title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_title", [], "any", false, false, true, 27), "html", null, true);
            yield "</h3>
      ";
        }
        // line 29
        yield "      ";
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_body", [], "any", false, false, true, 29)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "        <div class=\"cpg-paragraph-card__body\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_body", [], "any", false, false, true, 30), "html", null, true);
            yield "</div>
      ";
        }
        // line 32
        yield "      ";
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_link", [], "any", false, false, true, 32)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "        <div class=\"cpg-paragraph-card__link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_p_link", [], "any", false, false, true, 33), "html", null, true);
            yield "</div>
      ";
        }
        // line 35
        yield "    </div>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/paragraphs/paragraph--cpg-card.html.twig";
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
        return array (  114 => 35,  108 => 33,  105 => 32,  99 => 30,  96 => 29,  90 => 27,  87 => 26,  81 => 24,  79 => 23,  76 => 22,  70 => 19,  67 => 18,  65 => 17,  60 => 16,  48 => 15,  46 => 11,  45 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/paragraphs/paragraph--cpg-card.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/paragraphs/paragraph--cpg-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 9, "block" => 15, "if" => 17];
        static $filters = ["clean_class" => 11, "escape" => 16, "trim" => 17, "render" => 17, "striptags" => 23];
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
