<?php
/**
 * CLW: The Changing Tracks — theme functions
 */

if (!defined('ABSPATH')) {
  exit;
}

function clw_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
  add_theme_support('responsive-embeds');
  add_theme_support('editor-styles');
  add_editor_style('assets/css/style.css');

  register_nav_menus(array(
    'primary' => __('Primary Menu', 'clw-changing-tracks'),
    'footer'  => __('Footer Menu', 'clw-changing-tracks'),
  ));
}
add_action('after_setup_theme', 'clw_theme_setup');

function clw_enqueue_assets() {
  $theme_uri = get_template_directory_uri();
  $theme_ver = wp_get_theme()->get('Version');

  wp_enqueue_style(
    'clw-fonts',
    'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&family=Oswald:wght@500;600&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;1,8..60,400&display=swap',
    array(),
    null
  );

  wp_enqueue_style(
    'clw-main',
    $theme_uri . '/assets/css/style.css',
    array('clw-fonts'),
    $theme_ver
  );

  wp_enqueue_script(
    'clw-main',
    $theme_uri . '/assets/js/main.js',
    array(),
    $theme_ver,
    true
  );
}
add_action('wp_enqueue_scripts', 'clw_enqueue_assets');

function clw_excerpt_length($length) {
  return 28;
}
add_filter('excerpt_length', 'clw_excerpt_length');
