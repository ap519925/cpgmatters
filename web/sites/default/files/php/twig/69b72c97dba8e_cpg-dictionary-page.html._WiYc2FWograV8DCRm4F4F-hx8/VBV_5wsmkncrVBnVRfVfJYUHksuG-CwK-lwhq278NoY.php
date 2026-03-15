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

/* modules/custom/cpg_register/templates/cpg-dictionary-page.html.twig */
class __TwigTemplate_5785249c14d8f373d4b6ade4e4007c7d extends Template
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
        yield "<div class=\"dictionary-page\">

  ";
        // line 11
        yield "  <div class=\"dict-hero\">
    <h1 class=\"dict-hero__title\">CPG Industry Dictionary</h1>
    <p class=\"dict-hero__subtitle\">Your comprehensive guide to consumer packaged goods terminology. From basic concepts to advanced industry jargon, we've got you covered.</p>
  </div>

  <div class=\"dict-container\">

    ";
        // line 19
        yield "    <div class=\"dict-filters\">
      <div class=\"dict-search-box\">
        <span class=\"dict-search-icon\">🔍</span>
        <input type=\"text\" class=\"dict-search-input\" id=\"dict-search\" placeholder=\"Search for a term... (e.g., SKU, slotting fee, velocity)\">
      </div>

      ";
        // line 26
        yield "      <div class=\"dict-alpha-nav\" id=\"dict-alpha-nav\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), "ABCDEFGHIJKLMNOPQRSTUVWXYZ", ""));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 28
            yield "          ";
            $context["is_active"] = CoreExtension::inFilter($context["letter"], ($context["available_letters"] ?? null));
            // line 29
            yield "          <a href=\"#letter-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["letter"], "html", null, true);
            yield "\"
             class=\"dict-alpha-link ";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["is_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-entries") : ("no-entries")));
            yield "\"
             ";
            // line 31
            if ((($tmp =  !($context["is_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "aria-disabled=\"true\"";
            }
            yield ">
            ";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["letter"], "html", null, true);
            yield "
          </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['letter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "      </div>

      ";
        // line 38
        yield "      <div class=\"dict-category-filters\">
        <span class=\"dict-filter-label\">Filter by topic:</span>
        <button class=\"dict-cat-btn active\" data-category=\"all\">All Terms</button>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 42
            yield "          <button class=\"dict-cat-btn\" data-category=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["category"]), [" " => "-"]), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["category"], "html", null, true);
            yield "</button>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "      </div>
    </div>

    ";
        // line 48
        yield "    <p class=\"dict-count\">Showing <strong id=\"dict-visible-count\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["total_count"] ?? null), "html", null, true);
        yield "</strong> terms</p>

    ";
        // line 51
        yield "    <div class=\"dict-entries\" id=\"dict-entries\">
      ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["grouped_terms"] ?? null));
        foreach ($context['_seq'] as $context["letter"] => $context["terms"]) {
            // line 53
            yield "        <div class=\"dict-letter-group\" id=\"letter-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["letter"], "html", null, true);
            yield "\" data-letter=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["letter"], "html", null, true);
            yield "\">
          <h2 class=\"dict-letter-heading\">";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["letter"], "html", null, true);
            yield "</h2>

          ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["terms"]);
            foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
                // line 57
                yield "            <div class=\"dict-entry-card\" data-category=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["term"], "category_class", [], "any", false, false, true, 57), "html", null, true);
                yield "\" data-title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["term"], "title", [], "any", false, false, true, 57)), "html", null, true);
                yield "\">
              <div class=\"dict-entry-header\">
                <h3 class=\"dict-entry-title\">";
                // line 59
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["term"], "title", [], "any", false, false, true, 59), "html", null, true);
                yield "</h3>
                ";
                // line 60
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["term"], "category", [], "any", false, false, true, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 61
                    yield "                  <span class=\"dict-category-badge badge--";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["term"], "category_class", [], "any", false, false, true, 61), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["term"], "category", [], "any", false, false, true, 61)), "html", null, true);
                    yield "</span>
                ";
                }
                // line 63
                yield "              </div>

              ";
                // line 65
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["term"], "full_name", [], "any", false, false, true, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 66
                    yield "                <p class=\"dict-entry-subtitle\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["term"], "full_name", [], "any", false, false, true, 66), "html", null, true);
                    yield "</p>
              ";
                }
                // line 68
                yield "
              <div class=\"dict-entry-body\">
                ";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["term"], "body", [], "any", false, false, true, 70));
                yield "
              </div>

              ";
                // line 73
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["term"], "example", [], "any", false, false, true, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 74
                    yield "                <div class=\"dict-example-box\">
                  <span class=\"dict-example-label\">EXAMPLE</span>
                  <p class=\"dict-example-text\">";
                    // line 76
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["term"], "example", [], "any", false, false, true, 76));
                    yield "</p>
                </div>
              ";
                }
                // line 79
                yield "
              <div class=\"dict-entry-footer\">
                ";
                // line 81
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["term"], "also_known", [], "any", false, false, true, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 82
                    yield "                  <span class=\"dict-also-known\">Also known as: ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["term"], "also_known", [], "any", false, false, true, 82), "html", null, true);
                    yield "</span>
                ";
                }
                // line 84
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["term"], "related_link_url", [], "any", false, false, true, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 85
                    yield "                  <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["term"], "related_link_url", [], "any", false, false, true, 85), "html", null, true);
                    yield "\" class=\"dict-related-link\">";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["term"], "related_link_title", [], "any", false, false, true, 85)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["term"], "related_link_title", [], "any", false, false, true, 85), "html", null, true)) : ("Related articles"));
                    yield " →</a>
                ";
                }
                // line 87
                yield "              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['term'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['letter'], $context['terms'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "    </div>

  </div>
</div>

";
        // line 98
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
  var searchInput = document.getElementById('dict-search');
  var catBtns = document.querySelectorAll('.dict-cat-btn');
  var cards = document.querySelectorAll('.dict-entry-card');
  var letterGroups = document.querySelectorAll('.dict-letter-group');
  var countEl = document.getElementById('dict-visible-count');
  var activeCategory = 'all';

  function filterTerms() {
    var query = searchInput.value.toLowerCase().trim();
    var visible = 0;

    cards.forEach(function(card) {
      var title = card.getAttribute('data-title');
      var category = card.getAttribute('data-category');
      var matchesSearch = !query || title.indexOf(query) !== -1 ||
        card.textContent.toLowerCase().indexOf(query) !== -1;
      var matchesCategory = activeCategory === 'all' || category === activeCategory;

      if (matchesSearch && matchesCategory) {
        card.style.display = '';
        visible++;
      } else {
        card.style.display = 'none';
      }
    });

    // Hide empty letter groups
    letterGroups.forEach(function(group) {
      var visibleCards = group.querySelectorAll('.dict-entry-card:not([style*=\"display: none\"])');
      group.style.display = visibleCards.length > 0 ? '' : 'none';
    });

    countEl.textContent = visible;
  }

  searchInput.addEventListener('input', filterTerms);

  catBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      catBtns.forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');
      activeCategory = btn.getAttribute('data-category');
      filterTerms();
    });
  });

  // Smooth scroll for alpha nav
  document.querySelectorAll('.dict-alpha-link.has-entries').forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      var target = document.querySelector(link.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
});
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["available_letters", "categories", "total_count", "grouped_terms"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/cpg_register/templates/cpg-dictionary-page.html.twig";
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
        return array (  258 => 98,  251 => 92,  244 => 90,  236 => 87,  228 => 85,  225 => 84,  219 => 82,  217 => 81,  213 => 79,  207 => 76,  203 => 74,  201 => 73,  195 => 70,  191 => 68,  185 => 66,  183 => 65,  179 => 63,  171 => 61,  169 => 60,  165 => 59,  157 => 57,  153 => 56,  148 => 54,  141 => 53,  137 => 52,  134 => 51,  128 => 48,  123 => 44,  112 => 42,  108 => 41,  103 => 38,  99 => 35,  90 => 32,  84 => 31,  80 => 30,  75 => 29,  72 => 28,  68 => 27,  65 => 26,  57 => 19,  48 => 11,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/cpg_register/templates/cpg-dictionary-page.html.twig", "/var/www/html/web/modules/custom/cpg_register/templates/cpg-dictionary-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 27, "set" => 28, "if" => 31];
        static $filters = ["split" => 27, "escape" => 29, "replace" => 42, "lower" => 42, "upper" => 61, "raw" => 70];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['split', 'escape', 'replace', 'lower', 'upper', 'raw'],
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
