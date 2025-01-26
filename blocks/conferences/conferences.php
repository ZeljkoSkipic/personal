<section id="speaker" class="conference_speaker space_0_1">
	<div class="c-wide">
		<?php get_template_part('components/intro'); ?>
		<?php

		if( have_rows('images') ): ?>
		<div class="conf_grid">

			<?php while( have_rows('images') ) : the_row(); ?>

			<?php
			$image = get_sub_field('image');
			$size = 'full';
			if( $image ) { ?>
				<div class="grid_item">
				<div class="grid_item_text">
					<p class="prefix"><?php echo get_the_title($image); ?></p>
					<h3 class="title-3">
						<?php echo wp_get_attachment_caption($image); ?>
					</h3>
					<p class="year"><?php echo wp_kses_post( get_sub_field('year') ); ?></p>
				</div>
				<figure>
					<?php
					echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
					?>

				</figure>

			</div>

			<?php } ?>

			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
