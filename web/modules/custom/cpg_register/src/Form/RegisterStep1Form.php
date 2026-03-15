<?php

namespace Drupal\cpg_register\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RegisterStep1Form extends FormBase {

  public function getFormId() {
    return 'cpg_register_step1_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    // Attach library
    $form['#attached']['library'][] = 'cpg_theme/global-styling';
    
    // Add custom wrappers
    $form['#prefix'] = '<div class="cpg-register-wrapper"><div class="registration-container">';
    $form['#suffix'] = '</div></div>';

    $config = \Drupal::config('cpg_register.settings');
    $title = $config->get('reg1_title') ?? 'Welcome! Let\'s get started.';
    $subtitle = $config->get('reg1_subtitle') ?? 'We\'re excited to have you join the CPG Matters community. First, let\'s set up your account with a few quick details.';

    $form['header'] = [
      '#markup' => '
      <div class="reg-header">
        <div class="reg-logo"><span class="cpg">CPG</span> <span class="matters">MATTERS</span></div>
        <div class="reg-subtitle">CONSUMER PACKAGED GOODS NEWS & INSIGHTS</div>
      </div>
      <div class="progress-bar"><div class="progress-fill step-1"></div></div>
      <div class="reg-content">
        <div class="welcome-message">
          <h1 class="welcome-title">' . htmlspecialchars($title) . '</h1>
          <p class="welcome-text">' . htmlspecialchars($subtitle) . '</p>
        </div>
      ',
    ];

    $form['username'] = [
      '#type' => 'textfield',
      '#title' => clone $this->t('What username would you like?'),
      '#description' => $this->t('This is how you\'ll log in. Choose something memorable!<br><span class="helper-text">Letters, numbers, and underscores only. 3-20 characters.</span>'),
      '#required' => TRUE,
      '#attributes' => ['class' => ['form-input'], 'placeholder' => 'e.g., sarah_cpg_pro'],
      '#wrapper_attributes' => ['class' => ['form-group']],
    ];

    $form['email'] = [
      '#type' => 'email',
      '#title' => clone $this->t('What\'s your email address?'),
      '#description' => $this->t('We\'ll use this to send you updates and important account info.<br><span class="helper-text">We\'ll never share your email with anyone.</span>'),
      '#required' => TRUE,
      '#attributes' => ['class' => ['form-input'], 'placeholder' => 'your.email@company.com'],
      '#wrapper_attributes' => ['class' => ['form-group']],
    ];

    $form['password'] = [
      '#type' => 'password',
      '#title' => clone $this->t('Create a secure password'),
      '#description' => $this->t('Make it strong to keep your account safe!<br><span class="helper-text">At least 8 characters with uppercase, lowercase, and numbers.</span>'),
      '#required' => TRUE,
      '#attributes' => ['class' => ['form-input'], 'placeholder' => '••••••••'],
      '#wrapper_attributes' => ['class' => ['form-group']],
    ];

    $form['display_name'] = [
      '#type' => 'textfield',
      '#title' => clone $this->t('What name should we call you?'),
      '#description' => $this->t('This is how we\'ll greet you around the site. First name works great!<br><span class="helper-text">We\'ll use this in emails and when you\'re logged in.</span>'),
      '#required' => TRUE,
      '#attributes' => ['class' => ['form-input'], 'placeholder' => 'e.g., Sarah'],
      '#wrapper_attributes' => ['class' => ['form-group']],
    ];

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Continue to Next Step →'),
      '#button_type' => 'primary',
      '#attributes' => ['class' => ['continue-btn']],
    ];
    
    $form['footer'] = [
      '#markup' => '</div><div class="reg-footer"><p class="footer-text">Already have an account? <a href="/user/login" class="footer-link">Sign in here</a></p></div>',
    ];

    // Disable caching for this form
    $form['#cache']['max-age'] = 0;

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('username')) < 3) {
      $form_state->setErrorByName('username', clone $this->t('Username is too short.'));
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Store data in session to use in step 2.
    $session = \Drupal::request()->getSession();
    $session->set('cpg_register_step1_data', [
      'username' => $form_state->getValue('username'),
      'email' => $form_state->getValue('email'),
      'display_name' => $form_state->getValue('display_name'),
    ]);

    $form_state->setRedirect('cpg_register.step2');
  }
}
