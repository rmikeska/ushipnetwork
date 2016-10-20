<?php $section_bg_color = get_sub_field('testimonials_background_color'); ?>

<section class="testimonials <?php echo $section_bg_color; ?>" <?php if(get_sub_field('testimonials_id')): ?>id="<?php the_sub_field('testimonials_id'); ?>"<?php endif; ?>>
  <div class="testimonials-container">
    <?php if(get_sub_field('testimonials_intro')): ?>
      <h3 class="testimonials-intro"><?php the_sub_field('testimonials_intro'); ?></h3>
    <?php endif; ?>
    <?php if(get_sub_field('testimonials_intro_sub')): ?>
      <h6 class="testimonials-subintro"><?php the_sub_field('testimonials_intro_sub'); ?></h6>
    <?php endif; ?>
    <div class="testimonials-row">
    <?php while(have_rows('testimonials_content')): the_row(); ?>
      <div class="testimonials-block">
        <?php if(get_sub_field('testimonials_image')): ?>
          <?php $testimonials_image_object = get_sub_field('testimonials_image'); ?>
          <?php $testimonials_image_size = 'testimonials-thumb'; ?>
          <?php $testimonials_image_url = $testimonials_image_object['sizes'][$testimonials_image_size]; ?>
          <div class="testimonials-image" style="background-image: url('<?php echo $testimonials_image_url; ?>');"></div>
        <?php endif; ?>
        <div class="testimonials-text"><?php the_sub_field('testimonials_text'); ?></div>
        <?php while(have_rows('testimonials_tertiary_callout')): the_row(); ?>
          <?php $testimonials_tertiary_url = get_sub_field('testimonials_tertiary_callout_url'); ?>
          <a class="tertiaryLink tertiaryLinkDark" role="button" href="<?php echo $testimonials_tertiary_url; ?>"><?php the_sub_field('testimonials_tertiary_callout_text'); ?><?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
        <?php endwhile; ?>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>