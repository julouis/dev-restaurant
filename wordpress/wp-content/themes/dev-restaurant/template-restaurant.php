<?php 
// Template Name: Resto
// Template Post Type: post 
?>
    <div class="">
        <?php while(have_posts()) : the_post(); ?>
            <div class=" banerTop text-white ">
                <?php //the_post_thumbnail() ?>
                <img src=" <?php the_post_thumbnail_url()?>" class="hero" alt="...">
                <div class="container ">
                    <div class="card-img-overlay">
                        <div class=" m-5">
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

            <div> 
                <img src="" alt="">
                <h3>Presentation</h3>

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="..." alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>  
            </div>

            <div>
                <img src="" alt="">
                <h3>Location</h3>
                <div class="bg-warning">
                    <p>test</p>
                    <?php the_field('location'); ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5059.809394555827!2d5.576419929971617!3d50.64746107106923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa0a936914d9%3A0xa74d58e3d21e6def!2zRsOpcm9uc3Ryw6llIGV0IEhvcnMtQ2jDonRlYXUsIDQwMDAgTGnDqGdl!5e0!3m2!1sen!2sbe!4v1621604826800!5m2!1sen!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>


            </div>

            <div>
                <img src="" alt="">
                <h3>Reserve a table</h3>
                <div>
                    <img src="" alt="">
                </div>
                <div>

                </div>

            </div>

            <div>
                <img src="" alt="">
                <h3>Discover our menu</h3>
                <form action="" method="post">
                    <label for="">Your Name</label>
                    <input type="text" >

                    <label for="">Your Email</label>
                    <input type="text" >
                </form>

            </div>

            <div>
                <img src="" alt="">
                <h3>Recipes Blog</h3>

            </div>
        <?php endwhile; ?>
    </div>
    




<? get_footer() ?>