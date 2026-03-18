<?php
$mailManager = \Drupal::service('plugin.manager.mail');
$params = [
  'name' => 'Tester',
  'step2_url' => 'http://example.com/test',
];
$result = $mailManager->mail('cpg_register', 'step2_link', 'tester@example.com', 'en', $params, NULL, TRUE);
var_dump($result['result']);
var_dump($result['message']);
