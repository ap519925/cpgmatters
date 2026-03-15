<?php

/**
 * @file
 * Creates the Register Step 1 and Step 2 page nodes with URL aliases.
 *
 * Run with: ddev drush php:script setup_register_pages.php
 */

use Drupal\node\Entity\Node;
use Drupal\path_alias\Entity\PathAlias;

function createOrLoadPage($title, $aliasPath) {
  $query = \Drupal::entityQuery('node')
    ->condition('type', 'page')
    ->condition('title', $title)
    ->accessCheck(FALSE)
    ->range(0, 1);
  $nids = $query->execute();

  if (!empty($nids)) {
    echo "{$title} page already exists (nid: " . reset($nids) . "). Skipping creation.\n";
    return Node::load(reset($nids));
  }
  else {
    $node = Node::create([
      'type' => 'page',
      'title' => $title,
      'body' => [
        'value' => '<!-- Template dictates the rendering entirely -->',
        'format' => 'full_html',
      ],
      'status' => 1,
      'uid' => 1,
    ]);
    $node->save();

    // Create URL alias.
    $alias = PathAlias::create([
    'path' => '/node/' . $node->id(),
    'alias' => $aliasPath,
    ]);
    $alias->save();

    echo "✓ Created {$title} page (nid: {$node->id()}) with alias {$aliasPath}\n";
    return $node;
  }
}

createOrLoadPage('Register Step 1', '/register-step1');
createOrLoadPage('Register Step 2', '/register-step2');

echo "\n✅ Registration pages setup complete!\n";
echo "Visit: /register-step1\n";
