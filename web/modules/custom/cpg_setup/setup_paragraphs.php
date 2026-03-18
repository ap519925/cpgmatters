<?php

use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\paragraphs\Entity\ParagraphsType;

// Ensure we have a working environment
$entity_type_manager = \Drupal::entityTypeManager();

/**
 * Helper to create a Paragraph Type
 */
function createParagraphType($id, $label, $icon = 'text') {
  if (!ParagraphsType::load($id)) {
    $type = ParagraphsType::create([
      'id' => $id,
      'label' => $label,
      'description' => "Paragraph type for $label",
      'icon_uuid' => NULL,
    ]);
    $type->save();
    echo "Created Paragraph Type: $label\n";
  } else {
    echo "Paragraph Type exists: $label\n";
  }
}

/**
 * Helper to create Field Storage and Field Config
 */
function createField($entity_type, $bundle, $field_name, $field_label, $field_type, $settings = [], $cardinality = 1) {
  $field_storage = FieldStorageConfig::loadByName($entity_type, $field_name);
  if (!$field_storage) {
    if ($field_type === 'entity_reference_revisions') {
      $storage_settings = ['target_type' => 'paragraph'];
    } elseif ($field_type === 'image') {
      $storage_settings = [
        'target_type' => 'file',
        'display_field' => FALSE,
        'display_default' => FALSE,
        'uri_scheme' => 'public',
        'default_image' => ['uuid' => '', 'alt' => '', 'title' => '', 'width' => NULL, 'height' => NULL],
      ];
    } else {
      $storage_settings = [];
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

    // Show on form display
    $form_display = \Drupal::service('entity_display.repository')->getFormDisplay($entity_type, $bundle);
    $widget_settings = [];
    $widget_type = 'string_textfield';
    
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
    } elseif ($field_type === 'image') {
      $widget_type = 'image_image';
    } elseif ($field_type === 'text_long' || $field_type === 'text_with_summary') {
      $widget_type = 'text_textarea';
    } elseif ($field_type === 'link') {
      $widget_type = 'link_default';
    }

    $form_display->setComponent($field_name, [
      'type' => $widget_type,
      'settings' => $widget_settings,
    ])->save();

    // Show on view display
    $view_display = \Drupal::service('entity_display.repository')->getViewDisplay($entity_type, $bundle);
    $formatter_type = 'string';
    
    if ($field_type === 'entity_reference_revisions') {
      $formatter_type = 'entity_reference_revisions_entity_view';
    } elseif ($field_type === 'image') {
      $formatter_type = 'image';
    } elseif ($field_type === 'text_long' || $field_type === 'text_with_summary') {
      $formatter_type = 'text_default';
    } elseif ($field_type === 'link') {
      $formatter_type = 'link';
    }

    $view_display->setComponent($field_name, [
      'type' => $formatter_type,
      'label' => 'hidden',
    ])->save();
  }
}

// ---------------------------------------------------------
// 1. Create Paragraph Types
// ---------------------------------------------------------

createParagraphType('cpg_hero', 'Hero Banner');
createParagraphType('cpg_text', 'Text Block');
createParagraphType('cpg_image', 'Image');
createParagraphType('cpg_features', 'Features/Grid Section');
createParagraphType('cpg_feature_item', 'Feature/Grid Item');
createParagraphType('cpg_cta', 'Call to Action');
createParagraphType('cpg_media_text', 'Media & Text (Side by Side)');

// ---------------------------------------------------------
// 2. Add Fields to Paragraph Types
// ---------------------------------------------------------

// cpg_hero fields
createField('paragraph', 'cpg_hero', 'field_p_title', 'Title', 'string');
createField('paragraph', 'cpg_hero', 'field_p_subtitle', 'Subtitle', 'text_long');
createField('paragraph', 'cpg_hero', 'field_p_image', 'Background Image', 'image', ['file_directory' => 'heroes', 'alt_field' => TRUE]);
createField('paragraph', 'cpg_hero', 'field_p_link', 'Button Link', 'link', ['title' => 1]);

// cpg_text fields
createField('paragraph', 'cpg_text', 'field_p_body', 'Body Text', 'text_long');

// cpg_image fields
createField('paragraph', 'cpg_image', 'field_p_image', 'Image', 'image', ['file_directory' => 'images', 'alt_field' => TRUE]);

// cpg_feature_item fields
createField('paragraph', 'cpg_feature_item', 'field_p_title', 'Title', 'string');
createField('paragraph', 'cpg_feature_item', 'field_p_icon', 'Icon Emoji or Path', 'string');
createField('paragraph', 'cpg_feature_item', 'field_p_body', 'Description', 'text_long');

// cpg_features fields (Container)
createField('paragraph', 'cpg_features', 'field_p_title', 'Section Title', 'string');
createField('paragraph', 'cpg_features', 'field_p_subtitle', 'Section Subtitle', 'text_long');
createField('paragraph', 'cpg_features', 'field_p_items', 'Feature Items', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => ['cpg_feature_item' => 'cpg_feature_item']]], -1);

// cpg_cta fields
createField('paragraph', 'cpg_cta', 'field_p_title', 'Title', 'string');
createField('paragraph', 'cpg_cta', 'field_p_body', 'Description', 'text_long');
createField('paragraph', 'cpg_cta', 'field_p_link', 'Button Link', 'link', ['title' => 1]);

// cpg_media_text fields
createField('paragraph', 'cpg_media_text', 'field_p_title', 'Title', 'string');
createField('paragraph', 'cpg_media_text', 'field_p_body', 'Text Content', 'text_long');
createField('paragraph', 'cpg_media_text', 'field_p_image', 'Media Image', 'image', ['file_directory' => 'media', 'alt_field' => TRUE]);


// ---------------------------------------------------------
// 3. Attach Paragraphs field to Content Types
// ---------------------------------------------------------
foreach (['page', 'article'] as $node_type) {
  createField('node', $node_type, 'field_cpg_paragraphs', 'Sections', 'entity_reference_revisions', [
    'handler' => 'default:paragraph',
    'handler_settings' => [
      'target_bundles' => NULL, // Allow all top-level paragraphs
      'target_bundles_drag_drop' => [],
    ],
  ], -1); // Unlimited
}

echo "Paragraphs architecture successfully generated!\n";

?>
