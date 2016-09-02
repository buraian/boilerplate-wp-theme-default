<?php
/**
 * The template to display 404 pages
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */

get_header(); ?>

<main class="error-404-template-wrapper" role="main">
  <div class="error-404-template row text-center">

    <header class="error-404-template-title-wrapper small-16 columns">
      <h2 class="error-404-template-title">Oops! That page can&rsquo;t be found.</h2>
    </header>

    <div class="error-404-template-content small-16 columns">
      <p>It looks like nothing was found at this location. Maybe try a search?</p>

      <?php get_search_form(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
