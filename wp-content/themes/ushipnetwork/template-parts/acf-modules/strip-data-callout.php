<section class="stripDataCallout">
  <div class="stripDataCallout-container">
    <?php while(have_rows('strip_data_callout_block')): the_row(); ?>
      <?php while(have_rows('strip_data_callout_block_content')): the_row(); ?>

        <div class="stripDataCallout-block">
          <div class="stripDataCallout-block-inner">
            <span class="stripDataCallout-block-number"><?php the_sub_field('strip_data_callout_block_content_number'); ?></span>
            <span class="stripDataCallout-block-title"><?php the_sub_field('strip_data_callout_block_content_title'); ?></span>
          </div>
        </div>

      <?php endwhile; ?>
    <?php endwhile; ?>
  </div>
</section>