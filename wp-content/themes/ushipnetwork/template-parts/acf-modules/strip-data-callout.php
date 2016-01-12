<section class="stripDataCallout">
  <div class="stripDataCallout-container">
    <?php while(have_rows('strip_data_callout_content')): the_row(); ?>
      <div class="stripDataCallout-block">
        <div class="stripDataCallout-block-inner">
          <span class="stripDataCallout-block-value"><?php the_sub_field('strip_data_callout_block_value'); ?></span>
          <span class="stripDataCallout-block-caption"><?php the_sub_field('strip_data_callout_block_caption'); ?></span>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>