<?php

/**
 * @file
 * template.php
 */
 
 function garuda_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'garuda') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'garuda_preprocess_user_login'
  ),
 );
return $items;
}


