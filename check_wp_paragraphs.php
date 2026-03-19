<?php

/**
 * Check what paragraphs are attached to the White Papers page.
 * Run with: ddev drush php:script check_wp_paragraphs.php
 */

$query = \Drupal::entityQuery('node')
  ->condition('type', 'page')
  ->condition('title', 'White Papers')
  ->accessCheck(FALSE);
$nids = $query->execute();

if (empty($nids)) {
  echo "No White Papers page found!\n";
  return;
}

foreach ($nids as $nid) {
  $node = \Drupal\node\Entity\Node::load($nid);
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
      if ($p->hasField('field_p_body') && $p->field_p_body->value) {
        echo " body=\"" . substr(strip_tags($p->field_p_body->value), 0, 60) . "\"";
      }
      echo "\n";
    }
  }
  
  // Also check body field
  if ($node->hasField('body') && $node->body->value) {
    echo "Body: " . substr(strip_tags($node->body->value), 0, 100) . "\n";
  }
}
