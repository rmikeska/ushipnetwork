<section class="longFormContent" <?php if(get_sub_field('long_form_content_id')): ?>id="<?php the_sub_field('long_form_content_id'); ?>"<?php endif; ?>>
  <div class="longFormContent-container">
  <?php while(have_rows('long_form_content_content')): the_row(); ?>
    <div class="longFormContent-text"><?php the_sub_field('long_form_content_text'); ?></div>
  <?php endwhile; ?>
  </div>
</section>