<?php
/**
 * The template to display the footer
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */
?>

    <footer class="footer-wrapper">
      <div class="footer row text-center">

        <div class="footer-logo small-16 columns">
          <a href="<?= esc_url( home_url( '/' ) ); ?>">
            <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/images/logo-w-logotype.svg" alt="<?= $GLOBALS['bp_company']['name'] ?>">
          </a>
        </div>

        <ul class="footer-nav-primary small-16 columns">
          <?php
          wp_nav_menu( array(
            'container'  => false,
            'depth'      => 1,
            'items_wrap' => '%3$s',
            'menu'       => 'Primary'
          ) );
          ?>
        </ul>

        <ul class="footer-nav-social small-16 columns">

          <?php if ( $GLOBALS['bp_company']['facebook'] ): ?>
            <li>
              <a href="<?= $GLOBALS['bp_company']['facebook']; ?>" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ( $GLOBALS['bp_company']['twitter'] ): ?>
            <li>
              <a href="<?= $GLOBALS['bp_company']['twitter']; ?>" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ( $GLOBALS['bp_company']['instagram'] ): ?>
            <li>
              <a href="<?= $GLOBALS['bp_company']['instagram']; ?>" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ( $GLOBALS['bp_company']['youtube'] ): ?>
            <li>
              <a href="<?= $GLOBALS['bp_company']['youtube']; ?>" target="_blank">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ( $GLOBALS['bp_company']['linkedin'] ): ?>
            <li>
              <a href="<?= $GLOBALS['bp_company']['linkedin']; ?>" target="_blank">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
          <?php endif; ?>
        </ul>

        <div class="footer-location small-16 columns">
          <a class="footer-address" href="<?= $GLOBALS['bp_company']['map-url']; ?>" target="_blank">
            <span class="footer-address-street"><?= $GLOBALS['bp_company']['street']; ?><span class="show-for-medium-up">, </span></span>
            <br class="hide-for-medium-up">
            <span class="footer-address-city"><?= $GLOBALS['bp_company']['city']; ?>, </span>
            <span class="footer-address-state"><?= $GLOBALS['bp_company']['state']; ?></span>
            <span class="footer-address-zip"><?= $GLOBALS['bp_company']['zip']; ?></span>
          </a>
          <br>
        </div>

        <div class="footer-connect small-16 columns">
          <a class="footer-phone-general" href="tel:<?= uglify_phone( $GLOBALS['bp_company']['phone'] ); ?>" target="_blank"><?= $GLOBALS['bp_company']['phone']; ?></a>
        </div>

        <div class="footer-copyright small-16 columns">Copyright &copy; <?= date('Y'); ?> <?= $GLOBALS['bp_company']['name']; ?>.</div>

        <div class="footer-credit small-16 columns">
          Website Designed by <a href="https://www.produceresults.com/" target="_blank">Produce Results</a>,
          <br class="hide-for-large-up">
          A <a href="https://www.produceresults.com/" target="_blank">Denton Web Design</a> Company.
        </div>

      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
