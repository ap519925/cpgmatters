<?php
$query = \Drupal::entityQuery('block_content')
  ->condition('info', 'Floating Topic Sidebar')
  ->accessCheck(FALSE);
$ids = $query->execute();
if (!empty($ids)) {
  $block = \Drupal\block_content\Entity\BlockContent::load(reset($ids));
  file_put_contents('floating_sidebar_html.txt', $block->get('body')->value);
  echo "Wrote to floating_sidebar_html.txt";
}
