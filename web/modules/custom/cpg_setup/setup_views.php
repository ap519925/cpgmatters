<?php

/**
 * @file
 * Creates Drupal Views for the Search Results (SERP) and Directory pages.
 *
 * Run via Drush:
 *   drush scr web/modules/custom/cpg_setup/setup_views.php
 *
 * Creates simple Views first, then taxonomy filters can be added
 * via the Drupal Views UI at /admin/structure/views.
 */

use Drupal\views\Entity\View;

// =====================================================================
// 1. SEARCH RESULTS VIEW
// =====================================================================
echo "Creating Search Results view...\n";

if (!View::load('search_results')) {
  $search_view = View::create([
    'id' => 'search_results',
    'label' => 'Search Results',
    'module' => 'views',
    'description' => 'Article search results with filters.',
    'tag' => 'cpg',
    'base_table' => 'node_field_data',
    'base_field' => 'nid',
    'display' => [
      'default' => [
        'id' => 'default',
        'display_title' => 'Default',
        'display_plugin' => 'default',
        'position' => 0,
        'display_options' => [
          'title' => 'Search Results',
          'use_more' => FALSE,
          'access' => [
            'type' => 'perm',
            'options' => ['perm' => 'access content'],
          ],
          'cache' => [
            'type' => 'tag',
          ],
          'pager' => [
            'type' => 'full',
            'options' => [
              'items_per_page' => 20,
              'offset' => 0,
              'id' => 0,
              'total_pages' => 0,
              'tags' => [
                'next' => 'Next ›',
                'previous' => '‹ Previous',
              ],
              'expose' => [
                'items_per_page' => FALSE,
                'items_per_page_label' => 'Items per page',
                'offset' => FALSE,
              ],
            ],
          ],
          'style' => [
            'type' => 'default',
          ],
          'row' => [
            'type' => 'fields',
          ],
          'fields' => [
            'title' => [
              'id' => 'title',
              'table' => 'node_field_data',
              'field' => 'title',
              'label' => '',
              'alter' => ['alter_text' => FALSE],
              'type' => 'string',
              'settings' => ['link_to_entity' => TRUE],
              'plugin_id' => 'field',
            ],
            'body' => [
              'id' => 'body',
              'table' => 'node__body',
              'field' => 'body',
              'label' => '',
              'type' => 'text_trimmed',
              'settings' => ['trim_length' => 200],
              'plugin_id' => 'field',
            ],
            'uid' => [
              'id' => 'uid',
              'table' => 'node_field_data',
              'field' => 'uid',
              'label' => '',
              'type' => 'entity_reference_label',
              'settings' => ['link' => FALSE],
              'plugin_id' => 'field',
            ],
            'created' => [
              'id' => 'created',
              'table' => 'node_field_data',
              'field' => 'created',
              'label' => '',
              'type' => 'timestamp',
              'settings' => ['date_format' => 'custom', 'custom_date_format' => 'M j, Y'],
              'plugin_id' => 'field',
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
              'plugin_id' => 'boolean',
            ],
            'type' => [
              'id' => 'type',
              'table' => 'node_field_data',
              'field' => 'type',
              'value' => ['article' => 'article'],
              'plugin_id' => 'bundle',
            ],
            'title' => [
              'id' => 'title',
              'table' => 'node_field_data',
              'field' => 'title',
              'operator' => 'contains',
              'exposed' => TRUE,
              'expose' => [
                'identifier' => 'keys',
                'label' => 'Keywords',
                'operator_id' => 'title_op',
                'required' => FALSE,
                'remember' => FALSE,
              ],
              'plugin_id' => 'string',
            ],
          ],
          'sorts' => [
            'created' => [
              'id' => 'created',
              'table' => 'node_field_data',
              'field' => 'created',
              'order' => 'DESC',
              'plugin_id' => 'date',
            ],
          ],
          'header' => [
            'result' => [
              'id' => 'result',
              'table' => 'views',
              'field' => 'result',
              'content' => 'Showing @start-@end of @total results',
              'plugin_id' => 'result',
            ],
          ],
        ],
      ],
      'page_1' => [
        'id' => 'page_1',
        'display_title' => 'Search Results Page',
        'display_plugin' => 'page',
        'position' => 1,
        'display_options' => [
          'path' => 'search-results',
          'menu' => [
            'type' => 'none',
          ],
        ],
      ],
    ],
  ]);
  $search_view->save();
  echo "  ✓ Search Results view created at /search-results\n";
} else {
  echo "  – Search Results view already exists.\n";
}

// =====================================================================
// 2. DIRECTORY VIEW
// =====================================================================
echo "Creating Directory view...\n";

if (!View::load('directory')) {
  $directory_view = View::create([
    'id' => 'directory',
    'label' => 'CPG Industry Directory',
    'module' => 'views',
    'description' => 'Directory listing of CPG companies and brands.',
    'tag' => 'cpg',
    'base_table' => 'node_field_data',
    'base_field' => 'nid',
    'display' => [
      'default' => [
        'id' => 'default',
        'display_title' => 'Default',
        'display_plugin' => 'default',
        'position' => 0,
        'display_options' => [
          'title' => 'CPG Industry Directory',
          'use_more' => FALSE,
          'access' => [
            'type' => 'perm',
            'options' => ['perm' => 'access content'],
          ],
          'cache' => [
            'type' => 'tag',
          ],
          'pager' => [
            'type' => 'full',
            'options' => [
              'items_per_page' => 12,
              'offset' => 0,
              'id' => 0,
              'total_pages' => 0,
              'tags' => [
                'next' => 'Next ›',
                'previous' => '‹ Previous',
              ],
            ],
          ],
          'style' => [
            'type' => 'default',
          ],
          'row' => [
            'type' => 'fields',
          ],
          'fields' => [
            'title' => [
              'id' => 'title',
              'table' => 'node_field_data',
              'field' => 'title',
              'label' => '',
              'type' => 'string',
              'settings' => ['link_to_entity' => FALSE],
              'plugin_id' => 'field',
            ],
            'field_website' => [
              'id' => 'field_website',
              'table' => 'node__field_website',
              'field' => 'field_website',
              'label' => '',
              'type' => 'link',
              'settings' => [
                'trim_length' => 80,
                'url_only' => TRUE,
                'url_plain' => FALSE,
                'rel' => 'noopener noreferrer',
                'target' => '_blank',
              ],
              'plugin_id' => 'field',
            ],
            'field_contact_name' => [
              'id' => 'field_contact_name',
              'table' => 'node__field_contact_name',
              'field' => 'field_contact_name',
              'label' => '',
              'type' => 'string',
              'plugin_id' => 'field',
            ],
            'field_expertise' => [
              'id' => 'field_expertise',
              'table' => 'node__field_expertise',
              'field' => 'field_expertise',
              'label' => '',
              'type' => 'entity_reference_label',
              'settings' => ['link' => FALSE],
              'plugin_id' => 'field',
            ],
            'nid' => [
              'id' => 'nid',
              'table' => 'node_field_data',
              'field' => 'nid',
              'label' => '',
              'exclude' => TRUE,
              'plugin_id' => 'field',
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
              'plugin_id' => 'boolean',
            ],
            'type' => [
              'id' => 'type',
              'table' => 'node_field_data',
              'field' => 'type',
              'value' => ['directory_listing' => 'directory_listing'],
              'plugin_id' => 'bundle',
            ],
          ],
          'sorts' => [
            'title' => [
              'id' => 'title',
              'table' => 'node_field_data',
              'field' => 'title',
              'order' => 'ASC',
              'plugin_id' => 'standard',
            ],
          ],
          'header' => [
            'area_text_custom' => [
              'id' => 'area_text_custom',
              'table' => 'views',
              'field' => 'area_text_custom',
              'content' => '<p>Connect with leading brands, agencies, and data providers in the consumer packaged goods industry. Browse our comprehensive directory to find partners, suppliers, and service providers.</p>',
              'plugin_id' => 'text_custom',
            ],
          ],
          'footer' => [
            'result' => [
              'id' => 'result',
              'table' => 'views',
              'field' => 'result',
              'content' => 'Showing <strong>@start-@end</strong> of <strong>@total</strong> listings',
              'plugin_id' => 'result',
            ],
          ],
        ],
      ],
      'page_1' => [
        'id' => 'page_1',
        'display_title' => 'Directory Page',
        'display_plugin' => 'page',
        'position' => 1,
        'display_options' => [
          'path' => 'directory',
          'menu' => [
            'type' => 'normal',
            'title' => 'Directory',
            'weight' => 5,
            'menu_name' => 'main',
          ],
        ],
      ],
    ],
  ]);
  $directory_view->save();
  echo "  ✓ Directory view created at /directory\n";
} else {
  echo "  – Directory view already exists.\n";
}

echo "\n✅ Views setup complete!\n";
echo "You can now customize these views at:\n";
echo "  • /admin/structure/views/view/search_results\n";
echo "  • /admin/structure/views/view/directory\n";
echo "\nTo add category/expertise filters, edit the Views via the UI.\n";
