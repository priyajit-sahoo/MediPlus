<?php
get_header();
?>


<!-- Start Why choose -->
<section class="why-choose section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>We Offer Different Services To Improve Your Health</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-img.png" alt="#">
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-12">
				<!-- Start Choose Left -->
				<div class="choose-left">
					<h3>Who We Are</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
					<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
					<div class="row">
                    <?php
echo get_the_content();
?>
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
<?php
comments_template();
?>
<?php
get_footer();
?>