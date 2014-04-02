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

<?php if ($content['sidebar_left']): ?>
  <aside id="sidebar-left" class="sidebar">
    <?php print $content['sidebar_left']; ?>
  </aside>
<?php endif; ?>

<section class="main-wrapper">
    <header class="header">
      <div class="container">
        <div class="row">
          <?php if ($content['sidebar_left']): ?>
            <div class="col-xs-1 text-left">
              <a href="#" data-toggle="push" data-target="#sidebar-left" data-position="right">
                <i class="fa fa-bars fa-border fa-2x"></i>
              </a>
            </div>
            <div class="col-xs-10 text-center">
              <?php print $content['header']; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </header>

    <div class="main">
      <?php print $content['page_content']; ?>
    </div> <!-- /#main -->

    <footer class="footer" role="footer">
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
</section> <!-- /.site-layout -->
