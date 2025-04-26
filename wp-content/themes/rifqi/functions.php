<?php
function rifqi_setup() {
  register_nav_menus([
    'main_menu' => __('Main Menu', 'rifqi')
  ]);
}
add_action('after_setup_theme', 'rifqi_setup');

add_theme_support('post-thumbnails');
add_image_size('custom-thumb', 400, 300, true); // ukuran 400x300 crop center

function rifqi_enqueue_styles() {
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css');
  wp_enqueue_style('theme-style', get_stylesheet_uri());
  wp_enqueue_script('bootstrap-js1', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), null, true);
  wp_enqueue_script('bootstrap-js2', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js', array(), null, true);
  wp_enqueue_script('bootstrap-js3', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'rifqi_enqueue_styles');