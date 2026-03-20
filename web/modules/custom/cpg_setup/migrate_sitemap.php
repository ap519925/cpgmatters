<?php

use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;

$node = Node::load(36);
if (!$node) {
  echo "Node 36 not found!\n";
  exit;
}

// Ensure the paragraphs field exists on this node
if (!$node->hasField('field_cpg_paragraphs')) {
  echo "Node does not have field_cpg_paragraphs!\n";
  exit;
}

$paragraphs = [];

// 1. Hero
$hero = Paragraph::create([
  'type' => 'cpg_sitemap_hero',
  'field_p_title' => 'Site Map',
  'field_p_body' => ['value' => 'Navigate through all sections of CPG Matters. Find articles, resources, tools, and more.', 'format' => 'basic_html'],
]);
$hero->save();
$paragraphs[] = $hero;

// 2. Popular Destinations
$popular_links = [
  ['label' => 'Home Page', 'icon' => '🏠', 'url' => 'internal:/'],
  ['label' => 'Latest News', 'icon' => '📰', 'url' => 'internal:/articles'],
  ['label' => 'White Papers', 'icon' => '📋', 'url' => 'internal:/white-papers'],
  ['label' => 'Industry Dictionary', 'icon' => '📖', 'url' => 'internal:/dictionary'],
];

$pop_items = [];
foreach ($popular_links as $pl) {
  $p = Paragraph::create([
    'type' => 'cpg_sitemap_popular_link',
    'field_p_title' => $pl['label'],
    'field_p_icon' => $pl['icon'],
    'field_p_link' => ['uri' => $pl['url']],
  ]);
  $p->save();
  $pop_items[] = clone $p;
}

$popular = Paragraph::create([
  'type' => 'cpg_sitemap_popular',
  'field_p_title' => 'Most Popular Destinations',
  'field_p_items' => $pop_items,
]);
$popular->save();
$paragraphs[] = $popular;

// Helper to create sections
function createSitemapSection($title, $icon, $links) {
  $link_items = [];
  foreach ($links as $l) {
    $p = Paragraph::create([
      'type' => 'cpg_sitemap_link',
      'field_p_link' => ['uri' => $l['url'], 'title' => $l['title']],
    ]);
    $p->save();
    $link_items[] = clone $p;
  }
  
  $section = Paragraph::create([
    'type' => 'cpg_sitemap_section',
    'field_p_title' => $title,
    'field_p_icon' => $icon,
    'field_p_items' => $link_items,
  ]);
  $section->save();
  return clone $section;
}

// 3. Grid 1
$grid1_sections = [
  createSitemapSection('Main Navigation', '🌐', [
    ['title' => 'Home', 'url' => 'internal:/'],
    ['title' => 'News & Articles', 'url' => 'internal:/articles'],
    ['title' => 'About CPG Matters', 'url' => 'internal:/about-us'],
    ['title' => 'Contact Us', 'url' => 'internal:/contact'],
    ['title' => 'Register / Sign Up', 'url' => 'internal:/register'],
    ['title' => 'Sign In', 'url' => 'internal:/user/login'],
  ]),
  createSitemapSection('Content', '📰', [
    ['title' => 'All Articles', 'url' => 'internal:/articles'],
    ['title' => 'Featured Articles', 'url' => 'internal:/articles?featured=1'],
  ]),
  createSitemapSection('Resources', '📚', [
    ['title' => 'White Papers', 'url' => 'internal:/white-papers'],
    ['title' => 'Industry Dictionary', 'url' => 'internal:/dictionary'],
  ])
];

$grid1 = Paragraph::create([
  'type' => 'cpg_sitemap_grid',
  'field_p_items' => $grid1_sections,
]);
$grid1->save();
$paragraphs[] = clone $grid1;

// 4. Grid 2
$grid2_sections = [
  createSitemapSection('Directory', '🏢', [
    ['title' => 'Company Directory', 'url' => 'internal:/directory'],
    ['title' => 'Claim Your Profile', 'url' => 'internal:/directory/claim'],
  ]),
  createSitemapSection('About', 'ℹ️', [
    ['title' => 'About CPG Matters', 'url' => 'internal:/about-us'],
    ['title' => 'Careers', 'url' => 'internal:/careers'],
    ['title' => 'Press Room', 'url' => 'internal:/press'],
  ]),
  createSitemapSection('Legal', '⚖️', [
    ['title' => 'Privacy Policy', 'url' => 'internal:/privacy-policy'],
    ['title' => 'Terms of Use', 'url' => 'internal:/terms-of-use'],
  ])
];

$grid2 = Paragraph::create([
  'type' => 'cpg_sitemap_grid',
  'field_p_items' => $grid2_sections,
]);
$grid2->save();
$paragraphs[] = clone $grid2;

// Clear existing paragraphs from the node to avoid duplicates if run multiple times
$node->set('field_cpg_paragraphs', []);

// Add new paragraphs
foreach ($paragraphs as $p) {
  $node->field_cpg_paragraphs->appendItem($p);
}

// Clear the body field!
$node->set('body', NULL);

$node->save();

echo "Sitemap successfully migrated to paragraphs for Node {$node->id()}!\n";
?>
