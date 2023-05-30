<section class="testimonial position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="section_title text-center">
                    <h5>सेवाग्राहीहरुको आफ्नो भनाई</h5>
                    <h1>
                        जनताले तारिफ गरिरहेका छन्
                        हाम्रो शहर र काम?</h1>
                </div>
            </div>
        </div>
        <div class="row">


        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'testimonial',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'testimonial',
   'posts_per_page' => 20,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
    
            <div class="col-lg-6">
                <div class="testimonial_wrapp bg-white position-relative">
                    <div class="p-5">
                       <?php the_content(); ?>
                    </div>
                    <div class="testimonial_button d-flex position-relative">
                        <div class="testimonial_user">
                            <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                        </div>
                        <div class="testimonial_title">
                            <h2>
                                <?php the_title() ?>
                                - </h2>
                            <p><?php the_field('address') ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>


        </div>
    </div>
</section>