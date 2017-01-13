<?php
/**
 * The template for displaying the archive of our services
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">
	<?php while ( have_posts() ) : the_post(); 
		$services = get_field('service_description');
		$image1 = get_field('image1');
		$size = "full";
		$services = get_field('services');
	?>
			
		<article class="services">
			<div class="each-service">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<h5><?php echo $services; ?></h5>

				<?php the_excerpt(); ?>

				<p><strong><a href="<?php the_permalink(); ?>">About Us</a></strong></p>
			</div>

			<div class="service-images">
				<a href="<?php the_permalink(); ?>">
				<?php if($image1) {
					echo wp_get_attachment_image( $image1, $size );
					} ?>
				</a>
			</div>
		</article>

	<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>