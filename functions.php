<?php
  require_once(__DIR__ . '/vendor/autoload.php');
  require_once(__DIR__ . '/blocks/Block.php');
  require_once(__DIR__ . '/blocks/GitHubBlock.php');

  function_exists('acf_register_block') or die('Valhalla requires Advanced Custom Fields 5.8');
  
  $timber = new Timber\Timber();
  Timber::$dirname = array('blocks', 'views');

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

  add_action('init', function() {
    $options = array(
      'name'            => 'recent-commits',
      'title'           => 'Recent GitHub Commits',
      'render_callback'	=> 'GitHubBlock::render',
      'category'        => 'widgets',
      'icon'            => 'dashicons-clock'
    );
    acf_register_block($options);
  });
?>
