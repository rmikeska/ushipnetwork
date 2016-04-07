<section class="videoFeature">
  <div class="videoFeature-container">
    <h3 class="videoFeature-intro"><?php the_sub_field('video_intro'); ?></h3>
    <h6 class="videoFeature-subintro"><?php the_sub_field('video_intro_sub'); ?></h6>
    <?php $video_poster = get_sub_field('video_poster'); ?>
    <?php if(get_sub_field('video_file') == "video_ritchie_brothers"): ?>
      <div class="videoFeature-video">
        <video class="video-js" controls preload="auto" poster="<?php echo $video_poster['url']; ?>" data-setup="{}">
          <source src="http://learn.uship.com/wp-content/uploads/never-gonna-give-you-up.mp4" type='video/mp4'>
        </video>
      </div>
    <?php elseif (get_sub_field('video_file') == "video_red_rooster_antiques"): ?>
      <div class="videoFeature-video">
        <video class="video-js" controls preload="auto" poster="<?php echo $video_poster['url']; ?>" data-setup="{}">
          <source src="https://learn.uship.com/wp-content/uploads/never-gonna-give-you-up.mp4" type='video/mp4'>
        </video>
      </div>
    <?php endif; ?>
    <?php while(have_rows('video_cta')): the_row(); ?>
      <?php $video_cta_url = get_sub_field('video_cta_url'); ?>
      <a class="video-cta buttonGreenTransparent buttonLarge" href="<?php echo $video_cta_url; ?>"><?php the_sub_field('video_cta_text'); ?></a>
    <?php endwhile; ?>
  </div>
</section>
