<?php if (get_row_layout() == 'strip_data_callout'): ?>

  <?php include("strip-data-callout.php");?>

<?php elseif (get_row_layout() == 'slanted_map'): ?>

  <?php include("slanted-map.php");?>

<?php endif; ?>