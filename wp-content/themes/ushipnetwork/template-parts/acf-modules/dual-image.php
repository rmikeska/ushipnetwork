<?php $section_bg_color = get_sub_field('dual_image_background_color'); ?>

<section class="dualImage <?php echo $section_bg_color; ?>" <?php if(get_sub_field('dual_image_id')): ?>id="<?php the_sub_field('dual_image_id'); ?>"<?php endif; ?>>
  <div class="dualImage-container">
    <?php if(get_sub_field('dual_image_intro')): ?>
      <h3 class="dualImage-intro"><?php the_sub_field('dual_image_intro'); ?></h3>
    <?php endif; ?>
    <?php if(get_sub_field('dual_image_intro_sub')): ?>
      <h6 class="dualImage-subintro"><?php the_sub_field('dual_image_intro_sub'); ?></h6>
    <?php endif; ?>
    <div class="dualImage-row">
    <?php while(have_rows('dual_image_block')): the_row(); ?>
      <?php $dual_image_image = get_sub_field('dual_image_image'); ?>
      <div class="dualImage-block">
        <img class="dualImage-image" src="<?php echo $dual_image_image['url']; ?>">
      </div>
    <?php endwhile; ?>
    </div>
    <?php if(get_sub_field('dual_image_caption')): ?>
      <div class="dualImage-caption"><?php the_sub_field('dual_image_caption'); ?></div>
    <?php endif; ?>
  </div>
</section>