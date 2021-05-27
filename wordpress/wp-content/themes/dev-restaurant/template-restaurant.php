<?php 
// Template Name: Resto
// Template Post Type: post 

//image présentation
$imagePresentation = get_field('image_presentation_restaurant');
$urlImgPresentation = $imagePresentation["url"];


?>

    <div class="resto">
        <?php while(have_posts()) : the_post(); ?>
            <div class=" banerTop text-white ">
                
                    <?php //the_post_thumbnail() ?>
                    <div class="boxImgHero">
                        <img src=" <?php the_post_thumbnail_url()?>" class="imgHero" alt="...">
                    </div>
                        
                    <div class=" hero card-img-overlay ">
                        <div class=" card-img-overlay container ">
                            <div class="card-img-overlay p-5 ">
                                <div class="">
                                    <? get_header("h2") ?>
                                </div>
                                <div class="">
                                
                                </div>
                                <div class="resto col-6">
                                    <h3 > <?php the_field('slogan'); ?> </h3>
                                    <h1 class="card-title txt-size"><?php the_title(); ?></h1>
                                    <?php the_content();?>

                                    <a href="" class="text-white"> view the full Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="presentation  text-center bg-light "> 
                <div class="d-flex flex-column justify-centent-center align-items-center ">
                    
                    <div class="m-5">
                        <p> <?php the_field('slogan_presentation') ?> </p>
                        <h3 class="">Presentation</h3>
                    </div>
                    
                    
                    <div class="cardPresentation card text-center m-5 " >
                            <div class="row g-0">
                                <div class="col-6 imgPresentation">
                                    <img src="<?php echo $urlImgPresentation; ?>" class=""/>
                                    
                                </div>
                                <div class="col-6 p-5">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_field('slogan_presentation_restaurant') ?></h5>
                                        <h4 class="card-title"><?php the_field('title_presentation_restaurant') ?></h4>
                                        <p class="card-text"> <?php the_field('description_presentation_restaurant') ?> </p>
                                        
                                    </div>
                                </div>
                            </div>
                    </div>
                
                    <div class="cardPresentation card text-center m-5 " >
                            <div class="row g-0">
                                <div class="col-6 p-5">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_field('slogan_presentation_restaurant') ?></h5>
                                        <h4 class="card-title"><?php the_field('title_presentation_restaurant') ?></h4>
                                        <p class="card-text"> <?php the_field('description_presentation_restaurant') ?> </p>
                                        
                                    </div>
                                </div>
                                <div class="col-6">
                                
                                    <img src="<?php the_field('image_presentation_restaurant'); ?>" />
                                    
                                </div>
                            </div>
                    </div>
                    

                    
                    
                </div>
            </div>

            <div class="location">
                
                <h3>Location</h3>
                <div class="bg-success ">
                    <?php //the_field('location'); ?>    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80996.1150898469!2d5.528883916493495!3d50.624727857791925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f74b8eacfcfb%3A0x40099ab2f4d6b40!2zTGnDqGdl!5e0!3m2!1sen!2sbe!4v1622024892669!5m2!1sen!2sbe" class="mapLocation"></iframe>
                </div>

            </div>
            
            <div class="booking ">
                <img src="" alt="">

                <div class="d-flex flex-column justify-centent-center align-items-center p-5">

                    <h3 class=" m-5">Reserve a table</h3>
                    <div class=" boxReservation m-3 " >
                        <div class="  d-flex flex-wrap justify-content-center align-items-center  ">
                            <div class="col d-flex justify-content-center align-items-center overflow-visible miniImgResto ">
                                <?php the_post_thumbnail(array(700, 700)) ?>
                            </div>
                            <div class="col bg-light p-5">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustomUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">City</label>
                                        <input type="text" class="form-control" id="validationCustom03" required>
                                        <div class="invalid-feedback">
                                        Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom04" class="form-label">State</label>
                                        <select class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                        </select>
                                        <div class="invalid-feedback">
                                        Please select a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="validationCustom05" required>
                                        <div class="invalid-feedback">
                                        Please provide a valid zip.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=" dicoverOurMenu">
                <div class=" card d-flex flex-wrap justify-content-center align-items-center p-5">                       
                    <?php
                        // selection du post dicover our menu par l'id
                        $the_query = new WP_Query(array('post_id' => "200" ));
                        if($the_query -> have_posts()) :
                            $the_query -> the_post();

                        // image discover our menu 
                        $imageDiscoverMenu1 = get_field('image_one_discover_menu');
                        $urlImgDiscoverMenu1 = $imageDiscoverMenu1['url'];

                        $imageDiscoverMenu2 = get_field('image_two_discover_menu');
                        $urlImgDiscoverMenu2 = $imageDiscoverMenu2['url'];

                        $imageDiscoverMenu3 = get_field('image_three_discover_menu');
                        $urlImgDiscoverMenu3 = $imageDiscoverMenu3['url'];

                        $imageDiscoverMenu4 = get_field('image_four_discover_menu');
                        $urlImgDiscoverMenu4 = $imageDiscoverMenu4['url'];
                    ?>   
                    <div class=" text-center m-5 boxMenu " >
                        <div class="row g-0 d-flex flex-wrap justify-content-center align-items-center  ">
                            <div class="col imgDicorverMenu d-flex flex-wrap justify-centent-center align-items-center">
                                
                                <img src="<?php echo $urlImgDiscoverMenu1 ?>" />
                                <img src="<?php echo $urlImgDiscoverMenu2 ?>" />
                                <img src="<?php echo $urlImgDiscoverMenu3 ?>" />
                                <img src="<?php echo $urlImgDiscoverMenu4 ?>" />
                                
                            </div>
                            <div class="col">
                                <div class="card-body ">
                                    <h5 class="card-title border"><?php the_field('slogan_discover_menu') ?> </h5>
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

            <div class=" recipesMini d-flex flex-column align-items-center bg-light">
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
        <?php endwhile; ?>
    </div>
    




<? get_footer() ?>