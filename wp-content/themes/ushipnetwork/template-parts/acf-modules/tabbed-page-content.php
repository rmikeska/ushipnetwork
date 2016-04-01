<?php if (get_row_layout() == 'tab_info'): ?>

  <?php $tab_title = get_sub_field('tab_title'); ?>

  <div class="tabbedPage tab-<?php print strip_tags((str_replace(' ', '-', strtolower($tab_title)))); ?>" title="<?php print strip_tags((str_replace(' ', '-', strtolower($tab_title)))); ?>">

<?php elseif (get_row_layout() == 'strip_data_callout'): ?>

  <?php include("strip-data-callout.php");?>

<?php elseif (get_row_layout() == 'slanted_map'): ?>

  <?php include("slanted-map.php");?>

<?php elseif (get_row_layout() == 'intro_slide'): ?>

  <?php include("intro-slide.php");?>

<?php elseif (get_row_layout() == 'icon_bullet_points'): ?>

  <?php include("icon-bullet-points.php");?>

<?php elseif (get_row_layout() == 'bookend'): ?>

  <?php include("bookend.php");?>

<?php elseif (get_row_layout() == 'tertiary_callout'): ?>

  <?php include("tertiary-callout.php");?>

<?php endif; ?>