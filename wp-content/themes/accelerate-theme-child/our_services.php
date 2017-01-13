<?php
/**
 * The template for displaying our services
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content-single-service" role="main">
			
			<?php while ( have_posts() ) : the_post();
			$services = get_field('service_description');
			$image1 = get_field('image1');
			$size = "full";
			 ?>
			
			<article class="our-services">
				<div class="service">
					<h3><?php the_title(); ?></h3>
					<p><?php echo $services; ?></p>

					<?php the_content(); ?>
				</div> <!--service -->	
				
				<div class="service-images">
					<?php if($image1) {
					echo wp_get_attachment_image( $image1, $size );
					} ?>
				</div> <!-- service-images -->
			</article> <!-- our services -->
				
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>