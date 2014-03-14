<?php
// Plugin definition
$plugin = array(
  'title' => t('Site Layout'),
  'icon' => 'site-layout.png',
  'category' => t('Restaurant'),
  'theme' => 'site_layout',
  'regions' => array(
    'top' => t('Top'),
    'navigation' => t('Navigation'),
    'page_content' => t('Page content'),
    'footer_col1' => t('Footer column 1'),
    'footer_col2' => t('Footer column 2'),
    'footer_col3' => t('Footer column 3'),
  ),
);
