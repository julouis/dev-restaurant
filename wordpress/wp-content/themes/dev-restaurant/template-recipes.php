<?php
// Template Name: Recipes
// Template Post Type: post, page 
?>
<?php get_header() ?>


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



<?php get_footer() ?>