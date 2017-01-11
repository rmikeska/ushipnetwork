<section class="splitScreen">
  <div class="splitScreen-row">
    <?php while(have_rows('split_screen_panel')): the_row(); ?>
      <?php $panel_image = get_sub_field('split_screen_panel_image'); ?>
      <?php $panel_fontsize_adjust = get_sub_field('split_screen_panel_fontsize_adjust'); ?>
      <a href="<?php the_sub_field('split_screen_panel_url'); ?>" class="splitScreen-panel <?php echo $panel_fontsize_adjust; ?>" style="background-image: url('<?php echo $panel_image['url']; ?>');">
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
      <?php $strip_fontsize_adjust = get_sub_field('split_screen_strip_fontsize_adjust'); ?>
      <a href="<?php the_sub_field('split_screen_strip_url'); ?>" class="splitScreen-strip <?php echo $strip_fontsize_adjust; ?>">
        <div class="splitScreen-strip-container">
          <h2 class="splitScreen-strip-headline"><?php the_sub_field('split_screen_strip_headline'); ?></h2>
          <h4 class="splitScreen-strip-subheadline"><?php the_sub_field('split_screen_strip_subheadline'); ?></h4>
        </div>
      </a>
    <?php endwhile; ?>
  </div>
</section>