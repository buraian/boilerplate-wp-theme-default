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
 * Prevent Standard WP Gallery's Default Styles
 */
add_filter( 'use_default_gallery_style', '__return_false' );

/**
 * Uglify Phone Numbers for Hyperlinks
 */
function uglify_phone( $pretty ) {
  return preg_replace('/[^0-9]/', '', $pretty);
}
