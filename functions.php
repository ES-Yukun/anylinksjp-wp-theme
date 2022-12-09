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

function scriptInit()
{
    wp_deregister_script('jquery');                                                                                     // Disable jQuery included in wordpress
    
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js', '3.6.1');          // Add latest jQuery from CDN
    wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('jquery'), '0.1.0');                 // Add theme javascript file ( THEME_DIR/js/main.js )
    wp_enqueue_style('default-css', get_template_directory_uri().'/css/default.css', array(), '0.1.0');                 // Add theme css file        ( THEME_DIR/css/default.js )
}
add_action('wp_enqueue_scripts', 'scriptInit');