<?php

/**
* Plugin definition
*/
$plugin = array(
  'title' => t('Contact info'),
  'single' => TRUE,
  'category' => array(t('Restaurant')),
  'edit form' => 'restaurant_plugins_contact_info_content_type_form',
);

/**
 * Settings Form
 */
function restaurant_plugins_contact_info_content_type_form($form, &$form_state) {
  $conf = $form_state['conf'];

  $form['title'] = array(
    '#type' => 'textfield',
    '#title' => t('Title'),
    '#default_value' => !empty($conf['title']) ? $conf['title'] : '',
    '#prefix' => '<div class="clear-block no-float">',
    '#suffix' => '</div>',
  );

  return $form;
}

function restaurant_plugins_contact_info_content_type_form_submit($form, &$form_state) {
  foreach (element_children($form) as $key) {
    if (!empty($form_state['values'][$key])) {
      $form_state['conf'][$key] = $form_state['values'][$key];
    }
  }
}

/**
 * Render Callback
 */
function restaurant_plugins_contact_info_content_type_render($subtype, $conf, $args) {
  $block = new stdClass();

  $block->title = isset($conf['title']) ? $conf['title'] : '';

  // Add address to content.
  $block->content = theme('contact_info_pane', array(
    'address' => restaurant_base_get_settings('address'),
    'phone' => restaurant_base_get_settings('phone'),
    'email' => restaurant_base_get_settings('email'),
  ));

  return $block;
}
