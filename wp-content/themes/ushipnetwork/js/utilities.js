jQuery(document).ready(function ($) {

    // If there are query strings present in the URL, append them to any uship domain page links
    if (window.location.search.length) {
        $("a[href*='uship.com']").each(function () {
            var ushipHref = $(this).attr('href');

            if (ushipHref.indexOf('?') !== -1) {
                ushipHref += '&' + location.search.replace(/^\?/, '');
            } else {
                ushipHref += location.search;
            }

            $(this).attr('href', ushipHref);
        });
    }



    // Blog Show/Hide Post Thumbnails
    $('.postThumb').hide().each(function (i) {
        $(this).delay((i++) * 100).fadeTo(300, 1);
    });

    $('div.postsGroup .postsGroup-container:not(:first-child)').hide();

    // Create Mobile Dropdown Filter
    $('<select class="sortBy" />').appendTo('.categoryMenu');

    // Convert List Items to Options
    $('.categoryMenu li a').each(function () {
        var el = $(this);
        $('<option />', {
            'value'   : el.attr('class'),
            'text'    : el.text()
        }).appendTo('.categoryMenu select');
    });

    // Set first option to :selected
    $('.categoryMenu select option:first').attr('selected', 'selected');

    // Blog Category Menu - Desktop
    $('.categoryMenu-list li a').click(function () {

        var elementClassName = $(this).attr('class');

        $('div.' + elementClassName).show().siblings('div.postsGroup-container').hide();

        $('div.' + elementClassName).children('.postThumb').hide().each(function (i) {
            $(this).delay((i++) * 100).fadeTo(300, 1);
        });

        $(this).parent().addClass('categoryMenu-active').siblings().removeClass('categoryMenu-active');

        $('.categoryMenu select option').each(function () {
            if ($(this).val() == elementClassName) {
                $(this).attr('selected','selected');
                $(this).siblings().removeAttr('selected');
            }
        });
    });

    // Blog Category Menu - Mobile
    $('.categoryMenu select').change(function () {

        var elementClassName = $(this).attr('value');

        $('div.' + elementClassName).show().siblings('div.postsGroup-container').hide();

        $('div.' + elementClassName).children('.postThumb').hide().each(function (i) {
            $(this).delay((i++) * 100).fadeTo(300, 1);
        });

        $('.categoryMenu-list li a').each(function () {
            if ($(this).hasClass(elementClassName)) {
                $(this).parent().addClass('categoryMenu-active').siblings().removeClass('categoryMenu-active');
            }
        });
    });



    // Video Modal
    $('a[href="#video-modal"]').click(function (event) {
        event.preventDefault();
        $(this).modal({
            fadeDuration: 100
        });
        return false;
    });



    // Form Modal
    $('a[href="#form-modal"]').click(function (event) {
        event.preventDefault();
        $(this).modal({
            fadeDuration: 100
        });
        return false;
    });



    // Focus elements within modal for tab accessibility
    $('.hero .modal').on($.modal.OPEN, function (event, modal) {
        $('form input:first, iframe').focus();
        $('.pageWrapper').find('a, button, object, input, select, textarea').attr('tabindex', '-1');
    });

    $('.hero .modal').on($.modal.CLOSE, function (event, modal) {
        $('.pageWrapper').find('a, button, object, input, select, textarea').removeAttr('tabindex');
        $('main a:first').focus();
    });



    // Give unique id to video modals in order to have multiple on one page
    $('.thumbnailGrid .modalVideo').each(function (i) {
        $(this).attr('id', 'video-modal-' + (i + 1));
    });

    $('.thumbnailGrid-modalButton').each(function (i) {
        $(this).attr('href', '#video-modal-' + (i + 1));
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
    $('.page-template-default .introSlide-slideshow-slide:first-child').show();

    setInterval(function () {
        $('.page-template-default .introSlide-slideshow').each(function () {
            if ($(this).find('.introSlide-slideshow-slide').length > 1) {
                $(this).find('.introSlide-slideshow-slide:first')
                .fadeOut(500)
                .next()
                .fadeIn(500)
                .end()
                .appendTo($(this));
            }
        });
    },  3000);



    // Add .active class to How it Works nav item when on prod and staging Learn sites
    $(function () {
        if ((window.location.hostname === 'learn.uship.com') || (window.location.hostname === 'ushiplearn.wpengine.com') || (window.location.hostname === 'ushiplearn.staging.wpengine.com')) {
            $('.siteNav-link.sel-navLink-HowItWorks .siteNav-linkText').addClass('active');
        }
    });



    // Add class to hero if co-branded strip is present
    $('.hero').each(function () {
        if ($(this).children('.cobrandedStrip').length > 0) {
            $(this).addClass('cobrandedPush');
        }
    });



    // Add class to parent of an iframe embed for responsive styling
    $('.entry-content iframe').parent().addClass('embed-container');



    // Add class to .bodyContent if the secondary menu is active in order to adjust jump link positioning
    if ($('#secondary-menu').length) {
        $('.bodyContent').addClass('subnavPush');
    }



    // VideoJS setup for non tabbed-page-v2 template videos
    $('.page-template-default .video-js, .tabbedPage .video-js').each(function () {
        vidId = $(this).attr('id');
        vidURL = 'https://www.youtube.com/watch?v=' + vidId;
        var vidPlayer = videojs(vidId, {
            "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": vidURL}]
        });
    });



    // Quick and diry fix to make CycleTrader iframed partner page links open in a new tab. Need to add formal acf pro option
    $('.page-id-5725 a').attr('target', '_blank');
})