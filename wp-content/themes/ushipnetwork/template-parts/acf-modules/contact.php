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
        <?php if(get_sub_field('contact_link_type') == 'standard'): ?>
          <?php $contact_link = get_sub_field('contact_link_url'); ?>
        <?php elseif (get_sub_field('contact_link_type') == 'file'): ?>
          <?php $contact_link = get_sub_field('contact_link_file'); ?>
        <?php endif; ?>
        <div class="contact-links-content-link">
          <a class="tertiaryLink tertiaryLinkDark" type="button" target="_blank" href="<?php echo $contact_link; ?>" onclick="<?php the_sub_field('contact_link_onclick'); ?>"><?php the_sub_field('contact_link_text'); ?><?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>