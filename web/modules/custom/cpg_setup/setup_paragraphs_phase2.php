<?php

use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\paragraphs\Entity\ParagraphsType;

/**
 * Helper to create a Paragraph Type
 */
function createParagraphType2($id, $label) {
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
function createField2($entity_type, $bundle, $field_name, $field_label, $field_type, $settings = [], $cardinality = 1) {
  $field_storage = FieldStorageConfig::loadByName($entity_type, $field_name);
  if (!$field_storage) {
    $storage_settings = [];
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
    } elseif ($field_type === 'entity_reference') {
      $storage_settings = ['target_type' => $settings['target_type'] ?? 'node'];
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
    } elseif ($field_type === 'image') {
      $widget_type = 'image_image';
    } elseif ($field_type === 'text_long' || $field_type === 'text_with_summary') {
      $widget_type = 'text_textarea';
    } elseif ($field_type === 'link') {
      $widget_type = 'link_default';
    } elseif ($field_type === 'list_string') {
      $widget_type = 'options_select';
    } elseif ($field_type === 'entity_reference') {
      $widget_type = 'entity_reference_autocomplete';
    }

    $form_display->setComponent($field_name, [
      'type' => $widget_type,
      'settings' => $widget_settings,
    ])->save();

    // View display
    $view_display = \Drupal::service('entity_display.repository')->getViewDisplay($entity_type, $bundle);
    $formatter_type = 'string';
    if ($field_type === 'entity_reference_revisions') $formatter_type = 'entity_reference_revisions_entity_view';
    elseif ($field_type === 'image') $formatter_type = 'image';
    elseif ($field_type === 'text_long' || $field_type === 'text_with_summary') $formatter_type = 'text_default';
    elseif ($field_type === 'link') $formatter_type = 'link';
    elseif ($field_type === 'list_string') $formatter_type = 'list_default';
    elseif ($field_type === 'entity_reference') $formatter_type = 'entity_reference_label';

    $view_display->setComponent($field_name, [
      'type' => $formatter_type,
      'label' => 'hidden',
    ])->save();
  }
}

// ---------------------------------------------------------
// Additional Paragraph Types
// ---------------------------------------------------------

// Directory-centric components
createParagraphType2('cpg_directory_grid', 'Directory Grid');
createParagraphType2('cpg_company_card', 'Company Card');
createParagraphType2('cpg_stats_bar', 'Statistics Bar');
createParagraphType2('cpg_stat_item', 'Statistic Item');
createParagraphType2('cpg_team_grid', 'Team Grid');
createParagraphType2('cpg_team_member', 'Team Member');
createParagraphType2('cpg_accordion', 'Accordion / FAQ');
createParagraphType2('cpg_accordion_item', 'Accordion Item');
createParagraphType2('cpg_video', 'Video Embed');
createParagraphType2('cpg_quote', 'Blockquote / Testimonial');
createParagraphType2('cpg_divider', 'Section Divider');
createParagraphType2('cpg_columns', 'Multi-Column Layout');
createParagraphType2('cpg_column', 'Column');
createParagraphType2('cpg_card_grid', 'Card Grid');
createParagraphType2('cpg_card', 'Card');

// ---------------------------------------------------------
// Fields for new paragraph types
// ---------------------------------------------------------

// cpg_directory_grid — container for company cards
createField2('paragraph', 'cpg_directory_grid', 'field_p_title', 'Section Title', 'string');
createField2('paragraph', 'cpg_directory_grid', 'field_p_subtitle', 'Section Subtitle', 'text_long');
createField2('paragraph', 'cpg_directory_grid', 'field_p_items', 'Directory Listings', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => ['cpg_company_card' => 'cpg_company_card']]], -1);

// cpg_company_card
createField2('paragraph', 'cpg_company_card', 'field_p_title', 'Company Name', 'string');
createField2('paragraph', 'cpg_company_card', 'field_p_body', 'Description', 'text_long');
createField2('paragraph', 'cpg_company_card', 'field_p_image', 'Company Logo', 'image', ['file_directory' => 'logos', 'alt_field' => TRUE]);
createField2('paragraph', 'cpg_company_card', 'field_p_link', 'Website URL', 'link', ['title' => 1]);
createField2('paragraph', 'cpg_company_card', 'field_p_icon', 'Industry Tag', 'string');

// cpg_stats_bar — container for stat items
createField2('paragraph', 'cpg_stats_bar', 'field_p_title', 'Section Title', 'string');
createField2('paragraph', 'cpg_stats_bar', 'field_p_items', 'Statistics', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => ['cpg_stat_item' => 'cpg_stat_item']]], -1);

// cpg_stat_item
createField2('paragraph', 'cpg_stat_item', 'field_p_title', 'Label', 'string');
createField2('paragraph', 'cpg_stat_item', 'field_p_icon', 'Value/Number', 'string');
createField2('paragraph', 'cpg_stat_item', 'field_p_body', 'Description', 'text_long');

// cpg_team_grid — container for team members
createField2('paragraph', 'cpg_team_grid', 'field_p_title', 'Section Title', 'string');
createField2('paragraph', 'cpg_team_grid', 'field_p_subtitle', 'Section Subtitle', 'text_long');
createField2('paragraph', 'cpg_team_grid', 'field_p_items', 'Team Members', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => ['cpg_team_member' => 'cpg_team_member']]], -1);

// cpg_team_member
createField2('paragraph', 'cpg_team_member', 'field_p_title', 'Name', 'string');
createField2('paragraph', 'cpg_team_member', 'field_p_icon', 'Role/Title', 'string');
createField2('paragraph', 'cpg_team_member', 'field_p_image', 'Photo', 'image', ['file_directory' => 'team', 'alt_field' => TRUE]);
createField2('paragraph', 'cpg_team_member', 'field_p_body', 'Bio', 'text_long');

// cpg_accordion — container for accordion items
createField2('paragraph', 'cpg_accordion', 'field_p_title', 'Section Title', 'string');
createField2('paragraph', 'cpg_accordion', 'field_p_items', 'FAQ Items', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => ['cpg_accordion_item' => 'cpg_accordion_item']]], -1);

// cpg_accordion_item
createField2('paragraph', 'cpg_accordion_item', 'field_p_title', 'Question', 'string');
createField2('paragraph', 'cpg_accordion_item', 'field_p_body', 'Answer', 'text_long');

// cpg_video
createField2('paragraph', 'cpg_video', 'field_p_title', 'Title', 'string');
createField2('paragraph', 'cpg_video', 'field_p_body', 'Video Embed Code or URL', 'text_long');

// cpg_quote
createField2('paragraph', 'cpg_quote', 'field_p_body', 'Quote Text', 'text_long');
createField2('paragraph', 'cpg_quote', 'field_p_title', 'Attribution', 'string');
createField2('paragraph', 'cpg_quote', 'field_p_icon', 'Role/Company', 'string');
createField2('paragraph', 'cpg_quote', 'field_p_image', 'Author Photo', 'image', ['file_directory' => 'quotes', 'alt_field' => TRUE]);

// cpg_divider — no extra fields needed, just renders a styled <hr>

// cpg_columns — container for individual columns
createField2('paragraph', 'cpg_columns', 'field_p_items', 'Columns', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => ['cpg_column' => 'cpg_column']]], -1);

// cpg_column — each column can hold nested paragraphs
createField2('paragraph', 'cpg_column', 'field_p_items', 'Column Content', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => NULL]], -1);

// cpg_card_grid — container for cards
createField2('paragraph', 'cpg_card_grid', 'field_p_title', 'Section Title', 'string');
createField2('paragraph', 'cpg_card_grid', 'field_p_subtitle', 'Section Subtitle', 'text_long');
createField2('paragraph', 'cpg_card_grid', 'field_p_items', 'Cards', 'entity_reference_revisions', ['handler' => 'default:paragraph', 'handler_settings' => ['target_bundles' => ['cpg_card' => 'cpg_card']]], -1);

// cpg_card
createField2('paragraph', 'cpg_card', 'field_p_title', 'Title', 'string');
createField2('paragraph', 'cpg_card', 'field_p_body', 'Description', 'text_long');
createField2('paragraph', 'cpg_card', 'field_p_icon', 'Icon/Emoji', 'string');
createField2('paragraph', 'cpg_card', 'field_p_image', 'Card Image', 'image', ['file_directory' => 'cards', 'alt_field' => TRUE]);
createField2('paragraph', 'cpg_card', 'field_p_link', 'Button/Link', 'link', ['title' => 1]);

// Also attach field_cpg_paragraphs to directory_listing content type
$node_type = 'directory_listing';
$field_storage = FieldStorageConfig::loadByName('node', 'field_cpg_paragraphs');
$field = FieldConfig::loadByName('node', $node_type, 'field_cpg_paragraphs');
if ($field_storage && !$field) {
  $field = FieldConfig::create([
    'field_storage' => $field_storage,
    'bundle' => $node_type,
    'label' => 'Sections',
    'settings' => [
      'handler' => 'default:paragraph',
      'handler_settings' => ['target_bundles' => NULL, 'target_bundles_drag_drop' => []],
    ],
  ]);
  $field->save();
  echo "Attached field_cpg_paragraphs to $node_type\n";

  $form_display = \Drupal::service('entity_display.repository')->getFormDisplay('node', $node_type);
  $form_display->setComponent('field_cpg_paragraphs', [
    'type' => 'entity_reference_paragraphs',
    'settings' => [
      'title' => 'Paragraph',
      'title_plural' => 'Paragraphs',
      'edit_mode' => 'open',
      'add_mode' => 'dropdown',
      'form_display_mode' => 'default',
      'default_paragraph_type' => '',
    ],
  ])->save();

  $view_display = \Drupal::service('entity_display.repository')->getViewDisplay('node', $node_type);
  $view_display->setComponent('field_cpg_paragraphs', [
    'type' => 'entity_reference_revisions_entity_view',
    'label' => 'hidden',
  ])->save();
}

echo "\nPhase 2 paragraph types and fields created successfully!\n";
