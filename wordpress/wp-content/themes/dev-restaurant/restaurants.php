<?php /* Template name: All Restaurants */ ?>

<div>
<h1>Our Restaurants </h1>
    <div class=" bg-warning">
        
        <?php while(have_posts()) : the_post(); ?>
            <div>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt();?>
                <a href="<?php the_permalink()?>" role="button" class="btn btn-dark" > More infos</a>
                
            </div>
        
        <?php endwhile ?>
    </div>

</div>