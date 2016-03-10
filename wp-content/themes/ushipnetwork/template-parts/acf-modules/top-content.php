<?php if (have_rows('top_content')): ?>
  <?php while (have_rows('top_content')) : the_row(); ?>
    <?php if (get_row_layout() == 'hero'): ?>

      <?php include("hero.php");?>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>