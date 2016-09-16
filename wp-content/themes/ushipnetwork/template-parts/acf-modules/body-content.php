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

    <?php elseif (get_row_layout() == 'careers'): ?>

      <?php include("careers.php");?>

    <?php elseif (get_row_layout() == 'video'): ?>

      <?php include("video.php");?>

    <?php elseif (get_row_layout() == 'value_props'): ?>

      <?php include("value-props.php");?>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>