<?php get_header() ?>

<div class="allRestaurant">
    <div class="container d-flex flex-column justify-content-center align-items-center p-5 restaurant">
        <h2 class="m-5" >Our restaurants</h2>
        
        

        <?php while(have_posts()) : the_post(); ?>
            <article class=" article d-flex  m-5">
                <div class="  m-3 container " >
                    <div class="  d-flex flex-wrap justify-content-center align-items-center  ">
                        <div class="col d-flex justify-content-center align-items-center overflow-visible miniImgResto ">
                            <?php the_post_thumbnail(array(700, 700)) ?>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center bg-white p-5 txtResto ">
                                <h3><?php the_title(); ?></h3>
                                <?php the_excerpt();?>
                                <a href="<?php the_permalink()?>" role="button" class="btn btn-dark" > More infos</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </article>
        
        <?php endwhile ?>
    </div>
    
    
        
</div>


<? get_footer() ?>