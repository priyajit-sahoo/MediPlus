<?php
// Template Name:  priyajit contact template 
?>
<?php
get_header();
?>
<br>
<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2><?php echo get_the_title(); ?></h2>
					<ul class="bread-list">
						<li><a href="<?php echo home_url('/') ?>">Home</a></li>
						<li><i class="icofont-simple-right"></i></li>
						<li class="active"><?php echo get_the_title();?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="contact-us section">
	<div class="container">
		<div class="inner">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-us-form">
						<h2>Contact With Us</h2>
						<p>If you have any questions please fell free to contact with us.</p>
						<!-- Form -->
						<?php echo do_shortcode('[contact-form-7 id="4ddcd41" title="admission"]'); ?>
						<!--/ End Form -->
					</div>
				</div>
			</div>
		</div>
		<div class="contact-info">
			<div class="row">
				<!-- single-info -->
				<div class="col-lg-4 col-12 ">
					<div class="single-info">
						<i class="icofont icofont-ui-call"></i>
						<div class="content">
							<h3><?php echo get_field('phone_number'); ?></h3>
							<p><?php echo get_field('email'); ?></p>
						</div>
					</div>
				</div>
				<!--/End single-info -->
				<!-- single-info -->
				<div class="col-lg-4 col-12 ">
					<div class="single-info">
						<i class="icofont-google-map"></i>
						<div class="content">
							<h3><?php echo get_field('location'); ?></h3>
							<p><?php echo get_field('location_area'); ?></p>
						</div>
					</div>
				</div>
				<!--/End single-info -->
				<!-- single-info -->
				<div class="col-lg-4 col-12 ">
					<div class="single-info">
						<i class="icofont icofont-wall-clock"></i>
						<div class="content">
							<h3><?php echo get_field('time'); ?></h3>
							<p><?php echo get_field('week'); ?></p>
						</div>
					</div>
				</div>
				<!--/End single-info -->
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
?>