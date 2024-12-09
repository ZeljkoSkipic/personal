<section class="conference_speaker space_0_1">
	<div class="c-narrow">
		<?php get_template_part('components/intro'); ?>
		<?php

		if( have_rows('images') ): ?>
		<div class="conf_grid space_3_0">

			<?php while( have_rows('images') ) : the_row(); ?>

			<?php
			$image = get_sub_field('image');
			$size = 'full';
			if( $image ) { ?>
			<figure>
				<?php
				echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
				?>
				<figcaption>
					<h3><?php echo get_the_title($image); ?></h3>
					<p>
						<?php echo wp_get_attachment_caption($image); ?>
			</p>
				</figcaption>
			</figure>

			<?php } ?>

			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
