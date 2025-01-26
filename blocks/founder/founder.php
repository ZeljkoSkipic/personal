<section id="founder" class="founder">
<?php get_template_part('components/background'); ?>
	<div class="container">
		<div class="left space_1">
			<?php get_template_part('components/intro'); ?>
			<a href="https://stierdev.com" class="btn-1" target="_blank">Visit S-Tier Dev</a>
			<a href="https://stierdev.com/portfolio" class="btn-2" target="_blank">See the portfolio <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#020202" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
		</div>

	</div>
	<div class="right">
			<?php
			$image = get_field('image');
			$size = 'full';
			if( $image ) {
				echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
			} ?>
		</div>
</section>
