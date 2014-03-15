<?php
/**
 * @file
 * Template for the site layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="site-layout clearfix <?php if (!empty($classes)) { print $classes; } ?><?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['navigation_left'] || $content['navigation_right']): ?>
    <nav class="navbar navbar-inverse" id="navigation" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <?php print $content['navigation_left']; ?>
          </div>
          <div class="col-md-10">
            <?php print $content['navigation_right']; ?>
          </div>
        </div>
      </div>
    </nav>
  <?php endif; ?>
    
  <div id="main-wrapper">
    <div id="main" class="main">
      <?php print $content['page_content']; ?>
    </div> <!-- /#main -->
  </div> <!-- /#main-wrapper -->

  <?php if ($content['triptych_first'] || $content['triptych_last']): ?>
    <div id="triptych">
      <div class="container">
        <div class="row">
          <div class="col-md-6 triptych-first">
            <?php print $content['triptych_first']; ?>
          </div>
          <div class="col-md-6 triptych-last">
            <?php print $content['triptych_last']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <footer id="footer" class="header" role="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-8 column-1">
          <div class="panel-panel-inner">
            <?php print $content['footer_col1']; ?>
          </div>
        </div>
        <div class="col-md-4 column-2">
          <div class="panel-panel-inner">
            <?php print $content['footer_col2']; ?>
          </div>
        </div>
      </div>
    </div>
  </footer> <!-- /#footer -->

</div> <!-- /.site-layout -->
