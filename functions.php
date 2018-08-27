<?php require("customize-theme.php");

add_action('after_setup_theme', 'theme_slug_setup');
add_theme_support( 'automatic-feed-links' );
add_theme_support('title-tag');
load_theme_textdomain('rss-really-simple-style');

function theme_slug_setup() {

}

//adds hero images
add_theme_support('post-thumbnails');



if (! isset($content_width)) {
  $content_width = 800;
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu', 'rss-really-simple-style'));
}
add_action( 'init', 'register_my_menu' );

function rss_widgets_init() {
  register_sidebar(( array(
    'name' => __('Main Sidebar', 'rss-really-simple-style'),
    'id' => 'sidebar-1',
    'description' => __('Widgets in this area will be shown on all posts and pages', ' rss-really-simple-style'),
  )));
}
add_action('widgets_init', 'rss_widgets_init');


?>
