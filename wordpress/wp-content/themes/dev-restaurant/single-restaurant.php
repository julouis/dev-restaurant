<?php /* Template name: restaurant */ ?>

<?php get_header() ?>

    <main class="container">

        <?php while(have_posts()) : the_post(); ?>
            
                <h1><?php the_title(); ?></h1>
                <?php the_content();?>
                
        
        <?php endwhile ?>
        
    </main>


<? get_footer() ?>