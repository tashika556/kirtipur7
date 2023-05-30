 <!-- Template Name: Contact Page -->
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


<section class="map_address">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_title mb-4">
                   <div class="mb-3">
                  
                   </div>
                    <h1>हाम्रो सम्पर्क को लागी</h1>
                </div>
                <div class="contact_wrapp pr-5">
                    <div class="contact_wrapp-icon d-flex mb-5">
                        <h6><i class="fa fa-map-marker" aria-hidden="true"></i></h6>
                        <div class="ml-3">
                            <h4>ठेगाना</h4>
                            <a><?php the_field('address',16) ?></a>
                        </div>
                    </div>
                    <div class="contact_wrapp-icon d-flex mb-5">
                        <h6><i class="fa fa-phone" aria-hidden="true"></i></h6>
                        <div class="ml-3">
                            <h4>फोन नं.</h4>
                            <a href="tel:<?php the_field('phone_number1',16) ?>"> <?php the_field('phone_number1',16) ?> </a> <br>
                            <a href="tel:<?php the_field('phone_number2',16) ?>"> <?php the_field('phone_number2',16) ?></a>
                        </div>
                    </div>
                    <div class="contact_wrapp-icon d-flex">
                        <h6><i class="fa fa-envelope-o" aria-hidden="true"></i></h6>
                        <div class="ml-3">
                            <h4>ईमेल</h4>
                            <a href="mailto:<?php the_field('email1',16) ?>"><?php the_field('email1',16) ?></a> <br>
                            <a href="mailto:<?php the_field('email2',16) ?>"><?php the_field('email2',16) ?></a>
                           
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="form_wrapp">
                    <div class="form_title mb-4">

                        <h2>नहिचकिचाउनुहोस्
                            हामीलाई आफ्नो <br> सन्देश पठाउन</h2>
                    </div>
               
                <?php the_field('contact_form') ?>

           

                </div>
            </div>
        </div>
    </div>
</section>

<section class="map p-0">
  <?php the_field('map') ?>
</section>
<?php get_footer(); ?>