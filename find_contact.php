<?php

$query = \Drupal::entityQuery('node')
  ->condition('title', 'Contact', 'CONTAINS')
  ->accessCheck(FALSE);
$nids = $query->execute();

if (!empty($nids)) {
  foreach ($nids as $nid) {
    $node = \Drupal\node\Entity\Node::load($nid);
    echo "Found node matching 'Contact' (NID: $nid): " . $node->getTitle() . "\n";
    try {
      $alias = \Drupal::service('path_alias.manager')->getAliasByPath('/node/' . $nid);
      echo "  Alias: " . $alias . "\n";
    } catch (\Exception $e) {}
  }
} else {
  echo "No node matching 'Contact' found.\n";
}

$query_sm = \Drupal::entityQuery('node')
  ->condition('title', 'Sitemap', 'CONTAINS')
  ->accessCheck(FALSE);
$nids_sm = $query_sm->execute();

if (!empty($nids_sm)) {
  foreach ($nids_sm as $nid) {
    $node = \Drupal\node\Entity\Node::load($nid);
    echo "Found node matching 'Sitemap' (NID: $nid): " . $node->getTitle() . "\n";
    try {
      $alias = \Drupal::service('path_alias.manager')->getAliasByPath('/node/' . $nid);
      echo "  Alias: " . $alias . "\n";
    } catch (\Exception $e) {}
  }
} else {
  echo "No node matching 'Sitemap' found.\n";
}
