<?php get_header() ?>


<!-- <?php
        // $the_query = new WP_Query( 'post_type' => "Resto" )
        //     if ($the_query -> have_posts()):
        //         while($the_query -> the_post(): the_post() 
        ?> -->


<div class="allRestaurant" id="restaurants">
    <div class="container d-flex flex-column justify-content-center align-items-center p-5 restaurant">
        <h2 class="m-5">Our restaurants</h2>


        <?php
        $the_query = new WP_Query(array('category_name' => "restaurant"));

        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) :
                $the_query->the_post();
        ?>
<<<<<<< HEAD
            
       
            <article class=" article d-flex  m-5">
                <div class="  m-3 container " >
                    <div class="  d-flex flex-wrap justify-content-center align-items-center  ">
                        <div class="col d-flex justify-content-center align-items-center overflow-visible miniImgResto ">
                            <?php the_post_thumbnail(array(700, 700)) ?>
                        </div>
                        <div class="col">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center bg-white p-5 txtResto ">
                                <h4><?php the_field('slogan'); ?></h4>
                                <h3><?php the_title(); ?></h3>
                                <?php the_excerpt();?>
                                <a href="<?php the_permalink()?>" role="button" class="btn btn-dark" > More infos</a>
=======


                <article class=" article d-flex  m-5">
                    <div class="  m-3 container ">
                        <div class="  d-flex flex-wrap justify-content-center align-items-center  ">
                            <div class="col d-flex justify-content-center align-items-center overflow-visible miniImgResto ">
                                <?php the_post_thumbnail(array(700, 700)) ?>
                            </div>
                            <div class="col">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-center bg-white p-5 txtResto ">
                                    <h4><?php the_field('slogan'); ?></h4>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink() ?>" role="button" class="btn btn-dark"> More infos</a>
                                </div>
>>>>>>> b2105cf3191846b074ddbe7bb40ad546aa2010bc
                            </div>
                        </div>
                    </div>


                </article>

        <?php endwhile;
        endif; ?>
    </div>


</div>


<? get_footer() ?>