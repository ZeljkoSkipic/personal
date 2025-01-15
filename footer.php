<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

?>

	<footer class="site-footer">
		<div class="footer_inner c-wide">
			<div class="footer_top">
				<div class="left">
					<img src="/wp-content/uploads/2024/12/temp-logo-2.png" alt="">
					<img src="/wp-content/uploads/2024/12/test-hero-socials-2.png" alt="">
				</div>
				<div class="right">
					<a class="email" href="mailto:hi@zeljkoskipic.com">hi@zeljkoskipic.com</a>
					<img class="rev" src="/wp-content/uploads/2024/12/test-reviews.png" alt="">

					<a href="#" class="btn-1">Get in Touch</a>
				</div>
			</div>
			<div class="footer_bottom space_4">
				© 2025 - Zeljko Skipic - Made in PR, Based in BG
			</div>
		</div>
	</footer>
	<div class="form_wrap">
		<div class="form_wrap_inner">
			<div class="contact_form_wrap">
				<h2 class="title-1">Howdy!</h2>
				<p>I'm curious to hear how can I help you.</p>
				<?php echo do_shortcode('[wpforms id="303" title="false"]'); ?>
				<a class="contact_email" href="#">hi@zeljkoskipic.com</a>
			</div>
			<div class="close_btn_wrap">
			<svg class="contact_trigger" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#020202" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
			</div>
		</div>
	</div>
	<ul class="zs_floating_socials">

		<li class="zs_floating_social zs_floating_social-codeable">
			<a href="https://codeable.io/developers/zeljko-skipic/" target="_blank" aria-label="Codeable">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/codeable-logo.png" alt="">
			</a>

		</li>
		<li class="zs_floating_social zs_floating_social-linkedin">
			<a href="https://www.linkedin.com/in/zeljkoskipic/" target="_blank" aria-label="LinkedIn">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
			</a>
		</li>
		<li class="zs_floating_social zs_floating_social-stier">
			<a href="https://stierdev.com/" target="_blank" aria-label="S-Tier Dev">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
			</a>
		</li>
		<li class="zs_floating_social zs_floating_social-contact">
			<a href="#" class="icon" aria-label="Contact Me">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
			</a>
		</li>

	</ul>
</div><!-- #page -->

<?php wp_footer(); ?>
<!--
	         (__)
     `\------(oo)
       ||    (__) <(What are you looking for?)
       ||w--||
-->
<?php echo get_field('body_bottom_script', 'option'); ?> <!-- Body Bottom External Code -->
</body>
</html>
