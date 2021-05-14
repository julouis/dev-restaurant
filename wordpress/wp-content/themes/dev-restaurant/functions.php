<?php




function dev_restaurant_supports()
{
    add_theme_support('title_tag');
}

function dev_restaurant_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
}

wp_enqueue_script('jquery');
wp_enqueue_script('text/javascript');

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'dev_restaurant_register_assets');
