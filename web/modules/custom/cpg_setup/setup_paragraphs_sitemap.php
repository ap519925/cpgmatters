<?php

use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\paragraphs\Entity\ParagraphsType;

/**
 * Helper to create a Paragraph Type
 */
function createParagraphTypeSitemap($id, $label) {
  if (!ParagraphsType::load($id)) {
    ParagraphsType::create([
      'id' => $id,
      'label' => $label,
      'description' => "Paragraph type for $label",
    ])->save();
    echo "Created Paragraph Type: $label\n";
  } else {
    echo "Paragraph Type exists: $label\n";
  }
}

/**
 * Helper to create Field Storage and Field Config
 */
function createFieldSitemap($entity_type, $bundle, $field_name, $field_label, $field_type, $settings = [], $cardinality = 1) {
  $field_storage = FieldStorageConfig::loadByName($entity_type, $field_name);
  if (!$field_storage) {
    $storage_settings = [];
    if ($field_type === 'entity_reference_revisions') {
      $storage_settings = ['target_type' => 'paragraph'];
    }

    $field_storage = FieldStorageConfig::create([
      'field_name' => $field_name,
      'entity_type' => $entity_type,
      'type' => $field_type,
      'cardinality' => $cardinality,
      'settings' => $storage_settings,
    ]);
    $field_storage->save();
    echo "Created field storage: $field_name\n";
  }

  $field = FieldConfig::loadByName($entity_type, $bundle, $field_name);
  if (!$field) {
    $field = FieldConfig::create([
      'field_storage' => $field_storage,
      'bundle' => $bundle,
      'label' => $field_label,
      'settings' => $settings,
    ]);
    $field->save();
    echo "Created field $field_name on $entity_type/$bundle\n";

    // Form display
    $form_display = \Drupal::service('entity_display.repository')->getFormDisplay($entity_type, $bundle);
    $widget_type = 'string_textfield';
    $widget_settings = [];

    if ($field_type === 'entity_reference_revisions') {
      $widget_type = 'entity_reference_paragraphs';
      $widget_settings = [
        'title' => 'Paragraph',
        'title_plural' => 'Paragraphs',
        'edit_mode' => 'open',
        'add_mode' => 'dropdown',
        'form_display_mode' => 'default',
        'default_paragraph_type' => '',
      ];
    } elseif ($field_type === 'text_long' || $field_type === 'text_with_summary') {
      $widget_type = 'text_textarea';
    } elseif ($field_type === 'link') {
      $widget_type = 'link_default';
    }

    $form_display->setComponent($field_name, [
      'type' => $widget_type,
      'settings' => $widget_settings,
    ])->save();

    // View display
    $view_display = \Drupal::service('entity_display.repository')->getViewDisplay($entity_type, $bundle);
    $formatter_type = 'string';
    if ($field_type === 'entity_reference_revisions') $formatter_type = 'entity_reference_revisions_entity_view';
    elseif ($field_type === 'text_long' || $field_type === 'text_with_summary') $formatter_type = 'text_default';
    elseif ($field_type === 'link') $formatter_type = 'link';

    $view_display->setComponent($field_name, [
      'type' => $formatter_type,
      'label' => 'hidden',
    ])->save();
  }
}

// ---------------------------------------------------------
// 1. Create Paragraph Types
// ---------------------------------------------------------

createParagraphTypeSitemap('cpg_sitemap_hero', 'Sitemap Hero');
createParagraphTypeSitemap('cpg_sitemap_popular', 'Sitemap Popular Destinations');
createParagraphTypeSitemap('cpg_sitemap_popular_link', 'Sitemap Popular Link');
createParagraphTypeSitemap('cpg_sitemap_grid', 'Sitemap Grid');
createParagraphTypeSitemap('cpg_sitemap_section', 'Sitemap Section Card');
createParagraphTypeSitemap('cpg_sitemap_link', 'Sitemap Link');

// ---------------------------------------------------------
// 2. Add Fields
// ---------------------------------------------------------

// Hero
createFieldSitemap('paragraph', 'cpg_sitemap_hero', 'field_p_title', 'Title', 'string');
createFieldSitemap('paragraph', 'cpg_sitemap_hero', 'field_p_body', 'Subtitle', 'text_long');

// Popular Destinations Wrapper
createFieldSitemap('paragraph', 'cpg_sitemap_popular', 'field_p_title', 'Section Title', 'string');
createFieldSitemap('paragraph', 'cpg_sitemap_popular', 'field_p_items', 'Links', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => ['cpg_sitemap_popular_link' => 'cpg_sitemap_popular_link']]], -1);

// Popular Destination Link
createFieldSitemap('paragraph', 'cpg_sitemap_popular_link', 'field_p_title', 'Label', 'string');
createFieldSitemap('paragraph', 'cpg_sitemap_popular_link', 'field_p_icon', 'Emoji/Icon', 'string');
createFieldSitemap('paragraph', 'cpg_sitemap_popular_link', 'field_p_link', 'Link', 'link', ['title' => 0]);

// Sitemap Grid
createFieldSitemap('paragraph', 'cpg_sitemap_grid', 'field_p_items', 'Sections', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => ['cpg_sitemap_section' => 'cpg_sitemap_section']]], -1);

// Sitemap Section Card
createFieldSitemap('paragraph', 'cpg_sitemap_section', 'field_p_title', 'Title', 'string');
createFieldSitemap('paragraph', 'cpg_sitemap_section', 'field_p_icon', 'Emoji/Icon', 'string');
createFieldSitemap('paragraph', 'cpg_sitemap_section', 'field_p_items', 'Links', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => ['cpg_sitemap_link' => 'cpg_sitemap_link']]], -1);

// Sitemap Link
createFieldSitemap('paragraph', 'cpg_sitemap_link', 'field_p_link', 'Link', 'link', ['title' => 1]); // Needs title

echo "\nSitemap paragraph types created.\n";

?>
