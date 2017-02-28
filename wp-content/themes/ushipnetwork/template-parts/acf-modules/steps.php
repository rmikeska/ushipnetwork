<?php $section_bg_color = get_sub_field('steps_background_color'); ?>

<section class="steps <?php echo $section_bg_color; ?>" <?php if(get_sub_field('steps_id')): ?>id="<?php the_sub_field('steps_id'); ?>"<?php endif; ?>>
  <div class="steps-container">
    <h3 class="steps-intro"><?php the_sub_field('steps_intro'); ?></h3>
    <ol class="steps-list">
      <?php while(have_rows('steps_item')): the_row(); ?>
        <li class="steps-list-item"><?php the_sub_field('steps_item_text'); ?></li>
      <?php endwhile; ?>
    </ol>
  </div>
</section>