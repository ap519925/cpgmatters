<?php

/**
 * @file
 * Populates the About Us page with all paragraph content matching the mockup.
 *
 * Sections (in order, matching mockup at cpg.aa82.com/mock/about.html):
 *   1. Hero (cpg_hero) — "About CPG Matters"
 *   2. Our Story (cpg_text) — with heading
 *   3. Mission quote (cpg_quote)
 *   4. What We Do (cpg_text)
 *   5. Our Values (cpg_features with 3 cpg_feature_item children)
 *   6. Stats Bar (cpg_stats_bar with 4 cpg_stat_item children)
 *   7. Our Team (cpg_team_grid with 4 cpg_team_member children)
 *   8. Join the CPG Matters Community (cpg_cta)
 *   9. What We Cover (cpg_text)
 *
 * Run with: ddev drush php:script populate_about.php
 */

use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;

// ── Find the About Us node ──
$query = \Drupal::entityQuery('node')
  ->condition('type', 'page')
  ->condition('title', 'About Us')
  ->accessCheck(FALSE);
$nids = $query->execute();

if (empty($nids)) {
  echo "❌ No About Us page found.\n";
  return;
}

$nid = reset($nids);
$node = Node::load($nid);
echo "Found About Us page (nid: $nid)\n";

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
  'field_p_title' => 'About CPG Matters',
  'field_p_subtitle' => [
    'value' => 'The leading voice in consumer packaged goods, delivering insights, analysis, and innovation stories that matter to industry professionals worldwide.',
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
// 2. OUR STORY (cpg_text with heading)
// ═══════════════════════════════════════════════════════════════════
$story = Paragraph::create([
  'type' => 'cpg_text',
  'field_p_body' => [
    'value' => '<h2 class="cpg-about__section-title">Our Story</h2>
<p>Founded in 2015, <strong style="color:#b5131a;">CPG Matters</strong> emerged from a simple observation: the consumer packaged goods industry needed a dedicated platform that went beyond surface-level news to deliver deep, actionable insights that drive business decisions.</p>
<p>What started as a monthly newsletter has evolved into a comprehensive multimedia platform serving over 150,000 industry professionals across brands, agencies, retailers, and service providers. Our team of experienced journalists and industry analysts works tirelessly to uncover the trends, innovations, and strategic moves shaping the future of CPG.</p>',
    'format' => 'full_html',
  ],
]);
$story->save();
$paragraphs[] = [
  'target_id' => $story->id(),
  'target_revision_id' => $story->getRevisionId(),
];
echo "✓ Created Our Story paragraph\n";

// ═══════════════════════════════════════════════════════════════════
// 3. MISSION QUOTE (cpg_quote)
// ═══════════════════════════════════════════════════════════════════
$quote = Paragraph::create([
  'type' => 'cpg_quote',
  'field_p_body' => [
    'value' => '<p>"Our mission is to empower CPG professionals with the knowledge, connections, and insights they need to drive innovation, navigate change, and build sustainable, successful businesses in an ever-evolving marketplace."</p>',
    'format' => 'full_html',
  ],
]);
$quote->save();
$paragraphs[] = [
  'target_id' => $quote->id(),
  'target_revision_id' => $quote->getRevisionId(),
];
echo "✓ Created Mission Quote paragraph\n";

// ═══════════════════════════════════════════════════════════════════
// 4. WHAT WE DO (cpg_text)
// ═══════════════════════════════════════════════════════════════════
$what_we_do = Paragraph::create([
  'type' => 'cpg_text',
  'field_p_body' => [
    'value' => '<h2 class="cpg-about__section-title">What We Do</h2>
<p>CPG Matters provides comprehensive coverage of the consumer packaged goods industry through multiple channels and formats. Our editorial team produces in-depth features, breaking news, trend analysis, and executive interviews that give you a competitive edge.</p>
<p>Beyond our digital publication, we host industry events, produce original research, and maintain the industry\'s most comprehensive directory of brands, agencies, and service providers. Our annual Lead Conference brings together top executives to discuss the future of the industry.</p>',
    'format' => 'full_html',
  ],
]);
$what_we_do->save();
$paragraphs[] = [
  'target_id' => $what_we_do->id(),
  'target_revision_id' => $what_we_do->getRevisionId(),
];
echo "✓ Created What We Do paragraph\n";

// ═══════════════════════════════════════════════════════════════════
// 5. OUR VALUES (cpg_features with 3 items)
// ═══════════════════════════════════════════════════════════════════
$values = [
  [
    'title' => 'Accuracy',
    'icon' => '🎯',
    'body' => 'We are committed to rigorous fact-checking and objective reporting that our readers can trust.',
  ],
  [
    'title' => 'Innovation',
    'icon' => '💡',
    'body' => 'We constantly evolve our coverage and platform to meet the changing needs of our industry.',
  ],
  [
    'title' => 'Community',
    'icon' => '🤝',
    'body' => 'We foster connections and dialogue among CPG professionals at all levels and across all sectors.',
  ],
];

$value_items = [];
foreach ($values as $v) {
  $item = Paragraph::create([
    'type' => 'cpg_feature_item',
    'field_p_title' => $v['title'],
    'field_p_icon' => $v['icon'],
    'field_p_body' => [
      'value' => $v['body'],
      'format' => 'plain_text',
    ],
  ]);
  $item->save();
  $value_items[] = [
    'target_id' => $item->id(),
    'target_revision_id' => $item->getRevisionId(),
  ];
}

$values_section = Paragraph::create([
  'type' => 'cpg_features',
  'field_p_title' => 'Our Values',
  'field_p_items' => $value_items,
]);
$values_section->save();
$paragraphs[] = [
  'target_id' => $values_section->id(),
  'target_revision_id' => $values_section->getRevisionId(),
];
echo "✓ Created Our Values section with " . count($value_items) . " values\n";

// ═══════════════════════════════════════════════════════════════════
// 6. STATS BAR (cpg_stats_bar with 4 items)
// ═══════════════════════════════════════════════════════════════════
$stats = [
  ['number' => '150K+', 'label' => 'Monthly Readers'],
  ['number' => '500+', 'label' => 'Articles Published'],
  ['number' => '75+', 'label' => 'Industry Events'],
  ['number' => '1,200+', 'label' => 'Companies Profiled'],
];

$stat_items = [];
foreach ($stats as $s) {
  $item = Paragraph::create([
    'type' => 'cpg_stat_item',
    'field_p_title' => $s['label'],
    'field_p_icon' => $s['number'],
  ]);
  $item->save();
  $stat_items[] = [
    'target_id' => $item->id(),
    'target_revision_id' => $item->getRevisionId(),
  ];
}

$stats_section = Paragraph::create([
  'type' => 'cpg_stats_bar',
  'field_p_items' => $stat_items,
]);
$stats_section->save();
$paragraphs[] = [
  'target_id' => $stats_section->id(),
  'target_revision_id' => $stats_section->getRevisionId(),
];
echo "✓ Created Stats Bar with " . count($stat_items) . " stats\n";

// ═══════════════════════════════════════════════════════════════════
// 7. OUR TEAM (cpg_team_grid with 4 members)
// ═══════════════════════════════════════════════════════════════════
$team_members = [
  [
    'name' => 'Sarah Mitchell',
    'role' => 'Editor-in-Chief',
    'bio' => '15+ years covering CPG innovation and sustainability initiatives.',
  ],
  [
    'name' => 'Michael Chen',
    'role' => 'Senior Editor',
    'bio' => 'Technology and supply chain specialist with MBA from Wharton.',
  ],
  [
    'name' => 'Emily Rodriguez',
    'role' => 'Managing Editor',
    'bio' => 'Former brand manager at Fortune 500 CPG company.',
  ],
  [
    'name' => 'David Park',
    'role' => 'Digital Director',
    'bio' => 'Digital strategy expert focused on audience growth and engagement.',
  ],
];

$member_items = [];
foreach ($team_members as $m) {
  $item = Paragraph::create([
    'type' => 'cpg_team_member',
    'field_p_title' => $m['name'],
    'field_p_icon' => $m['role'],
    'field_p_body' => [
      'value' => $m['bio'],
      'format' => 'plain_text',
    ],
  ]);
  $item->save();
  $member_items[] = [
    'target_id' => $item->id(),
    'target_revision_id' => $item->getRevisionId(),
  ];
}

$team_section = Paragraph::create([
  'type' => 'cpg_team_grid',
  'field_p_title' => 'Our Team',
  'field_p_subtitle' => [
    'value' => 'Our editorial team combines decades of journalism experience with deep industry expertise to deliver the insights you need.',
    'format' => 'plain_text',
  ],
  'field_p_items' => $member_items,
]);
$team_section->save();
$paragraphs[] = [
  'target_id' => $team_section->id(),
  'target_revision_id' => $team_section->getRevisionId(),
];
echo "✓ Created Our Team section with " . count($member_items) . " members\n";

// ═══════════════════════════════════════════════════════════════════
// 8. JOIN THE CPG MATTERS COMMUNITY — CTA
// ═══════════════════════════════════════════════════════════════════
$cta = Paragraph::create([
  'type' => 'cpg_cta',
  'field_p_title' => 'Join the CPG Matters Community',
  'field_p_body' => [
    'value' => 'Get exclusive insights, industry analysis, and breaking news delivered to your inbox. Subscribe today and stay ahead of the curve.',
    'format' => 'plain_text',
  ],
  'field_p_link' => [
    'uri' => 'internal:/register',
    'title' => 'SUBSCRIBE NOW',
  ],
]);
$cta->save();
$paragraphs[] = [
  'target_id' => $cta->id(),
  'target_revision_id' => $cta->getRevisionId(),
];
echo "✓ Created CTA paragraph\n";

// ═══════════════════════════════════════════════════════════════════
// 9. WHAT WE COVER (cpg_text)
// ═══════════════════════════════════════════════════════════════════
$what_we_cover = Paragraph::create([
  'type' => 'cpg_text',
  'field_p_body' => [
    'value' => '<h2 class="cpg-about__section-title">What We Cover</h2>
<p>Our editorial focus spans the full spectrum of consumer packaged goods, including:</p>
<div class="cpg-about__topics">
  <p class="cpg-about__topic"><span class="cpg-about__topic-name">Sustainability &amp; ESG:</span> Environmental initiatives, sustainable packaging, circular economy strategies, and corporate responsibility programs.</p>
  <p class="cpg-about__topic"><span class="cpg-about__topic-name">Innovation &amp; Product Development:</span> New product launches, R&amp;D trends, consumer insights, and emerging categories.</p>
  <p class="cpg-about__topic"><span class="cpg-about__topic-name">Marketing &amp; Brand Strategy:</span> Digital marketing, brand positioning, influencer partnerships, and consumer engagement tactics.</p>
  <p class="cpg-about__topic"><span class="cpg-about__topic-name">Supply Chain &amp; Operations:</span> Logistics optimization, manufacturing innovations, automation, and distribution strategies.</p>
  <p class="cpg-about__topic"><span class="cpg-about__topic-name">E-Commerce &amp; Retail:</span> Direct-to-consumer strategies, omnichannel retail, marketplace dynamics, and shopper behavior.</p>
</div>',
    'format' => 'full_html',
  ],
]);
$what_we_cover->save();
$paragraphs[] = [
  'target_id' => $what_we_cover->id(),
  'target_revision_id' => $what_we_cover->getRevisionId(),
];
echo "✓ Created What We Cover paragraph\n";

// ═══════════════════════════════════════════════════════════════════
// Save all paragraphs to the node
// ═══════════════════════════════════════════════════════════════════
$node->field_cpg_paragraphs = $paragraphs;
$node->save();

echo "\n✅ About Us page populated with " . count($paragraphs) . " paragraph sections!\n";
echo "Visit: /about-us\n";
