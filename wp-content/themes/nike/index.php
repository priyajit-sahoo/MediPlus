<?php
/**
 * The main template file
 * Used to display a page when no specific template matches the query.
 * 
 * @package WordPress
 * @subpackage YourThemeName
 */

get_header(); // Include the header.php file
?>

<main id="main-content" class="site-main">
    <div class="container">
        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    if (is_home() && !is_front_page()) {
                        single_post_title();
                    } else {
                        esc_html_e('Latest Posts', 'yourthemename');
                    }
                    ?>
                </h1>
            </header>

            <div class="post-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        <?php endif; ?>

                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                        </header>

                        <div class="entry-meta">
                            <span class="author"><?php the_author_posts_link(); ?></span> |
                            <span class="date"><?php the_time(get_option('date_format')); ?></span> |
                            <span class="comments"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></span>
                        </div>

                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('Read More', 'yourthemename'); ?></a>
                        </footer>
                    </article>
                <?php endwhile; ?>

                <div class="pagination">
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => __('&laquo; Previous', 'yourthemename'),
                        'next_text' => __('Next &raquo;', 'yourthemename'),
                    ));
                    ?>
                </div>
            </div>

        <?php else : ?>
            <article class="no-posts">
                <h2><?php esc_html_e('Nothing Found', 'yourthemename'); ?></h2>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'yourthemename'); ?></p>
            </article>
        <?php endif; ?>
    </div>
</main>

<?php get_sidebar(); // Include the sidebar.php file ?>
<?php get_footer(); // Include the footer.php file ?>
