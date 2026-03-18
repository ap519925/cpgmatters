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

/* themes/custom/cpg_theme/templates/content/node--page--white-papers.html.twig */
class __TwigTemplate_08c093840234c01a9c64f0bf5473bff4 extends Template
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
        // line 10
        yield "
<article";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["cpg-whitepapers"], "method", false, false, true, 11), "html", null, true);
        yield ">
  ";
        // line 12
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 12)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 13));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                yield "      ";
                $context["p"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 14);
                // line 15
                yield "      ";
                $context["ptype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "bundle", [], "method", false, false, true, 15);
                // line 16
                yield "
      ";
                // line 17
                if ((($context["ptype"] ?? null) == "cpg_hero")) {
                    // line 18
                    yield "        ";
                    // line 19
                    yield "        <section class=\"cpg-whitepapers__hero\">
          <h1 class=\"cpg-whitepapers__title\">";
                    // line 20
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20), "html", null, true);
                    yield "</h1>
          ";
                    // line 21
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_subtitle", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 22
                        yield "            <p class=\"cpg-whitepapers__subtitle\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_subtitle", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22)), "html", null, true);
                        yield "</p>
          ";
                    }
                    // line 24
                    yield "        </section>

      ";
                } elseif ((                // line 26
($context["ptype"] ?? null) == "cpg_text")) {
                    // line 27
                    yield "        ";
                    // line 28
                    yield "        <section class=\"cpg-about__section\">
          <div class=\"cpg-about__text\">
            ";
                    // line 30
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30));
                    yield "
          </div>
        </section>

      ";
                } elseif ((                // line 34
($context["ptype"] ?? null) == "cpg_card_grid")) {
                    // line 35
                    yield "        ";
                    // line 36
                    yield "        <section class=\"cpg-whitepapers__popular\">
          ";
                    // line 37
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 38
                        yield "            <div class=\"cpg-whitepapers__section-header\">
              <h2>";
                        // line 39
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 39), "value", [], "any", false, false, true, 39), "html", null, true);
                        yield "</h2>
            </div>
          ";
                    }
                    // line 42
                    yield "          <div class=\"cpg-whitepapers__grid\">
            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_items", [], "any", false, false, true, 43));
                    foreach ($context['_seq'] as $context["_key"] => $context["card_item"]) {
                        // line 44
                        yield "              ";
                        $context["card"] = CoreExtension::getAttribute($this->env, $this->source, $context["card_item"], "entity", [], "any", false, false, true, 44);
                        // line 45
                        yield "              <div class=\"wp-card\">
                ";
                        // line 46
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_image", [], "any", false, false, true, 46), "entity", [], "any", false, false, true, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 47
                            yield "                  <div class=\"wp-card__image\">
                    <img src=\"";
                            // line 48
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_image", [], "any", false, false, true, 48), "entity", [], "any", false, false, true, 48), "fileuri", [], "any", false, false, true, 48)), "html", null, true);
                            yield "\" alt=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_image", [], "any", false, false, true, 48), "alt", [], "any", false, false, true, 48), "html", null, true);
                            yield "\" />
                  </div>
                ";
                        } else {
                            // line 51
                            yield "                  <div class=\"wp-card__image\">
                    <span class=\"img-placeholder\">📄</span>
                  </div>
                ";
                        }
                        // line 55
                        yield "                <div class=\"wp-card__content\">
                  ";
                        // line 56
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_icon", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 57
                            yield "                    <div class=\"wp-card__category\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_icon", [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), "html", null, true);
                            yield "</div>
                  ";
                        }
                        // line 59
                        yield "                  <h3 class=\"wp-card__title\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_title", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59), "html", null, true);
                        yield "</h3>
                  ";
                        // line 60
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_body", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 61
                            yield "                    <p class=\"wp-card__excerpt\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_body", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61)), "html", null, true);
                            yield "</p>
                  ";
                        }
                        // line 63
                        yield "                  ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_link", [], "any", false, false, true, 63), 0, [], "any", false, false, true, 63), "url", [], "any", false, false, true, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 64
                            yield "                    <div class=\"wp-card__footer\">
                      <a href=\"";
                            // line 65
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_link", [], "any", false, false, true, 65), 0, [], "any", false, false, true, 65), "url", [], "any", false, false, true, 65), "html", null, true);
                            yield "\" class=\"btn--red\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_link", [], "any", false, true, true, 65), 0, [], "any", false, true, true, 65), "title", [], "any", true, true, true, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_link", [], "any", false, false, true, 65), 0, [], "any", false, false, true, 65), "title", [], "any", false, false, true, 65), "Download")) : ("Download")), "html", null, true);
                            yield "</a>
                    </div>
                  ";
                        }
                        // line 68
                        yield "                </div>
              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['card_item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    yield "          </div>
        </section>

      ";
                } elseif ((                // line 74
($context["ptype"] ?? null) == "cpg_features")) {
                    // line 75
                    yield "        ";
                    // line 76
                    yield "        <section class=\"cpg-whitepapers__topics\">
          ";
                    // line 77
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 78
                        yield "            <div class=\"cpg-whitepapers__section-header\">
              <h2>";
                        // line 79
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 79), "value", [], "any", false, false, true, 79), "html", null, true);
                        yield "</h2>
            </div>
          ";
                    }
                    // line 82
                    yield "          <div class=\"cpg-whitepapers__topics-grid\">
            ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_items", [], "any", false, false, true, 83));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_item"]) {
                        // line 84
                        yield "              ";
                        $context["topic"] = CoreExtension::getAttribute($this->env, $this->source, $context["topic_item"], "entity", [], "any", false, false, true, 84);
                        // line 85
                        yield "              <a href=\"#\" class=\"cpg-wp-topic-card\">
                ";
                        // line 86
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["topic"] ?? null), "field_p_icon", [], "any", false, false, true, 86), "value", [], "any", false, false, true, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 87
                            yield "                  <span class=\"topic-icon\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["topic"] ?? null), "field_p_icon", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), "html", null, true);
                            yield "</span>
                ";
                        }
                        // line 89
                        yield "                <h3>";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["topic"] ?? null), "field_p_title", [], "any", false, false, true, 89), "value", [], "any", false, false, true, 89), "html", null, true);
                        yield "</h3>
                ";
                        // line 90
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["topic"] ?? null), "field_p_body", [], "any", false, false, true, 90), "value", [], "any", false, false, true, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 91
                            yield "                  <span class=\"topic-count\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["topic"] ?? null), "field_p_body", [], "any", false, false, true, 91), "value", [], "any", false, false, true, 91)), "html", null, true);
                            yield "</span>
                ";
                        }
                        // line 93
                        yield "              </a>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['topic_item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    yield "          </div>
        </section>

      ";
                } elseif ((                // line 98
($context["ptype"] ?? null) == "cpg_cta")) {
                    // line 99
                    yield "        ";
                    // line 100
                    yield "        <section class=\"cpg-whitepapers__newsletter\">
          ";
                    // line 101
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 101), "value", [], "any", false, false, true, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 102
                        yield "            <h2>";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 102), "value", [], "any", false, false, true, 102), "html", null, true);
                        yield "</h2>
          ";
                    }
                    // line 104
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 104), "value", [], "any", false, false, true, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 105
                        yield "            <p>";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105)), "html", null, true);
                        yield "</p>
          ";
                    }
                    // line 107
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 107), 0, [], "any", false, false, true, 107), "url", [], "any", false, false, true, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 108
                        yield "            <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 108), 0, [], "any", false, false, true, 108), "url", [], "any", false, false, true, 108), "html", null, true);
                        yield "\" class=\"btn--red\" style=\"display:inline-block; padding: 0.8rem 2rem; border-radius: 6px; text-decoration:none; font-weight:700;\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 108), 0, [], "any", false, false, true, 108), "title", [], "any", false, false, true, 108), "html", null, true);
                        yield "</a>
          ";
                    }
                    // line 110
                    yield "        </section>

      ";
                } else {
                    // line 113
                    yield "        ";
                    // line 114
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 114)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 114)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 114), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 114), [], "array", false, false, true, 114)), "html", null, true);
                    yield "
      ";
                }
                // line 116
                yield "
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            yield "  ";
        }
        // line 119
        yield "
  ";
        // line 121
        yield "  ";
        if ((Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 121))) &&  !Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 121))))) {
            // line 122
            yield "    <div class=\"cpg-whitepapers__body-fallback\">
      ";
            // line 123
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 123), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 126
        yield "
  <div class=\"hidden\">
    ";
        // line 128
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_cpg_paragraphs", "body"), "html", null, true);
        yield "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content", "node", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/cpg_theme/templates/content/node--page--white-papers.html.twig";
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
        return array (  368 => 128,  364 => 126,  358 => 123,  355 => 122,  352 => 121,  349 => 119,  346 => 118,  331 => 116,  325 => 114,  323 => 113,  318 => 110,  310 => 108,  307 => 107,  301 => 105,  298 => 104,  292 => 102,  290 => 101,  287 => 100,  285 => 99,  283 => 98,  278 => 95,  271 => 93,  265 => 91,  263 => 90,  258 => 89,  252 => 87,  250 => 86,  247 => 85,  244 => 84,  240 => 83,  237 => 82,  231 => 79,  228 => 78,  226 => 77,  223 => 76,  221 => 75,  219 => 74,  214 => 71,  206 => 68,  198 => 65,  195 => 64,  192 => 63,  186 => 61,  184 => 60,  179 => 59,  173 => 57,  171 => 56,  168 => 55,  162 => 51,  154 => 48,  151 => 47,  149 => 46,  146 => 45,  143 => 44,  139 => 43,  136 => 42,  130 => 39,  127 => 38,  125 => 37,  122 => 36,  120 => 35,  118 => 34,  111 => 30,  107 => 28,  105 => 27,  103 => 26,  99 => 24,  93 => 22,  91 => 21,  87 => 20,  84 => 19,  82 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  53 => 13,  51 => 12,  47 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/content/node--page--white-papers.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/content/node--page--white-papers.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 12, "for" => 13, "set" => 14];
        static $filters = ["escape" => 11, "trim" => 12, "render" => 12, "striptags" => 22, "raw" => 30, "default" => 65, "without" => 128];
        static $functions = ["file_url" => 48];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'trim', 'render', 'striptags', 'raw', 'default', 'without'],
                ['file_url'],
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
