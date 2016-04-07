<?php $logo_pile_image = get_sub_field('logo_pile_image'); ?>

<section class="logoPile">
  <div class="logoPile-container">
    <h3 class="logoPile-intro"><?php the_sub_field('logo_pile_intro'); ?></h3>
    <img class="logoPile-image" src="<?php echo $logo_pile_image['url']; ?>">
  </div>
</section>