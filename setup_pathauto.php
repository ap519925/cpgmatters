<?php
/**
 * Set up Pathauto pattern for clean article URLs.
 * Run: ddev drush php:script setup_pathauto.php
 */

// Check if pathauto module is enabled
if (!\Drupal::moduleHandler()->moduleExists('pathauto')) {
    echo "Pathauto module is not enabled. Trying to enable it...\n";
    try {
        \Drupal::service('module_installer')->install(['pathauto']);
        echo "Pathauto module enabled successfully!\n";
    } catch (\Exception $e) {
        echo "Could not enable pathauto: " . $e->getMessage() . "\n";
        echo "You may need to run: ddev composer require drupal/pathauto\n";
        exit(1);
    }
}

// Create a URL pattern for articles: /article/[title]
$storage = \Drupal::entityTypeManager()->getStorage('pathauto_pattern');
$existing = $storage->loadByProperties(['id' => 'article_pattern']);

if (empty($existing)) {
    $pattern = $storage->create([
        'id' => 'article_pattern',
        'label' => 'Article URL Pattern',
        'type' => 'canonical_entities:node',
        'pattern' => 'article/[node:title]',
        'selection_criteria' => [],
        'selection_logic' => 'and',
        'weight' => 0,
    ]);
    
    // Add condition for article content type
    $pattern->addSelectionCondition([
        'id' => 'entity_bundle:node',
        'bundles' => ['article' => 'article'],
        'negate' => FALSE,
        'context_mapping' => [
            'node' => 'node',
        ],
    ]);
    
    $pattern->save();
    echo "Created article URL pattern: /article/[title]\n";
} else {
    echo "Article URL pattern already exists.\n";
}

// Now regenerate aliases for existing articles
echo "\nRegenerating URL aliases for existing articles...\n";
$nodes = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
    'type' => 'article',
]);

foreach ($nodes as $node) {
    // Delete old alias and create new one
    \Drupal::service('pathauto.generator')->updateEntityAlias($node, 'update');
    $alias = \Drupal::service('path_alias.manager')->getAliasByPath('/node/' . $node->id());
    echo "  Node " . $node->id() . ": " . $alias . "\n";
}

echo "\n=== Pathauto setup complete ===\n";
