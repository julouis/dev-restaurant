<?php get_header() ?>


<!-- 
Bonjour tout le monde : <?php wp_title(); ?> -->


<section class="allRestaurant">
    <h2>Ours restaurants</h2>


    <?php while (have_posts()) : the_post(); ?>
        <article>

            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>"> More info</a>
            <?php the_post_thumbnail('medium') ?>
        </article>

    <?php endwhile ?>

</section>


<? get_footer() ?>