<?php $bookend_cta_url = get_sub_field('bookend_cta_url'); ?>

<section class="bookend">
  <div class="bookend-container">
    <h3 class="bookend-intro"><?php the_sub_field('bookend_intro'); ?></h3>
    <a class="bookend-cta buttonGreen buttonLarge" href="<?php echo $bookend_cta_url; ?>"><?php the_sub_field('bookend_cta_text'); ?></a>
    <div class="bookend-divider"></div>
    <?php while(have_rows('bookend_previous_content')): the_row(); ?>
      <?php $bookend_previous_url = get_sub_field('bookend_previous_url'); ?>
      <a class="bookend-link" href="<?php echo $bookend_previous_url; ?>">
        <div class="bookend-linkRow bookend-linkPrevious">
          <?php include( get_template_directory() . '/images/circled_arrow.svg'); ?>
          <span class="bookend-link-text"><?php the_sub_field('bookend_previous_text'); ?></span>
        </div>
      </a>
    <?php endwhile; ?>
    <?php while(have_rows('bookend_next_content')): the_row(); ?>
      <?php $bookend_next_url = get_sub_field('bookend_next_url'); ?>
      <a class="bookend-link" href="<?php echo $bookend_next_url; ?>">
        <div class="bookend-linkRow bookend-linkNext">
          <span class="bookend-link-text"><?php the_sub_field('bookend_next_text'); ?></span>
          <?php include( get_template_directory() . '/images/circled_arrow.svg'); ?>
        </div>
      </a>
    <?php endwhile; ?>
  </div>
</section>