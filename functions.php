<?php
function themeSetup()
{
    add_theme_support('post-thumbnails');       // Enable eye-catching image
    add_theme_support('automatic-feed-links');  // Enable RSS feed for Posts and Comments
    add_theme_support('title-tag');             // Enable automatic Title generation

    add_theme_support('html5', array(           // Configure output via HTML
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'themeSetup');

function custom()
{
    if (is_front_page()) {
    }
}

function scriptInit()
{
    wp_deregister_script('jquery');                                                                             // Disable jQuery included in wordpress
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js', '3.6.1');  // Add latest jQuery from CDN
    wp_enqueue_style('css-init', get_template_directory_uri() . '/css/init.css', array(), '0.1.0');
    wp_enqueue_style('css-header', get_template_directory_uri() . '/css/header.css', array(), '0.1.0');
    wp_enqueue_style('css-footer', get_template_directory_uri() . '/css/footer.css', array(), '0.1.0');
    if (is_page()) { // Check Static page
        custom();    // Call custom() to load js and css for static pages
    } else {
        wp_enqueue_style('css-default', get_template_directory_uri() . '/css/default/default.css', array(), '0.1.0');
        wp_enqueue_script('js-default', get_template_directory_uri() . '/js/default/default.js', array(), '0.1.0');
    }
}
add_action('wp_enqueue_scripts', 'scriptInit');
