<?php

/**
 * @file
 * Setup script for the Directory Listing content type and Views.
 *
 * Run via Drush:
 *   drush scr web/modules/custom/cpg_setup/setup_directory.php
 *
 * This creates:
 * 1. "Expertise" taxonomy vocabulary with sample terms
 * 2. "Directory Listing" content type with fields:
 *    - field_website (link)
 *    - field_contact_name (string)
 *    - field_expertise (entity_reference to expertise vocabulary, unlimited)
 * 3. Sample directory listing nodes
 * 4. A "directory" View for the listing page
 * 5. A "search_results" View for the SERP page
 *
 * All content is editable from the Drupal admin dashboard after creation.
 */

use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\node\Entity\NodeType;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\taxonomy\Entity\Term;

// =====================================================================
// 1. EXPERTISE VOCABULARY
// =====================================================================
echo "Creating Expertise vocabulary...\n";

if (!Vocabulary::load('expertise')) {
  Vocabulary::create([
    'vid' => 'expertise',
    'name' => 'Expertise',
    'description' => 'Expertise areas for directory listings (e.g. Consumer Goods, Beverages).',
  ])->save();
  echo "  ✓ Expertise vocabulary created.\n";
} else {
  echo "  – Expertise vocabulary already exists.\n";
}

$expertise_terms = [
  'Consumer Goods',
  'Home Care',
  'Personal Care',
  'Food & Beverage',
  'Beauty',
  'Sustainability',
  'Beverages',
  'Marketing',
  'Distribution',
  'Snacks',
  'Innovation',
  'Packaged Foods',
  'Condiments',
  'Cheese',
  'Chocolate',
  'Biscuits',
  'Cereal',
  'Baking',
  'Yogurt',
  'Breakfast Foods',
  'Frozen Foods',
  'Dairy',
  'Plant-based',
  'Water',
  'Confectionery',
  'Pet Care',
  'Food',
  'Oral Care',
  'Nutrition',
  'Coffee & Tea',
];

foreach ($expertise_terms as $term_name) {
  $existing = \Drupal::entityTypeManager()
    ->getStorage('taxonomy_term')
    ->loadByProperties([
      'vid' => 'expertise',
      'name' => $term_name,
    ]);

  if (empty($existing)) {
    Term::create([
      'vid' => 'expertise',
      'name' => $term_name,
    ])->save();
  }
}
echo "  ✓ Expertise terms created.\n";

// =====================================================================
// 2. DIRECTORY LISTING CONTENT TYPE
// =====================================================================
echo "Creating Directory Listing content type...\n";

if (!NodeType::load('directory_listing')) {
  NodeType::create([
    'type' => 'directory_listing',
    'name' => 'Directory Listing',
    'description' => 'A company or brand listing in the CPG Industry Directory.',
    'display_submitted' => FALSE,
  ])->save();
  echo "  ✓ Directory Listing content type created.\n";
} else {
  echo "  – Directory Listing content type already exists.\n";
}

// --- Field: Website (Link) ---
if (!FieldStorageConfig::loadByName('node', 'field_website')) {
  FieldStorageConfig::create([
    'field_name' => 'field_website',
    'entity_type' => 'node',
    'type' => 'link',
    'cardinality' => 1,
  ])->save();
}
if (!FieldConfig::loadByName('node', 'directory_listing', 'field_website')) {
  FieldConfig::create([
    'field_name' => 'field_website',
    'entity_type' => 'node',
    'bundle' => 'directory_listing',
    'label' => 'Website',
    'description' => 'The company website URL.',
    'settings' => [
      'link_type' => 16, // External only
      'title' => 0, // No title
    ],
  ])->save();
}
echo "  ✓ field_website created.\n";

// --- Field: Contact Name (String) ---
if (!FieldStorageConfig::loadByName('node', 'field_contact_name')) {
  FieldStorageConfig::create([
    'field_name' => 'field_contact_name',
    'entity_type' => 'node',
    'type' => 'string',
    'cardinality' => 1,
  ])->save();
}
if (!FieldConfig::loadByName('node', 'directory_listing', 'field_contact_name')) {
  FieldConfig::create([
    'field_name' => 'field_contact_name',
    'entity_type' => 'node',
    'bundle' => 'directory_listing',
    'label' => 'Contact Name',
    'description' => 'Primary contact person for this company.',
  ])->save();
}
echo "  ✓ field_contact_name created.\n";

// --- Field: Expertise (Entity Reference → Taxonomy, unlimited) ---
if (!FieldStorageConfig::loadByName('node', 'field_expertise')) {
  FieldStorageConfig::create([
    'field_name' => 'field_expertise',
    'entity_type' => 'node',
    'type' => 'entity_reference',
    'cardinality' => -1, // Unlimited
    'settings' => [
      'target_type' => 'taxonomy_term',
    ],
  ])->save();
}
if (!FieldConfig::loadByName('node', 'directory_listing', 'field_expertise')) {
  FieldConfig::create([
    'field_name' => 'field_expertise',
    'entity_type' => 'node',
    'bundle' => 'directory_listing',
    'label' => 'Expertise',
    'description' => 'Select expertise areas for this company.',
    'settings' => [
      'handler' => 'default:taxonomy_term',
      'handler_settings' => [
        'target_bundles' => [
          'expertise' => 'expertise',
        ],
      ],
    ],
  ])->save();
}
echo "  ✓ field_expertise created.\n";

// =====================================================================
// 3. SAMPLE DIRECTORY LISTINGS
// =====================================================================
echo "Creating sample directory listings...\n";

$listings = [
  [
    'title' => 'Procter & Gamble',
    'website' => 'https://www.pg.com',
    'contact' => 'Jennifer Morrison',
    'expertise' => ['Consumer Goods', 'Home Care', 'Personal Care'],
  ],
  [
    'title' => 'Unilever',
    'website' => 'https://www.unilever.com',
    'contact' => 'Michael Chen',
    'expertise' => ['Food & Beverage', 'Beauty', 'Sustainability'],
  ],
  [
    'title' => 'Nestlé',
    'website' => 'https://www.nestle.com',
    'contact' => 'Sarah Williams',
    'expertise' => ['Food & Beverage', 'Nutrition', 'Coffee & Tea'],
  ],
  [
    'title' => 'The Coca-Cola Company',
    'website' => 'https://www.coca-colacompany.com',
    'contact' => 'David Martinez',
    'expertise' => ['Beverages', 'Marketing', 'Distribution'],
  ],
  [
    'title' => 'PepsiCo',
    'website' => 'https://www.pepsico.com',
    'contact' => 'Emily Thompson',
    'expertise' => ['Snacks', 'Beverages', 'Innovation'],
  ],
  [
    'title' => 'Kraft Heinz',
    'website' => 'https://www.kraftheinzcompany.com',
    'contact' => 'Robert Jackson',
    'expertise' => ['Packaged Foods', 'Condiments', 'Cheese'],
  ],
  [
    'title' => 'Mondelez International',
    'website' => 'https://www.mondelezinternational.com',
    'contact' => 'Lisa Anderson',
    'expertise' => ['Snacks', 'Chocolate', 'Biscuits'],
  ],
  [
    'title' => 'General Mills',
    'website' => 'https://www.generalmills.com',
    'contact' => 'James Wilson',
    'expertise' => ['Cereal', 'Baking', 'Yogurt'],
  ],
  [
    'title' => 'Kellogg Company',
    'website' => 'https://www.kelloggcompany.com',
    'contact' => 'Amanda Rodriguez',
    'expertise' => ['Breakfast Foods', 'Snacks', 'Frozen Foods'],
  ],
  [
    'title' => 'Danone',
    'website' => 'https://www.danone.com',
    'contact' => 'Philippe Dubois',
    'expertise' => ['Dairy', 'Plant-based', 'Water'],
  ],
  [
    'title' => 'Mars, Incorporated',
    'website' => 'https://www.mars.com',
    'contact' => 'Christina Lee',
    'expertise' => ['Confectionery', 'Pet Care', 'Food'],
  ],
  [
    'title' => 'Colgate-Palmolive',
    'website' => 'https://www.colgatepalmolive.com',
    'contact' => 'Mark Stevens',
    'expertise' => ['Oral Care', 'Personal Care', 'Home Care'],
  ],
];

foreach ($listings as $listing) {
  // Check if already exists
  $existing = \Drupal::entityTypeManager()
    ->getStorage('node')
    ->loadByProperties([
      'type' => 'directory_listing',
      'title' => $listing['title'],
    ]);

  if (!empty($existing)) {
    echo "  – {$listing['title']} already exists, skipping.\n";
    continue;
  }

  // Resolve expertise term IDs
  $expertise_ids = [];
  foreach ($listing['expertise'] as $term_name) {
    $terms = \Drupal::entityTypeManager()
      ->getStorage('taxonomy_term')
      ->loadByProperties([
        'vid' => 'expertise',
        'name' => $term_name,
      ]);
    if ($term = reset($terms)) {
      $expertise_ids[] = ['target_id' => $term->id()];
    }
  }

  Node::create([
    'type' => 'directory_listing',
    'title' => $listing['title'],
    'field_website' => [
      'uri' => $listing['website'],
      'title' => '',
    ],
    'field_contact_name' => $listing['contact'],
    'field_expertise' => $expertise_ids,
    'status' => 1,
    'uid' => 1,
  ])->save();

  echo "  ✓ Created: {$listing['title']}\n";
}

echo "\n✅ Directory setup complete!\n";
echo "Next steps:\n";
echo "  1. Create a 'directory' View at /admin/structure/views\n";
echo "  2. Create a 'search_results' View at /admin/structure/views\n";
echo "  3. Configure exposed filters for Category, Date Range, Author, Keywords\n";
echo "  4. Set the View display format to 'Unformatted list' with 'Fields'\n";
echo "  5. Clear caches: drush cr\n";
