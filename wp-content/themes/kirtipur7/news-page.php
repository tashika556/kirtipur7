 <!-- Template Name: News Page -->
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
<section class="news position-relative">
    <div class="container">

        <div class="row">

        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'news',
   'orderby' => 'date',
   'category_name'=>'news',
   'posts_per_page' => 100,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-4 col-md-6">
                <div class="blog_wrap position-relative mb-5">
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
<?php include 'testimonial_panal.php'; ?>
<?php get_footer(); ?>