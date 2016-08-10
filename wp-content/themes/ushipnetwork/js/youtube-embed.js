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
    });
})