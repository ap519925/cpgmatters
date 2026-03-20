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

/* themes/custom/cpg_theme/templates/views/views-view--directory.html.twig */
class __TwigTemplate_9a20b731c4e15fc8c24732765505e768 extends Template
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
        // line 24
        yield "
<div class=\"cpg-directory\">

  ";
        // line 28
        yield "  <div class=\"cpg-directory__hero\">
    ";
        // line 29
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "      <h1 class=\"cpg-directory__title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h1>
    ";
        }
        // line 32
        yield "    ";
        if ((($tmp = ($context["header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "      <div class=\"cpg-directory__description\">
        ";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 37
        yield "  </div>

  ";
        // line 40
        yield "  ";
        if ((($tmp = ($context["exposed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "    <div class=\"cpg-directory__filter-bar\">
      <div class=\"cpg-directory__filter-inner\">
        ";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
      </div>
      ";
            // line 45
            if ((($tmp = ($context["footer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "        <div class=\"cpg-directory__result-count\">
          ";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 50
            yield "    </div>
  ";
        }
        // line 52
        yield "
  ";
        // line 54
        yield "  ";
        if ((($tmp = ($context["rows"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "    <div class=\"cpg-directory__grid\">
      ";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        } elseif ((($tmp =         // line 58
($context["empty"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "    <div class=\"cpg-directory__empty\">
      ";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 63
        yield "
  ";
        // line 65
        yield "  ";
        if ((($tmp = ($context["pager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "    <div class=\"cpg-directory__pager\">
      ";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 70
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "header", "exposed", "footer", "rows", "empty", "pager"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/views/views-view--directory.html.twig";
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
        return array (  143 => 70,  137 => 67,  134 => 66,  131 => 65,  128 => 63,  122 => 60,  119 => 59,  117 => 58,  112 => 56,  109 => 55,  106 => 54,  103 => 52,  99 => 50,  93 => 47,  90 => 46,  88 => 45,  83 => 43,  79 => 41,  76 => 40,  72 => 37,  66 => 34,  63 => 33,  60 => 32,  54 => 30,  52 => 29,  49 => 28,  44 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/views/views-view--directory.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/views/views-view--directory.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 29];
        static $filters = ["escape" => 30];
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
