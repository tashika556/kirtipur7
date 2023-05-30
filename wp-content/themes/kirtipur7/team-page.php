 <!-- Template Name: Team Page -->
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
<section class="team bg_gray">
    <div class="container">

        <div class="team-wrapp">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section_title text-center">
                        <h5>प्रतिनिधी</h5>

                        <div class="mt-2">
                            <h1>जन प्रतिनिधी</h1>
                        </div>



                    </div>
                </div>
            </div>
            <div class="row">

            <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'team',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'board',
   'posts_per_page' => 1,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="team_wrapp position-relative">
                        <div class="team_img">
                            <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                        </div>
                        <div class="team_text">
                        <h4><?php the_title() ?></h4>
                            <div class="my-2">
                                <h6><?php the_field('designation') ?></h6>
                            </div>
                            <h6><?php the_field('phone_number') ?></h6>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
        </div>
        
        <div class="row ">
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'team',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'board',
   'posts_per_page' => 100,
   'paged' => $paged,
   'offset' => 1, 
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
          
            <div class="col-lg-4 col-md-6">
                <div class="team_wrapp position-relative">
                    <div class="team_img">
                        <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                    </div>
                    <div class="team_text">
                      
                            <h4><?php the_title() ?></h4>
                    
                        <div class="my-2">
                            <h6><?php the_field('designation') ?></h6>
                        </div>
                        <h6><?php the_field('phone_number') ?></h6>
                    </div>
                </div>
            </div>
            
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
</div>
    </div>
</section>
<section class="team_two">
    <div class="container">

        <div class="team-wrapp">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section_title text-center">
                    

                        <div class="mt-2">
                            <h1>कर्मचारी</h1>
                        </div>



                    </div>
                </div>
            </div>
            
        </div>
        <div class="row ">


        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'team',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'staff',
   'posts_per_page' => 100,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-3 col-md-6">
                <div class="team_wrapp position-relative">
                    <div class="team_img">
                        <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                    </div>
                    <div class="team_text">
                      
                            <h4><?php the_title() ?></h4>
                    
                        <div class="my-2">
                            <h6><?php the_field('designation') ?></h6>
                        </div>
                        <h6><?php the_field('phone_number') ?></h6>
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