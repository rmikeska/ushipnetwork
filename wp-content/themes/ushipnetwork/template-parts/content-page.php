<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ushipnetwork
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (have_rows('flexible_content')):
		while (have_rows('flexible_content')) : the_row();
			if (get_row_layout() == 'hero_small_no_cta'): ?>

				<?php $hero_small_image = get_sub_field('hero_small_image'); ?>

				<section class="heroSmall" style="background-image: url('<?php echo $hero_small_image['url']; ?>');">
					<div class="heroSmall-container">
						<h1 class="heroSmall-text"><?php the_sub_field('hero_small_text'); ?></h1>
					</div>
				</section>

			<?php elseif (get_row_layout() == 'long_form_content_with_divider'): ?>

				<section class="longFormContentWithDivider">
					<div class="longFormContentWithDivider-container">
						<?php while( have_rows('long_form_content_with_divider_content') ): the_row(); ?>

						<p class="longFormContentWithDivider-text"><?php the_sub_field('long_form_content_with_divider_content_text_block'); ?></p>

						<?php endwhile; ?>
					</div>
				</section>

			<?php elseif (get_row_layout() == 'strip_copy_callout'): ?>

				<section class="stripCopyCallout">
					<div class="stripCopyCallout-container">
						<h3 class="stripCopyCallout-text"><?php the_sub_field('strip_copy_callout_text'); ?></h3>
					</div>
				</section>

			<?php elseif (get_row_layout() == 'full_width_image'): ?>

				<?php $full_width_image_image = get_sub_field('full_width_image_image'); ?>

				<section class="fullWidthImage">
					<img class="fullWidthImage-image" src="<?php echo $full_width_image_image['url']; ?>">
				</section>

			<?php elseif (get_row_layout() == 'strip_data_callout'): ?>

				<section class="stripDataCallout">
					<div class="stripDataCallout-container">
						<?php while( have_rows('strip_data_callout_block') ): the_row(); ?>
							<?php while( have_rows('strip_data_callout_block_content') ): the_row(); ?>

								<div class="stripDataCallout-block">
									<div class="stripDataCallout-block-inner">
										<span class="stripDataCallout-block-number"><?php the_sub_field('strip_data_callout_block_content_number'); ?></span>
										<span class="stripDataCallout-block-title"><?php the_sub_field('strip_data_callout_block_content_title'); ?></span>
									</div>
								</div>

							<?php endwhile; ?>
						<?php endwhile; ?>
					</div>
				</section>

			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

