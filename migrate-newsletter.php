<?php

use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\block_content\Entity\BlockContent;

$entity_type_manager = \Drupal::entityTypeManager();

// Create body field on newsletter if it doesn't exist
$field_storage = FieldStorageConfig::loadByName('block_content', 'body');
if (!$field_storage) {
  $field_storage = FieldStorageConfig::create([
    'field_name' => 'body',
    'entity_type' => 'block_content',
    'type' => 'text_with_summary',
  ]);
  $field_storage->save();
}

$field = FieldConfig::loadByName('block_content', 'newsletter', 'body');
if (!$field) {
  $field = FieldConfig::create([
    'field_storage' => $field_storage,
    'bundle' => 'newsletter',
    'label' => 'Body',
    'settings' => ['display_summary' => FALSE],
  ]);
  $field->save();

  // Assign widget and display
  $form_display = \Drupal::entityTypeManager()
    ->getStorage('entity_form_display')
    ->load('block_content.newsletter.default');
  if ($form_display) {
    $form_display->setComponent('body', [
      'type' => 'text_textarea_with_summary',
    ])->save();
  }

  $view_display = \Drupal::entityTypeManager()
    ->getStorage('entity_view_display')
    ->load('block_content.newsletter.default');
  if ($view_display) {
    $view_display->setComponent('body', [
      'type' => 'text_default',
    ])->save();
  }
}

// Now populate newsletter blocks
$blocks = $entity_type_manager->getStorage('block_content')->loadByProperties(['type' => 'newsletter']);
foreach ($blocks as $block) {
  if ($block->get('body')->isEmpty()) {
    $block->set('body', [
      'value' => '<p>Get the latest CPG news delivered to your inbox</p>',
      'format' => 'full_html',
    ]);
    $block->save();
    echo "Populated newsletter block body.\n";
  }
}

echo "Done migrating newsletter content.\n";
