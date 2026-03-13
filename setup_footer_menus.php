<?php

/**
 * @file
 * Sets up footer menus and places them as blocks in the footer regions.
 *
 * Run with: ddev drush php:script setup_footer_menus.php
 *
 * Creates 4 menus (About, Resources, Topics, Connect) with links,
 * and places them into the theme's footer regions so they are
 * fully editable from the Drupal admin dashboard.
 */

use Drupal\menu_link_content\Entity\MenuLinkContent;
use Drupal\system\Entity\Menu;
use Drupal\block\Entity\Block;

// ─── 1. Define the four footer menus and their links ───

$footer_menus = [
  'footer-about' => [
    'label' => 'About CPG Matters',
    'description' => 'Footer column: About links',
    'links' => [
      ['title' => 'About Us', 'uri' => 'internal:/about'],
      ['title' => 'Our Team', 'uri' => 'internal:/our-team'],
      ['title' => 'Careers', 'uri' => 'internal:/careers'],
      ['title' => 'Contact', 'uri' => 'internal:/contact'],
    ],
  ],
  'footer-resources' => [
    'label' => 'Resources',
    'description' => 'Footer column: Resources links',
    'links' => [
      ['title' => 'Archive', 'uri' => 'internal:/archive'],
      ['title' => 'Newsletter', 'uri' => 'internal:/newsletter'],
      ['title' => 'Events', 'uri' => 'internal:/events'],
      ['title' => 'Lead Conference', 'uri' => 'internal:/lead-conference'],
    ],
  ],
  'footer-topics' => [
    'label' => 'Topics',
    'description' => 'Footer column: Topics links',
    'links' => [
      ['title' => 'Sustainability', 'uri' => 'internal:/sustainability'],
      ['title' => 'E-Commerce', 'uri' => 'internal:/e-commerce'],
      ['title' => 'Innovation', 'uri' => 'internal:/innovation'],
      ['title' => 'Market Analysis', 'uri' => 'internal:/market-analysis'],
    ],
  ],
  'footer-connect' => [
    'label' => 'Connect',
    'description' => 'Footer column: Social & connect links',
    'links' => [
      ['title' => 'LinkedIn', 'uri' => 'https://linkedin.com'],
      ['title' => 'Twitter', 'uri' => 'https://twitter.com'],
      ['title' => 'Facebook', 'uri' => 'https://facebook.com'],
      ['title' => 'Instagram', 'uri' => 'https://instagram.com'],
    ],
  ],
];

// ─── 2. Create (or update) each menu and its links ───

foreach ($footer_menus as $menu_id => $menu_data) {
  // Create the menu if it doesn't exist.
  $menu = Menu::load($menu_id);
  if (!$menu) {
    $menu = Menu::create([
      'id' => $menu_id,
      'label' => $menu_data['label'],
      'description' => $menu_data['description'],
    ]);
    $menu->save();
    echo "✅ Created menu: {$menu_data['label']}\n";
  } else {
    echo "ℹ️  Menu already exists: {$menu_data['label']}\n";
  }

  // Delete existing links in this menu (so we can re-create them cleanly).
  $menu_link_manager = \Drupal::entityTypeManager()->getStorage('menu_link_content');
  $existing_links = $menu_link_manager->loadByProperties(['menu_name' => $menu_id]);
  foreach ($existing_links as $link) {
    $link->delete();
  }

  // Create fresh links with correct order.
  $weight = 0;
  foreach ($menu_data['links'] as $link_data) {
    $menu_link = MenuLinkContent::create([
      'title' => $link_data['title'],
      'link' => ['uri' => $link_data['uri']],
      'menu_name' => $menu_id,
      'weight' => $weight,
      'expanded' => FALSE,
    ]);
    $menu_link->save();
    $weight++;
  }
  echo "   Added " . count($menu_data['links']) . " links to {$menu_data['label']}\n";
}

// ─── 3. Place menu blocks in footer regions ───

$region_map = [
  'footer-about' => 'footer_first',
  'footer-resources' => 'footer_second',
  'footer-topics' => 'footer_third',
  'footer-connect' => 'footer_fourth',
];

$theme = 'cpg_theme';

foreach ($region_map as $menu_id => $region) {
  $block_id = str_replace('-', '_', $menu_id) . '_block';

  // Remove existing block if it exists.
  $existing_block = Block::load($block_id);
  if ($existing_block) {
    $existing_block->delete();
    echo "   Removed existing block: {$block_id}\n";
  }

  // Also remove any old "footer column" content blocks from this region.
  $all_blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties([
    'theme' => $theme,
    'region' => $region,
  ]);
  foreach ($all_blocks as $old_block) {
    echo "   Removing old block '{$old_block->id()}' from region {$region}\n";
    $old_block->delete();
  }

  // Create the new menu block in the footer region.
  $block = Block::create([
    'id' => $block_id,
    'theme' => $theme,
    'region' => $region,
    'weight' => 0,
    'plugin' => 'system_menu_block:' . $menu_id,
    'settings' => [
      'id' => 'system_menu_block:' . $menu_id,
      'label' => $footer_menus[$menu_id]['label'],
      'label_display' => 'visible',
      'provider' => 'system',
      'level' => 1,
      'depth' => 1,
      'expand_all_items' => FALSE,
    ],
    'visibility' => [],
  ]);
  $block->save();
  echo "✅ Placed '{$footer_menus[$menu_id]['label']}' menu block in region: {$region}\n";
}

// ─── 4. Ensure footer_bottom has the copyright block ───

$footer_bottom_id = 'cpg_footer_copyright';
$existing_copyright = Block::load($footer_bottom_id);
if ($existing_copyright) {
  $existing_copyright->delete();
}

// Remove any other blocks in footer_bottom region.
$bottom_blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties([
  'theme' => $theme,
  'region' => 'footer_bottom',
]);
foreach ($bottom_blocks as $old_block) {
  echo "   Removing old block '{$old_block->id()}' from footer_bottom\n";
  $old_block->delete();
}

// We'll use a custom block content for the footer bottom.
// First check if we have the block_content module.
$moduleHandler = \Drupal::moduleHandler();
if ($moduleHandler->moduleExists('block_content')) {
  // Check if 'basic' block type exists.
  $block_type = \Drupal::entityTypeManager()->getStorage('block_content_type')->load('basic');
  if (!$block_type) {
    // Create a basic block type.
    $block_type = \Drupal::entityTypeManager()->getStorage('block_content_type')->create([
      'id' => 'basic',
      'label' => 'Basic block',
      'description' => 'A basic block for simple content.',
    ]);
    $block_type->save();
    echo "✅ Created 'basic' block type\n";
  }

  // Check if the footer copyright content block already exists.
  $existing_content = \Drupal::entityTypeManager()->getStorage('block_content')
    ->loadByProperties(['info' => 'Footer Copyright']);
  
  if (!empty($existing_content)) {
    $copyright_content = reset($existing_content);
    echo "ℹ️  Footer copyright content block already exists\n";
  } else {
    // Create a block_content entity for the footer bottom.
    $copyright_content = \Drupal::entityTypeManager()->getStorage('block_content')->create([
      'type' => 'basic',
      'info' => 'Footer Copyright',
      'body' => [
        'value' => '<p>© 2026 CPG Matters. All rights reserved. | <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-use">Terms of Use</a></p>',
        'format' => 'full_html',
      ],
    ]);
    $copyright_content->save();
    echo "✅ Created footer copyright content block\n";
  }

  // Place the block.
  $block = Block::create([
    'id' => $footer_bottom_id,
    'theme' => $theme,
    'region' => 'footer_bottom',
    'weight' => 0,
    'plugin' => 'block_content:' . $copyright_content->uuid(),
    'settings' => [
      'id' => 'block_content:' . $copyright_content->uuid(),
      'label' => 'Footer Copyright',
      'label_display' => '0',
      'provider' => 'block_content',
    ],
    'visibility' => [],
  ]);
  $block->save();
  echo "✅ Placed copyright block in footer_bottom region\n";
} else {
  echo "⚠️  block_content module not enabled. Please enable it first.\n";
}

echo "\n🎉 Footer setup complete!\n";
echo "You can now edit footer menus at:\n";
echo "  - /admin/structure/menu/manage/footer-about\n";
echo "  - /admin/structure/menu/manage/footer-resources\n";
echo "  - /admin/structure/menu/manage/footer-topics\n";
echo "  - /admin/structure/menu/manage/footer-connect\n";
echo "And the copyright block at /admin/structure/block\n";
