<section class="splitScreen">
  <div class="splitScreen-row">
    <?php while(have_rows('split_screen_panel')): the_row(); ?>
      <?php $panel_image = get_sub_field('split_screen_panel_image'); ?>
      <?php $panel_url = get_sub_field('split_screen_panel_url'); ?>
      <a href="<?php echo $panel_url; ?>" class="splitScreen-panel" style="background-image: url('<?php echo $panel_image['url']; ?>');">
        <div class="splitScreen-panel-container">
          <h1 class="splitScreen-panel-headline"><?php the_sub_field('split_screen_panel_headline'); ?></h1>
          <?php include( get_template_directory() . '/images/circled_arrow.svg'); ?>
          <h3 class="splitScreen-panel-subheadline"><?php the_sub_field('split_screen_panel_subheadline'); ?></h3>
        </div>
      </a>
    <?php endwhile; ?>
  </div>
  <div class="splitScreen-row">
    <?php while(have_rows('split_screen_strip')): the_row(); ?>
      <?php $strip_url = get_sub_field('split_screen_strip_url'); ?>
      <a href="<?php echo $strip_url; ?>" class="splitScreen-strip">
        <div class="splitScreen-strip-container">
          <div class="splitScreen-strip-headline-container">
            <h2 class="splitScreen-strip-headline"><?php the_sub_field('split_screen_strip_headline'); ?></h2>
            <span class="splitScreen-strip-arrow">
              <?php include( get_template_directory() . '/images/circled_arrow.svg'); ?>
            </span>
          </div>
          <h4 class="splitScreen-strip-subheadline"><?php the_sub_field('split_screen_strip_subheadline'); ?></h4>
        </div>
      </a>
    <?php endwhile; ?>
  </div>
</section>