<?php

/**
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );

/**
 * Register Menus
 *
 * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
 */
register_nav_menus();

/**
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );

/**
 * Enqueued Scripts and Styles
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/#combining-enqueue-functions
 */
function add_theme_scripts() {

  /* Styles */
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css' );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css' );

  /* Scripts */
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.min.js', array( 'jquery' ), false, true );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/**
 * Enable ACF Pro Options Page
 *
 * @link https://www.advancedcustomfields.com/add-ons/options-page/
 * @link https://www.advancedcustomfields.com/resources/acf_add_options_sub_page/
 */
if (function_exists( 'acf_add_options_page' )) {

  /* Options */
  $parent = acf_add_options_page( array(
    'page_title'  => 'Options',
    'menu_title'  => 'Options',
    'redirect'    => true,
  ) );

  /* Company Data */
  acf_add_options_sub_page( array(
    'page_title'  => 'Company Data',
    'menu_title'  => 'Company Data',
    'parent_slug' => $parent['menu_slug'],
  ) );

  /* Other */
  acf_add_options_sub_page( array(
    'page_title'  => 'Other',
    'menu_title'  => 'Other',
    'parent_slug' => $parent['menu_slug'],
  ) );
}

/**
 * Set Company Info Variables
 *
 * 1. Check for Advanced Custom Fields plugin
 * 2. Check for the field
 * 3. The company info
 *
 * @example
 *   <?php echo $GLOBALS['bp_company']['name']; ?>
 */
function acf_field_exists( $field ) {
  if ( !class_exists('acf') ) return false; // 1

  if ( get_field($field) ) return true; // 2
}

function bp_global_vars() {
  global $bp_company;
  $bp_company = array( // 3
    'name'      => acf_field_exists( get_field('company_name', 'option') )          ? get_field('company_name', 'option')          : 'Kramerica',
    'phone'     => acf_field_exists( get_field('company_phone-general', 'option') ) ? get_field('company_phone-general', 'option') : '(123) 456-7890',
    'map-url'   => acf_field_exists( get_field('company_map-url', 'option') )       ? get_field('company_map-url', 'option')       : '//maps.google.com/',
    'street'    => acf_field_exists( get_field('company_street', 'option') )        ? get_field('company_street', 'option')        : '123 Maple Street',
    'city'      => acf_field_exists( get_field('company_city', 'option') )          ? get_field('company_city', 'option')          : 'Anytown',
    'state'     => acf_field_exists( get_field('company_state', 'option') )         ? get_field('company_state', 'option')         : 'USA',
    'zip'       => acf_field_exists( get_field('company_zip', 'option') )           ? get_field('company_zip', 'option')           : '77777',
    'facebook'  => acf_field_exists( get_field('company_facebook', 'option') )      ? get_field('company_facebook', 'option')      : '//www.facebook.com/',
    'twitter'   => acf_field_exists( get_field('company_twitter', 'option') )       ? get_field('company_twitter', 'option')       : '//www.twitter.com/',
    'instagram' => acf_field_exists( get_field('company_instagram', 'option') )     ? get_field('company_instagram', 'option')     : '//www.instagram.com/',
    'youtube'   => acf_field_exists( get_field('company_youtube', 'option') )       ? get_field('company_youtube', 'option')       : '//www.youtube.com/',
    'linkedin'  => acf_field_exists( get_field('company_linkedin', 'option') )      ? get_field('company_linkedin', 'option')      : '//www.linkedin.com/'
  );
}
add_action( 'parse_query', 'bp_global_vars' );

/**
 * Prevent Standard WP Gallery's Default Styles
 */
add_filter( 'use_default_gallery_style', '__return_false' );

/**
 * Uglify Phone Numbers for Hyperlinks
 */
function uglify_phone( $pretty ) {
  return preg_replace('/[^0-9]/', '', $pretty);
}
