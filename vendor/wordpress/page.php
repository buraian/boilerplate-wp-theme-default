<?php
/**
 * The template to display pages
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */

get_header(); ?>

<div class="page-template-wrapper">
  <div class="page-template row">
    <main class="page-template-main small-16 medium-16 large-11 columns" role="main">
      <?php
      // Get the title.
      get_template_part( 'title', 'default' );

      // The loop and content.
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
      ?>
    </main>
    <aside class="page-template-sidebar small-16 medium-16 large-5 columns">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>

<?php get_footer(); ?>
