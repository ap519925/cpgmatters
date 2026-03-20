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

/* themes/custom/cpg_theme/templates/content/node--page--about-us.html.twig */
class __TwigTemplate_17a3dec567419da2513d6274f758d148 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["cpg-about"], "method", false, false, true, 11), "html", null, true);
        yield ">
  ";
        // line 12
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 12)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "    ";
            // line 14
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 14));
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
                // line 15
                yield "      ";
                $context["p"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 15);
                // line 16
                yield "      ";
                $context["ptype"] = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "bundle", [], "method", false, false, true, 16);
                // line 17
                yield "
      ";
                // line 18
                if ((($context["ptype"] ?? null) == "cpg_hero")) {
                    // line 19
                    yield "        ";
                    // line 20
                    yield "        <section class=\"cpg-about__hero\">
          <h1 class=\"cpg-about__title\">";
                    // line 21
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), "html", null, true);
                    yield "</h1>
          ";
                    // line 22
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_subtitle", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 23
                        yield "            <p class=\"cpg-about__subtitle\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_subtitle", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23)), "html", null, true);
                        yield "</p>
          ";
                    }
                    // line 25
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 25), 0, [], "any", false, false, true, 25), "url", [], "any", false, false, true, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 26
                        yield "            <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 26), 0, [], "any", false, false, true, 26), "url", [], "any", false, false, true, 26), "html", null, true);
                        yield "\" class=\"cpg-about__cta-btn cpg-about__cta-btn--primary\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 26), 0, [], "any", false, false, true, 26), "title", [], "any", false, false, true, 26), "html", null, true);
                        yield "</a>
          ";
                    }
                    // line 28
                    yield "        </section>

      ";
                } elseif ((                // line 30
($context["ptype"] ?? null) == "cpg_text")) {
                    // line 31
                    yield "        ";
                    // line 32
                    yield "        <section class=\"cpg-about__section\">
          <div class=\"cpg-about__text\">
            ";
                    // line 34
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 34), "value", [], "any", false, false, true, 34));
                    yield "
          </div>
        </section>

      ";
                } elseif ((                // line 38
($context["ptype"] ?? null) == "cpg_stats_bar")) {
                    // line 39
                    yield "        ";
                    // line 40
                    yield "        ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 41
                        yield "          <h2 class=\"cpg-about__section-title\" style=\"text-align:center; margin-bottom: 1.5rem;\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), "html", null, true);
                        yield "</h2>
        ";
                    }
                    // line 43
                    yield "        <div class=\"cpg-about__stats\">
          ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_items", [], "any", false, false, true, 44));
                    foreach ($context['_seq'] as $context["_key"] => $context["stat_item"]) {
                        // line 45
                        yield "            ";
                        $context["stat"] = CoreExtension::getAttribute($this->env, $this->source, $context["stat_item"], "entity", [], "any", false, false, true, 45);
                        // line 46
                        yield "            <div class=\"cpg-about__stat\">
              <div class=\"cpg-about__stat-number\">";
                        // line 47
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stat"] ?? null), "field_p_icon", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), "html", null, true);
                        yield "</div>
              <div class=\"cpg-about__stat-label\">";
                        // line 48
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["stat"] ?? null), "field_p_title", [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48), "html", null, true);
                        yield "</div>
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['stat_item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    yield "        </div>

      ";
                } elseif ((                // line 53
($context["ptype"] ?? null) == "cpg_features")) {
                    // line 54
                    yield "        ";
                    // line 55
                    yield "        <section class=\"cpg-about__values\">
          ";
                    // line 56
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 57
                        yield "            <h2 class=\"cpg-about__section-title\" style=\"text-align:center;\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), "html", null, true);
                        yield "</h2>
          ";
                    }
                    // line 59
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_subtitle", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 60
                        yield "            <p class=\"cpg-about__subtitle\" style=\"text-align:center; margin-bottom: 2rem;\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_subtitle", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60)), "html", null, true);
                        yield "</p>
          ";
                    }
                    // line 62
                    yield "          <div class=\"cpg-about__values-grid\">
            ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_items", [], "any", false, false, true, 63));
                    foreach ($context['_seq'] as $context["_key"] => $context["feature_item"]) {
                        // line 64
                        yield "              ";
                        $context["feat"] = CoreExtension::getAttribute($this->env, $this->source, $context["feature_item"], "entity", [], "any", false, false, true, 64);
                        // line 65
                        yield "              <div class=\"cpg-about__value-card\">
                ";
                        // line 66
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["feat"] ?? null), "field_p_icon", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 67
                            yield "                  <div class=\"cpg-about__value-icon\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["feat"] ?? null), "field_p_icon", [], "any", false, false, true, 67), "value", [], "any", false, false, true, 67), "html", null, true);
                            yield "</div>
                ";
                        }
                        // line 69
                        yield "                <h3 class=\"cpg-about__value-title\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["feat"] ?? null), "field_p_title", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), "html", null, true);
                        yield "</h3>
                ";
                        // line 70
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["feat"] ?? null), "field_p_body", [], "any", false, false, true, 70), "value", [], "any", false, false, true, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 71
                            yield "                  <p class=\"cpg-about__value-desc\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["feat"] ?? null), "field_p_body", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71)), "html", null, true);
                            yield "</p>
                ";
                        }
                        // line 73
                        yield "              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['feature_item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    yield "          </div>
        </section>

      ";
                } elseif ((                // line 78
($context["ptype"] ?? null) == "cpg_team_grid")) {
                    // line 79
                    yield "        ";
                    // line 80
                    yield "        <section class=\"cpg-about__team\">
          ";
                    // line 81
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 82
                        yield "            <h2 class=\"cpg-about__team-title\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 82), "value", [], "any", false, false, true, 82), "html", null, true);
                        yield "</h2>
          ";
                    }
                    // line 84
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_subtitle", [], "any", false, false, true, 84), "value", [], "any", false, false, true, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 85
                        yield "            <p class=\"cpg-about__team-intro\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_subtitle", [], "any", false, false, true, 85), "value", [], "any", false, false, true, 85)), "html", null, true);
                        yield "</p>
          ";
                    }
                    // line 87
                    yield "          <div class=\"cpg-about__team-grid\">
            ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_items", [], "any", false, false, true, 88));
                    foreach ($context['_seq'] as $context["_key"] => $context["member_item"]) {
                        // line 89
                        yield "              ";
                        $context["member"] = CoreExtension::getAttribute($this->env, $this->source, $context["member_item"], "entity", [], "any", false, false, true, 89);
                        // line 90
                        yield "              <div class=\"cpg-about__team-member\">
                <div class=\"cpg-about__team-avatar\">
                  ";
                        // line 92
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "field_p_title", [], "any", false, false, true, 92), "value", [], "any", false, false, true, 92))), "html", null, true);
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "field_p_title", [], "any", false, false, true, 92), "value", [], "any", false, false, true, 92), " ")))), "html", null, true);
                        yield "
                </div>
                <h3 class=\"cpg-about__team-name\">";
                        // line 94
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "field_p_title", [], "any", false, false, true, 94), "value", [], "any", false, false, true, 94), "html", null, true);
                        yield "</h3>
                ";
                        // line 95
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "field_p_icon", [], "any", false, false, true, 95), "value", [], "any", false, false, true, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 96
                            yield "                  <div class=\"cpg-about__team-role\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "field_p_icon", [], "any", false, false, true, 96), "value", [], "any", false, false, true, 96), "html", null, true);
                            yield "</div>
                ";
                        }
                        // line 98
                        yield "                ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "field_p_body", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 99
                            yield "                  <p class=\"cpg-about__team-bio\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["member"] ?? null), "field_p_body", [], "any", false, false, true, 99), "value", [], "any", false, false, true, 99)), "html", null, true);
                            yield "</p>
                ";
                        }
                        // line 101
                        yield "              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['member_item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    yield "          </div>
        </section>

      ";
                } elseif ((                // line 106
($context["ptype"] ?? null) == "cpg_cta")) {
                    // line 107
                    yield "        ";
                    // line 108
                    yield "        <section class=\"cpg-about__cta\">
          ";
                    // line 109
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 109), "value", [], "any", false, false, true, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 110
                        yield "            <h2 class=\"cpg-about__cta-title\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 110), "value", [], "any", false, false, true, 110), "html", null, true);
                        yield "</h2>
          ";
                    }
                    // line 112
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 112), "value", [], "any", false, false, true, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 113
                        yield "            <p class=\"cpg-about__cta-text\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 113), "value", [], "any", false, false, true, 113)), "html", null, true);
                        yield "</p>
          ";
                    }
                    // line 115
                    yield "          <div class=\"cpg-about__cta-buttons\">
            ";
                    // line 116
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 116), 0, [], "any", false, false, true, 116), "url", [], "any", false, false, true, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 117
                        yield "              <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 117), 0, [], "any", false, false, true, 117), "url", [], "any", false, false, true, 117), "html", null, true);
                        yield "\" class=\"cpg-about__cta-btn cpg-about__cta-btn--primary\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_link", [], "any", false, false, true, 117), 0, [], "any", false, false, true, 117), "title", [], "any", false, false, true, 117), "html", null, true);
                        yield "</a>
            ";
                    }
                    // line 119
                    yield "            <a href=\"/contact\" class=\"cpg-about__cta-btn cpg-about__cta-btn--secondary\">CONTACT US</a>
          </div>
        </section>

      ";
                } elseif ((                // line 123
($context["ptype"] ?? null) == "cpg_quote")) {
                    // line 124
                    yield "        ";
                    // line 125
                    yield "        <blockquote class=\"cpg-about__quote\">
          ";
                    // line 126
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_body", [], "any", false, false, true, 126), "value", [], "any", false, false, true, 126));
                    yield "
          ";
                    // line 127
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 127), "value", [], "any", false, false, true, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 128
                        yield "            <cite>— ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "field_p_title", [], "any", false, false, true, 128), "value", [], "any", false, false, true, 128), "html", null, true);
                        yield "</cite>
          ";
                    }
                    // line 130
                    yield "        </blockquote>

      ";
                } else {
                    // line 133
                    yield "        ";
                    // line 134
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 134)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 134)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 134), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 134), [], "array", false, false, true, 134)), "html", null, true);
                    yield "
      ";
                }
                // line 136
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
            // line 138
            yield "  ";
        }
        // line 139
        yield "
  ";
        // line 141
        yield "  ";
        if ((Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 141))) &&  !Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_cpg_paragraphs", [], "any", false, false, true, 141))))) {
            // line 142
            yield "    <div class=\"cpg-about__body-fallback\">
      ";
            // line 143
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 143), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 146
        yield "
  <div class=\"hidden\">
    ";
        // line 148
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
        return "themes/custom/cpg_theme/templates/content/node--page--about-us.html.twig";
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
        return array (  433 => 148,  429 => 146,  423 => 143,  420 => 142,  417 => 141,  414 => 139,  411 => 138,  396 => 136,  390 => 134,  388 => 133,  383 => 130,  377 => 128,  375 => 127,  371 => 126,  368 => 125,  366 => 124,  364 => 123,  358 => 119,  350 => 117,  348 => 116,  345 => 115,  339 => 113,  336 => 112,  330 => 110,  328 => 109,  325 => 108,  323 => 107,  321 => 106,  316 => 103,  309 => 101,  303 => 99,  300 => 98,  294 => 96,  292 => 95,  288 => 94,  282 => 92,  278 => 90,  275 => 89,  271 => 88,  268 => 87,  262 => 85,  259 => 84,  253 => 82,  251 => 81,  248 => 80,  246 => 79,  244 => 78,  239 => 75,  232 => 73,  226 => 71,  224 => 70,  219 => 69,  213 => 67,  211 => 66,  208 => 65,  205 => 64,  201 => 63,  198 => 62,  192 => 60,  189 => 59,  183 => 57,  181 => 56,  178 => 55,  176 => 54,  174 => 53,  170 => 51,  161 => 48,  157 => 47,  154 => 46,  151 => 45,  147 => 44,  144 => 43,  138 => 41,  135 => 40,  133 => 39,  131 => 38,  124 => 34,  120 => 32,  118 => 31,  116 => 30,  112 => 28,  104 => 26,  101 => 25,  95 => 23,  93 => 22,  89 => 21,  86 => 20,  84 => 19,  82 => 18,  79 => 17,  76 => 16,  73 => 15,  55 => 14,  53 => 13,  51 => 12,  47 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/content/node--page--about-us.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/content/node--page--about-us.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 12, "for" => 14, "set" => 15];
        static $filters = ["escape" => 11, "trim" => 12, "render" => 12, "striptags" => 23, "raw" => 34, "upper" => 92, "first" => 92, "last" => 92, "split" => 92, "without" => 148];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'trim', 'render', 'striptags', 'raw', 'upper', 'first', 'last', 'split', 'without'],
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
