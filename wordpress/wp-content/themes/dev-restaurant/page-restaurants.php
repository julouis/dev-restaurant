<?php /* Template name: Our Restaurants */ ?>

<?php get_header() ?>

<div>
    <?php wppln_last_posts("3","2","true") ?>
</div>

<div class="container d-flex flex-column justify-content-center align-items-center p-5 restaurant">
        <h2 class="m-5" >Our restaurants</h2>
        
        

        <?php while(have_posts()) : the_post(); ?>
        
            <h1><?php the_title(); ?></h1>
            <?php the_excerpt();?>
            <a href="<?php the_archive_ ?>" role="button" class="btn btn-dark" > More informations</a>
                 
            </article>
        
        <?php endwhile ?>
    </div>

    <? get_footer() ?>