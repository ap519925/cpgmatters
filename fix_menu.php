<?php
$storage = \Drupal::entityTypeManager()->getStorage('menu_link_content');
$links = $storage->loadByProperties(['menu_name' => 'main']);
$home_count = 0;
foreach ($links as $link) {
  if ($link->getTitle() === 'Home') {
    $home_count++;
    if ($home_count > 1) {
      echo "Deleting duplicate Home link ID " . $link->id() . "\n";
      $link->delete();
    }
  }
}

// Ensure Main Menu block in cpg_theme has its title hidden.
$block = \Drupal\block\Entity\Block::load('cpg_theme_main_menu');
if ($block) {
  $settings = $block->getPlugin()->getConfiguration();
  $settings['label_display'] = '0';
  $block->getPlugin()->setConfiguration($settings);
  $block->save();
  echo "Main menu block title hidden.\n";
} else {
  // Try another name if it was placed differently
  echo "Block 'cpg_theme_main_menu' not found.\n";
}
