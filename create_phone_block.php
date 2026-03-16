<?php
$block = \Drupal\block_content\Entity\BlockContent::create([
  'info' => 'Header Phone',
  'type' => 'basic',
  'body' => [
    'value' => '<div class="header-phone" style="font-weight: bold; font-size: 0.9em; padding: 0.5rem 1rem; color: #cc0000;">Call us: <a href="tel:18886043953" style="color: inherit; text-decoration: none;">1 (888) 604-3953</a></div>',
    'format' => 'full_html',
  ],
]);
$block->save();

// Assign it to the header_actions region
$block_placement = \Drupal\block\Entity\Block::create([
  'id' => 'headerphone',
  'theme' => 'cpg_theme',
  'weight' => -10,
  'plugin' => 'block_content:' . $block->uuid(),
  'region' => 'header_actions',
  'settings' => [
    'label_display' => '0',
  ],
]);
$block_placement->save();
echo "Created block.\n";
