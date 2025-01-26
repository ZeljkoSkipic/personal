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
	<meta name="theme-color" content="#dadada" />
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stier' ); ?></a>
	</div>
	<header id="masthead" class="header-main c-wide">
		<div class="header-main_inner">
			<div class="nav_left">
				<figure class="site-logo">
					<?php
					the_custom_logo(); ?>
				</figure>

				<nav id="site-navigation" class="main-navigation">
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
					</div>
				</nav><!-- #site-navigation -->
			</div>
				<!-- Mobile Nav Button -->

			<div class="nav_right">
				<a class="chat-button mob_bot_bar">
					<span class="online"></span>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#020202" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
				</a>
				<a class="btn-1 contact_trigger mob_bot_bar" data-option="reset">Get in Touch</a>
				<div class="hamburger">
					<label for="nav-toggle">Menu</label>
					<input type="checkbox" class="menu-toggle" id="nav-toggle">
					<div></div></div>
			</div>
		</div>
	</header><!-- #masthead -->
