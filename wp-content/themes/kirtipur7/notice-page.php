 <!-- Template Name: Notice Page -->
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
<section class="position-relative">
    <div class="container">

        <div class="row">


        
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'notice',
   'orderby' => 'date',
   'category_name'=>'notice',
   'posts_per_page' => 100,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-6 mb-4">
                <div class="report-block d-flex bg_gray p-4">
                    <div class="report_date bg_blue d-flex justify-content-center aligin-items-center text-center rounded-0">
                    <h2> <strong><?php the_field('month') ?></strong><?php the_field('year') ?></h2>
                    </div>
                    <div class="report_title d-flex flex-column align-items-start justify-content-center ml-3">
                    <h2><?php the_title() ?>
                        </h2>
                        <div class="news-one__btn">
                            <a href="<?php the_permalink() ?>">थप पढ्नुहोस्
                                <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php include 'testimonial_panal.php'; ?>
<?php get_footer(); ?>