<?php

/**
 * @file
 * Template for logo and site name.
 */
?>
<?php if ($logo): ?>
  <a href="<?php print $front_page ?>" class="logo"><?php print $logo; ?></a>
<?php endif; ?>
<?php if ($site_name): ?>
  <a href="<?php print $front_page ?>" class="navbar-brand"><?php print $site_name; ?></a>
<?php endif; ?>
