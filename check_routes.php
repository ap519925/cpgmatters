<?php

// Check blocks in the 'content' region for cpg_theme
$theme = 'cpg_theme';
$blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties(['theme' => $theme, 'region' => 'content']);
echo "Blocks in 'content' region for theme '$theme':\n";
if (empty($blocks)) {
  echo "  (None)\n";
} else {
  foreach ($blocks as $block) {
    echo "  - " . $block->id() . " (Plugin: " . $block->getPluginId() . ") status: " . ($block->status() ? 'Enabled' : 'Disabled') . "\n";
  }
}

// Check route for /sitemap
$router_service = \Drupal::service('router.no_access_checks');
try {
  $match = $router_service->match('/sitemap');
  echo "\nRoute for /sitemap:\n";
  echo "Route name: " . $match['_route'] . "\n";
  if (isset($match['_controller'])) {
    echo "Controller: " . $match['_controller'] . "\n";
  }
} catch (\Exception $e) {
  echo "\nNo route matches /sitemap\n";
}

// Check route for /site-map (just in case)
try {
  $match = $router_service->match('/site-map');
  echo "\nRoute for /site-map:\n";
  echo "Route name: " . $match['_route'] . "\n";
  if (isset($match['_controller'])) {
    echo "Controller: " . $match['_controller'] . "\n";
  }
} catch (\Exception $e) {
}

// Check route for /contact
try {
  $match = $router_service->match('/contact');
  echo "\nRoute for /contact:\n";
  echo "Route name: " . $match['_route'] . "\n";
  if (isset($match['_controller'])) {
    echo "Controller: " . $match['_controller'] . "\n";
  }
  if (isset($match['_entity_form'])) {
    echo "Entity Form: " . $match['_entity_form'] . "\n";
  }
} catch (\Exception $e) {
  echo "\nNo route matches /contact\n";
}

