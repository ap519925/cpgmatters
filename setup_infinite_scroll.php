<?php
$config = \Drupal::configFactory()->getEditable('views.view.frontpage');
if (!$config->isNew()) {
  $display = $config->get('display.default.display_options');
  
  // Enable AJAX
  $display['use_ajax'] = true;
  
  // Create infinite scroll pager config
  $pager = [
    'type' => 'infinite_scroll',
    'options' => [
      'items_per_page' => 6,
      'offset' => 0,
      'id' => 0,
      'total_pages' => null,
      'tags' => [
        'previous' => '‹ Previous',
        'next' => 'View more articles',
      ],
      'expose' => [
        'items_per_page' => false,
        'items_per_page_label' => 'Items per page',
        'items_per_page_options' => '5, 10, 25, 50',
        'items_per_page_options_all' => false,
        'items_per_page_options_all_label' => '- All -',
        'offset' => false,
        'offset_label' => 'Offset',
      ],
      'views_infinite_scroll' => [
        'button_text' => 'View more articles',
        'invoke_when_in_view' => false,
      ],
    ],
  ];
  
  $display['pager'] = $pager;
  $config->set('display.default.display_options', $display);
  $config->save();
  echo "Frontpage view updated to use infinite scroll.\n";
} else {
  echo "Frontpage view not found.\n";
}
