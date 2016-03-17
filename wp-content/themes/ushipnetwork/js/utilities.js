jQuery(document).ready(function ($) {

    // Page content padding if secondary nav exists

    if ($('.secondary-menu').length > 0) {
        $('.pageContent').addClass('subNavPush');
    }



    // Blog home effects

    $('.postThumb').hide().each(function (i) {
        $(this).delay((i++) * 100).fadeTo(300, 1);
    });

    $('div.postsGroup .postsGroup-container:not(:first-child)').hide();

    $('.categoryMenu-list li a').click(function () {

        var elementClassName = $(this).attr('class');

        $('div.' + elementClassName).show().siblings('div.postsGroup-container').hide();

        $('div.' + elementClassName).children('.postThumb').hide().each(function (i) {
            $(this).delay((i++) * 100).fadeTo(300, 1);
        });

        $(this).parent().addClass('categoryMenu-active').siblings().removeClass('categoryMenu-active');
    });



    // Open share icons in new window

    var socialLink = $('.share-icon');

    socialLink.live('click', function () {
        newwindow = window.open($(this).attr('href'),'','height=450,width=700');
        if (window.focus) {newwindow.focus()}
        return false;
    });



    // Delay HIW home page panel hover effects. Remove hover syles for mobile

    $(window).on('load resize', function () {
        if ($(window).width() < 769) {
            $('.splitScreen-panel').removeClass('panelHover');
        } else {
            setTimeout(function () {
                $('.splitScreen-panel').addClass('panelHover');
            }, 1000);
        }
    });



    // Tabbed Page Template Effects

    $('.tabbedPageWrapper .tabbedPage:not(:first-child)').hide();

    $('.tabbedPageMenu-list li:first-child').addClass('tabbedPage-active');

    $('.tabbedPageMenu-list li a').click(function () {

        var elementClassName = $(this).attr('class');

        $('div.' + elementClassName).show().siblings('div.tabbedPage').hide();

        $('div.' + elementClassName).children().hide().each(function (i) {
            $(this).delay((i++) * 100).fadeTo(300, 1);
        });

        $(this).parent().addClass('tabbedPage-active').siblings().removeClass('tabbedPage-active');
    });

    if (window.location.hash) {

        var hash = window.location.hash;
        var hashValue = window.location.hash.replace('#', '');

        $('div.tabbedPage').each(function () {
            if ($(this).attr('id') == hashValue) {
                $(this).show().siblings('div.tabbedPage').hide();
            }
        });

        $('.tabbedPageMenu-list li a').each(function () {
            if ($(this).attr('href') == hash) {
                $(this).parent().addClass('tabbedPage-active').siblings().removeClass('tabbedPage-active');
            }
        });
    }



    // Intro Slide Module

    if ($('.introSlide-slideshow-slide').length > 1) {

        $('.introSlide-slideshow > .introSlide-slideshow-slide:first-child').show();

        setInterval(function () {
            $('.introSlide-slideshow > .introSlide-slideshow-slide:first')
            .fadeOut(3000)
            .next()
            .fadeIn(3000)
            .end()
            .appendTo('.introSlide-slideshow');
        },  5000);
    }
})