<?php
// Template Name: Recipes
// Template Post Type: post, page 
?>
<?php get_header() ?>

<?php wp_link_pages(); ?>

<h1>Single recipes test</h1>


<?php if (have_posts()) : while (have_posts()) : the_post() ?>
                <h1> <?php the_title() ?></h1>
                <?php the_content() ?>

<?php endwhile;
endif ?>



<?php get_footer() ?>