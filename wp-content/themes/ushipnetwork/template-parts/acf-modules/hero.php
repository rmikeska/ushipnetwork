<?php $hero_size = get_sub_field('hero_size'); ?>
<?php $hero_image = get_sub_field('hero_image'); ?>

<section class="hero <?php echo $hero_size; ?>" style="background-image: url('<?php echo $hero_image['url']; ?>');">
  <div class="hero-container">
    <h1 class="hero-headline"><?php the_sub_field('hero_headline'); ?></h1>
    <?php if(get_sub_field('hero_subheadline')): ?>
      <h5 class="hero-subheadline"><?php the_sub_field('hero_subheadline'); ?></h5>
    <?php endif; ?>
    <?php while(have_rows('hero_cta')): the_row(); ?>
      <?php $hero_cta_url = get_sub_field('hero_cta_url'); ?>
      <div class="hero-cta">
        <a class="button buttonPrimary buttonLarge" role="button" href="<?php echo $hero_cta_url; ?>"><?php the_sub_field('hero_cta_text'); ?></a>
      </div>
    <?php endwhile; ?>
    <?php while(have_rows('hero_cta_secondary')): the_row(); ?>
      <?php $hero_cta_secondary_url = get_sub_field('hero_cta_secondary_url'); ?>
      <div class="hero-cta-secondary">
        <a class="button buttonSecondary buttonSmall" role="button" href="<?php echo $hero_cta_secondary_url; ?>"><?php the_sub_field('hero_cta_secondary_text'); ?></a>
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
        <a class="button buttonPrimary buttonLarge" role="button" href="#video-modal" rel="modal:open"><?php the_sub_field('hero_video_modal_primary_text'); ?></a>
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
        <a class="button buttonSecondary buttonSmall" role="button" href="#video-modal" rel="modal:open"><?php the_sub_field('hero_video_modal_secondary_text'); ?></a>
      </div>
    <?php endwhile; ?>
    <?php while(have_rows('hero_form_modal_primary')): the_row(); ?>
      <div class="modal modalForm" id="form-modal" style="display:none;">
        <div class="modal-inner">
          <?php include("forms/forms.php");?>
        </div>
      </div>
      <div class="hero-cta-primary">
        <a class="button buttonPrimary buttonLarge" role="button" href="#form-modal" rel="modal:open"><?php the_sub_field('hero_form_modal_primary_text'); ?></a>
      </div>
    <?php endwhile; ?>
    <?php while(have_rows('hero_form_modal_secondary')): the_row(); ?>
      <div class="modal modalForm" id="form-modal" style="display:none;">
        <div class="modal-inner">
          <?php include("forms/forms.php");?>
        </div>
      </div>
      <div class="hero-cta-secondary">
        <a class="button buttonSecondary buttonSmall" role="button" href="#form-modal" rel="modal:open"><?php the_sub_field('hero_form_modal_secondary_text'); ?></a>
      </div>
    <?php endwhile; ?>
  </div>
</section>