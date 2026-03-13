<?php
/**
 * Add article full-page fields and configure view modes.
 * Run: ddev drush php:script setup_article_fields_drush.php
 */
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\Core\Entity\Entity\EntityViewDisplay;
use Drupal\Core\Entity\Entity\EntityFormDisplay;

// =============================================
// 1. ADD NEW FIELDS TO ARTICLE CONTENT TYPE
// =============================================

$fields_to_add = [
    'field_summary' => [
        'type' => 'text_long',
        'label' => 'Summary / Lead Text',
        'description' => 'A brief summary or lead paragraph shown before the main body text.'
    ],
    'field_image_caption' => [
        'type' => 'string_long',
        'label' => 'Featured Image Caption',
        'description' => 'Caption text displayed below the featured image, e.g. source attribution.'
    ],
    'field_author_name' => [
        'type' => 'string',
        'label' => 'Author Name',
        'description' => 'Display name of the article author (overrides the Drupal username).'
    ],
    'field_read_time' => [
        'type' => 'string',
        'label' => 'Read Time',
        'description' => 'Estimated reading time, e.g. "5 min read".'
    ],
];

foreach ($fields_to_add as $field_name => $info) {
    $storage = FieldStorageConfig::loadByName('node', $field_name);
    if (!$storage) {
        $storage = FieldStorageConfig::create([
            'field_name' => $field_name,
            'entity_type' => 'node',
            'type' => $info['type'],
            'cardinality' => 1,
        ]);
        $storage->save();
        echo "Created field storage: $field_name\n";
    } else {
        echo "Field storage already exists: $field_name\n";
    }

    $field = FieldConfig::loadByName('node', 'article', $field_name);
    if (!$field) {
        $field = FieldConfig::create([
            'field_storage' => $storage,
            'bundle' => 'article',
            'label' => $info['label'],
            'description' => $info['description'],
            'required' => FALSE,
        ]);
        $field->save();
        echo "Attached $field_name to article bundle\n";
    } else {
        echo "Field already attached: $field_name\n";
    }
}

// =============================================
// 2. CONFIGURE THE FORM DISPLAY
// =============================================

$form_display = EntityFormDisplay::load('node.article.default');
if (!$form_display) {
    $form_display = EntityFormDisplay::create([
        'targetEntityType' => 'node',
        'bundle' => 'article',
        'mode' => 'default',
        'status' => TRUE,
    ]);
}

$form_display->setComponent('field_summary', [
    'type' => 'text_textarea',
    'weight' => 2,
    'settings' => ['rows' => 3, 'placeholder' => ''],
    'region' => 'content',
]);
$form_display->setComponent('field_image_caption', [
    'type' => 'string_textarea',
    'weight' => 5,
    'settings' => ['rows' => 2],
    'region' => 'content',
]);
$form_display->setComponent('field_author_name', [
    'type' => 'string_textfield',
    'weight' => 6,
    'settings' => ['size' => 60, 'placeholder' => 'e.g. Sarah Mitchell'],
    'region' => 'content',
]);
$form_display->setComponent('field_read_time', [
    'type' => 'string_textfield',
    'weight' => 7,
    'settings' => ['size' => 20, 'placeholder' => 'e.g. 5 min read'],
    'region' => 'content',
]);

$form_display->save();
echo "\nForm display updated with new fields.\n";

// =============================================
// 3. CONFIGURE THE DEFAULT (FULL) VIEW DISPLAY
// =============================================

$view_display = EntityViewDisplay::load('node.article.default');
if (!$view_display) {
    $view_display = EntityViewDisplay::create([
        'targetEntityType' => 'node',
        'bundle' => 'article',
        'mode' => 'default',
        'status' => TRUE,
    ]);
}

$view_display->setComponent('field_tags', [
    'type' => 'entity_reference_label',
    'weight' => 0,
    'label' => 'hidden',
    'settings' => ['link' => TRUE],
    'region' => 'content',
]);
$view_display->setComponent('field_summary', [
    'type' => 'text_default',
    'weight' => 1,
    'label' => 'hidden',
    'region' => 'content',
]);
$view_display->setComponent('field_author_name', [
    'type' => 'string',
    'weight' => 2,
    'label' => 'hidden',
    'region' => 'content',
]);
$view_display->setComponent('field_read_time', [
    'type' => 'string',
    'weight' => 3,
    'label' => 'hidden',
    'region' => 'content',
]);
$view_display->setComponent('field_image', [
    'type' => 'image',
    'weight' => 4,
    'label' => 'hidden',
    'settings' => ['image_style' => '', 'image_link' => ''],
    'region' => 'content',
]);
$view_display->setComponent('field_image_caption', [
    'type' => 'string',
    'weight' => 5,
    'label' => 'hidden',
    'region' => 'content',
]);
$view_display->setComponent('body', [
    'type' => 'text_default',
    'weight' => 10,
    'label' => 'hidden',
    'region' => 'content',
]);

$view_display->save();
echo "Default view display configured.\n";

// =============================================
// 4. UPDATE EXISTING SAMPLE ARTICLES
// =============================================

$articles_update = [
    'The Future of CPG: How AI is Revolutionizing Supply Chain Management' => [
        'field_summary' => ['value' => 'Leading consumer packaged goods companies are implementing artificial intelligence and machine learning to optimize inventory management, predict consumer demand, and streamline distribution networks across the globe.', 'format' => 'basic_html'],
        'field_author_name' => 'Sarah Mitchell',
        'field_read_time' => '5 min read',
        'field_image_caption' => 'Advanced AI systems are transforming how CPG companies manage their supply chains. Photo: Getty Images',
    ],
    'Major Brands Commit to Zero-Waste Packaging by 2030' => [
        'field_summary' => ['value' => 'A coalition of leading CPG companies announces ambitious sustainability goals aimed at eliminating plastic waste and transitioning to fully recyclable materials by the end of the decade.', 'format' => 'basic_html'],
        'field_author_name' => 'James Chen',
        'field_read_time' => '4 min read',
    ],
    'Direct-to-Consumer Sales Surge 45% in Q4' => [
        'field_summary' => ['value' => 'New data reveals a significant shift in consumer purchasing behavior as brands invest heavily in digital commerce infrastructure and personalized shopping experiences.', 'format' => 'basic_html'],
        'field_author_name' => 'Emily Rodriguez',
        'field_read_time' => '3 min read',
    ],
    'Private Label Products Gain Market Share' => [
        'field_author_name' => 'Michael Park',
        'field_read_time' => '4 min read',
    ],
    'Smart Packaging Technology Tracks Product Freshness' => [
        'field_author_name' => 'Lisa Thompson',
        'field_read_time' => '6 min read',
    ],
    'Consolidation Continues as Major Acquisition Announced' => [
        'field_author_name' => 'David Williams',
        'field_read_time' => '3 min read',
    ],
];

foreach ($articles_update as $title => $fields) {
    $nodes = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
        'type' => 'article',
        'title' => $title,
    ]);
    $node = reset($nodes);
    if ($node) {
        foreach ($fields as $field_name => $value) {
            $node->set($field_name, $value);
        }
        $node->save();
        echo "Updated: $title\n";
    } else {
        echo "Not found: $title\n";
    }
}

echo "\n=== ALL DONE ===\n";
