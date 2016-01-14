<?php $hero_size = get_sub_field('hero_size'); ?>
<?php $hero_image = get_sub_field('hero_image'); ?>

<section class="hero <?php echo $hero_size; ?>" style="background-image: url('<?php echo $hero_image['url']; ?>');">
  <div class="hero-container">
    <h1 class="hero-headline"><?php the_sub_field('hero_headline'); ?></h1>
    <?php if(get_sub_field('hero_subheadline')): ?>
      <h5 class="hero-subheadline"><?php the_sub_field('hero_subheadline'); ?></h5>
    <?php endif; ?>
    <?php while(have_rows('hero_cta')): the_row(); ?>
      <?php $hero_cta_url = get_sub_field('hero_cta_url'); ?>
      <a class="hero-cta buttonGreen buttonLarge" href="<?php echo $hero_cta_url; ?>"><?php the_sub_field('hero_cta_text'); ?></a>
    <?php endwhile; ?>
  </div>
</section>