<?php $section_bg_color = get_sub_field('testimonials_background_color'); ?>

<section class="testimonials <?php echo $section_bg_color; ?>">
  <div class="testimonials-container">
    <?php if(get_sub_field('testimonials_intro')): ?>
      <h3 class="testimonials-intro"><?php the_sub_field('testimonials_intro'); ?></h3>
    <?php endif; ?>
    <?php if(get_sub_field('testimonials_intro_sub')): ?>
      <h6 class="testimonials-subintro"><?php the_sub_field('testimonials_intro_sub'); ?></h6>
    <?php endif; ?>
    <div class="testimonials-row">
    <?php while(have_rows('testimonials_content')): the_row(); ?>
      <?php $testimonials_image = get_sub_field('testimonials_image'); ?>
      <div class="testimonials-block">
        <?php if(get_sub_field('testimonials_image')): ?>
        <img class="testimonials-image" src="<?php echo $testimonials_image['url']; ?>">
        <?php endif; ?>
        <div class="testimonials-text"><?php the_sub_field('testimonials_text'); ?></div>
        <p class="testimonials-source"><?php the_sub_field('testimonials_source'); ?></p>
        <?php if(get_sub_field('testimonials_category')): ?>
        <p class="testimonials-category"><?php the_sub_field('testimonials_category'); ?></p>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>