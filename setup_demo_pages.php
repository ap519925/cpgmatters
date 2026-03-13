<?php
/**
 * @file
 * Creates "About Us", "Contact", and "Archive" basic pages and adds them to the main menu.
 * 
 * Run with: ddev drush php:script setup_demo_pages.php
 */

use Drupal\node\Entity\Node;
use Drupal\menu_link_content\Entity\MenuLinkContent;

echo "Setting up demo pages...\n";

// Ensure 'page' content type exists
$type_storage = \Drupal::entityTypeManager()->getStorage('node_type');
if (!$type_storage->load('page')) {
  $type = $type_storage->create([
    'type' => 'page',
    'name' => 'Basic page',
    'description' => 'Use basic pages for your static content, such as an \'About us\' page.',
  ]);
  $type->save();
  echo "✅ Created 'page' content type.\n";
}

$pages = [
  'about-us' => [
    'title' => 'About Us',
    'body' => '<h2>Our Mission</h2><p>CPG Matters is dedicated to providing the most insightful analysis, latest trends, and comprehensive news for the Consumer Packaged Goods industry.</p><p>We believe in delivering quality journalism that helps industry leaders make informed decisions.</p>',
    'weight' => -10,
  ],
  'contact' => [
    'title' => 'Contact',
    'body' => '<p>Get in touch with the CPG Matters team.</p><p>Email: editors@cpgmatters.com</p><p>Phone: 1-800-CPG-NEWS</p>',
    // Note: this will serve as the generic fallback. Our real contact page is /contact module route,
    // wait, we have cpg_contact module! We don't need a contact node if we have the route, but a node is good for the menu if cpg_contact isn't active.
    // Actually, I'll just use the /contact path for the menu link.
  ],
  'archive' => [
    'title' => 'Archive',
    'body' => '<p>Browse our extensive archive of past articles, whitepapers, and reports.</p>',
    'weight' => 10,
  ],
];

// Let's create About Us and Archive nodes.
$nodes_created = [];

foreach (['about-us', 'archive'] as $alias_key) {
  $data = $pages[$alias_key];
  
  // Check if node already exists by title
  $existing = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['title' => $data['title'], 'type' => 'page']);
  if (empty($existing)) {
    $node = Node::create([
      'type' => 'page',
      'title' => $data['title'],
      'body' => [
        'value' => $data['body'],
        'format' => 'full_html',
      ],
      'status' => 1,
    ]);
    $node->save();
    
    // Set path alias (we don't strictly require pathauto here, we can set it via path module service)
    $path_alias = \Drupal::entityTypeManager()->getStorage('path_alias')->create([
      'path' => '/node/' . $node->id(),
      'alias' => '/' . $alias_key,
    ]);
    $path_alias->save();
    
    echo "✅ Created page: {$data['title']}\n";
    $nodes_created[$alias_key] = $node;
  } else {
    echo "ℹ️  Page already exists: {$data['title']}\n";
    $nodes_created[$alias_key] = reset($existing);
  }
}

// Ensure the main menu is clean for our demo setup
$menu_link_manager = \Drupal::entityTypeManager()->getStorage('menu_link_content');
$existing_links = $menu_link_manager->loadByProperties(['menu_name' => 'main']);
foreach ($existing_links as $link) {
  $link->delete();
}
echo "🧹 Cleared main menu.\n";

// Add links to main menu (Home, About Us, Contact, Archive)
$menu_items = [
  ['title' => 'Home', 'uri' => 'internal:/', 'weight' => -20],
  ['title' => 'About Us', 'uri' => 'internal:/about-us', 'weight' => -10],
  ['title' => 'Contact', 'uri' => 'internal:/contact', 'weight' => 0], // Linking directly to the form route or alias
  ['title' => 'Archive', 'uri' => 'internal:/archive', 'weight' => 10],
];

foreach ($menu_items as $item) {
  $menu_link = MenuLinkContent::create([
    'title' => $item['title'],
    'link' => ['uri' => $item['uri']],
    'menu_name' => 'main',
    'weight' => $item['weight'],
    'expanded' => FALSE,
  ]);
  $menu_link->save();
  echo "✅ Added to main menu: {$item['title']}\n";
}

echo "\n🎉 Demo pages setup complete!\n";
