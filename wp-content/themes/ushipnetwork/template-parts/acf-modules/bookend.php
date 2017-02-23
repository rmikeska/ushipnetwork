<div class="bookend">
  <?php if( get_sub_field('bookend_previous_content') && get_sub_field('bookend_next_content') ): ?>
    <div class="bookendLinksMobile-container">
      <?php while(have_rows('bookend_previous_content')): the_row(); ?>
        <a class="bookend-link bookend-linkPrevious" type="button" href="<?php the_sub_field('bookend_previous_url'); ?>">
          <div class="bookend-linkRow">
            <?php include( get_template_directory() . '/images/circled_arrow.svg'); ?>
            <span class="bookend-link-text"><?php the_sub_field('bookend_previous_text'); ?></span>
          </div>
        </a>
      <?php endwhile; ?>
      <?php while(have_rows('bookend_next_content')): the_row(); ?>
        <a class="bookend-link bookend-linkNext" type="button" href="<?php the_sub_field('bookend_next_url'); ?>">
          <div class="bookend-linkRow">
            <span class="bookend-link-text"><?php the_sub_field('bookend_next_text'); ?></span>
            <?php include( get_template_directory() . '/images/circled_arrow.svg'); ?>
          </div>
        </a>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
  <div class="bookend-container">
    <h3 class="bookend-intro"><?php the_sub_field('bookend_intro'); ?></h3>
    <?php if(get_sub_field('bookend_intro_sub')): ?>
      <div class="bookend-intro-sub"><?php the_sub_field('bookend_intro_sub'); ?></div>
    <?php endif; ?>
    <div class="bookend-row">
      <?php while(have_rows('bookend_previous_content')): the_row(); ?>
        <a class="bookend-link bookend-linkPrevious" type="button" href="<?php the_sub_field('bookend_previous_url'); ?>">
          <div class="bookend-linkRow">
            <?php include( get_template_directory() . '/images/circled_arrow.svg'); ?>
            <span class="bookend-link-text"><?php the_sub_field('bookend_previous_text'); ?></span>
          </div>
        </a>
      <?php endwhile; ?>
      <?php if(get_sub_field('bookend_cta_text') && get_sub_field('bookend_cta_url')): ?>
        <div class="bookend-cta">
          <a class="button buttonPrimary buttonLarge" type="button" aria-label="<?php the_sub_field('bookend_cta_text'); ?>" href="<?php the_sub_field('bookend_cta_url'); ?>" onclick="<?php the_sub_field('bookend_cta_onclick'); ?>">
            <div class="button-content"><?php the_sub_field('bookend_cta_text'); ?></div>
          </a>
        </div>
      <?php endif; ?>
      <?php while(have_rows('bookend_next_content')): the_row(); ?>
        <a class="bookend-link bookend-linkNext" type="button" href="<?php the_sub_field('bookend_next_url'); ?>">
          <div class="bookend-linkRow">
            <span class="bookend-link-text"><?php the_sub_field('bookend_next_text'); ?></span>
            <?php include( get_template_directory() . '/images/circled_arrow.svg'); ?>
          </div>
        </a>
      <?php endwhile; ?>
    </div>
  </div>
</div>