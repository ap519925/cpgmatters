<?php

namespace Drupal\cpg_register\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure settings for custom CPG pages (Dictionary, Registration, etc).
 */
class CpgPagesSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'cpg_register_pages_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'cpg_register.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('cpg_register.settings');

    $form['dictionary'] = [
      '#type' => 'details',
      '#title' => $this->t('Dictionary Page Editable Content'),
      '#open' => TRUE,
    ];
    $form['dictionary']['dict_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Hero Title'),
      '#default_value' => $config->get('dict_title') ?? 'CPG Industry Dictionary',
    ];
    $form['dictionary']['dict_subtitle'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Hero Subtitle'),
      '#default_value' => $config->get('dict_subtitle') ?? 'Your comprehensive guide to consumer packaged goods terminology. From basic concepts to advanced industry jargon, we\'ve got you covered.',
    ];

    $form['register'] = [
      '#type' => 'details',
      '#title' => $this->t('Registration Pages Content'),
      '#open' => TRUE,
    ];
    $form['register']['reg1_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Step 1 Title'),
      '#default_value' => $config->get('reg1_title') ?? 'Welcome! Let\'s get started.',
    ];
    $form['register']['reg1_subtitle'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Step 1 Subtitle'),
      '#default_value' => $config->get('reg1_subtitle') ?? 'We\'re excited to have you join the CPG Matters community. First, let\'s set up your account with a few quick details.',
    ];
    $form['register']['reg2_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Step 2 Title'),
      '#default_value' => $config->get('reg2_title') ?? 'Great! Now tell us about your background.',
    ];
    $form['register']['reg2_subtitle'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Step 2 Subtitle'),
      '#default_value' => $config->get('reg2_subtitle') ?? 'Help us curate the perfect content tailored for your specific role within the CPG industry.',
    ];
    $form['register']['reg_complete_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Registration Complete Title'),
      '#default_value' => $config->get('reg_complete_title') ?? 'Registration Complete!',
    ];
    $form['register']['reg_complete_subtitle'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Registration Complete Body'),
      '#default_value' => $config->get('reg_complete_subtitle') ?? 'Thank you for setting up your account. We\'re thrilled to have you as part of our community. We are sending a confirmation email to your inbox now with details on how to get started.',
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('cpg_register.settings')
      ->set('dict_title', $form_state->getValue('dict_title'))
      ->set('dict_subtitle', $form_state->getValue('dict_subtitle'))
      ->set('reg1_title', $form_state->getValue('reg1_title'))
      ->set('reg1_subtitle', $form_state->getValue('reg1_subtitle'))
      ->set('reg2_title', $form_state->getValue('reg2_title'))
      ->set('reg2_subtitle', $form_state->getValue('reg2_subtitle'))
      ->set('reg_complete_title', $form_state->getValue('reg_complete_title'))
      ->set('reg_complete_subtitle', $form_state->getValue('reg_complete_subtitle'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
