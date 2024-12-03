<section class="certified_developer">
	<div class="certified_developer_inner container">
		<div class="left">
			<?php
			$cert = get_field('cert');
			$size = 'full';
			if( $cert ) {
				echo wp_get_attachment_image( $cert, $size, "", array( "class" => "cert" ) );
			} ?>
		</div>
		<div class="mid">
			<h2 class="title-1"><?php echo wp_kses_post( get_field('dev_title') ); ?></h2>
			<?php echo get_field('dev_text'); ?>
		</div>
		<div class="right">
			<?php
			$badge = get_field('badge');
			if( $badge ) {
				echo wp_get_attachment_image( $badge, $size, "", array( "class" => "badge" ) );
			} ?>
		</div>
	</div>
</section>
