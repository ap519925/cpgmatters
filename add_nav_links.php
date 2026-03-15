<?php
use Drupal\menu_link_content\Entity\MenuLinkContent;

/** @var \Drupal\Core\Extension\ExtensionPathResolver $path_resolver */

$links = [
  'dictionary_page' => [
    'title' => 'Dictionary',
    'link' => ['uri' => 'internal:/dictionary'],
    'menu_name' => 'main',
    'weight' => 50,
  ],
  'sitemap_page' => [
    'title' => 'Site Map',
    'link' => ['uri' => 'internal:/sitemap'],
    'menu_name' => 'main',
    'weight' => 60,
  ],
];

foreach ($links as $id => $link_data) {
  $query = \Drupal::entityQuery('menu_link_content')
    ->condition('link.uri', $link_data['link']['uri'])
    ->condition('menu_name', $link_data['menu_name'])
    ->accessCheck(FALSE);
  
  $nids = $query->execute();
  if (empty($nids)) {
    $menu_link = MenuLinkContent::create($link_data);
    $menu_link->save();
    echo "Added menu link for {$link_data['title']}\n";
  } else {
    echo "Menu link for {$link_data['title']} already exists\n";
  }
}
