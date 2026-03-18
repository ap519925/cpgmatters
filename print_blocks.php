<?php
$output = "";
$blocks = \Drupal::entityTypeManager()->getStorage('block_content')->loadMultiple();
foreach ($blocks as $block) {
    if ($block->hasField('body')) {
        $output .= "Block ID: " . $block->id() . " | Title: " . $block->label() . "\n";
        $output .= $block->get('body')->value . "\n\n";
    }
}
file_put_contents('blocks_output.txt', $output);
