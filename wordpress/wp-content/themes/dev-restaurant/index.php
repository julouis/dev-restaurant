


<!-- <?php
        // $the_query = new WP_Query( 'post_type' => "Resto" )
        //     if ($the_query -> have_posts()):
        //         while($the_query -> the_post(): the_post() 
        ?> -->
<div>

        <div class=" banerTop text-white ">
            
            <?php
                // selection du post dicover our menu par l'id
                $the_query_home = new WP_Query(array('post_id' => "226" ));
                if($the_query_home -> have_posts()) :
                    $the_query_home -> the_post();
                
            ?> 
            <div class="boxImgHero">
                <img src=" <?php the_post_thumbnail_url()?>" class="imgHero" alt="...">
            </div>       
            <div class=" hero card-img-overlay ">
                <div class=" card-img-overlay container ">
                    <div class="card-img-overlay p-5 ">
                        <div class="">
                            <?php get_header() ?>
                        </div>
                        <div class="">
                        
                        </div>
                        <div class=" home col-6">
                            <h2>For Happy day</h2>
                            <h1>Enjoy happy meal</h1>
                            <a href="" class="text-white"> view the full Menu</a>
                        </div>
                    </div>
                </div>
            </div> 

            <?php endif ?>
        </div>

    <div class="bookingHome p-5 ">
        <img src="" alt="">

        <?php
            // selection du post dicover our menu par l'id
            $the_query_home = new WP_Query(array('post_id' => "226" ));
            if($the_query_home -> have_posts()) :
                $the_query_home -> the_post();
            // image Card Home
            $imageCardHome = get_field('image_card_home');
            $urlImageCardHome = $imageCardHome['url'];
        ?> 
        <div class="d-flex flex-column justify-centent-center align-items-center m-5 p-5">
            <div class=" cardHome m-3 p-5" > 
                <div class="  d-flex flex-wrap justify-content-center align-items-center  ">
                    <div class="col d-flex justify-content-center align-items-center overflow-visible miniImgResto m-5 ">
                        <img src="<?php echo $urlImageCardHome; ?>" alt="">
                    </div>
                    <div class="col shadow-lg bg-white p-5">
                        <h5> <?php the_field('slogan_card_home') ?> </h5>
                        <h4> <?php the_field('title_card_home') ?> </h4>
                        <?php the_field('content_card_home') ?>
                        <h5> <?php the_field('signature_card_home') ?></h5>
                    </div>
                </div>
            </div>
        </div>

        <?php endif?>
    </div>

    <div class="allRestaurant" id="restaurants">
        <div class="heroGray">
            <div class="container d-flex flex-column justify-content-center align-items-center p-5 restaurant">
                <h2 class="m-5">Our restaurants</h2>
        
        
                <?php
                $the_query = new WP_Query(array('category_name' => "restaurant"));
        
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                ?>
                    
            
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
                                    </div>
                                </div>
                            </div>
        
        
                        </article>
        
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>

    <div class=" dicoverOurMenu">
        <div class=" d-flex flex-wrap justify-content-center align-items-center p-5">                       
            <?php
                // selection du post dicover our menu par l'id
                $the_query = new WP_Query(array('post_id' => "200" ));
                if($the_query -> have_posts()) :
                    $the_query -> the_post();
                // image discover our menu 
                $imageDiscoverMenuHome1 = get_field('image_one_discover_menu');
                $urlImgDiscoverMenuHome1 = $imageDiscoverMenuHome1['url'];
                $imageDiscoverMenuHome2 = get_field('image_two_discover_menu');
                $urlImgDiscoverMenuHome2 = $imageDiscoverMenuHome2['url'];
                $imageDiscoverMenuHome3 = get_field('image_three_discover_menu');
                $urlImgDiscoverMenuHome3 = $imageDiscoverMenuHome3['url'];
                $imageDiscoverMenuHome4 = get_field('image_four_discover_menu');
                $urlImgDiscoverMenuHome4 = $imageDiscoverMenuHome4['url'];
            ?>   
            <div class=" text-center m-5 boxMenu " >
                <div class="row g-0 d-flex flex-wrap justify-content-center align-items-center  ">
                    <div class="col imgDicorverMenu d-flex flex-wrap justify-centent-center align-items-center">
                        
                        <img src="<?php echo $urlImgDiscoverMenuHome2 ?>" />
                        <img src="<?php echo $urlImgDiscoverMenuHome1 ?>" />
                        <img src="<?php echo $urlImgDiscoverMenuHome3 ?>" />
                        <img src="<?php echo $urlImgDiscoverMenuHome4 ?>" />
                        
                    </div>
                    <div class="col">
                        <div class="card-body ">
                            <h5 class="card-title"><?php the_field('slogan_discover_menu') ?></h5>
                            <h4 class="card-title"><?php the_field('title_discover_menu') ?></h4>
                            <p class="card-text m-5"> <?php the_field('description_discover_menu') ?> </p>
                            <a href=""><button class="btn btn-dark" >view the full Menu</button></a>
                            
                        </div>
                    </div>
                </div>
            </div>                        
            <?php  endif; ?>           
        </div>
    </div>

    <div class="comment">

    </div>
    
    <div class=" recipesMini d-flex flex-column align-items-center ">
        <img src="" alt="">
        <div class="mt-5 text-center">
            <h5>Latest updated</h5>
            <h4>Recipes Blog</h4>
        </div>
        
        <div class="latestRecipe">
            <div class="carMiniRecipe d-flex flex-wrap justify-content-center">
                <?php
                    $the_query = new WP_Query(array(
                        'category_name' => 'recipes',
                        'orderby'=> 'post_date', 
                        'order' => 'DESC',
                        'posts_per_page' => '4'
                    ));
                    
                    if($the_query -> have_posts()) :
                        while($the_query -> have_posts()) :
                            $the_query -> the_post();
                ?>
                    <div class=" recipeCard"> 
                        <div class=" recipeSingle card m-3">
                            <div class="imgRecipeCard">
                                <?php the_post_thumbnail(array(300,500)) ?>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <p class="card-text ">
                                        <small class="text-muted">
                                        <i class="fas fa-clock me-2 "></i>
                                            Last updated 3 mins ago
                                        </small>
                                    </p>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_excerpt();?>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <p class="border"></p>
                                    <hr class="border border-white flex-grow-1 ">
                                    <a href="<?php the_permalink()?>" role="button" class="fw-bold text-uppercase text-dark" > Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>

</div>



<? get_footer() ?>