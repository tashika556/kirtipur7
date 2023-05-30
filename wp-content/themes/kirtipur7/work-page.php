 <!-- Template Name: Work Page -->
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

<section class="work-home">

    <div class="container">
        <div class="row">


        
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
            <div class="col-lg-4">
                <div class="single-person position-relative mb-4">
                    <div class="person-image text-center">
                        <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid">
                    </div>
                    <div class="person-info text-center ">
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
<?php get_footer(); ?>