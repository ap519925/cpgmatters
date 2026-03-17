<?php

use Drupal\image\Entity\ImageStyle;

function createFocalPointStyle($name, $label, $width, $height) {
  $style = ImageStyle::load($name);
  if (!$style) {
    $style = ImageStyle::create([
      'name' => $name,
      'label' => $label,
    ]);
  } else {
    // Remove existing effects
    foreach ($style->getEffects() as $effect) {
      $style->deleteImageEffect($effect);
    }
  }

  // Add focal point scale and crop effect
  $style->addImageEffect([
    'id' => 'focal_point_scale_and_crop',
    'weight' => 0,
    'data' => [
      'width' => $width,
      'height' => $height,
    ],
  ]);

  // Add WebP conversion for performance if preferred (optional, but good practice)
  // Let's stick to standard behavior unless we have the specific webp module, 
  // but standard core webp is 'image_convert_avif' or format conversion in core 10.1+.
  // Let's omit WebP for now to ensure compatibility, they can add it via UI.

  $style->save();
  echo "Created/Updated image style: {$label} ({$width}x{$height})\n";
}

createFocalPointStyle('focal_point_hero', 'Hero Banner (1920x1080)', 1920, 1080);
createFocalPointStyle('focal_point_teaser', 'Article Teaser (800x600)', 800, 600);
createFocalPointStyle('focal_point_square', 'Square Thumb (600x600)', 600, 600);
createFocalPointStyle('focal_point_card', 'Directory Card / Social (1200x630)', 1200, 630);

// Set focal point to be the default crop type for image fields
// Ensure focal point widget is used on standard image fields (this usually needs to be done via form displays)
echo "Done configuring focal point styles.\n";

