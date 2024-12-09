<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!--
	Insert site main color
	<meta name="theme-color" content="#45eba5" />
	-->
	<?php echo get_field('head_script', 'option'); ?> <!-- Head External Code -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php echo get_field('body_top_script', 'option'); ?> <!-- Body Top External Code -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stier' ); ?></a>
	</div>
	<header id="masthead" class="header-main">
		<div class="header-main_inner">
			<figure class="site-logo">
				<?php
				the_custom_logo(); ?>
			</figure><!-- .site-branding -->
			<!-- <div class="header_switch">
				<span>Animation:</span>
				<div class="btn btn-pill" id="button-1">
					<input type="checkbox" class="checkbox" />
					<div class="knob"></div>
					<div class="btn-bg"></div>
				</div>
			</div> -->

			<nav id="site-navigation" class="main-navigation">
				<!-- Mobile Nav Button -->

				<div class="ham_wrap">
					<p class="ham_label">Developer</p>
				<div class="hamburger">
				<label for="nav-toggle">Navigation Menu</label>
				<input type="checkbox" class="menu-toggle" id="nav-toggle">

				<div></div></div>
				</div>

				<!-- Mobile Nav Button -->
				<div class="menu-main-wrap">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main',
							'menu_id'        => 'primary-menu',
							'walker'		 => new CustomMenuWalker
						)
					);
					?>
					<ul class="nav_socials">
						<li>
							<p>Connect:</p>
						</li>
						<li>
							<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
						</li>
						<li>
							<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
						</li>
						<li>
							<a href="#"><img src="https://zeljko-skipic-com.local/wp-content/themes/zsc/assets/icons/codeable-logo.png" alt=""></a>
						</li>
					</ul>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
