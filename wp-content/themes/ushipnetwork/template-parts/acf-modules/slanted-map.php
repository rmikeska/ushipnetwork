<?php $bg_color = get_sub_field('slanted_map_bg_color'); ?>
<?php $bg_position = get_sub_field('slanted_map_bg_position'); ?>
<?php $image_vertical_alignment = get_sub_field('slanted_map_image_vertical_alignment'); ?>
<?php $image_horizontal_alignment = get_sub_field('slanted_map_image_horizontal_alignment'); ?>
<?php $image = get_sub_field('slanted_map_image'); ?>

<section class="slantedMap <?php echo $bg_color . ' ' . $bg_position . ' ' . $image_vertical_alignment . ' ' . $image_horizontal_alignment; ?>">
  <div class="slantedMap-container">
    <div class="slantedMap-image">
      <img class="slantedMap-image-image" src="<?php echo $image['url']; ?>">
    </div>
    <div class="slantedMap-copy">
      <h3 class="slantedMap-copy-intro"><?php the_sub_field('slanted_map_copy_intro'); ?></h3>
      <div class="slantedMap-copy-block-text"><?php the_sub_field('slanted_map_copy_block_text'); ?></div>
      <?php while(have_rows('slanted_map_copy_cta')): the_row(); ?>
        <?php $cta_url = get_sub_field('slanted_map_copy_cta_url'); ?>
        <a class="slantedMap-cta button buttonSecondary buttonLarge" role="button" href="<?php echo $cta_url; ?>"><?php the_sub_field('slanted_map_copy_cta_text'); ?></a>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<section class="slantedMap-copyMobile">
  <h3 class="slantedMap-copy-intro"><?php the_sub_field('slanted_map_copy_intro'); ?></h3>
  <div class="slantedMap-copy-block-text"><?php the_sub_field('slanted_map_copy_block_text'); ?></div>
  <?php while(have_rows('slanted_map_copy_cta')): the_row(); ?>
    <?php $cta_url = get_sub_field('slanted_map_copy_cta_url'); ?>
    <a class="slantedMap-cta button buttonSecondary buttonLarge" role="button" href="<?php echo $cta_url; ?>"><?php the_sub_field('slanted_map_copy_cta_text'); ?></a>
  <?php endwhile; ?>
</section>