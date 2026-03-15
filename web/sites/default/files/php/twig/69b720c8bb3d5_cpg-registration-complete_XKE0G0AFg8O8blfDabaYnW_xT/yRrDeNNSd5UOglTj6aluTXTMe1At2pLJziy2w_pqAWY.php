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

/* modules/custom/cpg_register/templates/cpg-registration-complete.html.twig */
class __TwigTemplate_d3f0f3f5bfa37347e69adc2f6ffc1e89 extends Template
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
        yield "<div class=\"cpg-register-wrapper\">
  <div class=\"registration-container registration-complete\">
    ";
        // line 11
        yield "    <div class=\"reg-complete-header\">
      <div class=\"envelope-circle\">
        <span class=\"envelope-icon\">✉️</span>
      </div>
      <h1 class=\"reg-complete-title\">Check your email!</h1>
      <p class=\"reg-complete-subtitle\">We've sent you a confirmation link</p>
    </div>

    ";
        // line 20
        yield "    <div class=\"reg-complete-content\">
      ";
        // line 22
        yield "      <div class=\"email-sent-box\">
        <span class=\"email-sent-label\">Confirmation email sent to:</span>
        <span class=\"email-sent-address\">";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true);
        yield "</span>
      </div>

      ";
        // line 28
        yield "      <div class=\"next-steps\">
        <h2 class=\"next-steps-title\">What happens next?</h2>

        <div class=\"step-item\">
          <span class=\"step-number\">1</span>
          <div class=\"step-content\">
            <h3 class=\"step-heading\">Check your inbox</h3>
            <p class=\"step-detail\">Look for an email from CPG Matters (noreply@cpgmatters.com). It should arrive within a few minutes.</p>
          </div>
        </div>

        <div class=\"step-item\">
          <span class=\"step-number\">2</span>
          <div class=\"step-content\">
            <h3 class=\"step-heading\">Click the confirmation link</h3>
            <p class=\"step-detail\">Open the email and click the \"Confirm Your Account\" button to activate your account.</p>
          </div>
        </div>

        <div class=\"step-item\">
          <span class=\"step-number\">3</span>
          <div class=\"step-content\">
            <h3 class=\"step-heading\">Start reading!</h3>
            <p class=\"step-detail\">Once confirmed, you'll have full access to all CPG Matters content, events, and resources.</p>
          </div>
        </div>
      </div>

      ";
        // line 57
        yield "      <div class=\"info-tip-box\">
        <span class=\"info-tip-icon\">💡</span>
        <h3 class=\"info-tip-title\">Can't find the email?</h3>
        <p class=\"info-tip-text\">Check your spam or junk folder. Sometimes confirmation emails end up there. If you still can't find it, you can request a new one below.</p>
      </div>

      ";
        // line 64
        yield "      <div class=\"resend-section\">
        <hr class=\"resend-divider\">
        <p class=\"resend-label\">Didn't receive the email?</p>
        <a href=\"/register-step1\" class=\"resend-btn\">Resend Confirmation Email</a>
      </div>
    </div>

    ";
        // line 72
        yield "    <div class=\"reg-complete-footer\">
      <p>Need help? <a href=\"/contact\" class=\"footer-link\">Contact our support team</a></p>
      <p>Or <a href=\"/\" class=\"footer-link\">return to homepage</a></p>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["email"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/cpg_register/templates/cpg-registration-complete.html.twig";
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
        return array (  118 => 72,  109 => 64,  101 => 57,  71 => 28,  65 => 24,  61 => 22,  58 => 20,  48 => 11,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/cpg_register/templates/cpg-registration-complete.html.twig", "/var/www/html/web/modules/custom/cpg_register/templates/cpg-registration-complete.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 24];
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
