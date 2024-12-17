<section class="home_hero">
	<div class="c-wide home_hero_inner">
		<div class="left">
			<h1><?php echo wp_kses_post( get_field('title') ); ?></h1>
			<div class="home_hero_text">
				<?php echo wp_kses_post( get_field('text') ); ?>
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
	</div>
</section>
