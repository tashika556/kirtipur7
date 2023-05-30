 <!-- Template Name: About Page -->
 <?php get_header(); ?>
<section class="bg_img banner position-relative" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_content text-white">
                    <h1><?php the_title(); ?> </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about section-team img_before">
    <div class="container">

        <div class="row">

            <div class="col-lg-6">
                <div class="about_page-img">
                    <img src="<?php $image = get_field('image'); echo $image['url'];?>" class="img-fluid" alt="">
                </div>

            </div>
            <div class="col-md-6 pl-4">
                <div class="about_wrap">

                    <div class="section_title">


                        <div class="mt-2">
                            <h1>संक्षिप्त परिचय</h1>
                        </div>
                        <div class="readmore__content mb-md-4 mb-0">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <?php the_content() ?>  <?php endwhile; else: ?>
                           
<?php endif; ?>
                        </div>
                        <button class="readmore__toggle bg_orange animated btn" role="switch" aria-checked="true">
                            थप देखाउनुहोस्
                        </button>
                    </div>
                </div>
                <div class="row_about position-relative bg_blue text-white mt-5">
                    <div class="row position-relative">
                        <div class="col-md-3">
                            <div class="wrap_counter d-flex flex-lg-row flex-column align-items-center">
                                <div class="counter_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/project.png" class="img-fluid w-100" alt="">
                                </div>
                                <div id="counter-box">

                                    <h1> <span class="counter" data-number="<?php the_field('household_chores') ?>"></span></h1>
                                    <p>घर धुरी
</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="wrap_counter d-flex flex-lg-row flex-column align-items-center">
                                <div class="counter_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/clients.png" class="img-fluid w-100" alt="">
                                </div>
                                <div id="counter-box">

                                    <h1> <span class="counter" data-number="<?php the_field('total_population') ?>"></span></h1>
                                    <p>कुल जनसंख्या
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="wrap_counter d-flex flex-lg-row flex-column align-items-center">
                                <div class="counter_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/industry.png" class="img-fluid w-100" alt="">
                                </div>
                                <div id="counter-box">

                                    <h1> <span class="counter" data-number="<?php the_field('female') ?>"></span></h1>
                                    <p>महिला</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="wrap_counter d-flex flex-lg-row flex-column align-items-center">
                                <div class="counter_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/industry.png" class="img-fluid w-100" alt="">
                                </div>
                                <div id="counter-box">

                                    <h1> <span class="counter" data-number="<?php the_field('male') ?>"></span></h1>
                                    <p>पुरुष</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<section class="about img_bg  position-relative" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/about_page-bg.jpg);">
    <div class="container">
    <div class="row">
            <div class="col-lg-6 col-12 m-auto">
                <div class="section_title text-center mb-0">


                    <div class="text_white">
                        <h1>हाम्रो उत्कृष्ट स्थान र वास्तुकला हेर्नुहोस्</h1>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto ">
                <div class="about_img-block text-center">
                    <div class="about_img">


                        <div class="youtube_block">

                            <a href="<?php the_field('youtube_link') ?>"
                                class="youtube" mute=1 allow="autoplay">

                                <img class="btn_youtube"
                                    src="<?php echo get_template_directory_uri(); ?>/img/youtube_btn.gif" alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
      
    </div>
</section>

<?php include 'testimonial_panal.php'; ?>
<?php get_footer(); ?>