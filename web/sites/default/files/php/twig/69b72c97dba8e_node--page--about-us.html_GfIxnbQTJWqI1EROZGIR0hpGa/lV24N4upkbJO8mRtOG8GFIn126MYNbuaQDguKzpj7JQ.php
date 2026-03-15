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
class __TwigTemplate_b0cca1ccee86447b7eb2d8a008a3e911 extends Template
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
        // line 14
        yield "
<article";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["cpg-about"], "method", false, false, true, 15), "html", null, true);
        yield ">

  ";
        // line 18
        yield "  <section class=\"cpg-about__hero\">
    <h1 class=\"cpg-about__title\">";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>
    <p class=\"cpg-about__subtitle\">
      The leading voice in consumer packaged goods, delivering insights, analysis, and
      innovation stories that matter to industry professionals worldwide.
    </p>
  </section>

  ";
        // line 27
        yield "  <section class=\"cpg-about__section\">
    <h2 class=\"cpg-about__section-title\">Our Story</h2>
    <div class=\"cpg-about__text\">
      <p>Founded in 2015, <strong>CPG Matters</strong> emerged from a simple observation: the consumer packaged goods industry needed a dedicated platform that went beyond surface-level news to deliver deep, actionable insights that drive business decisions.</p>
      <p>What started as a monthly newsletter has evolved into a comprehensive multimedia platform serving over 150,000 industry professionals across brands, agencies, retailers, and service providers. Our team of experienced journalists and industry analysts works tirelessly to uncover the trends, innovations, and strategic moves shaping the future of CPG.</p>
    </div>

    <blockquote class=\"cpg-about__quote\">
      <p>\"Our mission is to empower CPG professionals with the knowledge, connections, and insights they need to drive innovation, navigate change, and build sustainable, successful businesses in an ever-evolving marketplace.\"</p>
    </blockquote>
  </section>

  ";
        // line 40
        yield "  <section class=\"cpg-about__section\">
    <h2 class=\"cpg-about__section-title\">What We Do</h2>
    <div class=\"cpg-about__text\">
      <p>CPG Matters provides comprehensive coverage of the consumer packaged goods industry through multiple channels and formats. Our editorial team produces in-depth features, breaking news, trend analysis, and executive interviews that give you a competitive edge.</p>
      <p>Beyond our digital publication, we host industry events, produce original research, and maintain the industry's most comprehensive directory of brands, agencies, and service providers. Our annual Lead Conference brings together top executives to discuss the future of the industry.</p>
    </div>
  </section>

  ";
        // line 49
        yield "  <section class=\"cpg-about__values\">
    <h2 class=\"cpg-about__section-title\">Our Values</h2>
    <div class=\"cpg-about__values-grid\">
      <div class=\"cpg-about__value-card\">
        <div class=\"cpg-about__value-icon\">🎯</div>
        <h3 class=\"cpg-about__value-title\">Accuracy</h3>
        <p class=\"cpg-about__value-desc\">We are committed to rigorous fact-checking and objective reporting that our readers can trust.</p>
      </div>
      <div class=\"cpg-about__value-card\">
        <div class=\"cpg-about__value-icon\">💡</div>
        <h3 class=\"cpg-about__value-title\">Innovation</h3>
        <p class=\"cpg-about__value-desc\">We constantly evolve our coverage and platform to meet the changing needs of our industry.</p>
      </div>
      <div class=\"cpg-about__value-card\">
        <div class=\"cpg-about__value-icon\">🤝</div>
        <h3 class=\"cpg-about__value-title\">Community</h3>
        <p class=\"cpg-about__value-desc\">We foster connections and dialogue among CPG professionals at all levels and across all sectors.</p>
      </div>
    </div>
  </section>

  ";
        // line 71
        yield "  <section class=\"cpg-about__stats\">
    <div class=\"cpg-about__stat\">
      <div class=\"cpg-about__stat-number\">150K+</div>
      <div class=\"cpg-about__stat-label\">Monthly Readers</div>
    </div>
    <div class=\"cpg-about__stat\">
      <div class=\"cpg-about__stat-number\">500+</div>
      <div class=\"cpg-about__stat-label\">Articles Published</div>
    </div>
    <div class=\"cpg-about__stat\">
      <div class=\"cpg-about__stat-number\">75+</div>
      <div class=\"cpg-about__stat-label\">Industry Events</div>
    </div>
    <div class=\"cpg-about__stat\">
      <div class=\"cpg-about__stat-number\">1,200+</div>
      <div class=\"cpg-about__stat-label\">Companies Profiled</div>
    </div>
  </section>

  ";
        // line 91
        yield "  <section class=\"cpg-about__team\">
    <h2 class=\"cpg-about__team-title\">Our Team</h2>
    <p class=\"cpg-about__team-intro\">Our editorial team combines decades of journalism experience with deep industry expertise to deliver the insights you need.</p>

    <div class=\"cpg-about__team-grid\">
      <div class=\"cpg-about__team-member\">
        <div class=\"cpg-about__team-avatar\">SM</div>
        <div class=\"cpg-about__team-name\">Sarah Mitchell</div>
        <div class=\"cpg-about__team-role\">Editor-in-Chief</div>
        <div class=\"cpg-about__team-bio\">15+ years covering CPG innovation and sustainability initiatives.</div>
      </div>
      <div class=\"cpg-about__team-member\">
        <div class=\"cpg-about__team-avatar\">MC</div>
        <div class=\"cpg-about__team-name\">Michael Chen</div>
        <div class=\"cpg-about__team-role\">Senior Editor</div>
        <div class=\"cpg-about__team-bio\">Technology and supply chain specialist with MBA from Wharton.</div>
      </div>
      <div class=\"cpg-about__team-member\">
        <div class=\"cpg-about__team-avatar\">ER</div>
        <div class=\"cpg-about__team-name\">Emily Rodriguez</div>
        <div class=\"cpg-about__team-role\">Managing Editor</div>
        <div class=\"cpg-about__team-bio\">Former brand manager at Fortune 500 CPG company.</div>
      </div>
      <div class=\"cpg-about__team-member\">
        <div class=\"cpg-about__team-avatar\">DP</div>
        <div class=\"cpg-about__team-name\">David Park</div>
        <div class=\"cpg-about__team-role\">Digital Director</div>
        <div class=\"cpg-about__team-bio\">Digital strategy expert focused on audience growth and engagement.</div>
      </div>
    </div>
  </section>

  ";
        // line 124
        yield "  <section class=\"cpg-about__cta\">
    <h2 class=\"cpg-about__cta-title\">Join the CPG Matters Community</h2>
    <p class=\"cpg-about__cta-text\">
      Get exclusive insights, industry analysis, and breaking news delivered to your inbox.
      Subscribe today and stay ahead of the curve.
    </p>
    <div class=\"cpg-about__cta-buttons\">
      <a href=\"/register-step1\" class=\"cpg-about__cta-btn cpg-about__cta-btn--primary\">Subscribe Now</a>
      <a href=\"/contact\" class=\"cpg-about__cta-btn cpg-about__cta-btn--secondary\">Contact Us</a>
    </div>
  </section>

  ";
        // line 137
        yield "  <section class=\"cpg-about__section\">
    <h2 class=\"cpg-about__section-title\">What We Cover</h2>
    <div class=\"cpg-about__text\">
      <p>Our editorial focus spans the full spectrum of consumer packaged goods, including:</p>
    </div>
    <div class=\"cpg-about__topics\">
      <p class=\"cpg-about__topic\">
        <span class=\"cpg-about__topic-name\">Sustainability &amp; ESG:</span>
        Environmental initiatives, sustainable packaging, circular economy strategies, and corporate responsibility programs.
      </p>
      <p class=\"cpg-about__topic\">
        <span class=\"cpg-about__topic-name\">Innovation &amp; Product Development:</span>
        New product launches, R&amp;D trends, consumer insights, and emerging categories.
      </p>
      <p class=\"cpg-about__topic\">
        <span class=\"cpg-about__topic-name\">Marketing &amp; Brand Strategy:</span>
        Digital marketing, brand positioning, influencer partnerships, and consumer engagement tactics.
      </p>
      <p class=\"cpg-about__topic\">
        <span class=\"cpg-about__topic-name\">Supply Chain &amp; Operations:</span>
        Logistics optimization, manufacturing innovations, automation, and distribution strategies.
      </p>
      <p class=\"cpg-about__topic\">
        <span class=\"cpg-about__topic-name\">E-Commerce &amp; Retail:</span>
        Direct-to-consumer strategies, omnichannel retail, marketplace dynamics, and shopper behavior.
      </p>
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
        return array (  181 => 137,  167 => 124,  133 => 91,  112 => 71,  89 => 49,  79 => 40,  65 => 27,  55 => 19,  52 => 18,  47 => 15,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/cpg_theme/templates/content/node--page--about-us.html.twig", "/var/www/html/web/themes/custom/cpg_theme/templates/content/node--page--about-us.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 15];
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
