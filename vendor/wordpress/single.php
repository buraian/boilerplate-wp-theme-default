<?php
/**
 * The template to display a single post
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */

get_header();

/**
 * Get the latest posts.
 */
$args = array(
  'numberposts' => 3,
  'orderby' => 'post_date',
  'order' => 'DESC',
  'post_type' => 'post',
  'post_status' => 'publish'
);
$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>

<main class="single-template-wrapper" role="main">
  <div class="single-template row">
    <div class="single-template-opener small-16 medium-5 columns">

      <header class="single-template-header-wrapper">
        <?php
        // Get the title.
        get_template_part( 'title', 'default' ); ?>
      </header>

      <aside class="single-template-archives">

        <div class="single-template-archives-header-wrapper">
          <div class="single-template-archives-header">Latest Posts</div>
        </div>

        <ul class="single-template-archives-entries">

          <?php
          /**
           * Render the latest posts.
           *
           * 1. The post ID
           * 2. The post title
           * 3. The post permalink
           */
          foreach( $recent_posts as $recent ):
            $id = $recent['ID']; // 1
            $title = $recent['post_title']; // 2
            $permalink = get_permalink( $id ); // 3
            ?>

            <li class="single-template-archives-entry">

              <div class="single-template-archives-title"><a href="<?= $permalink; ?>"><?= $title; ?></a></div>
            </li>

          <?php endforeach; wp_reset_query(); ?>
        </ul>
      </aside>
    </div>

    <div class="single-template-story small-16 medium-10 medium-offset-1 columns">
      <?php
      // The loop.
      while ( have_posts() ) : the_post(); ?>

        <?php
        // The post thumbnail.
        if ( has_post_thumbnail() ): ?>
          <div class="single-template-thumbnail-wrapper">
            <div class="single-template-thumbnail">
              <?php the_post_thumbnail( 'large' ); ?>
            </div>
          </div>
        <?php endif; ?>

        <?php
        // The title. ?>
        <h3 class="single-template-title"><?php the_title(); ?></h3>

        <?php
        // The content. ?>
        <div class="single-template-content"><?php the_content(); ?></div>

        <div class="single-template-date-wrapper">
          <div class="single-template-date"><?= get_the_date(); ?></div>
        </div>

        <?php
        // The author.
        if ( get_the_author() ): ?>
          <div class="single-template-author">
            <span>By </span>
            <a href="<?= esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>">
              <?= get_the_author_meta( 'nickname' ); ?>
            </a>
          </div>
        <?php endif; ?>

      <?php endwhile; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
