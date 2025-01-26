<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package stier
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

function stier_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	return $classes;
}
add_filter( 'body_class', 'stier_body_classes' );

// Add a pingback url auto-discovery header for single posts, pages, or attachments.

function stier_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'stier_pingback_header' );


// Login Screen

add_filter( 'login_headerurl', 'my_custom_login_url' );
function my_custom_login_url($url) {
    return '/';
}

function get_custom_logo_url() {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

    if (has_custom_logo()) {
        return $logo[0];
    } else {
        return ''; // Return an empty string or a default logo URL if no custom logo is set
    }
}

function custom_login_logo() {
    $logo_url = get_custom_logo_url();
    if ($logo_url != '') {
        ?>
        <style type="text/css">
            #login h1 a, .login h1 a {
                background-image: url(<?php echo esc_url($logo_url); ?>);

            }
        </style>
        <?php
    }
}
add_action('login_enqueue_scripts', 'custom_login_logo');


// Make ACF Imposible to deactivate

add_filter('user_has_cap', 'prevent_plugin_deactivation', 10, 3);

function prevent_plugin_deactivation($allcaps, $cap, $args) {
    $plugin_file = 'advanced-custom-fields-pro/acf.php';

    if (isset($args[2]) && $args[2] == $plugin_file) {
        if ($args[0] == 'deactivate_plugin') {
            $allcaps[$cap[0]] = false;
        }
    }
    return $allcaps;
}


// Admin footer modification

function dashboard_footer_admin () {
    echo '<span id="footer-thankyou">Thank you for developing with <a href="https://stierdev.com/" target="_blank">S Tier Dev</a>. Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>.</span> ';
}

add_filter('admin_footer_text', 'dashboard_footer_admin');

// Block Category

add_filter( 'block_categories_all' , function( $categories ) {

    // Adding a new category.
	$categories[] = array(
		'slug'  => 's-tier',
		'title' => 'S Tier'
	);

	return $categories;
} );


// Blocks

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
	register_block_type( __DIR__ . '/../blocks/basic-section' );
	register_block_type( __DIR__ . '/../blocks/home-hero' );
	register_block_type( __DIR__ . '/../blocks/developer' );
	register_block_type( __DIR__ . '/../blocks/manager' );
	register_block_type( __DIR__ . '/../blocks/conferences' );
	register_block_type( __DIR__ . '/../blocks/mentorship' );
	register_block_type( __DIR__ . '/../blocks/testimonials' );
	register_block_type( __DIR__ . '/../blocks/founder' );
}
