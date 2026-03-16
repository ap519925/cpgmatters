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
        // line 14
        yield "  <section class=\"cpg-whitepapers__hero\">
    <h1 class=\"cpg-whitepapers__title\">";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>
    <p class=\"cpg-whitepapers__subtitle\">
      In-depth analysis, original research, and strategic insights from industry leaders. Download comprehensive<br>
      reports on the trends shaping the future of CPG.
    </p>
  </section>

  ";
        // line 23
        yield "  <section class=\"cpg-whitepapers__section cpg-whitepapers__topics\">
    <div class=\"cpg-whitepapers__section-header\">
      <h2>Browse by Topic</h2>
    </div>

    <div class=\"cpg-whitepapers__topics-grid\">
      <a href=\"#\" class=\"cpg-wp-topic-card\">
        <div class=\"topic-icon\">🌱</div>
        <h3>Sustainability</h3>
        <span class=\"topic-count\">23 white papers</span>
      </a>
      <a href=\"#\" class=\"cpg-wp-topic-card\">
        <div class=\"topic-icon\">🛒</div>
        <h3>E-Commerce</h3>
        <span class=\"topic-count\">18 white papers</span>
      </a>
      <a href=\"#\" class=\"cpg-wp-topic-card\">
        <div class=\"topic-icon\">🚚</div>
        <h3>Supply Chain</h3>
        <span class=\"topic-count\">31 white papers</span>
      </a>
      <a href=\"#\" class=\"cpg-wp-topic-card\">
        <div class=\"topic-icon\">📱</div>
        <h3>Digital Marketing</h3>
        <span class=\"topic-count\">26 white papers</span>
      </a>
      <a href=\"#\" class=\"cpg-wp-topic-card\">
        <div class=\"topic-icon\">💡</div>
        <h3>Innovation</h3>
        <span class=\"topic-count\">19 white papers</span>
      </a>
      <a href=\"#\" class=\"cpg-wp-topic-card\">
        <div class=\"topic-icon\">📊</div>
        <h3>Market Research</h3>
        <span class=\"topic-count\">28 white papers</span>
      </a>
      <a href=\"#\" class=\"cpg-wp-topic-card\">
        <div class=\"topic-icon\">🎯</div>
        <h3>Consumer Insights</h3>
        <span class=\"topic-count\">22 white papers</span>
      </a>
      <a href=\"#\" class=\"cpg-wp-topic-card\">
        <div class=\"topic-icon\">🤖</div>
        <h3>AI &amp; Technology</h3>
        <span class=\"topic-count\">15 white papers</span>
      </a>
    </div>
  </section>

  ";
        // line 73
        yield "  <section class=\"cpg-whitepapers__featured\">
    <div class=\"featured-card\">
      <div class=\"featured-content\">
        <span class=\"badge badge--featured\">FEATURED RESEARCH</span>
        <h2>The Future of Sustainable Packaging:<br>2026-2030 Outlook</h2>
        <p>This comprehensive 45-page report examines the transformation of packaging materials, analyzing emerging technologies, regulatory frameworks, and consumer preferences driving the shift toward sustainable solutions.</p>
        <div class=\"featured-meta\">
          <span>📄 45 pages</span>
          <span>📅 January 2026</span>
          <span>⭐ 4.8/5 (234 downloads)</span>
        </div>
        <a href=\"#\" class=\"btn btn--white\">Download Free Report &rarr;</a>
      </div>
      <div class=\"featured-image\">
        <div class=\"image-placeholder\">📊</div>
      </div>
    </div>
  </section>

  ";
        // line 93
        yield "  <section class=\"cpg-whitepapers__filters\">
    <div class=\"filters-left\">
      <div class=\"filter-group\">
        <label>Category:</label>
        <select><option>All Topics</option></select>
      </div>
      <div class=\"filter-group\">
        <label>Year:</label>
        <select><option>All Years</option></select>
      </div>
      <div class=\"filter-group\">
        <label>Sort by:</label>
        <select><option>Newest First</option></select>
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
        // line 117
        yield "  <section class=\"cpg-whitepapers__section cpg-whitepapers__popular\">
    <div class=\"cpg-whitepapers__section-header\">
      <h2>Popular White Papers</h2>
      <a href=\"#\" class=\"view-all\">View All &rarr;</a>
    </div>

    <div class=\"cpg-whitepapers__grid\">
      <!-- Card 1 -->
      <article class=\"wp-card\">
        <div class=\"wp-card__image\">
          <span class=\"wp-card__badge badge--free\">FREE</span>
          <div class=\"img-placeholder\">📄</div>
        </div>
        <div class=\"wp-card__content\">
          <div class=\"wp-card__category\">SUPPLY CHAIN</div>
          <h3 class=\"wp-card__title\">AI-Driven Logistics: Optimizing the Last Mile</h3>
          <p class=\"wp-card__excerpt\">Explore how machine learning and predictive analytics are revolutionizing final-mile delivery efficiency and customer satisfaction.</p>
          <div class=\"wp-card__footer\">
            <span class=\"wp-card__pages\">📄 32 pages</span>
            <a href=\"#\" class=\"btn btn--red btn--small\">Download &darr;</a>
          </div>
        </div>
      </article>

      <!-- Card 2 -->
      <article class=\"wp-card\">
        <div class=\"wp-card__image\">
          <span class=\"wp-card__badge badge--free\">FREE</span>
          <div class=\"img-placeholder\">📄</div>
        </div>
        <div class=\"wp-card__content\">
          <div class=\"wp-card__category\">E-COMMERCE</div>
          <h3 class=\"wp-card__title\">Direct-to-Consumer Strategies for 2026</h3>
          <p class=\"wp-card__excerpt\">Comprehensive analysis of DTC trends, consumer behavior shifts, and platform optimization strategies for maximum conversion.</p>
          <div class=\"wp-card__footer\">
            <span class=\"wp-card__pages\">📄 28 pages</span>
            <a href=\"#\" class=\"btn btn--red btn--small\">Download &darr;</a>
          </div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class=\"wp-card\">
        <div class=\"wp-card__image\">
          <span class=\"wp-card__badge badge--premium\">PREMIUM</span>
          <div class=\"img-placeholder\">📄</div>
        </div>
        <div class=\"wp-card__content\">
          <div class=\"wp-card__category\">CONSUMER INSIGHTS</div>
          <h3 class=\"wp-card__title\">Gen Z Purchase Behavior Study</h3>
          <p class=\"wp-card__excerpt\">Original research surveying 10,000+ consumers on brand preferences, values-based purchasing, and digital engagement patterns.</p>
          <div class=\"wp-card__footer\">
            <span class=\"wp-card__pages\">📄 56 pages</span>
            <a href=\"#\" class=\"btn btn--red btn--small\">Download &darr;</a>
          </div>
        </div>
      </article>

      <!-- Card 4 -->
      <article class=\"wp-card\">
        <div class=\"wp-card__image\">
          <span class=\"wp-card__badge badge--free\">FREE</span>
          <div class=\"img-placeholder\">📄</div>
        </div>
        <div class=\"wp-card__content\">
          <div class=\"wp-card__category\">SUSTAINABILITY</div>
          <h3 class=\"wp-card__title\">Circular Economy Implementation Guide</h3>
          <p class=\"wp-card__excerpt\">Step-by-step framework for implementing circular economy principles across product design, manufacturing, and distribution.</p>
          <div class=\"wp-card__footer\">
            <span class=\"wp-card__pages\">📄 41 pages</span>
            <a href=\"#\" class=\"btn btn--red btn--small\">Download &darr;</a>
          </div>
        </div>
      </article>

      <!-- Card 5 -->
      <article class=\"wp-card\">
        <div class=\"wp-card__image\">
          <span class=\"wp-card__badge badge--free\">FREE</span>
          <div class=\"img-placeholder\">📄</div>
        </div>
        <div class=\"wp-card__content\">
          <div class=\"wp-card__category\">DIGITAL MARKETING</div>
          <h3 class=\"wp-card__title\">Influencer ROI Measurement Framework</h3>
          <p class=\"wp-card__excerpt\">Data-driven methodology for tracking influencer campaign performance, attribution modeling, and budget optimization.</p>
          <div class=\"wp-card__footer\">
            <span class=\"wp-card__pages\">📄 24 pages</span>
            <a href=\"#\" class=\"btn btn--red btn--small\">Download &darr;</a>
          </div>
        </div>
      </article>

      <!-- Card 6 -->
      <article class=\"wp-card\">
        <div class=\"wp-card__image\">
          <span class=\"wp-card__badge badge--free\">FREE</span>
          <div class=\"img-placeholder\">📄</div>
        </div>
        <div class=\"wp-card__content\">
          <div class=\"wp-card__category\">INNOVATION</div>
          <h3 class=\"wp-card__title\">Plant-Based Product Development Trends</h3>
          <p class=\"wp-card__excerpt\">Market analysis and product innovation insights for brands entering or expanding in the plant-based category.</p>
          <div class=\"wp-card__footer\">
            <span class=\"wp-card__pages\">📄 38 pages</span>
            <a href=\"#\" class=\"btn btn--red btn--small\">Download &darr;</a>
          </div>
        </div>
      </article>

    </div>
  </section>

  ";
        // line 230
        yield "  <section class=\"cpg-whitepapers__newsletter\">
    <div class=\"newsletter-content\">
      <h2>Get New White Papers in Your Inbox</h2>
      <p>Be the first to access our latest research and insights. Subscribe to our white paper newsletter.</p>
      <form class=\"newsletter-form\">
        <input type=\"email\" placeholder=\"Your work email address...\" aria-label=\"Email Address\" />
        <button type=\"submit\" class=\"btn btn--red\">Join Now</button>
      </form>
    </div>
  </section>

</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "label"]);        yield from [];
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
        return array (  276 => 230,  162 => 117,  137 => 93,  116 => 73,  65 => 23,  55 => 15,  52 => 14,  47 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/content/node--page--white-papers.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/content/node--page--white-papers.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 11];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
