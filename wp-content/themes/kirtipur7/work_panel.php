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
                    <a href="contact.php" class="bg_blue animated btn px-5" data-animation-in="fadeInRight">
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