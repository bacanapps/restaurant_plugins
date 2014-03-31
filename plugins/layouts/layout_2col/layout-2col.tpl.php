<?php
/**
 * @file
 * Template for the 2col layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="layout-2col clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  
  <?php if ($content['header']): ?>
    <div class="panel-pane-region panel-pane-region-header <?php print $extra_classes['header']; ?>">
      <div class="panel-region-inner">
        <?php print $content['header']; ?>
      </div>
    </div> <!-- /#header -->
  <?php endif; ?>
  
  <?php if ($content['contentmain1_left'] || $content['contentmain1_right']): ?>
    <div class="container">
      <div class="row">
        <div class="col-md-8 panel-pane-region panel-pane-region-contentmain1-left <?php print $extra_classes['contentmain1_left']; ?>">
          <?php print $content['contentmain1_left']; ?>
        </div>
        <div class="col-md-4 panel-pane-region panel-pane-region-contentmain1-right <?php print $extra_classes['contentmain1_right']; ?>">
          <?php print $content['contentmain1_right']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['fullwidth1']): ?>
    <div class="panel-pane-region panel-region-full-width gray-wrapper <?php print $extra_classes['fullwidth1']; ?>">
      <div class="panel-region-inner">
        <?php print $content['fullwidth1']; ?>
      </div>
    </div> <!-- /#fullwidth1 -->
  <?php endif; ?>

  <?php if ($content['contentmain2_left'] || $content['contentmain2_right']): ?>
    <div class="container">
      <div class="row">
        <div class="col-md-4 panel-pane-region panel-pane-region-contentmain2-left <?php print $extra_classes['contentmain2_left']; ?>">
          <?php print $content['contentmain2_left']; ?>
        </div>
        <div class="col-md-8 panel-pane-region panel-pane-region-contentmain2-right <?php print $extra_classes['contentmain2_right']; ?>">
          <?php print $content['contentmain2_right']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

</div> <!-- /.layout-2col -->
