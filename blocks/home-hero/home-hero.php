<section class="home_hero">
	<div class="c-wide home_hero_inner">
		<div class="left">
			<h1><?php echo wp_kses_post( get_field('title') ); ?></h1>
			<div class="home_hero_text">
				<?php echo wp_kses_post( get_field('text') ); ?>
			</div>
			<a class="btn-1 contact_trigger" data-option="reset">Send me a Message</a>
			<div class="hero_socials">
				<?php

				if( have_rows('socials') ): ?>

					<?php while( have_rows('socials') ) : the_row(); ?>

						<?php
						$logo = get_sub_field('logo');
						$size = 'full'; ?>
						<a href="<?php echo wp_kses_post( get_sub_field('link') ); ?>" target="_blank">
						<?php if( $logo ) {
							echo wp_get_attachment_image( $logo, $size, "", array( "class" => "logo" ) );
						} ?>
						</a>
					<?php endwhile; ?>

				<?php endif; ?>
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
