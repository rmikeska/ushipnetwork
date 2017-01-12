<section class="introSlide" <?php if(get_sub_field('intro_slide_id')): ?>id="<?php the_sub_field('intro_slide_id'); ?>"<?php endif; ?>>
  <div class="introSlide-container">
    <h3 class="introSlide-headline"><?php the_sub_field('intro_slide_head'); ?></h3>
    <div class="introSlide-text"><?php the_sub_field('intro_slide_subhead'); ?></div>
    <?php while(have_rows('intro_slide_cta')): the_row(); ?>
      <?php $slide_cta_url = get_sub_field('intro_slide_cta_url'); ?>
      <a class="introSlide-cta <?php include("/class-groups/buttons/small-secondary.php");?>" type="button" aria-label="<?php the_sub_field('intro_slide_cta_text'); ?>" href="<?php echo $slide_cta_url; ?>">
        <div class="button-content"><?php the_sub_field('intro_slide_cta_text'); ?></div>
      </a>
    <?php endwhile; ?>
    <div class="introSlide-slideshow">
      <?php while(have_rows('intro_slide_slide')): the_row(); ?>
        <div class="introSlide-slideshow-slide">
          <?php $slide_image = get_sub_field('intro_slide_slide_image'); ?>
          <img class="introSlide-slideshow-slide-image" src="<?php echo $slide_image['url']; ?>">
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>