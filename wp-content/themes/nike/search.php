<?php
get_header();
?>



<main>
    <h1>
        Search result for : <?php echo get_search_query(); ?>
    </h1>
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
    ?>
            <acrticle>
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p> <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                <a href="<?php the_permalink(); ?>" class="read-more">Read more</a>

            </acrticle>
    <?php
        endwhile;
    else:
        echo 'no post found';
    endif;
    ?>

</main>







<?php
get_footer();
?>