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

/* themes/custom/cpg_theme/templates/content/node--directory-listing--full.html.twig */
class __TwigTemplate_dce34e0067c4b70c7092b3e0df575e95 extends Template
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
        // line 26
        yield "
<article";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["cpg-directory-profile"], "method", false, false, true, 27), "html", null, true);
        yield ">

  ";
        // line 30
        yield "  <h1 class=\"cpg-directory-profile__name\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>

  ";
        // line 33
        yield "  ";
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_website", [], "any", false, false, true, 33))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    <div class=\"cpg-directory-profile__website\">
      ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_website", [], "any", false, false, true, 35), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 38
        yield "
  ";
        // line 40
        yield "  ";
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_name", [], "any", false, false, true, 40))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "    <div class=\"cpg-directory-profile__section\">
      <h3 class=\"cpg-directory-profile__section-title\">";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact"));
            yield "</h3>
      <div class=\"cpg-directory-profile__contact-name\">
        ";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_name", [], "any", false, false, true, 44), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 48
        yield "
  ";
        // line 50
        yield "  ";
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_expertise", [], "any", false, false, true, 50))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "    <div class=\"cpg-directory-profile__section\">
      <h3 class=\"cpg-directory-profile__section-title\">";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Expertise & Capabilities"));
            yield "</h3>
      <div class=\"cpg-directory-profile__tags\">
        ";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_expertise", [], "any", false, false, true, 54), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 58
        yield "
  ";
        // line 60
        yield "  ";
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 60))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "    <div class=\"cpg-directory-profile__section\">
      <h3 class=\"cpg-directory-profile__section-title\">";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About"));
            yield "</h3>
      <div class=\"cpg-directory-profile__body\">
        ";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 64), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 68
        yield "
  ";
        // line 70
        yield "  <div class=\"cpg-directory-profile__cta\">
    <a href=\"";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "claim\" class=\"cpg-directory-card__claim-btn\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Claim This Profile"));
        yield "</a>
  </div>

</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "label", "content", "url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/content/node--directory-listing--full.html.twig";
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
        return array (  139 => 71,  136 => 70,  133 => 68,  126 => 64,  121 => 62,  118 => 61,  115 => 60,  112 => 58,  105 => 54,  100 => 52,  97 => 51,  94 => 50,  91 => 48,  84 => 44,  79 => 42,  76 => 41,  73 => 40,  70 => 38,  64 => 35,  61 => 34,  58 => 33,  52 => 30,  47 => 27,  44 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/content/node--directory-listing--full.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/content/node--directory-listing--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 33];
        static $filters = ["escape" => 27, "trim" => 33, "striptags" => 33, "render" => 33, "t" => 42];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trim', 'striptags', 'render', 't'],
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
