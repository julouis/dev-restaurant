<?php




function dev_restaurant_supports()
{
    add_theme_support('title_tag');
}

function dev_restaurant_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['popper', 'jquery']);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}


add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'dev_restaurant_register_assets');
