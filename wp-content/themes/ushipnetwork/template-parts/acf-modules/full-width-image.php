<?php $full_width_image_image = get_sub_field('full_width_image_image'); ?>

<section class="fullWidthImage" <?php if(get_sub_field('full_width_image_id')): ?>id="<?php the_sub_field('full_width_image_id'); ?>"<?php endif; ?>>
  <img class="fullWidthImage-image" src="<?php echo $full_width_image_image['url']; ?>">
</section>