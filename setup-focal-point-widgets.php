<?php

$entity_type_manager = \Drupal::entityTypeManager();

// Update form display for Article (field_image)
$article_form = $entity_type_manager->getStorage('entity_form_display')->load('node.article.default');
if ($article_form && $component = $article_form->getComponent('field_image')) {
  $component['type'] = 'image_focal_point';
  // Keep original settings but change widget type
  $article_form->setComponent('field_image', $component);
  $article_form->save();
  echo "Updated field_image widget for Article.\n";
}

// Update form display for Directory Listing (field_logo)
$directory_form = $entity_type_manager->getStorage('entity_form_display')->load('node.directory_listing.default');
if ($directory_form && $component = $directory_form->getComponent('field_logo')) {
  $component['type'] = 'image_focal_point';
  $directory_form->setComponent('field_logo', $component);
  $directory_form->save();
  echo "Updated field_logo widget for Directory Listing.\n";
}

// Update image styles on displays contextually (e.g. view mode 'teaser' for article)
$article_teaser = $entity_type_manager->getStorage('entity_view_display')->load('node.article.teaser');
if ($article_teaser && $component = $article_teaser->getComponent('field_image')) {
  $component['settings']['image_style'] = 'focal_point_teaser';
  $article_teaser->setComponent('field_image', $component);
  $article_teaser->save();
  echo "Updated Article teaser view mode to use focal_point_teaser.\n";
}

$article_full = $entity_type_manager->getStorage('entity_view_display')->load('node.article.default');
if ($article_full && $component = $article_full->getComponent('field_image')) {
  $component['settings']['image_style'] = 'focal_point_hero';
  $article_full->setComponent('field_image', $component);
  $article_full->save();
  echo "Updated Article full view mode to use focal_point_hero.\n";
}

echo "Done updating widgets and view displays.\n";

