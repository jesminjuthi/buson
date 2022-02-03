<?php

/* 
 * Template Name: Home Page
*/

get_header();?>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                
                <?php 
                
                    $args = array(
                        'post_type' => 'Slider',
                        'posts_per_page' => 3,
                    );

                    $slider = new WP_Query($args);

                    while($slider->have_posts()): $slider->the_post();


                    $slider_subtitle = get_field('slider_subtitle');
                    $slider_btn_txt = get_field('slider_button_text');
                    $slider_btn_url = get_field('slider_button_url');
                
                
                ?>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 mx-auto">
                                <div class="hero__caption">
                                    <?php 
                                        if($slider_subtitle){ ?>
                                            <p><?php echo $slider_subtitle;?></p>
                                        <?php }
                                    ?>
                                    <h1><?php the_title();?></h1>
                                    <!-- Hero-btn -->
                                    <?php 
                                    
                                        if($slider_btn_txt){ ?>
                                            <div class="hero__btn">
                                                <a href="<?php echo $slider_btn_url;?>" class="btn hero-btn"><?php echo $slider_btn_txt;?></a>
                                            </div>                       
                                        <?php }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <?php endwhile; wp_reset_postdata();?>

            </div>
        </div>
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/partials/content', 'about');?>                                   
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                
                    <?php 
                    
                    $args = array(
                        'post_type' => 'Services',
                        'posts_per_page' => 6,
                    );

                    $services = new WP_Query($args);

                    while($services->have_posts()): $services->the_post();
                    
                    ?>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="services-caption">
                                <h4><?php the_title();?></h4>
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_postdata();?>

                </div>
            </div>
        </div>
        <!-- services Area End-->

        <!-- Request Back Start -->
        <div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="request-content">
                            <h3>Request for  Call Back</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,</p>
                            <a href="#" class="btn trusted-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3>Completed Cases</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali
                                quUt enim ad minim veniam.
                                quis nostrud exercitation ullamco laboris 
                                nierci si ut.</p>
                            <a href="gallery.html" class="border-btn border-btn2">See more</a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel"> 

                            <?php 
                            
                                $args = array(
                                    'post_type' => 'case',
                                    'posts_per_page' => 3,
                                );
                                $cases = new WP_Query($args);

                                while($cases->have_posts()): $cases->the_post();
                            
                            ?>

                            <div class="single-cases-img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                    <?php the_excerpt();?>
                                    <span>Advisory</span>
                               </div>
                            </div>

                            <?php endwhile; wp_reset_postdata();?>

                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Teams</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/team/team-1.jpg" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4>John Doe <span>Web Developer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/team/team-2.jpg" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4>John Doe <span>Web Developer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/team/team-3.jpg" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4>John Doe <span>Web Developer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/team/team-2.jpg" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4>John Doe <span>Web Developer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- Testimonial Start -->
        <?php get_template_part('template-parts/partials/content', 'testimonials')?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/partials/content', 'blog')?>
        <!-- Recent Area End-->

        

    </main>

    <?php get_footer();?>