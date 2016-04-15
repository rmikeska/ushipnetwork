jQuery(document).ready(function ($) {

    // Page content padding if secondary nav exists
    if ($('.secondary-menu').length > 0) {
        $('.pageContent').addClass('subNavPush');
    }



    // Add button classes to ALM button
    $('button.alm-load-more-btn').addClass('button buttonPrimary buttonLarge');



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



    // Hide footer until user scrolls on Split Screen Template
    // $(window).scroll(function () {
    //     $('.page-template-split-screen .footerNew').show($(document).scrollTop() > 100);
    // });
})