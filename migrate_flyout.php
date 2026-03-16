<?php

$dir = __DIR__ . '/web/themes/custom/cpg_theme/templates/layout';
$files = glob($dir . '/*.html.twig');

$old_flyout = <<<'HTML'
    {# Mobile Flyout Menu Overlay #}
    <div class="mobile-menu-overlay"></div>
    <div class="mobile-flyout">
      <div class="mobile-flyout__header">
        {% if site_logo %}
          <img src="{{ site_logo }}" alt="CPG Matters" class="site-logo-img" style="max-height: 30px; width: auto; display: block;" />
        {% else %}
          <div class="site-title">CPG Matters</div>
        {% endif %}
        <button class="mobile-menu-close" aria-label="Close mobile menu">&times;</button>
      </div>
      <div class="mobile-flyout__nav">
        {{ page.primary_menu }}
      </div>
      <div class="mobile-flyout__actions">
        <a href="/register-step1" class="cpg-subscribe-btn" style="width: 100%; text-align: center; margin-bottom: 1rem;">Subscribe</a>
        <form action="/search/node" method="get" class="search-form" style="width: 100%;">
          <input type="search" name="keys" placeholder="Search..." class="form-search" style="width: 100%;" required>
        </form>
      </div>
    </div>
HTML;

$new_flyout = <<<'HTML'
    {# Floating Topics Menu Overlay #}
    <div class="mobile-menu-overlay"></div>
    <div class="mobile-flyout">
      <div class="mobile-flyout__header">
        <h2 class="mobile-flyout__title">Browse by Topic</h2>
        <button class="mobile-menu-close" aria-label="Close menu">&times;</button>
      </div>
      <div class="mobile-flyout__nav">
        <div class="topic-grid">
            <a href="/articles?category=sustainability" class="topic-card">
              <span class="topic-icon">🌱</span>
              <span class="topic-name">Sustainability</span>
              <span class="topic-count">23 white papers</span>
            </a>
            <a href="/articles?category=e-commerce" class="topic-card">
              <span class="topic-icon">🛒</span>
              <span class="topic-name">E-Commerce</span>
              <span class="topic-count">18 white papers</span>
            </a>
            <a href="/articles?category=supply-chain" class="topic-card">
              <span class="topic-icon">🚚</span>
              <span class="topic-name">Supply Chain</span>
              <span class="topic-count">31 white papers</span>
            </a>
            <a href="/articles?category=digital-marketing" class="topic-card">
              <span class="topic-icon">📱</span>
              <span class="topic-name">Digital Marketing</span>
              <span class="topic-count">26 white papers</span>
            </a>
            <a href="/articles?category=innovation" class="topic-card">
              <span class="topic-icon">💡</span>
              <span class="topic-name">Innovation</span>
              <span class="topic-count">19 white papers</span>
            </a>
            <a href="/articles?category=market-research" class="topic-card">
              <span class="topic-icon">📊</span>
              <span class="topic-name">Market Research</span>
              <span class="topic-count">28 white papers</span>
            </a>
            <a href="/articles?category=consumer-insights" class="topic-card">
              <span class="topic-icon">🎯</span>
              <span class="topic-name">Consumer Insights</span>
              <span class="topic-count">22 white papers</span>
            </a>
            <a href="/articles?category=ai-technology" class="topic-card">
              <span class="topic-icon">🤖</span>
              <span class="topic-name">AI & Technology</span>
              <span class="topic-count">15 white papers</span>
            </a>
        </div>
      </div>
    </div>
HTML;

foreach ($files as $file) {
    if (in_array(basename($file), ['html--register.html.twig', 'page--register.html.twig'])) {
        continue;
    }
    
    $content = file_get_contents($file);
    
    // Normalize newlines for strict replacement matching
    $normalized_content = str_replace("\r\n", "\n", $content);
    $normalized_old = str_replace("\r\n", "\n", $old_flyout);
    
    if (strpos($normalized_content, $normalized_old) !== false) {
        $content = str_replace($normalized_old, $new_flyout, $normalized_content);
        file_put_contents($file, $content);
        echo "Updated " . basename($file) . "\n";
    } else {
        echo "Could not find EXACT block in " . basename($file) . "\n";
    }
}
