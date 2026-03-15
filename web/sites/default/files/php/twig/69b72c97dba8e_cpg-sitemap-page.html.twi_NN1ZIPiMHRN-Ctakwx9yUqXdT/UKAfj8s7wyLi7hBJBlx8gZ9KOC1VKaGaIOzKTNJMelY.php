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

/* modules/custom/cpg_register/templates/cpg-sitemap-page.html.twig */
class __TwigTemplate_79196cf5445d3c31e9fae4d4389a45f2 extends Template
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
        // line 9
        yield "<div class=\"sitemap-page\">

  ";
        // line 12
        yield "  <div class=\"sitemap-hero\">
    <h1 class=\"sitemap-hero__title\">Site Map</h1>
    <p class=\"sitemap-hero__subtitle\">Navigate through all sections of CPG Matters. Find articles, resources, tools, and more.</p>
  </div>

  <div class=\"sitemap-container\">

    ";
        // line 20
        yield "    <div class=\"sitemap-popular\">
      <h2 class=\"sitemap-popular__title\">Most Popular Destinations</h2>
      <div class=\"sitemap-popular__grid\">
        <a href=\"/\" class=\"sitemap-popular__card\">
          <span class=\"sitemap-popular__icon\">🏠</span>
          <span class=\"sitemap-popular__label\">Home Page</span>
        </a>
        <a href=\"/articles\" class=\"sitemap-popular__card\">
          <span class=\"sitemap-popular__icon\">📰</span>
          <span class=\"sitemap-popular__label\">Latest News</span>
        </a>
        <a href=\"/white-papers\" class=\"sitemap-popular__card\">
          <span class=\"sitemap-popular__icon\">📋</span>
          <span class=\"sitemap-popular__label\">White Papers</span>
        </a>
        <a href=\"/dictionary\" class=\"sitemap-popular__card\">
          <span class=\"sitemap-popular__icon\">📖</span>
          <span class=\"sitemap-popular__label\">Industry Dictionary</span>
        </a>
      </div>
    </div>

    ";
        // line 43
        yield "    <div class=\"sitemap-grid\">

      ";
        // line 46
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">🌐</span>
          <h3 class=\"sitemap-section-title\">Main Navigation</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/\">Home</a></li>
          <li><a href=\"/articles\">News &amp; Articles</a></li>
          <li><a href=\"/about-us\">About CPG Matters</a></li>
          <li><a href=\"/contact\">Contact Us</a></li>
          <li><a href=\"/register-step1\">Register / Sign Up</a></li>
          <li><a href=\"/user/login\">Sign In</a></li>
        </ul>
      </div>

      ";
        // line 62
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">📰</span>
          <h3 class=\"sitemap-section-title\">Content</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/articles\">All Articles</a></li>
          <li><a href=\"/articles?featured=1\">Featured Articles</a></li>
          <li><a href=\"/articles?type=breaking\">Breaking News</a></li>
          <li><a href=\"/articles?type=archive\">Archive</a></li>
        </ul>
        <h4 class=\"sitemap-subcategory-title\">By Category:</h4>
        <ul class=\"sitemap-links sitemap-links--sub\">
          <li><a href=\"/articles?category=sustainability\">Sustainability</a></li>
          <li><a href=\"/articles?category=e-commerce\">E-Commerce</a></li>
          <li><a href=\"/articles?category=innovation\">Innovation</a></li>
          <li><a href=\"/articles?category=supply-chain\">Supply Chain</a></li>
          <li><a href=\"/articles?category=marketing\">Marketing</a></li>
          <li><a href=\"/articles?category=finance\">Finance</a></li>
          <li><a href=\"/articles?category=technology\">Technology</a></li>
          <li><a href=\"/articles?category=leadership\">Leadership</a></li>
        </ul>
      </div>

      ";
        // line 87
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">📚</span>
          <h3 class=\"sitemap-section-title\">Resources</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/white-papers\">White Papers</a></li>
          <li><a href=\"/dictionary\">Industry Dictionary</a></li>
          <li><a href=\"/resources/reports\">Research Reports</a></li>
          <li><a href=\"/resources/case-studies\">Case Studies</a></li>
          <li><a href=\"/resources/webinars\">Webinars</a></li>
          <li><a href=\"/resources/infographics\">Infographics</a></li>
          <li><a href=\"/resources/ebooks\">E-Books</a></li>
          <li><a href=\"/resources/tools\">Templates &amp; Tools</a></li>
        </ul>
      </div>
    </div>

    ";
        // line 106
        yield "    <div class=\"sitemap-grid\">

      ";
        // line 109
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">🏢</span>
          <h3 class=\"sitemap-section-title\">Directory</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/directory\">Company Directory</a></li>
          <li><a href=\"/directory?type=brands\">Brands</a></li>
          <li><a href=\"/directory?type=agencies\">Agencies</a></li>
          <li><a href=\"/directory?type=data-providers\">Data Providers</a></li>
          <li><a href=\"/directory?type=suppliers\">Suppliers</a></li>
          <li><a href=\"/directory?type=manufacturers\">Manufacturers</a></li>
          <li><a href=\"/directory/claim\">Claim Your Profile</a></li>
        </ul>
      </div>

      ";
        // line 126
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">🎪</span>
          <h3 class=\"sitemap-section-title\">Events &amp; Community</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/events/lead-conference\">Lead Conference</a></li>
          <li><a href=\"/events/upcoming\">Upcoming Events</a></li>
          <li><a href=\"/events/past\">Past Events</a></li>
          <li><a href=\"/events/webinars\">Webinars</a></li>
          <li><a href=\"/community/networking\">Networking</a></li>
          <li><a href=\"/events/calendar\">Industry Calendar</a></li>
          <li><a href=\"/community/speakers\">Speaker Directory</a></li>
        </ul>
      </div>

      ";
        // line 143
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">💼</span>
          <h3 class=\"sitemap-section-title\">Business</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/advertise\">Advertise With Us</a></li>
          <li><a href=\"/advertise/banners\">Banner Advertising</a></li>
          <li><a href=\"/advertise/sponsored\">Sponsored Content</a></li>
          <li><a href=\"/media-kit\">Media Kit</a></li>
          <li><a href=\"/partnerships\">Partnership Opportunities</a></li>
          <li><a href=\"/rate-card\">Rate Card</a></li>
          <li><a href=\"/contact/sales\">Contact Sales</a></li>
        </ul>
      </div>
    </div>

    ";
        // line 161
        yield "    <div class=\"sitemap-grid\">

      ";
        // line 164
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">ℹ️</span>
          <h3 class=\"sitemap-section-title\">About</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/about-us\">About CPG Matters</a></li>
          <li><a href=\"/about-us#mission\">Our Mission</a></li>
          <li><a href=\"/about-us#team\">Our Team</a></li>
          <li><a href=\"/about-us#editorial\">Editorial Guidelines</a></li>
          <li><a href=\"/careers\">Careers</a></li>
          <li><a href=\"/press\">Press Room</a></li>
          <li><a href=\"/awards\">Awards &amp; Recognition</a></li>
        </ul>
      </div>

      ";
        // line 181
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">👤</span>
          <h3 class=\"sitemap-section-title\">My Account</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/user\">Dashboard</a></li>
          <li><a href=\"/user/profile\">My Profile</a></li>
          <li><a href=\"/user/saved\">Saved Articles</a></li>
          <li><a href=\"/user/history\">Reading History</a></li>
          <li><a href=\"/user/email-preferences\">Email Preferences</a></li>
          <li><a href=\"/user/subscriptions\">Subscription Settings</a></li>
          <li><a href=\"/user/notifications\">Notifications</a></li>
          <li><a href=\"/user/settings\">Account Settings</a></li>
        </ul>
      </div>

      ";
        // line 199
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">📩</span>
          <h3 class=\"sitemap-section-title\">Newsletters</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/newsletters/signup\">Newsletter Signup</a></li>
          <li><a href=\"/newsletters/daily\">Daily Briefing</a></li>
          <li><a href=\"/newsletters/weekly\">Weekly Roundup</a></li>
          <li><a href=\"/newsletters/insights\">Industry Insights</a></li>
          <li><a href=\"/newsletters/events\">Event Updates</a></li>
          <li><a href=\"/newsletters/manage\">Manage Subscriptions</a></li>
          <li><a href=\"/newsletters/archive\">Newsletter Archive</a></li>
        </ul>
      </div>
    </div>

    ";
        // line 217
        yield "    <div class=\"sitemap-grid\">

      ";
        // line 220
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">❓</span>
          <h3 class=\"sitemap-section-title\">Help &amp; Support</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/support/contact\">Contact Support</a></li>
          <li><a href=\"/support/faq\">FAQ</a></li>
          <li><a href=\"/support/help-center\">Help Center</a></li>
          <li><a href=\"/support/report\">Report an Issue</a></li>
          <li><a href=\"/support/feedback\">Feedback</a></li>
          <li><a href=\"/accessibility\">Accessibility</a></li>
        </ul>
      </div>

      ";
        // line 236
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">⚖️</span>
          <h3 class=\"sitemap-section-title\">Legal</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"/privacy-policy\">Privacy Policy</a></li>
          <li><a href=\"/terms-of-use\">Terms of Use</a></li>
          <li><a href=\"/cookie-policy\">Cookie Policy</a></li>
          <li><a href=\"/gdpr\">GDPR Compliance</a></li>
          <li><a href=\"/copyright\">Copyright Notice</a></li>
          <li><a href=\"/disclaimer\">Disclaimer</a></li>
        </ul>
      </div>

      ";
        // line 252
        yield "      <div class=\"sitemap-section-card\">
        <div class=\"sitemap-section-header\">
          <span class=\"sitemap-section-icon\">🌍</span>
          <h3 class=\"sitemap-section-title\">Connect</h3>
        </div>
        <ul class=\"sitemap-links\">
          <li><a href=\"https://linkedin.com\" target=\"_blank\" rel=\"noopener\">LinkedIn</a></li>
          <li><a href=\"https://twitter.com\" target=\"_blank\" rel=\"noopener\">Twitter</a></li>
          <li><a href=\"https://facebook.com\" target=\"_blank\" rel=\"noopener\">Facebook</a></li>
          <li><a href=\"https://instagram.com\" target=\"_blank\" rel=\"noopener\">Instagram</a></li>
          <li><a href=\"https://youtube.com\" target=\"_blank\" rel=\"noopener\">YouTube</a></li>
          <li><a href=\"/rss\">RSS Feeds</a></li>
        </ul>
      </div>
    </div>

  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/cpg_register/templates/cpg-sitemap-page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  305 => 252,  288 => 236,  271 => 220,  267 => 217,  248 => 199,  229 => 181,  211 => 164,  207 => 161,  188 => 143,  170 => 126,  152 => 109,  148 => 106,  128 => 87,  102 => 62,  85 => 46,  81 => 43,  57 => 20,  48 => 12,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/cpg_register/templates/cpg-sitemap-page.html.twig", "/var/www/html/web/modules/custom/cpg_register/templates/cpg-sitemap-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
