<?php
/**
 * The template for displaying 404 errors
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
		<div id="content-404" class="site-content" role="main">
			<div class="page-wrapper">
				<div class="map-image"></div><!-- map-image -->
				<div class="message">
					<h2>Whoops, Took a Wrong Turn…</h2>

					<p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>

					<p>Feel free to take a look around our <a href="http://localhost:38732/blog/ ">blog</a> or some of our featured <a href="http://localhost:38732/case-studies/">work</a>.</p>	
				</div> <!-- message -->
				
				<div id="search">
					<?php get_search_form(); ?>
				</div> <!-- search -->
			</div> <!-- page-wrapper -->
			
			
		</div><!-- #content -->
	</div><!-- #primary -->
	


<?php get_footer(); ?>



