<?php

/**
 * Check what paragraphs are attached to the About Us page.
 * Run with: ddev drush php:script check_about_paragraphs.php
 */

$query = \Drupal::entityQuery('node')
  ->condition('type', 'page')
  ->condition('title', 'About Us')
  ->accessCheck(FALSE);
$nids = $query->execute();

if (empty($nids)) {
  // Try "About CPG Matters"
  $query2 = \Drupal::entityQuery('node')
    ->condition('type', 'page')
    ->accessCheck(FALSE);
  $all_nids = $query2->execute();
  foreach ($all_nids as $n) {
    $node = \Drupal\node\Entity\Node::load($n);
    if (stripos($node->getTitle(), 'about') !== FALSE) {
      echo "Found node: " . $node->getTitle() . " (nid: $n)\n";
      $nids[] = $n;
    }
  }
}

if (empty($nids)) {
  echo "No About page found!\n";
  return;
}

foreach ($nids as $nid) {
  $node = \Drupal\node\Entity\Node::load($nid);
  echo "Title: " . $node->getTitle() . "\n";
  echo "NID: $nid\n";
  echo "Has field_cpg_paragraphs: " . ($node->hasField('field_cpg_paragraphs') ? 'YES' : 'NO') . "\n";
  
  if ($node->hasField('field_cpg_paragraphs')) {
    $items = $node->field_cpg_paragraphs->referencedEntities();
    echo "Paragraph count: " . count($items) . "\n";
    foreach ($items as $p) {
      echo "  - " . $p->bundle() . " (ID: " . $p->id() . ")";
      if ($p->hasField('field_p_title') && $p->field_p_title->value) {
        echo " title=\"" . $p->field_p_title->value . "\"";
      }
      // Show nested items count
      if ($p->hasField('field_p_items')) {
        $sub = $p->field_p_items->referencedEntities();
        echo " [" . count($sub) . " items]";
      }
      echo "\n";
    }
  }
  
  if ($node->hasField('body') && $node->body->value) {
    echo "Body: " . substr(strip_tags($node->body->value), 0, 100) . "\n";
  }
  
  // Check path aliases
  $path_alias_manager = \Drupal::service('path_alias.manager');
  try {
    $alias = $path_alias_manager->getAliasByPath('/node/' . $nid);
    echo "URL Alias: $alias\n";
  } catch (\Exception $e) {}
  
  echo "\n";
}
