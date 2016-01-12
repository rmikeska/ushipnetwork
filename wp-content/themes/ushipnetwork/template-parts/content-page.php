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

	<?php if (have_rows('top_content')): ?>
	  <?php while (have_rows('top_content')) : the_row(); ?>
	    <?php if (get_row_layout() == 'hero'): ?>

	      <?php include("acf-modules/hero.php");?>

	    <?php endif; ?>
	  <?php endwhile; ?>
	<?php endif; ?>

	<?php if (have_rows('body_content')): ?>
		<?php while (have_rows('body_content')) : the_row(); ?>
			<?php if (get_row_layout() == 'long_form_content'): ?>

				<?php include("acf-modules/long-form-content.php");?>

			<?php elseif (get_row_layout() == 'strip_copy_callout'): ?>

				<?php include("acf-modules/strip-copy-callout.php");?>

			<?php elseif (get_row_layout() == 'strip_data_callout'): ?>

				<?php include("acf-modules/strip-data-callout.php");?>

			<?php elseif (get_row_layout() == 'slanted_map'): ?>

				<?php include("acf-modules/slanted-map.php");?>

			<?php elseif (get_row_layout() == 'full_width_image'): ?>

				<?php include("acf-modules/full-width-image.php");?>

			<?php elseif (get_row_layout() == 'testimonials'): ?>

				<?php include("acf-modules/testimonials.php");?>

			<?php elseif (get_row_layout() == 'bios'): ?>

				<?php include("acf-modules/bios.php");?>

			<?php elseif (get_row_layout() == 'contact'): ?>

				<?php include("acf-modules/contact.php");?>

			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if (have_rows('bottom_content')): ?>
	  <?php while (have_rows('bottom_content')) : the_row(); ?>
	    <?php if (get_row_layout() == 'bookend'): ?>

	      <?php include("acf-modules/bookend.php");?>

	    <?php endif; ?>
	  <?php endwhile; ?>
	<?php endif; ?>
</div>

