<section class="project_manager space_1">
	<div class="project_manager_inner container">
		<?php get_template_part('components/intro'); ?>
	</div>
	<div class="project_manager_boxes">
		<?php

		if( have_rows('management_box') ): ?>

			<?php while( have_rows('management_box') ) : the_row();

			$title = get_sub_field('title');
			?>
			<div class="project_manager_box">
				<div class="project_manager_box_inner c-wide">
				<?php
				$icon = get_sub_field('icon');
				$size = 'full';
				if( $icon ) {
					echo wp_get_attachment_image( $icon, $size, "", array( "class" => "icon" ) );
				} ?>
				<?php

				$text = get_sub_field('text');
				$prefix = get_sub_field('prefix');
				$image = get_sub_field('image');
				$size = 'full'; ?>

				<div class="left">
					<h3 class="title-3"><?php echo $title; ?></h3>
					<?php echo $text; ?>
				</div>
				<div class="right">
				<?php if( $image ) {
					echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
				} ?>
				</div>
				</div>
			</div>

			<?php endwhile; ?>

		<?php endif; ?>
	</div>
</section>
