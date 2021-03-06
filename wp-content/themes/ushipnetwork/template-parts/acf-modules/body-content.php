<?php if (have_rows('body_content')): ?>
  <?php while (have_rows('body_content')) : the_row(); ?>
    <?php if (get_row_layout() == 'long_form_content'): ?>

      <?php include("long-form-content.php");?>

    <?php elseif (get_row_layout() == 'strip_copy_callout'): ?>

      <?php include("strip-copy-callout.php");?>

    <?php elseif (get_row_layout() == 'strip_data_callout'): ?>

      <?php include("strip-data-callout.php");?>

    <?php elseif (get_row_layout() == 'slanted_map'): ?>

      <?php include("slanted-map.php");?>

    <?php elseif (get_row_layout() == 'intro_slide'): ?>

      <?php include("intro-slide.php");?>

    <?php elseif (get_row_layout() == 'icon_bullet_points'): ?>

      <?php include("icon-bullet-points.php");?>

    <?php elseif (get_row_layout() == 'full_width_image'): ?>

      <?php include("full-width-image.php");?>

    <?php elseif (get_row_layout() == 'testimonials'): ?>

      <?php include("testimonials.php");?>

    <?php elseif (get_row_layout() == 'bios'): ?>

      <?php include("bios.php");?>

    <?php elseif (get_row_layout() == 'contact'): ?>

      <?php include("contact.php");?>

    <?php elseif (get_row_layout() == 'press'): ?>

      <?php include("press.php");?>

    <?php elseif (get_row_layout() == 'video'): ?>

      <?php include("video.php");?>

    <?php elseif (get_row_layout() == 'value_props'): ?>

      <?php include("value-props.php");?>

    <?php elseif (get_row_layout() == 'link_row'): ?>

      <?php include("link-row.php");?>

    <?php elseif (get_row_layout() == 'logo_pile'): ?>

      <?php include("logo-pile.php");?>

    <?php elseif (get_row_layout() == 'thumbnail_grid'): ?>

      <?php include("thumbnail-grid.php");?>

    <?php elseif (get_row_layout() == 'text_columns'): ?>

      <?php include("text-columns.php");?>

    <?php elseif (get_row_layout() == 'text_block'): ?>

      <?php include("text-block.php");?>

    <?php elseif (get_row_layout() == 'dual_image'): ?>

      <?php include("dual-image.php");?>

    <?php elseif (get_row_layout() == 'steps'): ?>

      <?php include("steps.php");?>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>