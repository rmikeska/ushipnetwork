<?php $section_bg_color = get_sub_field('text_block_background_color'); ?>

<section class="textBlock <?php echo $section_bg_color; ?>" <?php if(get_sub_field('text_block_id')): ?>id="<?php the_sub_field('text_block_id'); ?>"<?php endif; ?>>
  <div class="textBlock-container">
  <?php if(get_sub_field('text_block_intro')): ?>
    <h3 class="textBlock-intro"><?php the_sub_field('text_block_intro'); ?></h3>
  <?php endif; ?>
    <div class="textBlock-content"><?php the_sub_field('text_block_content'); ?></div>
  </div>
</section>