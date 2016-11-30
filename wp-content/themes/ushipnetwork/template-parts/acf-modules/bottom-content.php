<?php if (have_rows('bottom_content')): ?>
  <?php while (have_rows('bottom_content')) : the_row(); ?>
    <?php if (get_row_layout() == 'bookend'): ?>

      <?php include("bookend.php");?>

    <?php elseif (get_row_layout() == 'tertiary_callout'): ?>

      <?php include("tertiary-callout.php");?>

    <?php elseif (get_row_layout() == 'footnote'): ?>

      <?php include("footnote.php");?>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>