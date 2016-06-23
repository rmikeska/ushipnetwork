<section class="videoFeature">
  <div class="videoFeature-container">
    <h3 class="videoFeature-intro"><?php the_sub_field('video_intro'); ?></h3>
    <h6 class="videoFeature-subintro"><?php the_sub_field('video_intro_sub'); ?></h6>
    <div class="videoFeature-video">
      <div class="videoFeature-video-inner">

        <?php $video_poster = get_sub_field('video_poster'); ?>
        <?php $video_id = get_sub_field('youtube_id'); ?>
        <script type="text/javascript">

        jQuery(document).ready(function ($) {
            var tag = document.createElement('script');
            tag.src = "//www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            var player;

            onYouTubeIframeAPIReady = function () {
                player = new YT.Player('player', {
                    videoId: "<?php echo $video_id; ?>",
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

            var t = document.getElementById ("videoFeature-video-poster-image");
            t.src = "<?php echo $video_poster['url']; ?>";

            onPlayerStateChange = function (event) {
                if (event.data == YT.PlayerState.ENDED) {
                    $('.videoFeature-video-playButton').fadeIn('normal');
                }
            }

            $(document).on('click', '.videoFeature-video-playButton', function () {
                $(this).hide();
                $("#player").show();
                $("#videoFeature-video-poster").hide();
                player.playVideo();
            });
        })
        </script>

        <div id="player"></div>
        <div id="videoFeature-video-poster" class="videoFeature-video-poster">
            <img class="videoFeature-video-poster-image" id="videoFeature-video-poster-image" />
        </div>
        <a class="videoFeature-video-playButton"><?php include( get_template_directory() . '/images/play_button.svg'); ?></a>
      </div>
    </div>

    <?php while(have_rows('video_cta')): the_row(); ?>
      <?php $video_cta_url = get_sub_field('video_cta_url'); ?>
      <a class="video-cta button buttonPrimary buttonLarge" role="button" href="<?php echo $video_cta_url; ?>"><?php the_sub_field('video_cta_text'); ?></a>
    <?php endwhile; ?>
  </div>
</section>