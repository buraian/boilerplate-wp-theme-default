<?php
/**
 * The partial to display the default page title.
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */

/**
 * Get the page for posts ID.
 */
$page_for_posts = get_option( 'page_for_posts' );
?>

<header class="title-default-header">

  <?php if ( is_single() ): ?>

    <h2 class="title-default"><a href="<?= get_the_permalink( $page_for_posts ); ?>"><?= get_the_title( $page_for_posts ); ?></a></h2>

  <?php elseif ( is_search() ): ?>

    <h2 class="title-default">Search</h2>

  <?php else: ?>

    <h2 class="title-default"><?php single_post_title(); ?></h2>

  <?php endif; ?>

</header>
