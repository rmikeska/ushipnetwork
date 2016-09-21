<section class="valueProps">
  <div class="valueProps-container">
    <?php while(have_rows('value_props_item')): the_row(); ?>
      <div class="valueProps-item">
        <div class="valueProps-item-icon">
          <?php include("value-props-icons.php");?>
        </div>
        <div class="valueProps-item-text">
          <h5><?php the_sub_field('value_props_item_title'); ?></h5>
          <h5><a href="<?php the_sub_field('value_props_item_link_url'); ?>"><?php the_sub_field('value_props_item_link_text'); ?></a></h5>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>