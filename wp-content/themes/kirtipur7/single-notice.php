<?php get_header(); ?>
 <section class="bg_img banner position-relative"
     style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
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
<section class="notice_detail-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="news_detail-date">
                        <h4><strong><?php the_field('date') ?> </strong>
                            <small><?php the_field('month') ?> </small> <small><?php the_field('year') ?></small>
                        </h4>
                    </div>
                    <div class="detail_block ml-4">
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="news_detail-title">
                                <h1><?php the_title() ?></h1>
                            </div>


                        </div>
                        <img src="<?php $image = get_field('image'); echo $image['url'];?>" class="img-fluid" alt="">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <?php the_content() ?>  <?php endwhile; else: ?>
                           
<?php endif; ?>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'testimonial_panal.php'; ?>
<?php get_footer(); ?>