<?php
/**
 * The template file of all template files
 *
 * Using for blog posts and default fallback.
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */

get_header(); ?>

<main class="index-blog-wrapper container-fluid" role="main">
  <div class="index-blog container">
    <div class="row">

      <div class="index-blog-opener col-xs-16 col-sm-5">

        <?php
        // Blog page.
        if ( is_home() && !is_front_page() ): ?>

          <header class="index-blog-header-wrapper">
            <?php
            // Get the title.
            get_template_part( 'title-plain' ); ?>
          </header>

        <?php endif; ?>

        <div class="index-blog-opener-content">
          <p>For a business to become a sustainable organization, every facet of the company needs to be aligned with the best sustainable practices—including its operations. That being said, there are many ways to improve and optimize your operations&hellip;</p>
        </div>
      </div>

      <div class="index-blog-archive col-xs-16 col-sm-9 col-sm-offset-1 col-md-offset-2">

        <?php if ( have_posts() ): ?>

          <div class="index-blog-entries">

            <?php
            // The loop.
            while ( have_posts() ) : the_post();

              /**
               * Render the featured image.
               *
               * 1. The post thumbnail ID
               * 2. The array of thumbnail data
               * 3. The thumbnail url
               * 4. Render
               */
              $thumb_id = get_post_thumbnail_id(); // 1
              $thumb_arr = wp_get_attachment_image_src( $thumb_id, 'thumbnail', false ); // 2
              $thumb_url = $thumb_arr[0] // 3
                ? $thumb_arr[0]
                : esc_url( get_template_directory_uri() ) . "/assets/images/c2g-strategies-logo-default-w-mark.svg";
              ?>

              <fieldset class="index-blog-entry-wrapper">
                <legend class="index-blog-date"><?php echo get_the_date(); ?></legend>

                <div class="index-blog-entry">

                  <?php if ( $thumb_url ): // 4 ?>
                    <div class="index-blog-thumbnail-wrapper">
                      <div class="index-blog-thumbnail">
                        <img src="<?php echo $thumb_url; ?>">
                      </div>
                    </div>
                  <?php endif; ?>

                  <h2 class="index-blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                  <?php if ( get_the_excerpt() ): ?>
                    <div class="index-blog-excerpt"><?php the_excerpt(); ?></div>
                  <?php endif; ?>

                  <?php if ( get_the_author() ): ?>
                    <div class="index-blog-author">
                      <span>By </span>
                      <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>">
                        <?php echo get_the_author_meta( 'nickname' ); ?>
                      </a>
                    </div>
                  <?php endif; ?>

                  <div class="index-blog-more">
                    <a class="btn btn-default btn-sm" href="<?php the_permalink(); ?>">Read More</a>
                  </div>
                </div>
              </fieldset>

            <?php endwhile; ?>
          </div>

          <?php get_template_part( 'pagination' ) ?>

        <?php else : ?>

          <h3>No posts found.</h3>

        <?php endif; ?>

      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
