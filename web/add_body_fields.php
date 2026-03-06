<?php
/**
 * Drush script to add body field to block types and populate content.
 * Run with: drush scr add_body_fields.php
 */

use Drupal\block_content\Entity\BlockContent;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;

// 1. Ensure body field storage exists for block_content
$storage = FieldStorageConfig::loadByName('block_content', 'body');
if (!$storage) {
    $storage = FieldStorageConfig::create([
        'field_name' => 'body',
        'entity_type' => 'block_content',
        'type' => 'text_with_summary',
        'cardinality' => 1,
    ]);
    $storage->save();
    \Drupal::messenger()->addStatus('Created body field storage for block_content');
} else {
    \Drupal::messenger()->addStatus('Body field storage already exists');
}

// 2. Add body field to footer_column
if (!FieldConfig::loadByName('block_content', 'footer_column', 'body')) {
    FieldConfig::create([
        'field_storage' => $storage,
        'bundle' => 'footer_column',
        'label' => 'Body',
        'settings' => ['display_summary' => FALSE],
    ])->save();
    \Drupal::messenger()->addStatus('Added body field to footer_column');
}

// 3. Add body field to newsletter
if (!FieldConfig::loadByName('block_content', 'newsletter', 'body')) {
    FieldConfig::create([
        'field_storage' => $storage,
        'bundle' => 'newsletter',
        'label' => 'Body',
        'settings' => ['display_summary' => FALSE],
    ])->save();
    \Drupal::messenger()->addStatus('Added body field to newsletter');
}

// 4. Populate footer blocks
$footer_data = [
    5 => '<p>CPG Matters is a leading resource for consumer packaged goods industry news, analysis, and insights.</p>',
    6 => '<ul><li><a href="/archive">Article Archive</a></li><li><a href="/whitepapers">Whitepapers</a></li><li><a href="/dictionary">CPG Dictionary</a></li><li><a href="/directory">Industry Directory</a></li></ul>',
    7 => '<ul><li><a href="/">Industry Trends</a></li><li><a href="/">Sustainability</a></li><li><a href="/">Innovation</a></li><li><a href="/">Market Analysis</a></li><li><a href="/">E-Commerce</a></li></ul>',
    8 => '<ul><li><a href="/contact">Contact Us</a></li><li><a href="https://twitter.com">Twitter</a></li><li><a href="https://linkedin.com">LinkedIn</a></li><li><a href="/register">Subscribe</a></li></ul>',
];

foreach ($footer_data as $id => $body) {
    $block = BlockContent::load($id);
    if ($block) {
        $block->set('body', ['value' => $body, 'format' => 'basic_html']);
        $block->save();
        \Drupal::messenger()->addStatus("Updated block $id: " . $block->label());
    }
}

// 5. Update newsletter
$newsletter = BlockContent::load(1);
if ($newsletter) {
    $newsletter->set('body', ['value' => '<p>Get the latest CPG news delivered to your inbox</p>', 'format' => 'basic_html']);
    $newsletter->save();
    \Drupal::messenger()->addStatus('Updated newsletter block');
}
