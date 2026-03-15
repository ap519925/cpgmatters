<?php

namespace Drupal\cpg_register\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RegisterStep2Form extends FormBase {

  public function getFormId() {
    return 'cpg_register_step2_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#attached']['library'][] = 'cpg_theme/global-styling';

    // Add custom wrappers
    $form['#prefix'] = '<div class="cpg-register-wrapper"><div class="registration-container">';
    $form['#suffix'] = '</div></div>';

    $config = \Drupal::config('cpg_register.settings');
    $title = $config->get('reg2_title') ?? 'Great! Now tell us about your background.';
    $subtitle = $config->get('reg2_subtitle') ?? 'Help us curate the perfect content tailored for your specific role within the CPG industry.';

    $form['header'] = [
      '#markup' => '
      <div class="reg-header">
        <div class="reg-logo"><span class="cpg">CPG</span> <span class="matters">MATTERS</span></div>
        <div class="reg-subtitle">CONSUMER PACKAGED GOODS NEWS & INSIGHTS</div>
      </div>
      <div class="progress-bar"><div class="progress-fill step-2"></div></div>
      <div class="reg-content">
        <div class="welcome-message">
          <h1 class="welcome-title">' . htmlspecialchars($title) . '</h1>
          <p class="welcome-text">' . htmlspecialchars($subtitle) . '</p>
        </div>
      ',
    ];

    $form['company_name'] = [
      '#type' => 'textfield',
      '#title' => clone $this->t('What company do you work for?'),
      '#description' => $this->t('This helps us provide relevant industry insights and networking opportunities.'),
      '#required' => TRUE,
      '#attributes' => ['class' => ['form-input'], 'placeholder' => 'e.g., Procter & Gamble'],
      '#wrapper_attributes' => ['class' => ['form-group']],
    ];

    $form['position'] = [
      '#type' => 'select',
      '#title' => clone $this->t('What\'s your role or position?'),
      '#description' => $this->t('We\'ll use this to tailor content to your interests.'),
      '#options' => [
        '' => 'Select your role...',
        'executive' => 'C-Level Executive (CEO, CMO, etc.)',
        'vp' => 'VP / Senior Vice President',
        'director' => 'Director',
        'manager' => 'Manager',
        'specialist' => 'Specialist / Coordinator',
      ],
      '#required' => TRUE,
      '#attributes' => ['class' => ['form-select']],
      '#wrapper_attributes' => ['class' => ['form-group']],
    ];

    $form['department'] = [
      '#type' => 'select',
      '#title' => clone $this->t('Which area do you work in? <span class="optional-badge">Optional</span>'),
      '#description' => $this->t('This helps us recommend the most relevant articles and resources.'),
      '#options' => [
        '' => 'Select your department...',
        'marketing' => 'Marketing',
        'sales' => 'Sales',
        'product' => 'Product Development',
      ],
      '#attributes' => ['class' => ['form-select']],
      '#wrapper_attributes' => ['class' => ['form-group']],
    ];

    $form['actions']['#type'] = 'actions';
    $form['actions']['#prefix'] = '<div class="button-group">';
    $form['actions']['#suffix'] = '</div>';
    
    $form['actions']['back'] = [
      '#type' => 'submit',
      '#value' => clone $this->t('← Back'),
      '#submit' => ['::submitBack'],
      '#limit_validation_errors' => [],
      '#attributes' => ['class' => ['back-btn']],
      '#weight' => 0,
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => clone $this->t('Complete Registration →'),
      '#button_type' => 'primary',
      '#attributes' => ['class' => ['continue-btn']],
      '#weight' => 1,
    ];
    
    $form['footer'] = [
      '#markup' => '</div><div class="reg-footer"><p class="footer-text">Step 2 of 2 • After this, we\'ll send a confirmation email to verify your account.</p></div>',
    ];

    $form['#cache']['max-age'] = 0;

    return $form;
  }

  public function submitBack(array &$form, FormStateInterface $form_state) {
    $form_state->setRedirect('cpg_register.step1');
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    \Drupal::messenger()->addMessage(clone $this->t('Registration complete! Please check your email to confirm your account.'));
    $form_state->setRedirect('cpg_register.complete');
  }
}
