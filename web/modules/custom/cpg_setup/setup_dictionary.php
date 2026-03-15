<?php

/**
 * @file
 * Sets up the Dictionary Term content type and initial terms.
 *
 * Run with: ddev drush php:script web/modules/custom/cpg_setup/setup_dictionary.php
 */

use Drupal\node\Entity\NodeType;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\taxonomy\Entity\Term;

// ── 1. Create 'Dictionary Category' vocabulary ──
$vocab_id = 'dictionary_category';
if (!Vocabulary::load($vocab_id)) {
  $vocab = Vocabulary::create([
    'vid' => $vocab_id,
    'name' => 'Dictionary Category',
    'description' => 'Categories for dictionary terms.',
  ]);
  $vocab->save();
  echo "Created vocabulary: Dictionary Category\n";
}

// Create category terms
$categories = ['Marketing', 'Supply Chain', 'Retail', 'Finance', 'Manufacturing', 'E-Commerce'];
foreach ($categories as $cat_name) {
  $existing = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadByProperties([
    'vid' => $vocab_id,
    'name' => $cat_name,
  ]);
  if (empty($existing)) {
    Term::create([
      'vid' => $vocab_id,
      'name' => $cat_name,
    ])->save();
    echo "Created term: $cat_name\n";
  }
}

// ── 2. Create 'dictionary_term' content type ──
$type_id = 'dictionary_term';
if (!NodeType::load($type_id)) {
  $type = NodeType::create([
    'type' => $type_id,
    'name' => 'Dictionary Term',
    'description' => 'A CPG industry dictionary term with definition, example, and category.',
  ]);
  $type->save();
  node_add_body_field($type);
  echo "Created content type: Dictionary Term\n";
} else {
  echo "Content type 'dictionary_term' already exists.\n";
}

// ── 3. Create custom fields ──
$fields = [
  'field_dict_full_name' => [
    'label' => 'Full Name / Subtitle',
    'type' => 'string',
    'description' => 'The full expanded name of the term (e.g., "Advertised Suggested Retail Price" for ASRP).',
  ],
  'field_dict_example' => [
    'label' => 'Example',
    'type' => 'text_long',
    'description' => 'An example showing the term used in context.',
  ],
  'field_dict_also_known' => [
    'label' => 'Also Known As',
    'type' => 'string',
    'description' => 'Alternative names for this term, comma-separated.',
  ],
  'field_dict_related_link' => [
    'label' => 'Related Articles Link',
    'type' => 'link',
    'description' => 'A link to related articles or resources.',
  ],
];

foreach ($fields as $field_name => $info) {
  // Field storage
  if (!FieldStorageConfig::loadByName('node', $field_name)) {
    FieldStorageConfig::create([
      'field_name' => $field_name,
      'entity_type' => 'node',
      'type' => $info['type'],
      'cardinality' => 1,
    ])->save();
    echo "Created field storage: $field_name\n";
  }

  // Field instance
  if (!FieldConfig::loadByName('node', $type_id, $field_name)) {
    FieldConfig::create([
      'field_name' => $field_name,
      'entity_type' => 'node',
      'bundle' => $type_id,
      'label' => $info['label'],
      'description' => $info['description'],
    ])->save();
    echo "Created field instance: $field_name on $type_id\n";
  }
}

// Category reference field
$cat_field = 'field_dict_category';
if (!FieldStorageConfig::loadByName('node', $cat_field)) {
  FieldStorageConfig::create([
    'field_name' => $cat_field,
    'entity_type' => 'node',
    'type' => 'entity_reference',
    'cardinality' => 1,
    'settings' => [
      'target_type' => 'taxonomy_term',
    ],
  ])->save();
  echo "Created field storage: $cat_field\n";
}
if (!FieldConfig::loadByName('node', $type_id, $cat_field)) {
  FieldConfig::create([
    'field_name' => $cat_field,
    'entity_type' => 'node',
    'bundle' => $type_id,
    'label' => 'Category',
    'description' => 'The category this term belongs to.',
    'settings' => [
      'handler' => 'default:taxonomy_term',
      'handler_settings' => [
        'target_bundles' => ['dictionary_category' => 'dictionary_category'],
      ],
    ],
  ])->save();
  echo "Created field instance: $cat_field on $type_id\n";
}

// ── 4. Create sample dictionary terms ──
$terms_data = [
  [
    'title' => 'ASRP',
    'field_dict_full_name' => 'Advertised Suggested Retail Price',
    'body' => 'The price at which a manufacturer recommends that a retailer sell a product to consumers. This is often used in advertising and promotional materials to establish a baseline price point.',
    'field_dict_example' => '"The ASRP for the new shampoo line is $12.99, but retailers may choose to offer promotions or discounts."',
    'field_dict_also_known' => 'MSRP, RRP',
    'category' => 'Retail',
  ],
  [
    'title' => 'A/B Testing',
    'field_dict_full_name' => '',
    'body' => 'A method of comparing two versions of a marketing element (packaging, ad, website, etc.) to determine which performs better. One version (A) is tested against a variant (B) with a specific metric measured.',
    'field_dict_example' => '"We ran A/B testing on two different package designs and found that the blue version increased sales by 23%."',
    'field_dict_also_known' => '',
    'category' => 'Marketing',
  ],
  [
    'title' => 'Big Box Retailer',
    'field_dict_full_name' => '',
    'body' => 'A physically large retail establishment, usually part of a chain, that offers a wide variety of products. Examples include Walmart, Target, and Costco. These retailers typically have significant buying power and can negotiate favorable terms with CPG manufacturers.',
    'field_dict_example' => '"Securing shelf space in big box retailers is crucial for brand visibility and volume sales."',
    'field_dict_also_known' => '',
    'category' => 'Retail',
  ],
  [
    'title' => 'Brand Equity',
    'field_dict_full_name' => '',
    'body' => 'The commercial value derived from consumer perception of a brand name rather than the product itself. Strong brand equity allows companies to charge premium prices and maintain customer loyalty.',
    'field_dict_example' => '"Coca-Cola\'s brand equity is so strong that consumers often choose it over cheaper alternatives."',
    'field_dict_also_known' => '',
    'category' => 'Marketing',
    'related_link' => ['uri' => 'internal:/articles', 'title' => 'Read more about brand equity'],
  ],
  [
    'title' => 'Case Pack',
    'field_dict_full_name' => '',
    'body' => 'The number of individual units packaged together in a shipping case. Retailers typically order products by the case, and case pack size can affect shelf space allocation and inventory management.',
    'field_dict_example' => '"The new cereal has a case pack of 12 units, which fits perfectly on standard retail shelving."',
    'field_dict_also_known' => '',
    'category' => 'Supply Chain',
  ],
  [
    'title' => 'Category Management',
    'field_dict_full_name' => '',
    'body' => 'A retailing and purchasing concept in which the range of products purchased by a retailer is managed as a discrete business unit. This approach focuses on maximizing the overall category performance rather than individual brand success.',
    'field_dict_example' => '"Through category management, the retailer reorganized the snack aisle to increase impulse purchases."',
    'field_dict_also_known' => '',
    'category' => 'Retail',
  ],
  [
    'title' => 'COGS',
    'field_dict_full_name' => 'Cost of Goods Sold',
    'body' => 'The direct costs attributable to producing the goods sold by a company. This includes the cost of materials and direct labor used to create the product, but excludes indirect expenses such as distribution and sales force costs.',
    'field_dict_example' => '"By optimizing the supply chain, the company reduced COGS by 8%, significantly improving profit margins."',
    'field_dict_also_known' => '',
    'category' => 'Finance',
  ],
  [
    'title' => 'DTC',
    'field_dict_full_name' => 'Direct-to-Consumer',
    'body' => 'A business model where manufacturers or brands sell products directly to end consumers, bypassing traditional retail intermediaries. This allows for higher margins, direct customer relationships, and better data collection.',
    'field_dict_example' => '"Many CPG brands have launched DTC websites to supplement their retail distribution and build direct relationships with consumers."',
    'field_dict_also_known' => '',
    'category' => 'E-Commerce',
  ],
  [
    'title' => 'Distribution Center (DC)',
    'field_dict_full_name' => '',
    'body' => 'A warehouse or specialized building filled with products that are to be sent to retailers, distributors, or directly to consumers. DCs are designed to receive, store, and redistribute products efficiently.',
    'field_dict_example' => '',
    'field_dict_also_known' => '',
    'category' => 'Supply Chain',
  ],
  [
    'title' => 'Endcap',
    'field_dict_full_name' => '',
    'body' => 'A display at the end of a store aisle, typically used for promotional or seasonal items. Endcaps are prime retail real estate and can significantly boost product visibility and sales.',
    'field_dict_example' => '"The brand secured a holiday endcap at 500 stores, resulting in a 40% increase in December sales."',
    'field_dict_also_known' => '',
    'category' => 'Retail',
  ],
];

// Load category terms for reference
$cat_terms = [];
foreach ($categories as $cat_name) {
  $loaded = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadByProperties([
    'vid' => $vocab_id,
    'name' => $cat_name,
  ]);
  if (!empty($loaded)) {
    $cat_terms[$cat_name] = reset($loaded)->id();
  }
}

foreach ($terms_data as $td) {
  // Check if already exists
  $existing = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties([
    'type' => $type_id,
    'title' => $td['title'],
  ]);
  if (!empty($existing)) {
    echo "Dictionary term '{$td['title']}' already exists, skipping.\n";
    continue;
  }

  $node_data = [
    'type' => $type_id,
    'title' => $td['title'],
    'body' => ['value' => $td['body'], 'format' => 'full_html'],
    'status' => 1,
  ];

  if (!empty($td['field_dict_full_name'])) {
    $node_data['field_dict_full_name'] = $td['field_dict_full_name'];
  }
  if (!empty($td['field_dict_example'])) {
    $node_data['field_dict_example'] = ['value' => $td['field_dict_example'], 'format' => 'full_html'];
  }
  if (!empty($td['field_dict_also_known'])) {
    $node_data['field_dict_also_known'] = $td['field_dict_also_known'];
  }
  if (!empty($td['related_link'])) {
    $node_data['field_dict_related_link'] = $td['related_link'];
  }
  if (!empty($td['category']) && isset($cat_terms[$td['category']])) {
    $node_data['field_dict_category'] = ['target_id' => $cat_terms[$td['category']]];
  }

  $node = Node::create($node_data);
  $node->save();
  echo "Created dictionary term: {$td['title']}\n";
}

echo "\n✅ Dictionary setup complete!\n";
