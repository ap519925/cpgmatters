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

/* themes/custom/cpg_theme/templates/views/views-view-unformatted--frontpage.html.twig */
class __TwigTemplate_4630be2f1e8f0af541f02861acf10e0a extends Template
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
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "  <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h3>
";
        }
        // line 10
        yield "<div class=\"cpg-frontpage-articles\">
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            yield "    ";
            // line 13
            $context["row_classes"] = [(((($tmp =             // line 14
($context["default_row_class"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("views-row") : (""))];
            // line 17
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 17), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 17), "html", null, true);
            yield ">
      ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 18), "html", null, true);
            yield "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
  ";
        // line 23
        yield "  <div class=\"cpg-view-more-container\" style=\"text-align: center; margin-top: 3rem; margin-bottom: 3rem;\">
    <a href=\"/articles\" class=\"cpg-subscribe-btn\" style=\"padding: 0.8rem 2.5rem; font-size: 1.05rem; border-radius: 50px; display: inline-block;\">
      View All Articles
    </a>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "rows", "default_row_class"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/views/views-view-unformatted--frontpage.html.twig";
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
        return array (  81 => 23,  78 => 21,  69 => 18,  64 => 17,  62 => 14,  61 => 13,  59 => 12,  55 => 11,  52 => 10,  46 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/views/views-view-unformatted--frontpage.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/views/views-view-unformatted--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 7, "for" => 11, "set" => 13];
        static $filters = ["escape" => 8];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
