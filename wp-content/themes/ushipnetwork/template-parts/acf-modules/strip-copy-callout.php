<?php $section_bg_color = get_sub_field('strip_copy_callout_background_color'); ?>

<section class="stripCopyCallout <?php echo $section_bg_color; ?>" <?php if(get_sub_field('strip_copy_callout_id')): ?>id="<?php the_sub_field('strip_copy_callout_id'); ?>"<?php endif; ?>>
  <div class="stripCopyCallout-container">
    <h4 class="stripCopyCallout-text"><?php the_sub_field('strip_copy_callout_text'); ?></h4>
  </div>
</section>