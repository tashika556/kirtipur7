 <!-- Template Name: Profile Page -->
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

<section class="nepal_information-page bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row no-gutters">
                    <div class="col-lg-8 col-md-6">
                        <div class="nepal_information-block bg_blue text-lg-right text-center bg_black text-white">
                            <div class="mb-3">
                                <h5><?php the_title(); ?> </h5>
                            </div>
                            <h1><?php bloginfo('name'); ?> </h1>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nepal_information-img position-relative">
                            <img src="<?php $image = get_field('image'); echo $image['url'];?>"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="profile section-team img_before">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="about_wrap">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <?php the_content() ?>  <?php endwhile; else: ?>
                           
<?php endif; ?>
                
                                <div class="row">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
    </div>
</section>


<?php include 'testimonial_panal.php'; ?>
<?php get_footer(); ?>