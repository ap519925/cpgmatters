<?php

use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\block_content\Entity\BlockContent;

$entity_type_manager = \Drupal::entityTypeManager();

// Create body field on footer_column if it doesn't exist
$field_storage = FieldStorageConfig::loadByName('block_content', 'body');
if (!$field_storage) {
  $field_storage = FieldStorageConfig::create([
    'field_name' => 'body',
    'entity_type' => 'block_content',
    'type' => 'text_with_summary',
  ]);
  $field_storage->save();
}

$field = FieldConfig::loadByName('block_content', 'footer_column', 'body');
if (!$field) {
  $field = FieldConfig::create([
    'field_storage' => $field_storage,
    'bundle' => 'footer_column',
    'label' => 'Body',
    'settings' => ['display_summary' => FALSE],
  ]);
  $field->save();

  // Assign widget and display
  $form_display = \Drupal::entityTypeManager()
    ->getStorage('entity_form_display')
    ->load('block_content.footer_column.default');
  if (!$form_display) {
    $form_display = \Drupal::entityTypeManager()
      ->getStorage('entity_form_display')
      ->create([
        'targetEntityType' => 'block_content',
        'bundle' => 'footer_column',
        'mode' => 'default',
        'status' => TRUE,
      ]);
  }
  $form_display->setComponent('body', [
    'type' => 'text_textarea_with_summary',
  ])->save();

  $view_display = \Drupal::entityTypeManager()
    ->getStorage('entity_view_display')
    ->load('block_content.footer_column.default');
  if (!$view_display) {
    $view_display = \Drupal::entityTypeManager()
      ->getStorage('entity_view_display')
      ->create([
        'targetEntityType' => 'block_content',
        'bundle' => 'footer_column',
        'mode' => 'default',
        'status' => TRUE,
      ]);
  }
  $view_display->setComponent('body', [
    'type' => 'text_default',
  ])->save();
}

echo "Body field ready.\n";

// Now populate blocks based on title
$blocks = $entity_type_manager->getStorage('block_content')->loadByProperties(['type' => 'footer_column']);
foreach ($blocks as $block) {
  $label = $block->label();
  if ($block->get('body')->isEmpty()) {
    $html = '';
    if (strpos($label, 'About') !== FALSE) {
      $html = '<p>CPG Matters offers the latest news, research, and analysis for consumer packaged goods professionals.</p>';
    } elseif (strpos($label, 'Resources') !== FALSE) {
      $html = '<ul>
      <li><a href="/whitepapers">Whitepapers</a></li>
      <li><a href="/dictionary">CPG Dictionary</a></li>
      <li><a href="/directory">Industry Directory</a></li>
      <li><a href="/sitemap">Sitemap</a></li>
    </ul>';
    } elseif (strpos($label, 'Topics') !== FALSE) {
      $html = '<ul>
      <li><a href="/">Industry Trends</a></li>
      <li><a href="/">Sustainability</a></li>
      <li><a href="/">Innovation</a></li>
      <li><a href="/">Market Analysis</a></li>
      <li><a href="/">E-Commerce</a></li>
    </ul>';
    } elseif (strpos($label, 'Connect') !== FALSE) {
      $html = '<ul>
      <li><a href="/contact">Contact Us</a></li>
      <li><a href="https://twitter.com">Twitter / X</a></li>
      <li><a href="https://linkedin.com">LinkedIn</a></li>
      <li><a href="/register">Subscribe</a></li>
    </ul>';
    }
    
    if ($html) {
      $block->set('body', [
        'value' => $html,
        'format' => 'full_html',
      ]);
      $block->save();
      echo "Populated {$label} block.\n";
    }
  }
}

echo "Done migrating footer column content.\n";
