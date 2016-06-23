<section class="videoFeature">
  <div class="videoFeature-container">
    <h3 class="videoFeature-intro"><?php the_sub_field('video_intro'); ?></h3>
    <h6 class="videoFeature-subintro"><?php the_sub_field('video_intro_sub'); ?></h6>
    <?php $video_poster = get_sub_field('video_poster'); ?>
    <?php $video_url = get_sub_field('youtube_url'); ?>
    <div class="videoFeature-video">
    <script type="text/javascript">

    jQuery(document).ready(function ($) {
      var tag = document.createElement('script');
      tag.src = "//www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;

      onYouTubeIframeAPIReady = function () {
          player = new YT.Player('player', {
              height: '244',
              width: '434',
              videoId: "<?php echo $video_url; ?>",
              playerVars: {
                  'autoplay': 0,
                  'rel': 0,
                  'showinfo': 0
              },
              events: {
                  'onStateChange': onPlayerStateChange
              }
          });
      }

      var p = document.getElementById ("player");
      $(p).hide();

      var t = document.getElementById ("thumbnail");
      t.src = "<?php echo $video_poster['url']; ?>";

      onPlayerStateChange = function (event) {
          if (event.data == YT.PlayerState.ENDED) {
              $('.start-video').fadeIn('normal');
          }
      }
    })
    </script>

    <div id="player"></div>
    <div id="thumbnail_container" class="thumbnail_container">
        <img class="thumbnail" id="thumbnail" />
    </div>
    <a class="start-video"><img width="64" src="https://ushiplearn.staging.wpengine.com/wp-content/themes/ushipnetwork/images/play_button.svg"></a>
    </div>
    <?php while(have_rows('video_cta')): the_row(); ?>
      <?php $video_cta_url = get_sub_field('video_cta_url'); ?>
      <a class="video-cta button buttonPrimary buttonLarge" role="button" href="<?php echo $video_cta_url; ?>"><?php the_sub_field('video_cta_text'); ?></a>
    <?php endwhile; ?>
  </div>
</section>