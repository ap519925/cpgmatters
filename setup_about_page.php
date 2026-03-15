<?php

/**
 * @file
 * Creates the About Us page node with a URL alias.
 *
 * Run with: ddev drush php:script setup_about_page.php
 */

use Drupal\node\Entity\Node;
use Drupal\path_alias\Entity\PathAlias;

// Check if an About Us page already exists.
$query = \Drupal::entityQuery('node')
  ->condition('type', 'page')
  ->condition('title', 'About Us')
  ->accessCheck(FALSE)
  ->range(0, 1);
$nids = $query->execute();

if (!empty($nids)) {
  echo "About Us page already exists (nid: " . reset($nids) . "). Skipping.\n";
}
else {
  // Create the About Us node.
  $node = Node::create([
    'type' => 'page',
    'title' => 'About Us',
    'body' => [
      'value' => '<p>The leading voice in consumer packaged goods.</p>',
      'format' => 'full_html',
    ],
    'status' => 1,
    'uid' => 1,
  ]);
  $node->save();

  // Create URL alias.
  $alias = PathAlias::create([
    'path' => '/node/' . $node->id(),
    'alias' => '/about-us',
  ]);
  $alias->save();

  echo "✓ Created About Us page (nid: {$node->id()}) with alias /about-us\n";
}

// Also add "About Us" to the main menu if not already there.
$menu_link_manager = \Drupal::service('plugin.manager.menu.link');
$existing = $menu_link_manager->loadLinksByRoute('entity.node.canonical', [], 'main');

$about_exists = FALSE;
foreach ($existing as $link) {
  $url = $link->getUrlObject();
  $params = $url->getRouteParameters();
  if (isset($params['node'])) {
    $node_obj = Node::load($params['node']);
    if ($node_obj && $node_obj->getTitle() === 'About Us') {
      $about_exists = TRUE;
      break;
    }
  }
}

if (!$about_exists) {
  // Check by URL path in menu_link_content
  $storage = \Drupal::entityTypeManager()->getStorage('menu_link_content');
  $links = $storage->loadByProperties([
    'menu_name' => 'main',
    'link__uri' => 'internal:/about-us',
  ]);

  if (empty($links)) {
    $menu_link = \Drupal\menu_link_content\Entity\MenuLinkContent::create([
      'title' => 'About Us',
      'link' => ['uri' => 'internal:/about-us'],
      'menu_name' => 'main',
      'weight' => 2,
    ]);
    $menu_link->save();
    echo "✓ Added 'About Us' to the main menu\n";
  } else {
    echo "About Us already in main menu. Skipping.\n";
  }
} else {
  echo "About Us already in main menu. Skipping.\n";
}

echo "\n✅ About page setup complete!\n";
echo "Visit: /about-us\n";
