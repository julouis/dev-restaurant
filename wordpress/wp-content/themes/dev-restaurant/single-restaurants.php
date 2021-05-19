<?php get_header() ?>

        <?php while(have_posts()) : the_post(); ?>
            <article class="">
                <h1><?php the_title(); ?></h1>
                <?php the_content();?>
                <!-- <a href=""> More info</a> -->
                
            </article>
        
        <?php endwhile ?>
        



<? get_footer() ?>