<?php
// Plugin definition
$plugin = array(
  'title' => t('Site Layout'),
  'icon' => 'site-layout.png',
  'category' => t('Restaurant'),
  'theme' => 'site_layout',
  'regions' => array(
    'sidebar_left' => t('Sidebar left'),
    'header' => t('Header'),
    'page_content' => t('Page content'),
    'footer_col1' => t('Footer column 1'),
    'footer_col2' => t('Footer column 2'),
  ),
);
