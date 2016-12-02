<?php $section_bg_color = get_sub_field('text_columns_background_color'); ?>

<section class="textColumns <?php echo $section_bg_color; ?>" <?php if(get_sub_field('text_columns_id')): ?>id="<?php the_sub_field('text_columns_id'); ?>"<?php endif; ?>>
  <div class="textColumns-container">
  <?php if(get_sub_field('text_columns_intro')): ?>
    <h3 class="textColumns-intro"><?php the_sub_field('text_columns_intro'); ?></h3>
  <?php endif; ?>
  <?php if(get_sub_field('text_columns_intro_sub')): ?>
    <h6 class="textColumns-subintro"><?php the_sub_field('text_columns_intro_sub'); ?></h6>
  <?php endif; ?>
  <div class="textColumns-group">
    <?php while(have_rows('text_columns_item')): the_row(); ?>
    <div class="textColumns-group-item">
      <div class="textColumns-group-item-inner">
        <?php if(get_sub_field('text_columns_item_title')): ?>
          <h6 class="textColumns-group-item-title"><?php the_sub_field('text_columns_item_title'); ?></h6>
        <?php endif; ?>
        <div class="textColumns-group-item-content"><?php the_sub_field('text_columns_item_content'); ?></div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
  </div>
</section>