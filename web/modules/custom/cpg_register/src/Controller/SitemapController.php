<?php

namespace Drupal\cpg_register\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the Site Map page.
 */
class SitemapController extends ControllerBase {

  /**
   * Returns the sitemap page content.
   */
  public function content() {
    $build = [
      '#theme' => 'cpg_sitemap_page',
      '#attached' => [
        'library' => ['cpg_theme/global-styling'],
      ],
      '#cache' => ['max-age' => 0],
    ];

    return $build;
  }

}
