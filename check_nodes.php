<?php
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;

// 1. Check Node 36 (Sitemap)
$sitemap_node = Node::load(36);
if ($sitemap_node) {
  echo "Node 36 Title: " . $sitemap_node->getTitle() . "\n";
  // The user says there is no way to edit it. Let's make sure field_cpg_paragraphs exists on it.
  if (!$sitemap_node->hasField('field_cpg_paragraphs')) {
    echo "Wait, Node 36 doesn't have paragraphs. Bundle: " . $sitemap_node->bundle() . "\n";
  } else {
    echo "Node 36 has field_cpg_paragraphs. It SHOULD be editable.\n";
  }
}

// 2. See if there is ANY node with title "Contact Us" or "Contact" 
$query = \Drupal::entityQuery('node')
  ->condition('title', 'Contact', 'STARTS_WITH')
  ->accessCheck(FALSE);
$nids = $query->execute();
if ($nids) {
  foreach ($nids as $nid) {
    if ($nid == 36) continue;
    $n = Node::load($nid);
    echo "Found node " . $nid . ": " . $n->getTitle() . " (Bundle: " . $n->bundle() . ")\n";
    
    // Ensure alias is correct
    $path = '/node/' . $nid;
    $alias = \Drupal::service('path_alias.manager')->getAliasByPath($path);
    echo "  Alias: " . $alias . "\n";
  }
} else {
  echo "No Contact node found.\n";
}
