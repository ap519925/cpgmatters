<?php

use Drupal\webform\Entity\Webform;

// Define elements as YAML string exactly like Webform module wants them.
$elements = [
  'name_row' => [
    '#type' => 'webform_flexbox',
    '#title' => 'Name Row',
    'first_name' => [
      '#type' => 'textfield',
      '#title' => 'First Name',
      '#required' => TRUE,
    ],
    'last_name' => [
      '#type' => 'textfield',
      '#title' => 'Last Name',
      '#required' => TRUE,
    ],
  ],
  'email' => [
    '#type' => 'email',
    '#title' => 'Email Address',
    '#required' => TRUE,
  ],
  'company' => [
    '#type' => 'textfield',
    '#title' => 'Company/Organization',
  ],
  'subject' => [
    '#type' => 'select',
    '#title' => 'Subject',
    '#required' => TRUE,
    '#empty_option' => 'Please select...',
    '#options' => [
      'general' => 'General Inquiry',
      'editorial' => 'Editorial/Story Idea',
      'advertising' => 'Advertising Opportunities',
      'subscription' => 'Subscription Support',
      'technical' => 'Technical Issue',
      'partnership' => 'Partnership Opportunity',
      'feedback' => 'Feedback',
      'other' => 'Other',
    ],
  ],
  'message' => [
    '#type' => 'textarea',
    '#title' => 'Message',
    '#required' => TRUE,
  ],
  'newsletter' => [
    '#type' => 'checkbox',
    '#title' => 'Yes, I\'d like to receive CPG Matters newsletter and updates',
  ],
  'privacy' => [
    '#type' => 'checkbox',
    '#title' => 'I agree to the <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms-of-service">Terms of Service</a>',
    '#required' => TRUE,
  ],
  'required_note' => [
    '#type' => 'webform_markup',
    '#markup' => '<p class="required-note"><em>* Required fields</em></p>',
  ],
  'actions' => [
    '#type' => 'webform_actions',
    '#title' => 'Submit button(s)',
    '#submit__label' => 'SEND MESSAGE',
  ],
];

// Check if it already exists to update it rather than fail.
$webform = \Drupal::entityTypeManager()->getStorage('webform')->load('contact_us');
if (!$webform) {
  $webform = Webform::create([
    'id' => 'contact_us',
    'title' => 'Contact Us',
    'status' => Webform::STATUS_OPEN,
  ]);
}

$webform->setElements($elements);
$webform->save();

echo "Webform created/updated successfully.\n";
