<?php
  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  function_exists('acf_register_block');
  require_once(__DIR__ . '/vendor/autoload.php');

  $timber = new \Timber\Timber();
  Timber::$dirname = array('views');
  
  add_theme_support( 'title-tag' );
  add_action( 'init', function() {
    register_nav_menu( 'primary-menu', 'Primary Menu');
  });
  add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style('valhalla', get_stylesheet_uri() );
  });
  add_filter( 'timber/context', function($context) {
    $context['menu'] = new \Timber\Menu( 'primary-menu' );
    $context['post'] = new \TimberPost();
    $context['year'] = date('Y');
    return $context;
  });
?>
