<?php

namespace Drupal\cpg_register\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\DependencyInjection\ContainerInterface;

class RegistrationCompleteController extends ControllerBase {

  protected $requestStack;

  public function __construct(RequestStack $request_stack) {
    $this->requestStack = $request_stack;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('request_stack')
    );
  }

  public function content() {
    $session = $this->requestStack->getCurrentRequest()->getSession();
    $step1_data = $session->get('cpg_register_step1_data', []);
    $email = $step1_data['email'] ?? 'your.email@company.com';

    $config = \Drupal::config('cpg_register.settings');
    $title = $config->get('reg_complete_title') ?? 'Registration Complete!';
    $subtitle = $config->get('reg_complete_subtitle') ?? 'Thank you for setting up your account. We\'re thrilled to have you as part of our community. We are sending a confirmation email to your inbox now with details on how to get started.';

    $build = [
      '#theme' => 'cpg_registration_complete',
      '#email' => $email,
      '#title' => $title,
      '#subtitle' => $subtitle,
      '#attached' => [
        'library' => ['cpg_theme/global-styling'],
      ],
      '#cache' => ['max-age' => 0],
    ];

    return $build;
  }
}
