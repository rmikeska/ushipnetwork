<?php $hero_size = get_sub_field('hero_size'); ?>
<?php $hero_image = get_sub_field('hero_image'); ?>

<section class="hero <?php echo $hero_size; ?>" style="background-image: url('<?php echo $hero_image['url']; ?>');">
  <?php while(have_rows('hero_cobranded_strip')): the_row(); ?>
    <div class="cobrandedStrip">
      <?php while(have_rows('hero_cobranded_strip_content')): the_row(); ?>
        <?php $hero_cobranded_strip_image = get_sub_field('hero_cobranded_strip_image'); ?>
        <?php $hero_cobranded_strip_url = get_sub_field('hero_cobranded_strip_url'); ?>
        <?php $hero_cobranded_strip_image_height = get_sub_field('hero_cobranded_strip_image_height'); ?>
        <?php $hero_cobranded_strip_caption = get_sub_field('hero_cobranded_strip_caption'); ?>
        <div class="cobrandedStrip-container">
          <span class="cobrandedStrip-caption"><?php echo $hero_cobranded_strip_caption; ?></span>
          <a class="cobrandedStrip-logo" href="<?php echo $hero_cobranded_strip_url; ?>">
            <img class="cobrandedStrip-logo-image" style="max-height: <?php echo $hero_cobranded_strip_image_height; ?>;" src="<?php echo $hero_cobranded_strip_image['url']; ?>">
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  <?php endwhile; ?>
  <div class="hero-container">
    <h1 class="hero-headline"><?php the_sub_field('hero_headline'); ?></h1>
    <?php if(get_sub_field('hero_subheadline')): ?>
      <h5 class="hero-subheadline"><?php the_sub_field('hero_subheadline'); ?></h5>
    <?php endif; ?>
    <?php if(have_rows('hero_cta')): ?>
      <div class="hero-cta">
      <?php while(have_rows('hero_cta')): the_row(); ?>
        <?php $hero_cta_url = get_sub_field('hero_cta_url'); ?>
        <a class="button buttonPrimary buttonLarge" type="button" aria-label="<?php the_sub_field('hero_cta_text'); ?>" href="<?php echo $hero_cta_url; ?>" onclick="<?php the_sub_field('hero_cta_onclick'); ?>">
          <div class="button-content"><?php the_sub_field('hero_cta_text'); ?></div>
        </a>
      <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <?php while(have_rows('hero_cta_secondary')): the_row(); ?>
      <?php $hero_cta_secondary_url = get_sub_field('hero_cta_secondary_url'); ?>
      <div class="hero-cta-secondary">
        <a class="button buttonSecondary buttonSmall" type="button" aria-label="<?php the_sub_field('hero_cta_secondary_text'); ?>" href="<?php echo $hero_cta_secondary_url; ?>" onclick="<?php the_sub_field('hero_cta_secondary_onclick'); ?>">
          <div class="button-content"><?php the_sub_field('hero_cta_secondary_text'); ?></div>
        </a>
      </div>
    <?php endwhile; ?>
    <?php while(have_rows('hero_video_modal_primary')): the_row(); ?>
      <?php $video_modal_iframe = get_sub_field('hero_video_modal_primary_iframe'); ?>
      <div class="modal modalVideo" id="video-modal" style="display:none;">
        <div class="modal-inner">
          <?php echo $video_modal_iframe; ?>
        </div>
      </div>
      <div class="hero-cta-primary">
        <a class="button buttonPrimary buttonLarge" type="button" aria-label="<?php the_sub_field('hero_video_modal_primary_text'); ?>" href="#video-modal" rel="modal:open" onclick="<?php the_sub_field('hero_video_modal_primary_onclick'); ?>">
          <div class="button-content"><?php the_sub_field('hero_video_modal_primary_text'); ?></div>
        </a>
      </div>
    <?php endwhile; ?>
    <?php while(have_rows('hero_video_modal_secondary')): the_row(); ?>
      <?php $video_modal_iframe = get_sub_field('hero_video_modal_secondary_iframe'); ?>
      <div class="modal modalVideo" id="video-modal" style="display:none;">
        <div class="modal-inner">
          <?php echo $video_modal_iframe; ?>
        </div>
      </div>
      <div class="hero-cta-secondary">
        <a class="button buttonSecondary buttonSmall" type="button" aria-label="<?php the_sub_field('hero_video_modal_secondary_text'); ?>" href="#video-modal" rel="modal:open" onclick="<?php the_sub_field('hero_video_modal_secondary_onclick'); ?>">
          <div class="button-content"><?php the_sub_field('hero_video_modal_secondary_text'); ?></div>
        </a>
      </div>
    <?php endwhile; ?>
    <?php while(have_rows('hero_form_modal_primary')): the_row(); ?>
      <div class="modal modalForm" id="form-modal" style="display:none;">
        <div class="modal-inner">
          <?php include("forms/forms.php");?>
        </div>
      </div>
      <div class="hero-cta-primary">
        <a class="button buttonPrimary buttonLarge" type="button" href="#form-modal" aria-label="<?php the_sub_field('hero_form_modal_primary_text'); ?>" rel="modal:open" onclick="<?php the_sub_field('hero_form_modal_primary_onclick'); ?>">
          <div class="button-content"><?php the_sub_field('hero_form_modal_primary_text'); ?></div>
        </a>
      </div>
    <?php endwhile; ?>
    <?php while(have_rows('hero_form_modal_secondary')): the_row(); ?>
      <div class="modal modalForm" id="form-modal" style="display:none;">
        <div class="modal-inner">
          <?php include("forms/forms.php");?>
        </div>
      </div>
      <div class="hero-cta-secondary">
        <a class="button buttonSecondary buttonSmall" type="button" href="#form-modal" aria-label="<?php the_sub_field('hero_form_modal_secondary_text'); ?>" rel="modal:open" onclick="<?php the_sub_field('hero_form_modal_secondary_onclick'); ?>">
          <div class="button-content"><?php the_sub_field('hero_form_modal_secondary_text'); ?></div>
        </a>
      </div>
    <?php endwhile; ?>
    <?php while(have_rows('hero_tertiary_callout')): the_row(); ?>
      <div class="hero-tertiaryCallout">
        <div class="tertiaryCallout-container">
          <?php $hero_tertiary_url = get_sub_field('hero_tertiary_callout_url'); ?>
          <h6 class="tertiaryCallout-title"><?php the_sub_field('hero_tertiary_callout_title'); ?></h6>
          <a class="tertiaryCallout-link tertiaryLink tertiaryLinkLight" type="button" href="<?php echo $hero_tertiary_url; ?>" onclick="<?php the_sub_field('hero_tertiary_callout_url_onclick'); ?>"><?php the_sub_field('hero_tertiary_callout_link_text'); ?><?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>