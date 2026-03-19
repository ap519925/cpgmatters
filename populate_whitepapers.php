<?php

/**
 * @file
 * Populates the White Papers page with all paragraph content matching the mockup.
 *
 * Sections (in order):
 *   1. Hero  (cpg_hero)  — already exists, will be updated
 *   2. Browse by Topic  (cpg_features with cpg_feature_item children)
 *   3. Featured Research  (cpg_media_text)
 *   4. Popular White Papers  (cpg_card_grid with cpg_card children)
 *   5. Newsletter CTA  (cpg_cta)
 *
 * Run with: ddev drush php:script populate_whitepapers.php
 */

use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;

// ── Find the White Papers node ──
$query = \Drupal::entityQuery('node')
  ->condition('type', 'page')
  ->condition('title', 'White Papers')
  ->accessCheck(FALSE);
$nids = $query->execute();

if (empty($nids)) {
  echo "❌ No White Papers page found. Run setup_whitepapers_page.php first.\n";
  return;
}

$nid = reset($nids);
$node = Node::load($nid);
echo "Found White Papers page (nid: $nid)\n";

// ── Delete existing paragraphs so we start fresh ──
if ($node->hasField('field_cpg_paragraphs')) {
  $existing = $node->field_cpg_paragraphs->referencedEntities();
  foreach ($existing as $p) {
    echo "  Deleting old paragraph: " . $p->bundle() . " (ID: " . $p->id() . ")\n";
    $p->delete();
  }
  $node->field_cpg_paragraphs = [];
}

$paragraphs = [];

// ═══════════════════════════════════════════════════════════════════
// 1. HERO SECTION
// ═══════════════════════════════════════════════════════════════════
$hero = Paragraph::create([
  'type' => 'cpg_hero',
  'field_p_title' => 'White Papers & Research',
  'field_p_subtitle' => [
    'value' => 'In-depth analysis, original research, and strategic insights from industry leaders. Download comprehensive reports on the trends shaping the future of CPG.',
    'format' => 'full_html',
  ],
]);
$hero->save();
$paragraphs[] = [
  'target_id' => $hero->id(),
  'target_revision_id' => $hero->getRevisionId(),
];
echo "✓ Created Hero paragraph\n";

// ═══════════════════════════════════════════════════════════════════
// 2. BROWSE BY TOPIC (cpg_features with cpg_feature_item children)
// ═══════════════════════════════════════════════════════════════════
$topics = [
  ['title' => 'Sustainability',     'icon' => '🌱', 'count' => '23 white papers'],
  ['title' => 'E-Commerce',         'icon' => '🛒', 'count' => '18 white papers'],
  ['title' => 'Supply Chain',       'icon' => '🔗', 'count' => '31 white papers'],
  ['title' => 'Digital Marketing',  'icon' => '📊', 'count' => '26 white papers'],
  ['title' => 'Innovation',         'icon' => '💡', 'count' => '19 white papers'],
  ['title' => 'Market Research',    'icon' => '📈', 'count' => '28 white papers'],
  ['title' => 'Consumer Insights',  'icon' => '🎯', 'count' => '22 white papers'],
  ['title' => 'AI & Technology',    'icon' => '🤖', 'count' => '15 white papers'],
];

$topic_items = [];
foreach ($topics as $t) {
  $item = Paragraph::create([
    'type' => 'cpg_feature_item',
    'field_p_title' => $t['title'],
    'field_p_icon' => $t['icon'],
    'field_p_body' => [
      'value' => $t['count'],
      'format' => 'plain_text',
    ],
  ]);
  $item->save();
  $topic_items[] = [
    'target_id' => $item->id(),
    'target_revision_id' => $item->getRevisionId(),
  ];
}

$topics_section = Paragraph::create([
  'type' => 'cpg_features',
  'field_p_title' => 'Browse by Topic',
  'field_p_items' => $topic_items,
]);
$topics_section->save();
$paragraphs[] = [
  'target_id' => $topics_section->id(),
  'target_revision_id' => $topics_section->getRevisionId(),
];
echo "✓ Created Browse by Topic section with " . count($topic_items) . " topics\n";

// ═══════════════════════════════════════════════════════════════════
// 3. FEATURED RESEARCH (cpg_media_text)
// ═══════════════════════════════════════════════════════════════════
$featured = Paragraph::create([
  'type' => 'cpg_media_text',
  'field_p_title' => 'The Future of Sustainable Packaging: 2026-2030 Outlook',
  'field_p_body' => [
    'value' => '<p>This comprehensive 45-page report examines the transformation of packaging materials, analyzing emerging technologies, regulatory frameworks, and consumer preferences driving the shift toward sustainable solutions.</p><div class="featured-meta"><span>📄 45 pages</span><span>📅 January 2026</span><span>⭐ 4.8/5 (234 downloads)</span></div>',
    'format' => 'full_html',
  ],
]);
// Set the link field if it exists
if ($featured->hasField('field_p_link')) {
  $featured->field_p_link = [
    'uri' => 'internal:/white-papers',
    'title' => 'Download Free Report →',
  ];
}
$featured->save();
$paragraphs[] = [
  'target_id' => $featured->id(),
  'target_revision_id' => $featured->getRevisionId(),
];
echo "✓ Created Featured Research paragraph\n";

// ═══════════════════════════════════════════════════════════════════
// 4. POPULAR WHITE PAPERS (cpg_card_grid with cpg_card children)
// ═══════════════════════════════════════════════════════════════════
$white_papers = [
  [
    'title' => 'AI-Driven Logistics: Optimizing the Last Mile',
    'category' => 'SUPPLY CHAIN',
    'body' => 'Step-by-step framework for implementing circular economy principles across product design, manufacturing, and distribution.',
    'pages' => '41 pages',
    'badge' => 'FREE',
  ],
  [
    'title' => 'Direct-to-Consumer Strategies for 2026',
    'category' => 'E-COMMERCE',
    'body' => 'Data-driven methodology for tracking influencer campaign performance, attribution modeling, and budget optimization.',
    'pages' => '24 pages',
    'badge' => 'FREE',
  ],
  [
    'title' => 'Gen Z Purchase Behavior Study',
    'category' => 'CONSUMER INSIGHTS',
    'body' => 'Market analysis and product innovation insights for brands entering or expanding in the plant-based category.',
    'pages' => '36 pages',
    'badge' => 'PREMIUM',
  ],
  [
    'title' => 'Circular Economy Implementation Guide',
    'category' => 'SUSTAINABILITY',
    'body' => 'Step-by-step framework for implementing circular economy principles across product design, manufacturing, and distribution.',
    'pages' => '41 pages',
    'badge' => 'FREE',
  ],
  [
    'title' => 'Influencer ROI Measurement Framework',
    'category' => 'DIGITAL MARKETING',
    'body' => 'Data-driven methodology for tracking influencer campaign performance, attribution modeling, and budget optimization.',
    'pages' => '24 pages',
    'badge' => 'FREE',
  ],
  [
    'title' => 'Plant-Based Product Development Trends',
    'category' => 'INNOVATION',
    'body' => 'Market analysis and product innovation insights for brands entering or expanding in the plant-based category.',
    'pages' => '36 pages',
    'badge' => 'FREE',
  ],
];

$card_items = [];
foreach ($white_papers as $wp) {
  $card = Paragraph::create([
    'type' => 'cpg_card',
    'field_p_title' => $wp['title'],
    'field_p_icon' => $wp['category'],
    'field_p_body' => [
      'value' => $wp['body'],
      'format' => 'plain_text',
    ],
  ]);
  // Set link for download button
  if ($card->hasField('field_p_link')) {
    $card->field_p_link = [
      'uri' => 'internal:/white-papers',
      'title' => 'Download ↓',
    ];
  }
  // Set subtitle for badge/pages info
  if ($card->hasField('field_p_subtitle')) {
    $card->field_p_subtitle = [
      'value' => $wp['pages'],
      'format' => 'plain_text',
    ];
  }
  $card->save();
  $card_items[] = [
    'target_id' => $card->id(),
    'target_revision_id' => $card->getRevisionId(),
  ];
}

$card_grid = Paragraph::create([
  'type' => 'cpg_card_grid',
  'field_p_title' => 'Popular White Papers',
  'field_p_items' => $card_items,
]);
$card_grid->save();
$paragraphs[] = [
  'target_id' => $card_grid->id(),
  'target_revision_id' => $card_grid->getRevisionId(),
];
echo "✓ Created Popular White Papers grid with " . count($card_items) . " cards\n";

// ═══════════════════════════════════════════════════════════════════
// 5. NEWSLETTER CTA (cpg_cta)
// ═══════════════════════════════════════════════════════════════════
$newsletter = Paragraph::create([
  'type' => 'cpg_cta',
  'field_p_title' => 'Get New White Papers in Your Inbox',
  'field_p_body' => [
    'value' => 'Be the first to access our latest research and insights. Subscribe to our white paper newsletter.',
    'format' => 'plain_text',
  ],
  'field_p_link' => [
    'uri' => 'internal:/register',
    'title' => 'Subscribe',
  ],
]);
$newsletter->save();
$paragraphs[] = [
  'target_id' => $newsletter->id(),
  'target_revision_id' => $newsletter->getRevisionId(),
];
echo "✓ Created Newsletter CTA paragraph\n";

// ═══════════════════════════════════════════════════════════════════
// Save all paragraphs to the node
// ═══════════════════════════════════════════════════════════════════
$node->field_cpg_paragraphs = $paragraphs;
$node->save();

echo "\n✅ White Papers page populated with " . count($paragraphs) . " paragraph sections!\n";
echo "Visit: /white-papers\n";
