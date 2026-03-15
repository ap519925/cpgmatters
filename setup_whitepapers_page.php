<?php

/**
 * @file
 * Creates the White Papers page node with a URL alias.
 *
 * Run with: ddev drush php:script setup_whitepapers_page.php
 */

use Drupal\node\Entity\Node;
use Drupal\path_alias\Entity\PathAlias;

// Check if a White Papers page already exists.
$query = \Drupal::entityQuery('node')
  ->condition('type', 'page')
  ->condition('title', 'White Papers')
  ->accessCheck(FALSE)
  ->range(0, 1);
$nids = $query->execute();

if (!empty($nids)) {
  echo "White Papers page already exists (nid: " . reset($nids) . "). Skipping.\n";
}
else {
  // Create the White Papers node.
  $node = Node::create([
    'type' => 'page',
    'title' => 'White Papers',
    'body' => [
      'value' => '<p>White Papers and Research</p>',
      'format' => 'full_html',
    ],
    'status' => 1,
    'uid' => 1,
  ]);
  $node->save();

  // Create URL alias.
  $alias = PathAlias::create([
    'path' => '/node/' . $node->id(),
    'alias' => '/white-papers',
  ]);
  $alias->save();

  echo "✓ Created White Papers page (nid: {$node->id()}) with alias /white-papers\n";
}

// Also add "White Papers" to the main menu if not already there.
$menu_link_manager = \Drupal::service('plugin.manager.menu.link');
$existing = $menu_link_manager->loadLinksByRoute('entity.node.canonical', [], 'main');

$wp_exists = FALSE;
foreach ($existing as $link) {
  $url = $link->getUrlObject();
  $params = $url->getRouteParameters();
  if (isset($params['node'])) {
    $node_obj = Node::load($params['node']);
    if ($node_obj && $node_obj->getTitle() === 'White Papers') {
      $wp_exists = TRUE;
      break;
    }
  }
}

if (!$wp_exists) {
  // Check by URL path in menu_link_content
  $storage = \Drupal::entityTypeManager()->getStorage('menu_link_content');
  $links = $storage->loadByProperties([
    'menu_name' => 'main',
    'link__uri' => 'internal:/white-papers',
  ]);

  if (empty($links)) {
    $menu_link = \Drupal\menu_link_content\Entity\MenuLinkContent::create([
      'title' => 'WHITE PAPERS',
      'link' => ['uri' => 'internal:/white-papers'],
      'menu_name' => 'main',
      'weight' => 5, // Near the end, after Lead Conference
    ]);
    $menu_link->save();
    echo "✓ Added 'WHITE PAPERS' to the main menu\n";
  } else {
    echo "White Papers already in main menu. Skipping.\n";
  }
} else {
  echo "White Papers already in main menu. Skipping.\n";
}

echo "\n✅ White Papers page setup complete!\n";
echo "Visit: /white-papers\n";
