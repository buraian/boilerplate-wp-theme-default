<?php
/**
 * The template to display the sidebar
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */

?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
  <div class="sidebar-wrapper">
    <div class="sidebar">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
  </div>
<?php endif; ?>
