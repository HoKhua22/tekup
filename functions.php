<?php
//Load stylesheet
function load_css()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
  wp_enqueue_style('carousel');

  wp_register_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all');
  wp_enqueue_style('owl-theme');

  wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), false, 'all');
  wp_enqueue_style('animate');

  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

//Load JavaScript
function load_js()
{
  // wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', 'jquery', false, true);
  wp_enqueue_script('jquery');

  wp_register_script('popper', get_template_directory_uri() . '/js/popper.js', 'jquery', false, true);
  wp_enqueue_script('popper');

  wp_register_script('popper', get_template_directory_uri() . '/js/popper.js', 'jquery', false, true);
  wp_enqueue_script('popper');

  wp_register_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', 'jquery', false, true);
  wp_enqueue_script('carousel');

  wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', false, true);
  wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'load_js');

//Load jquery
function load_jquery()
{
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), false, true );
}

add_action('wp_enqueue_scripts', 'load_jquery');

//Theme Options
add_theme_support('menus'); //menu
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )
);
