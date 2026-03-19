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

/* themes/custom/cpg_theme/templates/block/block--block-content--newsletter.html.twig */
class __TwigTemplate_b42868bc7af04d9e899e15becb3d8292 extends Template
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
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["cpg-newsletter-block"], "method", false, false, true, 8), "html", null, true);
        yield ">
  <h3 class=\"cpg-newsletter-block__title\">
    ";
        // line 10
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 10)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 11), "html", null, true);
            yield "
    ";
        } else {
            // line 13
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Stay Informed"));
            yield "
    ";
        }
        // line 15
        yield "  </h3>
  <div class=\"cpg-newsletter-block__desc\">
    ";
        // line 17
        $context["body"] = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 17)));
        // line 18
        yield "    ";
        if ((($tmp = ($context["body"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 19), "html", null, true);
            yield "
    ";
        } else {
            // line 21
            yield "      <p>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Get the latest CPG news delivered to your inbox"));
            yield "</p>
    ";
        }
        // line 23
        yield "  </div>
  <form action=\"#\" class=\"cpg-newsletter-block__form\">
    <input type=\"email\" placeholder=\"";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Your email address"));
        yield "\" class=\"cpg-newsletter-block__input\" required>
    <button type=\"submit\" class=\"cpg-newsletter-block__btn\">";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Subscribe"));
        yield "</button>
  </form>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/block/block--block-content--newsletter.html.twig";
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
        return array (  93 => 26,  89 => 25,  85 => 23,  79 => 21,  73 => 19,  70 => 18,  68 => 17,  64 => 15,  58 => 13,  52 => 11,  50 => 10,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/block/block--block-content--newsletter.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/block/block--block-content--newsletter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 10, "set" => 17];
        static $filters = ["escape" => 8, "trim" => 10, "render" => 10, "t" => 13];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'trim', 'render', 't'],
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
