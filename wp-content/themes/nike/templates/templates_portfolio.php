<?php
// Template Name: portfolio template
get_header();
?>


<!-- Pricing Table -->
<section class="pricing-table section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>We Provide You The Best Treatment In Resonable Price</h2>
					<img src="i<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="#">
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Single Table -->
			<div class="col-lg-4 col-md-12 col-12">
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<div class="icon">
							<i class="icofont icofont-ui-cut"></i>
						</div>
						<h4 class="title">Plastic Suggery</h4>
						<div class="price">
							<p class="amount">$199<span>/ Per Visit</span></p>
						</div>
					</div>
					<!-- Table List -->
					<ul class="table-list">
						<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
						<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
						<li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
						<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
						<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
					</ul>
					<div class="table-bottom">
						<a class="btn" href="#">Book Now</a>
					</div>
					<!-- Table Bottom -->
				</div>
			</div>
			<!-- End Single Table-->
			<!-- Single Table -->
			<div class="col-lg-4 col-md-12 col-12">
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<div class="icon">
							<i class="icofont icofont-tooth"></i>
						</div>
						<h4 class="title">Teeth Whitening</h4>
						<div class="price">
							<p class="amount">$299<span>/ Per Visit</span></p>
						</div>
					</div>
					<!-- Table List -->
					<ul class="table-list">
						<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
						<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
						<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
						<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
						<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
					</ul>
					<div class="table-bottom">
						<a class="btn" href="#">Book Now</a>
					</div>
					<!-- Table Bottom -->
				</div>
			</div>
			<!-- End Single Table-->
			<!-- Single Table -->
			<div class="col-lg-4 col-md-12 col-12">
				<div class="single-table">
					<!-- Table Head -->
					<div class="table-head">
						<div class="icon">
							<i class="icofont-heart-beat"></i>
						</div>
						<h4 class="title">Heart Suggery</h4>
						<div class="price">
							<p class="amount">$399<span>/ Per Visit</span></p>
						</div>
					</div>
					<!-- Table List -->
					<ul class="table-list">
						<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
						<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
						<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
						<li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
						<li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
					</ul>
					<div class="table-bottom">
						<a class="btn" href="#">Book Now</a>
					</div>
					<!-- Table Bottom -->
				</div>
			</div>
			<!-- End Single Table-->
		</div>
	</div>
	<div class="row">
			<?php
			$args = array(
				'post_type' => 'Portfolio',  //  fetches post
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
									<p>categories: <?php the_category(','); ?></p>
									<p>Tags: <?php the_tags('', ',', ''); ?></p>
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
</section>





<?php
get_footer();
?>