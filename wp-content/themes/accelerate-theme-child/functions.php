<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
	
	 register_post_type( 'our_services',
        array(
            'labels' => array(
                'name' => __( 'Our Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'our-services' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

function accelerate_theme_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );

//link to mobile.css - may want to delete and add media queries to bottom of style.css instead
function custom_style_sheet() {
wp_enqueue_style( 'mobile', get_stylesheet_directory_uri() . '/mobile.css' );
}
add_action('wp_enqueue_scripts', 'custom_style_sheet');

//change login logo, background
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/accelerate-logo.png);
            padding-bottom: 30px;
        }
		#login h1 a:hover, .login h1 a:hover {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/accelerate-reverse-logo.png);
		}
		body.login { background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/taxi-photo.jpg);
		-webkit-background-size: cover;
 		-moz-background-size: cover;
		-o-background-size: cover;
		 background-size: cover;
		 position:fixed;
		 top:0;
		 left:0;
		 z-index:10;
		 overflow: hidden;
		 width: 100%;
		 height:100%;
		}
		body.login div#login p#nav a,
body.login div#login p#backtoblog a {
    color: #45ac9d !important; /* Accelerate link color. */
		}
		body.login div#login p#nav a:hover,
body.login div#login p#backtoblog a:hover {
    color: #fff !important; /* Accelerate link color. */
		}
		
		.login form { background-color: rgb(69, 172, 157, 2); }
		
		
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//change logo link value from WP site to accelerate site
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );









//