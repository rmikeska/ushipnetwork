<?php $section_bg_color = get_sub_field('thumbnail_grid_background_color'); ?>

<section class="thumbnailGrid <?php echo $section_bg_color; ?>" <?php if(get_sub_field('thumbnail_grid_id')): ?>id="<?php the_sub_field('thumbnail_grid_id'); ?>"<?php endif; ?>>
  <div class="thumbnailGrid-container">
    <?php if(get_sub_field('thumbnail_grid_intro')): ?>
      <h3 class="thumbnailGrid-intro"><?php the_sub_field('thumbnail_grid_intro'); ?></h3>
    <?php endif; ?>
    <?php if(get_sub_field('thumbnail_grid_intro_sub')): ?>
      <h6 class="thumbnailGrid-subintro"><?php the_sub_field('thumbnail_grid_intro_sub'); ?></h6>
    <?php endif; ?>
    <div class="thumbnailGrid-row">
    <?php while(have_rows('thumbnail_grid_content')): the_row(); ?>
      <div class="thumbnailGrid-block">
        <?php if(get_sub_field('thumbnail_grid_image')): ?>
          <?php $thumbnail_grid_image_object = get_sub_field('thumbnail_grid_image'); ?>
          <?php $thumbnail_grid_image_size = 'post-thumb'; ?>
          <?php $thumbnail_grid_image_url = $thumbnail_grid_image_object['sizes'][$thumbnail_grid_image_size]; ?>
          <div class="thumbnailGrid-image" style="background-image: url('<?php echo $thumbnail_grid_image_url; ?>');"></div>
        <?php endif; ?>
        <div class="thumbnailGrid-text"><?php the_sub_field('thumbnail_grid_text'); ?></div>
        <?php if(get_sub_field('thumbnail_grid_button_type') == 'standard_link'): ?>
          <?php while(have_rows('thumbnail_grid_tertiary_callout')): the_row(); ?>
            <?php $thumbnail_grid_tertiary_url = get_sub_field('thumbnail_grid_tertiary_callout_url'); ?>
            <a class="tertiaryLink tertiaryLinkDark" type="button" href="<?php echo $thumbnail_grid_tertiary_url; ?>" onclick="<?php the_sub_field('thumbnail_grid_tertiary_callout_onclick'); ?>"><?php the_sub_field('thumbnail_grid_tertiary_callout_text'); ?><?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
          <?php endwhile; ?>
        <?php elseif (get_sub_field('thumbnail_grid_button_type') == 'video_modal'): ?>
          <?php while(have_rows('thumbnail_grid_video_modal')): the_row(); ?>
            <?php $video_modal_iframe = get_sub_field('thumbnail_grid_video_modal_iframe'); ?>
            <div class="modal modalVideo" style="display:none;">
              <div class="modal-inner">
                <?php echo $video_modal_iframe; ?>
              </div>
            </div>
            <a class="tertiaryLink tertiaryLinkDark thumbnailGrid-modalButton" type="button" rel="modal:open" onclick="<?php the_sub_field('thumbnail_grid_video_modal_onclick'); ?>"><?php the_sub_field('thumbnail_grid_video_modal_text'); ?><?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>