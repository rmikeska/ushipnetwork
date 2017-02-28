<?php $logo_pile_image = get_sub_field('logo_pile_image'); ?>

<section class="logoPile" <?php if(get_sub_field('logo_pile_id')): ?>id="<?php the_sub_field('logo_pile_id'); ?>"<?php endif; ?>>
  <div class="logoPile-container">
    <?php if(get_sub_field('logo_pile_intro')): ?>
    <h3 class="logoPile-intro"><?php the_sub_field('logo_pile_intro'); ?></h3>
    <?php endif; ?>
    <img class="logoPile-image" src="<?php echo $logo_pile_image['url']; ?>">
  </div>
</section>