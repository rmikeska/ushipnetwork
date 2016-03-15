<section class="introSlide">
  <div class="introSlide-container">
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