var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var frames = [].slice.call(document.querySelectorAll('.player'));

var playerInfoList = [];

for (var i = 0; i < frames.length; i++) {
    playerInfoList.push({
        id: frames[i].id,
        videoId: frames[i].id
    });
}

function onYouTubeIframeAPIReady () {
    if (typeof playerInfoList === 'undefined') return;

    for (var i = 0; i < playerInfoList.length; i++) {
        var curplayer = createPlayer(playerInfoList[i]);
        players[i] = curplayer;
    }
}

var players = new Array();

function createPlayer (playerInfo) {
    return new YT.Player(playerInfo.id, {
        videoId: playerInfo.videoId
    });
}

jQuery(document).ready(function ($) {

    // Hide custom video thumbnail and play button for iOS since it doesn't allow .playVideo() actions
    if (navigator.userAgent.match(/(iPod|iPhone|iPad)/i)) {
        $('.player').show();
        $('.videoFeature-video-playButton, .videoFeature-video-poster').hide();
    }

    // Play video on click or tab focus+enter of the play button and pause any other videos that are playing.
    $('.videoFeature-video-playButton').each(function () {
        $(this).on('click', function () {
            var curButtonId = $(this).attr('id');
            $(this).hide();
            $(this).siblings('.videoFeature-video-poster').hide();
            $(this).siblings('.player').show();
            $(players).each(function (i) {
                if (curButtonId == players[i].a.id) {
                    this.playVideo();
                } else {
                    this.pauseVideo();
                }
            });
        });

        $(this).bind('keyup', function (e) {
            var curButtonId = $(this).attr('id');
            if (e.keyCode === 13) {
                $(this).hide();
                $(this).siblings('.videoFeature-video-poster').hide();
                $(this).siblings('.player').show();
                $(players).each(function (i) {
                    if (curButtonId == players[i].a.id) {
                        this.playVideo();
                    } else {
                        this.pauseVideo();
                    }
                });
            }
        });
    });
})