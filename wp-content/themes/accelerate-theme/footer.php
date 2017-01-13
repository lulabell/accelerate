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
				<?php if (!empty(get_theme_mod('accelerate_footer_message'))){ 
								
								do_action('modified_footer', 'green_accelerate_footer'); ?>
						<p class="footer-desc"><a href="<?php echo home_url(); ?>"><span class="main-color"><?php bloginfo( 'name' ); ?></span> <?php bloginfo('description'); ?></a></p>
					<?php } ?>
					<p class="footer-copy">&copy; <?php echo date("Y"); ?> <?php bloginfo('title'); ?>, LLC </p>
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