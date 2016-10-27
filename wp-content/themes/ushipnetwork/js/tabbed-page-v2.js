(function ($) {



    var videoArray = [];

    // Video.js player
    function videoPlayer () {
        $('.tabContent .video-js').each(function () {
            vidId = $(this).attr('id');
            videoArray.push(this);
            vidURL = 'https://www.youtube.com/watch?v=' + vidId;
            var vidPlayer = videojs(vidId, {
                "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": vidURL}]
            });
        });
    }



    // Add classes for slideshow number
    function slideNumber () {

        $('.introSlide-slideshow-slide').show();

        $('.introSlide-slideshow').each(function () {
            if ($(this).children().length == 4) {
                $(this).addClass('slides4');
            } else if ($(this).children().length == 3) {
                $(this).addClass('slides3');
            } else if ($(this).children().length == 2) {
                $(this).addClass('slides2');
            } else if ($(this).children().length == 1) {
                $(this).addClass('slides1');
            }
        });
    }



    // Add classes to larger tab menus for specific wide breakpoints
    $('.tabbedPageMenu-list').each(function () {
        if ($(this).children().length == 5) {
            $(this).addClass('tabs5');
        } else if ($(this).children().length == 6) {
            $(this).addClass('tabs6');
        } else if ($(this).children().length == 7) {
            $(this).addClass('tabs7');
        }
    });



    // Fade animation for the body content
    function animatePageContent () {
        $('.bodyContent').children().hide().each(function (i) {
            $(this).delay((i++) * 100).fadeTo(300, 1);
        });
    }



    // Find and load the first page tab
    function loadFirstPage () {

        if (videoArray.length != 0) {
            videoArray.forEach(function(e) {
                videojs(e).dispose();
            });
        }

        var firstPage = $('.tabbedPageMenu-list:first-child a').attr('href');

        $.get(firstPage).done(function (data) {
            $('.tabContent').html($(data).find('.bodyContent'));
            videoPlayer();
            slideNumber();
            animatePageContent();
        })
    }



    // Handle intitial, stateless page load
    $(window).load(function () {

        if (videoArray.length != 0) {
            videoArray.forEach(function(e) {
                videojs(e).dispose();
            });
        }

        videoPlayer();
        slideNumber();

        // Set global variable on page load to determine if page has a history state
        var firstLoad = 1;

        $('.tabbedPageMenu-list a').each(function () {

            var hrefMatch = $(this).attr('href');

            if (window.location.href == hrefMatch) {
                $(this).parent().addClass('tabbedPage-active').siblings().removeClass('tabbedPage-active');
                firstLoad = 0;
            } else if (window.location.href == parentPageURL) {
                $(this).parent(':first-child').addClass('tabbedPage-active').siblings().removeClass('tabbedPage-active');
            }
        });

        // Load first page if state is not found
        if (firstLoad == 1) {
            loadFirstPage();
        }
    });



    // Load page tabs, add/remove active states
    var loadContent = function (url) {

        if (videoArray.length != 0) {
            videoArray.forEach(function(e) {
                videojs(e).dispose();
            });
        }

        $.get(url).done(function (data) {
            $('.tabContent').html($(data).find('.bodyContent'));
            videoPlayer();
            slideNumber();
            animatePageContent();
        })

        $('.tabbedPageMenu-list li').removeClass('tabbedPage-active');
        $('.tabbedPageMenu-list li a[href="' + url + '"]').parent().addClass('tabbedPage-active');
    };



    // Initiate history.pushState on click of tab menu links
    $(document).on('click', '.tabbedPageMenu-list a', function (e) {

        e.preventDefault();

        url = $(this).attr('href');
        anchorText = $(this).text();
        title = anchorText + ' - ' + parentPageTitle;

        history.pushState({url: url,title: title}, title, url);

        document.title = title;

        loadContent(url);

        return false;
    });



    // Handle back/forward button actions
    $(window).on('popstate', function (e) {
        var state = e.originalEvent.state;
        if (state !== null) {
            document.title = state.title;
            loadContent(state.url);
        } else {
            document.title = siteTitle + ' - ' + parentPageTitle;
            $('.tabbedPageMenu-list li:first-child').addClass('tabbedPage-active').siblings().removeClass('tabbedPage-active');
            loadFirstPage();
        }
    });

})(jQuery);