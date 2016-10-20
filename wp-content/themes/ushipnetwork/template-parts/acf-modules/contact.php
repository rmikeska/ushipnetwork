<?php $section_bg_color = get_sub_field('contact_background_color'); ?>

<section class="contact <?php echo $section_bg_color; ?>" <?php if(get_sub_field('contact_id')): ?>id="<?php the_sub_field('contact_id'); ?>"<?php endif; ?>>
  <div class="contact-container">
    <div class="contact-info">
      <h3 class="contact-info-intro"><?php the_sub_field('contact_intro'); ?></h3>
      <div class="contact-info-text"><?php the_sub_field('contact_text'); ?></div>
    </div>
    <div class="contact-links">
      <div class="contact-links-content">
      <?php while(have_rows('contact_link_content')): the_row(); ?>
        <?php $contact_link_url = get_sub_field('contact_link_url'); ?>
        <div class="contact-links-content-link">
          <a class="tertiaryLink tertiaryLinkDark" role="button" target="_blank" href="<?php echo $contact_link_url; ?>"><?php the_sub_field('contact_link_text'); ?><?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>