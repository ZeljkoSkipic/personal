<section class="certified_developer">
	<div class="certified_developer_inner c-wide">
		<div class="left">
			<h2 class="title-1"><?php echo wp_kses_post( get_field('dev_title') ); ?></h2>
			<?php echo get_field('dev_text'); ?>
			<?php
			$badge = get_field('badge');
			$size = 'full'; ?>
			<a class="badge_link" href="<?php echo wp_kses_post( get_field('badge_link') ); ?>" target="_blank">
				<?php if( $badge ) {
					echo wp_get_attachment_image( $badge, $size, "", array( "class" => "badge" ) );
				} ?>
			</a>
		</div>

		<div class="right">
			<?php
			$cert = get_field('cert');
			if( $cert ) {
				echo wp_get_attachment_image( $cert, $size, "", array( "class" => "cert" ) );
			} ?>
		</div>
	</div>
</section>
