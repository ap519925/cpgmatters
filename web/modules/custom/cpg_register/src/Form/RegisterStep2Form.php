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
      '#markup' => '</div><div class="reg-footer"><p class="footer-text">Step 2 of 2 • After this, we\'ll send a confirmation email to verify your account.</p><p class="footer-text"><a href="/" class="footer-link footer-link--home">← Back to Homepage</a></p></div>',
    ];

    $form['#cache']['max-age'] = 0;

    return $form;
  }

  public function submitBack(array &$form, FormStateInterface $form_state) {
    $form_state->setRedirect('cpg_register.step1');
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve step 1 data from session.
    $session = \Drupal::request()->getSession();
    $step1_data = $session->get('cpg_register_step1_data', []);
    
    $user = \Drupal::currentUser();

    if ($user->isAuthenticated()) {
      $username = $user->getAccountName();
      $email = $user->getEmail();
      $display_name = $user->getDisplayName();
    } else {
      $username = $step1_data['username'] ?? '';
      $email = $step1_data['email'] ?? '';
      $display_name = $step1_data['display_name'] ?? '';
    }

    // Validate step 1 data exists.
    if (empty($username) || empty($email)) {
      $this->messenger()->addError($this->t('Session expired. Please log in or start registration again.'));
      $form_state->setRedirect('cpg_register.step1');
      return;
    }

    // Attempt to create user if not already authenticated
    if (!$user->isAuthenticated()) {
      // Check if username or email already exists.
      $existing_user = user_load_by_name($username);
      if ($existing_user) {
        $this->messenger()->addError($this->t('The username %name is already taken. Please go back and choose a different one.', ['%name' => $username]));
        return;
      }

      $existing_email = user_load_by_mail($email);
      if ($existing_email) {
        $this->messenger()->addError($this->t('The email %email is already registered. Please go back and use a different email or sign in.', ['%email' => $email]));
        return;
      }
      
      try {
        // Create the Drupal user.
        $new_user = \Drupal\user\Entity\User::create();
        $new_user->setUsername($username);
        $new_user->setEmail($email);
        $new_user->setPassword($step1_data['password'] ?? 'changeme');
  
        // Set display name if the field exists on the user entity.
        if ($new_user->hasField('field_display_name')) {
          $new_user->set('field_display_name', $display_name);
        }
  
        $new_user->activate(); // Set user as active.
        $new_user->enforceIsNew();
        $new_user->save();
        
        // Send standard Drupal confirmation email
        _user_mail_notify('register_no_approval_required', clone $new_user);
        
        user_login_finalize($new_user);
      } catch (\Exception $e) {
        \Drupal::logger('cpg_register')->error('Registration failed: @error', ['@error' => $e->getMessage()]);
        $this->messenger()->addError($this->t('An error occurred during registration. Please try again.'));
        return;
      }
    }

    $company = $form_state->getValue('company_name');
    $position = $form_state->getValue('position');
    $department = $form_state->getValue('department');

    // Log registration details for admin.
    \Drupal::logger('cpg_register')->notice(
      'Business info completed: @username (@email). Company: @company, Position: @position, Department: @department',
      [
        '@username' => $username,
        '@email' => $email,
        '@company' => $company ?: 'N/A',
        '@position' => $position ?: 'N/A',
        '@department' => $department ?: 'N/A',
      ]
    );

    // Clear session data.
    $session->remove('cpg_register_step1_data');

    $this->messenger()->addStatus($this->t('Registration complete! Welcome to CPG Matters, @name!', ['@name' => $display_name]));
    $form_state->setRedirect('cpg_register.complete');

  }
}

