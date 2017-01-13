<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p><a class="sitename" href="<?php echo home_url(); ?>"><span class="main-color"><?php bloginfo('name'); ?>&nbsp</span></a><?php bloginfo('description'); ?></p>
					<p>&copy; 2016 - <?php echo date('Y '); ?><?php bloginfo('title'); ?>, LLC 
				</div>
				
			<nav class="social-media-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
			</nav>

				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>