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
<section class="work_detail-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="sub_border">

                    <div class="detail_block">

                        <img src="<?php $image = get_field('image'); echo $image['url'];?>" class="img-fluid w-100" alt="">
                        <div class="">
                            <div class="news_detail-title">
                               <div class="mb-2">
                               <h1><?php the_title() ?></h1>
                               </div>

                               
                               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <?php the_content() ?>  <?php endwhile; else: ?>
                           
<?php endif; ?>
                
                            </div>


                        </div>
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