<?php

namespace Drupal\cpg_contact\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * CPG Matters contact form matching the mockup design.
 *
 * Fields: First Name, Last Name, Email, Company/Organization,
 * Subject (select), Message (textarea), Newsletter opt-in, Privacy agree.
 */
class CpgContactForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'cpg_contact_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Use a custom theme template.
    $form['#theme'] = 'cpg_contact_form';

    // ── Intro text ──
    $form['intro'] = [
      '#markup' => '<p class="cpg-contact__intro">Have a question, feedback, or story idea? We\'d love to hear from you. Fill out the form below and our team will get back to you within 24 hours.</p>',
    ];

    // ── Name row (First + Last) ──
    $form['name_row'] = [
      '#type' => 'container',
      '#attributes' => ['class' => ['cpg-contact__name-row']],
    ];

    $form['name_row']['first_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First Name'),
      '#required' => TRUE,
      '#attributes' => ['class' => ['cpg-contact__input']],
    ];

    $form['name_row']['last_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Last Name'),
      '#required' => TRUE,
      '#attributes' => ['class' => ['cpg-contact__input']],
    ];

    // ── Email ──
    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Email Address'),
      '#required' => TRUE,
      '#attributes' => ['class' => ['cpg-contact__input']],
    ];

    // ── Company / Organization ──
    $form['company'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Company/Organization'),
      '#required' => FALSE,
      '#attributes' => ['class' => ['cpg-contact__input']],
    ];

    // ── Subject (select dropdown) ──
    $form['subject'] = [
      '#type' => 'select',
      '#title' => $this->t('Subject'),
      '#required' => TRUE,
      '#options' => [
        '' => $this->t('Please select...'),
        'general' => $this->t('General Inquiry'),
        'editorial' => $this->t('Editorial/Story Idea'),
        'advertising' => $this->t('Advertising Opportunities'),
        'subscription' => $this->t('Subscription Support'),
        'technical' => $this->t('Technical Issue'),
        'partnership' => $this->t('Partnership Opportunity'),
        'feedback' => $this->t('Feedback'),
        'other' => $this->t('Other'),
      ],
      '#attributes' => ['class' => ['cpg-contact__select']],
    ];

    // ── Message ──
    $form['message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Message'),
      '#required' => TRUE,
      '#rows' => 6,
      '#attributes' => ['class' => ['cpg-contact__textarea']],
    ];

    // ── Checkboxes ──
    $form['newsletter'] = [
      '#type' => 'checkbox',
      '#title' => $this->t("Yes, I'd like to receive CPG Matters newsletter and updates"),
      '#attributes' => ['class' => ['cpg-contact__checkbox']],
    ];

    $form['privacy'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('I agree to the <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms-of-service">Terms of Service</a>'),
      '#required' => TRUE,
      '#attributes' => ['class' => ['cpg-contact__checkbox']],
    ];

    // ── Required fields note ──
    $form['required_note'] = [
      '#markup' => '<p class="cpg-contact__required-note">* Required fields</p>',
    ];

    // ── Submit button ──
    $form['actions'] = [
      '#type' => 'actions',
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('SEND MESSAGE'),
      '#attributes' => ['class' => ['cpg-contact__submit']],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validate email.
    $email = $form_state->getValue('email');
    if (!empty($email) && !\Drupal::service('email.validator')->isValid($email)) {
      $form_state->setErrorByName('email', $this->t('Please enter a valid email address.'));
    }

    // Validate subject selection.
    if (empty($form_state->getValue('subject'))) {
      $form_state->setErrorByName('subject', $this->t('Please select a subject.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Get all values.
    $first_name = $form_state->getValue('first_name');
    $last_name = $form_state->getValue('last_name');
    $email = $form_state->getValue('email');
    $company = $form_state->getValue('company');
    $subject = $form_state->getValue('subject');
    $message = $form_state->getValue('message');
    $newsletter = $form_state->getValue('newsletter');

    // Log the message (in production, you'd send an email).
    \Drupal::logger('cpg_contact')->notice(
      'Contact form submission from @name (@email). Subject: @subject, Company: @company, Newsletter: @newsletter',
      [
        '@name' => $first_name . ' ' . $last_name,
        '@email' => $email,
        '@subject' => $subject,
        '@company' => $company ?: 'N/A',
        '@newsletter' => $newsletter ? 'Yes' : 'No',
      ]
    );

    // Send email notification using Drupal mail.
    $mailManager = \Drupal::service('plugin.manager.mail');
    $module = 'cpg_contact';
    $key = 'contact_form';
    $to = \Drupal::config('system.site')->get('mail') ?: 'info@cpgmatters.com';
    $params = [
      'subject' => 'Contact Form: ' . $subject . ' from ' . $first_name . ' ' . $last_name,
      'body' => "Name: $first_name $last_name\nEmail: $email\nCompany: $company\nSubject: $subject\n\nMessage:\n$message\n\nNewsletter opt-in: " . ($newsletter ? 'Yes' : 'No'),
    ];
    $langcode = \Drupal::currentUser()->getPreferredLangcode();

    try {
      $mailManager->mail($module, $key, $to, $langcode, $params, $email, TRUE);
    }
    catch (\Exception $e) {
      // Mail sending may fail in dev; that's OK.
      \Drupal::logger('cpg_contact')->warning('Mail sending failed: @error', ['@error' => $e->getMessage()]);
    }

    // Show success message.
    $this->messenger()->addStatus($this->t(
      'Thank you, @name! Your message has been sent successfully. We\'ll get back to you within 24 hours.',
      ['@name' => $first_name]
    ));

    // Redirect back to contact page.
    $form_state->setRedirect('cpg_contact.contact_page');
  }

}
