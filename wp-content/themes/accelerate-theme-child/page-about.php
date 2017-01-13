<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="about-container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
				<?php the_content(); ?>
				<h2><a class="about-name" href="<?php echo home_url(); ?>/blog">Accelerate</a> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .about-container -->
</section><!-- .about-page -->

<div id="primary-about-services" class="site-content">
		<div id="content-about-services" role="main">
<?php query_posts('posts_per_page=5&post_type=our_services'); ?>
<?php while (have_posts() ) : the_post(); 
	$intro = get_field('service_intro_title');
	$introdescrip = get_field('service_intro_description');
	$servicetitle1 = get_field('service_title1');
	$servicedescrip1 = get_field('service_description1');
	$icon1 = get_field('icon1');
	$servicetitle2= get_field('service_title2');
	$servicedescrip2 = get_field('service_description2');
	$icon2 = get_field('icon2');
	$servicetitle3= get_field('service_title3');
	$servicedescrip3 = get_field('service_description3');
	$icon3 = get_field('icon3');
	$servicetitle4= get_field('service_title4');
	$servicedescrip4 = get_field('service_description4');
	$icon4 = get_field('icon4');
	$contact = get_field('service_contact');
	$servicelink = get_field('site_link');
	$size = "full";
			?>
		
<div id="our-services">
	
	<section class="service-intro">
			<h5><?php echo $intro; ?></h5>
			<p><?php echo $introdescrip; ?></p>
	</section> <!-- service-intro -->
	
	<section class="about-service">
		<div class="service-icon left">
			<?php if($icon1) { 
					echo wp_get_attachment_image( $icon1, $size );
					} ?>
		</div> <!--service-icon -->
		<div class="service-description">
			<h2><?php echo $servicetitle1; ?></h2>
					<p><?php echo $servicedescrip1; ?></p>
		</div> <!--service-description -->
	</section><!-- about-service -->
	
	<section class="about-service">
		<div class="service-icon right">
			<?php if($icon2) { 
					echo wp_get_attachment_image( $icon2, $size );
					} ?>
		</div> <!--service-icon -->
		<div class="service-description even">
			<h2><?php echo $servicetitle2; ?></h2>
					<p><?php echo $servicedescrip2; ?></p>
		</div> <!--service-description -->
	</section><!-- about-service -->
	
	<section class="about-service">
		<div class="service-icon left">
			<?php if($icon3) { 
					echo wp_get_attachment_image( $icon3, $size );
					} ?>
		</div> <!--service-icon -->
		<div class="service-description">
			<h2><?php echo $servicetitle3; ?></h2>
					<p><?php echo $servicedescrip3; ?></p>
		</div> <!--service-description -->
	</section><!-- about-service -->
	
	<section class="about-service">
		<div class="service-icon right">
			<?php if($icon4) { 
					echo wp_get_attachment_image( $icon4, $size );
					} ?>
		</div> <!--service-icon -->
		<div class="service-description even">
			<h2><?php echo $servicetitle4; ?></h2>
					<p><?php echo $servicedescrip4; ?></p>
		</div> <!--service-description -->
	</section><!-- about-service -->
</div> <!-- our-services-->
			
	<section class="contact-section">
		<div class="service-contact">
				<h4><?php echo $contact; ?></h4>
		</div> <!-- contact -->
		<div class="service-site-link">
				<a class="button" href="<?php echo $servicelink; ?>">Contact Us</a>
		</div> <!--site-link -->
	</section> <!-- contact-section -->		
	
			
<?php the_content(); ?>			
<?php endwhile; // end of the loop. ?>			
	</div> <!-- content-about -->
</div> <!--primary-about"-->







<?php get_footer(); ?>
	
		
		
			
				
		
	
			
