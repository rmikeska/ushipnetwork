<?php
/**
 * @package ushipnetwork
 *
 * template name: Split Screen
 */

get_header(); ?>

<?php if (have_rows('split_screen_content')): ?>
  <?php while (have_rows('split_screen_content')) : the_row(); ?>
    <?php if (get_row_layout() == 'split_screen'): ?>

      <?php include("template-parts/acf-modules/split-screen.php");?>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>