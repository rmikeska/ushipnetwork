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
						<?php while(have_rows('long_form_content_with_divider_content')): the_row(); ?>

						<p class="longFormContentWithDivider-text"><?php the_sub_field('long_form_content_with_divider_content_text_block'); ?></p>

						<?php endwhile; ?>
					</div>
				</section>

			<?php elseif (get_row_layout() == 'strip_copy_callout'): ?>

				<?php $section_bg_color = get_sub_field('strip_copy_callout_background_color'); ?>

				<section class="stripCopyCallout <?php echo $section_bg_color; ?>">
					<div class="stripCopyCallout-container">
						<h3 class="stripCopyCallout-text"><?php the_sub_field('strip_copy_callout_text'); ?></h3>
					</div>
				</section>

			<?php elseif (get_row_layout() == 'full_width_image'): ?>

				<?php $full_width_image_image = get_sub_field('full_width_image_image'); ?>

				<section class="fullWidthImage" style="background-image: url('<?php echo $full_width_image_image['url']; ?>');">
				</section>

			<?php elseif (get_row_layout() == 'strip_data_callout'): ?>

				<section class="stripDataCallout">
					<div class="stripDataCallout-container">
						<?php while(have_rows('strip_data_callout_block')): the_row(); ?>
							<?php while(have_rows('strip_data_callout_block_content')): the_row(); ?>

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

			<?php elseif (get_row_layout() == 'testimonials'): ?>

				<?php $section_bg_color = get_sub_field('testimonials_background_color'); ?>

				<section class="testimonials <?php echo $section_bg_color; ?>">
					<div class="testimonials-container">
						<h3 class="testimonials-intro"><?php the_sub_field('testimonials_intro'); ?></h3>

						<?php while(have_rows('testimonials_block')): the_row(); ?>
							<?php while(have_rows('testimonials_block_content')): the_row(); ?>

								<?php $testimonials_image = get_sub_field('testimonials_image'); ?>

								<div class="testimonials-block">
									<div class="testimonials-image" style="background-image: url('<?php echo $testimonials_image['url']; ?>');"></div>
									<p class="testimonials-text"><?php the_sub_field('testimonials_text'); ?></p>
									<p class="testimonials-source"><?php the_sub_field('testimonials_source'); ?></p>
									<p class="testimonials-category"><?php the_sub_field('testimonials_category'); ?></p>
								</div>

							<?php endwhile; ?>
						<?php endwhile; ?>
					</div>
				</section>

			<?php elseif (get_row_layout() == 'bios'): ?>

				<?php $section_bg_color = get_sub_field('bios_background_color'); ?>

				<section class="bios <?php echo $section_bg_color; ?>">
					<div class="bios-container">
						<h3 class="bios-intro"><?php the_sub_field('bios_intro'); ?></h3>
						<h6 class="bios-subintro"><?php the_sub_field('bios_intro_sub'); ?></h6>

						<?php while(have_rows('bios_block')): the_row(); ?>
							<?php while(have_rows('bios_block_content')): the_row(); ?>

								<?php $bios_image = get_sub_field('bios_image'); ?>
								<?php $bios_linkedin_url = get_sub_field('bios_linkedin'); ?>

								<div class="bios-block">
									<div class="bios-image" style="background-image: url('<?php echo $bios_image['url']; ?>');"></div>
									<p class="bios-name"><?php the_sub_field('bios_name'); ?></p>
									<p class="bios-description"><?php the_sub_field('bios_description'); ?></p>
									<a class="bios-linkedin buttonGreenTransparent" target="_blank" href="<?php echo $bios_linkedin_url; ?>">LinkedIn</a>
								</div>

							<?php endwhile; ?>
						<?php endwhile; ?>
					</div>
				</section>

			<?php elseif (get_row_layout() == 'bookend'): ?>

				<?php $bookend_cta_url = get_sub_field('bookend_cta_url'); ?>
				<?php $bookend_previous_url = get_sub_field('bookend_previous_url'); ?>
				<?php $bookend_next_url = get_sub_field('bookend_next_url'); ?>

				<section class="bookend">
					<div class="bookend-container">
						<h3 class="bookend-intro"><?php the_sub_field('bookend_intro'); ?></h3>
						<a class="bookend-cta buttonGreen" href="<?php echo $bookend_cta_url; ?>"><?php the_sub_field('bookend_cta_text'); ?></a>
						<a class="bookend-nav bookend-navPrevious" href="<?php echo $bookend_previous_url; ?>"><?php the_sub_field('bookend_previous_text'); ?></a>
						<a class="bookend-nav bookend-navNext" href="<?php echo $bookend_next_url; ?>"><?php the_sub_field('bookend_next_text'); ?></a>
					</div>
				</section>

			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

