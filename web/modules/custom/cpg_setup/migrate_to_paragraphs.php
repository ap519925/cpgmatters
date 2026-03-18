<?php

/**
 * Migrate existing hardcoded content to use Paragraphs.
 *
 * This script:
 * 1. Loads the About Us page and creates paragraph entities from its body content
 * 2. Does the same for the White Papers page
 */

use Drupal\paragraphs\Entity\Paragraph;
use Drupal\node\Entity\Node;

$entity_type_manager = \Drupal::entityTypeManager();
$node_storage = $entity_type_manager->getStorage('node');

// ---------------------------------------------------------------
// 1. About Us page — convert body to paragraphs
// ---------------------------------------------------------------
$about_nodes = $node_storage->loadByProperties(['title' => 'About Us', 'type' => 'page']);
if ($about_node = reset($about_nodes)) {
  echo "Found About Us node (nid: " . $about_node->id() . ")\n";

  // Check if paragraphs already exist so we don't duplicate
  if ($about_node->hasField('field_cpg_paragraphs') && $about_node->get('field_cpg_paragraphs')->isEmpty()) {
    // Create Hero paragraph
    $hero = Paragraph::create([
      'type' => 'cpg_hero',
      'field_p_title' => 'About CPG Matters',
      'field_p_subtitle' => [
        'value' => '<p>We are a leading source of news, analysis, and insight for the consumer packaged goods industry. Our mission is to deliver the intelligence that drives smarter decisions.</p>',
        'format' => 'full_html',
      ],
    ]);
    $hero->save();

    // Create Text paragraph for intro
    $intro_text = Paragraph::create([
      'type' => 'cpg_text',
      'field_p_body' => [
        'value' => '<h2>Our Mission</h2><p>CPG Matters was founded with a singular vision: to be the most trusted and comprehensive resource for professionals in the consumer packaged goods industry. We believe in the power of informed decision-making and strive to provide the insights, analysis, and news that matter most to our readers.</p><p>Our team of experienced journalists and industry analysts work tirelessly to bring you the latest developments in sustainability, e-commerce, supply chain management, marketing innovation, and more.</p>',
        'format' => 'full_html',
      ],
    ]);
    $intro_text->save();

    // Create Stats Bar
    $stat1 = Paragraph::create([
      'type' => 'cpg_stat_item',
      'field_p_icon' => '50K+',
      'field_p_title' => 'Monthly Readers',
    ]);
    $stat1->save();

    $stat2 = Paragraph::create([
      'type' => 'cpg_stat_item',
      'field_p_icon' => '1,200+',
      'field_p_title' => 'Articles Published',
    ]);
    $stat2->save();

    $stat3 = Paragraph::create([
      'type' => 'cpg_stat_item',
      'field_p_icon' => '10+',
      'field_p_title' => 'Industry Categories',
    ]);
    $stat3->save();

    $stat4 = Paragraph::create([
      'type' => 'cpg_stat_item',
      'field_p_icon' => '200+',
      'field_p_title' => 'Partner Companies',
    ]);
    $stat4->save();

    $stats_bar = Paragraph::create([
      'type' => 'cpg_stats_bar',
      'field_p_title' => 'CPG Matters by the Numbers',
      'field_p_items' => [
        ['target_id' => $stat1->id(), 'target_revision_id' => $stat1->getRevisionId()],
        ['target_id' => $stat2->id(), 'target_revision_id' => $stat2->getRevisionId()],
        ['target_id' => $stat3->id(), 'target_revision_id' => $stat3->getRevisionId()],
        ['target_id' => $stat4->id(), 'target_revision_id' => $stat4->getRevisionId()],
      ],
    ]);
    $stats_bar->save();

    // Create Features/Values section
    $val1 = Paragraph::create([
      'type' => 'cpg_feature_item',
      'field_p_icon' => '🎯',
      'field_p_title' => 'Accuracy',
      'field_p_body' => ['value' => '<p>We are committed to delivering precise, fact-checked information you can rely on for critical business decisions.</p>', 'format' => 'full_html'],
    ]);
    $val1->save();

    $val2 = Paragraph::create([
      'type' => 'cpg_feature_item',
      'field_p_icon' => '💡',
      'field_p_title' => 'Innovation',
      'field_p_body' => ['value' => '<p>We spotlight the trends, technologies, and strategies that are reshaping the CPG landscape.</p>', 'format' => 'full_html'],
    ]);
    $val2->save();

    $val3 = Paragraph::create([
      'type' => 'cpg_feature_item',
      'field_p_icon' => '🤝',
      'field_p_title' => 'Community',
      'field_p_body' => ['value' => '<p>We foster connections between industry leaders, brands, and professionals across the CPG ecosystem.</p>', 'format' => 'full_html'],
    ]);
    $val3->save();

    $val4 = Paragraph::create([
      'type' => 'cpg_feature_item',
      'field_p_icon' => '🌱',
      'field_p_title' => 'Sustainability',
      'field_p_body' => ['value' => '<p>We champion sustainable practices and highlight the companies making a positive environmental impact.</p>', 'format' => 'full_html'],
    ]);
    $val4->save();

    $values_section = Paragraph::create([
      'type' => 'cpg_features',
      'field_p_title' => 'Our Values',
      'field_p_subtitle' => ['value' => '<p>The principles that guide everything we do at CPG Matters.</p>', 'format' => 'full_html'],
      'field_p_items' => [
        ['target_id' => $val1->id(), 'target_revision_id' => $val1->getRevisionId()],
        ['target_id' => $val2->id(), 'target_revision_id' => $val2->getRevisionId()],
        ['target_id' => $val3->id(), 'target_revision_id' => $val3->getRevisionId()],
        ['target_id' => $val4->id(), 'target_revision_id' => $val4->getRevisionId()],
      ],
    ]);
    $values_section->save();

    // Create CTA
    $cta = Paragraph::create([
      'type' => 'cpg_cta',
      'field_p_title' => 'Ready to Stay Ahead?',
      'field_p_body' => ['value' => '<p>Subscribe to our newsletter and never miss the insights that matter most to the CPG industry.</p>', 'format' => 'full_html'],
      'field_p_link' => ['uri' => 'internal:/register/step1', 'title' => 'Subscribe Now'],
    ]);
    $cta->save();

    // Attach all paragraphs to the node
    $about_node->set('field_cpg_paragraphs', [
      ['target_id' => $hero->id(), 'target_revision_id' => $hero->getRevisionId()],
      ['target_id' => $intro_text->id(), 'target_revision_id' => $intro_text->getRevisionId()],
      ['target_id' => $stats_bar->id(), 'target_revision_id' => $stats_bar->getRevisionId()],
      ['target_id' => $values_section->id(), 'target_revision_id' => $values_section->getRevisionId()],
      ['target_id' => $cta->id(), 'target_revision_id' => $cta->getRevisionId()],
    ]);
    $about_node->save();
    echo "Migrated About Us page to paragraphs!\n";
  } else {
    echo "About Us already has paragraphs, skipping.\n";
  }
} else {
  echo "About Us node not found.\n";
}

// ---------------------------------------------------------------
// 2. White Papers page — convert body to paragraphs
// ---------------------------------------------------------------
$wp_nodes = $node_storage->loadByProperties(['title' => 'White Papers', 'type' => 'page']);
if (!$wp_nodes) {
  $wp_nodes = $node_storage->loadByProperties(['title' => 'White Papers & Research', 'type' => 'page']);
}
if ($wp_node = reset($wp_nodes)) {
  echo "Found White Papers node (nid: " . $wp_node->id() . ")\n";

  if ($wp_node->hasField('field_cpg_paragraphs') && $wp_node->get('field_cpg_paragraphs')->isEmpty()) {
    // Create Hero
    $wp_hero = Paragraph::create([
      'type' => 'cpg_hero',
      'field_p_title' => 'White Papers & Research',
      'field_p_subtitle' => [
        'value' => '<p>In-depth analysis and expert research on the latest trends shaping the consumer packaged goods industry.</p>',
        'format' => 'full_html',
      ],
    ]);
    $wp_hero->save();

    // Create Text block
    $wp_text = Paragraph::create([
      'type' => 'cpg_text',
      'field_p_body' => [
        'value' => '<h2>Featured Research</h2><p>Browse our collection of white papers covering sustainability, supply chain innovation, e-commerce strategy, and more. Each paper is authored by industry experts and backed by rigorous data analysis.</p>',
        'format' => 'full_html',
      ],
    ]);
    $wp_text->save();

    // CTA for download
    $wp_cta = Paragraph::create([
      'type' => 'cpg_cta',
      'field_p_title' => 'Want Access to Our Research Library?',
      'field_p_body' => ['value' => '<p>Register for a free account to download all white papers and receive notifications when new research is published.</p>', 'format' => 'full_html'],
      'field_p_link' => ['uri' => 'internal:/register/step1', 'title' => 'Create Free Account'],
    ]);
    $wp_cta->save();

    $wp_node->set('field_cpg_paragraphs', [
      ['target_id' => $wp_hero->id(), 'target_revision_id' => $wp_hero->getRevisionId()],
      ['target_id' => $wp_text->id(), 'target_revision_id' => $wp_text->getRevisionId()],
      ['target_id' => $wp_cta->id(), 'target_revision_id' => $wp_cta->getRevisionId()],
    ]);
    $wp_node->save();
    echo "Migrated White Papers page to paragraphs!\n";
  } else {
    echo "White Papers already has paragraphs, skipping.\n";
  }
} else {
  echo "White Papers node not found.\n";
}

echo "\nContent migration complete!\n";
