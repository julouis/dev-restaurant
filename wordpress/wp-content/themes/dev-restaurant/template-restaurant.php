

<?php 
// Template Name: Resto
// Template Post Type: post

?>




<div class="bg-warning">
    <?php if (have_posts()) : while (have_posts()) : the_post() ?>

    <div class="card bg-dark text-white heroSize">
        <img src="<?= the_post_thumbnail_url() ?>" class="card-img" alt="...">
        <div class=" heroDark card-img-overlay">
            <div class="container ">

                <?php get_header() ?>

                <div class=" d-flex align-item-center justify-content-center">
                    <h1 class=" d-flex align-item-center justify-content-center bg-primary"><?php the_title() ?></h1>
                </div>
                
            </div>
        </div>
    </div>
        
        <?php the_content()?>

    <?php endwhile; endif ?>

</div>





<? get_footer() ?>