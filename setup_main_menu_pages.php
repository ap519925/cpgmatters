<?php

/**
 * @file
 * Adds the Search Results and Directory pages to the main navigation menu.
 *
 * Run with: ddev drush php:script setup_main_menu_pages.php
 *
 * These menu links are fully editable from /admin/structure/menu/manage/main
 */

use Drupal\menu_link_content\Entity\MenuLinkContent;

$new_links = [
  [
    'title' => 'Search',
    'uri' => 'internal:/search-results',
    'weight' => 8,
  ],
  [
    'title' => 'Directory',
    'uri' => 'internal:/directory',
    'weight' => 9,
  ],
];

$storage = \Drupal::entityTypeManager()->getStorage('menu_link_content');

foreach ($new_links as $link_data) {
  // Check if already exists to avoid duplicates.
  $existing = $storage->loadByProperties([
    'menu_name' => 'main',
    'title' => $link_data['title'],
  ]);

  if (!empty($existing)) {
    echo "ℹ️  '{$link_data['title']}' already exists in main menu, skipping.\n";
    continue;
  }

  $menu_link = MenuLinkContent::create([
    'title' => $link_data['title'],
    'link' => ['uri' => $link_data['uri']],
    'menu_name' => 'main',
    'weight' => $link_data['weight'],
    'expanded' => FALSE,
  ]);
  $menu_link->save();
  echo "✅ Added '{$link_data['title']}' to main menu → {$link_data['uri']}\n";
}

echo "\n🎉 Done! You can reorder or edit these at /admin/structure/menu/manage/main\n";
