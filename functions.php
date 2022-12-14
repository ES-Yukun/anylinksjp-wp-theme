<?php

add_action('template_redirect', 'my_custom_disable_author_page');

function my_custom_disable_author_page() {
    global $wp_query;

    if ( is_author() ) {
        // Redirect to homepage, set status to 301 permenant redirect. 
        // Function defaults to 302 temporary redirect. 
        wp_redirect(get_option('/'), 301); 
        exit; 
    }
}

function themeSetup()
{
    add_theme_support('post-thumbnails');       // Enable eye-catching image
    add_theme_support('automatic-feed-links');  // Enable RSS feed for Posts and Comments
    add_theme_support('title-tag');             // Enable automatic Title generation

    add_theme_support('html5', array(           // Configure output via HTML
        'search-form',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'themeSetup');

function pageInit()
{
    if (is_admin()) {
        $fullpath_files = glob(get_template_directory() . "/page-*.php", GLOB_BRACE);
        $files = array();
        foreach ($fullpath_files as $fullpath_file) {
            array_push($files, substr($fullpath_file, strlen(get_template_directory() . "/page-"), -strlen(".php")));
        }
        foreach ($files as $file) {
            if (empty(get_page_by_path($file))) {
                wp_insert_post(['post_title' => $file, 'post_name' => $file, 'post_status' => 'publish', 'post_type' => 'page', 'post_parent' => '', 'post_content' => 'this content cannot edit']);
            }
        }
    }
}
add_action('after_setup_theme', 'pageInit');

function custom()
{
    if (is_front_page()) { // Same as is_front_page()
        wp_enqueue_style('css-default', get_template_directory_uri() . '/css/front/main.css', array(), '0.1.0');
        wp_enqueue_script('js-default', get_template_directory_uri() . '/js/front/main.js', array(), '0.1.0');
    }
}

function scriptInit()
{
    wp_deregister_script('jquery');                                                                             // Disable jQuery included in wordpress
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js', '3.6.1');  // Add latest jQuery from CDN
    wp_enqueue_style('css-init', get_template_directory_uri() . '/css/init.css', array(), '0.1.0');
    wp_enqueue_style('css-header', get_template_directory_uri() . '/css/header.css', array(), '0.1.0');
    wp_enqueue_style('css-footer', get_template_directory_uri() . '/css/footer.css', array(), '0.1.0');
    if (is_front_page() || is_page()) { // Check Static page
        custom();    // Call custom() to load js and css for static pages
    } else {
        wp_enqueue_style('css-default', get_template_directory_uri() . '/css/default/main.css', array(), '0.1.0');
        wp_enqueue_script('js-default', get_template_directory_uri() . '/js/default/main.js', array(), '0.1.0');
    }
}
add_action('wp_enqueue_scripts', 'scriptInit');
