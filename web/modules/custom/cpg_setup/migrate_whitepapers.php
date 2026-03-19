<?php

/**
 * Migrate White Papers page content to match the full mockup.
 * Creates paragraph entities for all sections:
 *   1. Hero (title + subtitle)
 *   2. Browse by Topic grid (cpg_features with topic cards)
 *   3. Featured Research (cpg_media_text)
 *   4. Popular White Papers (cpg_card_grid with cpg_card items)
 *   5. Newsletter CTA (cpg_cta)
 */

use Drupal\paragraphs\Entity\Paragraph;
use Drupal\node\Entity\Node;

$entity_type_manager = \Drupal::entityTypeManager();
$node_storage = $entity_type_manager->getStorage('node');

// Find the White Papers node
$wp_nodes = $node_storage->loadByProperties(['title' => 'White Papers', 'type' => 'page']);
if (!$wp_nodes) {
  $wp_nodes = $node_storage->loadByProperties(['title' => 'White Papers & Research', 'type' => 'page']);
}

if ($wp_node = reset($wp_nodes)) {
  echo "Found White Papers node (nid: " . $wp_node->id() . ")\n";

  // Clear existing paragraphs first
  if ($wp_node->hasField('field_cpg_paragraphs')) {
    $wp_node->set('field_cpg_paragraphs', []);
    $wp_node->save();
    echo "Cleared existing paragraphs.\n";
  }

  // 1. Hero - just title/subtitle, no background
  $hero = Paragraph::create([
    'type' => 'cpg_hero',
    'field_p_title' => 'White Papers & Research',
    'field_p_subtitle' => [
      'value' => '<p>In-depth analysis, original research, and strategic insights from industry leaders. Download comprehensive reports on the trends shaping the future of CPG.</p>',
      'format' => 'full_html',
    ],
  ]);
  $hero->save();
  echo "Created Hero paragraph.\n";

  // 2. Browse by Topic - using cpg_features with feature items as topic cards
  $topic1 = Paragraph::create([
    'type' => 'cpg_feature_item',
    'field_p_icon' => '🌱',
    'field_p_title' => 'Sustainability',
    'field_p_body' => ['value' => '<p>23 white papers</p>', 'format' => 'full_html'],
  ]);
  $topic1->save();

  $topic2 = Paragraph::create([
    'type' => 'cpg_feature_item',
    'field_p_icon' => '🛒',
    'field_p_title' => 'E-Commerce',
    'field_p_body' => ['value' => '<p>18 white papers</p>', 'format' => 'full_html'],
  ]);
  $topic2->save();

  $topic3 = Paragraph::create([
    'type' => 'cpg_feature_item',
    'field_p_icon' => '📦',
    'field_p_title' => 'Supply Chain',
    'field_p_body' => ['value' => '<p>31 white papers</p>', 'format' => 'full_html'],
  ]);
  $topic3->save();

  $topic4 = Paragraph::create([
    'type' => 'cpg_feature_item',
    'field_p_icon' => '📊',
    'field_p_title' => 'Digital Marketing',
    'field_p_body' => ['value' => '<p>26 white papers</p>', 'format' => 'full_html'],
  ]);
  $topic4->save();

  $topic5 = Paragraph::create([
    'type' => 'cpg_feature_item',
    'field_p_icon' => '💡',
    'field_p_title' => 'Innovation',
    'field_p_body' => ['value' => '<p>19 white papers</p>', 'format' => 'full_html'],
  ]);
  $topic5->save();

  $topic6 = Paragraph::create([
    'type' => 'cpg_feature_item',
    'field_p_icon' => '📈',
    'field_p_title' => 'Market Research',
    'field_p_body' => ['value' => '<p>28 white papers</p>', 'format' => 'full_html'],
  ]);
  $topic6->save();

  $topic7 = Paragraph::create([
    'type' => 'cpg_feature_item',
    'field_p_icon' => '🎯',
    'field_p_title' => 'Consumer Insights',
    'field_p_body' => ['value' => '<p>22 white papers</p>', 'format' => 'full_html'],
  ]);
  $topic7->save();

  $topic8 = Paragraph::create([
    'type' => 'cpg_feature_item',
    'field_p_icon' => '🤖',
    'field_p_title' => 'AI & Technology',
    'field_p_body' => ['value' => '<p>15 white papers</p>', 'format' => 'full_html'],
  ]);
  $topic8->save();

  $browse_topics = Paragraph::create([
    'type' => 'cpg_features',
    'field_p_title' => 'Browse by Topic',
    'field_p_items' => [
      ['target_id' => $topic1->id(), 'target_revision_id' => $topic1->getRevisionId()],
      ['target_id' => $topic2->id(), 'target_revision_id' => $topic2->getRevisionId()],
      ['target_id' => $topic3->id(), 'target_revision_id' => $topic3->getRevisionId()],
      ['target_id' => $topic4->id(), 'target_revision_id' => $topic4->getRevisionId()],
      ['target_id' => $topic5->id(), 'target_revision_id' => $topic5->getRevisionId()],
      ['target_id' => $topic6->id(), 'target_revision_id' => $topic6->getRevisionId()],
      ['target_id' => $topic7->id(), 'target_revision_id' => $topic7->getRevisionId()],
      ['target_id' => $topic8->id(), 'target_revision_id' => $topic8->getRevisionId()],
    ],
  ]);
  $browse_topics->save();
  echo "Created Browse by Topic grid.\n";

  // 3. Featured Research - using cpg_media_text
  $featured = Paragraph::create([
    'type' => 'cpg_media_text',
    'field_p_title' => 'The Future of Sustainable Packaging: 2026-2030 Outlook',
    'field_p_body' => [
      'value' => '<p>This comprehensive 45-page report examines the transformation of packaging materials, analyzing emerging technologies, regulatory frameworks, and consumer preferences driving the shift toward sustainable solutions.</p><p class="featured-meta">📄 45 pages &nbsp; 📅 January 2026 &nbsp; ⭐ 4.8/5 (234 downloads)</p>',
      'format' => 'full_html',
    ],
    'field_p_link' => ['uri' => 'internal:/register/step1', 'title' => 'Download Free Report →'],
    'field_p_icon' => 'FEATURED RESEARCH',
  ]);
  $featured->save();
  echo "Created Featured Research section.\n";

  // 4. Popular White Papers - using cpg_card_grid with cards
  $card1 = Paragraph::create([
    'type' => 'cpg_card',
    'field_p_icon' => 'SUPPLY CHAIN',
    'field_p_title' => 'AI-Driven Logistics: Optimizing the Last Mile',
    'field_p_body' => ['value' => '<p>Explore how artificial intelligence is revolutionizing last-mile delivery and warehouse management.</p>', 'format' => 'full_html'],
    'field_p_link' => ['uri' => 'internal:/register/step1', 'title' => 'Download ↓'],
  ]);
  $card1->save();

  $card2 = Paragraph::create([
    'type' => 'cpg_card',
    'field_p_icon' => 'E-COMMERCE',
    'field_p_title' => 'Direct-to-Consumer Strategies for 2026',
    'field_p_body' => ['value' => '<p>Comprehensive analysis of DTC trends and winning strategies for CPG brands.</p>', 'format' => 'full_html'],
    'field_p_link' => ['uri' => 'internal:/register/step1', 'title' => 'Download ↓'],
  ]);
  $card2->save();

  $card3 = Paragraph::create([
    'type' => 'cpg_card',
    'field_p_icon' => 'CONSUMER INSIGHTS',
    'field_p_title' => 'Gen Z Purchase Behavior Study',
    'field_p_body' => ['value' => '<p>Deep dive into Gen Z consumer preferences, purchasing patterns, and brand loyalty factors.</p>', 'format' => 'full_html'],
    'field_p_link' => ['uri' => 'internal:/register/step1', 'title' => 'Download ↓'],
  ]);
  $card3->save();

  $card4 = Paragraph::create([
    'type' => 'cpg_card',
    'field_p_icon' => 'SUSTAINABILITY',
    'field_p_title' => 'Circular Economy Implementation Guide',
    'field_p_body' => ['value' => '<p>Step-by-step framework for implementing circular economy principles across product design, manufacturing, and distribution.</p>', 'format' => 'full_html'],
    'field_p_link' => ['uri' => 'internal:/register/step1', 'title' => 'Download ↓'],
  ]);
  $card4->save();

  $card5 = Paragraph::create([
    'type' => 'cpg_card',
    'field_p_icon' => 'DIGITAL MARKETING',
    'field_p_title' => 'Influencer ROI Measurement Framework',
    'field_p_body' => ['value' => '<p>Data-driven methodology for tracking influencer campaign performance, attribution modeling, and budget optimization.</p>', 'format' => 'full_html'],
    'field_p_link' => ['uri' => 'internal:/register/step1', 'title' => 'Download ↓'],
  ]);
  $card5->save();

  $card6 = Paragraph::create([
    'type' => 'cpg_card',
    'field_p_icon' => 'INNOVATION',
    'field_p_title' => 'Plant-Based Product Development Trends',
    'field_p_body' => ['value' => '<p>Market analysis and product innovation insights for brands entering or expanding in the plant-based category.</p>', 'format' => 'full_html'],
    'field_p_link' => ['uri' => 'internal:/register/step1', 'title' => 'Download ↓'],
  ]);
  $card6->save();

  $popular_grid = Paragraph::create([
    'type' => 'cpg_card_grid',
    'field_p_title' => 'Popular White Papers',
    'field_p_items' => [
      ['target_id' => $card1->id(), 'target_revision_id' => $card1->getRevisionId()],
      ['target_id' => $card2->id(), 'target_revision_id' => $card2->getRevisionId()],
      ['target_id' => $card3->id(), 'target_revision_id' => $card3->getRevisionId()],
      ['target_id' => $card4->id(), 'target_revision_id' => $card4->getRevisionId()],
      ['target_id' => $card5->id(), 'target_revision_id' => $card5->getRevisionId()],
      ['target_id' => $card6->id(), 'target_revision_id' => $card6->getRevisionId()],
    ],
  ]);
  $popular_grid->save();
  echo "Created Popular White Papers grid.\n";

  // 5. Newsletter CTA
  $newsletter = Paragraph::create([
    'type' => 'cpg_cta',
    'field_p_title' => 'Get New White Papers in Your Inbox',
    'field_p_body' => ['value' => '<p>Be the first to access our latest research and insights. Subscribe to our white paper newsletter.</p>', 'format' => 'full_html'],
    'field_p_link' => ['uri' => 'internal:/register/step1', 'title' => 'Subscribe'],
  ]);
  $newsletter->save();
  echo "Created Newsletter CTA.\n";

  // Attach all paragraphs to node
  $wp_node->set('field_cpg_paragraphs', [
    ['target_id' => $hero->id(), 'target_revision_id' => $hero->getRevisionId()],
    ['target_id' => $browse_topics->id(), 'target_revision_id' => $browse_topics->getRevisionId()],
    ['target_id' => $featured->id(), 'target_revision_id' => $featured->getRevisionId()],
    ['target_id' => $popular_grid->id(), 'target_revision_id' => $popular_grid->getRevisionId()],
    ['target_id' => $newsletter->id(), 'target_revision_id' => $newsletter->getRevisionId()],
  ]);
  $wp_node->save();
  echo "\nWhite Papers page fully migrated with all sections!\n";

} else {
  echo "White Papers node not found.\n";
}
