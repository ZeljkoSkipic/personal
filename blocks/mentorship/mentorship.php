<section class="mentorship space_1">
	<div class="container">
	<?php get_template_part('components/intro'); ?>

		<div class="mentorship_tabs">
			<?php $item=1; ?>
			<header class="st_tabs_nav">
				<ul>
					<?php while( have_rows('items') ) : the_row();
						$item_title = get_sub_field('item_title');
					?>
					<li><a data-tab = "<?php echo $item; ?>" href="#"><?php echo $item_title; ?></a></li>
					<?php $item++;?>
					<?php endwhile; ?>
				</ul>
			</header>
			<div class="st_tabs_content">
				<?php $item=1; ?>
				<?php while( have_rows('items') ) : the_row();
					$item_title = get_sub_field('item_title');
					$item_text = get_sub_field('item_text');
					$item_image = get_sub_field('item_image');

					?>
					<div data-tab="<?php echo $item; ?>" class="st_tab">
						<div class="st_tab_inner">
							<figure class="left">
								<?php
								$size = 'full';
								if( $item_image ) {
									echo wp_get_attachment_image( $item_image, $size, "", array( "class" => "item_image" ) );
								} ?>
							</figure>
							<div class="right">
								<h3 class="title-2"><?php echo $item_title; ?></h3>
								<div class="st_tab_text"><?php echo $item_text ?></div>
							</div>
						</div>
					</div>
				<?php $item++;?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>
