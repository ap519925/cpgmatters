<?php
$fields = \Drupal::entityTypeManager()
  ->getStorage('field_config')
  ->loadByProperties([
    'entity_type' => 'paragraph',
    'bundle' => 'cpg_cta',
  ]);
foreach ($fields as $f) {
  echo $f->getName() . ' (' . $f->getType() . ")\n";
}
