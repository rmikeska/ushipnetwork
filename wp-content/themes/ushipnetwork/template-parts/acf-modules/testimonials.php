<?php $section_bg_color = get_sub_field('testimonials_background_color'); ?>

<section class="testimonials <?php echo $section_bg_color; ?>">
  <div class="testimonials-container">
    <h3 class="testimonials-intro"><?php the_sub_field('testimonials_intro'); ?></h3>
    <?php while(have_rows('testimonials_content')): the_row(); ?>
      <?php $testimonials_image = get_sub_field('testimonials_image'); ?>
      <div class="testimonials-block">
        <img class="testimonials-image" src="<?php echo $testimonials_image['url']; ?>">
        <div class="testimonials-text"><?php the_sub_field('testimonials_text'); ?></div>
        <p class="testimonials-source"><?php the_sub_field('testimonials_source'); ?></p>
        <p class="testimonials-category"><?php the_sub_field('testimonials_category'); ?></p>
      </div>
    <?php endwhile; ?>
  </div>
</section>