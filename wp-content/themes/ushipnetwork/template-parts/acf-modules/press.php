<section class="pressStrip">
  <?php query_posts('category_name=press&posts_per_page=3'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="pressStrip-block">
      <div class="post-caption">Latest&nbsp;&nbsp;|&nbsp;&nbsp;<span class="post-time"><?php the_time('M j, Y'); ?></span></div>
      <a class="post-title" href="<?php the_permalink();?>"><?php the_title(); ?></a>
      <a class="emphasisLink" href="<?php the_permalink();?>">Read Press Release</a>
    </div>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
</section>