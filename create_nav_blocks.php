<?php
// Subscribe Button
$subscribe_block = \Drupal\block_content\Entity\BlockContent::create([
  'info' => 'Subscribe Button',
  'type' => 'basic',
  'body' => [
    'value' => '<a href="/register-step1" class="cpg-subscribe-btn">Subscribe</a>',
    'format' => 'full_html',
  ],
]);
$subscribe_block->save();

\Drupal\block\Entity\Block::create([
  'id' => 'subscribebutton',
  'theme' => 'cpg_theme',
  'weight' => 0,
  'plugin' => 'block_content:' . $subscribe_block->uuid(),
  'region' => 'header_actions',
  'settings' => ['label_display' => '0'],
])->save();

// Search Form
$search_block = \Drupal\block_content\Entity\BlockContent::create([
  'info' => 'Header Search Form',
  'type' => 'basic',
  'body' => [
    'value' => '<form action="/search/node" method="get" class="search-form"><input type="search" name="keys" placeholder="Search articles..." class="form-search" required><button type="submit" class="form-submit">Search</button></form>',
    'format' => 'full_html',
  ],
]);
$search_block->save();

\Drupal\block\Entity\Block::create([
  'id' => 'headersearchform',
  'theme' => 'cpg_theme',
  'weight' => 10,
  'plugin' => 'block_content:' . $search_block->uuid(),
  'region' => 'header_actions',
  'settings' => ['label_display' => '0'],
])->save();


// Mobile Topics
$mobile_topics_block = \Drupal\block_content\Entity\BlockContent::create([
  'info' => 'Mobile Topics',
  'type' => 'basic',
  'body' => [
    'value' => '        <div class="topic-grid">
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
              <span class="topic-name">AI &amp; Technology</span>
              <span class="topic-count">15 white papers</span>
            </a>
        </div>',
    'format' => 'full_html',
  ],
]);
$mobile_topics_block->save();

\Drupal\block\Entity\Block::create([
  'id' => 'mobiletopics',
  'theme' => 'cpg_theme',
  'weight' => 0,
  'plugin' => 'block_content:' . $mobile_topics_block->uuid(),
  'region' => 'mobile_topics',
  'settings' => ['label_display' => '0'],
])->save();

// Mobile Nav
$mobile_nav_block = \Drupal\block_content\Entity\BlockContent::create([
  'info' => 'Mobile Drawer Navigation',
  'type' => 'basic',
  'body' => [
    'value' => '    <div class="mobile-nav-drawer__search">
      <form action="/search/node" method="get" class="mobile-nav-search-form">
        <input type="search" name="keys" placeholder="Search articles..." required>
        <button type="submit">🔍</button>
      </form>
    </div>

    <ul class="mobile-nav-list">
      <li class="mobile-nav-list__item">
        <a href="/" class="mobile-nav-list__link">
          <span class="mobile-nav-list__icon">🏠</span>
          <span class="mobile-nav-list__text">Home</span>
          <span class="mobile-nav-list__arrow">›</span>
        </a>
      </li>
      <li class="mobile-nav-list__item">
        <a href="/articles" class="mobile-nav-list__link">
          <span class="mobile-nav-list__icon">📰</span>
          <span class="mobile-nav-list__text">Articles</span>
          <span class="mobile-nav-list__arrow">›</span>
        </a>
      </li>
      <li class="mobile-nav-list__item">
        <a href="/white-papers" class="mobile-nav-list__link">
          <span class="mobile-nav-list__icon">📄</span>
          <span class="mobile-nav-list__text">White Papers</span>
          <span class="mobile-nav-list__arrow">›</span>
        </a>
      </li>
      <li class="mobile-nav-list__item">
        <a href="/directory" class="mobile-nav-list__link">
          <span class="mobile-nav-list__icon">📁</span>
          <span class="mobile-nav-list__text">Directory</span>
          <span class="mobile-nav-list__arrow">›</span>
        </a>
      </li>
      <li class="mobile-nav-list__item">
        <a href="/about-us" class="mobile-nav-list__link">
          <span class="mobile-nav-list__icon">ℹ️</span>
          <span class="mobile-nav-list__text">About Us</span>
          <span class="mobile-nav-list__arrow">›</span>
        </a>
      </li>
      <li class="mobile-nav-list__item">
        <a href="/contact" class="mobile-nav-list__link">
          <span class="mobile-nav-list__icon">✉️</span>
          <span class="mobile-nav-list__text">Contact</span>
          <span class="mobile-nav-list__arrow">›</span>
        </a>
      </li>
    </ul>

    <div class="mobile-nav-drawer__cta">
      <a href="/register-step1" class="mobile-nav-drawer__subscribe">✨ Subscribe Now</a>
    </div>',
    'format' => 'full_html',
  ],
]);
$mobile_nav_block->save();

\Drupal\block\Entity\Block::create([
  'id' => 'mobiledrawernavigation',
  'theme' => 'cpg_theme',
  'weight' => 0,
  'plugin' => 'block_content:' . $mobile_nav_block->uuid(),
  'region' => 'mobile_nav',
  'settings' => ['label_display' => '0'],
])->save();

echo "Blocks created.\n";
