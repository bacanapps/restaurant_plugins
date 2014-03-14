<?php
// Plugin definition
$plugin = array(
  'title' => t('Site Layout'),
  'icon' => 'site-layout.png',
  'category' => t('Restaurant'),
  'theme' => 'site_layout',
  'regions' => array(
    'top' => t('Top'),
    'navigation_left' => t('Navigation left'),
    'navigation_right' => t('Navigation Right'),
    'page_content' => t('Page content'),
    'triptych_first' => t('Triptych first'),
    'triptych_last' => t('Triptych last'),
    'footer_col1' => t('Footer column 1'),
    'footer_col2' => t('Footer column 2'),
  ),
);
