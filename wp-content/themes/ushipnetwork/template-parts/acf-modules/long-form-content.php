<section class="longFormContentWithDivider">
  <div class="longFormContentWithDivider-container">
    <?php while(have_rows('long_form_content_with_divider_content')): the_row(); ?>

    <div class="longFormContentWithDivider-text"><?php the_sub_field('long_form_content_with_divider_content_text_block'); ?></div>

    <?php endwhile; ?>
  </div>
</section>