<?php
add_theme_support('title-tag');
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('valhalla', get_template_directory_uri() . '/dist/build.js', array(), false, true);
});

/* Register the main navigation, for the header. */
add_action('init', function() {
    register_nav_menu('primary-menu', 'Primary Menu');
});
?>