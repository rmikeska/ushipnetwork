<?php if (have_rows('top_content')): ?>
  <?php while (have_rows('top_content')) : the_row(); ?>
    <?php if (get_row_layout() == 'hero'): ?>

      <?php include("hero.php");?>

    <?php elseif (get_row_layout() == 'split_screen'): ?>

      <?php include("split-screen.php");?>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>