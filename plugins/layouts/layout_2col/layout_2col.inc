<?php
// Plugin definition
$plugin = array(
  'title' => t('Layout 2col with banner'),
  'icon' => 'layout-2col.png',
  'category' => t('Restaurant'),
  'theme' => 'layout_2col',
  'regions' => array(
    'banner' => t('banner'),
    'contentmain1_left' => t('Content 1 Left'),
    'contentmain1_right' => t('Content 1 Right'),
    'contentmain2_left' => t('Content 2 Left'),
    'contentmain2_right' => t('Content 2 Right'),
    'contentmain3_left' => t('Content 3 Left'),
    'contentmain3_right' => t('Content 3 Right'),
    'fullwidth1' => t('Full Width 1'),
    'fullwidth2' => t('Full Width 2'),
    'fullwidth3' => t('Full Width 3'),
  ),
);
