<?php
  add_theme_support( 'title-tag' );
  add_action( 'init', function() {
    register_nav_menu( 'primary-menu', 'Primary Menu');
  });
  add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style('valhalla', get_stylesheet_uri() );
  });
  add_filter( 'timber/context', function($context) {
    $context['menu'] = new \Timber\Menu( 'primary-menu' );
    return $context;
  });
?>