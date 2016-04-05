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



    // Intro slide module slideshow effects
    $('.introSlide-slideshow > .introSlide-slideshow-slide:first-child').show();

    setInterval(function () {
        $('.tabbedPage .introSlide .introSlide-container .introSlide-slideshow').each(function () {
            if ($(this).find('div.introSlide-slideshow-slide').length > 1) {
                $(this).find('div.introSlide-slideshow-slide:first')
                .fadeOut(500)
                .next()
                .fadeIn(500)
                .end()
                .appendTo($(this));
            }
        });
    },  3000);



    // Tabbed page hide/show effects for tab menu
    $('.tabbedPageWrapper .tabbedPage:not(:first-child)').hide();

    $('.tabbedPageMenu-list li:first-child').addClass('tabbedPage-active');

    $(window).on('hashchange', function (e) {

        e.preventDefault();

        var x = window.pageXOffset,
            y = window.pageYOffset;

        $(window).one('scroll', function () {
            window.scrollTo(x, y);
        })

        var hashValue = window.location.hash.replace('#', '');

        var hashActual = window.location.hash;

        $('div.tabbedPage').each(function () {
            if ($(this).hasClass(hashValue)) {
                $(this).show().siblings('div.tabbedPage').hide();
            }
        });

        $('.tabbedPageMenu-list li a').each(function () {
            if ($(this).attr('href') == hashActual) {
                $(this).parent().addClass('tabbedPage-active').siblings().removeClass('tabbedPage-active');
            }
        });

        var firstHash = $('.tabbedPageMenu-list li:first-child a').attr('class');

        if (window.location.hash == '') {
            window.location.hash = firstHash;
        }

        $('.tabbedPageWrapper .bookend-link').click(function () {
            $(window).scrollTop(0);
        });

    }).trigger('hashchange');
})