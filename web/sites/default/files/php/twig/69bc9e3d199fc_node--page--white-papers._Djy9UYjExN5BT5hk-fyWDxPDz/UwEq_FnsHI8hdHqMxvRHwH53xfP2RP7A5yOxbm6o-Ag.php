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
class __TwigTemplate_2d9bf984131b8a7d4354578e04adf334 extends Template
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
($context["ptype"] ?? null) == "cpg_media_text")) {
                    // line 35
                    yield "        ";
                    // line 36
                    yield "        <section class=\"cpg-whitepapers__featured\">
          <div class=\"featured-card\">
            <div class=\"featured-content\">
              <span class=\"badge--featured\">FEATURED RESEARCH</span>
              <h2>";
                    // line 40
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40), "html", null, true);
                    yield "</h2>
              ";
                    // line 41
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 42
                        yield "                ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42));
                        yield "
              ";
                    }
                    // line 44
                    yield "              ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 44), 0, [], "any", false, false, true, 44), "url", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 45
                        yield "                <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 45), 0, [], "any", false, false, true, 45), "url", [], "any", false, false, true, 45), "html", null, true);
                        yield "\" class=\"btn--white\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, true, true, 45), 0, [], "any", false, true, true, 45), "title", [], "any", true, true, true, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 45), 0, [], "any", false, false, true, 45), "title", [], "any", false, false, true, 45), "Download Free Report →")) : ("Download Free Report →")), "html", null, true);
                        yield "</a>
              ";
                    }
                    // line 47
                    yield "            </div>
            <div class=\"featured-image\">
              ";
                    // line 49
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_image", [], "any", false, false, true, 49), "entity", [], "any", false, false, true, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 50
                        yield "                <img src=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_image", [], "any", false, false, true, 50), "entity", [], "any", false, false, true, 50), "fileuri", [], "any", false, false, true, 50)), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_image", [], "any", false, true, true, 50), "alt", [], "any", true, true, true, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_image", [], "any", false, false, true, 50), "alt", [], "any", false, false, true, 50), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50))), "html", null, true);
                        yield "\" />
              ";
                    } else {
                        // line 52
                        yield "                <div class=\"image-placeholder\">📊</div>
              ";
                    }
                    // line 54
                    yield "            </div>
          </div>
        </section>

      ";
                } elseif ((                // line 58
($context["ptype"] ?? null) == "cpg_card_grid")) {
                    // line 59
                    yield "        ";
                    // line 60
                    yield "        <section class=\"cpg-whitepapers__filters\">
          <div class=\"filters-left\">
            <div class=\"filter-group\">
              <label for=\"wp-category\">Category:</label>
              <select id=\"wp-category\">
                <option>All Topics</option>
                <option>Sustainability</option>
                <option>E-Commerce</option>
                <option>Supply Chain</option>
                <option>Digital Marketing</option>
                <option>Innovation</option>
                <option>Market Research</option>
                <option>Consumer Insights</option>
                <option>AI &amp; Technology</option>
              </select>
            </div>
            <div class=\"filter-group\">
              <label for=\"wp-year\">Year:</label>
              <select id=\"wp-year\">
                <option>All Years</option>
                <option>2026</option>
                <option>2025</option>
                <option>2024</option>
              </select>
            </div>
            <div class=\"filter-group\">
              <label for=\"wp-sort\">Sort by:</label>
              <select id=\"wp-sort\">
                <option>Newest First</option>
                <option>Most Popular</option>
                <option>Title A–Z</option>
              </select>
            </div>
          </div>
          <div class=\"filters-right\">
            <div class=\"search-wrap\">
              <span class=\"search-icon\">🔍</span>
              <input type=\"text\" placeholder=\"Search white papers...\" />
            </div>
          </div>
        </section>

        ";
                    // line 103
                    yield "        <section class=\"cpg-whitepapers__popular\">
          ";
                    // line 104
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 104), "value", [], "any", false, false, true, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 105
                        yield "            <div class=\"cpg-whitepapers__section-header\">
              <h2>";
                        // line 106
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 106), "value", [], "any", false, false, true, 106), "html", null, true);
                        yield "</h2>
              <a href=\"#\" class=\"view-all\">View All →</a>
            </div>
          ";
                    }
                    // line 110
                    yield "          <div class=\"cpg-whitepapers__grid\">
            ";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_items", [], "any", false, false, true, 111));
                    foreach ($context['_seq'] as $context["_key"] => $context["card_item"]) {
                        // line 112
                        yield "              ";
                        $context["card"] = CoreExtension::getAttribute($this->env, $this->source, $context["card_item"], "entity", [], "any", false, false, true, 112);
                        // line 113
                        yield "              <div class=\"wp-card\">
                <div class=\"wp-card__image\">
                  ";
                        // line 115
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_image", [], "any", false, false, true, 115), "entity", [], "any", false, false, true, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 116
                            yield "                    <img src=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_image", [], "any", false, false, true, 116), "entity", [], "any", false, false, true, 116), "fileuri", [], "any", false, false, true, 116)), "html", null, true);
                            yield "\" alt=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_image", [], "any", false, false, true, 116), "alt", [], "any", false, false, true, 116), "html", null, true);
                            yield "\" />
                  ";
                        } else {
                            // line 118
                            yield "                    <span class=\"img-placeholder\">📄</span>
                  ";
                        }
                        // line 120
                        yield "                  ";
                        // line 121
                        yield "                  ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_subtitle", [], "any", true, true, true, 121) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_subtitle", [], "any", false, false, true, 121), "value", [], "any", false, false, true, 121))) {
                            // line 122
                            yield "                    ";
                            $context["badge_type"] = "free";
                            // line 123
                            yield "                    ";
                            if (CoreExtension::inFilter("PREMIUM", Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_icon", [], "any", false, false, true, 123), "value", [], "any", false, false, true, 123)))) {
                                // line 124
                                yield "                      ";
                                $context["badge_type"] = "premium";
                                // line 125
                                yield "                    ";
                            }
                            // line 126
                            yield "                  ";
                        }
                        // line 127
                        yield "                  <span class=\"wp-card__badge badge--free\">FREE</span>
                </div>
                <div class=\"wp-card__content\">
                  ";
                        // line 130
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_icon", [], "any", false, false, true, 130), "value", [], "any", false, false, true, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 131
                            yield "                    <div class=\"wp-card__category\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_icon", [], "any", false, false, true, 131), "value", [], "any", false, false, true, 131), "html", null, true);
                            yield "</div>
                  ";
                        }
                        // line 133
                        yield "                  <h3 class=\"wp-card__title\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_title", [], "any", false, false, true, 133), "value", [], "any", false, false, true, 133), "html", null, true);
                        yield "</h3>
                  ";
                        // line 134
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_body", [], "any", false, false, true, 134), "value", [], "any", false, false, true, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 135
                            yield "                    <p class=\"wp-card__excerpt\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_body", [], "any", false, false, true, 135), "value", [], "any", false, false, true, 135)), "html", null, true);
                            yield "</p>
                  ";
                        }
                        // line 137
                        yield "                  <div class=\"wp-card__footer\">
                    ";
                        // line 138
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_subtitle", [], "any", true, true, true, 138) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_subtitle", [], "any", false, false, true, 138), "value", [], "any", false, false, true, 138))) {
                            // line 139
                            yield "                      <span class=\"wp-card__pages\">📄 ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_subtitle", [], "any", false, false, true, 139), "value", [], "any", false, false, true, 139)), "html", null, true);
                            yield "</span>
                    ";
                        }
                        // line 141
                        yield "                    ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_link", [], "any", false, false, true, 141), 0, [], "any", false, false, true, 141), "url", [], "any", false, false, true, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 142
                            yield "                      <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_link", [], "any", false, false, true, 142), 0, [], "any", false, false, true, 142), "url", [], "any", false, false, true, 142), "html", null, true);
                            yield "\" class=\"btn--red\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_link", [], "any", false, true, true, 142), 0, [], "any", false, true, true, 142), "title", [], "any", true, true, true, 142)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "field_p_link", [], "any", false, false, true, 142), 0, [], "any", false, false, true, 142), "title", [], "any", false, false, true, 142), "Download ↓")) : ("Download ↓")), "html", null, true);
                            yield "</a>
                    ";
                        } else {
                            // line 144
                            yield "                      <a href=\"#\" class=\"btn--red\">Download ↓</a>
                    ";
                        }
                        // line 146
                        yield "                  </div>
                </div>
              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['card_item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    yield "          </div>
        </section>

      ";
                } elseif ((                // line 153
($context["ptype"] ?? null) == "cpg_features")) {
                    // line 154
                    yield "        ";
                    // line 155
                    yield "        <section class=\"cpg-whitepapers__topics\">
          ";
                    // line 156
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 156), "value", [], "any", false, false, true, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 157
                        yield "            <div class=\"cpg-whitepapers__section-header\">
              <h2>";
                        // line 158
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 158), "value", [], "any", false, false, true, 158), "html", null, true);
                        yield "</h2>
            </div>
          ";
                    }
                    // line 161
                    yield "          <div class=\"cpg-whitepapers__topics-grid\">
            ";
                    // line 162
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_items", [], "any", false, false, true, 162));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_item"]) {
                        // line 163
                        yield "              ";
                        $context["topic"] = CoreExtension::getAttribute($this->env, $this->source, $context["topic_item"], "entity", [], "any", false, false, true, 163);
                        // line 164
                        yield "              <a href=\"#\" class=\"cpg-wp-topic-card\">
                ";
                        // line 165
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["topic"] ?? null), "field_p_icon", [], "any", false, false, true, 165), "value", [], "any", false, false, true, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 166
                            yield "                  <span class=\"topic-icon\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["topic"] ?? null), "field_p_icon", [], "any", false, false, true, 166), "value", [], "any", false, false, true, 166), "html", null, true);
                            yield "</span>
                ";
                        }
                        // line 168
                        yield "                <h3>";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["topic"] ?? null), "field_p_title", [], "any", false, false, true, 168), "value", [], "any", false, false, true, 168), "html", null, true);
                        yield "</h3>
                ";
                        // line 169
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["topic"] ?? null), "field_p_body", [], "any", false, false, true, 169), "value", [], "any", false, false, true, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 170
                            yield "                  <span class=\"topic-count\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["topic"] ?? null), "field_p_body", [], "any", false, false, true, 170), "value", [], "any", false, false, true, 170)), "html", null, true);
                            yield "</span>
                ";
                        }
                        // line 172
                        yield "              </a>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['topic_item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    yield "          </div>
        </section>

      ";
                } elseif ((                // line 177
($context["ptype"] ?? null) == "cpg_cta")) {
                    // line 178
                    yield "        ";
                    // line 179
                    yield "        <section class=\"cpg-whitepapers__newsletter\">
          ";
                    // line 180
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 180), "value", [], "any", false, false, true, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 181
                        yield "            <h2>";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 181), "value", [], "any", false, false, true, 181), "html", null, true);
                        yield "</h2>
          ";
                    }
                    // line 183
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 183), "value", [], "any", false, false, true, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 184
                        yield "            <p>";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 184), "value", [], "any", false, false, true, 184)), "html", null, true);
                        yield "</p>
          ";
                    }
                    // line 186
                    yield "          ";
                    if ((($tmp = ($context["newsletter_webform"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 187
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["newsletter_webform"] ?? null), "html", null, true);
                        yield "
          ";
                    }
                    // line 189
                    yield "        </section>

      ";
                } else {
                    // line 192
                    yield "        ";
                    // line 193
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 193)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 193)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 193), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 193), [], "array", false, false, true, 193)), "html", null, true);
                    yield "
      ";
                }
                // line 195
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
            // line 197
            yield "  ";
        }
        // line 198
        yield "
  ";
        // line 200
        yield "  ";
        if ((Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 200))) &&  !Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 200))))) {
            // line 201
            yield "    <div class=\"cpg-whitepapers__body-fallback\">
      ";
            // line 202
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 202), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 205
        yield "
  <div class=\"hidden\">
    ";
        // line 207
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_cpg_paragraphs", "body"), "html", null, true);
        yield "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content", "node", "newsletter_webform", "loop"]);        yield from [];
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
        return array (  499 => 207,  495 => 205,  489 => 202,  486 => 201,  483 => 200,  480 => 198,  477 => 197,  462 => 195,  456 => 193,  454 => 192,  449 => 189,  443 => 187,  440 => 186,  434 => 184,  431 => 183,  425 => 181,  423 => 180,  420 => 179,  418 => 178,  416 => 177,  411 => 174,  404 => 172,  398 => 170,  396 => 169,  391 => 168,  385 => 166,  383 => 165,  380 => 164,  377 => 163,  373 => 162,  370 => 161,  364 => 158,  361 => 157,  359 => 156,  356 => 155,  354 => 154,  352 => 153,  347 => 150,  338 => 146,  334 => 144,  326 => 142,  323 => 141,  317 => 139,  315 => 138,  312 => 137,  306 => 135,  304 => 134,  299 => 133,  293 => 131,  291 => 130,  286 => 127,  283 => 126,  280 => 125,  277 => 124,  274 => 123,  271 => 122,  268 => 121,  266 => 120,  262 => 118,  254 => 116,  252 => 115,  248 => 113,  245 => 112,  241 => 111,  238 => 110,  231 => 106,  228 => 105,  226 => 104,  223 => 103,  179 => 60,  177 => 59,  175 => 58,  169 => 54,  165 => 52,  157 => 50,  155 => 49,  151 => 47,  143 => 45,  140 => 44,  134 => 42,  132 => 41,  128 => 40,  122 => 36,  120 => 35,  118 => 34,  111 => 30,  107 => 28,  105 => 27,  103 => 26,  99 => 24,  93 => 22,  91 => 21,  87 => 20,  84 => 19,  82 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  53 => 13,  51 => 12,  47 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/content/node--page--white-papers.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/content/node--page--white-papers.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 12, "for" => 13, "set" => 14];
        static $filters = ["escape" => 11, "trim" => 12, "render" => 12, "striptags" => 22, "raw" => 30, "default" => 45, "upper" => 123, "without" => 207];
        static $functions = ["file_url" => 50];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'trim', 'render', 'striptags', 'raw', 'default', 'upper', 'without'],
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
