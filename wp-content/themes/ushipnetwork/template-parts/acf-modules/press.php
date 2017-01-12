<section class="pressStrip" <?php if(get_sub_field('press_id')): ?>id="<?php the_sub_field('press_id'); ?>"<?php endif; ?>>
  <div class="pressStrip-container">
    <div class="pressStrip-column">
      <h3 class="pressStrip-column-title">Press Releases</h3>
      <?php query_posts('category_name=press-release&posts_per_page=3'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="pressStrip-block">
          <div class="pressStrip-block-inner">
            <div class="post-caption">Latest&nbsp;&nbsp;|&nbsp;&nbsp;<span class="post-time"><?php the_time('M j, Y'); ?></span></div>
            <a class="post-title" href="<?php the_permalink();?>"><?php the_title(); ?></a>
          </div>
        </div>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
      <a class="tertiaryLink tertiaryLinkDark" type="button" href="/press-release/">See All Press Releases<?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
    </div>
    <div class="pressStrip-column">
      <h3 class="pressStrip-column-title">Media Coverage</h3>
      <?php query_posts('category_name=media-coverage&posts_per_page=3'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="pressStrip-block">
          <div class="pressStrip-block-inner">
          <div class="post-caption">
            <?php
            $posttags = get_the_tags();
            $count=0;
            if ($posttags) {
              foreach($posttags as $tag) {
                $count++;
                if (1 == $count) {
                  echo $tag->name . '&nbsp;&nbsp;|&nbsp;&nbsp;';
                }
              }
            }
            ?>
            <span class="post-time"><?php the_time('M j, Y'); ?></span></div>
            <a class="post-title" href="<?php the_permalink();?>"><?php the_title(); ?></a>
          </div>
        </div>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
      <a class="tertiaryLink tertiaryLinkDark" type="button" href="/media-coverage/">See All Media Coverage<?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
    </div>
  </div>
</section>