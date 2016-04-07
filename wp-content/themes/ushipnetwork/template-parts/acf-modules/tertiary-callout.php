<section class="tertiaryCallout">
  <div class="tertiaryCallout-container">
    <h6 class="tertiaryCallout-title"><?php the_sub_field('tertiary_callout_title'); ?></h6>
    <?php $tertiary_link_url = get_sub_field('tertiary_callout_link_url'); ?>
    <a class="tertiaryCallout-link emphasisLink" href="<?php echo $tertiary_link_url; ?>"><?php the_sub_field('tertiary_callout_link_text'); ?><?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
  </div>
</section>