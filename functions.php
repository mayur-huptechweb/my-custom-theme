
<?php

if (! defined('MY_THEME_VERSION')) {
    define('MY_THEME_VERSION', '1.0.0');
}

function mytheme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
        'footer'  => __('Footer Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');


// Enqueue scripts and styles
function mytheme_scripts()
{
    wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(), MY_THEME_VERSION);
    wp_enqueue_script('mytheme-main', get_template_directory_uri() . '/js/main.js', array(), MY_THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');


// Register widget area (sidebar)
function mytheme_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'my-custom-theme'),
        'id'            => 'primary-sidebar',
        'description'   => __('Main sidebar that appears on the right.', 'my-custom-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');

function mytheme_enqueue_assets()
{
    // Load Font Awesome
    wp_enqueue_style(
        'font-awesome-6',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );

    // load google fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');