<?php
/**
 * The template to display search results
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */

get_header(); ?>

<main class="search-template-wrapper" role="main">
  <div class="search-template row">

    <div class="search-template-title small-11 columns">
      <?php
      // Get the title.
      get_template_part( 'title', 'default' ); ?>
    </div>

    <div class="search-template-form small-11 columns">
      <?php get_search_form(); ?>
    </div>

    <div class="search-template-title small-11 columns">Displaying search results for <strong><?= get_search_query(); ?></strong></div>

    <div class="search-template-entries small-11 columns end">

      <?php
      // The loop.
      if ( have_posts() ):
        while ( have_posts() ) : the_post(); ?>

          <div class="search-template-entry-title">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>

          <div class="search-template-entry-excerpt">
            <?php the_excerpt(); ?>
          </div>

          <div class="search-template-entry-action">
            <a class="button tiny" href="<?php the_permalink(); ?>">View <?= get_post_type(); ?></a>
          </div>

        <?php endwhile; ?>

        <?php get_template_part( 'partials/pagination' ) ?>

      <?php else: ?>

        <h3>No results found.</h3>

      <?php endif; ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>
