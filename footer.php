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
		<div class="footer_inner container">
			<div class="footer_top">
				<div class="left">
					<img class="one" src="/wp-content/uploads/2024/12/logo-white.png" alt="">
					<p>
					Temporibus autem quibsdam et aut officiis debitis aut rerum necessitatibus saepe eventiet ut et voloptates repudiandae.
					</p>
					<img class="two "src="/wp-content/uploads/2024/12/socials-temp.png" alt="">
				</div>
				<div class="right">
					<h2 class="title-3">Let's Work Together</h2>
					<a href="mailto:hi@zeljkoskipic.com">hi@zeljkoskipic.com</a>
				</div>
			</div>
			<div class="footer_bottom space_4">
				© 2024 - Zeljko Skipic
			</div>
		</div>
	</footer>
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
