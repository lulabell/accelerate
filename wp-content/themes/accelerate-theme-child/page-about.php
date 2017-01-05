<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary-about" class="site-content">
		<div id="content-about" role="main">
<?php while ( have_posts() ) : the_post();
	$heading = get_field('heading');
	$services = get_field('services');
	$serdescript = get_field('services_description');
	$icon1 = get_field('icon_1');
	$service1 = get_field('service_1');
	$serdescript1 = get_field('service_1_description');
	$icon2 = get_field('icon_2');
	$service2 = get_field('service_2');
	$serdescript2 = get_field('service_2_description');
	$icon3 = get_field('icon_3');
	$service3 = get_field('service_3');
	$serdescript3 = get_field('service_3_description');	
	$icon4 = get_field('icon_4');
	$service4 = get_field('service_4');
	$serdescript4 = get_field('service_4_description');
	$contact = get_field('contact');
	$link = get_field('site_link');
	$size = "full";
			?>
	<article class="about-page">
		<div class="hero-area">
			<div class="hero-image">
 			<?php the_content(); ?>
				<h2><a class="url" href="<?php echo home_url(); ?>">Accelerate</a>
				<?php echo $heading; ?></h2>
			</div> <!--hero-image -->
			
		</div><!-- hero-area -->
			
		<h5><?php echo $services; ?></h5>
			<p><?php echo $serdescript; ?></p>
		
	<section class="services">
		<div id="one">
			<div class="icon1">
				<?php if($icon1) { 
					echo wp_get_attachment_image( $icon1, $size );
					} ?>
			</div> <!-- icon1 -->
			<div class="service1">	
				<h3><?php echo $service1; ?></h3>
					<p><?php echo $serdescript1; ?></p>
			</div> <!-- service1 -->
		</div> <!-- one -->
		<div id="two">
			<div class="service2">
				<h3><?php echo $service2; ?></h3>
					<p><?php echo $serdescript2; ?></p>
			</div> <!-- service2 -->
			<div class="icon2">
				<?php if($icon2) { 
					echo wp_get_attachment_image( $icon2, $size );
					} ?>
			</div> <!-- icon2 -->
			</div> <!-- two -->
		<div id="three">
			<div class="icon3">
				<?php if($icon3) { 
					echo wp_get_attachment_image( $icon3, $size );
					} ?>
			</div> <!-- icon3 -->
			<div class="service3">
				<h3><?php echo $service3; ?></h3>
					<p><?php echo $serdescript3; ?></p>
			</div> <!-- service3 -->
		</div><!-- three -->
		<div id="four">
			<div class="service4">
				<h3><?php echo $service4; ?></h3>
					<p><?php echo $serdescript4; ?></p>
			</div> <!-- service4 -->
			<div class="icon4">
				<?php if($icon4) { 
					echo wp_get_attachment_image( $icon4, $size );
					} ?>
			</div> <!-- icon4 -->
		</div> <!-- four -->
	</section> <!--services-->
		<div class="contact-section">
			<div class="contact">
				<h3><?php echo $contact; ?></h3>
			</div> <!-- contact -->
			<div class="site-link">
				<p><a class="button" href="<?php echo $link; ?>">Contact Us</a></p>
			</div> <!--site-link -->
		</div> <!-- contact-section -->
	</article>
			
<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>