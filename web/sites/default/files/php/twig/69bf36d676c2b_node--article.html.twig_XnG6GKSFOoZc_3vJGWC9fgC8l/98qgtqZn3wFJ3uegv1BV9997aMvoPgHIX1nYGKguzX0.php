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

/* themes/custom/cpg_theme/templates/content/node--article.html.twig */
class __TwigTemplate_611a4287280947e3bc5c3d61f5a487ec extends Template
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
        // line 16
        yield "
<article";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["cpg-article-full"], "method", false, false, true, 17), "html", null, true);
        yield ">

  ";
        // line 20
        yield "  ";
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 20)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "    <div class=\"cpg-article-full__category\">
      <span class=\"cpg-category-icon\" aria-hidden=\"true\">";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("category_icon", $context)) ? (Twig\Extension\CoreExtension::default(($context["category_icon"] ?? null), "📈")) : ("📈")), "html", null, true);
            yield "</span>
      <span class=\"cpg-article-full__category-text\">
        ";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 24), "html", null, true);
            yield "
      </span>
    </div>
  ";
        }
        // line 28
        yield "
  ";
        // line 30
        yield "  <h1 class=\"cpg-article-full__title\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>

  ";
        // line 33
        yield "  ";
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_summary", [], "any", false, false, true, 33)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "    <div class=\"cpg-article-full__summary\">
      ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_summary", [], "any", false, false, true, 35), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 38
        yield "
  ";
        // line 40
        yield "  <div class=\"cpg-article-full__meta\">
    <div class=\"cpg-article-full__meta-left\">
      ";
        // line 43
        yield "      <div class=\"cpg-author-avatar\">
        ";
        // line 44
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_author_name", [], "any", false, false, true, 44))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_author_name", [], "any", false, false, true, 45)))))), "html", null, true);
            yield "
        ";
        } else {
            // line 47
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["author_name"] ?? null)))))), "A"), "html", null, true);
            yield "
        ";
        }
        // line 49
        yield "      </div>
      <div class=\"cpg-author-info\">
        <span class=\"cpg-article-full__author\">
          ";
        // line 52
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_author_name", [], "any", false, false, true, 52))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_author_name", [], "any", false, false, true, 53)))), "html", null, true);
            yield "
          ";
        } else {
            // line 55
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true);
            yield "
          ";
        }
        // line 57
        yield "        </span>
        <span class=\"cpg-article-full__date-read\">
          ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true);
        yield "
          ";
        // line 60
        if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_estimated_read_time", [], "any", false, false, true, 60))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "            &middot; ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_estimated_read_time", [], "any", false, false, true, 61)))), "html", null, true);
            yield "
          ";
        }
        // line 63
        yield "        </span>
      </div>
    </div>
    <div class=\"cpg-article-full__meta-right\">
      ";
        // line 68
        yield "      <div class=\"cpg-social-share\">
        <a href=\"https://twitter.com/intent/tweet?url=";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("article_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article_url"] ?? null), ($context["url"] ?? null))) : (($context["url"] ?? null))), "html", null, true);
        yield "&text=";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode(((array_key_exists("plain_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["plain_title"] ?? null), "")) : (""))), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\" class=\"cpg-social-share__btn\" title=\"Share on X\">
          <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z\"/></svg>
        </a>
        <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("article_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article_url"] ?? null), ($context["url"] ?? null))) : (($context["url"] ?? null))), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\" class=\"cpg-social-share__btn\" title=\"Share on Facebook\">
          <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z\"/></svg>
        </a>
        <a href=\"https://www.linkedin.com/sharing/share-offsite/?url=";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("article_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article_url"] ?? null), ($context["url"] ?? null))) : (($context["url"] ?? null))), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\" class=\"cpg-social-share__btn\" title=\"Share on LinkedIn\">
          <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z\"/></svg>
        </a>
        <a href=\"mailto:?subject=";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode(((array_key_exists("plain_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["plain_title"] ?? null), "")) : (""))), "html", null, true);
        yield "&body=Check out this article: ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("article_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article_url"] ?? null), ($context["url"] ?? null))) : (($context["url"] ?? null))), "html", null, true);
        yield "\" class=\"cpg-social-share__btn\" title=\"Share via Email\">
          <svg viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"currentColor\"><path d=\"M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z\"/><path d=\"M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z\"/></svg>
        </a>
        <a href=\"mailto:?subject=I thought you'd find this interesting: ";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode(((array_key_exists("plain_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["plain_title"] ?? null), "")) : (""))), "html", null, true);
        yield "&body=Hi,%0D%0A%0D%0AI wanted to share this article with you from ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("site_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["site_name"] ?? null), "CPG Matters")) : ("CPG Matters")), "html", null, true);
        yield ":%0D%0A%0D%0A";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("plain_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["plain_title"] ?? null), "")) : ("")), "html", null, true);
        yield "%0D%0A";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("article_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["article_url"] ?? null), ($context["url"] ?? null))) : (($context["url"] ?? null))), "html", null, true);
        yield "%0D%0A%0D%0ABest regards\" class=\"cpg-social-share__send-btn\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Send to Colleague"));
        yield "\">
          <svg viewBox=\"0 0 24 24\" width=\"14\" height=\"14\" fill=\"currentColor\"><path d=\"M15.0007 3.11066C15.4908 2.85621 16.0923 3.03513 16.3468 3.5253L21.3468 13.0253C21.4618 13.2462 21.4618 13.5079 21.3468 13.7288L16.3468 23.2288C16.0923 23.7189 15.4908 23.8979 15.0007 23.6434C14.5106 23.389 14.3316 22.7875 14.5861 22.2974L19.0542 13.377L14.5861 4.45672C14.3316 3.96661 14.5106 3.36512 15.0007 3.11066Z\"/><path d=\"M2.3999 13.377C2.3999 12.8247 2.84762 12.377 3.3999 12.377H19.3999C19.9522 12.377 20.3999 12.8247 20.3999 13.377C20.3999 13.9293 19.9522 14.377 19.3999 14.377H3.3999C2.84762 14.377 2.3999 13.9293 2.3999 13.377Z\"/></svg>
          <span>";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Send to Colleague"));
        yield "</span>
        </a>
      </div>
    </div>
  </div>

  ";
        // line 90
        yield "  ";
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 90)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "    <figure class=\"cpg-article-full__hero-image\">
      ";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 92), "html", null, true);
            yield "
      ";
            // line 93
            if ((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image_caption", [], "any", false, false, true, 93))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "        <figcaption class=\"cpg-article-full__caption\">
          ";
                // line 95
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image_caption", [], "any", false, false, true, 95)))), "html", null, true);
                yield "
        </figcaption>
      ";
            }
            // line 98
            yield "    </figure>
  ";
        }
        // line 100
        yield "
  ";
        // line 102
        yield "  <div class=\"cpg-article-full__body\">
    ";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 103), "html", null, true);
        yield "
  </div>

  ";
        // line 107
        yield "  ";
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 107)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "    <div class=\"cpg-article-full__topics\">
      <span class=\"cpg-article-full__topics-label\">";
            // line 109
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), t("Related Topics")), "html", null, true);
            yield "</span>
      <div class=\"cpg-article-full__topics-list\">
        ";
            // line 111
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 111), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 115
        yield "
  ";
        // line 117
        yield "  ";
        if ((($tmp = ($context["related_articles"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "    <div class=\"cpg-related-articles-section\">
      <hr style=\"border:0; border-top:1px solid #E5E7EB; margin: 3rem 0;\">
      <h2 class=\"cpg-related-articles-heading\">";
            // line 120
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Related Articles"));
            yield "</h2>
      <div class=\"cpg-related-articles-grid\">
        ";
            // line 122
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["related_articles"] ?? null), "html", null, true);
            yield "
      </div>
    </div>
  ";
        }
        // line 126
        yield "
  ";
        // line 128
        yield "  <div class=\"hidden\">
    ";
        // line 129
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_tags", "field_summary", "field_author_name", "field_read_time", "field_estimated_read_time", "field_image", "field_image_caption", "body"), "html", null, true);
        yield "
  </div>

</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content", "category_icon", "label", "author_name", "date", "article_url", "url", "plain_title", "site_name", "related_articles"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/content/node--article.html.twig";
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
        return array (  292 => 129,  289 => 128,  286 => 126,  279 => 122,  274 => 120,  270 => 118,  267 => 117,  264 => 115,  257 => 111,  252 => 109,  249 => 108,  246 => 107,  240 => 103,  237 => 102,  234 => 100,  230 => 98,  224 => 95,  221 => 94,  219 => 93,  215 => 92,  212 => 91,  209 => 90,  200 => 83,  187 => 81,  179 => 78,  173 => 75,  167 => 72,  159 => 69,  156 => 68,  150 => 63,  144 => 61,  142 => 60,  138 => 59,  134 => 57,  128 => 55,  122 => 53,  120 => 52,  115 => 49,  109 => 47,  103 => 45,  101 => 44,  98 => 43,  94 => 40,  91 => 38,  85 => 35,  82 => 34,  79 => 33,  73 => 30,  70 => 28,  63 => 24,  58 => 22,  55 => 21,  52 => 20,  47 => 17,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/content/node--article.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/content/node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 20];
        static $filters = ["escape" => 17, "trim" => 20, "render" => 20, "default" => 22, "striptags" => 44, "upper" => 45, "first" => 45, "url_encode" => 69, "t" => 81, "without" => 129];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trim', 'render', 'default', 'striptags', 'upper', 'first', 'url_encode', 't', 'without'],
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
