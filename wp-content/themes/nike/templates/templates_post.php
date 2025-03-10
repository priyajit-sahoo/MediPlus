<?php
// Template Name:   post template


?>
<?php
get_header();
?>



<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Keep up with Our Most Recent Medical News.</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',  //  fetches post
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

            ?>


                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog3.jpg" alt="#"> -->
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date"><?php echo get_the_date(); ?></div>
                                    <h2><a href="blog-single.html"><?php echo get_the_title(); ?>

                                            <p class="text"> <?php echo wp_trim_words(get_the_content(), 20, '....'); ?></p>
                                        </a></h2>
                                    <a href="<?php the_permalink(); ?>">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>



            <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p>No posts found.</p>';
            endif;
            ?>

        </div>
    </div>
</section>
<!-- End Blog Area -->















<?php
get_footer();
?>