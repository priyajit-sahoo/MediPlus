<?php
// Template Name:  all post template 
?>



<?php
get_header();
?>

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2><?php echo get_the_title(); ?></h2>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Keep up with Our Most Recent Medical News.</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="#">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $query = new WP_Query(
                array(
                    'post_type' =>array('posts','Vehicle','Hospital','College'),
                    'posts_per_page' => 3,  
                    'paged' => $paged,
                    'post_status' => 'publish'
                )
            );
            
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date"> <?php echo get_the_date(); ?> </div>
                                    <h2><a href="<?php the_permalink(); ?>"> <?php echo get_the_title(); ?> </a></h2>
                                    <p class="text"> <?php echo wp_trim_words(get_the_content(), 10, '...'); ?> </p>
                                    <p>Categories: <?php the_category(', '); ?></p>
                                    <p>Tags: <?php the_tags('', ', ', ''); ?></p>
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            ?>
        </div>

       
       
        <!-- Pagination -->
        <div class="row">
            <div class="col-12">
                <div class="pagination-wrapper text-center">
                    <?php
                    $big = 999999999; 
                    $pagination = paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $query->max_num_pages,
                        'prev_text' => __('&laquo; Previous'),
                        'next_text' => __('Next &raquo;'),
                        'type' => 'plain'
                    ));
                    
                    if ($pagination) {
                        echo '<nav class="pagination">' . $pagination . '</nav>';
                    }
                    ?>
                </div>
            </div>
        </div>
       

        <?php
            wp_reset_postdata();
            endif;
        ?>
    </div>
</section>
<!-- End Blog Area -->







<?php
get_footer();
?>