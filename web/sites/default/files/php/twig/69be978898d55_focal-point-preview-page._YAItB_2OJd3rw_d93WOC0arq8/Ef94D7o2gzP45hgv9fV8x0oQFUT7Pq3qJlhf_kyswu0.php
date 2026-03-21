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

/* modules/contrib/focal_point/templates/focal-point-preview-page.html.twig */
class __TwigTemplate_3549f7bcc281567de8bd37874b5a1fa4 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("focal_point/drupal.focal_point_preview"), "html", null, true);
        yield "

<div id=\"focal-point-preview-wrapper\">
  <span class=\"derivatives-note note\">";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["derivative_image_note"] ?? null), "html", null, true);
        yield "</span>
  <div id=\"focal-point-derivatives\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["derivative_images"] ?? null));
        foreach ($context['_seq'] as $context["style"] => $context["derivative"]) {
            // line 7
            yield "      <div id=\"focal-point-derivative-preview-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["style"], "html", null, true);
            yield "\" class=\"focal-point-derivative-preview\" data-image-style=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["style"], "html", null, true);
            yield "\">
        <h3 class=\"focal-point-derivative-preview-label\">";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["derivative"], "style", [], "any", false, false, true, 8), "html", null, true);
            yield "</h3>
        ";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["derivative"], "image", [], "any", false, false, true, 9), "html", null, true);
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['style'], $context['derivative'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "  </div>

  <div id=\"focal-point-preview\">
    <h2 id=\"focal-point-preview-label\">";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Original image"));
        yield "</h2>
    <div class=\"focal-point-original-image\">";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["original_image"] ?? null), "html", null, true);
        yield "</div>
  </div>
  <span class=\"preview-note note\">";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["preview_image_note"] ?? null), "html", null, true);
        yield "</span>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["derivative_image_note", "derivative_images", "original_image", "preview_image_note"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/focal_point/templates/focal-point-preview-page.html.twig";
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
        return array (  93 => 18,  88 => 16,  84 => 15,  79 => 12,  70 => 9,  66 => 8,  59 => 7,  55 => 6,  50 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/focal_point/templates/focal-point-preview-page.html.twig", "/var/www/html/web/modules/contrib/focal_point/templates/focal-point-preview-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 6];
        static $filters = ["escape" => 1, "t" => 15];
        static $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 't'],
                ['attach_library'],
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
