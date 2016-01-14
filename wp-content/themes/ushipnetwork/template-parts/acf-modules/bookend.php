<?php $bookend_cta_url = get_sub_field('bookend_cta_url'); ?>

<section class="bookend">
  <div class="bookend-container">
    <h3 class="bookend-intro"><?php the_sub_field('bookend_intro'); ?></h3>
    <a class="bookend-cta buttonGreen buttonLarge" href="<?php echo $bookend_cta_url; ?>"><?php the_sub_field('bookend_cta_text'); ?></a>
    <div class="bookend-divider"></div>
    <?php while(have_rows('bookend_previous_content')): the_row(); ?>
      <?php $bookend_previous_url = get_sub_field('bookend_previous_url'); ?>
      <a class="bookend-nav bookend-navPrevious" href="<?php echo $bookend_previous_url; ?>"><?php the_sub_field('bookend_previous_text'); ?></a>
    <?php endwhile; ?>
    <?php while(have_rows('bookend_next_content')): the_row(); ?>
      <?php $bookend_next_url = get_sub_field('bookend_next_url'); ?>
      <a class="bookend-nav bookend-navNext" href="<?php echo $bookend_next_url; ?>"><?php the_sub_field('bookend_next_text'); ?></a>
    <?php endwhile; ?>
  </div>
</section>