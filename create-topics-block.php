<?php

use Drupal\block_content\Entity\BlockContent;
use Drupal\block\Entity\Block;

// HTML for the Topic Sidebar
$html = '<nav class="topic-sidebar" aria-label="Browse by topic">
  <a href="/search?topic=sustainability" class="topic-sidebar__icon" data-topic="sustainability" aria-label="Sustainability">
    <span class="topic-sidebar__emoji">🌱</span>
    <span class="topic-sidebar__tooltip">Sustainability</span>
  </a>
  <a href="/search?topic=e-commerce" class="topic-sidebar__icon" data-topic="e-commerce" aria-label="E-Commerce">
    <span class="topic-sidebar__emoji">🛒</span>
    <span class="topic-sidebar__tooltip">E-Commerce</span>
  </a>
  <a href="/search?topic=innovation" class="topic-sidebar__icon" data-topic="innovation" aria-label="Innovation">
    <span class="topic-sidebar__emoji">💡</span>
    <span class="topic-sidebar__tooltip">Innovation</span>
  </a>
  <a href="/search?topic=supply-chain" class="topic-sidebar__icon" data-topic="supply-chain" aria-label="Supply Chain">
    <span class="topic-sidebar__emoji">📦</span>
    <span class="topic-sidebar__tooltip">Supply Chain</span>
  </a>
  <a href="/search?topic=marketing" class="topic-sidebar__icon" data-topic="marketing" aria-label="Marketing">
    <span class="topic-sidebar__emoji">📱</span>
    <span class="topic-sidebar__tooltip">Marketing</span>
  </a>
  <a href="/search?topic=finance" class="topic-sidebar__icon" data-topic="finance" aria-label="Finance">
    <span class="topic-sidebar__emoji">💰</span>
    <span class="topic-sidebar__tooltip">Finance</span>
  </a>
  <a href="/search?topic=technology" class="topic-sidebar__icon" data-topic="technology" aria-label="Technology">
    <span class="topic-sidebar__emoji">🔧</span>
    <span class="topic-sidebar__tooltip">Technology</span>
  </a>
  <a href="/search?topic=leadership" class="topic-sidebar__icon" data-topic="leadership" aria-label="Leadership">
    <span class="topic-sidebar__emoji">👔</span>
    <span class="topic-sidebar__tooltip">Leadership</span>
  </a>
  <a href="/search?topic=retail" class="topic-sidebar__icon" data-topic="retail" aria-label="Retail">
    <span class="topic-sidebar__emoji">🏪</span>
    <span class="topic-sidebar__tooltip">Retail</span>
  </a>
  <a href="/search?topic=manufacturing" class="topic-sidebar__icon" data-topic="manufacturing" aria-label="Manufacturing">
    <span class="topic-sidebar__emoji">🏭</span>
    <span class="topic-sidebar__tooltip">Manufacturing</span>
  </a>
</nav>';

// Create the custom block content
$block_content = BlockContent::create([
  'info' => 'Floating Topic Sidebar',
  'type' => 'basic',
  'body' => [
    'value' => $html,
    'format' => 'full_html',
  ],
]);
$block_content->save();
echo "Created topic sidebar custom block.\n";

// Place the block in the 'mobile_topics' region for the cpg_theme theme
$block_placement = Block::create([
  'id' => 'cpg_theme_floating_topics',
  'theme' => 'cpg_theme',
  'region' => 'mobile_topics',
  'plugin' => 'block_content:' . $block_content->uuid(),
  'settings' => [
    'label' => 'Floating Topic Sidebar',
    'label_display' => '0',
  ],
  'weight' => 0,
]);
$block_placement->save();
echo "Placed topic sidebar in 'mobile_topics' region.\n";

// Ensure 'system_branding_block' isn't missing. We are passing site_slogan manually, so we don't strictly need a block placement for it.

// Let's also check if "Navigation" string in mobile menu drawer is hardcoded
// It is part of the layout. Let's fix it by relying on the Menu block title.
?>
