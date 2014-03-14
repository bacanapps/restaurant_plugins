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
    <div id="banner">
      <?php print $content['banner']; ?>
    </div> <!-- /#banner -->
  <?php endif; ?>
    
  <div id="content">
    <div class="container">
      <?php print $content['contentmain']; ?>
    </div>
  </div> <!-- /#content -->

</div> <!-- /.layout-1col -->
