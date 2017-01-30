<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->

<section class="featured-work">
	<div class="site-content">
		<h4>Featured Work</h4>
		<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<?php while (have_posts() ) : the_post(); 
					$image_1 = get_field("image_1");
					$size ="medium";
		?>
				<li class="individual-featured-work">
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</li>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>	
	</div><!-- site-content -->
</section><!-- featured-work -->

<section class="featured-our-services">
	<div class="site-content">
		<h4>Our Services</h4>
		<ul class="homepage-our-services">
		<?php query_posts('posts_per_page=4&post_type=our_services'); ?>
				<?php while (have_posts() ) : the_post();
					$servicetitle1 = get_field('service_title1');
					$servicetitle2 = get_field('service_title2');
					$servicetitle3 = get_field('service_title3');
					$servicetitle4 = get_field('service_title4');
					$icon1 = get_field("icon1");
					$icon2 = get_field("icon2");
					$icon3 = get_field("icon3");
					$icon4 = get_field("icon4");
					$size ="medium";
		?>
				<li class="individual-services">
					<figure>
						<?php echo wp_get_attachment_image($icon1, $size); ?>
					</figure>
					<h3><a href="<?php the_permalink(); ?>about"><?php echo $servicetitle1; ?></a></h3>
				</li>
				<li class="individual-services">
					<figure>
						<?php echo wp_get_attachment_image($icon2, $size); ?>
					</figure>
					<h3><a href="<?php the_permalink(); ?>about"><?php echo $servicetitle2; ?></a></h3>
				</li>
				<li class="individual-services">
					<figure>
						<?php echo wp_get_attachment_image($icon3, $size); ?>
					</figure>
					<h3><a href="<?php the_permalink(); ?>about"><?php echo $servicetitle3; ?></a></h3>
				</li>
				<li class="individual-services">
					<figure>
						<?php echo wp_get_attachment_image($icon4, $size); ?>
					</figure>
					<h3><a href="<?php the_permalink(); ?>about"><?php echo $servicetitle4; ?></a></h3>
				</li>			
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>	
	</div><!-- site-content -->
</section><!-- our-services -->



<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h4>From the Blog</h4>
			<?php query_posts('posts_per_page=1'); ?>
				<?php while (have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div><!-- .blog-post -->
	</div><!-- .site-content -->
	</section><!-- .recent-posts -->

<section class="twitter-app">
	<div class="site-content">
		<div class="twitter-module">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
		<?php endif; ?>
		</div> <!-- twitter -->
	</div> <!-- site-content -->
</section> <!-- twitter-app -->

<?php get_footer(); ?>

