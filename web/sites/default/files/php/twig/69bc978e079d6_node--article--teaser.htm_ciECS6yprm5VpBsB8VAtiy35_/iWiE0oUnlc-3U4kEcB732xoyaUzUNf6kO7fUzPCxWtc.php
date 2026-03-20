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

/* themes/custom/cpg_theme/templates/content/node--article--teaser.html.twig */
class __TwigTemplate_6303b671dc5ab305f8cd643cbb95d377 extends Template
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
        yield "
";
        // line 10
        $context["is_featured"] = CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "isSticky", [], "method", false, false, true, 10);
        // line 11
        yield "
";
        // line 12
        $context["classes"] = ["cpg-article-teaser", (((($tmp =         // line 14
($context["is_featured"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("cpg-article-teaser--featured") : ("")), (((($tmp =  !        // line 15
($context["is_featured"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["category_class"] ?? null)) : (""))];
        // line 17
        yield "
<article";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 18), "html", null, true);
        yield " style=\"";
        if ((($tmp =  !($context["is_featured"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "border: none; border-radius: 8px; overflow: hidden; margin-bottom: 2rem;";
        }
        yield "\">

  ";
        // line 21
        yield "  ";
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 21)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "    <div class=\"cpg-article-teaser__image\" style=\"width: 100%; ";
            if ((($tmp = ($context["is_featured"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aspect-ratio: 16/8;";
            } else {
                yield "aspect-ratio: 16/9;";
            }
            yield " overflow: hidden; background: #e5e7eb; display: block;\">
      ";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 23), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 26
        yield "
  <div class=\"cpg-article-teaser__content\" style=\"padding: 1.5rem 1.5rem 2rem; ";
        // line 27
        if ((($tmp = ($context["is_featured"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "padding: 2rem 0;";
        }
        yield "\">

    ";
        // line 30
        yield "    ";
        if ((($tmp = ($context["category_name_raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "      <div class=\"cpg-article-teaser__category\" style=\"margin-bottom: 0.5rem; display: flex; align-items: center; gap: 6px;\">
        <span class=\"cpg-category-icon\" aria-hidden=\"true\" style=\"font-size: 0.85rem;\">";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("category_icon", $context)) ? (Twig\Extension\CoreExtension::default(($context["category_icon"] ?? null), "📈")) : ("📈")), "html", null, true);
            yield "</span>
        <span style=\"color: #C41E3A; font-size: 0.7rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em;\">
          ";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["category_name_raw"] ?? null), "html", null, true);
            yield "
        </span>
      </div>
    ";
        }
        // line 38
        yield "
    ";
        // line 40
        yield "    <h2 class=\"cpg-article-teaser__title\" style=\"";
        if ((($tmp = ($context["is_featured"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "font-size: 2.8rem; line-height: 1.15; margin-bottom: 1rem;";
        } else {
            yield "font-size: 1.25rem; line-height: 1.3; margin-bottom: 0.5rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 2.6em;";
        }
        yield "; font-family: 'Outfit', sans-serif; font-weight: 700;\">
      <a href=\"";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\" rel=\"bookmark\" style=\"text-decoration: none; ";
        if ((($tmp = ($context["is_featured"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "color: #2563EB; text-decoration: underline; text-underline-offset: 4px;";
        } else {
            yield "color: #1A1A1A;";
        }
        yield "\">
        ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "
      </a>
    </h2>

    ";
        // line 47
        yield "    ";
        if ((($tmp = ($context["custom_teaser"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "      <div class=\"cpg-article-teaser__body\" style=\"font-family: 'Inter', sans-serif; ";
            if ((($tmp = ($context["is_featured"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "font-size: 1.1rem; color: #374151; line-height: 1.6;";
            } else {
                yield "font-size: 0.95rem; color: #4B5563; line-height: 1.5; height: 4.5em; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;";
            }
            yield " margin-bottom: 1rem;\">
        ";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["custom_teaser"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 52
        yield "
    ";
        // line 54
        yield "    ";
        if ((($context["is_featured"] ?? null) && ($context["display_submitted"] ?? null))) {
            // line 55
            yield "      <div class=\"cpg-article-teaser__meta\" style=\"display: flex; align-items: center; gap: 1rem; margin-top: 2rem; padding-bottom: 2rem; border-bottom: 1px solid #E5E7EB;\">
        <div class=\"cpg-author-avatar\" style=\"width: 44px; height: 44px; border-radius: 50%; background: #9B1730; color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem; flex-shrink: 0;\">
          ";
            // line 57
            yield ((Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["author_name"] ?? null))))))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["author_name"] ?? null)))))), "html", null, true)) : ("S"));
            yield "
        </div>
        <div class=\"cpg-author-info\" style=\"display: flex; flex-direction: column; gap: 2px;\">
          <span style=\"font-size: 0.85rem; color: #6B7280; font-family: 'Inter', sans-serif;\">By <span style=\"font-weight: 600; color: #111827;\">";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true);
            yield "</span></span>
          <span style=\"font-size: 0.8rem; color: #6B7280; font-family: 'Inter', sans-serif;\">
            ";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true);
            yield "
            ";
            // line 63
            if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_read_time", [], "any", false, false, true, 63))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "              &middot; ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_read_time", [], "any", false, false, true, 64)))), "html", null, true);
                yield "
            ";
            }
            // line 66
            yield "          </span>
        </div>
      </div>

      ";
            // line 71
            yield "      <div class=\"cpg-social-share\" style=\"display: flex; gap: 12px; margin-top: 1.5rem;\">
        <a href=\"#\" style=\"display: flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background: #F3F4F6; border: 1px solid #E5E7EB; color: #6B7280; text-decoration: none; font-size: 14px; transition: all 0.2s;\">X</a>
        <a href=\"#\" style=\"display: flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background: #F3F4F6; border: 1px solid #E5E7EB; color: #6B7280; text-decoration: none; font-size: 14px; font-weight: bold; font-family:serif; transition: all 0.2s;\">f</a>
        <a href=\"#\" style=\"display: flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background: #F3F4F6; border: 1px solid #E5E7EB; color: #6B7280; text-decoration: none; font-size: 14px; font-weight: bold; font-family:serif; transition: all 0.2s;\">in</a>
        <a href=\"#\" style=\"display: flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background: #F3F4F6; border: 1px solid #E5E7EB; color: #6B7280; text-decoration: none; font-size: 14px; font-weight: bold; transition: all 0.2s;\">@</a>
      </div>
    ";
        }
        // line 78
        yield "
    ";
        // line 80
        yield "    ";
        if ((($tmp =  !($context["is_featured"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "      <div class=\"cpg-article-teaser__footer\" style=\"margin-top: 1rem;\">
        <a href=\"";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" style=\"color: #C41E3A; font-weight: 700; font-size: 0.85rem; text-decoration: none; display: inline-block;\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more"));
            yield " &rarr;</a>
        ";
            // line 83
            if ((($tmp = ($context["date"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 84
                yield "          <div style=\"font-size: 0.75rem; color: #9CA3AF; margin-top: 6px;\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true);
                yield "</div>
        ";
            }
            // line 86
            yield "      </div>
    ";
        }
        // line 88
        yield "
  </div>

</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "category_class", "attributes", "content", "category_name_raw", "category_icon", "url", "label", "custom_teaser", "display_submitted", "author_name", "date"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/content/node--article--teaser.html.twig";
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
        return array (  236 => 88,  232 => 86,  226 => 84,  224 => 83,  218 => 82,  215 => 81,  212 => 80,  209 => 78,  200 => 71,  194 => 66,  188 => 64,  186 => 63,  182 => 62,  177 => 60,  171 => 57,  167 => 55,  164 => 54,  161 => 52,  155 => 49,  146 => 48,  143 => 47,  136 => 42,  126 => 41,  117 => 40,  114 => 38,  107 => 34,  102 => 32,  99 => 31,  96 => 30,  89 => 27,  86 => 26,  80 => 23,  71 => 22,  68 => 21,  59 => 18,  56 => 17,  54 => 15,  53 => 14,  52 => 12,  49 => 11,  47 => 10,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/content/node--article--teaser.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/content/node--article--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 10, "if" => 18];
        static $filters = ["escape" => 18, "trim" => 21, "render" => 21, "default" => 32, "upper" => 57, "first" => 57, "striptags" => 57, "t" => 82];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trim', 'render', 'default', 'upper', 'first', 'striptags', 't'],
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
