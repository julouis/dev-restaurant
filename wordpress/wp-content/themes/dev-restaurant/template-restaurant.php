<?php 
// Template Name: Resto
// Template Post Type: post 

?>

    <div class="">
        <?php while(have_posts()) : the_post(); ?>
            <div class=" banerTop text-white ">
                
                    <?php //the_post_thumbnail() ?>
                    <img src=" <?php the_post_thumbnail_url()?>" class="hero" alt="...">
                    <div class=" ">
                        <div class="card-img-overlay ">
                            <div class="">
                                <? get_header("h2") ?>
                            </div>
                            <div class="">
                            
                            </div>
                            <div class="resto">
                                <h3 > <?php the_field('slogan'); ?> </h3>
                                <h1 class="card-title txt-size"><?php the_title(); ?></h1>
                                <?php the_content();?>
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
                                <div class="col-6">
                                    <?php 
                                        $imagePresentation = the_field('image_presentation_restaurant');
                                        $urlImgPresentation = $imagePresentation['url'];
                                    ?>
                                    <img src="<?php echo $urlImgPresentation; ?>" />
                                    
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
                <div class="bg-success mapLocation">
                    <?php the_field('location'); ?>    
                </div>
                <div class="bg-danger mapLocation">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80996.11491285417!2d5.529055876339316!3d50.62472796054417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f74b8eacfcfb%3A0x40099ab2f4d6b40!2zTGnDqGdl!5e0!3m2!1sen!2sbe!4v1621943231317!5m2!1sen!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
                </div>


            </div>
            

            <div class="booking ">
                <img src="" alt="">

                <div class="d-flex flex-column justify-centent-center align-items-center p-5">

                    <h3 class=" m-5">Reserve a table</h3>
                    <div class="  m-3 " >
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
                    <div class=" d-flex flex-wrap justify-content-center align-items-center p-5">                       

                    <?php
                        $the_query = new WP_Query(array('post_id' => "200" ));
                        
                        if($the_query -> have_posts()) :
                            
                                $the_query -> the_post();
                    ?>
             
                            
                        <div class=" text-center m-5 " >
                            <div class="row g-0">
                                <div class="col-6 imgDicorverMenu d-flex flex-wrap">
                                    <?php 
                                        $imageDiscoverMenu = the_field('images_discover_menu');
                                        $urlImgDiscoverMenu = $imageDiscoverMenu['url'];
                                    ?>
                                    <img src="http://localhost/wp-content/uploads/2021/05/burger-1.jpg" />
                                    <img src="http://localhost/wp-content/uploads/2021/05/burger-1.jpg" />
                                    <img src="http://localhost/wp-content/uploads/2021/05/burger-1.jpg" />
                                    <img src="http://localhost/wp-content/uploads/2021/05/burger-1.jpg" />
                                    
                                </div>
                                <div class="col-6">
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

                </div>



            </div>

            

            <div>
                <img src="" alt="">
                <h3>Recipes Blog</h3>

            </div>
        <?php endwhile; ?>
    </div>
    




<? get_footer() ?>