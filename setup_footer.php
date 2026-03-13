<?php
/**
 * Create footer menus to make the footer editable in the dashboard.
 */
use Drupal\system\Entity\Menu;
use Drupal\menu_link_content\Entity\MenuLinkContent;
use Drupal\block\Entity\Block;

// Create 4 menus for the columns
$menus = [
  'footer_about' => [
    'title' => 'Footer: About CPG Matters',
    'links' => [
      ['title' => 'About Us', 'link' => 'internal:/about'],
      ['title' => 'Our Team', 'link' => 'internal:/team'],
      ['title' => 'Careers', 'link' => 'internal:/careers'],
      ['title' => 'Contact', 'link' => 'internal:/contact'],
    ]
  ],
  'footer_resources' => [
    'title' => 'Footer: Resources',
    'links' => [
      ['title' => 'Archive', 'link' => 'internal:/archive'],
      ['title' => 'Newsletter', 'link' => 'internal:/newsletter'],
      ['title' => 'Events', 'link' => 'internal:/events'],
      ['title' => 'Lead Conference', 'link' => 'internal:/conference'],
    ]
  ],
  'footer_topics' => [
    'title' => 'Footer: Topics',
    'links' => [
      ['title' => 'Sustainability', 'link' => 'internal:/category/sustainability'],
      ['title' => 'E-Commerce', 'link' => 'internal:/category/e-commerce'],
      ['title' => 'Innovation', 'link' => 'internal:/category/innovation'],
      ['title' => 'Market Analysis', 'link' => 'internal:/category/market-analysis'],
    ]
  ],
  'footer_connect' => [
    'title' => 'Footer: Connect',
    'links' => [
      ['title' => 'LinkedIn', 'link' => 'https://linkedin.com'],
      ['title' => 'Twitter', 'link' => 'https://twitter.com'],
      ['title' => 'Facebook', 'link' => 'https://facebook.com'],
      ['title' => 'Instagram', 'link' => 'https://instagram.com'],
    ]
  ]
];

foreach ($menus as $id => $data) {
  // Create menu if it doesn't exist
  if (!Menu::load($id)) {
    $menu = Menu::create([
      'id' => $id,
      'label' => $data['title'],
      'description' => 'Editable links for the footer column.',
    ]);
    $menu->save();
    
    // Create links
    $weight = 0;
    foreach ($data['links'] as $link_data) {
      MenuLinkContent::create([
        'title' => $link_data['title'],
        'link' => ['uri' => $link_data['link']],
        'menu_name' => $id,
        'weight' => $weight++,
      ])->save();
    }
  }
}

// Ensure the regions exist in the theme and map these menus to the blocks.
$theme = 'cpg_theme';
$regions = [
  'footer_first' => 'footer_about',
  'footer_second' => 'footer_resources',
  'footer_third' => 'footer_topics',
  'footer_fourth' => 'footer_connect',
];

$weight = 1;
foreach ($regions as $region => $menu_id) {
  $block_id = $theme . '_' . $menu_id;
  
  // Delete existing block to update it if it exists
  if ($block = Block::load($block_id)) {
    $block->delete();
  }

  $menu = Menu::load($menu_id);
  $title = str_replace('Footer: ', '', $menu->label());

  $block = Block::create([
    'id' => $block_id,
    'theme' => $theme,
    'region' => $region,
    'weight' => $weight++,
    'plugin' => 'system_menu_block:' . $menu_id,
    'settings' => [
      'id' => 'system_menu_block:' . $menu_id,
      'label' => $title,
      'label_display' => 'visible',
      'provider' => 'system',
      'level' => 1,
      'depth' => 0,
      'expand_all_items' => FALSE,
    ],
    'visibility' => [],
  ]);
  $block->save();
}

echo "Footer menus and blocks created and placed!\n";
