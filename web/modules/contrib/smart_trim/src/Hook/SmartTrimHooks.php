<?php

namespace Drupal\smart_trim\Hook;

use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Routing\RouteMatchInterface;

/**
 * Service to provide module hooks.
 */
class SmartTrimHooks {

  /**
   * Implements hook_help().
   */
  #[Hook('help')]
  public function help($route_name, RouteMatchInterface $route_match): string {
    $output = '';
    switch ($route_name) {
      case 'help.page.smart_trim':
        $output = '<h3>' . t('About') . '</h3>';
        $output .= '<p>' . t('Smart Trim implements a new field formatter for text fields (text, text_long, and text_with_summary, if you want to get technical) that improves upon the "Summary or Trimmed" formatter.') . '</p>';
    }
    return $output;
  }

  /**
   * Implements hook_theme().
   */
  #[Hook('theme')]
  public function theme(array $existing, string $type, string $theme, string $path): array {
    return [
      'smart_trim' => [
        'variables' => [
          'output' => NULL,
          'is_trimmed' => NULL,
          'wrap_output' => NULL,
          'wrapper_class' => NULL,
          'more' => NULL,
          'more_wrapper_class' => NULL,
          'field' => NULL,
          'entity_type' => NULL,
          'entity_bundle' => NULL,
        ],
      ],
    ];
  }

  /**
   * Implements hook_theme_suggestions_HOOK_alter().
   */
  #[Hook('theme_suggestions_smart_trim_alter')]
  public function themeSuggestionsSmartTrimAlter(array &$suggestions, array $variables) {
    $entity_type = $variables['entity_type'] ?? NULL;
    $bundle = $variables['entity_bundle'] ?? NULL;
    $field_name = $variables['field'] ?? NULL;

    if ($entity_type) {
      $suggestions[] = 'smart_trim__' . $entity_type;
      if ($bundle) {
        $suggestions[] = 'smart_trim__' . $entity_type . '__' . $bundle;
        if ($field_name) {
          $suggestions[] = 'smart_trim__' . $entity_type . '__' . $bundle . '__' . $field_name;
        }
      }
      if ($field_name) {
        $suggestions[] = 'smart_trim__' . $entity_type . '__' . $field_name;
      }
    }
  }

}
