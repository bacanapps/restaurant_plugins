<?php
/**
 * @file
 * Template for the 1col layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="layout-1col clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  
  <?php if ($content['banner']): ?>
    <div id="banner" class="region">
      <?php print $content['banner']; ?>
    </div> <!-- /#banner -->
  <?php endif; ?>
  
  <?php if ($content['contentmain1']): ?>
    <div id="contentmain1" class="region">
      <div class="container">
        <?php print $content['contentmain1']; ?>
      </div>
    </div> <!-- /#contentmain1 -->
  <?php endif; ?>

  <?php if ($content['full_width_1']): ?>
    <div id="full-width-1" class="region">
      <?php print $content['full_width_1']; ?>
    </div> <!-- /#full-width-1 -->
  <?php endif; ?>

  <?php if ($content['contentmain2']): ?>  
    <div id="contentmain2" class="region">
      <div class="container">
        <?php print $content['contentmain2']; ?>
      </div>
    </div> <!-- /#contentmain2 -->
  <?php endif; ?>

  <?php if ($content['full_width_2']): ?>
    <div id="full-width-2" class="region">
      <?php print $content['full_width_2']; ?>
    </div> <!-- /#full-width-2 -->
  <?php endif; ?>

  <?php if ($content['contentmain3']): ?>
    <div id="contentmain3" class="region">
      <div class="container">
        <?php print $content['contentmain3']; ?>
      </div>
    </div> <!-- /#contentmain3 -->
  <?php endif; ?>

  <?php if ($content['full_width_3']): ?>
    <div id="full-width-3" class="region">
      <?php print $content['full_width_3']; ?>
    </div> <!-- /#full-width-3 -->
  <?php endif; ?>

</div> <!-- /.layout-1col -->
