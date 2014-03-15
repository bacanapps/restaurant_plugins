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
  
  <?php if ($content['banner']): ?>
    <div id="banner" class="panel-pane-region panel-region-full-width">
      <div class="panel-region-inner">
        <?php print $content['banner']; ?>
      </div>
    </div> <!-- /#banner -->
  <?php endif; ?>
  
  <?php if ($content['contentmain1_left'] || $content['contentmain1_right']): ?>
    <div id="contentmain1" class="panel-pane-region">
      <div class="container">
        <div class="panel-region-inner">
          <div class="row">
            <div class="col-md-8 contentmain1-left">
              <?php print $content['contentmain1_left']; ?>
            </div>
            <div class="col-md-4 contentmain1-right">
              <?php print $content['contentmain1_right']; ?>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /#contentmain1 -->
  <?php endif; ?>

  <?php if ($content['fullwidth1']): ?>
    <div id="fullwidth1" class="panel-pane-region panel-region-full-width">
      <div class="panel-region-inner">
        <?php print $content['fullwidth1']; ?>
      </div>
    </div> <!-- /#fullwidth1 -->
  <?php endif; ?>

  <?php if ($content['contentmain2_left'] || $content['contentmain2_right']): ?>
    <div id="contentmain2" class="panel-pane-region">
      <div class="container">
        <div class="panel-region-inner">
          <div class="row">
            <div class="col-md-8 contentmain2-left">
              <?php print $content['contentmain2_left']; ?>
            </div>
            <div class="col-md-4 contentmain2-right">
              <?php print $content['contentmain2_right']; ?>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /#contentmain2 -->
  <?php endif; ?>

  <?php if ($content['fullwidth2']): ?>
    <div id="fullwidth2" class="panel-pane-region panel-region-full-width">
      <div class="panel-region-inner">
        <?php print $content['fullwidth2']; ?>
      </div>
    </div> <!-- /#fullwidth2 -->
  <?php endif; ?>

  <?php if ($content['contentmain3_left'] || $content['contentmain3_right']): ?>
    <div id="contentmain3" class="panel-pane-region">
      <div class="container">
        <div class="panel-region-inner">
          <div class="row">
            <div class="col-md-8 contentmain3-left">
              <?php print $content['contentmain3_left']; ?>
            </div>
            <div class="col-md-4 contentmain3-right">
              <?php print $content['contentmain3_right']; ?>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /#contentmain3 -->
  <?php endif; ?>

  <?php if ($content['fullwidth3']): ?>
    <div id="fullwidth3" class="panel-pane-region panel-region-full-width">
      <div class="panel-region-inner">
        <?php print $content['fullwidth3']; ?>
      </div>
    </div> <!-- /#fullwidth3 -->
  <?php endif; ?>

</div> <!-- /.layout-2col -->
