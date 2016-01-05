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
			if (get_row_layout() == 'hero'): ?>

			  <?php $hero_size = get_sub_field('hero_size'); ?>
				<?php $hero_image = get_sub_field('hero_image'); ?>

				<section class="hero <?php echo $hero_size; ?>" style="background-image: url('<?php echo $hero_image['url']; ?>');">
					<div class="hero-container">
						<h1 class="hero-headline"><?php the_sub_field('hero_headline'); ?></h1>
						<h5 class="hero-subheadline"><?php the_sub_field('hero_subheadline'); ?></h5>

						<?php while(have_rows('hero_cta')): the_row(); ?>

							<?php $hero_cta_url = get_sub_field('hero_cta_url'); ?>

							<a class="hero-cta buttonGreen buttonLarge" href="<?php echo $hero_cta_url; ?>"><?php the_sub_field('hero_cta_text'); ?></a>

						<?php endwhile; ?>
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

			<?php elseif (get_row_layout() == 'strip_copy_with_image_callout'): ?>

				<?php $section_bg_color = get_sub_field('strip_copy_with_image_callout_background_color'); ?>
				<?php $strip_copy_with_image_callout_image = get_sub_field('strip_copy_with_image_callout_image'); ?>

				<section class="stripCopyWithImageCallout <?php echo $section_bg_color; ?>">
					<div class="stripCopyWithImageCallout-container">
						<h3 class="stripCopyWithImageCallout-text"><?php the_sub_field('strip_copy_with_image_callout_text'); ?></h3>
						<img class="stripCopyWithImageCallout-image" src="<?php echo $strip_copy_with_image_callout_image['url']; ?>">
					</div>
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

			<?php elseif (get_row_layout() == 'slanted_map'): ?>

				<?php $bg_color = get_sub_field('slanted_map_bg_color'); ?>
				<?php $image_horizontal_position = get_sub_field('slanted_map_image_horizontal_position'); ?>
				<?php $image_vertical_position = get_sub_field('slanted_map_image_vertical_position'); ?>
				<?php $image = get_sub_field('slanted_map_image'); ?>

				<section class="slantedMap <?php echo $bg_color . ' ' . $image_horizontal_position . ' ' . $image_vertical_position; ?>">
					<div class="slantedMap-container">
						<div class="slantedMap-image">
							<img class="slantedMap-image-image" src="<?php echo $image['url']; ?>">
						</div>
						<div class="slantedMap-copy">
							<h3 class="slantedMap-copy-intro"><?php the_sub_field('slanted_map_copy_intro'); ?></h3>

							<?php while(have_rows('slanted_map_copy_block')): the_row(); ?>
								<?php while(have_rows('slanted_map_copy_block_content')): the_row(); ?>

									<?php if (get_sub_field('slanted_map_copy_block_title') && get_sub_field('slanted_map_copy_block_title') != ""): ?>
									  <h6 class="slantedMap-copy-block-title"><?php the_sub_field('slanted_map_copy_block_title'); ?></h6>
									<?php endif; ?>

									<?php if (get_sub_field('slanted_map_copy_block_custom') && get_sub_field('slanted_map_copy_block_custom') != ""): ?>
									  <div class="slantedMap-copy-block-custom"><?php the_sub_field('slanted_map_copy_block_custom'); ?></div>
									<?php endif; ?>

								<?php endwhile; ?>
							<?php endwhile; ?>

							<?php while(have_rows('slanted_map_copy_cta')): the_row(); ?>

								<?php $cta_url = get_sub_field('slanted_map_copy_cta_url'); ?>

								<a class="slantedMap-cta buttonGreenTransparent buttonLarge" href="<?php echo $cta_url; ?>"><?php the_sub_field('slanted_map_copy_cta_text'); ?></a>

							<?php endwhile; ?>

						</div>
					</div>
				</section>

			<?php elseif (get_row_layout() == 'full_width_image'): ?>

				<?php $full_width_image_image = get_sub_field('full_width_image_image'); ?>

				<section class="fullWidthImage" style="background-image: url('<?php echo $full_width_image_image['url']; ?>');">
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
									<a class="bios-linkedin buttonGreenTransparent buttonSmall" target="_blank" href="<?php echo $bios_linkedin_url; ?>">LinkedIn</a>
								</div>

							<?php endwhile; ?>
						<?php endwhile; ?>
					</div>
				</section>

			<?php elseif (get_row_layout() == 'contact'): ?>

				<?php $section_bg_color = get_sub_field('contact_background_color'); ?>

				<section class="contact <?php echo $section_bg_color; ?>">
					<div class="contact-container">
						<div class="contact-info">
							<h3 class="contact-info-intro"><?php the_sub_field('contact_intro'); ?></h3>
							<div class="contact-info-text"><?php the_sub_field('contact_text'); ?></div>
						</div>
						<div class="contact-links">
							<div class="contact-links-content">
								<?php while(have_rows('contact_link')): the_row(); ?>
									<?php while(have_rows('contact_link_content')): the_row(); ?>

										<?php $contact_link_url = get_sub_field('contact_link_url'); ?>

										<div class="contact-links-content-link">
											<a class="emphasisLink" target="_blank" href="<?php echo $contact_link_url; ?>"><?php the_sub_field('contact_link_text'); ?></a>
										</div>

									<?php endwhile; ?>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</section>

			<?php elseif (get_row_layout() == 'bookend'): ?>

				<?php $bookend_cta_url = get_sub_field('bookend_cta_url'); ?>

				<section class="bookend">
					<div class="bookend-container">
						<h3 class="bookend-intro"><?php the_sub_field('bookend_intro'); ?></h3>
						<a class="bookend-cta buttonGreen buttonLarge" href="<?php echo $bookend_cta_url; ?>"><?php the_sub_field('bookend_cta_text'); ?></a>

						<?php while(have_rows('bookend_previous_block')): the_row(); ?>

							<?php $bookend_previous_url = get_sub_field('bookend_previous_url'); ?>

							<a class="bookend-nav bookend-navPrevious" href="<?php echo $bookend_previous_url; ?>"><?php the_sub_field('bookend_previous_text'); ?></a>

						<?php endwhile; ?>

						<?php while(have_rows('bookend_next_block')): the_row(); ?>

								<?php $bookend_next_url = get_sub_field('bookend_next_url'); ?>

								<a class="bookend-nav bookend-navNext" href="<?php echo $bookend_next_url; ?>"><?php the_sub_field('bookend_next_text'); ?></a>

						<?php endwhile; ?>
					</div>
				</section>

			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

