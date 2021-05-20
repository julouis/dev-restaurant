<?php


function dev_restaurant_supports()
{
    add_theme_support('title_tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
}

function dev_restaurant_register_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
    wp_register_style('fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['popper', 'jquery']);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');


    wp_enqueue_style('fontawesome');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function devrestaurant_title($title)
{
    return 'Salut';
}

add_action('after_setup_theme', 'dev_restaurant_supports');
add_action('wp_enqueue_scripts', 'dev_restaurant_register_assets');
add_filter('wp_title', 'dev_restaurant_title');


function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

function prefix_modify_nav_menu_args($args)
{
    return array_merge($args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ));
}
add_filter('wp_nav_menu_args', 'prefix_modify_nav_menu_args');

// afficher les derniers articles d'une catégorie
// Utilisation : wppln_last_posts('ID DE LA CATEGORIE','NBRE DE POSTS A RETOURNER','true/false pour AFFICHER LE RESUME');
function wppln_last_posts($cat_id,$nbr_post,$excerpt) { 
	$query = new WP_Query("cat=$cat_id&posts_per_page=$nbr_post");
	echo '<ul>';
	while($query -> have_posts()) : 
		$query->the_post();
		echo '<li><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></li>';
		if($excerpt == 'true') :
			echo '<ul><li>'.get_the_excerpt().'</li></ul>';
		endif;
	endwhile;
	wp_reset_postdata();
	echo '</ul>';
}
