<?php
// Check if field_cpg_paragraphs is visible in the form display for 'page' nodes
$form_display = \Drupal::entityTypeManager()
  ->getStorage('entity_form_display')
  ->load('node.page.default');

if ($form_display) {
  $component = $form_display->getComponent('field_cpg_paragraphs');
  if ($component) {
    echo "field_cpg_paragraphs is VISIBLE in form display. Settings: " . json_encode($component) . "\n";
  } else {
    echo "field_cpg_paragraphs is HIDDEN in form display.\n";
  }
} else {
  echo "Could not load form display for node.page.default\n";
}

// Check sitemap
$query = \Drupal::entityQuery('node')
  ->condition('title', 'Sitemap')
  ->accessCheck(FALSE);
$nids = $query->execute();
if (!empty($nids)) {
  echo "Sitemap is a node (NID: " . implode(',', $nids) . ")\n";
} else {
  echo "Sitemap is NOT a node.\n";
}

// Check admin_toolbar module
$module_handler = \Drupal::moduleHandler();
if ($module_handler->moduleExists('admin_toolbar')) {
  echo "admin_toolbar module is ENABLED.\n";
} else {
  echo "admin_toolbar module is DISABLED.\n";
}

// Ensure user 1 has administrator role
$user1 = \Drupal\user\Entity\User::load(1);
if ($user1) {
  echo "User 1 roles: " . implode(', ', $user1->getRoles()) . "\n";
}
