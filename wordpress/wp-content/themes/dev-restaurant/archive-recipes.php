<?php
/*
Template Name: Archives Recipes
*/
?>


<div class="archive-recipes-header"> <?php get_header(); ?> </div>

<div class="archive-recipes-baner">

    <h1 class="archive-recipes-baner-text-1">The Chef's selection</h1>

    <h1 class="archive-recipes-baner-text-2">RECIPES BLOG</h1>
</div>


<?php

$the_query = new WP_Query(array('category_name' => 'Recipes'));

if ($the_query->have_posts()) :
    while ($the_query->have_posts()) :
        $the_query->the_post();
?>



        <article class=" article d-flex  m-5">
            <div class="  m-3 container ">
                <div class="  d-flex flex-wrap justify-content-center align-items-center  ">
                    <div class="col d-flex justify-content-center align-items-center overflow-visible miniImgResto ">
                        <?php the_post_thumbnail(array(700, 700)) ?>
                    </div>
                    <div class="col">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-center bg-white p-5 txtResto ">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink() ?>" role="button" class="btn btn-dark"> More infos</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

<?php endwhile;
endif;  ?>


<?php get_footer(); ?>