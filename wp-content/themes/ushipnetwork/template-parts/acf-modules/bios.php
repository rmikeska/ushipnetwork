<?php $section_bg_color = get_sub_field('bios_background_color'); ?>

<section class="bios <?php echo $section_bg_color; ?>">
  <div class="bios-container">
    <h3 class="bios-intro"><?php the_sub_field('bios_intro'); ?></h3>
    <?php if(get_sub_field('bios_intro_sub')): ?>
      <h6 class="bios-subintro"><?php the_sub_field('bios_intro_sub'); ?></h6>
    <?php endif; ?>
    <div class="bios-group">
    <?php while(have_rows('bios_content')): the_row(); ?>
      <?php $bios_image = get_sub_field('bios_image'); ?>
      <?php $bios_link_url = get_sub_field('bios_link_url'); ?>
      <a class="bios-block" target="_blank" href="<?php echo $bios_link_url; ?>">
        <img class="bios-image" src="<?php echo $bios_image['url']; ?>">
        <p class="bios-name"><?php the_sub_field('bios_name'); ?></p>
        <div class="bios-description"><?php the_sub_field('bios_description'); ?></div>
      </a>
    <?php endwhile; ?>
    </div>
  </div>
</section>