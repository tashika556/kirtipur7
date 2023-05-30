 <!-- Template Name: Home Page -->
 <?php get_header(); ?>
<section class="slider_homepage p-0">
    <div class="slider stick-dots">

    <?php 
$images = get_field('image_slider');
if( $images ): ?>
<?php foreach( $images as $image ): ?>
        <div class="slide">
            <div class="slide__img">
                <img src="" data-lazy="<?php echo $image['url'];?>" class="full-image animated"
                    data-animation-in="zoomInImage" />
            </div>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-7 h-100 d-flex align-items-center">
                        <div class="slide__content">
                            <div class="slide__content--headings d-none">

                                <h2 class="animated" data-animation-in="fadeInRight"><?php bloginfo('name'); ?> 
                                </h2>

                                <div class="btn_wrap">
                                    <a href="contact.php" class="bg_blue animated btn mr-3"
                                        data-animation-in="fadeInRight">
                                        थप पढ्नुहोस्
                                        <div class="arrow"></div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 h-100">
                        <div class="banner-bar position-relative">
                        </div>
                    </div>
                </div>  
            </div>

        </div>
        <?php endforeach; ?>
<?php endif;?> 

    </div>
    <a href="#about" class="scroll-down" address="true"></a>
</section>
<section class="links_wrapp p-0">
    <div class="container-fluid p-0">
        <div class="grid-container">
            <div class="grid_item">
                <div class="links_block bg_blue1">
                    <div
                        class="four_column-wrapp h-100 d-flex align-items-center position-relative justify-content-around">
                        <div class="inks-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/notice-board.svg">
                        </div>
                        <div class="inks-title">
                            <h3>उजुरी</h3>
                        </div>
                        <div class="links_arrow">
                            <a href="<?php echo get_page_link(182); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="grid_item">
                <div class="links_block bg_blue2">
                    <div
                        class="four_column-wrapp h-100 d-flex align-items-center position-relative justify-content-around">
                        <div class="inks-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/payment.svg">
                        </div>
                        <div class="inks-title">
                            <h3>दर र शुल्क</h3>
                        </div>
                        <div class="links_arrow">
                            <a href="<?php echo get_page_link(186); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="grid_item">
                <div class="links_block bg_blue3">
                    <div
                        class="four_column-wrapp h-100 d-flex align-items-center position-relative justify-content-around">
                        <div class="inks-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/complain.svg">
                        </div>
                        <div class="inks-title">
                            <h3>नागरिक बडापत्र</h3>
                        </div>
                        <div class="links_arrow">
                            <a href="<?php echo get_page_link(188); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="grid_item">
                <div class="links_block bg_blue4 border-0">
                    <div
                        class="four_column-wrapp h-100 d-flex align-items-center position-relative justify-content-around">
                        <div class="inks-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/money-bag.svg">
                        </div>
                        <div class="inks-title">
                            <h3>बार्षिक बजेट</h3>
                        </div>
                        <div class="links_arrow">
                            <a href="<?php echo get_page_link(190); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="grid_item">
                <div class="links_block bg_green border-0">
                    <div
                        class="four_column-wrapp h-100 d-flex align-items-center position-relative justify-content-around">
                        <div class="inks-img">
                            <!-- <img src="img/icon/money-bag.svg"> -->
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="inks-title">
                            <h3>सम्पर्क</h3>
                        </div>
                        <div class="links_arrow">
                            <a href="<?php echo get_page_link(16); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
</section>


<section id="about" class="about section-team img_before">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="about_wrap">

                    <div class="section_title">
                        <h5><?php wp_title() ?></h5>

                        <div class="mt-2">
                            <h1>संक्षिप्त परिचय</h1>
                        </div>
                     <?php the_field('summary',34) ?>
                        <div class="btn_wrap mt-4">
                            <a href="<?php echo get_page_link(34); ?>" class="bg_blue animated btn px-5" data-animation-in="fadeInRight">
                                थप हेर्नुहोस्
                                <div class="arrow"></div>
                            </a>
                        </div>



                    </div>


                </div>
            </div>
            <div class="col-lg-6">

                <div class="team_slider-home">

                
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'team',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'team',
   'posts_per_page' => 100,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>

                    <div class="about_item">
                        <div class="single-person position-relative">
                            <div class="person-image text-center">
                                <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid">

                            </div>

                            <div class="person-info text-center p-3">
                                <div class="team_social">
                                    <a href="<?php echo get_page_link(16); ?>">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <h2><?php the_title() ?></h2>
                                <p><?php the_field('designation') ?></p>
                                <small><?php the_field('phone_number') ?></small>

                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
<?php wp_reset_postdata(); ?>


                </div>
            </div>
        </div>

    </div>

</section>


<section id="discover" class=" discover p-0">
    <div class="container-fluid p-0">

        <div class="row no-gutters">
            <div class="col-lg-6">


                <div class="row">
                    
                <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'discover',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'discover',
   'posts_per_page' => 1,

   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                    <div class="col-12">

                        <div class="activites_item">
                            <div class="blog_block border_rounded position-relative mr-sm-1 mr-0  mb-1">
                                <div class="larg-img blog_img">
                                    <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                                </div>
                                <div class="blog_content text-white">
                                    <h3><?php the_title() ?></h3>

                                </div>
                                <div class="portfolio-hover-content border_sub">
                                    <a href="<?php the_permalink() ?>" class="btn btn-danger"><span>थप जानकरी</span></a>

                                </div>
                            </div>

                        </div>
   
                        <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row no-gutters">
                

                <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'discover',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'discover',
   'posts_per_page' => 4,
   'offset' =>1,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>

                    <div class="col-lg-6">

                        <div class="activites_item  mb-1 mr-1">
                            <div class="blog_block border_rounded position-relative">
                                <div class="blog_img">
                                    <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                                </div>
                                <div class="blog_content text-white">
                                    <h3><?php the_title() ?></h3>

                                </div>
                                <div class="portfolio-hover-content border_sub">
                                    <a href="<?php the_permalink() ?>" class="btn btn-danger"><span>थप जानकरी</span></a>

                                </div>
                            </div>

                        </div>

                    </div>
                  
                   
                
                    <?php endwhile; ?>
<?php wp_reset_postdata(); ?>


                </div>
            </div>




        </div>
    </div>
</section>
<section class="toal bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="section_title text-center">
                    <h5>कीर्तिपुर नगरपालिका वडा नं ७</h5>
                    <h1>टोल
                    </h1>


                </div>
            </div>
        </div>
        <div class="toal_slider">


        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'tole',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'tole',
   'posts_per_page' => 100,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>

            <div class="about_item">
                <div class="single-person position-relative">

                    <div class="about_video_block text-center">
                        <div class="person-image text-center">
                            <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid">

                        </div>
                        <a href="<?php the_field('youtube') ?>" class="youtube"
                            mute=1 allow="autoplay">
                            <img class="about_youtube-btn"
                                src="https://raw.githubusercontent.com/alxrm/youtube-play-icon/master/art/play.gif"
                                alt="">
                        </a>
                        <div class="person-info text-center p-3">

                            <h3><?php the_title() ?>
                            </h3>


                        </div>
                    </div>
                </div>
            </div>

    
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>



        </div>
    </div>
</section>
<section class="work-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="section_title ">
                    <h5>हालको काम</h5>
                    <h1>
                        हाम्रो काम
                    </h1>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="btn_wrap text-right">
                    <a href="<?php echo get_page_link(93); ?>" class="bg_blue animated btn px-5" data-animation-in="fadeInRight">
                        थप हेर्नुहोस्
                        <div class="arrow"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="work_slider">

        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'work',
   'orderby' => 'date',
   'category_name'=>'work',
   'posts_per_page' => 100,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="about_item">
                <div class="single-person position-relative">
                    <div class="person-image text-center">
                        <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid">
                    </div>
                    <div class="person-info text-center p-3">
                        <a href="<?php the_permalink() ?>">
                            <h2><?php the_title() ?>
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
          
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>  

        </div>
    </div>
</section>
<?php include 'testimonial_panal.php'; ?>
<section class="news position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="section_title text-center">
                    <h5>कीर्तिपुर नगरपालिका वडा नं ७</h5>
                    <h1>समाचार</h1>


                </div>
            </div>
        </div>
        <div class="row">


        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'news',
   'orderby' => 'date',
   'category_name'=>'news',
   'posts_per_page' => 3,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-4 col-md-6">
                <div class="blog_wrap position-relative mb-lg-0 mb-5">
                    <div class="blog_img">
                        <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid">
                    </div>
                    <div class="blog_content">

                        <a href="<?php the_permalink() ?>">
                            <h2><?php the_title() ?>
                            </h2>
                        </a>
                        <div class="news-one__btn">
                            <a href="<?php the_permalink() ?>">थप पढ्नुहोस् <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>

                    </div>
                    <div class="post-date">
                        <h3><span><?php the_field('month') ?>
                            </span><?php the_field('date') ?></h3>
                    </div>


                </div>
            </div>
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>

        </div>

    </div>
</section>

<section class="report bg_gray position-relative p-0">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-7 full_column">
                <div class="report_wrapp">
                    <div class="about_wrapp">
                        <div class="section_title">
                            <h5>हाम्रो बारेमा</h5>
                            <h1>प्रकाशन</h1>
                        </div>
                    </div>


                    <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'publication',
   'orderby' => 'date',
   'category_name'=>'publication',
   'posts_per_page' => 2,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
    
                    <div class="report-block d-flex bg-white p-4 mb-4">
                        <div class="report_date bg_blue d-flex justify-content-center aligin-items-center text-center">
                            <h2> <strong><?php the_field('month') ?></strong><?php the_field('year') ?></h2>
                        </div>
                        <div class="report_title d-flex flex-column align-items-start justify-content-center ml-3">
                            <h2><?php the_title() ?>
                            </h2>
                            <div class="news-one__btn">
                                <a href="<?php the_field('file_upload'); ?>">डाउनलोड गर्नुहोस्
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                   
                    <?php endwhile; ?>
<?php wp_reset_postdata(); ?>

                </div>

            </div>
            <div class="col-lg-5">
            <?php the_field('map',16) ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
