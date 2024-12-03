<section class="project_manager space_1">
	<div class="project_manager_inner container">
		<?php get_template_part('components/intro'); ?>
	</div>
	<?php

	if( have_rows('management_box') ): ?>

		<?php while( have_rows('management_box') ) : the_row(); ?>
		<div class="project_manager_box container">
			<?php
			$icon = get_sub_field('icon');
			$size = 'full';
			if( $icon ) {
				echo wp_get_attachment_image( $icon, $size, "", array( "class" => "icon" ) );
			} ?>
			<?php
			$title = get_sub_field('title');
			$text = get_sub_field('text');
			$image = get_sub_field('image');
			$size = 'full'; ?>

			<div class="left">
				<h3 class="title-2"><?php echo $title; ?></h3>
				<?php echo $text; ?>
			</div>
			<div class="right">
			<?php if( $image ) {
				echo wp_get_attachment_image( $image, $size, "", array( "class" => "image" ) );
			} ?>
			</div>
		</div>

		<?php endwhile; ?>

	<?php endif; ?>
</section>
