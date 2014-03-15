<?php
// Plugin definition
$plugin = array(
  'title' => t('Layout 1col with banner'),
  'icon' => 'layout-1col.png',
  'category' => t('Restaurant'),
  'theme' => 'layout_1col',
  'regions' => array(
    'header' => t('Header'),
    'contentmain1' => t('Content 1'),
    'contentmain2' => t('Content 2'),
    'contentmain3' => t('Content 3'),
    'full_width_1' => t('Full Width 1'),
    'full_width_2' => t('Full Width 2'),
    'full_width_3' => t('Full Width 3'),
  ),
);
