<?php
/**
 * The template to display the header
 *
 * @package WordPress
 * @subpackage boilerplate-wp-theme-default
 */

?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5shiv.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div data-alert class="alert-box">
        You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
        <a href="#" class="close">&times;</a>
      </div>
    <![endif]-->
