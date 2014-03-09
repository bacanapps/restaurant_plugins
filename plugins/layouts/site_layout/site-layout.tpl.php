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
  
  <?php if ($content['top']): ?>
    <div id="top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php print $content['top']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <header id="header" class="header" role="header">
    <div class="container">
      <div class="row">
        <div class="col-md-4 column-1">
          <div class="panel-panel-inner">
            <?php print $content['header_col1']; ?>
          </div>
        </div>
        <div class="col-md-4 column-2">
          <div class="panel-panel-inner">
            <?php print $content['header_col2']; ?>
          </div>
        </div>
        <div class="col-md-4 column-3">
          <div class="panel-panel-inner">
            <?php print $content['header_col3']; ?>
          </div>
        </div>
      </div>
    </div>
  </header> <!-- /#header -->

  <?php if ($content['navigation']): ?>
    <nav class="navbar navbar-inverse" id="navigation" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php print $content['navigation']; ?>
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

  <header id="footer" class="header" role="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 column-1">
          <div class="panel-panel-inner">
            <?php print $content['footer_col1']; ?>
          </div>
        </div>
        <div class="col-md-4 column-2">
          <div class="panel-panel-inner">
            <?php print $content['footer_col2']; ?>
          </div>
        </div>
        <div class="col-md-4 column-3">
          <div class="panel-panel-inner">
            <?php print $content['footer_col3']; ?>
          </div>
        </div>
      </div>
    </div>
  </header> <!-- /#header -->

</div> <!-- /.site-layout -->
