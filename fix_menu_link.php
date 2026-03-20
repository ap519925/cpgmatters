<?php
$uuid = '2c4177fd-f6dc-4f0e-af9c-9d2efe61927e';
$entity = \Drupal::service('entity.repository')->loadEntityByUuid('menu_link_content', $uuid);
if ($entity) {
  $entity->set('link', ['uri' => 'internal:/register']);
  $entity->save();
  echo "Menu link fixed.\n";
} else {
  echo "Menu link not found.\n";
}
