<?php

// register webpack compiled js and css with theme
function enqueue_webpack_scripts()
{

  $cssFilePath = glob(get_template_directory() . '/css/build/main.min.*.css');
  $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
  wp_enqueue_style('main_css', $cssFileURI);

  $jsFilePath = glob(get_template_directory() . '/js/build/main.min.*.js');
  $jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
  wp_enqueue_script('main_js', $jsFileURI, null, null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_webpack_scripts');


//Register menu placeholder
register_nav_menus(
  array(

    'main-menu' => "Primary menu",
    'footer-menu' => "Footer Menu",
    'mobile-menu-icon' => "Mobile icon menu",
    'mobile-menu' => "Mobile menu"
  )
);


//add theme support for display Menu
add_theme_support('menus');
//add theme support for title tag
add_theme_support('title-tag');
//add theme support for post thumbnails
add_theme_support('post-thumbnails');
//add theme support for widgets
add_theme_support('widgets');
//add theme support for Yoast plugin
add_theme_support('yoast-seo-breadcrumbs');

/**
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
add_theme_support('custom-logo', array(
  'height'      => '400',
  'width'       => '100',
  'flex-width'  => true,
  'flex-height' => true,
));
/* 
WIDGETS 
*/
function arphabet_widgets_init()
{

  register_sidebar(array(
    'name'          => 'Copyright',
    'id'            => 'footer_1',
    'before_widget' => '<div class="copyright">',
    'after_widget'  => '</div>',
  ));
  register_sidebar(array(
    'name'          => 'Footer Menu',
    'id'            => 'footer_2',
    'before_widget' => '<div class="footer-menu">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="rounded">',
    'after_title'   => '</h5>',
  ));
  register_sidebar(array(
    'name'          => 'Footer Social icon',
    'id'            => 'footer_3',
    'before_widget' => '<div class="social-icon">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Footer Logo',
    'id'            => 'footer_4',
    'before_widget' => '<div class="footer-logo">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Footer Contact Us',
    'id'            => 'footer_5',
    'before_widget' => '<div class="contact-us">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Footer image',
    'id'            => 'footer_6',
    'before_widget' => '<div class="footer-image">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
  ));
  register_sidebar(array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '<div class="sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'arphabet_widgets_init');
/* Disable WordPress widget block editor */
add_filter('use_widgets_block_editor', '__return_false');
function my_theme_enqueue_scripts() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');