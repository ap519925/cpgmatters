<?php

/**
 * @file
 * Creates the Dictionary view with search and category filtering.
 *
 * Run with: ddev drush php:script web/modules/custom/cpg_setup/setup_dictionary_view.php
 */

use Drupal\views\Entity\View;

$view_id = 'dictionary';

// Delete existing view if present
if ($existing = View::load($view_id)) {
  $existing->delete();
  echo "Deleted existing dictionary view.\n";
}

$view = View::create([
  'id' => $view_id,
  'label' => 'Dictionary',
  'module' => 'views',
  'base_table' => 'node_field_data',
  'base_field' => 'nid',
  'core' => '10.x',
  'display' => [
    'default' => [
      'display_plugin' => 'default',
      'id' => 'default',
      'display_title' => 'Default',
      'position' => 0,
      'display_options' => [
        'title' => 'CPG Industry Dictionary',
        'fields' => [
          'title' => [
            'id' => 'title',
            'table' => 'node_field_data',
            'field' => 'title',
            'label' => '',
            'type' => 'string',
            'settings' => ['link_to_entity' => FALSE],
          ],
          'field_dict_full_name' => [
            'id' => 'field_dict_full_name',
            'table' => 'node__field_dict_full_name',
            'field' => 'field_dict_full_name',
            'label' => '',
            'type' => 'string',
          ],

          'field_dict_example' => [
            'id' => 'field_dict_example',
            'table' => 'node__field_dict_example',
            'field' => 'field_dict_example',
            'label' => '',
            'type' => 'text_default',
          ],
          'field_dict_also_known' => [
            'id' => 'field_dict_also_known',
            'table' => 'node__field_dict_also_known',
            'field' => 'field_dict_also_known',
            'label' => '',
            'type' => 'string',
          ],
          'field_dict_related_link' => [
            'id' => 'field_dict_related_link',
            'table' => 'node__field_dict_related_link',
            'field' => 'field_dict_related_link',
            'label' => '',
            'type' => 'link',
          ],
          'field_dict_category' => [
            'id' => 'field_dict_category',
            'table' => 'node__field_dict_category',
            'field' => 'field_dict_category',
            'label' => '',
            'type' => 'entity_reference_label',
            'settings' => ['link' => FALSE],
          ],
        ],
        'filters' => [
          'status' => [
            'id' => 'status',
            'table' => 'node_field_data',
            'field' => 'status',
            'value' => '1',
            'group' => 1,
            'expose' => ['operator' => FALSE],
          ],
          'type' => [
            'id' => 'type',
            'table' => 'node_field_data',
            'field' => 'type',
            'value' => ['dictionary_term' => 'dictionary_term'],
            'group' => 1,
          ],
          'title' => [
            'id' => 'title',
            'table' => 'node_field_data',
            'field' => 'title',
            'operator' => 'contains',
            'exposed' => TRUE,
            'expose' => [
              'identifier' => 'search',
              'label' => 'Search',
              'operator_id' => 'title_op',
              'required' => FALSE,
            ],
            'group' => 1,
          ],

        ],
        'sorts' => [
          'title' => [
            'id' => 'title',
            'table' => 'node_field_data',
            'field' => 'title',
            'order' => 'ASC',
          ],
        ],
        'pager' => [
          'type' => 'none',
        ],
        'style' => [
          'type' => 'default',
          'options' => [
            'grouping' => [],
            'row_class' => '',
            'default_row_class' => TRUE,
          ],
        ],
        'row' => [
          'type' => 'fields',
        ],
      ],
    ],
    'page_1' => [
      'display_plugin' => 'page',
      'id' => 'page_1',
      'display_title' => 'Dictionary Page',
      'position' => 1,
      'display_options' => [
        'path' => 'dictionary',
        'menu' => [
          'type' => 'none',
        ],
      ],
    ],
  ],
]);

$view->save();
echo "✅ Created dictionary view with page at /dictionary\n";
