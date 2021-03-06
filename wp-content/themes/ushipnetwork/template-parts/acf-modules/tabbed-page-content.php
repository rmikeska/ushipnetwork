<?php if (get_row_layout() == 'tab_info'): ?>

  <?php $tab_hash = get_sub_field('tab_hash'); ?>

  <div class="tabbedPage <?php echo $tab_hash; ?>">

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

<?php elseif (get_row_layout() == 'link_row'): ?>

  <?php include("link-row.php");?>

<?php elseif (get_row_layout() == 'logo_pile'): ?>

  <?php include("logo-pile.php");?>

<?php elseif (get_row_layout() == 'video'): ?>

  <?php include("video.php");?>

<?php endif; ?>