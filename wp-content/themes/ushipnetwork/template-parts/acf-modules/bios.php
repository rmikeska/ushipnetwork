<?php $section_bg_color = get_sub_field('bios_background_color'); ?>

<section class="bios <?php echo $section_bg_color; ?>" <?php if(get_sub_field('bios_id')): ?>id="<?php the_sub_field('bios_id'); ?>"<?php endif; ?>>
  <div class="bios-container">
    <h3 class="bios-intro"><?php the_sub_field('bios_intro'); ?></h3>
    <?php if(get_sub_field('bios_intro_sub')): ?>
      <h6 class="bios-subintro"><?php the_sub_field('bios_intro_sub'); ?></h6>
    <?php endif; ?>
    <div class="bios-group">
      <div class="bios-group-container">
        <?php while(have_rows('bios_content')): the_row(); ?>
          <?php $bios_link_url = get_sub_field('bios_link_url'); ?>
          <?php $bios_image_object = get_sub_field('bios_image'); ?>
          <?php $bios_image_size = 'bios-thumb'; ?>
          <?php $bios_image_url = $bios_image_object['sizes'][$bios_image_size]; ?>
          <a class="bios-block" target="_blank" href="<?php echo $bios_link_url; ?>" onclick="<?php the_sub_field('bios_link_onclick'); ?>">
            <img class="bios-image" src="<?php echo $bios_image_url; ?>">
            <p class="bios-name"><?php the_sub_field('bios_name'); ?></p>
            <?php if(get_sub_field('bios_description')): ?>
              <div class="bios-description"><?php the_sub_field('bios_description'); ?></div>
            <?php endif; ?>
          </a>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>