<section class="videoFeature">
  <div class="videoFeature-container">
    <h3 class="videoFeature-intro"><?php the_sub_field('video_intro'); ?></h3>
    <h6 class="videoFeature-subintro"><?php the_sub_field('video_intro_sub'); ?></h6>
    <div class="videoFeature-video">
      <div class="videoFeature-video-inner">
        <?php $video_poster = get_sub_field('video_poster'); ?>
        <?php $video_id = get_sub_field('youtube_id'); ?>
        <iframe id="player" src="//www.youtube.com/embed/<?php echo $video_id; ?>?showinfo=0" frameborder="0" allowfullscreen=""></iframe>
      </div>
    </div>

    <?php while(have_rows('video_cta')): the_row(); ?>
      <?php $video_cta_url = get_sub_field('video_cta_url'); ?>
      <a class="video-cta button buttonPrimary buttonLarge" role="button" href="<?php echo $video_cta_url; ?>"><?php the_sub_field('video_cta_text'); ?></a>
    <?php endwhile; ?>
  </div>
</section>