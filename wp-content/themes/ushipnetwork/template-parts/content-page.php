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
					<h1 class="heroSmall-text"><?php the_sub_field('hero_small_text'); ?></h1>
				</section>

			<?php elseif (get_row_layout() == 'long_form_content_with_divider'): ?>

				<section class="longFormContent-withDivider">
					<?php while( have_rows('text_blocks') ): the_row();

						$text_block = get_sub_field('text_block_paragraph');

					?>

					<p><?php the_sub_field('text_block_paragraph'); ?></p>

					<?php endwhile; ?>
				</section>

			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

