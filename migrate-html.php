<?php

function get_inner_html($filepath) {
  $content = file_get_contents($filepath);
  // Find everything between <article ...> and </article>
  preg_match('/<article[^>]*>(.*)<\/article>/si', $content, $matches);
  if (isset($matches[1])) {
    return trim($matches[1]);
  }
  return '';
}

$theme_dir = __DIR__ . '/web/themes/custom/cpg_theme/templates/content/';

// About Us - Node 7
$about_html = get_inner_html($theme_dir . 'node--page--about-us.html.twig');
$about_html = str_replace('{{ label }}', 'About Us', $about_html);

$node_about = \Drupal\node\Entity\Node::load(7);
if ($node_about && !empty($about_html)) {
  $node_about->set('body', [
    'value' => $about_html,
    'format' => 'full_html',
  ]);
  $node_about->save();
  echo "About Us node updated.\n";
}

// White Papers - Node 21
$wp_html = get_inner_html($theme_dir . 'node--page--white-papers.html.twig');
$wp_html = str_replace('{{ label }}', 'White Papers & Research', $wp_html);

$node_wp = \Drupal\node\Entity\Node::load(21);
if ($node_wp && !empty($wp_html)) {
  $node_wp->set('body', [
    'value' => $wp_html,
    'format' => 'full_html',
  ]);
  $node_wp->save();
  echo "White Papers node updated.\n";
}
