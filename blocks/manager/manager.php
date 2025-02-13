<section id="manager" class="project_manager space_1">
	<div class="project_manager_inner c-wide">
	<div class="left">
		<?php get_template_part('components/intro'); ?>
		<a class="btn-1 contact_trigger" data-option="Project Management">Start a project</a>
		<div class="logos">
			<?php

			if( have_rows('logos') ): ?>

				<?php while( have_rows('logos') ) : the_row(); ?>

					<?php
					$logo = get_sub_field('logo');
					$size = 'full';
					if( $logo ) {
						echo wp_get_attachment_image( $logo, $size, "", array( "class" => "logo" ) );
					} ?>

				<?php endwhile; ?>

			<?php endif; ?>
		</div>
	</div>

	<div class="project_manager_boxes">
		<?php

		if( have_rows('management_box') ): ?>

			<?php while( have_rows('management_box') ) : the_row();

			$title = get_sub_field('title');
			?>
			<div class="project_manager_box">
				<div class="top">
					<?php
					$image = get_sub_field('image');
					$size = 'full';
					if( $image ) {
						echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
					} ?>
				</div>

				<?php

				$text = get_sub_field('text');
				$prefix = get_sub_field('prefix');
				?>
				<div class="bottom">
					<h3 class="title-3"><?php echo $title; ?></h3>
					<?php echo $text; ?>
				</div>

			</div>

			<?php endwhile; ?>

		<?php endif; ?>
	</div>
</section>
