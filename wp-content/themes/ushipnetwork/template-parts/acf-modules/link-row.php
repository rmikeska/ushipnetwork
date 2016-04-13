<?php $section_bg_color = get_sub_field('link_row_background_color'); ?>

<section class="linkRow <?php echo $section_bg_color; ?>">
  <div class="linkRow-container">
    <h3 class="linkRow-intro"><?php the_sub_field('link_row_intro'); ?></h3>
    <?php if(get_sub_field('link_row_intro_sub')): ?>
      <h6 class="linkRow-subintro"><?php the_sub_field('link_row_intro_sub'); ?></h6>
    <?php endif; ?>
    <div class="linkRow-row">
    <?php while(have_rows('link_row_content')): the_row(); ?>
      <?php $link_url = get_sub_field('link_row_content_url'); ?>
      <div class="linkRow-block">
        <h6 class="linkRow-title"><?php the_sub_field('link_row_content_title'); ?></h6>
        <a class="linkRow-link tertiaryLink tertiaryLinkDark" role="button" target="_blank" href="<?php echo $link_url; ?>" role="button"><?php the_sub_field('link_row_content_text'); ?><?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>