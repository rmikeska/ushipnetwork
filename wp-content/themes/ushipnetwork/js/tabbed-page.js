jQuery(document).ready(function ($) {

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
                $(this).children().hide().each(function (i) {
                    $(this).delay((i++) * 100).fadeTo(300, 1);
                });
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