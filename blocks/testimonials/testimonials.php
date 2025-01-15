<section id="testimonials" class="testimonials space_1">
<?php get_template_part('components/background'); ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>
		<div class="testimonials_inner">
			<?php

			if( have_rows('testimonials') ): ?>

				<?php while( have_rows('testimonials') ) : the_row(); ?>

					<div class="testimonial">
						<div class="testimonial_content">
							<?php echo wp_kses_post( get_sub_field('testimonial') ); ?>
						</div>
						<p class="person"><?php echo wp_kses_post( get_sub_field('person') ); ?></p>
						<?php
						$company = get_sub_field('company');
						$link = get_sub_field('link');
						$image = get_sub_field('image');
						$size = 'full'; ?>

						<div class="reference">
							<?php if($link) { ?>
								<a class="reference_link" href="<?php echo $link ?>" target="_blank" rel="noopener noreferrer nofollow"></a>
							<?php }

							if( $image ) { ?>
							<figure class="source">
								via	<?php echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) ); ?>
							</figure>
							<?php } ?>

							<?php if( $company ) { ?>
								<p class="company">
									<?php echo $company ?>
								</p>
							<?php } ?>
						</div>

					</div>

				<?php endwhile; ?>

			<?php endif; ?>
		</div>
	</div>
</section>
