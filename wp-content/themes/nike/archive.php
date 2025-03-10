<?php

get_header();
?>


<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>
                        <?php
                        if (is_category()) {
                            single_cat_title();
                        } elseif (is_tag()) {
                            single_tag_title();
                        }
                        else{
                            echo 'Archives
                            
                            ';
                        }
                        ?>
                    </h2>

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
                    
                </div>
            </div>
        </div>
        <div class="row">
            <?php

            if (have_posts()):
                while (have_posts()):
                    the_post();
            ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date"><?php echo get_the_date(); ?></div>
                                    <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                                    <p class="text"> <?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
                                    <p>categories: <?php the_category(', '); ?></p>
                                    <p>Tags: <?php the_tags('', ', ', ''); ?></p>
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php

                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>
    </div>
</section>
<!-- End Blog Area -->




<?php
get_footer();
?>