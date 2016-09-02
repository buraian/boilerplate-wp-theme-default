<?php
/**
 * The template to display the pagination element
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */

// Get pagination array.
$links = paginate_links( array(
  'prev_text'          => 'Previous page',
  'next_text'          => 'Next page',
  'type'               => 'array',
) );

// Display pagination as unordered list.
if ( $links ): ?>

  <div class="pagination-wrapper">
    <ul class="pagination">

      <?php foreach ( $links as $link ):

        if ( strpos($link, 'current') !== false ):
          echo '<li class="active">' . $link . '</li>';
        else:
          echo '<li>' . $link . '</li>';
        endif;

      endforeach;
      ?>

    </ul>
  </div>

<?php endif; ?>
