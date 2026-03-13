<?php
/**
 * Update existing article categories to match the newly requested list.
 */

$new_categories = [
  'Sustainability',
  'E-Commerce',
  'Innovation',
  'Supply Chain',
  'Marketing',
  'Finance',
  'Technology',
  'Leadership',
  'Retail',
  'Manufacturing',
];

// Ensure terms exist
$term_storage = \Drupal::entityTypeManager()->getStorage('taxonomy_term');
$term_ids = [];

foreach ($new_categories as $name) {
  $terms = $term_storage->loadByProperties(['name' => $name, 'vid' => 'tags']);
  if (empty($terms)) {
    $term = $term_storage->create([
      'vid' => 'tags',
      'name' => $name,
    ]);
    $term->save();
    $term_ids[] = $term->id();
  } else {
    $term = reset($terms);
    $term_ids[] = $term->id();
  }
}

// Update nodes
$node_storage = \Drupal::entityTypeManager()->getStorage('node');
$nids = $node_storage->getQuery()->condition('type', 'article')->accessCheck(FALSE)->execute();
$nodes = $node_storage->loadMultiple($nids);

$i = 0;
foreach ($nodes as $node) {
  // Assign a different category to each node from the list
  $tid = $term_ids[$i % count($term_ids)];
  $node->set('field_tags', ['target_id' => $tid]);
  $node->save();
  $i++;
}

echo "Categories updated successfully.\n";
