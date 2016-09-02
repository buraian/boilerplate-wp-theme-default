<?php
/**
 * The template to display the footer
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */

/**
 * Check for Advanced Custom Fields plugin
 */
$acf_status = class_exists('acf') ? true : false;

/**
 * Define company info
 */
$company = array(
  'name'      => $acf_status ? get_field( 'company_name', 'option' )          : 'Kramerica',
  'phone'     => $acf_status ? get_field( 'company_phone-general', 'option' ) : '(123) 456-7890',
  'map-url'   => $acf_status ? get_field( 'company_map-url' )                 : '//maps.google.com/',
  'street'    => $acf_status ? get_field( 'company_street' )                  : '123 Maple Street',
  'city'      => $acf_status ? get_field( 'company_city' )                    : 'Anytown',
  'state'     => $acf_status ? get_field( 'company_state' )                   : 'USA',
  'zip'       => $acf_status ? get_field( 'company_zip' )                     : '77777',
  'facebook'  => $acf_status ? get_field( 'company_facebook', 'option' )      : '//www.facebook.com/',
  'twitter'   => $acf_status ? get_field( 'company_twitter', 'option' )       : '//www.twitter.com/',
  'instagram' => $acf_status ? get_field( 'company_instagram', 'option' )     : '//www.instagram.com/',
  'youtube'   => $acf_status ? get_field( 'company_youtube', 'option' )       : '//www.youtube.com/',
  'linkedin'  => $acf_status ? get_field( 'company_linkedin', 'option' )      : '//www.linkedin.com/'
);
?>

    <footer class="footer-wrapper">
      <div class="footer row text-center">

        <div class="footer-logo small-16 columns">
          <a href="<?= esc_url( home_url( '/' ) ); ?>">
            <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/images/logo-w-logotype.svg" alt="<?= $company['name'] ?>">
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

          <?php if ( $company['facebook'] ): ?>
            <li>
              <a href="<?= $company['facebook']; ?>" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ( $company['twitter'] ): ?>
            <li>
              <a href="<?= $company['twitter']; ?>" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ( $company['instagram'] ): ?>
            <li>
              <a href="<?= $company['instagram']; ?>" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ( $company['youtube'] ): ?>
            <li>
              <a href="<?= $company['youtube']; ?>" target="_blank">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
          <?php endif; ?>

          <?php if ( $company['linkedin'] ): ?>
            <li>
              <a href="<?= $company['linkedin']; ?>" target="_blank">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
          <?php endif; ?>
        </ul>

        <div class="footer-location small-16 columns">
          <a class="footer-address" href="<?= $company['map-url']; ?>" target="_blank">
            <span class="footer-address-street"><?= $company['street']; ?><span class="show-for-medium-up">, </span></span>
            <br class="hide-for-medium-up">
            <span class="footer-address-city"><?= $company['city']; ?>, </span>
            <span class="footer-address-state"><?= $company['state']; ?></span>
            <span class="footer-address-zip"><?= $company['zip']; ?></span>
          </a>
          <br>
        </div>

        <div class="footer-connect small-16 columns">
          <a class="footer-phone-general" href="tel:<?= uglify_phone( $company['phone'] ); ?>" target="_blank"><?= $company['phone']; ?></a>
        </div>

        <div class="footer-copyright small-16 columns">Copyright &copy; <?= date('Y'); ?> <?= $company['name']; ?>.</div>

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
