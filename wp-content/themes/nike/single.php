<?php
get_header();
?>


<!-- <h1> eta holo single.php page </h1> -->








<section class="why-choose section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>We Offer Different Services To Improve Your Health</h2>
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.jpg" alt="#"> -->
					<!-- <p><?php echo get_the_content(); ?></p> -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-12">
				<!-- Start Choose Left -->
				<div class="choose-left">
					<h3><?php echo get_the_title(); ?></h3>

					<div class="row">
						<div class="col-lg-6">
							<!-- <ul class="list"> -->
							<?php echo get_the_content(); ?>
							<!-- </ul> -->
						</div>

					</div>
				</div>
				<!-- End Choose Left -->
			</div>
			<div class="col-lg-6 col-12">
				<!-- Start Choose Rights -->
				<div class="choose-right">
					<?php
					echo the_post_thumbnail();
					?>
				</div>
				<!-- End Choose Rights -->
			</div>
		</div>
	</div>
</section>
<div id="fun-facts" class="fun-facts section overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont icofont-home"></i>
					<div class="content">
						<span class="counter">3468</span>
						<p>Hospital Rooms</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont icofont-user-alt-3"></i>
					<div class="content">
						<span class="counter">557</span>
						<p>Specialist Doctors</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont-simple-smile"></i>
					<div class="content">
						<span class="counter">4379</span>
						<p>Happy Patients</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Fun -->
				<div class="single-fun">
					<i class="icofont icofont-table"></i>
					<div class="content">
						<span class="counter">32</span>
						<p>Years of Experience</p>
					</div>
				</div>
				<!-- End Single Fun -->
			</div>
		</div>
	</div>
</div>
<br>





<!-- Related Posts -->
<div class="related_post">
    <h3>---- Related Posts ----</h3>

<section class="blog section" id="blog">
    <div class="container">
        
        <div class="row">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $query = new WP_Query(
                array(
                    //'post_type' => array('post','movies'),
                    'posts_per_page' => 3, 
                    'post__not_in' => array(get_the_ID()),
                    'orderby' => 'rand', 
                    'category__in' => wp_get_post_categories(get_the_ID()),
                    
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

        
        <?php
            wp_reset_postdata();
            endif;
        ?>
    </div>
</section>

<?php
get_footer();
?>