<section class="videoFeature">
  <div class="videoFeature-container">
    <h3 class="videoFeature-intro"><?php the_sub_field('video_intro'); ?></h3>
    <h6 class="videoFeature-subintro"><?php the_sub_field('video_intro_sub'); ?></h6>
    <div class="videoFeature-video">
      <div class="videoFeature-video-inner">
        <?php $video_poster = get_sub_field('video_poster'); ?>
        <?php $video_id = get_sub_field('youtube_id'); ?>
        <div class="player" id="<?php echo $video_id; ?>"></div>
        <div class="videoFeature-video-poster">
            <img class="videoFeature-video-poster-image" src="<?php echo $video_poster['url']; ?>"/>
        </div>
        <a class="videoFeature-video-playButton" href="" role="button" id="<?php echo $video_id; ?>"><?php include( get_template_directory() . '/images/play_button.svg'); ?></a>
      </div>
    </div>

    <?php while(have_rows('video_cta')): the_row(); ?>
      <?php $video_cta_url = get_sub_field('video_cta_url'); ?>
      <a class="video-cta button buttonPrimary buttonLarge" role="button" href="<?php echo $video_cta_url; ?>"><?php the_sub_field('video_cta_text'); ?></a>
    <?php endwhile; ?>
  </div>
</section>