<div class="sidebar_wrapp">

<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'notice',
   'orderby' => 'date',
   'category_name'=>'notice',
   'posts_per_page' => 1,
   'paged' => $paged,
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>

    <div class="sidebar-notice_block position-relative">
        <div class="sidebar_notice-img">
            <img src="<?php $image = get_field('image'); echo $image['url'];?>" class="img-fluid w-100" alt="">
        </div>
        <div class="sidebar_date">
            <h3><strong><?php the_field('date') ?></strong><span><?php the_field('month') ?> <?php the_field('year') ?></span></h3>
        </div>
        <div class="sidebar_notice-text position-relative">
            <h6>सुचना</h6>
            <h3><a href=""><?php the_title() ?></a></h3>
            <div class="pt-2 pb-3">
            <?php the_field('summary') ?>
            </div>
            <div class="btn_white">
                <a href="<?php the_permalink() ?>">थप हेर्नुहोस्</a>
            </div>
        </div>

        <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
    </div>

    <div class="sidebar_news">
        <div class="sidebar_notice-text mt-4 p-0">
            <div class="sidebar_notice-text position-relative p-0 bg_blue text-white px-3 py-2">
                <h2>समाचार</h2>
            </div>


            <div class="news_wrapp-main">

            
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
                <div class="news_item-block mb-4">

                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    </h3>

                    <div class="sidebar_date my-2">
                        <h3><strong><?php the_field('date') ?></strong><span><?php the_field('month') ?></span></h3>
                    </div>
                </div>
                <hr>
        
    
                <?php endwhile; ?>
<?php wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</div>